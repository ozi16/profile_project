<?php
session_start();
include 'koneksi.php';
// jika button simpan di tekan
if (isset($_POST['simpan'])) {
    $nama     = $_POST['nama'];
    $keterangan    = $_POST['keterangan'];
    $link = $_POST['link'];

    // $_POST: form input name=''
    // $_GET : url ?param='nilai'
    // $_FILES: ngambil nilai dari input type file
    if (!empty($_FILES['foto']['name'])) {
        $nama_foto = $_FILES['foto']['name'];
        $ukuran_foto = $_FILES['foto']['size'];

        // png, jpg, jpeg
        $ext = array('png', 'jpg', 'jpeg', 'webp');
        $extFoto = pathinfo($nama_foto, PATHINFO_EXTENSION);

        // JIKA EXTENSI FOTO TIDAK ADA EXT YANG TERDAFTAR DI ARRAY EXT
        if (!in_array($extFoto, $ext)) {
            echo "Ext tidak ditemukan";
            die;
        } else {
            // pindahkan gambar dari tmp folder ke folder yang sudah kita buat
            move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);

            $insert = mysqli_query($koneksi, "INSERT INTO projects (nama_prj, keterangan, website_link, foto)
            VALUES ('$nama','$keterangan','$link','$nama_foto')");
        }
    } else {
        echo "fomo";
        die;
        $insert = mysqli_query($koneksi, "INSERT INTO projects (nama_prj, keterangan, website_link)
            VALUES ('$nama','$keterangan','$link')");
    }

    header("location:projects.php?tambah=berhasil");
}

$id  = isset($_GET['edit']) ? $_GET['edit'] : '';
$queryProject = mysqli_query($koneksi, "SELECT * FROM projects WHERE id ='$id'");
$rowProject   = mysqli_fetch_assoc($queryProject);


// jika button edit di klik

if (isset($_POST['edit'])) {
    $nama   = $_POST['nama'];
    $keterangan  = $_POST['keterangan'];
    $link = $_POST['link'];

    // jika password di isi sama user


    if (!empty($_FILES['foto']['name'])) {
        $nama_foto = $_FILES['foto']['name'];
        $ukuran_foto = $_FILES['foto']['size'];

        // png, jpg, jpeg
        $ext = array('png', 'jpg', 'jpeg', 'webp');
        $extFoto = pathinfo($nama_foto, PATHINFO_EXTENSION);

        // JIKA EXTENSI FOTO TIDAK ADA EXT YANG TERDAFTAR DI ARRAY EXT
        if (!in_array($extFoto, $ext)) {
            echo "Ext tidak ditemukan";
            die;
        } else {
            unlink('upload/' . $rowProject['foto']);
            // pindahkan gambar dari tmp folder ke folder yang sudah kita buat
            move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);

            $insert = mysqli_query($koneksi, "UPDATE projects SET nama_prj='$nama', nama_prj='$nama', keterangan='$keterangan', website_link='$link', foto='$nama_foto' WHERE id='$id'");
        }
    } else {

        $insert = mysqli_query($koneksi, "UPDATE projects SET nama_prj='$nama', nama_prj='$nama', keterangan='$keterangan', website_link='$link' WHERE id='$id'");
    }

    $update = mysqli_query($koneksi, "UPDATE projects SET nama_prj='$nama', keterangan='$keterangan', website_link ='$link' WHERE id='$id'");
    header("location:projects.php?ubah=berhasil");
}
?>


<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Projects</title>

    <?php include 'inc-admin/head.php' ?>
</head>

<body>
    <div
        class="flex h-screen bg-gray-50 dark:bg-gray-900"
        :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <?php include 'inc-admin/sidebar.php' ?>
        <!-- Mobile sidebar -->
        <!-- Backdrop -->


        <div class="flex flex-col flex-1 w-full">
            <!-- navbar start -->
            <?php include "inc-admin/navbar.php" ?>
            <!-- navbar end -->
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2
                        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        <?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> User
                    </h2>


                    <!-- General elements -->
                    <div
                        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

                        <form action="" method="post" enctype="multipart/form-data">

                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Judul</span>
                                <input
                                    name="nama"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="masukan Nama anda"
                                    value="<?php echo isset($_GET['edit']) ? $rowProject['nama_prj'] : '' ?>" />
                            </label>

                            <label class="block text-sm mt-4">
                                <span class="text-gray-700 dark:text-gray-400">keterangan</span>
                                <input
                                    name="keterangan"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="masukan nama anda"
                                    value="<?php echo isset($_GET['edit']) ? $rowProject['keterangan'] : '' ?>" />
                            </label>

                            <label class="block text-sm mt-4">
                                <span class="text-gray-700 dark:text-gray-400">website link</span>
                                <input
                                    name="link"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="masukan Password anda"
                                    value="<?php echo isset($_GET['edit']) ? $rowProject['website_link'] : '' ?>" />

                            </label>

                            <label class="block text-sm mt-4">
                                <span class="text-gray-700 dark:text-gray-400">Foto</span>
                                <input
                                    name="foto"
                                    type="file"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                            </label>


                            <button class="items-center text-sm px-4 py-2 bg-purple-600 mt-4 text-white font-medium border rounded-lg hover:bg-purple-700 " name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" type="submit">
                                Simpan
                            </button>

                        </form>
                    </div>




                </div>
            </main>
        </div>
    </div>
</body>
<?php

session_start();
include 'koneksi.php';

// munculkan / pilih sebuah atau semua kolom dari table user
$queryProjects = mysqli_query($koneksi, "SELECT * FROM projects");
// mysqli_fetch_assoc($query) = untuk menjadikan hasil query menjadi sebuah data (object,array)

// jika parameternya ada ?delete=nilai param
if (isset($_GET['delete'])) {
    $id = $_GET['delete']; //mengambil nilai params

    // query / perintah hapus
    $delete = mysqli_query($koneksi, "DELETE FROM projects  WHERE id ='$id'");
    header("location:projects.php?hapus=berhasil");
}
?>

<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>projects</title>

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
                        Projects
                    </h2>


                    <!-- With actions -->

                    <a href="tambah-projects.php" class=" items-center text-center text-sm  py-2 bg-purple-600 mt-4 text-white font-medium border rounded-lg hover:bg-purple-700 ">
                        Tambah
                    </a>
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">Judul</th>
                                        <th class="px-4 py-3">Keterangan</th>
                                        <th class="px-4 py-3">Website Link</th>
                                        <th class="px-4 py-3">Foto</th>
                                        <th class="px-4 py-3">action</th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    <?php while ($row = mysqli_fetch_assoc($queryProjects)) { ?>
                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <!-- judul -->
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div>
                                                        <p class="font-semibold"><?php echo $row['nama_prj']  ?></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- keterangan -->
                                            <td class="px-4 py-3 text-sm">
                                                <?php echo $row['keterangan'] ?>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                <?php echo $row['website_link'] ?>
                                            </td>
                                            <!-- foto -->
                                            <td class="px-4 py-3 text-sm">
                                                <img src="upload/<?php echo $row['foto'] ?>" width="70" alt="">
                                            </td>



                                            <td class="px-4 py-3">
                                                <div class="flex items-center space-x-4 text-sm">
                                                    <a
                                                        href="tambah-projects.php?edit=<?php echo $row['id'] ?>"
                                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                        aria-label="Edit">
                                                        <svg
                                                            class="w-5 h-5"
                                                            aria-hidden="true"
                                                            fill="currentColor"
                                                            viewBox="0 0 20 20">
                                                            <path
                                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                        </svg>
                                                    </a>
                                                    <a
                                                        href="projects.php?delete=<?php echo $row['id'] ?>"
                                                        onclick="return confirm('Apakah anda yakin akan menhapus data ini?')"
                                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                        aria-label="Delete">
                                                        <svg
                                                            class="w-5 h-5"
                                                            aria-hidden="true"
                                                            fill="currentColor"
                                                            viewBox="0 0 20 20">
                                                            <path
                                                                fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>




                </div>
            </main>
        </div>
    </div>
</body>
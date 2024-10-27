<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Sidebar with Container</title>

  <?php include "inc/head.php" ?>

</head>

<body class=" bg-white min-h-screen flex flex-col items-center">
  <!-- Container utama -->
  <div
    class=" container max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 flex-grow gap-4 p-4">

    <!-- Sidebar -->
    <?php include "inc/sidebar.php" ?>


    <!-- Konten Utama -->
    <?php
    //  untuk mendapatkan halaman yang diminta dari paramete URL
    $page = isset($_GET["page"]) ? ($_GET["page"]) : 'home';

    // memuat konten berdasrkan halaman yang dipilih
    switch ($page) {
      case 'home':
        echo include 'content/home.php';
        break;
      case 'about':
        echo include 'content/about.php';
        break;
      case 'projects':
        echo include 'content/projects.php';
        break;
      case 'blog':
        echo include 'content/blog';
        break;
      case 'contact':
        echo include 'content/contact';
    }
    ?>

  </div>

  <!-- Bottom Navigation untuk layar kecil -->
  <?php include 'inc/btm-nav.php' ?>
</body>

</html>
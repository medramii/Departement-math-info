<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Departement Math Info</title>
      <!-- <link rel="icon" href="favicon.png"> -->
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
      <link rel="stylesheet" href="fontawesome\css\all.min.css">
      <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header id="top">
      <?php include 'Pages\Login\login.php'; ?>
      <?php include 'Pages\Contact\tst.php'; ?>
      <?php include 'Pages\Navbar\nav.php'; ?>
    </header>

    <main id="mainContent">

     <?php
       if(isset($_POST['model'])){
        $link = $_POST['model'];
        include 'Pages/'.$link;
       }
       else {
         include 'Pages/Home/home.php';
       }
     ?>

    </main>

    <footer id="btm">
      <?php include 'Pages\footer\footer.php'; ?>
    </footer>

  <!-- +++++++++++++++++++ scripts ++++++++++++++++++++ -->
    <script src="jQuery\jquery-3.5.1.min.js"></script>
    <!-- <script src="https://unpkg.com/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script> -->
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <script src="script.js"></script>
  <!-- ++++++++++++++++++++++++++++++++++++++++++++++++ -->
  </body>
</html>

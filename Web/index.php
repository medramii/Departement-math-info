<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Departement Math Info</title>
      <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
      <link rel="stylesheet" href="fontawesome\css\all.min.css">
      <link rel="stylesheet" href="style.css">
  </head>
  <body>



    <header id="main">
      <?php include 'Pages\Login\login.php'; ?>
      <?php include 'Pages\Contact\tst.php'; ?>
      <?php include 'Pages\Navbar\nav.php'; ?>
    </header>

    <main>
      <section class="main">
        <aside id="sidebar">
          <?php include 'Pages\sideBar\sideBar.php'; ?>
        </aside>
        <article id="annonce">
          <?php include 'Pages\Annonce\annonce.php'; ?>
        </article>
        <article id="avis">
          <?php include 'Pages\Avis\avisWidget.php'; ?>
          <?php include 'Pages\Avis\avisWidget.php'; ?>
          <?php include 'Pages\Avis\avisWidget.php'; ?>
          <?php include 'Pages\Avis\avisWidget.php'; ?>
          <?php include 'Pages\Avis\avisWidget.php'; ?>
          <?php include 'Pages\Avis\avisWidget.php'; ?>
          <?php include 'Pages\Avis\avisWidget.php'; ?>
          <?php include 'Pages\Avis\avisWidget.php'; ?>
          <?php include 'Pages\Avis\avisWidget.php'; ?>
          <?php include 'Pages\Avis\avisWidget.php'; ?>
          <?php include 'Pages\Avis\avisWidget.php'; ?>
          <?php include 'Pages\Avis\avisWidget.php'; ?>
          <?php include 'Pages\Avis\avisWidget.php'; ?>
          <?php include 'Pages\Avis\avisWidget.php'; ?>
          <?php include 'Pages\Avis\avisWidget.php'; ?>
        </article>
      </section>
      <section id="about">
        <?php include 'Pages\About\about.php'; ?>
      </section>
    </main>

    <footer>
      <?php include 'Pages\footer\footer.php'; ?>
    </footer>



    <!--
    http://localhost/Departement-math-info/Web/Pages/
    -->



  <!-- +++++++++++++++++++ scripts ++++++++++++++++++++ -->
    <script src="jQuery\jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <!-- <script src="fontawesome\js\all.min.js"></script> -->
    <script src="script.js"></script>
  <!-- ++++++++++++++++++++++++++++++++++++++++++++++++ -->
  </body>
</html>

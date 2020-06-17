<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title></title>
      <link rel="stylesheet" href="http://localhost/Departement-math-info/Web/Pages/Navbar/nav.css">
  </head>
  <body>
    <div class="navbar_container">

        <div class="cover">
          <img src="http://localhost/Departement-math-info/Web/Pages/Navbar/dark.png" alt="logo">
        </div>

        <nav class="navbar navbar-dark navbar-expand" id="navbar">
          <div class="container">
            <!-- <div class="navbar-brand">Departement Math Info</div> -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
              <ul class="nav navbar-nav mx-auto">
                <li class="nav-item active"><a href="http://localhost/Departement-math-info/Web" class="nav-link">Home</a></li>
                <li class="nav-item" id="flr"><a href="http://localhost/Departement-math-info/Web/Pages/Filiere/filiere.php" class="nav-link">Filiere</a></li>
                <li class="nav-item"><a href="#Avis" class="nav-link">Avis</a></li>
                <li class="nav-item"><a href="http://localhost/Departement-math-info/Web/#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="http://localhost/Departement-math-info/Web/Pages/Contact/contact.php" class="nav-link">Contact</a></li>
              </ul>
              <button style="color: #eeeeee;background-color: inherit;border: none;position: absolute;right:55px;outline: none" onclick="show_dialog()"><i class="fas fa-user-tie"></i></button>
            </div>
          </div>
        </nav>
    </div>
    <script src="http://localhost/Departement-math-info/Web/Pages/Navbar/nav.js"></script>
  </body>
</html>

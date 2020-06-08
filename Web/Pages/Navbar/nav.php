<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="..\..\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\..\fontawesome\css\all.min.css">
    <link rel="stylesheet" href="nav.css">
</head>
<body>

  <div class="" style="width:100%;height:200px;background-color:#0092ca">

  </div>


  <nav class="navbar navbar-dark navbar-expand-md" id="navbar">
    <div class="container">
      <div class="navbar-brand">Departement Math Info</div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item active"><a href="nav.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#Filiere" class="nav-link">Filiere</a></li>
          <li class="nav-item"><a href="#About" class="nav-link">About</a></li>
          <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="#Connexion" class="nav-link">Connexion <i class="fas fa-sign-in-alt"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>



  <div id="Filiere" style="height:400px;width:100%;background:#0092ca;margin:150px auto;">Filiere</div>
  <div id="About" style="height:400px;width:100%;background:#0092ca;margin:150px auto;">About</div>
  <div id="Contact" style="height:400px;width:100%;background:#0092ca;margin:150px auto;">Contact</div>
  <div id="Connexion" style="height:400px;width:100%;background:#0092ca;margin:150px auto;">Connexion</div>











  <script src="..\..\jQuery\jquery-3.5.1.min.js"></script>
  <script src="..\..\bootstrap\js\bootstrap.min.js"></script>
  <script src="..\..\fontawesome\js\all.min.js"></script>
  <script src="nav.js"></script>
</body>
</html>

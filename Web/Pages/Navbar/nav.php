<link rel="stylesheet" href="http://localhost/Departement-math-info/Web/Pages/Navbar/nav.css">
<div class="navbar_container">
    <div class="cover">
      <img src="http://localhost/Departement-math-info/Web/Pages/Navbar/dark.png" alt="logo">
    </div>

    <nav class="navbar navbar-dark navbar-expand" id="navbar">
      <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">

          <ul style="all:unset" class="parentNav mx-auto">
            <li style="all:unset">
              <form id="navForm" method="post">
                  <input type="hidden" name="model" />
                  <input type="hidden" name="flrName" />
                  <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item" id="iHome">
                      <a href="http://localhost/Departement-math-info/Web/" id="aHome" class="sc nav-link" onclick="goto('Home/home.php')">Home</a>
                    </li>
                    <li class="nav-item dropdown" id="flr">
                      <a class="nav-link *dropdown-toggle*" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filiere
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#eeeeee">
                        <a class="dropdown-item" href="javascript:void(0)" onclick="whichFlr('Filiere/filiere.php', 'LP Genie Info');">LP Genie Info</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="whichFlr('Filiere/filiere.php', 'SMI');">SMI</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="whichFlr('Filiere/filiere.php', 'TXB');">TXB</a>
                      </div>
                    </li>
                    <li class="nav-item" id="avis">
                      <a href="javascript:void(0)" onclick="goto('Avis/allAvis.php')" class="nav-link" >Avis</a>
                    </li>
                    <li class="nav-item" id="iAbout"><a id="lAbout" href="index.php#about" class="sc nav-link">About</a></li>
                    <span class="nav-link" onclick="show_dialog(contact)">Contact</span>
                  </ul>

              </form>
            </li>
          </ul>
          <button style="color: #eeeeee;background-color: inherit;border: none;position: absolute;right:55px;outline: none" onclick="show_dialog(login)"><i class="fas fa-user-tie"></i></button>
        </div>
      </div>
    </nav>
</div>
<script src="http://localhost/Departement-math-info/Web/jQuery/jquery-3.5.1.min.js"></script>
<script src="http://localhost/Departement-math-info/Web/Pages/Navbar/nav.js"></script>

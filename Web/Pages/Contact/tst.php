<?php  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>Contact us</title>
	<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="http://localhost/Departement-math-info/Web/Pages/Contact/tst.css">
	<link rel="stylesheet" href="http://localhost/Departement-math-info/Web/fontawesome/css/all.min.css">

</head>
  <body>

		<div class="contact_dialog">

			<div class="back" onclick="hide_dialog(contact)"></div>
	    <div class="contact_container">
	      <h1 class="header">Contactez Nous</h1>

	      <section class="left-box">

	        <form>
	  				<input type="text" placeholder="votre nom et prenom" name="name" class="inputs">
	  				<br> <br>
	  				<input type="Email"placeholder="votre email"  name="email" class="inputs">
	  				<br> <br>
	  				<input type="tel"placeholder="votre telephone"  name="phone" class="inputs">

						<label class="object">Message
							<input type="radio" name="object" value="msg" checked="checked">
							<span class="checkmark"></span>
						</label>
						<label class="object">Question
							<input type="radio" name="object" value="qst">
							<span class="checkmark"></span>
						</label>
						<label class="object">Reclamation
							<input type="radio" name="object" value="rec">
							<span class="checkmark"></span>
						</label>
	  				<textarea placeholder="votre message" class="msg inputs" id="txt" onkeyup="count()" maxlength="500"></textarea>
						<span class="count"><span id="iVar">0</span>/500</span>
	  				<br>
	  				<input type="submit" value="Send" name="send" class="send">
	  			</form>

	  		</section>

	  		<section  class="right-box">
					<img src="http://localhost/Departement-math-info/Web/Pages/Login/logo.png" style="width:250px;height:auto" >
					<br>
					<span><i class="fa fa-map-marker-alt" aria-hidden="true"></i><b>Adress &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp</b> Hay El Mouhammadi - (Lastah) - B.P: 207 - 83000 Taroudant, Maroc</span>
	  			<br>
	  			<span><i class="fa fa-phone"></i><b>Tel &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp</b> +212 5 28 55 10 10</span>
	  			<br>
	  			<span><i class="fa fa-fax" aria-hidden="true"></i><b>Fax &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp</b> +212 5 28 55 10 20</span>
	  			<br>
	  			<span><i class="fa fa-envelope" aria-hidden="true"></i><b>Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp&nbsp&nbsp&nbsp&nbsp</b> departement_fpt@gmail.com</span>
	  			<br>
	  			<span><i class="fab fa-facebook-square"></i><b>Fecebook &nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp </b> Antari Jelali</span>
	  			<br>
	  			<span><i class="fas fa-globe" aria-hidden="true"></i><b>Site &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp</b> <a href=""> www.dmi.ac.ma</a></span>
	  		</section>

	    </div>

		</div>

		<script type="text/javascript" src="http://localhost/Departement-math-info/Web/Pages/Contact/tst.js"></script>
  </body>
</html>

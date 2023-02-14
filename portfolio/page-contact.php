<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/contact.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<title>Me Contacter</title>
</head>
<body class="body-contact">
   <div class="container">

	<div class="card text-center">
		<div class="card-body">
		<p class="text-contact-card">
 			Bienvenue sur la page contact de mon "Portfolio", sur cette page vous allez avoir la possibilité de rentrer en contact avec moi beaucoup plus facilement.
		</p>
		 
		</div>
	  </div>

		<h3 class="titre-contact">
			Voici ou vous allez pouvoir me contacter !
		</h3>

		 <form action="contact.php" method="post">
			<input class="feedback-input" type="text" id="name" name="Votre" placeholder="Votre Nom"><br>
			<input class="feedback-input" type="text" id="email" name="email" placeholder="Votre Email" ><br>
			<textarea class="feedback-input" placeholder="Votre Message" id="message" name="message"></textarea><br><br>
			<input type="submit" value="Envoyer">
  		</form>
   </div>
	
   
<style>
    /* =================================
		Page Contact
===================================*/

@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

.titre-contact {
	margin-top: 35px;
	color: #3416b9;
	text-align: center;
	font-family: 'Montserrat', sans-serif;
	font-weight: 900;
	font-size: 25px;
	letter-spacing: 2px;
	text-transform: uppercase;
}

form { max-width:420px; margin:50px auto; }

.feedback-input {
  color:white;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:4px solid #3416b9;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:4px solid #000000; }

.textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#3416b9;
  border-radius:5px;
  border:0px;
  cursor:pointer;
  color:rgb(250, 250, 250);
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover { 
	background:#f80303; 
}

.body-contact {
	background-color: #000000;
	margin-top: 250px;
}

.text-contact-card {
	color: #3416b9;
	text-align: center;
	font-family: 'Montserrat', sans-serif;
	font-weight: 900;
	font-size: 15px;
	text-transform: uppercase;
}

#card-contact {
	width: 750px;
}
</style>
   
</body>
</html>
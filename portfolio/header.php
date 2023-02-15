<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    
	<title>Kevin Molines</title>
</head>

<body>
<?php wp_head(); ?>

	<header>
		<div class="row g-0">
			<div class="col-sm-6 col-md-4">
				<img id="logo_la_ruche" src="http://localhost/portfolio_wp/wp-content/uploads/2023/02/image_k.jpg" alt="logolaruche">
			</div>
			<div class="col-6 col-md-8 text-align-end">
				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<button type="button" class="btn btn-outline-info text-align-center">
						<a href="<?= get_template_directory_uri(); ?>/page-cv.php">
							Mon CV
						</a>
					</button>
					<button type="button" class="btn btn-outline-info text-align-center">
					<a href="<?= get_template_directory_uri(); ?>/page-service.php">
							Services
						</a>
					</button>
					<button type="button" class="btn btn-outline-info text-align-center">
						<a href="<?= get_template_directory_uri(); ?>/page-contact.php"">
							Contact
						</a>
					</button>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="header-wrapper">
				<div class="logo-wrap">
					<div class="animate__animated animate__fadeInTopLeft">
						<a href="#"><span>Kevin</span>Molines</a>
					</div>
				</div>
				<div class="nav-but-wrap">
					<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
						rel="stylesheet"
						integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
						crossorigin="anonymous">
					<a href="https://www.linkedin.com/in/kevin-molines-27baa5257/"><i id="socLink"
							class="fa fa-linkedin"> </i></a>
					<a href="https://github.com/KevinML48"><i id="socLink" class="fa fa-github"> </i></a>
				</div>
			</div>
		</div>
	</header>
    

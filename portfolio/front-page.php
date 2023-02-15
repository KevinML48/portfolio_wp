<?php get_header() ?>

	</div>

	<main class="contenue-main">

		<div class="container">
			<div class="section full-height over-hide">
				<div class="switch-wrap">
					<h1 class="animate__animated animate__backInLeft"><span>D</span>evelopper <span>W</span>eb
						<span>J</span>unior </h1>
				</div>
			</div>

			<div class="front-end">
				<p class="fe">
				<div class="animate__animated animate__fadeInTopLeft">
					Front End / Back End !
				</div>
				</p>
			</div>


			<!--=============================================================-->

			<div class="row col-8">
				<div class="cardbody2">
					<div class="card text-bg-dark mb-2 text-center">
						<div class="card-header">Language acquis ?</div>
						<div class="card-body">
							<img class="lgacquis" src="http://localhost/portfolio_wp/wp-content/uploads/2023/02/html.png" alt="html5">
							<img class="lgacquis" src="http://localhost/portfolio_wp/wp-content/uploads/2023/02/css.png" alt="css">
							<img class="lgacquis" src="http://localhost/portfolio_wp/wp-content/uploads/2023/02/javascript.png" alt="javascript">
							<img class="lgacquis" src="http://localhost/portfolio_wp/wp-content/uploads/2023/02/php.png" alt="">
						</div>
					</div>

				</div>

			</div>

			<div class="row col-8">
				<div class="cardbody2">
					<div class="card text-bg-dark mb-2 text-center">
						<div class="card-header">Mon Editeur De Texte ?</div>
						<div class="card-body">
							<img class="lgacquis1" src="http://localhost/portfolio_wp/wp-content/uploads/2023/02/image_visual_code_studio.webp" alt="html5">
						</div>
					</div>
				</div>
			</div>

			<div class="row col-8">
				<div class="cardbody2">
					<div class="card text-bg-dark mb-2 text-center">
						<div class="card-header">Mes qualités ?</div>
						<div class="card-body">
							<img class="lgacquis2" src="http://localhost/portfolio_wp/wp-content/uploads/2023/02/2.jpg" alt="html5">
						</div>
					</div>
				</div>
			</div>



			<!--=====================================================================-->
		</div>



		<div class="contenue-experience">

			<div class="row g-0 text-center">
				<div class="col-sm-6 col-md-8">

					<p class="experience-title">
						Mon Experience
					</p>

					<img class="experience" src="<?= get_template_directory_uri(); ?>/image/Experience_image_index.jpg" alt="">
					<button id="button-savoirplus" type="button" class="btn btn-outline-dark">
						<a href="<?= get_template_directory_uri(); ?>/page-savoir.php">En Savoir PLus</a>
					</button>
				</div>


			</div>
		</div>
		</div>

		<!-- ====================================================================================== -->

	</main>

	<div class="container">
		<h5 class=projets>
			Mes projets au cours de l'année !
		</h5>

		<div class="row row-cols-9 text-center">
			<div class="col">

				<div class="col">
					<div id="card-projet" class="card">
						<img src="http://localhost/portfolio_wp/wp-content/uploads/2023/02/portfolio.jpg" class="card-img-top" alt="portfolio">
						<div class="card-body">
							<h5 class="card-title">Mon PortFolio 2022</h5>
							<p class="card-text">
								Pour notre formation nous avons du crée "notre portfolio" en "one page" avec les
								connaissance que l'on connaissait de via nos formateur, j'ai donc concue ce premier
								portfolio ci dessous !
							</p>
							<p class="card-text">
								Suites a une remise en question sur ce portfolio, j'ai donc voulue concevoir un
								portfolio 
								pour l'année 2023 ou je rajouterais de nouvelle chose en fonctions de mon avancement dans ma formation.
								<p class="card-text">
									<strong>
										Beaucoup plus technique, que ce soit sur le design, le responsive, les
										fonctionalités, voici mon PORTFOLIO pour 2023. 
									</strong>
								</p>
							</p>
							<button type="button" class="btn btn-outline-light">
								<a href="https://kevin-molines.netlify.app/">Mon Portfolio 2022</a>
							</button>
						</div>
					</div>
				</div>

			</div>
			<div class="col">

				<div id="card-projet" class="card">
					<img src="http://localhost/portfolio_wp/wp-content/uploads/2023/02/tony_parker.jpg" class="card-img-top" alt="portfolio">
					<div class="card-body">
						<h5 class="card-title">Tony Parker</h5>
						<p class="card-text">
							On nous a demander de faire une page web, pour representer une personne d enotre choix, en faisait un petit résumer rapide.
						</p>
						<p class="card-text">
							Etant un grand fan de Basket, j'en ai fait pendant plus de 8ans, mon idole était biensur "Tony Parker", j'ai donc décider de faire cette page en resumant ce grand joueur !
							<p class="card-text">
								<strong>
									J'ai pris un réel plaisir a faire cette page 
								</strong>
							</p>
						</p>
						<button type="button" class="btn btn-outline-light">
							<a href="https://tony-parker.netlify.app/">Page Web Tony Parker</a>
						</button>
					</div>
				</div>

			</div>
		</div>

		<h5 class=projets>
			Mes projets fait en solo !
		</h5>

		<?php if (have_posts()): // ON verifie si on a des articles ?>
			<div class="row row-cols-9 text-center">
						<?php while(have_posts()): the_post();// the_post sert a déclarer l'articles ) // on utilise cette boucle tant que il ya des articles?>
						<div class="col-6">


							<div id="card-projet" class="card">
								<?php the_post_thumbnail('medium',['class' => 'card-img-top', 'alt' => '', 'style' => 'height: 300px;']) ?>
							  <div class="card-body">
							    <h5 class="card-title"><?php the_title() ?></h5>
							    <p class="card-text"> 
									<?php the_content('En voir plus') // afficher le contenue de notre article ?>	 
								</p>
							    <a href="<?php the_permalink() ?>" class="card-link">Plus de détails</a>
							  </div>
							</div>
							</div>
							<?php endwhile ?>
						</div>
		</div>
						<?php else: ?>
							<p> Pas d'articles </p>
						<?php endif; ?>

						<?php wp_footer() ?>
						<?php get_footer() ?>
						
						<!-- <li>
						<a href=" <//?php the_permalink()  // sa genre un liens qui peux mener a larticle avec plus de details ou directement a une page web ou autre ?>">
							<//?php the_title() // the_title sert a mettre automotiquement le titre de l'artciles ?>
						</a>
					</li>
				<//?php endwhile ?>
				<//?php else: // donc la on affiche ?>
					<p> Pas d'articles </p>
				<//?php endif; // Dans le cas contraire on dit que il n'y en a pas ?>



</div>
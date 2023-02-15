<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/service.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <title>Mes Services</title>
    </head>
<body>



        <div class="contenue-header-service">

            <h3>
                Mes Services
            </h3>
                <div class="explication-service">
                    <p class="titre-service">
                        Bonjour! Je suis un développeur Web professionnel proposant des services de création de maquettes de sites, de développement d'applications et de développement de sites Web.
                    </p>

                    <h5>
                      <span class="section-service">Mes services de création de maquettes de sites</span> 
                    </h5>  
                    
                      <div class="card">
                        <div class="card-body">
                          
                            <p class="text-card">
                               Vous permettront de visualiser l'apparence et la disposition de votre site avant même qu'il ne soit développé. Cela vous donnera l'occasion de faire des ajustements et de vous assurer que votre site Web sera exactement comme vous le souhaitez.
                            </p>

                        </div>
                      </div>
                    
                        
                    <h5>
                       <span class="section-service">Mes services de développement d'applications</span> 
                    </h5>

                    <div class="card">
                        <div class="card-body">
                          
                            <p class="text-card">
                                Vous permettent de créer des applications mobiles ou de bureau adaptées à vos besoins et à votre entreprise. Que vous souhaitiez une application de gestion de projet, une application de suivi de la santé ou toute autre application, je suis là pour vous aider.
                            </p>

                        </div>
                      </div>

                    <h5>
                      <span class="section-service">Mes services de développement de sites Web</span> 

                    </h5>

                    <div class="card">
                        <div class="card-body">
                          
                            <p class="text-card">
                                Vous permettront de créer un site Web professionnel, fonctionnel et adapté à vos besoins. Que vous souhaitiez un site Web pour votre entreprise, votre blog personnel ou toute autre utilisation, je suis là pour vous aider à réaliser votre vision.
                            </p>

                        </div>
                      </div>

                    <p class="titre-service">
                         Si vous êtes intéressé par l'un de mes services ou si vous avez des questions, n'hésitez pas à me contacter. Je me ferai un plaisir de discuter de vos besoins et de trouver la meilleure solution pour vous.

                    </p>

                    <p>
                       <span class="titre-service">Je vous remercie de votre intérêt et j'ai hâte de travailler avec vous!</span> 
                    </p>
                </div>
        </div>

    <main>
        <div class="contenue-service-main">

           

            <div class="container text-center">
                <div class="row">
                  <div class="col-sm-5 col-md-6">

                    <img class="img-service" src="http://localhost/portfolio_wp/wp-content/uploads/2023/02/image-service.jpg" alt="">

                  </div>
                  <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                    <div class="text-contact">
                         <p>
                       <strong>Vous souhaitez prendre contact avec moi ?</strong> 
                        </p>
                        
                        <p>
                            En ayant pris en compte les services que je propose, il vous suffira simplement de remplir un Mail en explicant rapidement votre demande. Il vous suffira simplement de cliquer sur le boutton <strong>"Contactez moi !".</strong> 
                        </p>

                        <p>
                           <strong>Merci a vous !</strong> 
                        </p>
                    </div>
                   
                    

                  </div>
                </div>
            </div>
        </div>
    </main>

    <style>
       .contenue-header-service {
	margin-top: 25px;
	color: #000000;
	text-align: center;
	font-size: 35px;
}

h3 {
	text-transform: uppercase;
}

.explication-service {
	font-size: 15px;
	padding: 25px;
}

.section-service {
	color: #78eb0c;
	font-size: 25px;
	text-transform: uppercase;
}

.text-contact {
	font-size: 19px;
	color: #ffffff;
	font-family: 'Montserrat', sans-serif;
}

.titre-service {
	color: #4236e5;
	font-family: 'Montserrat', sans-serif;
	font-weight: 900;
	font-size: 15px;
	text-transform: uppercase;
}

.contenue-service-main {
	background-color: #556ae4;
}

.contact-moi {
	text-align: center;
	font-family: 'Montserrat', sans-serif;
	font-weight: 900;
	font-size: 35px;
	letter-spacing: 2px;
	text-transform: uppercase;
}

#button-contact-service {
	margin-bottom: 55px;
}

.text-card {
	font-size: 19px;
	color: #000000;
	font-family: 'Montserrat', sans-serif;
}

.card {
	margin-bottom: 25px;
}

.img-service {
  margin-top: 25px;
	border-top-left-radius: 25px;
	border-bottom-right-radius: 25px;
	border: 2px solid rgb(0, 0, 0);
}

.btn {
	padding: 15px;
	margin: 10px;
}

.btn a {
	font-family: 'Montserrat', sans-serif;
	font-weight: 900;
	text-transform: uppercase;
	letter-spacing: 1px;
	color: rgb(20, 1, 1);
	transition : all 0.3s ease-out;
	text-decoration: none;
}

.btn{
    justify-content: center;
    transition: transform .1s;
    color: #2078cf;
}

/* ============
ANNMATION 
============*/

.card {
	cursor: pointer;
	transition: 0.4s;
  }
  
  .card  {
	border-radius: 40px;
	object-fit: cover;
  }
  
  .card:hover {
	transform: scale(0.9, 0.9);
	box-shadow: 5px 5px 30px 15px rgba(0, 0, 0, 0.25), 
	  -5px -5px 30px 15px rgba(0, 0, 0, 0.22);
  } 
    </style>

</body>
</html>
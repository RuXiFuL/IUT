<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IUT Imagerie - PUY EN VELAY</title>

    <!-- Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=IUT;charset=utf8', 'root', 'azerty123');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
			<a href="index.php"><img src="img/logo_IUT.png" width="75" height="45"> </a> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					                    <li>
                        <a class="page-scroll" href="#about">Presentation</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Realisations</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Formations</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Actualité</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
					
						<li> 
							<a href="index2.php"><img src="img\ico\englishtouch.png"> </a> 
						</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
	
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">
					<!-- Requete 1 -->
					<?php
						$req = $bdd->prepare('SELECT contenu FROM intro WHERE id = 1');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars($donnees['contenu']));
					?>
					<!-- Fin Requete -->
				</div>
                <div class="intro-heading">
					<!-- Requete 2 -->
					<?php
						$req = $bdd->prepare('SELECT contenu FROM intro WHERE id = 2');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars($donnees['contenu']));
					?>
					<!-- Fin Requete 3 -->
				</div>
                <a href="#about" class="page-scroll btn btn-xl">En savoir plus</a>
            </div>
        </div>
    </header>

				<!-- Paradaxe -->
	<hr/>
<div class="highlight-info5">
<div class="overlay5 spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
	<div class="col-sm-3 col-xs-6">
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		</div>
	</div>
</div>
</div>
</div>
<hr/>
<!-- Paradaxe Ends -->
	
	<!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><br/>
					
					<!-- Presentation -->
					<?php
						$req = $bdd->prepare('SELECT titre FROM presentation WHERE id = 1');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars($donnees['titre']));
					?>
					</h2>
                    <h3 class="section-subheading text-muted">
					
					<?php
						$req = $bdd->prepare('SELECT contenu FROM presentation WHERE id = 1');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars($donnees['contenu']));
					?>
					</h3>
					<!-- Fin Presentation -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>
									<?php
									$req = $bdd->prepare('SELECT titre FROM presentation WHERE id = 2');
									$req->execute();
									$donnees = $req->fetch();
									echo nl2br(htmlspecialchars($donnees['titre']));
									?>
									</h4>                                   
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
									<?php
									$req = $bdd->prepare('SELECT contenu FROM presentation WHERE id = 2');
									$req->execute();
									$donnees = $req->fetch();
									echo nl2br(htmlspecialchars($donnees['contenu']));
									?>
									</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>
									<?php
									$req = $bdd->prepare('SELECT titre FROM presentation WHERE id = 3');
									$req->execute();
									$donnees = $req->fetch();
									echo nl2br(htmlspecialchars($donnees['titre']));
									?>
									</h4>                                   
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
									<?php
									$req = $bdd->prepare('SELECT contenu FROM presentation WHERE id = 3');
									$req->execute();
									$donnees = $req->fetch();
									echo nl2br(htmlspecialchars($donnees['contenu']));
									?>
									</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>
									<?php
									$req = $bdd->prepare('SELECT titre FROM presentation WHERE id = 4');
									$req->execute();
									$donnees = $req->fetch();
									echo nl2br(htmlspecialchars($donnees['titre']));
									?>
									</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
									<?php
									$req = $bdd->prepare('SELECT contenu FROM presentation WHERE id = 4');
									$req->execute();
									$donnees = $req->fetch();
									echo nl2br(htmlspecialchars($donnees['contenu']));
									?>
									</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>
									<?php
									$req = $bdd->prepare('SELECT titre FROM presentation WHERE id = 5');
									$req->execute();
									$donnees = $req->fetch();
									echo nl2br(htmlspecialchars($donnees['titre']));
									?>
									</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
									<?php
									$req = $bdd->prepare('SELECT contenu FROM presentation WHERE id = 5');
									$req->execute();
									$donnees = $req->fetch();
									echo nl2br(htmlspecialchars($donnees['contenu']));
									?>
									</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	
				<!-- Paradaxe -->
			<hr/>
<div class="highlight-info2">
<div class="overlay2 spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
	<div class="col-sm-3 col-xs-6">
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		</div>
	</div>
</div>
</div>
</div>
<hr/>
<!-- Paradaxe Ends -->
   

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
					<?php
						$req = $bdd->prepare('SELECT titre FROM realisations WHERE id = 1');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars($donnees['titre']));
					?>
					</h2>
                    <h3 class="section-subheading text-muted">
					<?php
						$req = $bdd->prepare('SELECT contenu FROM realisations WHERE id = 1');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars($donnees['contenu']));
					?>
					</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    
                        <h4 align="center">Modélisation 3D</h4>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                    </a>
                    
                        <h4 align="center">POO</h4>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                    </a>
                    
                        <h4 align="center">XML</h4>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                    </a>
                    
                        <h4 align="center">IHM </h4>
                    
                </div>
            </div>
        </div>
    </section>
	
	<!-- Paradaxe -->
			<hr/>
<div class="highlight-info3">

<div class="container">

	<div class="col-sm-3 col-xs-6">
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		</div>
	
</div>

</div>
<hr/>
<!-- Paradaxe Ends -->
	
	 <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
					<?php
						$req = $bdd->prepare('SELECT titre FROM formations WHERE id = 1');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars($donnees['titre']));
					?>
					</h2>
                    <h3 class="section-subheading text-muted">
					<?php
						$req = $bdd->prepare('SELECT contenu FROM formations WHERE id = 1');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars($donnees['contenu']));
					?>
					</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                    <img src="img/formation/1.png" alt="logo" style="width: 100px;height:90px">
                        
                    </span>
                    <h4 class="service-heading">
					<?php
						$req = $bdd->prepare('SELECT titre FROM formations WHERE id = 2');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars($donnees['titre']));
					?>
					</h4>
                    <p class="text-muted text-justify">
					<?php
						$req = $bdd->prepare('SELECT contenu FROM formations WHERE id = 2');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars($donnees['contenu']));
					?>
					</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="img/formation/2.png" alt="logo" style="width: 100px;height:90px">
                    </span>
                    <h4 class="service-heading">
					<?php
						$req = $bdd->prepare('SELECT titre FROM formations WHERE id = 3');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars($donnees['titre']));
					?>
					</h4>
                    <p class="text-muted text-justify">
					<?php
						$req = $bdd->prepare('SELECT contenu FROM formations WHERE id = 3');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars_decode($donnees['contenu']));
					?>
					</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="img/formation/3.png" alt="logo" style="width: 100px;height:90px">
                    </span>
                    <h4 class="service-heading">
					<?php
						$req = $bdd->prepare('SELECT titre FROM formations WHERE id = 4');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars($donnees['titre']));
					?>
					</h4>
                    <p class="text-muted text-justify">
					<?php
						$req = $bdd->prepare('SELECT contenu FROM formations WHERE id = 4');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars_decode($donnees['contenu']));
					?>
					</p>
				</div>
            </div>
        </div>
    </section>
	
			<!-- Paradaxe -->
		<hr/>
<div class="highlight-info4">
<div class="overlay4 spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
	<div class="col-sm-3 col-xs-6">
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		</div>
	</div>
</div>
</div>
</div>
<hr />
<!-- Paradaxe Ends -->

        <!-- Evenement Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
					<?php
						$req = $bdd->prepare('SELECT titre FROM actualite WHERE id = 1');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars_decode($donnees['titre']));
					?>
					</h2>
                    <h3 class="section-subheading text-muted">
					<?php
						$req = $bdd->prepare('SELECT contenu FROM actualite WHERE id = 1');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars_decode($donnees['contenu']));
					?>
					</h3>
                </div>
            </div>
			
		<div class="container">
			<div class="row" >
			    <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link " data-toggle="modal">
                        <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                    </a>
                    
                        <h5 align="center">Evenement & Actualité</h5>
                   
                </div>
				    <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                        </div>
                        <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                    </a>
                    
                        <h5 align="center">FabLab</h5>
                    </div>
			    </div>
				
		</div>  
        </div>
    </section>
	

	
		<!-- Paradaxe -->
	<hr/>
<div class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
	<div class="col-sm-3 col-xs-6">
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		</div>
	</div>
</div>
</div>
</div>
<hr/>
<!-- Paradaxe Ends -->
    
    <!-- Contact Section -->
    <section id="contact">
	
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
					<?php
						$req = $bdd->prepare('SELECT titre FROM contact WHERE id = 1');
						$req->execute();
						$donnees = $req->fetch();
						echo nl2br(htmlspecialchars_decode($donnees['titre']));
					?>
					</h2>
					
                    <h3 class="section-subheading text-muted">
							<address>
							<?php
							$req = $bdd->prepare('SELECT contenu FROM contact WHERE id = 1');
							$req->execute();
							$donnees = $req->fetch();
							echo nl2br(htmlspecialchars_decode($donnees['contenu']));
							?> 
                            </address>
					</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nom *" id="name" required data-validation-required-message="Entrez votre nom.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Entrez votre adresse Email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="N° de telephone *" id="phone" required data-validation-required-message="Entrez votre numéro de telephone.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Votre message *" id="message" required data-validation-required-message="Entrez votre message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Envoyer le Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Juloro Student</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Modélisation</h2>
                            <p class="item-intro text-muted">Infographie/Architecture/Modélisation</p>
                            <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
							<img class="img-responsive img-centered" src="img\mode\2.png">
							<img class="img-responsive img-centered" src="img\mode\3.png">
							<img class="img-responsive img-centered" src="img\mode\5.png">
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Sortir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Programmation C++</h2>
                            <p class="item-intro text-muted">Programmation Orienté Objet</p>
                            <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Sortir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Mathématique</h2>
                            <p class="item-intro text-muted">Projet XML Première année</p>
                            <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                            <p>Chaque année, les premières années doivent produire un code xml <br/> Jouez avec les formes géométriques pour créer un petit univers</p>
                            <video controls src="tp1.mp4" class="img-responsive img-centered">Video projet XML</video>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Sortir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>IHM</h2>
                            <p class="item-intro text-muted">Conception de jeux vidéos & de sites internet</p>
                            <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                            <p>Voici quelques réalisations de jeux-vidéos réalisés sous Unity par des premières années en groupe de 14</p>
							<img class="img-responsive img-centered" src="img\ihm\3.png">
							<img class="img-responsive img-centered" src="img\ihm\2.png">
							<img class="img-responsive img-centered" src="img\ihm\1.png">
                            <p>D'autres projets sont également proposés tout au long de l'année, tel que la réalisation du site web sur lequel vous naviguez</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Sortir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>FabLab</h2>
                            <p class="item-intro text-muted">Retrouvez le FabLab de l'iut !</p>
                            <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                            <video class="img-responsive img-centered" controls src="tp2.mp4">Video projet XML</video>
							</br>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> sortir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2> 
							<?php
							$req = $bdd->prepare('SELECT titre FROM actualite WHERE id = 1');
							$req->execute();
							$donnees = $req->fetch();
							echo nl2br(htmlspecialchars_decode($donnees['titre']));
							?>
							</h2>
							
                            <p class="item-intro text-muted">2016/2017</p>
                            <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                            <?php
							$req = $bdd->prepare('SELECT contenu FROM actualite WHERE id = 2');
							$req->execute();
							$donnees = $req->fetch();
							echo nl2br(htmlspecialchars_decode($donnees['contenu']));
							?>
							</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Sortir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>

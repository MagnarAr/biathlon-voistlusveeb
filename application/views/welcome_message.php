<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Pealeht | Biathlon Võistlusveeb</title>
	<link href="<?=base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?=base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
	<link href="<?=base_url(); ?>assets/css/lightbox.css" rel="stylesheet">
	<link href="<?=base_url(); ?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url(); ?>assets/css/responsive.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="<?php echo base_url('assets/js/html5shiv.js');?>"></script>
	<script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url(); ?>assets/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url(); ?>assets/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url(); ?>assets/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?=base_url(); ?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 overflow">
				<div class="social-icons pull-right">
					<ul class="nav nav-pills">
						<li><a href="https://www.facebook.com/estonianbiathlonteam/"><i class="fa fa-facebook" ></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-google-plus"></i></a></li>
						<li><a href=""><i class="fa fa-dribbble"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="navbar navbar-inverse" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="index.html">
					<h1><img src="<?=base_url(); ?>assets/images/logo.png" alt="logo"></h1>
				</a>

			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="<?php echo base_url();?>">Pealeht</a></li>
					<li><a href="<?php echo site_url('results')?>">Tulemused</a></li>
					<li><a href="#">Võistlused</a></li>

					<li><a href="#">Klubid</a></li>
					<li class="dropdown">
						<a href="#" id="login_btn_bar" class="dropdown-toggle" data-toggle="dropdown">Sisene <i class="fa fa-angle-down"></i></a>
						<ul id="login-dp" class="dropdown-menu">
							<li>
								<div class="row">
									<div class="col-md-12">

										<form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
											<div class="form-group">
												<label class="sr-only" for="exampleInputEmail2">Email aadress</label>
												<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email aadress" required>
											</div>
											<div class="form-group">
												<label class="sr-only" for="exampleInputPassword2">Parool</label>
												<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Parool" required>
												<div class="help-block text-right"><a href="">Unustasid parooli?</a></div>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary btn-block">Logi sisse</button>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> jäta mind meelde
												</label>
											</div>
										</form>
									</div>
									<div class="bottom text-center">
										<a href="#"><b>Registreeru!</b></a>
									</div>
								</div>
							</li>
						</ul>
					</li>

					<li class="dropdown"><a href="#">Kasutaja menüü <i class="fa fa-angle-down"></i></a>
						<ul role="menu" class="sub-menu">
							<li><a href="<?php echo site_url('addresults')?>">LISA/MUUDA TULEMUSI</a></li>
							<li><a href="#">KUSTUTA TULEMUSI</a></li>
							<li><a href="#">TASU VÕISTLUSMAKS</a></li>
						</ul>
					</li>

				</ul>
			</div>
			<div class="search">
				<form role="form">
					<i class="fa fa-search"></i>
					<div class="field-toggle">
						<input type="text" class="search-form" autocomplete="off" placeholder="Search">
					</div>
				</form>
			</div>
		</div>
	</div>
</header>
<!--/#header-->

<section id="home-slider">
	<div class="container">
		<div class="row">
			<div class="main-slider">
				<div class="slide-text">
					<h1>Tere tulemast Biathlon võistlusveebi lehele!</h1>
					<p>Siin on võimalus vaadata Eestis toimunud võistluste tulemusi, klubidel registreeruda uutele võistlustele ning uurida ka Eestis tegutsevate klubide kohta.</p>
					<a href="#" class="btn btn-common">Vaata viimaseid tulemusi</a>
				</div>
				<img src="<?=base_url(); ?>assets/images/home/slider/hill.png" class="slider-hill" alt="slider image">
				<img src="<?=base_url(); ?>assets/images/home/slider/house.png" class="slider-house" alt="slider image">
				<img src="<?=base_url(); ?>assets/images/home/slider/sun.png" class="slider-sun" alt="slider image">
				<img src="<?=base_url(); ?>assets/images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
				<img src="<?=base_url(); ?>assets/images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
			</div>
		</div>
	</div>
	<div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
</section>
<!--/#home-slider-->

<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
				<div class="single-service">
					<div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
						<img src="<?=base_url(); ?>assets/images/home/icon1.png" alt="">
					</div>
					<h2>Incredibly Responsive</h2>
					<p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin chicken ground round.</p>
				</div>
			</div>
			<div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div class="single-service">
					<div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
						<img src="<?=base_url(); ?>assets/images/home/icon2.png" alt="">
					</div>
					<h2>Superior Typography</h2>
					<p>Hamburger ribeye drumstick turkey, strip steak sausage ground round shank pastrami beef brisket pancetta venison.</p>
				</div>
			</div>
			<div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
				<div class="single-service">
					<div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
						<img src="<?=base_url(); ?>assets/images/home/icon3.png" alt="">
					</div>
					<h2>Swift Page Builder</h2>
					<p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/#services-->

<section id="action" class="responsive">
	<div class="vertical-center">
		<div class="container">
			<div class="row">
				<div class="action take-tour">
					<div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
						<h1 class="title">Triangle Corporate Template</h1>
						<p>A responsive, retina-ready &amp; wide multipurpose template.</p>
					</div>
					<div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="tour-button">
							<a href="#" class="btn btn-common">TAKE THE TOUR</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/#action-->

<section id="features">
	<div class="container">
		<div class="row">
			<div class="single-features">
				<div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
					<img src="../../assets/images/home/image1.png" class="img-responsive" alt="">
				</div>
				<div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
					<h2>Experienced and Enthusiastic</h2>
					<P>Pork belly leberkas cow short ribs capicola pork loin. Doner fatback frankfurter jerky meatball pastrami bacon tail sausage. Turkey fatback ball tip, tri-tip tenderloin drumstick salami strip steak.</P>
				</div>
			</div>
			<div class="single-features">
				<div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
					<h2>Built for the Responsive Web</h2>
					<P>Mollit eiusmod id chuck turducken laboris meatloaf pork loin tenderloin swine. Pancetta excepteur fugiat strip steak tri-tip. Swine salami eiusmod sint, ex id venison non. Fugiat ea jowl cillum meatloaf.</P>
				</div>
				<div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
					<img src="../../assets/images/home/image2.png" class="img-responsive" alt="">
				</div>
			</div>
			<div class="single-features">
				<div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
					<img src="../../assets/images/home/image3.png" class="img-responsive" alt="">
				</div>
				<div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
					<h2>Experienced and Enthusiastic</h2>
					<P>Ut officia cupidatat anim excepteur fugiat cillum ea occaecat rump pork chop tempor. Ut tenderloin veniam commodo. Shankle aliquip short ribs, chicken eiusmod exercitation shank landjaeger spare ribs corned beef.</P>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/#features-->

<section id="clients">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
					<p><img src="../../assets/images/home/clients.png" class="img-responsive" alt=""></p>
					<h1 class="title">Happy Clients</h1>
					<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
				</div>
				<div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
					<div class="col-xs-3 col-sm-2">
						<a href="#"><img src="../../assets/images/home/client1.png" class="img-responsive" alt=""></a>
					</div>
					<div class="col-xs-3 col-sm-2">
						<a href="#"><img src="../../assets/images/home/client2.png" class="img-responsive" alt=""></a>
					</div>
					<div class="col-xs-3 col-sm-2">
						<a href="#"><img src="../../assets/images/home/client3.png" class="img-responsive" alt=""></a>
					</div>
					<div class="col-xs-3 col-sm-2">
						<a href="#"><img src="../../assets/images/home/client4.png" class="img-responsive" alt=""></a>
					</div>
					<div class="col-xs-3 col-sm-2">
						<a href="#"><img src="../../assets/images/home/client5.png" class="img-responsive" alt=""></a>
					</div>
					<div class="col-xs-3 col-sm-2">
						<a href="#"><img src="../../assets/images/home/client6.png" class="img-responsive" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/#clients-->

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center bottom-separator">
				<img src="../../assets/images/home/under.png" class="img-responsive inline" alt="">
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="testimonial bottom">
					<h2>Testimonial</h2>
					<div class="media">
						<div class="pull-left">
							<a href="#"><img src="../../assets/images/home/profile1.png" alt=""></a>
						</div>
						<div class="media-body">
							<blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
							<h3><a href="#">- Jhon Kalis</a></h3>
						</div>
					</div>
					<div class="media">
						<div class="pull-left">
							<a href="#"><img src="../../assets/images/home/profile2.png" alt=""></a>
						</div>
						<div class="media-body">
							<blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
							<h3><a href="">- Abraham Josef</a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="contact-info bottom">
					<h2>Contacts</h2>
					<address>
						E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br>
						Phone: +1 (123) 456 7890 <br>
						Fax: +1 (123) 456 7891 <br>
					</address>

					<h2>Address</h2>
					<address>
						Unit C2, St.Vincent's Trading Est., <br>
						Feeder Road, <br>
						Bristol, BS2 0UY <br>
						United Kingdom <br>
					</address>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="contact-form bottom">
					<h2>Send a message</h2>
					<form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
						<div class="form-group">
							<input type="text" name="name" class="form-control" required="required" placeholder="Name">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
						</div>
						<div class="form-group">
							<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-submit" value="Submit">
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="copyright-text text-center">
					<p>&copy; Magnar, Eirik, Rio 2016. Kõik õigused kaitstud.</p>
					<p>Disain <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--/#footer-->

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>

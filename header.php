<!DOCTYPE html>
<html lang="en">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="format-detection" content="telephone=no">

		<title><?php wp_title('|', true, 'right');
bloginfo('name')?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.2, user-scalable=no">

		<?php wp_head();?>

		<!-- Stylesheets -->

		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>?ver=3.9"/>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts/jquery.js"></script>

		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts/efeitoscroll.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts/functions.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts/slick.min.js"></script>

		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/efeitoMenu/menu.js"></script>

		<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/efeito/css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800" rel="stylesheet">
	</head>
<body>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99768885-1', 'auto');
  ga('send', 'pageview');
</script>

<header class="header ">
	<section class="section custom-banner-antes-header ">
		<div class="row custom-contatos">
			<div class="col span-6-8">
				<div class="row phone-align-center space-vertical">
					<div class="col span-5-9">
						<div class="row align-middle">
							<div class="col span-2-9">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/whatsap.png">
							</div>
							<div class="col span-7-9">
								<h1>(47) 98823 - 5552</h1>
							</div>
						</div>
					</div>
					<div class="col span-5-9">
						<div class="row align-middle">
							<div class="col  span-2-9">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/contato-telefone.svg">
							</div>
							<div class="col span-6-9">
								<h1>(47) 3017-4040</h1>
							</div>
						</div>
					</div>
					<div class="col span-8-9" style="padding-bottom: 10px;">
						<div class="row align-middle">
							<div class="col span-5-9 custom-img-3">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/banco-de-olhos.png">
							</div>
							<div class="col span-6-9">
								<h1>(47) 3433-4854</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section padding-vertical-small custom-header-banner-branco custom-header">
		<div class="row align-middle">
			<div class="col span-2-12  space-vertical">
				<div class="row phone-row align-middle">
					<div class="col span-3-4 phone-col custom-imagem space-vertical">
						<a href="<?php echo site_url() ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Logotio do site">
						</a>
					</div>
					<div class="col span-1-4 space-vertical display-hide phone-display-show phone-col align-right space-vertical teste">
						<div class=" nav-menu-responsivo-cor">
							<a id="menu-button" href="#" class="custom-imagem-menu closed"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col span-1-12 phone-display-hide"></div>
			<div class="col span-8-12 custom-menu space-vertical menu-closed phone-align-center align-center" id="nav">
				<nav class="nav">
					<?php wp_nav_menu(array('theme_location' => 'main-menu'));?>
				</nav>
			</div>
		</div>
	</section>
</header>




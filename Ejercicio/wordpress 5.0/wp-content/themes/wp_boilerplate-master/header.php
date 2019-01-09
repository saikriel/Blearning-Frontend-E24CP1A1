<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<meta name="robots" content="index, follow" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="copyright" content="" />

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="" />

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css' />

	<title>Singolo</title>
	<?php wp_head() ?>
</head>
<body>

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-menu' ) ); ?>
<?php } ?>

	<!-- Header
		============================= -->
		<div id="header">
        <div class="inner">
        
            <!-- Logo -->
            <h1 class="logo left"><a href="<?php bloginfo('url') ?>">Singolo</a></h1><!-- .logo-->
            
            <!-- Nav Menu -->
            <ul class="nav-menu right">
                <li class="current"><a href="#home">home</a></li>
                <li><a href="#services">services</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#contact">contact</a></li>
            </ul><!-- .nav-menu-->
        
        </div><!-- .inner -->
	</div><!-- #header -->
	<!-- End Header -->
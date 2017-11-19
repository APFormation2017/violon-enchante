<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--    <title>Le Violon Enchanté : Atelier | Boutique | Concerts</title>-->
    <!--    <meta name="description" content="Du violon débutant au violon d'exception, Le Violon Enchanté vous propose un large choix de modèles. Atelier de réparation, concerts gratuits et boutique web.">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <header class="gf relative">
        <div class="container">
            <div class="top flexright">
                <div class="mail"><a href="mailto:contact@violon-enchante.fr">contact@violon-enchante.fr</a></div>
                <div class="tel"><a href="tel:+33563458556">05 63 45 85 56</a></div>
            </div>
            <div class="menu flex">
                <div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-violon-enchante.png" alt="#"></a></div>
                <div id="menu-large">
                   <?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_class' => 'flex', 'container' => 'nav' 
										   ) ); ?>
				</div>
				<div id="menu-hamburger"><i class="fa fa-bars fa-2x" aria-hidden="true"></i> 
					<?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_class' => 'noflex cacher', 'container' => 'nav' 
										   ) ); ?>
            	</div>
			</div>
        </div>
    </header>

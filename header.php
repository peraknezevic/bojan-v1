<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" rel="stylesheet">

        <?php wp_head(); ?>
        
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97375596-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-97375596-1');
        </script>

	</head>
	<body <?php body_class(); ?>>

		<div class="wrap">

			<header>
                <h1 id="logo"><a href="<?php echo home_url('/'); ?>"><span><?php bloginfo('name'); ?></span></a></h1>
                <nav class="meni">
                   <ul>
                    <li><a href="//bojankrivokapic.com//cat/novosti" title="Novosti">Novosti</a></li>
                    <li><a href="//bojankrivokapic.com/cat/tekstovi" title="Tekstovi">Tekstovi</a></li>
                    <li><a href="//bojankrivokapic.com/knjige" title="Objavljene knjige">Knjige</a></li>
                    <li><a href="//bojankrivokapic.com/biografija" title="Biografija autora">Biografija</a></li>
                    <li><a href="//bojankrivokapic.com/intervjui" title="Intervjui">Intervjui</a></li>
                    <li><a href="//bojankrivokapic.com/cat/kritike" title="Kritike i komentari">Kritike</a></li>
                    <li><a href="//bojankrivokapic.com/foto" title="Fotografije">Foto</a></li>
                    <li><a href="//bojankrivokapic.com/kontakt" title="Kontaktirajte autora">Kontakt</a></li>
                    <li><span><a href="//facebook.com/gregor.fehmi/" class="facebook" title="Bojanova Facebook stranica"></a></span></li>
                    <li><span><a href="//www.patreon.com/user?u=32055108" class="patreon" title="Bojanova Patreon stranica"></a></span></li>
                    </ul>
                </nav>
			</header>

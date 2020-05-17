<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joyerías AFN</title>
    <!-- Start Dublin Core Schema -->
    <link rel="schema.DC" href="//purl.org/dc/terms/">
	<meta name="DC.title" content="Joyerías AFN - Collares, Anillos, Dijes y más.">
	<meta name="DC.description" content="Anillos de oro, collares, dijes. En Joyerías AFN encontrarás exclusivos modelos y elegantes diseños.">
	<meta name="DC.language" content="es">
	<meta name="DC.created" content="19/03/2019 05:12:07">
	<meta name="DC.modified" content="19/03/2019 05:12:07">
	<meta name="DC.creator" content="Joyerías AFN">
	<meta name="DC.publisher" content="Joyerías AFN">
    <!-- Start Dublin Core Schema -->
    <!-- Start geo Social Media -->
    <meta name="geo.region" content="Lima" />
    <meta name="geo.placename" content="Lima" />
    <meta name="geo.position" content="-12.1203468, -77.0147272" />
    <meta name="ICBM" content="-12.1203468, -77.0147272" />
    <!-- End geo Social Media -->
    <!-- Start Facebook Meta Social Media -->
    <meta property="og:locale" content="es_PE"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Joyerías AFN - Collares, Anillos, Dijes y más."/>
    <meta property="og:description"
          content="Anillos de oro, collares, dijes. En Joyerías AFN encontrarás exclusivos modelos y elegantes diseños."/>
    <meta property="og:url" content="https://joyeriasafn.com"/>
    <meta property="og:site_name" content="Joyerías AFN"/>
    <meta property="article:publisher" content="https://www.facebook.com/joyeriasafn"/>
    <meta property="article:author" content="https://www.facebook.com/franky.cunza"/>
    <meta property="article:tag" content="webdev"/>
    <meta property="fb:app_id" content="2146530282273320"/>
    <meta property="og:image" content="https://prix.tips/static/img/prixtips-og.png"/>
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="1200" />
    <meta property="og:image" content="https://prix.tips/static/img/prixtips-og2.png"/>
    <meta property="og:image:secure_url" content="https://prix.tips/static/img/prixtips-og.png"/>
    <meta property="og:image:secure_url" content="https://prix.tips/static/img/prixtips-og2.png"/>
    <!-- End Facebook Meta Social Media -->
    <!-- Start twitter Social Media -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Joyerías AFN - Collares, Anillos, Dijes y más." />
    <meta name="twitter:description" content="Anillos de oro, collares, dijes. En Joyerías AFN encontrarás exclusivos modelos y elegantes diseños." />
    <meta property="twitter:image" content="https://prix.tips/static/img/prixtips-og.png" />
    <meta name="twitter:widgets:link-color" content="#0f1a36" />
    <meta name="twitter:widgets:theme" content="dark" />
    <!-- End twitter Social Media -->
     <!-- Meta Description -->
     <meta name="description"
          content="Anillos de oro, collares, dijes. En Joyerías AFN encontrarás exclusivos modelos y elegantes diseños.">
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159181731-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-159181731-1');
    </script>
</head>
<body>

<div class="header">
    <div class="container">
        <div class="header__info">
            <p class="header__number"><i class="fab fa-whatsapp"></i>+51 993-371-868</p>
            <p class="header__email"><i class="far fa-envelope"></i>ventas@joyeriasafn.com</p>
        </div>
        <div class="header__logo">
            <div class="logo">
                <h1 class="logo__title">JOYERÍAS AFN</h1>
            </div>
        </div>
        <div class="header__socials">
            <p class="header__socials__title">Siguenos:</p>
            <ul class="header__socials__menu">
                <li class="header__socials__list"><a href="https://www.facebook.com/joyeriasafn/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li class="header__socials__list"><a href="https://www.instagram.com/afnjoyeria/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li class="header__socials__list"><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
        <?php 
            if(has_nav_menu('main_menuu')):					
            wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'container' => 'nav',
                'container_class' => 'header__menu'
            ));
            else:?>
            <nav class="header__menu" style="display:none;">
                <ul class="menu">
                    <?php wp_list_pages('title_li'); ?>
                </ul>
            </nav>
        <?php endif; ?> 
    </div>
</div>
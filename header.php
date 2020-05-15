<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joyerías AFN</title>
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
            <p class="header__number"><i class="fab fa-whatsapp"></i>+51 945-145-578</p>
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
                <li class="header__socials__list"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="header__socials__list"><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="header__socials__list"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
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
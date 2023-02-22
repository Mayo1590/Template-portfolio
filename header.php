<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
</head>
<body>
    <header>
        <nav role="navigation" class="menu" id="menu">
            <a href="#" class="icon" id="icon">
                <span id="bar" class="bar"></span>
                <span id="bar" class="bar"></span>
                <span id="bar" class="bar"></span>
            </a>
            <ul class="liens" id="liens">
                <li><a href="<?php get_home_url() ?>/">Accueil</a></li>
                <li><a href="<?php get_home_url() ?>/a-propos">À propos de moi</a></li>
                <li><a href="<?php get_home_url() ?>/proposition/">Ce que je cherche</a></li>
                <li><a href="<?php get_home_url() ?>/curriculum/">Mon CV</a></li>
                <li><a href="<?php get_home_url() ?>/contact/">Me contacter</a></li>
            </ul>
        </nav>
    </header>
    
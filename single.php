<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="410x410" href="<?php bloginfo('template_url');?>/screenshot.jpg">
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/screenshot.jpg">
    <meta property="og:image" content="<?php bloginfo('template_url');?>/screenshot.jpg">    
</head>
<body>
    <?php
    //https://developer.wordpress.org/reference/functions/get_the_content/
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            edit_post_link(__('Editar'));
            print '<h1>'.get_the_title().'</h1>'.PHP_EOL;
            print '<b>'.get_the_author().', '.get_the_date().'</b><br><br>'.PHP_EOL;
            the_content();
        }
        print '<p><a href="/">Ir para a página principal</a></p>'.PHP_EOL;
    }
    ?>
</body>

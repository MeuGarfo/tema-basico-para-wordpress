<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="410x410" href="<?php bloginfo('template_url');?>/screenshot.jpg">
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/screenshot.jpg">
    <meta property="og:image" content="<?php bloginfo('template_url');?>/screenshot.jpg">    
</head>
<body>
    <h1><?php bloginfo('name'); ?></h1>
    <?php
    if ( have_posts() ) {
        print '<ul>'.PHP_EOL;
        while ( have_posts() ) {
            the_post();
            $href=get_the_permalink();
            $link='<a href="'.$href.'">'.get_the_title().'</a>';
            $link=$link.' ~ '.get_the_date();
            print chr(9).chr(9).'<li>'.$link.'</li>'.PHP_EOL;
        }
        print chr(9).'</ul>'.PHP_EOL;
    }
    ?>
</body>

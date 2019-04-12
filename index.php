<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="410x410" href="<?php bloginfo('template_url');?>/screenshot.jpg">
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/screenshot.jpg">
    <meta property="og:image" content="<?php bloginfo('template_url');?>/screenshot.jpg">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@aicouto" />
    <meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="<?php bloginfo('template_url');?>/screenshot.jpg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span6 offset3">
                <h1><?php bloginfo('name'); ?></h1>
                <?php
                if ( have_posts() ) {
                    print '<ul class="nav nav-tabs nav-stacked">'.PHP_EOL;
                    while ( have_posts() ) {
                        the_post();
                        $href=get_the_permalink();
                        $link='<a href="'.$href.'">'.get_the_title().'</a>';
                        // $link=$link.' ~ '.get_the_date();
                        print chr(9).chr(9).'<li>'.$link.'</li>'.PHP_EOL;
                    }
                    print chr(9).'</ul>'.PHP_EOL;
                }
                ?>
            </div>
        </div>
    </div>
</body>

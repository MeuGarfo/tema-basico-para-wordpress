<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="410x410" href="<?php bloginfo('template_url');?>/screenshot.jpg">
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/screenshot.jpg">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@aicouto" />
    <meta name="twitter:title" content="<?php the_title(); ?>" />
    <meta name="twitter:description" content="" />
    <?php $url=wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); if($url){
        ?><meta name="twitter:image" content="<?php print $url;?>" />
        <meta property="og:image" content="<?php print $url;?>">
        <?php
    }else{
        ?><meta name="twitter:image" content="<?php bloginfo('template_url');?>/screenshot.jpg" />
        <meta property="og:image" content="<?php bloginfo('template_url');?>/screenshot.jpg">
        <?php
    }
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span8 offset2">
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
                }
                ?>
                <ul class="pager">
                  <li class="previous">
                    <a href="/">Página principal</a>
                  </li>
                </ul>
            </div>
        </div>
    </div>
</body>

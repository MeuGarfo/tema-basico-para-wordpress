<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v1">
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
                <h1 class="text-center"><?php bloginfo('name'); ?></h1>
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
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(53403550, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/53403550" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>

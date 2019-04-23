<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v1">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span6 offset3">
                <ul class="pager">
                    <li>
                        <a href="/">Anderson Ismael</a>
                    </li>
                </ul>
                <?php
                //https://developer.wordpress.org/reference/functions/get_the_content/
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        edit_post_link(__('Editar'));
                        print '<div class="text-center">';
                        print '<h1>'.get_the_title().'</h1>'.PHP_EOL;
                        print '<b>'.get_the_author().', '.get_the_date().'</b><br><br>'.PHP_EOL;
                        print '</div><!--text-center-->';
                        print '<div class="text-justify">';
                        the_content();
                        print '</div>';
					    print '<hr>';
						comments_template();
                    }
                }
                ?>
                <ul class="pager">
                    <li>
                        <a href="/">Anderson Ismael</a>
                    </li>
                </ul>
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
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/53403550" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>

<!doctype html>

<html>

    <head>
        <meta charset="UTF-8">

       <title <?php the_title(); ?> - <?php bloginfo( 'name' ); ?>></title>

        <?php wp_head(); ?>

     </head>

        <body <?php body_class(); ?></body>
            <div id="wrapper"> <!-- holds the whole website -->
                <header>

                    <h1 id ="wp-name"> <a href ="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a> </h1>

                    <h3 id ="site-description"><?php bloginfo( 'description' ); ?></h3>

                </header>
                <nav>
                    Your website's menu goes header
                </nav>
    
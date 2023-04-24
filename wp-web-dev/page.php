<!--*/

The template for displaying pages

This is the template that displays all pages by default
Please note that this is the wordpress construct for pages anthat other "pages" on your Wordpress site will use a different template

@packige Wordpress
@subpackage Wordpress_For_Web_Development
@since Wordpress Wordpress_For_Web_Development 0.1

*/ -->

<?php get_header(); ?>

<section id="container"> <!-- holds the content and sidebar panes -->

        <section id="content"> <!-- The main information panel for our theme -->

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <section <?php post_class(); ?> id="post-<?php the_ID(); ?>"> <!-- opening line for headline and content -->

                <h2 class="wp-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
                
                <h3>This template is <?php global $template; echo basename( $template ); ?></h3>
                    <?php the_content(); ?>

                 </section> <!-- closes content -->

                <?php endwhile; ?>


                <?php else : ?>

                <section <?php post_class()?> id="post-<?php the_ID(); ?>"></section> <!-- opening line not found -->


                    <h3>Sorry couldn't find what you are looking for!</h3>

                </section><!--closing line not found>

                <?php endif; ?>

        
           

        <!-- Placeholder for sidebar -->
        <section id="sidebar">
            <!-- Content of sidebar -->
            <p> the sidebar is working </p>
        </section>

         <?php get_footer(); ?>  
       
    </section> <!-- closes sectiion-->
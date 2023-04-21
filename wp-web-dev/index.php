<?php get_header(); ?>

<section id="container"> <!-- holds the content and sidebar panes -->

        <section id=""content"> <!-- The main information panel for our theme -->

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <section <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 

                <h2 class="wp-title"><a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> </h2>
                
                    <?php the_content(); ?>

                <?php endwhile; ?>

                <?php endif; ?>
        
            </section> <!-- closes content -->

           

        <!-- Placeholder for sidebar -->
        <section id="sidebar">
            <!-- Content of sidebar -->
            <p> the sidebar is working </p>

         <?php get_footer(); ?>  
        </section> 
    </section> <!-- closes sectiion-->
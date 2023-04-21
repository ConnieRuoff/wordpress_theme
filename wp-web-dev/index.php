<?php get_header(); ?>

<section id="container"> <!-- holds the content and sidebar panes -->

        <section id=""content"> <!-- The main information panel for our theme -->

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <section <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 

                <h2 class="wp-title"><a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> </h2>
                
                    <?php the_content(); ?>

                 </section> <!-- closes content -->

                <?php endwhile; ?>

                <section class="post-nav">

                     <p><?php previous_post_link( "%link", "Previous Post" ); ?></p>
                     <p><?php next_post_link( "%link", "Next Post" ) ?></p>

                <?php endif; ?>
        
           
""
           

        <!-- Placeholder for sidebar -->
        <section id="sidebar">
            <!-- Content of sidebar -->
            <p> the sidebar is working </p>

         <?php get_footer(); ?>  
        </section> 
    </section> <!-- closes sectiion-->
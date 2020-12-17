<?php get_header(); ?>

    <main class="container page section no-sidebars">
        <?php while(have_posts() ): the_post(); ?>
            <h1 class="text-center text-primary"><?php the_title(); ?></h1>

            <!-- <?php the_post_thumbnail() ?> -->
            <?php 
                // check if an image exist
                if( has_post_thumbnail() ):
                    the_post_thumbnail('square');
                else:
                    echo "<p> No image </p>";
                endif;
            ?>

            <div class="text-center">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    
        <?php get_template_part('template-parts/page', 'loop'); ?>
    </main>

<?php get_footer(); ?>
<?php get_header(); ?>

    <main class="container page section">
        <?php while(have_posts() ): the_post();?>
            <h1 class="text-center text-primary"><?php the_title(); ?></h1>

            <?php 
                // check if an image exists
                if( has_post_thumbnail() ) :
                    the_post_thumbnail();
                else: 
                    echo "<p>No image</p>";
                endif;
            ?>

            <div class="text-center">
                <?php the_content(); ?>
            </div>

            

        <?php endwhile; ?>
    </main>

<?php get_footer(); ?>
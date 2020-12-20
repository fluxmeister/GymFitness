<?php 
/* 
* Template Name: Page with Sidebar
*
*/

?>

    <?php get_header(); ?>

        <main class="container page section no-sidebars">
            <?php while(have_posts() ): the_post(); ?>
                <h1 class="text-center text-primary"><?php the_title(); ?></h1>

                <!-- <?php the_post_thumbnail() ?> -->
                <?php 
                    // check if an image exist
                    if( has_post_thumbnail() ):
                        the_post_thumbnail('blog', array('class' => 'featured-image'));
                    endif;
                ?>

                
                <?php the_content(); ?>
                
            <?php endwhile; ?>
        
            <?php get_template_part('template-parts/page', 'loop'); ?>

            <aside>
                    <h2>Sidebar Here</h2>
            </aside>
        </main>

    <?php get_footer(); ?>
<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

?>
	
    <?php 
        while (have_posts()) {
            the_post();

            get_template_part('content', 'page');

            echo "\n\n";
            
            // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || '0' != get_comments_number()) {
                comments_template();
            }

            echo "\n\n";

        } //endwhile;
        ?>
<?php get_footer(); ?>
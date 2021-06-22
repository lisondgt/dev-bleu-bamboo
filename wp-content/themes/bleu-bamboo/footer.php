<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bleu_Bamboo
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="container">
            <div id="footer-columns" class="row">
                <div id="footer-column-1">
                    <?php
                    if(is_active_sidebar('footer-column-1')){
                        dynamic_sidebar('footer-column-1');
                    }
                    ?>
                </div>
                <div id="footer-column-2">
                    <?php
                    if(is_active_sidebar('footer-column-2')){
                        dynamic_sidebar('footer-column-2');
                    }
                    ?>
                </div>
                <div id="footer-column-3">
                    <?php
                    if(is_active_sidebar('footer-column-3')){
                        dynamic_sidebar('footer-column-3');
                    }
                    ?>
                </div>
                <div id="footer-column-4">
                    <?php
                    if(is_active_sidebar('footer-column-4')){
                        dynamic_sidebar('footer-column-4');
                    }
                    ?>
                </div>
            </div>
            <div class="row footer-second">
                <div id="footer-second-column-1">
                    <?php
                    if(is_active_sidebar('footer-second-column-1')){
                        dynamic_sidebar('footer-second-column-1');
                    }
                    ?>
                </div>
                <div id="footer-second-column-2">
                    <?php
                    if(is_active_sidebar('footer-second-column-2')){
                        dynamic_sidebar('footer-second-column-2');
                    }
                    ?>
                </div>
            </div>
        </div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

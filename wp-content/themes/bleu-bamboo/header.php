<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bleu_Bamboo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bleu-bamboo' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="container">
            <div class="nav-container">
                <span class="toggle-navbar"></span>

                <div class="site-branding-mobile">
                    <?php
                    the_custom_logo();
                    if ( is_front_page() && is_home() ) :
                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
                    else :
                        ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php
                    endif;
                    $bleu_bamboo_description = get_bloginfo( 'description', 'display' );
                    if ( $bleu_bamboo_description || is_customize_preview() ) :
                        ?>
                        <p class="site-description"><?php echo $bleu_bamboo_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                    <?php endif; ?>
                </div><!-- .site-branding -->

                <div class="navbar">
                    <nav id="site-navigation-left" class="nav nav-left">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary-menu-left',
                                'menu_id'        => 'primary-menu-left',
                            )
                        );
                        ?>
                    </nav>

                    <div class="site-branding-desktop">
                        <?php
                        the_custom_logo();
                        if ( is_front_page() && is_home() ) :
                            ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                        else :
                            ?>
                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php
                        endif;
                        $bleu_bamboo_description = get_bloginfo( 'description', 'display' );
                        if ( $bleu_bamboo_description || is_customize_preview() ) :
                            ?>
                            <p class="site-description"><?php echo $bleu_bamboo_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                        <?php endif; ?>
                    </div><!-- .site-branding -->

                    <nav id="site-navigation-right" class="nav nav-right">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary-menu-right',
                                'menu_id'        => 'primary-menu-right',
                            )
                        );
                        ?>
                    </nav>
                </div>

                <nav id="woocommerce-navigation" class="nav nav-woocommerce">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'woocommerce-menu',
                            'menu_id'        => 'woocommerce-menu',
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
	</header><!-- #masthead -->

<?php

/**
 * Template Name: Home
 * Template Post Type: post, page
 */

get_header();

?>

    <main id="home-page" class="site-main">

        <?php
        $header = get_field('header');
        if ($header): ?>
            <div class="header">
                <?php if ($header['image']): ?>
                    <img src="<?php echo $header['image']; ?>" class="img-bg-header"/>
                <?php endif; ?>
                <?php if ($header['texte']): ?>
                    <div class="content-header">
                        <div class="container">
                            <?php echo $header['texte']; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <a href="#content-page" class="anchor-header-scroll-down"><span
                            class="icon icon-souris"></span>Scroll</a>
            </div>
        <?php endif; ?>

        <section id="content-page">
            <?php

            // on check si il y a des blocs dans le constructeur de notre page
            if (have_rows('constructeur')) :
                while (have_rows('constructeur')): the_row(); // on boucle sur nos blocs

                    // notre bloc texte + image double colonnes
                    if (get_row_layout() == 'texte_image_colonnes'): ?>

                        <?php $style = get_sub_field('style'); ?>

                        <?php if ($style['container']):
                            $container_class = 'container';
                            $p_0_class = '';
                        else:
                            $container_class = 'container-fluid';
                            $p_0_class = '';
                            if ($style['position_image'] === 'gauche'):
                                $p_0_class = 'ps-md-0';
                            else:
                                $p_0_class = 'ps-md-0';
                            endif;
                        endif; ?>

                        <?php if ($style['taille_colonne'] === '6/6'):
                            $colonne_image = 'col-12 col-md-6';
                            $colonne_texte = 'col-12 col-md-6';
                        elseif ($style['taille_colonne'] === '7/5' & $style['position_image'] === 'gauche'):
                            $colonne_image = 'col-12 col-md-7';
                            $colonne_texte = 'col-12 col-md-5';
                        elseif ($style['taille_colonne'] === '7/5' & $style['position_image'] === 'droite'):
                            $colonne_image = 'col-12 col-md-5';
                            $colonne_texte = 'col-12 col-md-7';
                        elseif ($style['taille_colonne'] === '4/8' & $style['position_image'] === 'gauche'):
                            $colonne_image = 'col-12 col-md-4';
                            $colonne_texte = 'col-12 col-md-8';
                        elseif ($style['taille_colonne'] === '4/8' & $style['position_image'] === 'droite'):
                            $colonne_image = 'col-12 col-md-8';
                            $colonne_texte = 'col-12 col-md-4';
                        endif; ?>

                        <?php if ($style['position_image'] === 'gauche'):
                            $position_image_class = 'order-1';
                            $position_texte_class = 'order-2';
                        else:
                            $position_image_class = 'order-2';
                            $position_texte_class = 'order-1';
                        endif; ?>

                        <div class="bloc-texte-image-colonnes <?php if ($style['background_color']): echo $style['background_color']; endif; ?>">

                            <?php if ($style['element_graphique']): ?>
                                <img src="<?php echo $style['element_graphique']; ?>"
                                     class="element-graphique <?php if ($style['classe_element_graphique']): echo $style['classe_element_graphique']; endif; ?>"/>
                            <?php endif; ?>

                            <div class="<?php echo $container_class . ' ' . $p_0_class; ?>">
                                <div class="row align-items-center">
                                    <div class="colonne-image mb-5 mb-md-0 <?php echo $colonne_image . ' ' . $position_image_class . ' ' . $p_0_class; ?>">
                                        <img src="<?php the_sub_field('image'); ?>"/>
                                    </div>
                                    <div class="<?php echo $colonne_texte . ' ' . $position_texte_class; ?>">
                                        <?php the_sub_field('texte'); ?>
                                    </div>
                                </div>
                            </div>

                            <?php if ($style['transition']): ?>
                                <img src="<?php echo $style['transition']; ?>" class="transition"/>
                            <?php endif; ?>

                        </div>

                    <?php
                    // notre bloc texte + image full screen
                    elseif (get_row_layout() == 'texte_image_full_screen'): ?>
                        <div class="bloc-texte-image-full-screen">
                            <div class="container">
                                <?php the_sub_field('titre'); ?>
                                <img src="<?php the_sub_field('image'); ?>"/>
                                <div class="row justify-content-center container-texte">
                                    <div class="col-12 col-md-8">
                                        <?php the_sub_field('texte'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif;
                endwhile;
            endif;

            ?>
        </section>

    </main><!-- #main -->

<?php

get_footer();
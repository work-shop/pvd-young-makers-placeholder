<?php

    $icons = array_map(
        function( $icon ) { return 'partials/icons/' . $icon; },
        array(
            'icon-3d-printer.php',
            'icon-dash-robot.php',
            'icon-heat-press.php',
            'icon-laser-cutter.php',
            'icon-sewing-machine.php',
            'icon-soldering-iron.php',
            'icon-vinyl-cutter.php'
        )
    );

?>

<section class="container-fluid mb6 hidden-xs">
    <div class="row">
        <div class="offset-lg-3 offset-md-2 offset-xs-1 col-sm-5 col-lg-7 home-module link-sizing-reference">

            <div class="module-tag bg-brand-teal-dark">
                <span class="h6 uppercase white bold">The Makerspaces</h5>
            </div>

            <h3 class="brand-teal-dark mb1"><?php the_field('the_makerspaces_large_text', $id); ?></h3>

            <h5 class="brand-teal-dark"><?php the_field('the_makerspaces_small_text', $id); ?></h5>

        </div>

        <div class="col-sm-2">
            <div class="module-library-list module-link-list">
                <?php foreach ( $icons as $i => $url ) : ?>

                    <span class="module-makerspace-link module-link-list-link">

                        <?php include( locate_template( $url ) ); ?>

                    </span>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

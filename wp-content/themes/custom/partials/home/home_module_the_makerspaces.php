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
            'icon-vinyl-cutter.php',
            'icon-3d-printer.php',
        )
    );

?>

<section class="container-fluid mb8">
    <div class="row">
        <div class="offset-xs-0 col-xs-12   offset-md-1 col-md-7    link-sizing-reference">
            <div class="home-module">
                <div class="module-tag bg-brand-teal-dark">
                    <span class="h6 uppercase white bold">The Makerspaces</h5>
                </div>

                <h3 class="brand-teal-dark mb1"><?php the_field('the_makerspaces_large_text', $id); ?></h3>

                <h5 class="brand-teal-dark"><?php the_field('the_makerspaces_small_text', $id); ?></h5>
            </div>
        </div>

        <div class="col-sm-2 hidden-xs hidden-sm module-list-shift">
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

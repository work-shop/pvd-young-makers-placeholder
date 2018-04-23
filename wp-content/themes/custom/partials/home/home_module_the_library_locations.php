<section class="container-fluid mb6">
    <div class="row">
        <div class="offset-sm-1 col-sm-4 home-module link-sizing-reference">

            <div class="module-tag bg-brand-teal-dark">
                <span class="h6 uppercase white bold">The Library Locations</h5>
            </div>

            <h3 class="brand-teal-dark mb1"><?php the_field('the_library_locations_large_text', $id); ?></h3>

            <h5 class="brand-teal-dark"><?php the_field('the_library_locations_small_text', $id); ?></h5>

        </div>

        <div class="col-sm-6">
            <div class="module-library-list module-link-list">
                <?php foreach ( get_field('the_libraries', $id) as $i => $library ) : ?>

                    <a class="module-library-link module-link-list-link" href="<?php echo $library['library_link']; ?>" target="_blank">
                        <span class="bold library-name" ><?php echo $library['library_name']; ?></span>
                        <span class="h6 content-description">See Hours and Directions</span>
                    </a>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

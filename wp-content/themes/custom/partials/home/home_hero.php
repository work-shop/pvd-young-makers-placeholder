<?php  ?>

<section id="home-callout" class="container-fluid mb8">
    <div class="row ">
        <div class="col-xs-8 offset-xs-2 offset-md-1 col-md-3 mb4">

            <?php include( locate_template('partials/logo.php') ); ?>

        </div>
        <div class="offset-xs-1 col-xs-10 col-md-5">
            <h1 class="bold brand-teal-dark centered-xs home-callout-text">
                <?php echo get_field( 'page_hero_text', $id ); ?>
            </h1>
        </div>
    </div>
</section>

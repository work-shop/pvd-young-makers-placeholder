<section class="initiative-container container-fluid mb6">
    <div class="row">
        <div class="offset-xs-0 col-xs-12 offset-sm-1 col-sm-6 home-module">

            <div class="module-tag bg-brand-teal-dark">
                <span class="h6 uppercase white bold">The Initiative</h5>
            </div>

            <?php echo get_field('the_initiative_text', $id); ?>

        </div>

        <div class="offset-xs-0 col-xs-12 offset-sm-1 col-sm-3 home-module mayors-quotation">

            <h5 class="quote-text bold mb2">

                &ldquo;<?php echo get_field('quotation', $id); ?>&rdquo;

            </h5>

            <h6 class="mayors-name bold h6">– <?php echo get_field('mayors_name', $id); ?></h6>

        </div>
    </div>
</section>

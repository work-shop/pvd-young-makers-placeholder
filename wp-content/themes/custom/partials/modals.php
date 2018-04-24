

<div id="contact" class="modal modal-target off modal-toggle" data-modal-target="contact">
    <section class="contact-element container">

        <div class="module-tag">
            <span class="h6 uppercase white bold">Contact Us!</h5>
        </div>

        <div class="row">
            <div class="contact-form col-sm-6">

                <?php gravity_form( 1, false, false, false, null, true ); ?>

            </div>
            <div class="contact-info col-sm-6">
                <h5 class="uppercase bold brand-orange mb1">CONTACT BY PHONE</h5>
                <p class="brand-orange mb2">We’re available by phone or email from  9am to 5pm. Ask about PVD Young Makers when you call!</p>
                <div class="mb2"><span class="h5 phone contact-highlight-region mb2"><?php echo get_field('contact_phone_number', 'option'); ?></span></div>
                <div class="mb2"><span class="h6 email contact-highlight-region mb2"><?php echo get_field('contact_email', 'option'); ?></span></div>
                <p class="tiny brand-orange">Call or visit Providence Public Library or your local Providence Community Library for even more information.</p>
            </div>

        </div>

    </section>
</div>

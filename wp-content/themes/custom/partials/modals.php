<?php $phone = get_field('contact_phone_number', 'option');
      $phone_safe = preg_replace('/[^0-9]+/i', '', $phone);
 ?>

<div id="contact" class="modal off blanket">
    <section class="contact-element container">

        <div class="module-tag">
            <span class="h6 uppercase white bold">Contact Us!</h5>
        </div>

        <div class="module-tag-right modal-toggle" data-modal-target="contact">
            <span class="h6 uppercase brand-orange bold modal-toggle modal-close-button" data-modal-target="contact">Close</span>
        </div>

        <div class="row">
            <div class="contact-form col-md-6 mb2">

                <?php gravity_form( 1, false, false, false, null, false ); ?>

            </div>
            <div class="contact-info col-md-6 mb2">
                <h5 class="uppercase bold brand-orange mb1">CONTACT BY PHONE</h5>
                <p class="brand-orange mb2">We’re available by phone or email from  9am to 5pm. Ask about PVD Young Makers when you call!</p>
                <div class="mb2"><span class="h5 phone contact-highlight-region mb2"><a href="tel:<?php echo $phone_safe; ?>"><?php echo get_field('contact_phone_number', 'option'); ?></a></span></div>
                <div class="mb2"><span class="h6 email contact-highlight-region mb2"><?php echo get_field('contact_email', 'option'); ?></span></div>
                <p class="tiny brand-orange">Call or visit Providence Public Library or your local Providence Community Library for even more information.</p>
                <p class="tiny brand-orange">You can also contact the Mayor's Center for City Services (MCCS) at Providence City Hall, Monday through Friday from 8:30am to 4:30pm by dialing 3-1-1.</p>
            </div>

        </div>

    </section>
</div>

<?php $partners = get_field('partners', 'option'); ?>
<?php $partners_l = array_filter( $partners, function( $i ) { return $i % 2 == 0; },  ARRAY_FILTER_USE_KEY ); ?>
<?php $partners_r = array_filter( $partners, function( $i ) { return $i % 2 == 1; }, ARRAY_FILTER_USE_KEY ); ?>

<footer id="footer" class="block">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-7 offset-sm-1 col-xs-12 footer-col">
                <div class="row">
                    <div class="col-sm-12">
                        <h5 class="footer-heading bold uppercase brand-teal-lighter mb2">Partners</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <?php foreach ( $partners_l as $i => $partner ) : ?>
                            <div class="partner-link"><a class="partner-url" href="<?php echo $partner['partner_url'] ?>"><?php echo $partner['partner_name']; ?></a></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-sm-6">
                        <?php foreach ( $partners_r as $i => $partner ) : ?>
                            <div class="partner-link"><a class="partner-url" href="<?php echo $partner['partner_url'] ?>"><?php echo $partner['partner_name']; ?></a></div>
                        <?php endforeach; ?>
                    </div>
                </div>
			</div>
			<div class="col-md-3 col-xs-12 footer-col">
                <div class="row">
                    <div class="col-sm-12">
                        <h5 class="footer-heading bold uppercase brand-teal-lighter mb2">Contact Us</h5>
                    </div>
                    <div class="col-sm-12">
                        <h6 class="footer-heading tiny bold uppercase brand-teal-lighter mb1">Phone<span class="ml1"><?php echo get_field('contact_phone_number', 'option'); ?></span></h5>
                    </div>
                    <div class="col-sm-12">
                        <h6 class="footer-heading tiny bold uppercase brand-teal-lighter mb1">Email<span class="ml1"><?php echo get_field('contact_email', 'option'); ?></span></h5>
                    </div>
                </div>
                <div class="row">
                </div>
			</div>
		</div>

        <div class="row">
            <div class="offset-sm-1 col-sm-6 site-credit">
                <a href="http://workshop.co" target="_blank">
                    <h6 class="brand-teal tiny">Site by Work-Shop Design Studio</h6>
                </a>
            </div>
        </div>

	</div>
</footer>

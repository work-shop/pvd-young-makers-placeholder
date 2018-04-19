<?php get_template_part('partials/header'); ?>

<?php $id = get_the_ID(); ?>

<?php include( locate_template('partials/home/home_hero.php') ); ?>

<?php include( locate_template('partials/home/home_module_the_initiative.php' ) ); ?>

<?php include( locate_template('partials/home/home_module_the_makerspaces.php' ) ); ?>

<?php include( locate_template('partials/home/home_module_the_library_locations.php' ) ); ?>

<?php get_template_part('partials/footer' ); ?>

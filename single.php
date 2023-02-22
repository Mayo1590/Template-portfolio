<?php get_header(); ?>

<div class="contenu">
    <div class="projet">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>

<?php get_footer(); ?>

<style>
    .projet {
        margin-top: 2%;
    }
</style>
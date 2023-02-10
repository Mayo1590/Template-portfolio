<?php get_header(); ?>

<div class="contenu">
    <h1 id="titre"><?php the_title(); ?></h1>
    <p>
        <?php the_content(); ?>
    </p>

<?php get_footer(); ?>

</body>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/4901acba97.js" crossorigin="anonymous"></script>
</html>
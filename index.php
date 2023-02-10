    <?php get_header(); ?>

    <div class="accueil">
        <h1 class="titre-accueil">Bonjour ! <br> Bienvenue sur mon portfolio</h1>
        <picture class="img-accueil">
            <source media="(max-width: 600px)" type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/cover.jpg"/>
            <source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/cover-grand.jpg"/>
            <img class="img-accueil" src="<?php echo get_template_directory_uri(); ?>/assets/images/cover.jpg" alt="coucher de soleil"/>
        </picture>
    </div>

    <div class="contenu">
        <?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();			
        ?>
        <h2><?php the_title(); ?></h2>
        <p>
            <?php the_content(); ?>
        </p>
        <?php
			endwhile;
		else :
			get_template_part( 'content', 'none' );
		endif;
        ?>


    <?php get_footer(); ?>

</body>

<style>
    .icon .bar {
        z-index: 1;
        background-color: white;
    }

    .menu {
        z-index: 1;
    }
</style>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/4901acba97.js" crossorigin="anonymous"></script>
</html>
<?php get_header(); 

    $posts = get_posts();
    ?>



    <?php foreach($posts as $post): ?>

        <h1><?= the_title(); ?></h1>
        <small><?= the_category(',')?></small>
        <p><?= the_content(); ?></p>

    <?php endforeach ?>


<?php get_footer(); ?>
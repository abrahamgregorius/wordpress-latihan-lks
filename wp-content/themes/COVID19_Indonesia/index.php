<?php 

    get_header();
    $posts = get_posts();
    $img = get_theme_file_uri('/images/pic2.jpg');
    /* $title = get_the_title(); */
    $selectedCategories = get_posts(['category_name' => 'each-selected-editor']);
    $content = get_the_content();
?>

    <?php foreach($posts as $post):  ?>
        <div class="flex" style="display: flex;">
            <img src="<?php echo $img ?>" class="img-post" alt="" style="">
                <div class="bungkus" style="flex-direction: column;">
                    <h1> <?php the_title() ?> </h1> 
                    <p> <?php the_content();?> </p>
                </div>
        </div>
    
    <hr>
    <?php endforeach; ?>
        
    
    <h2>Each Selected Editor</h2>
        <?php foreach($selectedCategories as $post): ?>
            <div class="flex" style="display: flex;">
            <img src="<?php echo $img ?>" class="img-post" alt="" style="">
                <div class="bungkus" style="flex-direction: column;">
                    <h1> <?php the_title() ?> </h1> 
                    <p> <?php the_content() ?> </p>
                </div>
        </div>
        <?php endforeach; 
        
        get_footer();
        ?>


</html>
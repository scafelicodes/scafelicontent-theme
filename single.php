<?php get_header(); ?>


<section class="header-page">
    <div class="container">
        <div class="row">
        <h2><?php
            $category = get_the_category(); 
            echo $category[0]->cat_name;
            ?></h2>
            </div>
    </div>
</section>

<?php
  while (have_posts()) {
  the_post();
?>

<div class="container marg-t-50 marg-b-50">
    <div class="row">

        <!-- <div class="col-md-2">
            <p class="meta-post">Por <?php the_author_posts_link(); ?></p>
            <p class="meta-post"><?php the_time('j \d\e F \d\e Y') ?></p>
        </div> -->


            <!-- <p class="category-title"><?php
            $category = get_the_category(); 
            echo $category[0]->cat_name;
            ?></p> -->

            <h1 class="master-title"><?php the_title() ?></h1>

          
                <div class="col-md-9">
                    <p class="meta-post">Por <?php the_author_posts_link(); ?> em <?php the_time('j \d\e F \d\e Y') ?></p>
                    <?php the_content(); ?>
                </div>
                <?php get_sidebar(); ?>
          
            

        
    </div>        
</div>

<?php } ?>

<?php get_footer(); ?>
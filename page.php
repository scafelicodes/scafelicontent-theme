<?php get_header(); ?>


<?php
  while (have_posts()) {
  the_post();
?>

<div class="container content">

    <h1 class="title-page"><?php the_title() ?></h1>

    <?php the_content(); ?>

    </div>                    
</div>
          

<?php } ?>


<?php get_footer(); ?>
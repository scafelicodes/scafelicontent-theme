<?php /* Template Name: Blog Template */ ?>

<?php get_header(); ?>

<section class="header-page">
    <div class="container">
        <h2><?php the_title() ?></h2>
    </div>
</section>

<div class="container">    
  	<div class="row">
        <div class="col-md-9">
            
            <?php
                $wp_query = new WP_Query();
                query_posts( array( 'post_type' => 'post', 'showposts' => 6, 'paged'=>$paged ));
                if(have_posts()):
                while ($wp_query -> have_posts()) : $wp_query -> the_post();
            ?>

            <div class="row post-preview">
                <div class="col-md-6">
                    
                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('singlelist'); ?></a>                    
                </div>
                <div class="col-md-6">
                    <div class="desc-post">
                        <p class="cat-preview"><?php
                        $category = get_the_category(); ?>
                        <?php echo $category[0]->cat_name; ?></p>
                        <p class="date-preview"><?php the_time('j \d\e F \d\e Y') ?></p>    
                        <a class="title-preview" href="<?php the_permalink();?>"><?php the_title(); ?></a>
                    </div>
                </div>                
            </div>
            <?php endwhile; endif; ?>            
        </div>

        <?php get_sidebar(); ?>

    </div>		
</div>

<div class="container text-center">
    <?php
        global $wp_query;
        $big = 999999999; // need an unlikely integer
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
    ?>
</div>

<?php get_footer(); ?>
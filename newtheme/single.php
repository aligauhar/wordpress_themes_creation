
<!-- to seee the  bigger view of the post -->
<?php get_header(); ?>

<div class="container">
    <h1>
        <?php single_cat_title(); ?>
    </h1>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="card mb-4">
        <div class="card-body">
            
    <?php the_title(); ?>

        <?php if(has_post_thumbnail()); ?>
                <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">


    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="btn btn-success" >Read More</a>
    
    </div>
    </div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
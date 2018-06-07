<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part('template-parts/hero'); ?>
<div class="posts">
    <div class="container">
        <div class="row">
            <?php
                $fantastic_count = 0;
                while(have_posts()): the_post();
                    if( 0 == $fantastic_count % 4 ){
                        get_template_part('template-view/single-view');
                    }else{
                        get_template_part('template-view/tripple-view');
                    }
                $fantastic_count++;
                endwhile;
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>

<?php 


<div class="col-md-4">
    <div class="post">
        <?php

        if( has_post_thumbnail() ){
            the_post_thumbnail('medium', array('class' => 'img-fluid'));
        }
        
        ?>
        <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <p>
            <strong><?php the_author_posts_link(); ?></strong><br/>
            <?php echo get_the_date(); ?>
        </p>

        <?php the_content(); ?>
    </div>

</div>



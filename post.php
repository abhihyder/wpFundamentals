<?php 

// Have to remove <h2> & <p> then write php code in index file

    if(have_posts()) : 
        while(have_posts()) : the_post(); ?>					
            <article class="home_artcl_wrap">
                <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                <p><?php the_content(); ?></p>
            </article>					
    <?php	endwhile;
    else:
    echo 'No Posts Found';
    endif;
?>

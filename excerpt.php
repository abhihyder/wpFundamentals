<!--
Excerpt is an optional text associated to a post. Most of the time, it is used as the post summary.
Just edit the php code from post loop [ <p><?php the_content(); ?></p>] as
[<p><?php echo excerpt('30'); ?></p>]
“30” is the number which is declare word number in post summary. 

Then create a function in functions.php

-->

<?php
    function excerpt($num) {
        $limit = $num+1;
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='readmore'>Continue Reading &raquo;</a>";
        echo $excerpt;
    }

?>
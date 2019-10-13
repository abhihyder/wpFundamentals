<!--Write the php code in index.php-->

<div class="featured_image">
    <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
</div>



<?php 
    // Then Register the featured image in functions.php
    add_theme_support('post-thumbnails');
?>

<!--
    To control image width-height we can use css. 
For select image in css we have to go inspect element of the image, have to select div class and WP default class (wp-post-image)
Example:
div.featured_image img.wp-post-image {
	width:100%;
	height: auto;
	margin-bottom:10px;
}
-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

<!--
OR
Call stylesheet and JS by 'functions.php':-
-->

<?php
    // in functions.php file

    function calling_resources(){
       
        wp_enqueue_style('main-style', get_stylesheet_uri() ); //for main css file (style.css)
       
        wp_enqueue_style('nivo-light' , get_template_directory_uri() . '/themes/light/light.css', ' ' , '1.0');// for other css file (custom.css). (/themes/light/light.css is css location)
        
        wp_enqueue_script('nivo-js1' , get_template_directory_uri() . '/js/jquery-1.9.0.min.js', ' ' , '1.0');
    }
    
    add_action('wp_enqueue_scripts' , 'calling_resources');

?>




<!--Also have to write 2 php code in index file-->

<?php wp_head(); //At last of head
?>

<?php wp_footer(); //At last of body
?>

<?php	
// For main menu we have to replace <ul> tag (html file) by a php code.

    $array  =array (
    'theme_location' => 'primary'
    );
    wp_nav_menu($array);

?>




<?php	
//If we have more menu, again have to replace <ul> tag by a php code. Suppose we have a footer menu….
    $array2 =array (
    'theme_location' => 'footer'
    );
    wp_nav_menu($array2);
?>




<?php
// Also have to write a function in functions.php file:-
    register_nav_menus(array(
        'primary' => __('Top Menu'),
    'footer' => __('Footer Menu')
    ));

?>

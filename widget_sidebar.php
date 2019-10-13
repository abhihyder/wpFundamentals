<!--
Let’s separate the sidebar part as sidebar.php
Then write a php code in index.php
-->
<?php get_sidebar();?>

<!--
Now let’s comment-out the sidebar div and write a php code 
-->
<?php dynamic_sidebar('sidebar1');
//“sidebar1” is a unique id name, this id name have to include in functions.php
?>



<!--
 Now create a function in functions.php file:-
-->
<?php
    function ourWidget(){
        register_sidebar(array(
        'name'=> 'Top Sidebar',
        'id'=> 'sidebar1',
        'before_widget'=> '<div class="sidebar">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="side_h2">',
        'after_title'=> '</h2>'		
        ));
        }

        add_action('widgets_init' , 'ourWidget');
        
?>


<!--
If we have anymore widget let’s separate the widget as custom.php
Then write a php code in index.php

-->
<?php get_template_part ('custom');?> 

<!--
Then same as like sidebar register…..
Comment-out the custom widget div and write a php code
-->
<?php dynamic_sidebar('sidebar2');?>

<!--
Now again register the custom widget in previous sidebar function.
For example:- 

-->
<?php
    function ourWidget(){
            
        register_sidebar(array(
        
        'name'=> 'Top Sidebar',
        'id'=> 'sidebar1',
        'before_widget'=> '<div class="sidebar">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="side_h2">',
        'after_title'=> '</h2>'
        
        ));
        
        register_sidebar(array(
        'name' => 'Footer Top Left',
        'id' => 'sidebar2',
        'before_widget' => '<div class="b_f_s_wrap">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="red">',
        'after_title' => '</h2>',
    ));	
    }
    
    add_action('widgets_init' , 'ourWidget');

//Just edit the ‘name, id, befoe_widget, after_widget etc’
//To be continuing for more custom widget…………..

?>
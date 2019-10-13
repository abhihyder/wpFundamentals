<!--
Just have to include a php code in index.php (or wherever we want to show comments to the visitor) in post meta section.
-->
<?php comments_popup_link('No Comment', '1 Comment', '% Comments', 'my_comment_class', 'Comments Off'); ?>

<!--
There have 5 parameters. 
1: if no comment on the post, what will show.
2: if 1 comment on the post, what will show.
3: if one more comments on the post, what will show .
4: this is a class name for this <a> tag. By the class we can stylize this.
5: if we turnoff the comment section, what will show.
-->



<!--
Now we have to bring comment template for every post where anyone can comment.
Just write a php code in single.php file (every single post controlled from single.php file)

-->
<?php comments_template(); ?>
<!--
After add that function wp will create default comment template. then we can stylies that template.  just inspect the comment element then fundout therte id or class and stylies by css file.

-->
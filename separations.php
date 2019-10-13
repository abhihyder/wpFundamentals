<!--
<html> to </header> save in a new file as header.php
<footer> to </html> save in a new file as footer.php

then include in index file
-->
<?php get_header();?>



<!--
If we want to call anymore custom separate parts (without header, footer and sidebar), have to create a custom file as like custom.php. then write a php code in index.php
-->
<?php get_template_part (custom);?>




<?php get_footer();?>

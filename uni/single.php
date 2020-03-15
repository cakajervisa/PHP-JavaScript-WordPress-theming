<?php
get_header();
// postimi i titujve te posteve me ane te php dhe contetnit
while (have_posts()) {
	the_post(); ?>          
	<h2>  <?php the_title(); ?></h2>
	<?php the_content(); ?>
	<hr>


   <?php }
   get_footer();

?>
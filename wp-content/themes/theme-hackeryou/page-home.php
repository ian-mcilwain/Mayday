<?php

/*
	Template Name: Home Page
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>
    <?php endwhile; // end the loop?>
    <div class="sponsors">
	 <?php  dynamic_sidebar( 'sponsor-widget-area' ); ?>
	</div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
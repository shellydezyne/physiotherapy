<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package physiotherapy
 */

  ?>
  <?php get_header();?>
 <!-- Header Section Over -->







 <section class="singl-blog-post-area section_padding_100">
     <div class="container">
         <div class="row">
             <div class="col-xs-12 col-md-9">
								<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content-detail', get_post_format() );

		the_post_navigation();


		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile;
	?>

		 </div>
      <?php get_sidebar();?>
	 </div>
 </div>
 </section>







<?php
get_template_part('footer','blog');
?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package physiotherapy
 */

 get_template_part('header','blog');
 ?>
 <section class="breadcumb_area text-center">
     <div class="container">
         <div class="row">
             <div class="col-xs-12">
                 <div class="breadcumb_section">
                     <!-- Breadcumb page title start -->
                     <div class="page_title">
                         <h3>Blog</h3>
                     </div>
                     <!-- Breadcumb page pagination start -->
                     <ol class="breadcrumb">
                         <li><a href="/">Home</a></li>
                         <li class="active">Blog</li>
                     </ol>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section class="blog_area section_padding_100">






 <?php
 			/* Start the Loop */
 			while ( have_posts() ) : the_post();

 				/*
 				 * Include the Post-Format-specific template for the content.
 				 * If you want to override this in a child theme, then include a file
 				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
 				 */
 				get_template_part( 'template-parts/content', get_post_format() );


 			endwhile;

 			/*the_posts_navigation();*/


 	 ?>




 </section>
 <?php get_template_part('footer','blog'); ?>

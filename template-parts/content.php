<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package physiotherapy
 */

?>
 <div class="container">
<div class="col-md-12 col-sm-6">
		<div class="single_latest_news_area item">
			<!--<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>-->

		<div class="single_latest_news_img_area">
	<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="media-box grid-featured-img">
								<?php the_post_thumbnail(); ?>
							</a>
						<?php endif; ?>
					</div>

  <div class="single_latest_news_text_area">
		<?php
		if ( is_single() ) :?>

			  <div class="news_title">
					<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</div>

		<?php  if ( 'post' === get_post_type() ) : ?>

			<div class="author_name_date">
			<div class="date">
			<?php physiotherapy_posted_on(); ?>
		</div>
	<!-- .entry-meta -->
	</div>
		<?php
		endif; ?>
<!-- .entry-header -->


		    <div class="news_content">
		<?php
			the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'physiotherapy' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			/*wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'physiotherapy' ),
				'after'  => '</div>',
			) );*/
		?>
	</div>
<!-- .entry-content -->
	<div class="learn_more_button">
			<a class="btn btn-default" role="button" href="<?php  esc_url( get_permalink() ) ?>">Read More</a>
	</div>
</div>
<!--</article>-->
</div>
</div>

</div>
<!-- #post-## -->

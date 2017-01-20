<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package physiotherapy
 */
?>

<!--<div class="blog-list-item format-standard">-->



<div class="blog-img">

				<!--	<div class="entry-cover">
							<div class="entry-header">-->
			<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="media-box grid-featured-img">
						<?php the_post_thumbnail(); ?>
					</a>
				<?php endif; ?>
			</div>
			<div class="singl-blog-post">
					<figure>

<div class="singl-blog-title">
				<?php
				if ( is_single() ) :
					the_title( '<h2 class="entry-title">', '</h2>' );
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif;?>
			<!--</div>
			</div>-->
		</div>







			<?php	if ( 'post' === get_post_type() ) : ?>
			<!--	<div class="entry-meta">-->
			<h3>
				<?php
		echo "posted on";?></h3>
					<?php physiotherapy_posted_on(	the_date('y-m-d','<h2>','</h2>'));
					?>
			<!--	</div> .entry-meta -->
				<?php
				endif; ?>

				<!-- <div class="grid-item-excerpt">
						<p>A blog post sample excerpt text which can be edited by editing the blog post page. Excerpt length can be changed from the default blog settings...</p>
				</div> -->
			<!--	<div class="grid-item-excerpt">-->
			    <div class="singl-blog-details text-justify">
					<?php
						the_content();
						/* translators: %s: Name of current post. */
						/*
						the_content( sprintf(

							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'physiotherapy' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );*/

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'physiotherapy' ),
							'after'  => '</div>',
						) );
					?>
    </div>
		<div class="tag-share clearfix">
				<div class="share-links pull-left">
						<span class="share-promt">Share This Post:</span>
						<!-- Social Links -->
						<ul class="social-links">
								<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
						</ul>
				</div>
		</div>
			<!--	</div> .entry-content -->
				


				<!--
				<footer class="entry-footer">
					<?php physiotherapy_entry_footer(); ?>
				</footer> --> <!-- .entry-footer -->
</div>
</figure>

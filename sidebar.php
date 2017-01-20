<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package physio
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-xs-12 col-md-3">
		<!-- Blog Sidebar -->
		<div class="event_sidebar">
				<!-- Search Post -->
				<div class="search_post">
						<h4>Search <span>Post</span></h4>
						<form action="#">
								<div class="form-group">
										<input type="search" class="form-control" placeholder="Enter Keyword...">
										<button type="submit" class="btn btn-default hidden">Submit</button>
								</div>
						</form>
				</div>
				<!-- Latest Post -->
				<div class="latest_post">
						<h4>Recent <span>Post</span></h4>
						<div class="single_latest_post">
							<ul>
								<?php
									$args = array('numberposts' => 3, // Number of recent posts thumbnails to display
																'post_status' => 'publish' // Show only the published posts
															 );
									$recent_posts = wp_get_recent_posts($args);
									foreach( $recent_posts as $recent ) {
										$url = esc_url( get_permalink( $recent['ID'] ) );
										echo '<li><a href="'.$url.'" class="media-box">'.get_the_post_thumbnail($recent['ID'], 'thumbnail').'</a><h5><a href="'.$url.'">'.apply_filters( 'the_title', $recent['post_title'], $recent['ID'] ).'</a></h5><span class="meta-data grid-item-meta">Posted on '.$recent['post_date'].'</span></li>';
										/*printf('<a href="%1$s" class="media-box">
												<img src="%2$s" alt="">
										</a><li><h5><a href="%3$s">%4$s</a></h5><span class="meta-data grid-item-meta">Posted on %5$s</span></li>',
											$url,
											get_the_post_thumbnail($recent['ID'], 'thumbnail'),
											$url,
											apply_filters( 'the_title', $recent['post_title'], $recent['ID'] ),
											$recent['post_date']
										);*/
									}
									?>
							</ul>
				</div>
				<!-- Catagory -->
				<div class="catagory_section">
						<h4>Catagory</h4>
						<ul>
							<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 0,
									'title_li'   => '',
									'number'     => 10,
								) );
							?>
						</ul>
				</div>
				<!-- Achives -->
				<div class="achive_section">
						<h4>Archives</h4>

		<?php $args = array(
	'type'            => 'monthly',
	'limit'           => '',
	'format'          => 'html',
	'before'          => '',
	'after'           => '',
	'show_post_count' => false,
	'echo'            => 1,
	'order'           => 'DESC',
        'post_type'     => 'post'
);
wp_get_archives( $args ); ?>
	</div>
				<!-- tages -->
				<div class="tag_section">
						<h4>Tags <span>Cloud</span></h4>

						<?php
						$tags = get_tags();
						$html = '<ul>';
						foreach ( $tags as $tag ) {
							$tag_link = get_tag_link( $tag->term_id );

							$html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
							$html .= "{$tag->name}</a></li>";
						}
						$html .='</ul>' ;
						echo $html;
						?>
				</div>
		</div>
</div>

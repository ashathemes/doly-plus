<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Doly Plus
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail () ): ?>
		<?php doly_post_thumbnail(); ?>
	<?php endif; ?>
	<div class="blog-content">
		<div class="blog-meta">
	        <?php
			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php 
						doly_plus_posted_by();
						doly_plus_posted_on(); 
						doly_plus_comment();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
        </div>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="blog-title">', '</h1>' );
		else :
			the_title( '<h2 class="blog-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
		<div class="blog-text">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->
		<?php echo'<a href="'.esc_url ( get_the_permalink( $post->ID ) ).'" class="read-btn">'.esc_html__('Read More','doly-plus').'<i class="fa fa-angle-right" aria-hidden="true"></i></a>'; ?>
	</div>
</article>
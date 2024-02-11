<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Doly Plus
 */
if ( ! is_singular( ) ) : ?>
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
        </div>
        <?php echo'<a href="'.esc_url ( get_the_permalink( $post->ID ) ).'" class="read-btn">'.esc_html__('Read More','doly-plus').'<i class="fa fa-angle-right" aria-hidden="true"></i></a>'; ?>
    </div>
</article>
<?php else: ?>
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
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h2 class="blog-title">', '</h2>' );
			else :
				the_title( '<h2 class="blog-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php

			if(is_single( )){
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'doly-plus' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);
			}
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'doly-plus' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<?php if ( is_singular() ) : ?>
			<footer class="entry-footer">
				<?php doly_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	</div>
</article>
<?php endif; ?>
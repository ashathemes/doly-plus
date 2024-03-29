<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Doly
 */

if(is_active_sidebar('sidebar-1')){
	$doly_column = 8;
}else{
	$doly_column = 12;
}
get_header();
?>
<section class="breadcrumbs-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-title"><?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'doly' ), '<span>' . get_search_query() . '</span>' );
					?></h2>
			</div>
		</div>
	</div>
</section>

<section  class="search-area <?php if( ! is_active_sidebar('sidebar-1')): ?>block-content-css<?php endif; ?>" id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-<?php echo esc_attr($doly_column); ?>">
					<?php if ( have_posts() ) : 

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile; 

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
				<?php if(is_active_sidebar('sidebar-1')): ?>
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php
get_footer();

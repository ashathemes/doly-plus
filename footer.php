<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Doly Plus
 */

?>
<footer class="footer-area">
    <div class="container">
        <?php if(is_active_sidebar( 'footer' )): ?>
        <div class="footer-top">
            <div class="row">
                <?php dynamic_sidebar( 'footer' ); ?>
            </div>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright text-center">
                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'doly-plus' ) ); ?>">
                        <?php
                        /* translators: %s: CMS name, i.e. WordPress. */
                        printf( esc_html__( 'Proudly powered by %s', 'doly-plus' ), 'WordPress' );
                        ?>
                    </a>
                    <p><?php
                        /* translators: 1: Theme name, 2: Theme author. */
                        printf( esc_html__( 'Theme: %1$s by %2$s.', 'doly-plus' ), 'Doly Plus', 'ashathemes' );
                        ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>

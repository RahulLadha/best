<?php get_header(); ?>
    <main id="site-content" role="main">
        <div class="section-inner thin error404-content">
            <div class="container">
                <h1 class="entry-title">4<span>0</span>4</h1>
                <span>Page Not Found</span>
                <div class="intro-text">
                    <p>
                        <?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'twentytwenty' ); ?>
                    </p>
                </div>
                <div class="home_btn">
                    <a href="<?php echo do_shortcode( '[site_url]' );  ?>" class="go_btn">Go Home</a>
                    <a href="<?php echo do_shortcode( '[site_url]' );  ?>/contact-us/" class="go_btn">Contact Us</a>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
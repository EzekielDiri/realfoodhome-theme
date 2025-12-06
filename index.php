<?php
/**
 * Main blog index
 */
get_header();
?>

<main class="content-with-sidebar">
    <section>
        <h1>
            <?php
            if ( is_home() && ! is_front_page() ) {
                single_post_title();
            } else {
                esc_html_e( 'Latest Posts', 'realfoodhome' );
            }
            ?>
        </h1>

        <?php if ( have_posts() ) : ?>
            <div class="posts-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class( 'post-card' ); ?>>
                        <a href="<?php the_permalink(); ?>">

                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-card-thumb">
                                    <?php the_post_thumbnail( 'medium_large' ); ?>
                                </div>
                            <?php endif; ?>

                            <div class="post-card-body">
                                <h2 class="post-card-title"><?php the_title(); ?></h2>
                                <div class="post-card-meta">
                                    <?php echo get_the_date(); ?> • <?php the_author(); ?>
                                </div>
                            </div>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>
            <p><?php esc_html_e( 'No posts yet.', 'realfoodhome' ); ?></p>
        <?php endif; ?>
    </section>

    <aside class="sidebar-area">
        <h3>About this site</h3>
        <p>Quick description about RealFoodHome. You can turn this into a widget area later.</p>
    </aside>
</main>

<?php get_footer(); ?>

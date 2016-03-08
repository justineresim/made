<?php /* Template Name: Home Page Template */ get_header(); ?>

<?php get_header(); ?>

    <div class="container full-width">
        <main role="main">
            <!-- section -->
            <section>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

                    <?php comments_template( '', true ); // Remove if you don't want comments ?>

                    <br class="clear">

                    <?php edit_post_link(); ?>

                </article>
                <!-- /article -->

            <?php endwhile; ?>

            <?php endif; ?>

            </section>
            <!-- /section -->
        </main>

    <?php get_sidebar(); ?>

    </div>

<?php get_footer(); ?>

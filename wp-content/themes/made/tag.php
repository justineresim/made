<?php get_header(); ?>

<div class="container two-col">

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>

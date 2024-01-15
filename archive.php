<?php get_header(); ?>

    <main>

	<?php if (have_posts()) : ?>

 		<?php if (is_category()) { ?>

		<?php } ?>

		<?php while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class() ?>>

			<h2 id="post-title"><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a></h2>

			<div class="entry">

				<?php the_excerpt( $more_link_text ); ?>

			</div>

            <time datetime="<?php the_time('d-m-Y'); ?>" pubdate>Objavljeno: <?php the_time('d. m. Y.'); ?></time><?php echo ah_share_buttons(); ?>

		</div>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('inc/gone'); ?>

	<?php endif; ?>

	<?php $args = array(
			'prev_text'          => __('&#8592; Prethodno'),
			'next_text'          => __('Sledeće &#8594;'),
		); ?>

	<nav class="paging">
		<?php echo paginate_links( $args ); ?>
	</nav>

    </main>

<?php get_footer(); ?>

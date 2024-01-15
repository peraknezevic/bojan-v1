<?php get_header(); ?>

    <main>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_post_thumbnail( array( 880, 660 ) ); ?>

			<?php if ( in_category( 'tekstovi') ) : ?>

			<div class="int">
				<span>Intermezzo</span>
			</div>

			<?php endif; ?>

			<h1><?php the_title(); ?></h1>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

            <time datetime="<?php the_time('d-m-Y'); ?>" pubdate>Objavljeno: <?php the_time('d. m. Y.'); ?></time> <?php echo ah_share_buttons(); ?>

		</div>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('inc/gone'); ?>

	<?php endif; ?>

	</main>

<?php get_footer(); ?>

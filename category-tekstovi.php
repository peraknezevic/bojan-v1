<?php get_header(); ?>

    <main>

    <h1 class="naslov"><span>Tekstovi</span></h1>

    <div class="card-container">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" class="card">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( array( 432, 324 ) ); ?>
            <div class="card-head">
                <span>Intermezzo</span>
                <h2><?php the_title(); ?></h2>
                <p><?php echo excerpt(12); ?></p>
            </div>
        </a>
        </div>

    <?php endwhile; ?>

        <?php else : ?>

            <?php get_template_part('inc/gone'); ?>

        <?php endif; ?>

    </div>

	<?php $args = array(
			'prev_text'          => __('&#8592; Prethodno'),
			'next_text'          => __('Sledeće &#8594;'),
		); ?>

	<nav class="paging">
		<?php echo paginate_links( $args ); ?>
    </nav>

    </main>

<?php get_footer(); ?>

<?php get_header(); ?>

    <main>

	<h1 class="naslov"><span>Novosti</span></h1>

	<div class="najave">
	<?php $catquery = new WP_Query( 'cat=2&posts_per_page=4' ); ?>
	<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class() ?>>
	<h2 id="post-title"><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a></h2>
	<div class="entry">
	<?php echo excerpt(25); ?>
	</div>
	<time datetime="<?php the_time('d-m-Y'); ?>" pubdate>Objavljeno: <?php the_time('d. m. Y.'); ?></time>
	</div>
	<?php endwhile;
	wp_reset_postdata();
	?>
	</div>

	<div class="jos">
		<a href="//bojankrivokapic.com/cat/novosti" class="jos">arhiva novosti</a>
	</div>

	</main>

<?php get_footer(); ?>

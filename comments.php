<?php

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
	die (__('Please do not load this page directly. Thanks!', 'blank-theme'));
}

if (post_password_required()) {
	echo '<p class="alert">'. __('This post is password protected. Enter the password to view comments.', 'blank-theme') .'</p>';
	return;
}

?>

<?php if (have_comments()) : ?>

<div class="post">
	
	<h2 id="comments"><?php comments_number('Bez komentara', 'Komentari', 'Komentari');?></h2>
	
	<div class="navigation">
		
		<div class="next-posts"><?php previous_comments_link(); ?></div>
		<div class="prev-posts"><?php next_comments_link(); ?></div>
		
	</div>
	
	<ol class="commentlist">
		
		<?php wp_list_comments(); ?>
		
	</ol>

	<div class="navigation">
		
		<div class="next-posts"><?php previous_comments_link(); ?></div>
		<div class="prev-posts"><?php next_comments_link(); ?></div>
		
	</div>

</div>
	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if (comments_open()) : ?>
		
		<!-- If comments are open, but there are no comments. -->
		
	 <?php else : // comments are closed ?>
	 	
		<p><?php _e('Komentari su iskljuceni.', 'blank-theme'); ?></p>
		
	<?php endif; ?>
	
<?php endif; ?>

<?php if (comments_open()) : ?>
	
	<div id="respond" class="post">
		
		<?php comment_form(); ?>
		
	</div>
	
<?php endif; ?>
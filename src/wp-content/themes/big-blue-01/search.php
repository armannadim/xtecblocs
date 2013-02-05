<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle"><?php _e('Search Results','big-blue');?></h2>

		<?php while (have_posts()) : the_post(); ?>

			<div class="entry">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to','big-blue');?> <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('d F Y') ?></small>
<br /><br /><?php the_content_rss('', TRUE, '', 50); ?><br /><br />
				<p class="postmetadata"><?php _e('Posted in','big-blue');?> <?php the_category(', ') ?> | <?php edit_post_link(__('Edit','big-blue'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;','big-blue'), __('1 Comment &#187;','big-blue'), __('% Comments &#187;','big-blue')); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries','big-blue')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;','big-blue')) ?></div>
		</div>

	<?php else : ?>
	<div class="entry">
		<h2 class="center"><?php _e('No posts found. Try a different search?','big-blue');?></h2>

</div>
	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
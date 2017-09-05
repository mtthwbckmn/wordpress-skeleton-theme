<?php get_header(); ?>
	<section id="single-post">
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="meta">
				<h1><?php the_title(); ?></h1>
				<h2><?php the_category(' / '); ?></h2>
				<time><?php the_date(); ?></time>
			</div>
			<div id="image">
				<?php the_post_thumbnail(); ?>
			</div>
			<div id="editor">
				<?php the_content(); ?>
			</div>
			<div id="comments">
				<?php comment_form(); ?>
				<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
				<ul>
					<?php wp_list_comments(); ?>
				</ul>
			</div>
			<div id="permalink">
				<?php the_permalink(); ?>
			</div>
			<div id="navigate">
				<?php $previousPost = get_previous_post(); if (!empty( $previousPost )): ?>
					<a href="<?php echo get_permalink( $previousPost->ID ); ?>">
						<?php echo $previousPost->post_title; ?>
					</a>
				<?php endif; ?>
				<?php $nextPost = get_next_post(); if (!empty( $nextPost )): ?>
					<a href="<?php echo get_permalink( $nextPost->ID ); ?>">
						<?php echo $nextPost->post_title; ?>
					</a>
				<?php endif; ?>
			</div>
		<?php endwhile; ?>
	</section>
<?php get_footer(); ?>
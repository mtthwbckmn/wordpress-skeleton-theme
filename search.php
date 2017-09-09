<?php get_header(); ?>
	<section id="search">
		<?php if ( have_posts() ) : ?>
			<h1><?php printf( __( 'Search Results for: %s', 'skeleton' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<h1>Nothing Found</h1>
			<p>Sorry, but we didn't find any results for your search term.</p>
		<?php endif; ?>
		<?php get_search_form(); ?>
	</section>
<?php get_footer();

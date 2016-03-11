<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package newtheme_php
 */
get_header(); ?>

<article class="post-cabin">
	<?php 
		$images = get_field('cabin');
		if ($images): ?>
			<ul class="img-big">
				<?php foreach($images as $image): ?>
					<li class="img-<?php echo $image['id']; ?>">
						<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
					</li>
				<?php endforeach; ?>
			</ul>
			<ul class="img-small">
				<?php foreach($images as $image): ?>
					<li class="img-<?php echo $image['id']; ?>">
						<img src="<?php echo $image['sizes']['thumbnail'] ?>" alt="<?php echo $image['alt']; ?>">
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	
</article>


<article id="post-<?php the_ID(); ?>" class="white">
	<header class="entry-header">
		<?php the_title( '<h1 class="cabin-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();
			// wp_link_pages( array(
			// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'newthem_php' ),
			// 	'after'  => '</div>',
			// ) );
		?>
		<button><a href="#">check availability</a></button>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
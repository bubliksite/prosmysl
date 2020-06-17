<?php 

/*
Template name: Проекты
Template Post Type: page
*/

?>

<?php get_header(); ?>

<section class="pt-5 mt-4">
	<div class="blue-wave-bg py-4">
		<div class="container">
			<h2 class="no-pad-mar pt-5 pb-3"><?php echo the_title(); ?></h2>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php $i = 1; ?>
			<?php $projects = new WP_Query(array('post_type'=>'projects')); ?>
				<?php if ( $projects->have_posts() ) :  while ( $projects->have_posts() ) : $projects->the_post(); ?>
					<?php echo (($i > 3 && (($i - 4) % 5 == 0)) ? '<div class="col-md-2"></div>' : '') ?>
						<a href="<?php echo the_permalink(); ?>" class="col-md-4 mb-4 text-decoration-none">
							<img class="px-4 w-100 rounded-circle" src="<?php echo CFS()->get('projects_image'); ?>" alt="">
							<p class="mt-3 lead text-center"><?php echo the_title(); ?></p>
						</a>
					<?php echo (($i > 3 && ($i % 5 == 0)) ? '<div class="col-md-2"></div>' : '') ?>
					<?php $i++; ?>
				<?php endwhile; ?>
				<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>	
</section>

<?php get_footer(); ?>
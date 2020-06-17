<?php 
/*
Template name: Проект
Template Post Type: projects

*/
?>

<?php get_header(); ?>

<section class="pt-5 mt-4">
	<div class="blue-wave-bg py-4">
		<div class="container">
			<h2 class="no-pad-mar pt-5 pb-3">Проекты. <?php echo the_title(); ?></h2>
			<p class="text-decoration-none font-weight-bold text-uppercase mt-3" style="font-size:16px"><a href="/projects"><img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-back.svg" alt="">Назад ко всем проектам</a></p>
		</div>
	</div>
</section>
<section id="psn" class="mt-4">
	<div class="container">
		<div id="project-second-name" class="d-flex align-items-center">
			<div class="mr-4 p-2 rounded-circle border shadow-sm">
				<img style="height: 10rem; width: 10rem; object-fit: scale-down;" class="m-2" src="<?php echo CFS()->get('projects_small_image'); ?>" alt="">
			</div>
			<div class="">
				<h3 class="mb-2"><?php echo CFS()->get('projects_second_name'); ?></h3>
				<p><?php echo CFS()->get('projects_description'); ?></p>
			</div>
		</div>
		<div class="mobile-sm row">
			<div class="col-12 text-center pb-4">
				<img style="height: 10rem; width: 10rem; object-fit: scale-down;" class="m-2 p-2 rounded-circle border shadow-sm" src="<?php echo CFS()->get('projects_small_image'); ?>" alt="">
			</div>
			<div class="col-12">
				<h3 class="mb-2"><?php echo CFS()->get('projects_second_name'); ?></h3>
				<p><?php echo CFS()->get('projects_description'); ?></p>
			</div>
		</div>
	</div>
</section>
<section class="pt-5 mt-4">
	<div class="container">
		<h3>Что сделано?</h3>
		<?php echo CFS()->get('projects_doing'); ?>
	</div>
</section>
<section class="pt-5 mt-4">
	<div class="container">
		<?php $owl_carousel = CFS()->get('loop_projects_owl_carousel'); ?>
		<?php $owl_carousel_mobile = CFS()->get('loop_projects_mobile_owl_carousel'); ?>
		<div class="<?php echo($owl_carousel_mobile ? 'desktop' : '') ?>">
			<div class="owl-carousel">
				<?php if ($owl_carousel): ?>
					<?php foreach ($owl_carousel as $slide): ?>
						<img src="<?php echo $slide['projects_owl_carousel']; ?>" alt="">
					<?php endforeach ?>
				<?php endif ?>
			</div>
		</div>
		<div class="<?php echo($owl_carousel_mobile ? 'mobile' : '') ?>">
			<div class="owl-carousel">
				<?php if ($owl_carousel_mobile): ?>
					<?php foreach ($owl_carousel_mobile as $slide_mobile): ?>
						<img src="<?php echo $slide_mobile['projects_mobile_owl_carousel']; ?>" alt="">
					<?php endforeach ?>
				<?php endif ?>
			</div>
		</div>
	</div>
</section>
<section class="pt-5 mt-4">
	<div class="container project-navigation">
		<?php $next = get_previous_post(); ?>
		<?php $previous = get_next_post(); ?>
		<div class="row">
			<a class="col-6 text-decoration-none" href="<?php echo the_permalink($previous); ?>">
				<div class="row">
					<div class="col-3">
						<img class="w-100 rounded-circle" src="<?php echo CFS()->get('projects_image', $previous->ID); ?>" alt="">
					</div>
					<div class="col-md-9 col-12 d-flex align-items-center">
						<img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-back.svg" alt="">
						<div class="">
							<p style="font-size: 18px" class="mb-0 text-uppercase"><?php echo get_the_title($previous); ?></p>
							<p style="font-size: 18px" class="mb-0 text-uppercase"><?php echo CFS()->get('projects_second_name', $previous->ID); ?></p>
						</div>
					</div>
				</div>	
			</a>
			<a class="col-6 text-decoration-none" href="<?php echo the_permalink($next); ?>">
				<div class="row">
					<div class="col-md-9 col-12 d-flex align-items-center justify-content-end">
						<div class="">
							<p style="font-size: 18px" class="mb-0 text-uppercase text-right"><?php echo get_the_title($next); ?></p>
							<p style="font-size: 18px" class="mb-0 text-uppercase text-right"><?php echo CFS()->get('projects_second_name', $next->ID); ?></p>
						</div>
						<img class="ml-3" src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-forward.svg" alt="">
					</div>
					<div class="col-3">
						<img class="w-100 rounded-circle" src="<?php echo CFS()->get('projects_image', $next->ID); ?>" alt="">
					</div>
				</div>
			</a>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
	  $(".owl-carousel").owlCarousel({
	  	items: 1,
	  	nav: true,
	  	navText: ['<img src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-prev.svg">','<img src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-next.svg">'],
	  	loop: true
	  });
	});
</script>

<?php get_footer(); ?>
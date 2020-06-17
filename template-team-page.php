<?php 

/*
Template name: Команда
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
			<?php $team_loop = CFS()->get('team_loop'); ?>
			<?php $i = 1; ?>
			<?php foreach ($team_loop as $team): ?>
				<?php if ($i % 2 != 0): ?>
					<div class="col-md-3 mobile"></div>
					<div class="col-md-6 col-lg-4 mb-4">
						<img class="w-100 rounded-circle" src="<?php echo $team['team_image']; ?>" alt="">
					</div>
					<div class="col-md-3 mobile"></div>
					<div class="col-lg-8 col-md-12 mb-5">
						<h3><?php echo $team['team_name']; ?></h3>
						<p>
							<?php echo $team['team_description']; ?>
						</p>
					</div>
				<?php else : ?>
					<div class="col-md-3 mobile"></div>
					<div class="mobile col-md-6 col-lg-4 mb-4">
						<img class="w-100 rounded-circle" src="<?php echo $team['team_image']; ?>" alt="">
					</div>
					<div class="col-md-3 mobile"></div>
					<div class="col-lg-8 col-md-12 mb-5">
						<h3><?php echo $team['team_name']; ?></h3>
						<p>
							<?php echo $team['team_description']; ?>
						</p>
					</div>
					<div class="desktop col-md-4 col-lg-4 mb-4">
						<img class="w-100 rounded-circle" src="<?php echo $team['team_image']; ?>" alt="">
					</div>
				<?php endif ?>
				<?php $i++; ?>
			<?php endforeach ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
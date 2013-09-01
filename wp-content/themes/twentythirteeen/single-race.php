<?php
/**
 * Sample template for displaying single race posts.
 * Save this file as as single-race.php in your current theme.
 *
 * This sample code was based off of the Starkers Baseline theme: http://starkerstheme.com/
 */

get_header(); ?>

<style>
	.single-race .site-main > div {
		padding: 0 1em;
	}
	
	.single-race h3 {
		
	}
	
	.single-race .intro {
		display: table;
		width: 100%;
	}
	
	.single-race .intro .left, .single-race .intro .right {
		display: table-cell;
		vertical-align: top;
	}
	
	.single-race .intro h1 {
		margin-bottom: 0;
	}
	
	.single-race .tagline {
		margin-bottom: 1.5em;
	}
	
	.single-race .main-pic {
		text-align: right;
		padding: 1em;
	}
	
	.single-race .main-pic img {
		max-width: 400px;
	}
	
	.single-race .tagline {
		font-weight: bold;
		font-size: larger;
	}
	
	.single-race .tagline:before {
		content: open-quote;
		font-size: 120%;
	}
	
	.single-race .tagline:after {
		content: close-quote;
		font-size: 120%;
	}

	.single-race .label {
		font-weight: bold;
	}
</style>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<div class="intro">
		<div class="left">
			<h1><?php the_title(); ?></h1>
		
			<div class="tagline">
				<?php print_custom_field('tagline'); ?>
			</div>

	
	<?php $description = get_custom_field('description');
	if ( !empty($description) ) { ?>
	<div class="description">
		<h3>Description:</h3>
		<?php print_custom_field('description:do_shortcode'); ?>
	</div>
	<?php } ?>
	
	<div class="team">
		<span class="label">Team</span>:
		<?php print_custom_field('team'); ?>
	</div>
	
	<div class="height">
		<span class="label">Height</span>:
		<?php print_custom_field('height'); ?>
	</div>
	
	<div class="weight">
		<span class="label">Base Weight</span>:
		<?php print_custom_field('weight'); ?>
	</div>
	
	<div class="age">
		<span class="label">Average Adventuring Age</span>:
		<?php print_custom_field('age'); ?>
	</div>
	
	<?php $abilities = get_custom_field('specialabilities');
	if ( !empty($abilities) ) { ?>
	<div class="description">
		<h3>Special Abilities:</h3>
		<?php print_custom_field('specialabilities:do_shortcode'); ?>
	</div>
	<?php } ?>
		
	<?php $levels = get_custom_field('level:to_array');
if ( !empty($levels) ) {
?>
<div class="levels">
<h3>Levels</h3>
  <ol>
<?php
        foreach ($levels as $v) {
            printf('<li>%s</li>', $v);
        }
?>
  </ol>
</div>
<?php } ?>

		</div>
		<div class="right">
			<div class="main-pic">
				<img src="<?php print_custom_field('picture:to_image_src'); ?>" />
			</div>
		</div>
	</div>
</div>

<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
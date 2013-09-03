<?php
/**
 * Custom template for the NPC content type
 */
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<div class="intro">
		<div class="left">
			<h1><?php the_title(); ?></h1>
		
	<?php $description = get_custom_field('description');
	if ( !empty($description) ) { ?>
	<div class="description">
		<?php print_custom_field('description:do_shortcode'); ?>
	</div>
	<?php } ?>
	
	<?php if (get_custom_field('race')) {
		$race = get_custom_field('race:get_post');
		?>
		<div class="race">
			<span class="label">Race</span>
			<a href="<?php print_custom_field('race:to_link_href','/race/');?>"><?php echo $race['post_title']; ?></a>
		</div>
	<?php } ?>
	
	<?php if (get_custom_field('team')) { ?>
		<div class="team">
			<span class="label">Team</span>
			<?php print_custom_field('team'); ?>
		</div>
	<?php } ?>
	
	<?php if (get_custom_field('hp')) { ?>
		<div class="hp">
			<span class="label">HP</span>
			<?php print_custom_field('hp'); ?>
		</div>
	<?php } ?>
	
	<?php if (get_custom_field('XP')) { ?>
		<div class="xp">
			<span class="label">XP</span>
			<?php print_custom_field('XP'); ?>
		</div>
	<?php } ?>
	
	<?php if (get_custom_field('speed')) { ?>
		<div class="speed">
			<span class="label">Speed</span>
			<?php print_custom_field('speed'); ?>
		</div>
	<?php } ?>
	
	<?php if (get_custom_field('strength')) { ?>
		<div class="strength">
			<span class="label">Strength</span>
			<?php print_custom_field('strength'); ?>
		</div>
	<?php } ?>
	
	<?php if (get_custom_field('intelligence')) { ?>
		<div class="intelligence">
			<span class="label">Intelligence</span>
			<?php print_custom_field('intelligence'); ?>
		</div>
	<?php } ?>
	
	<?php if (get_custom_field('stealth')) { ?>
		<div class="stealth">
			<span class="label">Stealth</span>
			<?php print_custom_field('stealth'); ?>
		</div>
	<?php } ?>
	
	<?php if (get_custom_field('sight')) { ?>
		<div class="sight">
			<span class="label">Sight</span>
			<?php print_custom_field('sight'); ?>
		</div>
	<?php } ?>
	
	<?php if (get_custom_field('jump')) { ?>
		<div class="jump">
			<span class="label">Jump</span>
			<?php print_custom_field('jump'); ?>
		</div>
	<?php } ?>
	
	<?php if (get_custom_field('dexterity')) { ?>
		<div class="dexterity">
			<span class="label">Dexterity</span>
			<?php print_custom_field('dexterity'); ?>
		</div>
	<?php } ?>

	<?php if (get_custom_field('mcf')) { ?>
		<div class="mcf">
			<span class="label">MCF</span>
			<?php print_custom_field('mcf'); ?>
		</div>
	<?php } ?>
	
	<?php if (get_custom_field('ab')) { ?>
		<div class="ab">
			<span class="label">AB</span>
			<?php print_custom_field('ab'); ?>
		</div>
	<?php } ?>
	
	<?php if (get_custom_field('damage')) { ?>
		<div class="damage">
			<span class="label">Damage</span>
			<?php print_custom_field('damage'); ?>
		</div>
	<?php } ?>
	
	<?php 
		$languages = get_custom_field('language:to_array');
		if ( !empty($languages) ) {
		?>
		<div class="languages itemlist">
		<h3>Languages</h3>
		  <ol>
		<?php
		        foreach ($languages as $v) {
		            printf('<li>%s</li>', $v);
		        }
		?>
		  </ol>
		</div>
	<?php } ?>
		
	<?php 
		$items = get_custom_field('item:to_array');
		if ( !empty($items) ) {
		?>
		<div class="items itemlist">
		<h3>Items</h3>
		  <ol>
		<?php
		        foreach ($items as $v) {
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
<?php get_footer(); ?>
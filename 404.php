<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.7
 *
 * Last Revised: January 22, 2012
 */
get_header(); ?>

<div class="container">
	<div class="row content">
		<div class="span7 well">	
			<header class="subhead" id="overview">
			    <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>	      	
			    <h2><?php _e( 'This is Embarrassing', 'bootstrapwp' ); ?></h2>
			    <p class="lead"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'bootstrapwp' ); ?></p>
		    </header>	
		    <h3>All Pages</h3>			
			<?php wp_page_menu(); ?>						
		</div><!--/.span7 well -->
<?php get_sidebar('blog'); ?>		
	</div><!--/.row -->
</div><!--/.Container -->


<?php get_footer(); ?>
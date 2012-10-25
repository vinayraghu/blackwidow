<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.6
 */

get_header();
if (have_posts() ) ;?>
<div class="container">
<div class="row content">
	<div class="span7 well">
	<header class="subhead" id="overview">
		<h2><?php
		if ( is_day() ) {
			printf( __( 'Daily Archives: %s', 'bootstrapwp' ), '<span>' . get_the_date() . '</span>' );
		} elseif ( is_month() ) {
			printf( __( 'Monthly Archives: %s', 'bootstrapwp' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'bootstrapwp' ) ) . '</span>' );
		} elseif ( is_year() ) {
			printf( __( 'Yearly Archives: %s', 'bootstrapwp' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'bootstrapwp' ) ) . '</span>' );
		} elseif ( is_tag() ) {
			printf( __( 'Tag Archives: %s', 'bootstrapwp' ), '<span>' . single_tag_title( '', false ) . '</span>' );
					// Show an optional tag description
			$tag_description = tag_description();
			if ( $tag_description )
				echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
		} elseif ( is_category() ) {
			printf( __( 'Category: %s', 'bootstrapwp' ), '<span>' . single_cat_title( '', false ) . '</span>' );
					// Show an optional category description
			$category_description = category_description();
			if ( $category_description )
				echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
		} else {
			_e( 'Blog Archives', 'bootstrapwp' );
		}
		?></h2>
</header>
<?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<div <?php post_class(); ?>>
			<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>
			<p class="meta"><?php echo bootstrapwp_posted_on();?></p>
			<div class="row">
				        <div class="span2">
				        	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
          					<?php echo bootstrapwp_autoset_featured_img(); ?></a>
				        </div><!-- /.span2 -->
				        <div class="span5">
				        	<?php the_excerpt();?>
				        </div><!-- /.span6 -->
				    </div><!-- /.row -->

				</div><!-- /.post_class -->
			<?php endwhile; ?>
			<?php bootstrapwp_content_nav('nav-below');?>

		</div><!-- /.span8 -->
		<?php get_sidebar('blog'); ?>

		<?php get_footer(); ?>
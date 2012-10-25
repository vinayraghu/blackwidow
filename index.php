<?php
/**
 *
 * Description: Default Index template to display loop of blog posts
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
  <div class="row">
    <div class="container">
      <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
    </div><!--/.container -->
  </div><!--/.row -->
  <div class="container">

<div class="row content">
  <div class="span8">
    <?php
              // Blog post query
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    query_posts( array( 'post_type' => 'post', 'paged'=>$paged, 'showposts'=>0) );
    if (have_posts()) : while ( have_posts() ) : the_post(); ?>
    <div <?php post_class(); ?>>
      <div class="row well">
        
        <div class="span2">

        <?php // Checking for a post thumbnail
        if ( has_post_thumbnail() ) ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <div class="img-polaroid home-thumbnail">
          <?echo the_post_thumbnail();?>
        </div>
        </a>
       </div><!--span2--> 
        <div class="span5">
      <!--Title and meta-->
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <h6>
              <?php the_title();?>
            </h6>
          </a>
          <p class="meta"><?php echo bootstrapwp_posted_on();?><?php comments_popup_link( '0 Comments', '1 Comment', '% Comments', 'comments-link', 'Comments Disabled' ); ?></p>
      <!--Title and meta comes aside the featured image-->          
                   <?php the_excerpt();?>
       </div><!-- /.span5 -->

     </div><!-- /.row -->
     
   </div><!-- /.post_class -->

 <?php endwhile; endif; ?>
 <?php bootstrapwp_content_nav('nav-below');?>

</div><!-- /.span8 -->
<?php get_sidebar('blog'); ?>
<?php get_footer(); ?>
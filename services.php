<?php
/**
 *
 * Template Name: Services Page
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<div class="container">
  <div class="row content">
    <div class="span7 well">
      <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
      <?php query_posts('post_type=services'); ?>    
        <?php $count=1 ?>
        <?php
                    // Blog post query
          if (have_posts()) : while ( have_posts() ) : the_post(); ?>
          <?php $title = get_the_title(); ?>
          <ul class="nav nav-tabs">
            <li><a href="#<?php echo $title; ?>&amp;<?php echo str_replace(" ", "-", $title); ?>" data-toggle="tab"><?php echo $title; ?></a></li>
        <?php $count++ ?>
        <?php endwhile; endif; ?>
        </ul>       
    </div><!-- /.span7 -->
    
  </div><!-- /.row --> 
</div><!-- /.Container -->
<?php get_sidebar('blog'); ?>
<?php get_footer(); ?>
<!--call the collapse function-->
<script language="text/javascript">
  $('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
</script>
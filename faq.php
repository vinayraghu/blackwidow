<?php
/**
 *
 * Template Name: FAQ Page
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
      <?php query_posts('post_type=faq'); ?>    
        <?php $count=1 ?>
        <?php
                    // Blog post query
          if (have_posts()) : while ( have_posts() ) : the_post(); ?>
          
            <div class="accordion" id="accordion1">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $count?>">
                      <h5><?php echo $count?>. <?php the_title();?></h5>
                </a>
            </div>
            <div id="collapse<?php echo $count?>" class="accordion-body collapse">
              <div class="accordion-inner">
                <?php the_excerpt();?>
              </div>
            </div>
          </div><!--accordion group-->          
        <?php $count++ ?>
        <?php endwhile; endif; ?>       
      </div><!--Accourdion--> 
    </div><!-- /.span7 -->
  </div><!-- /.row --> 
</div><!-- /.Container -->
<?php get_sidebar('blog'); ?>
<?php get_footer(); ?>
<!--call the collapse function-->
<script language="text/javascript">
  $(".collapse").collapse();
</script>
<?php
/**
 * The template for displaying all posts.
 *
 * Default Post Template
 *
 * Page template with a fixed 940px container and right sidebar layout
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
   <div class="container">
        <div class="row content">
      <div class="span7 well">
                    <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
      <div class="row">  
          <header class="post-title">
            <?php // Checking for a post thumbnail
            if ( has_post_thumbnail() ) ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <div class="img-polaroid home-thumbnail alignleft span2">
              <?echo the_post_thumbnail();?>
            </div>
            <div class="span5">
              <h6><?php the_title();?></h6>
              </a>
                 <p class="meta"><?php echo bootstrapwp_posted_on();?><?php comments_popup_link( '0 Comments', '1 Comment', '% Comments', 'comments-link', 'Comments Disabled' ); ?></p>           
            </header>
          </div>
                   <hr class="soften-post" />          
            <?php the_content();?>
            <p>In: <b><?php the_category(' '); ?></b>
            <?php the_tags( ' Tags: <b>', ', ', '</b></p>'); ?>
            <hr class="soften-post" />
            <?php bootstrapwp_content_nav('nav-below');?>
            <?php comments_template(); ?>
        </div>     
                <div class="span4">
              <?php get_sidebar('blog'); ?>
          </div>
    </div>
  </div>  

<?php endwhile; // end of the loop. ?>


 <div class="container">
        <div class="row content">
          <div class ="span7 well">
            <?php get_footer(); ?>           
          </div><!-- /.span8 -->

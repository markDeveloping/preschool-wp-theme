<?php get_header(); ?>

<div class="jumbotron banner-gallery">
    <div class="container">
      <div class="row">
        <div class="col-xs-8">
          <h1>News and events</h1>
        </div>
        <div class="col-xs-4">
          <img class="logo" alt="" src="https://staugustinespreschool.co.uk/wp/wp-content/themes/preschool_theme/assets/images/logo.png">
        </div>
      </div>
    </div>
  </div>

<div class="container">

  <div class="row">

      <div class="col-sm-8">
          <?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <div class="post">
          <h2 class="post--heading"><?php the_title(); ?></h2>
          <p class="post--author"><?php the_author_meta( 'first_name' ); ?> <?php the_author_meta( 'last_name' ); ?> - <?php echo get_the_date(); ?></p>
          <p class="post--excerpt"><?php the_excerpt(); ?></p>
          <a class="post--link" href="<?php the_permalink(); ?>">Find out more</a>
        </div>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
      </div>
  </div>
</div>
<br />
<br />

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="jumbotron banner-gallery">
    <div class="container">
      <div class="row">
        <div class="col-xs-8">
          <h1>Gallery</h1>
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
        <?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

      </div>
  </div>
</div>
<br />
<br />

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="jumbotron banner-learning">
    <div class="container">
      <div class="row">
        <div class="col-xs-8">
          <h1><?php the_title(); ?></h1>
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
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<p><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></p>
				<div class="entry">
<?php the_content(); ?>
</div>
        <?php edit_post_link(); ?>
        <?php endwhile; ?>
        <?php endif; ?>

			</div>
	</div>
</div>
<br />
<br />

<?php get_footer(); ?>
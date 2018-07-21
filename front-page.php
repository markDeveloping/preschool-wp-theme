<?php get_header(); ?>

<div class="jumbotron banner-img">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1 style="color:rgb(40,53,131);">St. Augustine of Canterbury Preschool</h1>
					<p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:staff@staugustinespreschool.co.uk">staff@staugustinespreschool.co.uk</a><br><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 0117 956 1166 </p>
					<a href="/wp/new-parents/" class="btn btn-info btn-lg">Information for new parents</a>
				</div>
			</div>
		</div>
	</div>
<div class="container">
  <div class="row">
  <div class="col-sm-8 col-xs-12">

    <p><span class="lead">We ensure that our children thrive in a happy and safe environment.</span></p>
        <p><a href="https://reports.ofsted.gov.uk/inspection-reports/find-inspection-report/provider/CARE/136075" target="_blank">Read our OFSTED report here <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a></p>
    <p>Our community Preschool is run by a management committee of parents. We first opened our doors in 1978 and have gone from strength to strength.</p>
    <p>The self contained building that we use is located in the grounds of St Augustine's Primary school, Downend, Bristol.</p>
    <br>
  </div>
  </div>
</div>
<div class="container-fluid fabricDark">
  <div class="container fabricText">
    <div class="row" id="importantInfo">
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
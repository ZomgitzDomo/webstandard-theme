<?php get_header(); ?>

    <div class="container">
        [blog Template]
      <!-- Example row of columns -->
      <div class="row">
        <div class="customclass" >
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<h1><?php the_title(); ?></h1>
								<div class="content">
								  <?php the_excerpt(); ?>
								  <p><a href = "<?php echo the_permalink(); ?>">Read More</a></p>
								</div>
			<?php endwhile; endif; ?>
        </div>

        <aside class="col-md-3 sidebar">
            <?php if ( dynamic_sidebar( 'blog-side' ) ); ?>
        </aside>
      </div>

<?php get_footer(); ?>
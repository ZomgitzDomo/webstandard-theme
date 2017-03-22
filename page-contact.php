<?php
//Template Name: Contact
get_header(); ?>

    <div class="container">
        [Page Template]
      <!-- Example row of columns -->
      <div class="row">
        <div class="customclass">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                                <div class="content">
                                  <?php the_content(); ?>
                                </div>
            <?php endwhile; endif; ?>
       </div>
      </div>

<?php get_footer(); ?>
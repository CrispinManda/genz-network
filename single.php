<?php
get_header(); // Include header template
?>

<section class="py-5 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
        ?>
            <div class="card mb-3">
              <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
              <?php endif; ?>
              <div class="card-body">
                <h2 class="card-title"><?php the_title(); ?></h2>
                <div class="card-text"><?php the_content(); ?></div>
              </div>
            </div>
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer(); // Include footer template
?>

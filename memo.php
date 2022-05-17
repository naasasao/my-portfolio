    <?php
          $works_query = new WP_Query(
              array(
                'post_type'      => 'works',
                 // 'category_name' => 'news',
                 'posts_per_page' => 4,
              )
          );
    ?>
      <?php if ($works_query->have_posts()) : ?>
      <?php while ($works_query->have_posts()) : ?>
      <?php $works_query->the_post(); ?>


      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

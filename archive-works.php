<?php get_header(); ?>

<div class="breadcrumb breadcrumb-layout" >
  <ul class="breadcrumb__lists">
    <li class="breadcrumb__list">
      <a href="<?php echo home_url(); ?>">
        <i class="fa fa-home"></i><span>TOP ></span>
      </a>
    </li>
    <li class="breadcrumb__list">
      <a><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></a>
    </li>
  </ul>
</div>


<div class="category category-layout">
    <div class="category__inner">
        <span class="category-data">全カテゴリ :</span>
        <!-- <?php if( has_term('','works-cat',$post->ID) ): ?>
            <span class="category__data">
                <?php $post_term = get_the_terms($post->ID,'works-cat'); echo $post_term[0]->name; ?>
            </span>
        <?php endif; ?> -->
        <?php
                $terms = get_terms('works-cat', array('hide_empty'=>false));
                foreach ($terms as $term) {
                echo '<a href="' . esc_url(get_term_link($term->slug, 'works-cat')) . '" class="category__data">' . $term->name . '</a>';
                }
            ?>

    </div>
</div>


<section class="archive-works section-layout">
    <div class="archive-works__inner">
        <div class="section-title">
            <h2 class="section-title__index">Works 一覧</h2>
        </div>
        <div class="archive-works__items">

        <?php
        $args = array(
            'post_type' => 'works',
            'posts_per_page' => '6'
            );
        $the_query = new WP_query($args);
        if ($the_query->have_posts()):
        ?>

        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                <a class="archive-works__item" href="<?php the_permalink(); ?>">
                    <div class="archive-works__image">
                       <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div class="archive-works__title"><?php the_title(); ?></div>
                </a>

            <?php endwhile; ?>
            <?php else: ?>
            <!-- 投稿が無い場合の処理 -->
            投稿無いですー
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
    </div>
</section>


<div class="pagination">

</div>



<!-- contact -->
<?php get_template_part('common/contact'); ?>
    
<!-- footer -->
<?php get_footer(); ?>
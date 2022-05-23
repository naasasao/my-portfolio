<?php get_header(); ?>

<div class="breadcrumb breadcrumb-layout" >
  <ul class="breadcrumb__lists">
        <li class="breadcrumb__list">
            <a href="<?php echo home_url(); ?>">
            <i class="fa fa-home"></i><span>TOP ></span>
            </a>
        </li>

        <?php
                $term_id = get_queried_object_id();
                $term_data = get_term($term_id);
                $tax = $term_data->taxonomy;
                $ancestors = get_ancestors($term_id, $tax);
                $ancestors = array_reverse($ancestors);
                foreach( $ancestors as $ancestor ) {
                    $term = get_term( $ancestor, $tax );
                    echo '<li><a href="'.get_term_link( $ancestor, $tax ).'">'. $term->name.'</a></li>';
                }
            ?>
        <li class="breadcrumb__list">
            <a><?php single_term_title() ?>の記事一覧</a>
        </li>

    </ul>
</div>

<div class="category category-layout">
    <div class="category__inner">

        <a class="category__content" href="/works">
        ALL(Works一覧)
        <a>

        <?php
                    $terms = get_terms('works-cat', array('hide_empty'=>false));
                    foreach ($terms as $term) {
                    echo '<a href="' . esc_url(get_term_link($term->slug, 'works-cat')) . '" class="breadcrumb__list">' . $term->name . '</a>';
                    }
            ?>
        <!-- <?php
            if(has_term('','works-cat',$post->ID)) {
                echo get_the_term_list($post->ID,'works-cat','<span class="category__data">','</span><span class="category__data">','</span>');
            }
        ?> -->

    </div>
</div>



<section class="archive-works section-layout">
    <div class="archive-works__inner">
        <div class="section-title">
            <h2 class="section-title__index"><?php single_term_title() ?>で制作した<br>Works一覧</h2>
        </div>
        <div class="archive-works__items">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

                <a class="archive-works__item" href="<?php the_permalink(); ?>">
                    <div class="archive-works__image">
                       <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div class="archive-works__title"><?php the_title(); ?></div>
                </a>

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>


<div class="pagination">
<?php the_posts_pagination(
    array(
        'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'prev_text'     => __( '前へ'), // 「前へ」リンクのテキスト
        'next_text'     => __( '次へ'), // 「次へ」リンクのテキスト
        'type'          => 'list', // 戻り値の指定 (plain/list)
    )
); ?>
</div>



<!-- contact -->
<?php get_template_part('common/contact'); ?>
    
<!-- footer -->
<?php get_footer(); ?>
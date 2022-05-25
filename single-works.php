<?php get_header(); ?>

<div class="breadcrumb breadcrumb-layout" >
<!-- https://plusers.net/wordpress_custom_post -->
  <ul class="breadcrumb__lists">
    <li class="breadcrumb__list">
      <a href="<?php echo home_url(); ?>">
        <i class="fa fa-home"></i><span>TOP ></span>
      </a>
    </li>
    <li class="breadcrumb__list">
      <a href="<?php echo get_post_type_archive_link($post_type); ?>">
        <?php echo esc_html(get_post_type_object(get_post_type())->label); ?> >
      </a>
    </li>
    <li class="breadcrumb__list">
      <a>
        <?php the_title(); ?>
      </a>
    </li>
  </ul>

</div>

<div class="category category-layout">
    <div class="category__inner">
        <span class="category__data"> カテゴリ : </span>
    <?php
        if(has_term('','works-cat',$post->ID)) {
            echo get_the_term_list($post->ID,'works-cat','<span class="category__data">','</span><span class="category__data">','</span>');
        }
    ?>
    </div>
</div>



<section class="sub-works section-layout">
    <div class="sub-works__inner">
        <div class="section-title">
            <h2 class="section-title__index fade-in">WORKS Detail</h2>
            <p class="section-title__sub fade-in">※非公開不可の実績は掲載しておりません</p>
        </div>
        <div class="sub-works__contains">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

                    <div class="sub-works__image">
                    <?php the_post_thumbnail('full'); ?>
                    </div>
                </div>
                <div class="sub-works__explain">
                    <h3 class="sub-works__title"><?php the_title(); ?></h3>
                    <ul class="sub-works__textBox">
                        <div class="sub-works__sub-title">全体像</div>
                        <li class="sub-works__text"><?php the_field('component'); ?></li>
                    </ul>
                    <ul class="sub-works__textBox">
                        <div class="sub-works__sub-title">ページURL</div>
                            <li class="sub-works__text">
                                <a href="<?php the_field('url'); ?>" target="_blank" rel="noopener noreferrer">
                                    ページ詳細はココをクリック
                                </a><span><?php the_field('url-text'); ?></span>
                            </li>
                            <!-- <li class="sub-works__text">
                                <a href="<?php the_field('code'); ?>" target="_blank" rel="noopener noreferrer">
                                ソースコード</a><span><?php the_field('code-text'); ?></span>
                           </li> -->
                    </ul>
                    <ul class="sub-works__textBox">
                        <div class="sub-works__sub-title">使っているもの</div>
                        <li class="sub-works__text"><?php the_field('tools'); ?></li>
                    </ul>
                    <ul class="sub-works__textBox">
                        <div class="sub-works__sub-title">制作時間</div>
                        <li class="sub-works__text"><?php the_field('production-time'); ?></li>
                    </ul>
                    <!-- テキストによるポイント解説3点 ここから -->
                    <ul class="sub-works__textBox">
                        <?php if (get_field('point-title')) : ?>
                            <div class="sub-works__sub-title"><?php the_field('point-title'); ?></div>
                            <li class="sub-works__text"><?php the_field('point-text'); ?></li>
                        <?php endif; ?>
                    </ul>
                    <ul class="sub-works__textBox">
                        <?php if (get_field('point-title2')) : ?>
                            <div class="sub-works__sub-title"><?php the_field('point-title2'); ?></div>
                            <li class="sub-works__text"><?php the_field('point-text2'); ?></li>
                        <?php endif; ?>
                    </ul>
                    <ul class="sub-works__textBox">
                        <?php if (get_field('point-title3')) : ?>
                            <div class="sub-works__sub-title"><?php the_field('point-title3'); ?></div>
                            <li class="sub-works__text"><?php the_field('point-text3'); ?></li>
                        <?php endif; ?>
                    </ul>
                    <!-- テキストによるポイント解説3点 ここまで -->
                    <!-- リンク付きコメント ここから -->
                    <ul class="sub-works__textBox">
                        <?php if (get_field('comment-title')) : ?>
                            <div class="sub-works__sub-title"><?php the_field('comment-title'); ?></div>
                            <li class="sub-works__text"><?php the_field('comment-text'); ?></li>
                            <li class="sub-works__text">
                               <a href="<?php the_field('comment-link'); ?>" target="_blank" rel="noopener noreferrer">
                               クリエイター情報はココをクリック
                               </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <!-- リンク付きコメント ここまで -->
                    <ul class="sub-works__textBox">
                        <?php if (get_field('component-all')) : ?>
                            <div class="sub-works__sub-title"><?php the_field('component-all'); ?></div>
                            <li class="sub-works__text"><?php the_field('component-detail'); ?></li>
                        <?php endif; ?>
                    </ul>
                    <ul class="sub-works__textBox">
                        <div class="sub-works__sub-title"><?php the_field('image-title'); ?></div>
                        <img src="<?php the_field('image-top'); ?>" />
                    </ul>

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<div class="breadcrumb breadcrumb-layout--bottom" >
<!-- https://plusers.net/wordpress_custom_post -->
  <ul class="breadcrumb__lists">
    <li class="breadcrumb__list">
      <a href="<?php echo home_url(); ?>">
        <i class="fa fa-home"></i><span>TOP ></span>
      </a>
    </li>
    <li class="breadcrumb__list">
      <a href="<?php echo get_post_type_archive_link($post_type); ?>">
        <?php echo esc_html(get_post_type_object(get_post_type())->label); ?> >
      </a>
    </li>
    <li class="breadcrumb__list">
      <a>
        <?php the_title(); ?>
      </a>
    </li>
  </ul>

</div>



<!-- contact -->
<?php get_template_part('common/contact'); ?>
  
<!-- footer -->
<?php get_footer(); ?>
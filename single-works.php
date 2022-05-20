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


<section class="sub-works section-layout">
    <div class="sub-works__inner">
        <div class="section-title">
            <h2 class="section-title__index">Works</h2>
        </div>
        <div class="sub-works__contains">
            <div class="sub-works__image">
               <?php the_post_thumbnail('full'); ?>
            </div>
        </div>
        <div class="sub-works__explain">
            <h3 class="sub-works__title"><?php the_title(); ?></h3>
            <ul class="sub-works__textBox">
                <div class="sub-works__sub-title">ページの全体像</div>
                <li class="sub-works__text"><?php the_field('component'); ?></li>
            </ul>
            <ul class="sub-works__textBox">
                <div class="sub-works__sub-title">利用したもの</div>
                <li class="sub-works__text"><?php the_field('tools'); ?></li>
            </ul>
            <ul class="sub-works__textBox">
                <div class="sub-works__sub-title">制作時間</div>
                <li class="sub-works__text"><?php the_field('production-time'); ?></li>
            </ul>
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
            <ul class="sub-works__textBox">
                <?php if (get_field('comment-title')) : ?>
                    <div class="sub-works__sub-title"><?php the_field('comment-title'); ?></div>
                    <li class="sub-works__text"><?php the_field('comment-text'); ?></li>
                <?php endif; ?>
            </ul>
            <ul class="sub-works__textBox">
                <?php if (get_field('component-all')) : ?>
                    <div class="sub-works__sub-title"><?php the_field('component-all'); ?></div>
                    <li class="sub-works__text"><?php the_field('component-detail'); ?></li>
                <?php endif; ?>
            </ul>
            <ul class="sub-works__textBox">
                 <?php if (get_field('image-title')) : ?>
                    <img src="<?php the_field('image-top'); ?>" />
                 <?php endif; ?>
            </ul>

        </div>
    </div>
</section>


<!-- contact -->
<?php get_template_part('common/contact'); ?>
  
<!-- footer -->
<?php get_footer(); ?>
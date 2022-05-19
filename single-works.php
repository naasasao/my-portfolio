<?php get_header(); ?>

<div class="breadcrumb">

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
                <?php if (get_field('component-image')) : ?>
                    <li class="sub-works__text">
                        <img src="<?php the_field('component-image'); ?>" />
                    </li>
                <?php endif; ?>
            </ul>

            <!-- <ul class="sub-works__textBox">
                <div class="sub-works__sub-title">レスポンシブのポイント</div>
                <li class="sub-works__text">320pxから1920pxまであらゆる幅に対応可能なように、基本的に相対値を用いています。</li>
                <li class="sub-works__text">どんな画像が入っても表示崩れが起こらぬよう工夫しています。</li>
            </ul>
            <ul class="sub-works__textBox">
                <div class="sub-works__sub-title">WordPress化のポイント</div>
                <li class="sub-works__text">実際にお客様が用いる場面を想定し、投稿機能に対応したプラグインを入れています。</li>
            </ul>
            <div class="sub-works__comment">
                数人で開発することを想定し、汎用的な命名規則、設計にこだわりました。<br>
                jQueryを用いていますが、JavaScriptの対応も可能です。
            </div>
            <ul class="sub-works__textBox">
                <div class="sub-works__sub-title">全体像の詳細</div>
                <li class="sub-works__text">TOPページ</li>
                <li class="sub-works__text">NEWS一覧アーカイブページ</li>
                <li class="sub-works__text">NEWS詳細ページ</li>
                <li class="sub-works__text">事業内容ページ</li>
                <li class="sub-works__text">制作実績一覧アーカイブページ</li>
                <li class="sub-works__text">制作実績詳細ページ</li>
                <li class="sub-works__text">企業概要ページ</li>
                <li class="sub-works__text">ブログ一覧アーカイブページ</li>
                <li class="sub-works__text">ブログ詳細ページ</li>
                <li class="sub-works__text">お問い合わせページ</li>
                <li class="sub-works__text">お問い合わせ完了・送信エラーページ</li>
                <li class="sub-works__text">404ページ</li>
            </ul> -->

        </div>
    </div>
</section>


<!-- contact -->
<?php get_template_part('common/contact'); ?>
  
<!-- footer -->
<?php get_footer(); ?>
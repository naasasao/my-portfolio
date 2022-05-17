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
                <img src="./images/bird.jpg" alt="">
            </div>
        </div>
        <div class="sub-works__explain">
            <h3 class="sub-works__title">架空コーポレートサイト</h3>
            <ul class="sub-works__textBox">
                <div class="sub-works__sub-title">全体像</div>
                <li class="sub-works__text">TOPページ+下層ページ10ページ</li>
            </ul>
            <ul class="sub-works__textBox">
                <div class="sub-works__sub-title">ツールなど</div>
                <li class="sub-works__text">WordPress</li>
                <li class="sub-works__text">Gulp / Sass</li>
                <li class="sub-works__text">スマートフォン→PCの順でコーディング</li>
            </ul>
            <ul class="sub-works__textBox">
                <div class="sub-works__sub-title">制作時間</div>
                <li class="sub-works__text">20日間（1日4-5hを想定）<br class="u-desktop">
                    （静的コーディングからWordPress化まで）</li>
            </ul>
            <ul class="sub-works__textBox">
                <div class="sub-works__sub-title">コーディングのポイント</div>
                <li class="sub-works__text">共通パーツ、セクションごと、ページごと、といったように汎用性・再利用性が高い部分からコーディングしています。そのために、最初にカンプ全体を見回し、ゴールから逆算して大まかなスケジューリングを行います。</li>
                <li class="sub-works__text">また、ピクセルパーフェクトを行いながらコーディングしていくので、カンプと大幅なズレ無く作業を進めていきます。</li>
            </ul>
            <ul class="sub-works__textBox">
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
            </ul>

        </div>
    </div>
</section>


<!-- contact -->
<?php get_template_part('common/contact'); ?>
  
<!-- footer -->
<?php get_footer(); ?>
<?php get_header(); ?>

<?php
$home = esc_url(home_url('/'));
// $aboutme = esc_url(home_url('/aboutme/'));
$works = esc_url(home_url('/works/'));
// $concept = esc_url(home_url('/concept/'));
$contact = esc_url(home_url('/contact/'));
?>


<!-- MV -->
<div class="mv">
  <div class="mv__content">
    <p class="mv__message">My Portfolio site</p>
    <h1 class="mv__title">
      CODING<i class="fontawesome fa-thin fa-angel"></i><br>
      CODING<i class="fontawesome fa-thin fa-angel"></i><br>
      CODING<i class="fontawesome fa-thin fa-angel"></i>
      <!-- 伝えるを<br>極める -->
    </h1>
    <p class="mv__message">Thank you for visiting here</p>
  </div>
</div>

<!-- about me -->
<section class="about-me section-layout">
  <div class="section-title">
    <h2 class="section-title__index">ABOUT ME</h2>
  </div>
  <div class="about-me__inner">
      <div class="about-me__contents">
        <div class="about-me__image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/bird.jpg" alt="">
        </div>
        <div class="about-me__explain">
          <p class="about-me__text">
            はじめまして！ちーやんと申します。<br>
            大阪府在住の1児の母で、工学部卒です。会社員として6年間勤務していました。現在はWebコーダーとしてお仕事をいただいております。<br>
            元々プログラミングに興味があり、コーディングに挑戦したところその面白さに魅了されました。同時に、難しさにも直面する日々です。どうしたらうまく書けるのかひたすら調べています。<br>
            モノづくりに熱意を持って取り組んでおります。
          </p>
        </div>
      </div><!--about-me__contents-->
      <div class="about-me__skills">
        <p class="about-me__title">SKILL
          <span class="about-me__coding"><br class="u-desktop">
            BEM, flocss /scss, JavaScript /<br class="u-desktop">
            gulp, npm script /github
          </span>
        </p>
        <p class="about-me__title">TOOLS<br class="u-desktop">
          <span class="about-me__design">
            WordPress /STUDIO, WIX /<br class="u-desktop">
            Adobe XD, figma, Photoshop          </span>
        </p>
      </div>
  </div>
</section>

<!-- works -->
<section class="works section-layout">
  <div class="section-title">
    <h2 class="section-title__index">works</h2>
  </div>
  <div class="works__inner">
    
      <div class="works__items">

      <?php
        $args = array(
              'post_type' => 'works',
              'posts_per_page' => '4'
              );
          $the_query = new WP_query($args);
          if ($the_query->have_posts()):
        ?>

        <?php while($the_query->have_posts()): $the_query->the_post(); ?>

          <a class="works__image" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('full'); ?>
          </a>

        <?php endwhile; ?>
        <?php else: ?>
        <!-- 投稿が無い場合の処理 -->
        投稿無いですー
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>

      </div>

      <div class="works__button">
        <a class="button" href="<?php echo $works ?>">VIEW MORE</a>
      </div>
  </div>
</section>

<!-- concept -->
<section class="concept section-layout">
  <div class="section-title">
    <h2 class="section-title__index">CONCEPT</h2>
  </div>
  <div class="concept__inner">
      <div class="concept__contents">
        <div class="concept__explain">
          <div class="concept__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bird.jpg" alt="">
          </div>
          <div class="concept__textBox">
            <h3 class="concept__heading">素早いレスポンス</h3>
            <p class="concept__text">
              進捗状況をお伝えし、常に作業の「見える化」を意識しています。<br>
              対面以外にテキストコミュニケーションが主流になってきた今だからこそ、きちんとお伝えします。
            </p>
          </div>
        </div>
        <div class="concept__explain">
          <div class="concept__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bird.jpg" alt="">
          </div>
          <div class="concept__textBox">
            <h3 class="concept__heading">気持ちに寄り添う</h3>
            <p class="concept__text">
              「何をしているかわからない」というのはコミュニケーション不足であると考えます。<br>
              ちょっとした疑問や些細な事もお答えし、ご自身の思いに寄り添います。
            </p>
          </div>
        </div>
        <div class="concept__explain">
          <div class="concept__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bird.jpg" alt="">
          </div>
          <div class="concept__textBox">
            <h3 class="concept__heading">高い柔軟性</h3>
            <p class="concept__text">
              決まった型を設けず、より良い方法を常に模索しています。<br>
              外部の意見を取り入れることを大切にし、進行中にイレギュラーが起こった場合には代替案をご提案します。
            </p>
          </div>
        </div>
      </div>
  </div>
</section>


<section class="contact section-layout">
    <div class="section-title">
      <h2 class="section-title__index">contact</h2>
    </div>
    <div class="contact__inner">
      <div class="map">
        <div class="map__inner">
          <iframe src="//www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2880.1950449305714!2d142.34135021478224!3d43.789565651621295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0ce5c136a0b1a3%3A0x4e936c0ae55a161e!2z44CSMDcwLTA4MjUg5YyX5rW36YGT5pet5bed5biC5YyX6ZaA55S677yR77yT5LiB55uu77yS77yS77yQ77yW4oiS77yY77yV!5e0!3m2!1sja!2sjp!4v1652331326242!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>




<!-- contact -->
<?php get_template_part('common/contact'); ?>
  
<!-- footer -->
<?php get_footer(); ?>



<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php
$home = esc_url(home_url('/'));
$about = esc_url(home_url('/about/'));
$works = esc_url(home_url('/works/'));
$concept = esc_url(home_url('/concept/'));
$contact = esc_url(home_url('/contact/'));
?>


<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>My Portfolio</title>
  <meta name="description" content="ポートフォリオサイトです" />
  <meta name="keywords" content="ポートフォリオサイト" />
  <!-- ogp -->
  <meta property="og:title" content="ポートフォリオサイト" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://creative-ch18n.com/" />
  <meta property="og:image" content="https://creative-ch18n.com/images/sitelogo.png" />
  <meta property="og:site_name" content="ポートフォリオサイト" />
  <meta property="og:description" content="ポートフォリオサイト" />

  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/sitelogo.png" />

  <!-- Adobeの日本語フォント -->
  <script>
  (function(d) {
    var config = {
      kitId: 'fyg6qqv',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<meta name=”robots” content=”noindex”>
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- ヘッダー部分（ロゴとハンバーガー） -->
  <header class="header l-header">
    <div class="header__inner">

      <h1 class="header__logo">
        <a href="<?php echo esc_url( home_url('/')); ?>" class="header__logo-link">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sitelogo.png" alt="ヘッダーロゴ">
        </a>
      </h1>

      <nav class="header__sp-nav js-drawer-menu">
          <ul class="header__sp-nav__items" id="nav">
                <li class="header__sp-nav__item"><a class="link" href="<?php echo $about ?>">ABOUT ME</a></li>
                <li class="header__sp-nav__item"><a class="link" href="<?php echo $works ?>">WORKS</a></li>
                <!-- <li class="header__sp-nav__item"><a class="link" href="<?php echo esc_url(home_url('/concept/')); ?>">concept</a></li> -->
                <li class="header__sp-nav__item"><a class="link" href="<?php echo $contact ?>">CONTACT</a></li>
          </ul>
      </nav>
        
      <nav class="header__pc-nav">
            <ul class="header__pc-nav__items">
                <li class="header__pc-nav__item"><a class="link" href="<?php echo $about ?>">ABOUT ME</a></li>
                <li class="header__pc-nav__item"><a class="link" href="<?php echo $works ?>">WORKS</a></li>
                <!-- <li class="header__pc-nav__item"><a class="link" href="#concept">concept</a></li> -->
                <li class="header__pc-nav__item"><a class="link" href="<?php echo $contact ?>">CONTACT</a></li>
            </ul>
      </nav>
        
      <button class="header__drawer hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
      </button>
  
    </div>
  </header>

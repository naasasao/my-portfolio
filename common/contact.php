<?php
$home = esc_url(home_url('/'));
// $aboutme = esc_url(home_url('/aboutme/'));
$works = esc_url(home_url('/works/'));
// $concept = esc_url(home_url('/concept/'));
$contact = esc_url(home_url('/contact/'));
?>

<section class="contact section-layout">
    <div class="section-title">
      <h2 class="section-title__index section-title__index--white fade-in">CONTACT</h2>
    </div>
    <div class="contact__inner">
        <div class="contact__contents">
          <p class="contact__message">
            制作のご依頼やご相談、料金のお見積り等、お気軽にお問い合わせください！<br>
            お送りいただいた内容を確認後、2日以内にお返事させていただきます。
          </p>
        </div>
        <div class="contact__button">
          <a class="button" href="<?php echo $contact ?>">Let's Contact!</a>
        </div>
    </div>
  </section>

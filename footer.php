<?php
$home = esc_url(home_url('/'));
$about = esc_url(home_url('/about/'));
$works = esc_url(home_url('/works/'));
$concept = esc_url(home_url('/concept/'));
$contact = esc_url(home_url('/contact/'));
?>





<footer class="footer">
  <div class="footer__inner">
    <ul class="footer__nav">
        <li class="footer__nav-item"><a href="<?php echo $about ?>">about me</a></li>
        <li class="footer__nav-item"><a href="<?php echo $works ?>">works</a></li>
        <!-- <li class="footer__nav-item"><a href="<?php echo $about ?>">concept</a></li> -->
        <li class="footer__nav-item"><a href="<?php echo $contact ?>">contact</a></li>
    </ul>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>



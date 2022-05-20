<?php get_header(); ?>

<div class="breadcrumb">

</div>

<form class="sub-contact section-layout">
    <div class="sub-contact__inner">

        <div class="section-title">
            <h2 class="section-title__index">contact</h2>
        </div>

        <h3 class="sub-contact__message">お気軽にお問い合わせください！</h3>

        <div class="sub-contact__items" action="confirm.php" method="post" name="form" id="contact">


        <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
 

            <!-- <div class="sub-contact__item">
                <label>お名前</label>
                <input type="text" name="name" required placeholder="テキストが入ります" value="">
            </div>
            <div class="sub-contact__item">
                <label>ふりがな</label>
                <input type="text" name="furigana" required placeholder="テキストが入ります" value="">
            </div>
            <div class="sub-contact__item">
                <label>お問い合わせ内容</label>
                <textarea name="content" rows="20" required placeholder="テキストが入ります"></textarea>
            </div>
            <div class="sub-contact__button-area">
                <button class="sub-contact__button" type="submit" id="button" disabled>送信</button>
            </div> -->
        </div>

    </div>
</form>


  
<!-- footer -->
<?php get_footer(); ?>
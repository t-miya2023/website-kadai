<?php get_header(); ?>
    <main>
        <section class="main-visual inner">
            <h1 class="main-visual__heading">Contact</h1>
            <p class="main-visual__subheading">ご予約・お問い合わせ</p>
            <div class="main-visual__backcolor--white"></div>
            <div class="main-visual__backcolor--mid"></div>
            <div class="main-visual__backcolor--green-not-top"></div>
            <img class="main-visual__img-not-top visual-pc" src="<?php echo get_template_directory_uri(); ?>/img/Reserve.png">
            <img class="main-visual__img-not-top visual-sp" src="<?php echo get_template_directory_uri(); ?>/img/SP-Reserve.png">
        </section>
        <section class="breadcrumb-menu">
            <div class="inner">
                <a class="breadcrumb-menu__link" href="<?php echo home_url(); ?>">ホーム</a>
                >
                <p class="breadcrumb-menu__actualy">ご予約・お問い合わせ</p>
            </div>
        </section>
        <section class="contact">
            <div class="contact__inner">
                <h2 class="contact__heading">お電話でのご予約・お問い合わせ</h2>
                <p class="contact__adress">〒101-0022 東京都千代田区神田練塀町300番地<br>住友不動産秋葉原駅前ビル 5F</p>
                <p class="contact__tel">tel: <span>03-1234-5678</span></p>
                <h2 class="contact__heading">ご予約・お問い合わせフォーム</h2>
                <p class="contact__asterisk">※ 2営業日以内にご返信いたします。</p>
                <?php if(have_posts()):
                    while(have_posts()):the_post();
                    the_content();
                endwhile;endif;
                    ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
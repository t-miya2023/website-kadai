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
                
                <p class="breadcrumb-menu__actualy">ご予約・お問い合わせ</p>
            </div>
        </section>
        <section class="thx">
            <div class="inner">
                <div class="thx__container">
                    <h2 class="thx__submit-message">お問い合わせ内容を送信しました</h2>
                    <p class="thx__message">ありがとうございます。２営業日以内にご返信いたします。</p>
                    <button class="back-btn" onclick="location.href='<?php echo home_url(); ?>/contact'">戻る</button>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
<?php get_header(); ?>
    <main>
        <section class="main-visual inner">
            <h1 class="main-visual__heading">About</h1>
            <p class="main-visual__subheading">当院について</p>
            <div class="main-visual__backcolor--white"></div>
            <div class="main-visual__backcolor--mid"></div>
            <div class="main-visual__backcolor--green-not-top"></div>
            <img class="main-visual__img-not-top visual-pc" src="<?php echo get_template_directory_uri();?>/img/About.png">
            <img class="main-visual__img-not-top visual-sp" src="<?php echo get_template_directory_uri();?>/img/SP-About.png">
        </section>
        <section class="breadcrumb-menu">
            <div class="inner">
                <a class="breadcrumb-menu__link" href="<?php echo home_url(); ?>">ホーム</a>
                >
                <p class="breadcrumb-menu__actualy">当院について</p>
            </div>
        </section>
        <section class="concept">
            <div class="container inner">
                <img class="concept__img visual-sp" src="<?php echo get_template_directory_uri();?>/img/SP-Concept-Imagegroup.png" alt="">

                <h2 class="concept__heading">Concept</h2>
                <p class="concept__subheading">特長</p>
                <div class="concept__box">
                    <div class="concept--left">
                        <p class="concept__intro">日々変化する<br>
                            カラダと心を癒す<br>パーソナル<br>
                            トレーナーとして</p>
                        <p class="concept__desc">当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。
                        </p>
                        <p class="concept__desc">また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。</p>
                        <p class="concept__desc">ご不安な点や疑問点などお気軽にご相談くださいませ。</p>

                    </div>
                    <div class="concept--right">
                        <img class="concept__img" src="<?php echo get_template_directory_uri();?>/img/Group 2126.png" alt="">
                    </div>
                </div>
            </div>
            <p class="concept__BG-letter">Concept</p>
            <img class="concept__BG-icon" src="<?php echo get_template_directory_uri();?>/img/BGicon_Light.png" alt="">
        </section>
        <section class="flow">
            <div class="container inner">
                <img class="flow__img visual-sp" src="<?php echo get_template_directory_uri();?>/img/SP-Flow-Imagegroup.png" alt="">
                <h2 class="flow__heading">Flow</h2>
                <p class="flow__subheading">施術の流れ</p>
                <div class="flow__box">
                    <div class="flow--left">
                        <ol class="flow__list">
                            <li class="flow__item">受付</li>
                            <li class="flow__item">問診票のご記入</li>
                            <li class="flow__item">カウンセリング</li>
                            <li class="flow__item">施術</li>
                            <li class="flow__item">アフターカウンセリング</li>
                        </ol>
                    </div>
                    <div class="flow--right">
                        <img class="flow__img" src="<?php echo get_template_directory_uri();?>/img/Flow-Imagegroup.png" alt="">
                    </div>
                </div>
            </div>
            <p class="flow__BG-letter">Flow</p>
            <img class="flow__BG-icon" src="<?php echo get_template_directory_uri();?>/img/BGicon_Light.png" alt="">
        </section>
        <section class="point">
            <div class="inner">
                <h2 class="point__heading">根本改善のポイント</h2>
                <p class="point__desc">お体の状態や生活習慣、ご要望を丁寧にお伺いします。<br>
                    ご自身でできるケアなども含めて施術方針をお作りします。</p>
                <div class="point__container">
                    <div class="point__inner">
                        <img class="point__img" src="<?php echo get_template_directory_uri();?>/img/Point1.png" alt="">
                        <h3 class="point__title"> 丁寧なカウンセリング</h3>
                    </div>
                    <div class="point__inner">
                        <img class="point__img" src="<?php echo get_template_directory_uri();?>/img/Point2.png" alt="">
                        <h3 class="point__title">徹底的分析</h3>
                    </div>
                    <div class="point__inner">
                        <img class="point__img" src="<?php echo get_template_directory_uri();?>/img/Point3.png" alt="">
                        <h3 class="point__title">施術計画のご提案</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
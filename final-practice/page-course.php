<?php get_header(); ?>
    <main>
        <section class="main-visual inner">
            <h1 class="main-visual__heading">Price</h1>
            <p class="main-visual__subheading">コース・料金</p>
            <div class="main-visual__backcolor--white"></div>
            <div class="main-visual__backcolor--mid"></div>
            <div class="main-visual__backcolor--green-not-top"></div>
            <img class="main-visual__img-not-top visual-pc" src="<?php echo get_template_directory_uri(); ?>/img/Courseprice.png">
            <img class="main-visual__img-not-top visual-sp" src="<?php echo get_template_directory_uri(); ?>/img/SP-Courseprice.png">
        </section>
        <section class="breadcrumb-menu">
            <div class="inner">
                <a class="breadcrumb-menu__link" href="<?php echo home_url(); ?>">ホーム</a>
                >
                <p class="breadcrumb-menu__actualy">コース・料金</p>
            </div>
        </section>
        <section class="course price-course">
            <div class="container inner">
                <h2 class="course__heading">コース・料金</h2>
                <p class="course__desc">当院では保険診療、自費診療と<br>もにご対応しております</p>
                <div class="course__box">
                    <div class="course--left">
                        <img class="course__img" src="<?php echo get_template_directory_uri(); ?>/img/TOP-insurance1.png" alt="">
                        <h3 class="course__subheading">保険診療</h3>
                        <ul>
                            <li class="course__item">骨折・打撲・捻挫・脱臼</li>
                            <li class="course__item">スポーツ診療</li>
                            <li class="course__item">交通事故</li>
                        </ul>
                    </div>
                    <div class="course--right">
                        <img class="course__img" src="<?php echo get_template_directory_uri(); ?>/img/TOP-self1.png" alt="">
                        <h3 class="course__subheading">自費診療</h3>
                        <ul>
                            <li class="course__item">腰痛・肩こり</li>
                            <li class="course__item">冷え性・だるさ</li>
                            <li class="course__item">骨盤・背骨矯正</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="insurance">
            <div class="container inner">
                <img class="insurance__img visual-sp" src="<?php echo get_template_directory_uri(); ?>/img/TOP-insurance2.png" alt="">
                <div class="insurance__box">
                    <div class="insurance--left">
                        <h2 class="insurance__heading">Insurance</h2>
                        <p class="insurance__subheading">保険診療</p>
                        <p class="insurance__desc visual-pc">
                            健康保険の適用は、慢性化していない、急性のけがのみが対象となります。<br>「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。
                        </p>
                        <ul class="insurance__list">
                            <li class="insurance__item">骨折・打撲・捻挫・脱臼</li>
                            <li class="insurance__item">スポーツ診療</li>
                            <li class="insurance__item">交通事故</li>
                        </ul>
                    </div>
                    <div class="insurance--right">
                        <img class="insurance__img" src="<?php echo get_template_directory_uri(); ?>/img/TOP-insurance2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="self-pay">
            <div class="container inner">
                <img class="self-pay__img visual-sp" src="<?php echo get_template_directory_uri(); ?>/img/TOP-self2.png" alt="">

                <div class="self-pay__box">
                    <div class="self-pay--left">
                        <h2 class="self-pay__heading">Self-pay</h2>
                        <p class="self-pay__subheading">自費診療</p>
                        <p class="self-pay__desc visual-pc">慢性的なご症状、日常生活の疲労やご年齢により生じる痛み緩和の施術は健康保険の適用がなく、全額自己負担となります。</p>
                        <ul class="self-pay__list">
                            <li class="self-pay__item">腰痛・肩こり</li>
                            <li class="self-pay__item">冷え性・だるさ</li>
                            <li class="self-pay__item">骨盤・背骨矯正</li>
                        </ul>
                        <p class="self-pay__price">初回　<br>8,800円（税込） / 50分</p>
                        <p class="self-pay__price">2回目以降　<br>6,600円（税込） / 30分</p>
                    </div>
                    <div class="self-pay--right">
                        <img class="self-pay__img" src="<?php echo get_template_directory_uri(); ?>/img/TOP-self2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
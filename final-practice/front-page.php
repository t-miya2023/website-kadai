<?php get_header(); ?>
    <main>
        <!---メインビジュアルここから--->
        <section class="main-visual inner">
            <h1 class="main-visual__heading--right">根本的な症状改善を</h1>
            <h1 class="main-visual__heading--left">サポートします</h1>
            <div class="main-visual__backcolor--white"></div>
            <div class="main-visual__backcolor--top"></div>
            <div class="main-visual__backcolor--bottom"></div>
            <div class="main-visual__backcolor--green"></div>
            <div id="carousel" class="main-visual__box visual-pc">
                <img class="main-visual__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/TOP-Carouselgroup1.png">
                <img class="main-visual__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/TOP_CarouselGroup2.png">
                <img class="main-visual__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/TOP_CarouselGroup3.png">
                <img class="main-visual__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/TOP-Carouselgroup4.png">
            </div>
            <div id="carousel-sp" class="main-visual__box visual-sp">
                <img class="main-visual__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/SP-TOP-Carouselgroup1.png">
                <img class="main-visual__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/SP-TOP-Carouselgroup2.png">
                <img class="main-visual__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/SP-TOP-Carouselgroup3.png">
                <img class="main-visual__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/SP-TOP-Carouselgroup4.png">
            </div>
            <div class="progress_bar">
                <div class="bar" id="js-progressBar"></div>
            </div>
        </section>
        <!---ニュースここから--->
        <sction class="news">
            <div class="inner news__inner">
                <div class="news__box--2">
                    <h2 class="news__heading">News</h2>
                    <p class="news__subheading">お知らせ</p>
                </div>
                <?php 
                    $args = array(
                        'post_type' => 'post',
                        //'category_name' => 'news',
                        'posts_per_page' => 1,
                    );
                    $posts = get_posts($args);
                    $cat = get_the_category($args);
                    $cat_name = $cat[0]->name;
                ?>
                <?php foreach($posts as $post): ?>
                    <?php setup_postdata($post); ?>

                <div class="news__box--2">
                    <div class="news__box">
                        <time class="news__date"><?php echo get_the_date('Y/m/d'); ?></time>
                        <?php echo '<p class="news__category">'.$cat_name.'</p>' ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="news__title"><?php the_title(); ?></a>
                </div>
                
                <?php endforeach; 
                wp_reset_postdata();
                ?>

                <a class="news__link" href="<?php echo home_url(); ?>/news">→ お知らせ一覧へ</a>
            </div>
        </sction>
        <!---コンセプトここから--->
        <section class="concept">
            <div class="container inner">
                <img class="concept__img visual-sp" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/SP-Concept-Imagegroup.png" alt="">
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
                        <div class="concept__link-box">
                            <a class="concept__link" href="<?php echo home_url(); ?>/about">→ 当院について</a>
                        </div>
                    </div>
                    <div class="concept--right">
                        <img class="concept__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Group 2126.png" alt="">
                    </div>
                </div>
            </div>
            <p class="concept__BG-letter">Concept</p>
            <img class="concept__BG-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/BGicon_Light.png" alt="">
        </section>
        <div class="wave__area">
            <svg class="wave-1" width="1280" height="260" viewBox="0 0 1280 260" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M1343.95 259.079L-440 160.803L-432.321 21.4032C-249.516 -3.63359 -59.268 91.9394 256.908 85.1441C420.954 81.607 551.438 52.9604 641.026 35.5185C707.18 22.6397 778.285 10.5014 855.15 4.29191C1059.02 -12.1713 1200.53 23.5091 1275.34 30.9904C1302.21 33.6827 1330.08 35.4088 1356.23 36.1911L1343.95 259.079Z" fill="#F0F5E1"/>
            </svg>
            <svg class="wave-2" width="1280" height="260" viewBox="0 0 1280 260" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="1" fill-rule="evenodd" clip-rule="evenodd" d="M1343.95 259.079L-440 160.803L-432.321 21.4032C-249.516 -3.63359 -59.268 91.9394 256.908 85.1441C420.954 81.607 551.438 52.9604 641.026 35.5185C707.18 22.6397 778.285 10.5014 855.15 4.29191C1059.02 -12.1713 1200.53 23.5091 1275.34 30.9904C1302.21 33.6827 1330.08 35.4088 1356.23 36.1911L1343.95 259.079Z" fill="#F0F5E1"/>
            </svg>
        </div>
        <!---コースここから--->
        <section class="course">
            <div class="container inner">
                <h2 class="course__heading">コース・料金</h2>
                <p class="course__desc">当院では保険診療、自費診療と<br>もにご対応しております</p>
                <div class="course__box">
                    <div class="course--left">
                        <img class="course__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/TOP-insurance1.png" alt="">
                        <h3 class="course__subheading">保険診療</h3>
                        <ul>
                            <li class="course__item">骨折・打撲・捻挫・脱臼</li>
                            <li class="course__item">スポーツ診療</li>
                            <li class="course__item">交通事故</li>
                        </ul>
                    </div>
                    <div class="course--right">
                        <img class="course__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/TOP-self1.png" alt="">
                        <h3 class="course__subheading">自費診療</h3>
                        <ul>
                            <li class="course__item">腰痛・肩こり</li>
                            <li class="course__item">冷え性・だるさ</li>
                            <li class="course__item">骨盤・背骨矯正</li>
                        </ul>
                    </div>
                </div>
                <a class="course__link" href="<?php echo home_url(); ?>/course">→ コース・料金詳細へ</a>
            </div>
            <p class="course__BG-letter">Course</p>
            <img class="course__BG-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/BGicon_Light.png" alt="">
        </section>
        <!---お客様の声ここから--->
        <section class="voice">
            <div class="voice__carousel__outer">
            <div class="voice__carousel">
                <div id="bottom-carousel" class="visual-pc">
                    <img class="bottom-carousel__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Bottom-Carouselgroup1.png" alt="">
                    <img class="bottom-carousel__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Bottom-Carouselgroup2.png" alt="">
                    <img class="bottom-carousel__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Bottom-Carouselgroup3.png" alt="">
                </div>
                <div id="bottom-carousel-sp" class="visual-sp">
                    <img class="bottom-carousel__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/SP-Bottom-Carouselgroup1.png" alt="">
                    <img class="bottom-carousel__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/SP-Bottom-Carouselgroup2.png" alt="">
                    <img class="bottom-carousel__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/SP-Bottom-Carouselgroup3.png" alt="">
                </div>
                <div class="voice--white"></div>
            </div>
            <h2 class="voice__heading">お客様の声</h2>
        </div>
            <div class="inner">
                
                <p class="voice__desc">痛みの改善に加えて自分で予防<br>もできるようになりました</p>
                <div class="voice__container">
                    <div class="voice__inner">
                        <img class="voice__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/TOP-user1.png" alt="">
                        <h3 class="voice__name">S・K様　30代女性</h3>
                        <p class="voice__comment">1ヶ月で腰の痛みが軽減しました。自分で自宅でできるケアも教えていただき、お任せしてよかったです。</p>
                    </div>
                    <div class="voice__inner">
                        <img class="voice__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/TOP-user2.png" alt="">
                        <h3 class="voice__name">T・M様　40代男性</h3>
                        <p class="voice__comment">マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。
                        </p>
                    </div>
                    <div class="voice__inner">
                        <img class="voice__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/TOP-user3.png" alt="">
                        <h3 class="voice__name">S・T様　60代女性</h3>
                        <p class="voice__comment">転倒して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。今は毎日元気に近所を散歩できています。
                        </p>
                    </div>
                </div>
                <a class="voice__link" href="<?php echo home_url(); ?>/voice">→ お客様の声一覧へ</a>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>
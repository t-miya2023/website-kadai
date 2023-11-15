    <!---フッターここから--->
    <footer class="footer">
        <div class="wave__area">
            <svg class="wave-3" width="1280" height="132" viewBox="0 0 1280 132" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M1300 143L-17 143L-17 59.6887C116.532 38.7706 260.433 89.4715 492.868 75.0445C613.465 67.5524 708.342 46.2009 773.573 32.8678C821.741 23.0227 873.583 13.4563 929.905 7.23353C1079.29 -9.26773 1184.89 7.34705 1240.26 9.34909C1260.14 10.0715 1280.72 10.185 1300 9.79285L1300 143Z" fill="#F0F5E1"/>
            </svg>
            <svg class="wave-4" width="1280" height="132" viewBox="0 0 1280 132" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="1" fill-rule="evenodd" clip-rule="evenodd" d="M1300 143L-17 143L-17 59.6887C116.532 38.7706 260.433 89.4715 492.868 75.0445C613.465 67.5524 708.342 46.2009 773.573 32.8678C821.741 23.0227 873.583 13.4563 929.905 7.23353C1079.29 -9.26773 1184.89 7.34705 1240.26 9.34909C1260.14 10.0715 1280.72 10.185 1300 9.79285L1300 143Z" fill="#F0F5E1"/>
            </svg>
        </div>
        <div class="footer__container inner">
            <div class="footer__heading-box">
                <h2 class="footer__heading">お気軽にご来院ください</h2>
            </div>
            <div class="footer__inner">
                <div class="footer__access">
                    <h2 class="footer__time-required">JR「秋葉原駅」より徒歩1分</h2>
                    <p class="footer__adress">〒101-0022<br>
                        東京都千代田区神田練塀町300番地<br>
                        住友不動産秋葉原駅前ビル 5F
                    </p>
                    <h2 class="footer__tel">tel: 03-1234-5678</h2>
                    <img class="footer__business-hours" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Frame 2304.png" alt="">
                    <a class="footer__contact" href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせはこちらから </a>
                </div>
                <div class="footer__map">
                    <div class="footer__map__inner">
                        <iframe class="footer__map-iframe"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.068855133683!2d139.77207767533707!3d35.699923172581165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1698631436405!5m2!1sja!2sjp"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <a href="#"><img class="footer_back-btn" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/btn_Back.png" alt="" width="64px"></a>
        </div>
        <nav class="footer__menu">
            <a href="<?php echo home_url(); ?>"><img class="footer__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Frame 2259.png" alt="トップページへ戻る"></a>
            <a class="footer__item" href="<?php echo home_url(); ?>">TOP</a>
            <a class="footer__item" href="<?php echo home_url(); ?>/about">当院について</a>
            <a class="footer__item" href="<?php echo home_url(); ?>/course">コース・料金</a>
            <a class="footer__item" href="<?php echo home_url(); ?>/news">お知らせ</a>
            <a class="footer__item" href="<?php echo home_url(); ?>/voice">お客様の声</a>
            <a class="footer__item" href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせ</a>
        </nav>
        <div class="footer__copyright">
            <p class="copyright">&copy; 2023 SAMURAI整体院</p>
        </div>

    </footer>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-3.7.0.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/slick/slick.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
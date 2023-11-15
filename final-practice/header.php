<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title><?php echo esc_html(wp_get_document_title()); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/js/slick/slick.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/js/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rampart+One&family=Roboto:wght@100&family=Shippori+Mincho&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Rampart+One&family=Roboto:wght@100&family=Shippori+Mincho&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP&family=Rampart+One&family=Roboto:wght@100&family=Shippori+Mincho&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP:wght@400;700&family=Rampart+One&family=Roboto:wght@100&family=Shippori+Mincho&display=swap"
        rel="stylesheet">
<?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <?php if(is_front_page()): ?>
        <div class="header__inner inner top-menu">
        <?php else: ?>
        <div class="header__inner inner">
        <?php endif; ?>
            <a href="<?php echo esc_url(home_url()); ?>"><img class="header__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Frame 2259.png" alt="トップページへ戻る"></a>
            <?php if(is_front_page()): ?>
            <nav class="header__menu visual-pc">
                <a class="header__item top-header" href="<?php echo home_url(); ?>">ホーム</a>
                <a class="header__item top-header" href="<?php echo home_url(); ?>/about">当院について</a>
                <a class="header__item top-header" href="<?php echo home_url(); ?>/course">コース・料金</a>
                <a class="header__item top-header" href="<?php echo home_url(); ?>/news">お知らせ</a>
                <a class="header__item top-header" href="<?php echo home_url(); ?>/voice">お客様の声</a>
                <a class="header__contact" href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせ</a>
            </nav>
            <?php else: ?>
            <nav class="header__menu visual-pc">
                <a class="header__item" href="<?php echo home_url(); ?>">ホーム</a>
                <a class="header__item" href="<?php echo home_url(); ?>/about">当院について</a>
                <a class="header__item" href="<?php echo home_url(); ?>/course">コース・料金</a>
                <a class="header__item" href="<?php echo home_url(); ?>/news">お知らせ</a>
                <a class="header__item" href="<?php echo home_url(); ?>/voice">お客様の声</a>
                <a class="header__contact" href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせ</a>
            </nav>
            <?php endif; ?>
            <div class="header__menu--btn btn visual-sp">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav id="btn__menu" class="btn-menu visual-sp">
                <img  class="btn-menu__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Frame 2571.png" alt="">
                <div class="btn-menu__box">
                    <h2 class="btn-menu__heading">メニュー</h2>
                    <a class="header__item sp-header" href="<?php echo home_url(); ?>">ホーム</a>
                    <a class="header__item sp-header" href="<?php echo home_url(); ?>/about">当院について</a>
                    <a class="header__item sp-header" href="<?php echo home_url(); ?>/course">コース・料金</a>
                    <a class="header__item sp-header" href="<?php echo home_url(); ?>/news">お知らせ</a>
                    <a class="header__item sp-header" href="<?php echo home_url(); ?>/voice">お客様の声</a>
                    <a class="header__contact" href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせ</a>
                </div>
            </nav>
            <div id="black-back"></div>
        </div>
        
    </header>
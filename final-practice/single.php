<?php get_header(); ?>
    <main>
        <section class="main-visual inner">
            <h1 class="main-visual__heading">Information</h1>
            <p class="main-visual__subheading">お知らせ</p>
            <div class="main-visual__backcolor--white"></div>
            <div class="main-visual__backcolor--mid"></div>
            <div class="main-visual__backcolor--green-not-top"></div>
            <img class="main-visual__img-not-top visual-pc" src="<?php echo get_template_directory_uri(); ?>/img/News.png">
            <img class="main-visual__img-not-top visual-sp" src="<?php echo get_template_directory_uri(); ?>/img/SP-News.png">
        </section>
        <section class="breadcrumb-menu">
            <div class="inner">
                <a class="breadcrumb-menu__link" href="<?php echo home_url(); ?>">ホーム</a>
                >
                <p class="breadcrumb-menu__actualy">お知らせ詳細</p>
            </div>
        </section>
        <section class="info">
            <div class="inner">
                <div class="info__inner">
                    <?php  
                        if(have_posts()):
                            while(have_posts()):the_post();
                    ?>
                    <?php  
                        $cat = get_the_category();
                        $cat_name = $cat[0]->name;
                    ?>
                    <div class="info__container">
                        <h1 class="info-detail__title"><?php the_title(); ?></h1>
                        <div class="info__box--date">
                            <time class="info__date"><?php echo get_the_date('Y年n月j日'); ?></time>
                            <p class="info__category"><?php echo $cat_name; ?></p>
                        </div>
                        <img class="info-detail__img" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <?php
                            $content_string = get_the_content();
                            $content_string = str_replace('<h2','<h2 class=info-detail__heading2',$content_string);
                            $content_string = str_replace('<h3','<h3 class=info-detail__heading3',$content_string);
                            $content_string = str_replace('<h4','<h4 class=info-detail__heading4',$content_string);
                            $content_string = str_replace('<p','<p class=info-detail__text',$content_string);
                            echo $content_string;
                            ?>
                            <?php endwhile; endif; ?>
                            <!--ページネーション-->
                            <ul class="info-detail__pagination">
                                <?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
                                
                                    <li><a class="info-detail__pagination--prev" href="<?php echo get_permalink($nextpost->ID); ?>">
                                    前の記事へ
                                    </a></li>
                                
                                <?php endif; ?>
                                <li><a href="<?php echo home_url(); ?>/news">お知らせ一覧</a></li>
                                <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
                                
                                    <li><a class="info-detail__pagination--next" href="<?php echo get_permalink($prevpost->ID); ?>">
                                    次の記事へ
                                    </a></li>
                                <?php endif; ?>
                            </ul>

                    </div>
                            
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>
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
                <p class="breadcrumb-menu__actualy">お知らせ</p>
            </div>
        </section>
        <section class="info">
            <div class="inner">
                <div class="info__inner">
                <div class="info__container">
                <?php
                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;  
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 10,
                            'paged' => $paged
                        );
                        $cat = get_the_category();
                        $cat = $cat[0];
                        $the_query = new WP_Query($args);
                        if($the_query->have_posts()):
                            while($the_query->have_posts()):$the_query->the_post();
                    ?>
                    <div class="info__box">
                        <a  class="info__link" href="<?php the_permalink(); ?>"><img class="info__img" src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
                        <div class="info__box--right">
                            <a href="<?php the_permalink(); ?>"><h2 class="info__title"><?php the_title(); ?></h2></a>
                            <div class="info__box--date">
                                <time class="info__date"><?php echo get_the_date('Y年n月j日'); ?></time>
                                <p class="info__category"><?php echo $cat->cat_name; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                    <!--ページネーション-->
                        <?php
                        if (function_exists('wp_pagenavi')) {
                            wp_pagenavi(array('query' => $the_query));
                        } ?>
                    <?php wp_reset_postdata();?>
                </div>

<?php get_sidebar(); ?>
            </div>
            </div>
        </section>

    </main>
<?php get_footer(); ?>
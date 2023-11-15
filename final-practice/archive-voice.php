<?php get_header(); ?>
    <main>
        <section class="main-visual inner">
            <h1 class="main-visual__heading">Voice</h1>
            <p class="main-visual__subheading">お客様の声</p>
            <div class="main-visual__backcolor--white"></div>
            <div class="main-visual__backcolor--mid"></div>
            <div class="main-visual__backcolor--green-not-top"></div>
            <img class="main-visual__img-not-top visual-pc" src="<?php echo get_template_directory_uri(); ?>/img/Voice1.png">
            <img class="main-visual__img-not-top visual-sp" src="<?php echo get_template_directory_uri(); ?>/img/SP_Voice1.png">
        </section>
        <section class="breadcrumb-menu">
            <div class="inner">
                <a class="breadcrumb-menu__link" href="<?php echo home_url(); ?>">ホーム</a>
                >
                <p class="breadcrumb-menu__actualy">お客様の声</p>
            </div>
        </section>
        <section class="voice-detail">
            <div class="voice-detail__inner">

                <?php 
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'voice',
                        'posts_per_page' => 5,
                        'paged' => $paged,
                    );
                    $the_query = new WP_Query($args);
                    if($the_query->have_posts()):
                        while($the_query->have_posts()):$the_query->the_post();
                ?>
                <div class="voice-detail__container">
                    <img class="voice-detail__img" src="<?php the_post_thumbnail_url();?>" alt="">
                    <div class="voice-detail__box">
                        <h2 class="voice-detail__name"><?php the_title(); ?></h2>
                        <p class="voice-detail__comment">
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; ?> 
                    <?php if (function_exists('wp_pagenavi')) {
                        wp_pagenavi(array('query' => $the_query));
                    } ?>
                    
                <?php endif; wp_reset_postdata(); ?>
            </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
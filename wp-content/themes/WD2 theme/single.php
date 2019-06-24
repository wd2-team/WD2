<?php get_header(); ?>

<div id="wrapperwhite">
    <div id="mainwhite">
        <div class="swiper-container" id="swiperwhite">
            <div class="swiper-wrapper">
                <div id="article" class="mainwhitechild swiper-slide no_swipe" data-hash="slide3">
                    <header>
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png"></a>
                    </header>
                    <div id="articlecontent">
                        <?php if(have_posts()): while(have_posts()):the_post(); ?>
                            <h1><?php the_post_thumbnail(array(50,50), array('class' => 'left')); ?></h1>
                            <div id="thumbinner">
                                <p><?php the_title(); ?></p>
                                <ul>
                                    <li><span><?php the_tags('',''); ?></span></li>
                                </ul>
                            </div>
                            <div id="articlecontentinner">
                                <?php the_content(); ?>
                            </div><!-- #articlecontentinner -->
                        <?php endwhile; endif; ?>
                    </div><!-- #articlecontent -->
                    <div id="related">
                        <h2>RELATED</h2>
                        <ul>
                        <?php
                        $categories = get_the_category($post->ID);
                        $category_ID = array();
                        foreach($categories as $category):
                          array_push( $category_ID, $category -> cat_ID);
                        endforeach ;
                        $args = array(
                          'post__not_in' => array($post -> ID),
                          'posts_per_page'=> 3,
                          'category__in' => $category_ID,
                          //'orderby' => 'rand',ランダムじゃないほうがいいのでコメントアウト。orderbyを省略するとデフォルトの'date'になり最新記事から順に表示される
                        );
                        $query = new WP_Query($args);
                        if( $query -> have_posts() ):
                        while ($query -> have_posts()) : $query -> the_post(); ?>
                           <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(50,50), array('class' => 'left')); ?></a></li>
                        <?php
                        endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                        </ul>
                    </div><!-- #related -->
                </div><!-- #article -->
            </div><!-- .swiper-wrapper -->
        </div><!-- .swiper-container -->
    </div><!-- #mainwhite -->
    <footer>
        <ul>
            <li><a href="#slide1">ABOUT</a></li>
            <li><a href="#slide2">SERVICE</a></li>
            <li><a href="#slide3">ARTICLE</a></li>
            <li><a href="#slide4">CONTACT</a></li>
        </ul>
        <ul>
            <li>© WD2 2019. All rights reserved.</li>
        </ul>
        <ul>
            <li><a href=""><i class="fab fa-instagram"></i></a></li>
            <li><a href=""><i class="fab fa-twitter"></i></a></li>
        </ul>

<?php get_footer(); ?>

<?php get_header(); ?>

<div id="wrapperwhite">
    <header class="behavior">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png"></a>
    </header>
    <div id="mainwhite">
        <div class="swiper-container" id="swiperwhite">
            <div class="swiper-wrapper">
                <div id="article" class="mainwhitechild swiper-slide no_swipe" data-hash="slide3">
                    <h1>ARTICLE</h1>
                    <div id="tagall">
                        <?php
                        // パラメータを指定
                        $args = array(
                            // タグ名順で指定
                            'orderby' => 'name',
                            // 昇順で指定
                            'order' => 'ASC'
                        );
                        $posttags = get_tags( $args );

                        if ( $posttags ){
                            echo ' <ul class="tag-list"> ';
                            foreach( $posttags as $tag ) {
                                echo '<li><span><a href="'. get_tag_link( $tag->term_id ) . '">' . $tag->name . '</a></span></li>';
                            }
                            echo ' </ul> ';
                        }
                        ?>
                    </div><!-- #tagall -->
                    <div id="articleall">
                        <ul>
                            <?php if(have_posts()): while(have_posts()):the_post(); ?>
                                <li class="post_list">
                                    <a href="<?php the_permalink(); ?>">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(array(50,50), array('class' => 'left')); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" alt="no image">
                                    <?php endif; ?>
                                    </a>
                                    <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?></a>
                                    <ul>
                                        <li><span><?php the_tags('',''); ?></span></li>
                                    </ul>
                                </li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div><!-- #articleall -->
                </div><!-- #article -->
            </div><!-- .swiper-wrapper -->
        </div><!-- .swiper-container -->
    </div><!-- #mainwhite -->
    <footer>
        <div id="footerinner">
            <ul>
                <li><a href="white-page/#slide1">ABOUT</a></li>
                <li><a href="white-page/#slide2">SERVICE</a></li>
                <li><a href="white-page/#slide3">ARTICLE</a></li>
                <li><a href="white-page/#slide4">CONTACT</a></li>
            </ul>
            <ul>
                <li>© WD2 2019. All rights reserved.</li>
            </ul>
            <ul>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div><!-- #footerinner -->
    </footer>

<?php get_footer(); ?>

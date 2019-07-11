<?php get_header(); ?>
<div id="wrapperwhite">
<div class="landscape"><img src="<?php echo get_template_directory_uri(); ?>/img/roll.svg"></div><!-- .landscape -->
    <header class="behavior">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.svg"></a>
    </header>
    <div id="mainwhite">
        <div class="swiper-container" id="swiperwhite">
            <div class="swiper-wrapper">
                <div id="article" class="mainwhitechild swiper-slide no_swipe" data-hash="slide3">
                    <h1 class="nondisplaysp">ARTICLE</h1>
                    <div id="articlecontent">
                        <?php if(have_posts()): while(have_posts()):the_post(); ?>
                            <h1><?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(array(50,50), array('class' => 'left')); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" alt="no image">
                                <?php endif; ?>
                            </h1>
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
                        <?php
                            $current_tags = get_the_tags();
                            //この記事がタグを持っているかどうか判別
                            if ( $current_tags ) :
                                foreach ( $current_tags as $tag ) {
                                    $current_tag_list[] = $tag->term_id;
                                }
                                $args = array(
                                    'tag__in'        => $current_tag_list,
                                    'post__not_in'   => array( $post->ID ),
                                    'posts_per_page' => 5,
                                );
                                $related_posts = new WP_Query( $args );
                                 //関連する記事があるかどうか判別
                                if( $related_posts->have_posts() ) :
                                    ?>
                                    <ul>
                                        <?php
                                        //関連する記事を表示
                                        while ( $related_posts->have_posts() ) : $related_posts->the_post();
                                        ?>
                                         <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(50,50), array('class' => 'left')); ?></a></li>
                                        <?php
                                        endwhile;
                                        ?>
                                    </ul>
                                    <?php
                                else :
                                    //関連記事がなければ以下を表示
                                ?>
                                <p>There is no related article.</p>
                                <?php
                                endif;
                                wp_reset_postdata();
                            endif;
                        ?>
                    </div><!-- #related -->
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

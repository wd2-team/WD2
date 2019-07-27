<?php
/*
Template Name: white page
*/
?>

<?php get_header(); ?>
<div id="wrapperwhite">
<div class="landscape"><img src="<?php echo get_template_directory_uri(); ?>/img/roll.svg"></div><!-- .landscape -->
    <header class="behavior">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.svg"></a>
    </header>
    <div id="mainwhite">
        <div class="swiper-container" id="swiperwhite">
            <div class="swiper-wrapper">
                <div id="about" class="mainwhitechild swiper-slide no_swipe" data-hash="slide1">
                    <h1>ABOUT</h1>
                    <div id="aboutwho">
                        <h2>WHO WE ARE</h2>
                        <p>DYNAMIC GROUP OF CREATIVE<br><span>私達の使命はアーティストのクリエイティビティを</span></p>
                        <p>PIONEERING SPIRIT<br><span>私達の使命はアーティストの</span></p>
                        <p>WE’RE A DYNAMIC GROUP OF<br><span>私達の使命はアーティストのクリエイティビティを</span></p>
                        <p>CREATIVE TECHNOLOGISTS<br><span>クリエイティビティを解放する事です</span></p>
                    </div><!-- #aboutwho -->
                    <div id="team">
                        <h2>TEAM</h2>
                        <div id="team01" class="teammember">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/taka.png">
                            <p>TAKA<br><span>FOUNDER / CREATIVE DIRECTOR</span></p>
                        </div><!-- #team01 -->
                        <div id="team02" class="teammember">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ssm.png">
                            <p>SSM<br><span>TECHNICAL DIRECTOR</span></p>
                        </div><!-- #team02 -->
                        <div id="team03" class="teammember">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/jewelry.png">
                            <p>JEWELRY<br><span>DEVELOPMENT DIRECTOR</span></p>
                        </div><!-- #team03 -->
                    </div><!-- #team -->
                    <div id="info">
                        <h2>INFORMATION</h2>
                        <dl>
                            <dt>NAME</dt>
                            <dd>WD2 / WEB DESIGN AND DEVELOPMENT<br><span>ウェブ・デザイン・アンド・ディベロップメント</span></dd>
                            <div class="clear"></div>
                            <dt>FOUNDER</dt>
                            <dd>TAKANORI YOSHIOKA<br><span>吉岡 剛規</span></dd>
                            <div class="clear"></div>
                            <dt>FLOTATION</dt>
                            <dd>2019.05.01</dd>
                            <div class="clear"></div>
                            <dt>LOCATION</dt>
                            <dd>FUKUOKA , NAGASAKI , JAPAN<br><span>福岡 , 長崎 , 日本</span></dd>
                            <div class="clear"></div>
                            <dt>SLOGUN</dt>
                            <dd>UNITED BY OUR PIONEERING SPIRIT<br><span>クリエイティビティの解放</span></dd>
                            <div class="clear"></div>
                            <dt>SERVICE</dt>
                            <dd>WEB SYSTEM SUPPLY<br><span>ウェブサイトシステムの開発・販売</span></dd>
                            <dd>WEB MANAGEMENT<br><span>ウェブサイトの管理</span></dd>
                            <dd>WEB DEVELOPMENT<br><span>ウェブサイトの構築</span></dd>
                            <dd>WEB DIRECTION AND DESIGN<br><span>ウェブサイトのディレクション及びデザイン</span></dd>
                            <div class="clear"></div>
                            <dt>EMAIL</dt>
                            <dd>hello@wd2.studio</dd>
                            <div class="clear"></div>
                            <dt>COMPANY</dt>
                            <dd>XIMVERLITE LLC.<br><span>キンバーライト合同会社</span></dd>
                            <div class="clear"></div>
                        </dl>
                    </div><!-- #info -->
                </div><!-- #about -->
                <div id="service" class="mainwhitechild swiper-slide no_swipe" data-hash="slide2">
                    <h1>SERVICE</h1>
                    <div id="servicewho">
                        <h2>WHO WE ARE</h2>
                        <p>DYNAMIC GROUP OF CREATIVE<br><span>私達の使命はアーティストのクリエイティビティを</span></p>
                        <p>PIONEERING SPIRIT<br><span>私達の使命はアーティストの</span></p>
                        <p>WE’RE A DYNAMIC GROUP OF<br><span>私達の使命はアーティストのクリエイティビティを</span></p>
                        <p>CREATIVE TECHNOLOGISTS<br><span>クリエイティビティを解放する事です</span></p>
                    </div><!-- #servicewho -->
                    <div id="product">
                        <h2>PRODUCT SERVICE</h2>
                        <ul>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/prism.png">
                                <p>www.storesupplysystem.com</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/prism.png">
                                <p>www.prism.com</p>
                            </li>
                        </ul>
                    </div><!-- #product -->
                </div><!-- #service -->
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
                            <?php $posts = get_posts('numberposts=4'); ?>
                            <?php foreach($posts as $post): ?>
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
                            <?php endforeach; ?>
                        </ul>
                    </div><!-- #articleall -->
                </div><!-- #article -->
                <div id="contact" class="mainwhitechild swiper-slide no_swipe" data-hash="slide4">
                    <h1>CONTACT</h1>
                    <h2>CREATIVE TECHNOLOGISTS<br><span class="fontnormal">私達の役割は創造力を解放する手助けをすることです</span></h2>
                    <?php echo do_shortcode( '[contact-form-7 id="5" title="Contactform1"]' ); ?>
                    <div id="contactpartners">
                        <h2>WANTED PARTNERS<br><span>創造的な仲間と繋がりたい</span></h2>
                        <p class="nondisplaypc">WE’RE A DYNAMIC GROUP<br><span class="fontnormal">私達は先駆的な精神によって団結した</span><br>OF CREATIVE TECHNOLOGISTS<br><span class="fontnormal">私達は先駆的な精神に団結した創造的な</span><br>UNITED BY OUR PIONEERING SPIRIT<br><span class="fontnormal">私達は先駆的な精神によって団結した</span></p>
                        <p class="displaypc">WE’RE A DYNAMIC GROUP OF CREATIVE TECHNOLOGISTS<br><span class="fontnormal">私達は先駆的な精神によって団結した創造的なグループです</span><br>UNITED BY OUR PIONEERING SPIRIT</p>
                        <p><a href="">JOIN US</a></p>
                    </div><!-- #contactpartners -->
                </div><!-- #contact -->
            </div><!-- .swiper-wrapper -->
        </div><!-- .swiper-container -->
    </div><!-- #mainwhite -->
    <footer>
        <div id="footerinner">
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
        </div><!-- #footerinner -->
    </footer>
</div><!-- #wrapperwhite -->

<?php get_footer(); ?>

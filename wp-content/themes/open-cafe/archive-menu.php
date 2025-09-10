<?php get_header(); ?>

<main class="menu-lists">
    <div class="breadcrumbs">
        <span><a href="<?php echo home_url(); ?>">HOME</a></span>
        <span>></span>
        <span>メニュー</span>
    </div>
    <div class="container">
        <section class="menu__contents">
            <div class="tab-buttons">
                <div class="tab-buttons__inner">
                    <div class="tab-button btn-active" data-id="pasta">
                        <a href="#pasta" class="btn-text">パスタ</a>
                    </div>
                    <div class="tab-button" data-id="salad">
                        <a href="#salad" class="btn-text">サラダ</a>
                    </div>
                    <div class="tab-button" data-id="sweets">
                        <a href="#sweets" class="btn-text">パン&<br />スイーツ</a>
                    </div>
                    <div class="tab-button" data-id="drink">
                        <a href="#drink" class="btn-text">ドリンク</a>
                    </div>
                </div>
            </div>
            <div class="menu__images">
                <div id="pasta" class="menu__images-contents menu-active">
                    <div class="menu__images-inner">
                        <?php
                        $args = array(
                            'post_type' => 'menu',
                            'tax_query' => array(
                                'taxonomy' => 'genre',
                                'field' => 'slug',
                                'terms' => 'pasta',
                            )
                        )
                        ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="menu__image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else : ?>
                                        <?php echo "画像なし"; ?>
                                    <?php endif; ?>
                                    <div class="menu__image-text">
                                        <div class="desc"><?php the_excerpt(); ?></div>
                                        <div class="price"><?php the_field('price'); ?>yen</div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div id="salad" class="menu__images-contents">
                    <div class="menu__images-inner">
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/salad1.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○風サラダ</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/salad2.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○風サラダ</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/salad3.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○風サラダ</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/salad4.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○風サラダ</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/salad5.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○風サラダ</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/salad1.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○風サラダ</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/salad2.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○風サラダ</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/salad3.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○風サラダ</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/salad4.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○風サラダ</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/salad5.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○風サラダ</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/salad1.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○風サラダ</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/salad2.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○風サラダ</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/salad3.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○風サラダ</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/salad4.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○風サラダ</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sweets" class="menu__images-contents">
                    <div class="menu__images-inner">
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/sweets1.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○サンド</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/sweets2.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○サンド</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/sweets3.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○サンド</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/sweets4.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○サンド</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/sweets5.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○サンド</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/sweets1.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○サンド</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/sweets2.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○サンド</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/sweets3.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○サンド</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/sweets4.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○サンド</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/sweets5.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○サンド</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/sweets1.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○サンド</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/sweets2.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○サンド</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/sweets3.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○サンド</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/sweets4.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○サンド</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="drink" class="menu__images-contents">
                    <div class="menu__images-inner">
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink1.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○ドリンク</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink2.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○ドリンク</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink3.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○ドリンク</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink4.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○ドリンク</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink5.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○ドリンク</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink1.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○ドリンク</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink2.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○ドリンク</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink3.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○ドリンク</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink4.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○ドリンク</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink5.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○ドリンク</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink1.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○ドリンク</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink2.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○ドリンク</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink3.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○ドリンク</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                        <div class="menu__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink4.jpg" alt="パスタ画像">
                            <div class="menu__image-text">
                                <div class="desc">○○○○ドリンク</div>
                                <div class="price">780 yen</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php get_template_part('template-parts/access'); ?>
</main>

<?php get_footer(); ?>

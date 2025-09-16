<?php get_header(); ?>

<main class="menu-lists">
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

            <?php
            $genres = get_terms(array('taxonomy' => 'genre'));
            if (!empty($genre)) :
            ?>
                <?php foreach ($genres as $genre): ?>
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
                                <?php
                                // メニューの投稿タイプ
                                $args = array(
                                    'post_type' => 'menu',
                                    'post_per_page' => 15,
                                );

                                // 料理の種類で絞り込む
                                $taxquerysp = array('relation' => 'AND');
                                $taxquerysp[] = array(
                                    'taxonomy' => 'genre',
                                    'terms' => $genre->slug,
                                    'field' => 'slug',
                                );
                                $args['tax_query'] = $taxquerysp;

                                $the_query = new WP_Query($args);
                                ?>
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                        <?php get_template_part('template-parts/loop-menu'); ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- <div id="salad" class="menu__images-contents">
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
                </div> -->
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </section>
    </div>
    <?php get_template_part('template-parts/access'); ?>
</main>

<?php get_footer(); ?>

<?php get_header('top'); ?>

<!-- ここからメイン -->
<main class="main">
    <section class="section">
        <div class="concept">
            <div class="section--intro">
                <div class="section__title">
                    <h2>CONCEPT</h2>
                    <p>当店のこだわり</p>
                </div>
                <h3 class="concept__catch">
                    最高のコーヒーと、<br />時の流れを味わうことができる<br />手作りカフェ
                </h3>
                <div class="concept__message">
                    <p>自家焙煎の新鮮な豆から丁寧に抽出したコーヒーが奏でる香りと味わいを、温もり溢れる手作りの店内で堪能していただける当店。ゆったりと流れる時間のなかで、雑味のないクリアな味をじっくりと味わえば、慌ただしい日常を忘れ、心ほどけるひとときをお過ごしいただけます。</p>
                    <p>訪れるたびに心満たされる特別な余韻は、ここでしか味わえない最上のくつろぎです。それは、忙しさに追われる日常をそっと解きほぐす、至福の瞬間でもあります。</p>
                </div>
                <div class="button1">
                    <a href="<?php echo get_permalink(get_page_by_path('concept')); ?>" class="btn1">詳しくはこちら</a>
                </div>
            </div>
            <div class="concept__image">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/concept-pc.jpg" media="(min-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/concept.jpg" alt="コンセプトセクション画像">
                </picture>
            </div>
            <div class="bg"></div>
            <div class="kv__decor">
                <img src="<?php echo get_template_directory_uri(); ?>/img/coffee-beans.png" alt="デコレーション画像">
            </div>
            <picture class="concept-decor">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/lunch/deco-2-pc.png">
                <img src="<?php echo get_template_directory_uri(); ?>/img/lunch/deco-2.png" alt="デコレーション画像">
            </picture>
        </div>
    </section>

    <section class="section">
        <div class="lunch">
            <picture class="lunch-speech-bubble">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/lunch/lunch-speech-bubble-pc.png">
                <img src="<?php echo get_template_directory_uri(); ?>/img/lunch/lunch-speech-bubble.png" alt="デコレーション画像">
            </picture>
            <div class="section__title">
                <h2>SPECIAL LUNCH SET</h2>
                <p>今月のスペシャルランチセット</p>
            </div>
            <div class="lunch__inner">
                <div class="lunch-set__pasta-select">
                    <div class="ribbon">
                        <span class="ribbon__left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="33" viewBox="0 0 29 33"
                                fill="none">
                                <path d="M0 0.699951H28.6527V33.0001H0L8.68263 16.6126L0 0.699951Z" fill="#222222" />
                            </svg>
                        </span>
                        <h3 class="lunch-set__select-heading">お好きなパスタをお選びください</h3>
                        <span class="ribbon__right">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="33" viewBox="0 0 29 33"
                                fill="none">
                                <path d="M29.0003 0.699951H0.347656V33.0001H29.0003L20.3177 16.6126L29.0003 0.699951Z"
                                    fill="#222222" />
                            </svg>
                        </span>
                    </div>

                    <ul class="lunch-set__pasta-list">
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <?php
                            $lunch = get_field('lunch_' . $i);
                            if ($lunch === null) {
                                $lunch = array();
                            }
                            if (isset($lunch['lunch_' . $i . '-image'])) {
                                $image = $lunch['lunch_' . $i . '-image'];
                            } else {
                                $image = '';
                            }
                            if (isset($lunch['lunch_' . $i . '-title'])) {
                                $title = $lunch['lunch_' . $i . '-title'];
                            } else {
                                $title = '';
                            }
                            $labels = ['A', 'B', 'C', 'D'];
                            $extra_class = ($i === 2 || $i === 4) ? ' special-item' : '';
                            ?>
                            <?php if (have_posts()): ?>
                                <?php while (have_posts()): the_post(); ?>
                                    <li class="lunch-set__pasta-item <?php echo $extra_class; ?>">
                                        <img src="<?php echo esc_url($image); ?>" alt="パスタ画像">
                                        <div class="lunch-set__pasta-desc">
                                            <span class="lunch-set__pasta-label"><span class="pasta-label-text"><?php echo $labels[$i - 1]; ?></span></span>
                                            <p class="lunch-set__pasta-text"><?php echo esc_html($title); ?></p>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </ul>
                </div>
                <div class="lunch-set__footer">
                    <div class="lunch-set__footer-inner">
                        <div class="lunch-set__combo">
                            <div class="lunch-set__combo-item-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/lunch/lunch-01.png" alt="パスタ画像" class="combo-item__img-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/lunch/text-pasta.png" alt="テキスト" class="combo-item__text-a">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/lunch/text-plus.png" alt="" class="lunch-set__combo-symbol-a">
                            <div class="lunch-set__combo-item-b">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/lunch/lunch-02.png" alt="サラダ画像" class="combo-item__img-b">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/lunch/text-salad.png" alt="テキスト" class="combo-item__text-b">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/lunch/text-plus.png" alt="" class="lunch-set__combo-symbol-b">
                            <div class="lunch-set__combo-item-c">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/lunch/lunch-03.png" alt="ドリンク画像" class="combo-item__img-c">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/lunch/text-drink.png" alt="テキスト" class="combo-item__text-c">
                            </div>
                        </div>
                        <div class="lunch-set__price-info">
                            <p class="lunch-set__text">スペシャルランチセット<br />【選べる3品】</p>
                            <p class="lunch-set__price">1,280 yen</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/lunch/repeat-grid.png" alt="">
                            <p class="lunch-set__note">(11:00 AM〜14:00 PMまで)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="grand__menu">
            <div class="section__title">
                <h2>GRAND MENU</h2>
                <p>グランドメニュー</p>
            </div>
            <div class="grand__menu-inner">
                <div class="grand__menus">

                    <!-- パスタの欄 -->
                    <div class="grand__menu-content">
                        <?php
                        $term = get_term_by('slug', 'pasta', 'genre');
                        ?>
                        <h3 class="grand__menu-top">
                            <?php echo $term->name; ?>
                        </h3>
                        <?php
                        $args = array(
                            'post_type' => 'menu',
                            'posts_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'genre',
                                    'field' => 'slug',
                                    'terms' => $term->slug,
                                ),
                            ),
                        );
                        $query = new WP_Query($args);
                        ?>
                        <div class="grand__menu-list-wrapper">
                            <ul class="grand__menu-list">
                                <?php if ($query->have_posts()): ?>
                                    <?php while ($query->have_posts()): $query->the_post(); ?>
                                        <li class="grand__menu-info">
                                            <div class="grand__menu-img">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="grand__menu-text"><?php the_title(); ?></div>
                                            <div class="grand__menu-price"><?php the_field('price'); ?> yen</div>
                                        </li>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- サラダの欄 -->
                    <div class="grand__menu-content">
                        <?php
                        $term = get_term_by('slug', 'salad', 'genre');
                        ?>
                        <h3 class="grand__menu-top"><?php echo $term->name; ?></h3>
                        <?php
                        $args = array(
                            'post_type' => 'menu',
                            'posts_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'genre',
                                    'field' => 'slug',
                                    'terms' => $term->slug,
                                ),
                            ),
                        );
                        $query = new WP_Query($args);
                        ?>
                        <div class="grand__menu-list-wrapper">
                            <ul class="grand__menu-list">
                                <?php if ($query->have_posts()): ?>
                                    <?php while ($query->have_posts()): $query->the_post(); ?>
                                        <li class="grand__menu-info">
                                            <div class="grand__menu-img">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="grand__menu-text"><?php the_title(); ?></div>
                                            <div class="grand__menu-price"><?php the_field('price'); ?> yen</div>
                                        </li>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- スイーツの欄 -->
                    <div class="grand__menu-content">
                        <?php
                        $term = get_term_by('slug', 'sweets', 'genre');
                        ?>
                        <h3 class="grand__menu-top"><?php echo $term->name; ?></h3>
                        <?php
                        $args = array(
                            'post_type' => 'menu',
                            'posts_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'genre',
                                    'field' => 'slug',
                                    'terms' => $term->slug,
                                ),
                            ),
                        );
                        $query = new WP_Query($args);
                        ?>

                        <div class="grand__menu-list-wrapper">
                            <ul class="grand__menu-list bread">
                                <?php if ($query->have_posts()): ?>
                                    <?php while ($query->have_posts()): $query->the_post(); ?>
                                        <li class="grand__menu-info">
                                            <div class="grand__menu-img">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="grand__menu-text"><?php the_title(); ?></div>
                                            <div class="grand__menu-price"><?php the_field('price'); ?> yen</div>
                                        </li>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- ドリンクの欄 -->
                    <div class="grand__menu-content">
                        <?php
                        $term = get_term_by('slug', 'drink', 'genre');
                        ?>
                        <h3 class="grand__menu-top"><?php echo $term->name; ?></h3>
                        <?php
                        $class = is_front_page() ? 'top-drink' : '';
                        get_template_part('template-parts/loop-menu-drink', null, array('class' => $class));
                        ?>
                    </div>
                </div>
                <div class="button1">
                    <a href="<?php echo get_post_type_archive_link('menu'); ?>" class="btn1">その他のメニュー</a>
                </div>
            </div>
            <picture class="grand__menu-decor">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/grand-menu/coffee-leaves2.png">
                <img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/deco.png" alt="">
            </picture>
            <picture class="grand__menu-decor2">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/grand-menu/coffee-beans-pc.png">
                <img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/coffee-beans.png" alt="">
            </picture>
            <div class="grand__menu-bg"></div>
        </div>
    </section>

    <section class="section">
        <div class="gallery">
            <div class="gallery__inner">
                <div class="section__title">
                    <h2>GALLERY</h2>
                    <p>ギャラリー</p>
                </div>
                <div class="gallery__images">
                    <div class="gallery__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery1.jpg" alt="ギャラリー画像">
                    </div>
                    <div class="gallery__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery2.jpg" alt="ギャラリー画像">
                    </div>
                    <div class="gallery__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery3.jpg" alt="ギャラリー画像">
                    </div>
                    <div class="gallery__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery4.jpg" alt="ギャラリー画像">
                    </div>
                </div>
                <div class="button1">
                    <a href="<?php echo get_permalink(get_page_by_path('gallery')); ?>" class="btn1">インスタグラムを見る</a>
                </div>
                <div class="gallery-speech-bubble">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/speech-bubble.png" alt="吹き出し画像">
                </div>
            </div>
        </div>
    </section>

    <section class="section news">
        <div class="news__inner">
            <div class="section__title">
                <h2>NEWS</h2>
                <p>お知らせ</p>
            </div>
            <div class="news__contents">
                <?php
                $news_latest = array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'orderby'  => 'date',
                    'order'  => 'DESC',
                );
                $latest_query = new WP_Query($news_latest);
                ?>
                <?php if ($latest_query->have_posts()): ?>
                    <?php while ($latest_query->have_posts()): $latest_query->the_post(); ?>
                        <div class="news__latest">
                            <div class="news__image">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php endif; ?>
                                <div class="ribbon-s">
                                    <?php
                                    $categoriesText = get_the_category();
                                    if (!empty($categoriesText)) {
                                        echo esc_html($categoriesText[0]->name);
                                    }
                                    ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="5" height="22" viewBox="0 0 5 22" fill="none">
                                        <path d="M5 22H0.000345965L0 0H5L0 11L5 22Z" fill="#382620" />
                                    </svg>
                                </div>
                                <div class="pass">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                                </div>
                            </div>
                            <h3 class="news__desc">
                                <?php the_title(); ?>
                            </h3>
                            <a href="<?php the_permalink(); ?>" class="news__text">
                                <?php
                                $content = strip_tags(get_the_content());
                                $trimmed = mb_substr($content, 0, 112);
                                echo $trimmed . '…';
                                ?>
                            </a>
                            <time datetime="<?php the_time('c'); ?>" class="news__date"><?php the_time('Y/m/d'); ?></time>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

                <?php
                $news_lists = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'offset' => 1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $list_query = new WP_Query($news_lists);
                ?>
                <div class="news__lists">
                    <?php if ($list_query->have_posts()): ?>
                        <ul class="news__lists-wrapper">
                            <?php while ($list_query->have_posts()): $list_query->the_post(); ?>
                                <li class="news__list">
                                    <div class="news__image-s">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php endif; ?>
                                        <div class="ribbon-s">
                                            <?php
                                            $categoriesText = get_the_category();
                                            if (!empty($categoriesText)) {
                                                echo esc_html($categoriesText[0]->name);
                                            }
                                            ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="5" height="22" viewBox="0 0 5 22" fill="none">
                                                <path d="M5 22H0.000345965L0 0H5L0 11L5 22Z" fill="#382620" />
                                            </svg>
                                        </div>
                                        <div class="pass">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                                        </div>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="news__text-s">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                    <time datetime="<?php the_time('c'); ?>" class="news__date-s"><?php the_time('Y/m/d'); ?></time>
                                </li>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <div class="button1">
                <a href="<?php echo get_post_type_archive_link('post'); ?>" class="btn1">過去のお知らせ</a>
            </div>
        </div>
        <picture class="news__deco">
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/news/news-deco-pc.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-deco.png" alt="ニュースデコレーション画像">
        </picture>
    </section>

    <?php get_template_part('template-parts/access'); ?>
</main>

<?php get_footer(); ?>

<?php
$post_type_name = "news";
$post_type_obj = get_post_type_object($post_type_name);
?>
<?php get_header(); ?>

<main class="news-lists">
    <div class="news-lists__inner">
        <div class="contents__wrapper">
            <section class="news__contents">
                <!-- <div class="category"> -->
                    <!-- <h2><?php echo $post_type_obj->label; ?></h2> -->
                    <!-- 投稿タイプの名前が入るようにしている↑ -->
                <!-- </div> -->
                <?php
                $news_query = new WP_Query(
                    array(
                        'post_type'     => 'news',
                        'post_per_page' => 10,
                        'no_found_rows' => true,
                    )
                );
                ?>


                <?php if ($news_query->have_posts()) : ?>
                    <div class="news__lists">
                        <ul class="news__lists-wrapper">
                            <?php while ($news_query->have_posts()) : ?>
                                <?php $news_query->the_post(); ?>
                                <li class="news__list">
                                    <div class="news__image-s">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                                        <?php endif; ?>
                                        <div class="ribbon-s">
                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/ribbon.png'); ?>" alt="" class="ribbon-bg">
                                        </div>
                                        <div class="pass">
                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/pass69.png'); ?>" alt="">
                                        </div>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="news__text-s">
                                        <p><?php echo get_the_excerpt(); ?></p>
                                    </a>
                                    <time datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>" class="news__date-s">
                                        <?php echo esc_html(get_the_date('Y.m.d')); ?></time>
                                </li>
                            <?php endwhile; ?>
                            <li class="news__list">
                                <div class="news__image-s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                                    <div class="ribbon-s">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
                                    </div>
                                    <div class="pass">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                                    </div>
                                </div>
                                <a href="" class="news__text-s">
                                    <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                                </a>
                                <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                            </li>
                            <li class="news__list">
                                <div class="news__image-s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                                    <div class="ribbon-s">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
                                    </div>
                                    <div class="pass">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                                    </div>
                                </div>
                                <a href="" class="news__text-s">
                                    <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                                </a>
                                <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                            </li>
                            <li class="news__list">
                                <div class="news__image-s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                                    <div class="ribbon-s">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
                                    </div>
                                    <div class="pass">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                                    </div>
                                </div>
                                <a href="" class="news__text-s">
                                    <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                                </a>
                                <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                            </li>
                            <li class="news__list">
                                <div class="news__image-s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                                    <div class="ribbon-s">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
                                    </div>
                                    <div class="pass">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                                    </div>
                                </div>
                                <a href="" class="news__text-s">
                                    <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                                </a>
                                <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                            </li>
                            <li class="news__list">
                                <div class="news__image-s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                                    <div class="ribbon-s">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
                                    </div>
                                    <div class="pass">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                                    </div>
                                </div>
                                <a href="" class="news__text-s">
                                    <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                                </a>
                                <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                            </li>
                            <li class="news__list">
                                <div class="news__image-s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                                    <div class="ribbon-s">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
                                    </div>
                                    <div class="pass">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                                    </div>
                                </div>
                                <a href="" class="news__text-s">
                                    <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                                </a>
                                <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                            </li>
                            <li class="news__list">
                                <div class="news__image-s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                                    <div class="ribbon-s">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
                                    </div>
                                    <div class="pass">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                                    </div>
                                </div>
                                <a href="" class="news__text-s">
                                    <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                                </a>
                                <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                            </li>
                            <li class="news__list">
                                <div class="news__image-s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                                    <div class="ribbon-s">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
                                    </div>
                                    <div class="pass">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                                    </div>
                                </div>
                                <a href="" class="news__text-s">
                                    <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                                </a>
                                <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                            </li>
                            <?php wp_reset_postdata(); ?>

                        </ul>
                    </div>
                <?php endif; ?>
                <div class="news__nav">
                    <a class="nav__btn"><i class="fa-solid fa-chevron-left"></i></a>
                    <a class="nav__btn">1</a>
                    <a class="nav__btn">2</a>
                    <a class="nav__btn">3</a>
                    <a class="nav__btn">4</a>
                    <a class="nav__btn"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </section>

            <section class="articles__contents">
                <div class="latest__contents">
                    <h3>最近の記事</h3>
                    <div class="latest__articles">
                        <div class="articles__card">
                            <div class="articles__card__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-sm.jpg" alt="ニュース画像">
                            </div>
                            <div class="articles__card__text-s">
                                <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結…</p>
                                <time datetime="2021-01-01" class="news__card__date-s">2021.01.01</time>
                            </div>
                        </div>
                        <div class="articles__card">
                            <div class="articles__card__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-sm.jpg" alt="ニュース画像">
                            </div>
                            <div class="articles__card__text-s">
                                <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結…</p>
                                <time datetime="2021-01-01" class="news__card__date-s">2021.01.01</time>
                            </div>
                        </div>
                        <div class="articles__card">
                            <div class="articles__card__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-sm.jpg" alt="ニュース画像">
                            </div>
                            <div class="articles__card__text-s">
                                <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結…</p>
                                <time datetime="2021-01-01" class="news__card__date-s">2021.01.01</time>
                            </div>
                        </div>
                        <div class="articles__card">
                            <div class="articles__card__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-sm.jpg" alt="ニュース画像">
                            </div>
                            <div class="articles__card__text-s">
                                <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結…</p>
                                <time datetime="2021-01-01" class="news__card__date-s">2021.01.01</time>
                            </div>
                        </div>
                        <div class="articles__card">
                            <div class="articles__card__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-sm.jpg" alt="ニュース画像">
                            </div>
                            <div class="articles__card__text-s">
                                <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結…</p>
                                <time datetime="2021-01-01" class="news__card__date-s">2021.01.01</time>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="latest__contents">
                    <h3>カテゴリ</h3>
                    <ul class="categories__lists">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/news/arrow.svg"><a href="">カテゴリ名</a></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/news/arrow.svg"><a href="">カテゴリ名</a></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/news/arrow.svg"><a href="">カテゴリ名</a></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/news/arrow.svg"><a href="">カテゴリ名</a></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/news/arrow.svg"><a href="">カテゴリ名</a></li>
                    </ul>
                </div>

            </section>
        </div>
    </div>
    <?php get_template_part('template-parts/access'); ?>

</main>
<?php get_footer(); ?>

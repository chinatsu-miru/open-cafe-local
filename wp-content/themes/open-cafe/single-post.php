<?php get_header(); ?>

<main class="news-lists">
    <div class="single__news">
        <div class="single__news__inner">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <div class="single__news-thumbnail">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
                    </div>
                    <section class="single__news-content">
                        <h1 class="single__news-title"><?php the_title(); ?></h1>
                        <div class="article__news-meta">
                            <span class="date">2021.01.01</span>
                            <span class="separator"></span>
                            <?php
                            $categories = get_the_category();
                            if (! empty($categories)) {
                                foreach ($categories as $category) {
                                    echo '<span class="category">';
                                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">';
                                    echo esc_html($category->name);
                                    echo '</a></span>';
                                }
                            }
                            ?>
                        </div>

                        <?php the_content(); ?>
                    </section>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php
            $prev_icon = '<img src="' . get_template_directory_uri() . '/img/news/news-single/prev.svg" alt="前の記事">';
            $next_icon = '<img src="' . get_template_directory_uri() . '/img/news/news-single/next.svg" alt="次の記事">';


            ?>
            <br>
            <nav class="post-nav__box" aria-label="記事ナビゲーション">
                <ul class="post-nav">
                    <li>
                        <?php previous_post_link('%link', $prev_icon . '前の記事');?>
                    </li>
                    <li><a href="<?php echo get_post_type_archive_link('post'); ?>">記事一覧</a></li>
                    <li>
                        <?php next_post_link('%link', '次の記事' . $next_icon); ?>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="related-articles__box">
            <h2 class="related-articles">関連記事</h2>
            <div class="news__lists">
                <ul class="news__lists-wrapper">
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
                        <a href="./news-single.html" class="news__text-s pc-none">
                            <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                        </a>
                        <a href="" class="news__text-s sp-none">
                            <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが…</p>
                        </a>
                        <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/access'); ?>
</main>

<?php get_footer(); ?>

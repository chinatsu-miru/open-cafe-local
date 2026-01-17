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
            <nav class="post-nav__box" aria-label="記事ナビゲーション">
                <ul class="post-nav">
                    <li>
                        <?php previous_post_link('%link', $prev_icon . '前の記事'); ?>
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
            <?php
            $post_cats = get_the_category();
            if ($post_cats) {
                $category_ids = array();
                foreach ($post_cats as $post_cat){
                    $category_ids[] = $post_cat->term_id;
                }
            }
            $args = array(
                'post_type' => 'post',
                'post__not_in' => array(get_the_ID()),
                'category__in' => $category_ids,
                'post_per_page' => -1,
                'orderby' => 'date', //日付順
                'order' => 'DESC', // 降順
            );

            $related_query = new WP_Query($args);
            ?>

            <div class="news__lists">
                <?php if ($related_query->have_posts()): ?>
                    <ul class="news__lists-wrapper">
                        <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
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
                                <div class="news__text-s">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                    <time datetime="<?php the_time('c'); ?>" class="news__date-s"><?php the_time('Y/n/j'); ?></time>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/access'); ?>
</main>

<?php get_footer(); ?>

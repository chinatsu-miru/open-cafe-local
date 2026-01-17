
<?php get_header(); ?>
<main class="news-lists">
    <div class="news-lists__inner">
        <div class="contents__wrapper">
            <section class="news__contents">
                <div class="news__lists">
                    <ul class="news__lists-wrapper">
                        <?php if (have_posts()): ?>
                            <?php while (have_posts()) : the_post(); ?>
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
                                        <p>
                                            <?php
                                            the_title();
                                            // $title = get_the_title();
                                            // 40バイト（全角約20文字）で制限し、超えたら「...」を付ける
                                            // echo mb_strimwidth($title, 0, 120, "…", "UTF-8");
                                            ?>
                                        </p>
                                    </a>
                                    <time datetime="<?php the_time('c'); ?>" class="news__date-s"><?php the_time('Y/m/d'); ?></time>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <?php get_template_part('template-parts/pagination'); ?>
                </div>
            </section>
            <?php get_sidebar(); ?>
        </div>
    </div>
    <?php get_template_part('template-parts/access'); ?>

</main>
<?php get_footer(); ?>

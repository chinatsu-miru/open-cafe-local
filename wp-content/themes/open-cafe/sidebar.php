<section class="articles__contents">
    <div class="latest__contents">
        <h3>最近の投稿</h3>
        <div class="latest__articles">
            <?php
            $args = array(
                'post-type' => 'post',
                'posts_per_page' => 4,
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="articles__card">
                        <div class="articles__card__image">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/news/card-img.jpg" alt="OpenCafe">
                            <?php endif; ?>
                        </div>
                        <div class="articles__card__text-s">
                            <p><?php the_title(); ?></p>
                            <time datetime="<?php the_time('c'); ?>" class="news__card__date-s"><?php the_time('Y/n/j'); ?></time>
                        </div>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="latest__contents">
        <h3>カテゴリ</h3>
        <ul class="categories__lists">

            <?php
            $categories = get_terms('category');
            if (!empty($categories)) {
                foreach ($categories as $category) {
                    echo '<li>';
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/news/arrow.svg">';
                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">';
                    echo esc_html($category->name);
                    echo '</a>';
                    echo '</li>';
                }
            }
            ?>
        </ul>
    </div>

</section>

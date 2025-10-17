<?php get_header(); ?>

<main class="menu-lists">
    <div class="container">
        <section class="menu__contents">
            <!-- tab-button -->
            <div class="tab-buttons">
                <div class="tab-buttons__inner">
                    <?php
                    $genres = array(
                        'pasta' => 'パスタ',
                        'salad' => 'サラダ',
                        'sweets' => 'パン＆スイーツ',
                        'drink' => 'ドリンク',
                    );
                    ?>
                    <?php foreach ($genres as $slug => $label) : ?>
                        <?php $term = get_term_by('slug', $slug, 'genre'); ?>
                        <a href="<?php echo esc_url(get_term_link($term)); ?>" class="tab-button">
                            <span class="btn-text">
                                <?php echo $label; ?>
                            </span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- tab-buttonここまで -->

            <!-- メニューコンテンツここから -->
            <div id="archive" class="menu__images">
                <div class="menu__images-contents">
                    <div class="menu__images-inner">

                        <!-- ここからdrink以外 -->
                        <?php
                        $args = array(
                            'post_type' => 'menu',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'genre',
                                    'field' => 'slug',
                                    'terms' => $slug,
                                    'operator' => 'NOT IN' // 含めない
                                ),
                            ),
                        );
                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                        ?>
                                <div class="menu__image">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                    <div class="menu__image-text">
                                        <div class="desc"><?php the_title(); ?></div>
                                        <div class="price">
                                            <?php
                                            $price = get_post_meta(get_the_ID(), 'price', true);
                                            echo esc_html($price) . 'yen';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
                <!-- ここまでdrink以外 -->

                <!-- ここからdrink -->
                <?php get_template_part('template-parts/loop-menu-drink'); ?>
            </div>
        </section>
    </div>
    <?php get_template_part('template-parts/access'); ?>
</main>
<?php get_footer(); ?>

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

            <div class="menu__images">
                <div id="pasta" class="menu__images-contents menu-active">
                    <div class="menu__images-inner">
                        <?php $genres = get_terms(array('taxonomy' => 'genre'));
                        if (!empty($genres)) : ?>
                            <?php foreach ($genres as $genre): ?>
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
                                    'posts_per_page' => 5,
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
                                <?php if ($the_query->have_posts()) : ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <?php get_template_part('template-parts/loop-menu'); ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <?php get_template_part('template-parts/loop-menu-drink'); ?>

                </div>
            </div>
            <?php wp_reset_postdata(); ?>
        </section>
    </div>
    <?php get_template_part('template-parts/access'); ?>
</main>

<?php get_footer(); ?>

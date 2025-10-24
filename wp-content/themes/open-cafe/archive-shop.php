<?php get_header(); ?>

<main class="shop-lists">
    <div class="shop-lists__inner">
        <section class="access-lists">
            <div class="access__inner">
                <?php
                $args = array(
                    'post_type'     => 'shop',
                    'posts_per_page' => -1,
                    'meta_key'      => 'sort_order',
                    'orderby'       => 'meta_value_num',
                    'order'         => 'ASC',
                );
                $query = new WP_Query($args);
                ?>
                <?php if ($query->have_posts()): ?>
                    <?php while ($query->have_posts()): $query->the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <div class="access__contents">
                            <div class="access__map">
                                <div class="access__map-content">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="business-info">
                                <ul class="business-info__inner">
                                    <li class="info__list">
                                        <span class="info__details">住所</span>
                                        <span class="info__meta">
                                            <?php the_field('address'); ?>
                                        </span>
                                    </li>
                                    <li class="info__list">
                                        <span class="info__details">TEL</span>
                                        <span class="info__meta"><?php the_field('tel'); ?></span>
                                    </li>
                                    <li class="info__list">
                                        <span class="info__details">Mail</span>
                                        <span class="info__meta"><?php the_field('email'); ?></span>
                                    </li>
                                    <li class="info__list">
                                        <span class="info__details">営業時間</span>
                                        <span class="info__meta"><?php the_field('time'); ?></span>
                                    </li>
                                    <li class="info__list">
                                        <span class="info__details">定休日</span>
                                        <span class="info__meta"><?php the_field('holiday'); ?></span>
                                    </li>
                                    <li class="info__list">
                                        <span class="info__details">座席</span>
                                        <span class="info__meta"><?php the_field('count'); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
    </div>
    <?php get_template_part('template-parts/access'); ?>
</main>

<?php get_footer(); ?>

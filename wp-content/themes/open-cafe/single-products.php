<?php get_header(); ?>
<main class="gift__main">
    <section class="gift__container product_single">
        <div class="gift__item1">
            <div class="gift__item-img">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                <?php endif; ?>
            </div>
            <div class="gift__item-meta">
                <div class="gift__item-text"><?php the_title(); ?></div>
                <div class="gift__item-price"><?php the_field('price'); ?> yen</div>
                <div class="button2">
                    <a href="<?php the_permalink(); ?>" class="btn2">ショップで確認する</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

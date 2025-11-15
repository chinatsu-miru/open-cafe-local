<?php get_header(); ?>

<main class="gift__main">
    <section class="gift__container">
        <?php if (have_posts()): ?>

            <?php $count = 0; ?>
            <?php while (have_posts()): the_post(); ?>
                <?php $count++; ?>
                <?php if ($count === 1): ?>
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
                <?php else: ?>
                    <div class="gift__item-s">
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
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <section class="gift__info">
        <div class="gift__info-wrap">
            <div class="gift__info-inner">
                <div class="gift__info-text">
                    <h2 class="gift__info-message">ラッピングは無料でお付けいたします。<br class="sp-none" />お気軽にご相談ください。</h2>
                    <div class="repeat-grid">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gift/repeat-grid.svg" alt="" class="pc-none">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gift/repeat-grid-pc.svg" alt="" class="sp-none">
                    </div>
                    <div class="gift__info-description">
                        <p>大切な方への贈り物に、心を込めたラッピングを。ご希望のイメージや用途に合わせたご提案も可能です。<br>オンライン注文の際は備考欄にご記入くださいませ。</p>
                    </div>
                </div>
                <div class="gift__info-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gift/gift-info-img.jpg" alt="ギフトラッピング画像">
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/access'); ?>

</main>
<?php get_footer(); ?>

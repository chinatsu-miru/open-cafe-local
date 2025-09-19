<?php get_header(); ?>

<main class="menu-lists">
    <div class="container">
        <section class="menu__contents">
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


            <div id="archive" class="menu__images">
                <div class="menu__images-contents">
                    <div class="menu__images-inner">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php $drink_terms = array('drink', 'coffee', 'softdrink', 'tea') ?>
                                <?php if (has_term($drink_terms, 'genre')) {
                                    continue;
                                } ?>
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
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="grand__menu-list-wrapper drink">
                    <div class="grand__menu-drink-image">
                        <div class="drink-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/drink.jpg" alt="コーヒー画像">
                        </div>
                    </div>
                    <div class="grand__menu-drink-section">
                        <div class="drink-group">
                            <h4 class="drink-section-title">コーヒー</h4>
                            <ul class="grand__menu-drink-lists">
                                <li class="drink-menu"><span class="menu">ブレンド</span><span class="price">500
                                        yen</span></li>
                                <li class="drink-menu"><span class="menu">カフェラテ</span><span class="price">500
                                        yen</span></li>
                                <li class="drink-menu"><span class="menu">豆乳ラテ</span><span class="price">500
                                        yen</span></li>
                                <li class="drink-menu"><span class="menu">カフェモカ</span><span class="price">500
                                        yen</span></li>
                                <li class="drink-menu"><span class="menu">キャラメルラテ</span><span class="price">500
                                        yen</span></li>
                                <li class="drink-menu"><span class="menu">バニララテ</span><span class="price">500
                                        yen</span></li>
                            </ul>
                        </div>
                        <div class="drink-group">
                            <h4 class="drink-section-title">紅茶</h4>
                            <ul class="grand__menu-drink-lists">
                                <li class="drink-menu"><span class="menu">ストレート</span><span class="price">500
                                        yen</span></li>
                                <li class="drink-menu"><span class="menu">ミルク</span><span class="price">500
                                        yen</span></li>
                                <li class="drink-menu"><span class="menu">アップル</span><span class="price">500
                                        yen</span></li>
                            </ul>
                        </div>
                        <div class="drink-group">
                            <h4 class="drink-section-title">ソフトドリンク</h4>
                            <ul class="grand__menu-drink-lists">
                                <li class="drink-menu"><span class="menu">バナナ</span><span class="price">500
                                        yen</span></li>
                                <li class="drink-menu"><span class="menu">オレンジ</span><span class="price">500
                                        yen</span></li>
                                <li class="drink-menu"><span class="menu">アップル</span><span class="price">500
                                        yen</span></li>
                                <li class="drink-menu"><span class="menu">マンゴー</span><span class="price">500
                                        yen</span></li>
                                <li class="drink-menu"><span class="menu">ミックス</span><span class="price">500
                                        yen</span></li>
                            </ul>
                        </div>
                    </div>
                </div>


        </section>
    </div>
    <?php get_template_part('template-parts/access'); ?>
</main>
<?php get_footer(); ?>

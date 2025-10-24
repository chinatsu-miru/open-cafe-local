<?php get_header(); ?>

<!-- メニュー詳細ページ -->
<main class="menu-lists">
    <div class="container">
        <section class="menu__contents">
            <div class="tab-buttons">
                <div class="tab-buttons__inner">

                    <!-- 全てのタブを取得 -->
                    <!-- １. 出したいタームの順番を決めてタームのスラッグ名を$orderに代入 -->
                    <?php $order = ['pasta', 'salad', 'sweets', 'drink']; ?>

                    <!-- 2. 今いるページがgenreというタクソノミーのタームページなら -->
                    <?php
                    $current = '';
                    if (is_tax('genre')) {
                        $current_term = get_queried_object(); //表示しているページの情報オブジェクトを取得
                        if ($current_term && isset($current_term->slug)) { //タームが存在し、尚且つスラッグプロパティが存在するか
                            $current = $current_term->slug;
                        }
                    }
                    ?>
                    <?php
                    foreach ($order as $slug) :
                        $term = get_term_by('slug', $slug, 'genre'); // slugフィールドで探す、$slugの値を探す、genreタクソノミーで探す
                        $class = 'tab-button';
                        if ($current === $slug) {
                            $class = $class . ' btn-active';
                        }
                    ?>
                        <a href="<?php echo esc_url(get_term_link($term)); ?>" class="<?php echo esc_attr($class); ?>">
                            <span class="btn-text">
                                <?php echo esc_html($term->name); ?>
                            </span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php if ($current === 'drink') : ?>
                <?php get_template_part('template-parts/loop-menu-drink'); ?>
            <?php else : ?>
                <div class="menu__images">
                    <div class="menu__images-contents menu-active">
                        <div class="menu__images-inner">
                            <?php if (have_posts()): ?>
                                <?php while (have_posts()): the_post(); ?>
                                    <?php get_template_part('template-parts/loop-menu'); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </section>
    </div>
    <?php get_template_part('template-parts/access'); ?>
</main>

<?php get_footer(); ?>

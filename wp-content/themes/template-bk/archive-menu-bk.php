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
                        <div class="tab-button">
                            <a href="<?php echo esc_url(get_term_link($term)); ?>" class="btn-text">
                                <?php echo $label; ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php
            /* ========= 1) グループ用の入れ物を初期化（1行ずつ明示） ========= */
            $groups = array();
            $groups['pasta'] = array();
            $groups['salad'] = array();
            $groups['sweets'] = array();

            /* ========= 2) 仕分けの優先順を配列で定義（pasta → salad → sweets） ========= */
            $genre_order = array('pasta', 'salad', 'sweets');

            /* ========= 3) メインループの中で仕分け（例） ========= */
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    foreach ($genre_order as $g) {
                        if (has_term($g, 'genre')) {
                            $post_object = get_post();
                            array_push($groups[$g], $post_object);
                            break;
                        }
                    }
                }
            }
            ?>
            <div class="menu__images">
                <div class="menu__images-contents menu-active">
                    <div class="menu__images-inner">
                        <?php
                        $ordered = array();
                        $ordered = array_merge($ordered, $groups['pasta']);
                        $ordered = array_merge($ordered, $groups['salad']);
                        $ordered = array_merge($ordered, $groups['sweets']);

                        if (!empty($ordered)) {
                            foreach ($ordered as $post_object) {
                                setup_postdata($post_object);
                                get_template_part('template-parts/loop-menu');
                            }
                            wp_reset_postdata();
                        }
                        ?>


                    </div>
                    <?php get_template_part('template-parts/loop-menu-drink'); ?>
                </div>
            </div>
        </section>
    </div>
    <?php get_template_part('template-parts/access'); ?>
</main>

<?php get_footer(); ?>

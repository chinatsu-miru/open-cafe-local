<div class="grand__menu-inner">
    <div class="grand__menus">
        <div class="grand__menu-content">
            <div class="grand__menu-list-wrapper drink">
                <div class="grand__menu-drink-image">
                    <div class="drink-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/drink.jpg" alt="コーヒー画像">
                    </div>
                </div>

                <?php
                //親ターム 'drink'の情報を取得
                $drink_parent = get_term_by('slug', 'drink', 'genre');

                //子ターム（コーヒー、紅茶、ソフトドリンク）
                $drink_children = get_terms(array(
                    'taxonomy'   => 'genre',
                    'parent'     => $drink_parent->term_id,
                    'hide_empty' => false,
                ));

                if (!empty($drink_children)):
                ?>
                    <div class="grand__menu-drink-section">
                        <?php foreach ($drink_children as $child_term) : ?>
                            <div class="drink-group">
                                <h4 class="drink-section-title"><?php echo esc_html($child_term->name); ?></h4>
                                <ul class="grand__menu-drink-lists">
                                    <?php
                                    //各子タームに属する投稿を取得
                                    $args = array(
                                        'post_type' => 'menu',
                                        'orderby'   => 'menu_order',
                                        'posts_per_page' => -1,
                                        'order'     => 'ASC',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'genre',
                                                'field'    => 'term_id',
                                                'terms'    => $child_term->term_id,
                                            ),
                                        ),
                                    );
                                    $drink_query = new WP_Query($args);
                                    if ($drink_query->have_posts()) :
                                        while ($drink_query->have_posts()): $drink_query->the_post(); ?>
                                            <li class="drink-menu">
                                                <span class="menu"><?php the_title(); ?></span>
                                                <span class="price"><?php echo esc_html(get_post_meta(get_the_ID(), 'price', true)); ?> yen</span>
                                            </li>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

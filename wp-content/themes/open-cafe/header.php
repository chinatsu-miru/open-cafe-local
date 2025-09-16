<?php
// 一覧ページのタイトルを設定するための関数
$page_title = '';
if (is_post_type_archive('menu') || is_singular('menu') || is_tax('genre')) {
    $page_title = 'MENU';
} elseif (is_home() || is_single()) {
    $page_title = 'NEWS';
} elseif (is_post_type_archive('shop')) {
    $page_title = 'SHOP';
} elseif (is_post_type_archive('gift')) {
    $page_title = 'GIFT';
} elseif ( is_archive()) {
    $page_title = 'NEWS';
}elseif (is_page()) {
    $page_title = get_the_title();
}
// サブタイトルを表示するための関数
$subtitle = '';
if (is_page()) { //ACFでサブタイトルを設定しているものを取得
    $subtitle = get_field('subtitle');
} elseif (is_post_type_archive('menu') || is_singular('menu') || is_tax('genre')) {
    $subtitle = 'メニュー';
} elseif (is_post_type_archive('shop') || is_singular('shop')) {
    $subtitle = '店舗情報';
} elseif (is_post_type_archive('gift') || is_singular('gift')) {
    $subtitle = 'ギフト・贈り物';
} elseif (is_archive() || is_single()) {
    $page_title = 'お知らせ';
}



// 各ページごとにクラスをつけるための関数
$header_class = ''; // 初期化

if (is_page('concept')) {
    $header_class = 'concept';
} elseif (is_post_type_archive('menu') || is_singular('menu') || is_tax('genre')) {
    $header_class = 'menu-top';
} elseif (is_home() || is_archive() || is_single()) {
    $header_class = 'news-top';
} elseif (is_post_type_archive('shop') || is_singular('shop')) {
    $header_class = 'shop-top';
} elseif (is_post_type_archive('gift') || is_singular('gift')) {
    $header_class = 'gift-top';
} elseif (is_page('contact')) {
    $header_class = 'contact-top';
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header header-mask <?php echo esc_attr($header_class); ?>">
        <div class="header-border">
            <div class="header-border__inner">
                <div class="header__title">
                    <h1><?php echo $page_title; ?></h1>
                    <p><?php echo esc_html($subtitle); ?></p>
                </div>
            </div>
        </div>

        <button id="pages" class="hamburger" type="button">
            <img id="open" class="btn-img" src="<?php echo get_template_directory_uri(); ?>/img/menu-icon.png" alt="ハンバーガーボタン">
        </button>
        <nav class="hero__nav is_sub">
            <div class="nav__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_light.png" alt="">
            </div>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'drawer-sp',
                'container'      => false,
                'menu_class'     => 'nav__lists',
                'walker'         => new Custom_Drawer_Menu_Walker(),
            ));
            ?>
            <div class="sns-icons">
                <div class="sns-icon">
                    <i class="fa-brands fa-twitter" width="32" height="32"></i>
                </div>
                <div class="sns-icon">
                    <i class="fa-brands fa-youtube" width="32" height="32"></i>
                </div>
                <div class="sns-icon">
                    <i class="fa-brands fa-instagram" width="32" height="32"></i>
                </div>
            </div>
        </nav>
    </header>
    <div id="mask" class="hidden"></div>

    <main class="concept-main">
    <?php get_template_part( 'template-parts/breadcrumb'); ?>

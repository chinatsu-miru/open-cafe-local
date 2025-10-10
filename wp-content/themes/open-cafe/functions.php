<?php
// 標準機能を拡張---サムネイル、
function my_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
}
add_action("after_setup_theme", "my_setup");


// JSファイル、スタイル、swiper、fontawesome、google-fonts、reset-css、など読み込み
function my_enqueue_assets()
{
    add_action("wp_head", function () {
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    });
    wp_enqueue_style('damion-font', 'https://fonts.googleapis.com/css2?family=Damion&display=swap', array(), null);
    wp_enqueue_style('noto-serif-font', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap', array(), null);
    wp_enqueue_style('font-amatic-sc', 'https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap', array(), null);
    wp_enqueue_style("font-patua-one", "https://fonts.googleapis.com/css2?family=Patua+One&display=swap", array(), null);
    wp_enqueue_style("reset-css", get_template_directory_uri() . "/css/reset.css", array(), filemtime(get_theme_file_path('css/reset.css')), "all");
    wp_enqueue_style("swiper-css", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array(), null, "all");
    wp_enqueue_style("fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css", array(), null, "all");
    wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array("reset-css"), filemtime(get_theme_file_path('css/style.css')), "all");
    wp_enqueue_script("swiper-js", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), null, true);
    wp_enqueue_script("main-js", get_template_directory_uri() . "/js/main.js", array(), filemtime(get_theme_file_path('js/main.js')), true);
    wp_localize_script('main-js', 'themeData', array(
        'themeUrl' => get_template_directory_uri()
    ));

    if (is_page('concept')) { // コンセプト
        wp_enqueue_style("my-css", get_template_directory_uri() . "/css/concept.css", array(), filemtime(get_theme_file_path('css/concept.css')), "all");
    } elseif (is_page('contact')) { // お問い合わせ
        wp_enqueue_style("contact-page", get_template_directory_uri() . "/css/contact.css", array(), filemtime(get_theme_file_path('css/contact.css')), "all");
    } elseif (is_page('thanks')) { // お問い合わせ完了
        wp_enqueue_style("thanks-page", get_template_directory_uri() . "/css/thanks.css", array(), filemtime(get_theme_file_path('css/thanks.css')), "all");
    } elseif (is_home() || is_category()) { // ニュース一覧
        wp_enqueue_style("news-page", get_template_directory_uri() . "/css/news.css", array(), filemtime(get_theme_file_path('css/news.css')), "all");
    } elseif (is_single()) { // ニュースページ
        wp_enqueue_style("news-page", get_template_directory_uri() . "/css/news-single.css", array(), filemtime(get_theme_file_path('css/news-single.css')), "all");
    } elseif (is_singular('gift') || is_post_type_archive('gift')) { // GIFTページ
        wp_enqueue_style("gift-page", get_template_directory_uri() . "/css/gift.css", array(), filemtime(get_theme_file_path('css/gift.css')), "all");
    } elseif (is_singular('menu') || is_post_type_archive('menu') || is_tax('genre')) { // メニューページ
        wp_enqueue_style("menu-page", get_template_directory_uri() . "/css/menu.css", array(), filemtime(get_theme_file_path('css/menu.css')), "all");
    } elseif (is_post_type_archive('shop')) { // 店舗紹介ページ
        wp_enqueue_style("shop-page", get_template_directory_uri() . "/css/shop.css", array(), filemtime(get_theme_file_path('css/shop.css')), "all");
    }
}
add_action("wp_enqueue_scripts", "my_enqueue_assets");


// メニュー機能をアクティブにする関数
function my_menu_init()
{
    register_nav_menus(
        array(
            'global' => 'グローバルメニュー',
            'drawer-pc' => 'PCドロワーメニュー',
            'drawer-sp' => 'SPドロワーメニュー'
        )
    );
}
add_action("init", "my_menu_init");

/*-----------------------------------------
ウィジェットを有効化・設定
-----------------------------------------*/
function my_widget_init()
{
    register_sidebar(
        array(
            'name' => 'サイドバー',
            'id' => 'sidebar',
            'before_widget' => '<div id="%1$s" class="articles__card">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
}
add_action('widgets_init', 'my_widget_init');


// カスタムナビゲーションウォーカー スマホドロワー パソコンドロワー用
class Custom_Drawer_Menu_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= '<li class="nav__list">';
        $output .= '<a href="' . esc_url($item->url) . '" class="nav__link">';
        $output .= '<span class="en">' . esc_html($item->title) . '</span>';
        $output .= '<span class="slash">/</span>';
        $output .= '<span class="ja">' . esc_html($item->description) . '</span>';
        $output .= '</a></li>';
    }
}


// カスタムナビゲーションウォーカーパソコングローバル用
class Custom_Global_Menu_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= '<li class="nav__list-pc">';
        $output .= '<a href="' . esc_url($item->url) . '" class="nav__link-pc">';
        $output .= '<span class="en">' . esc_html($item->title) . '</span>';
        $output .= '<span class="ja">' . esc_html($item->description) . '</span>';
        $output .= '</a></li>';
    }
}


// モバイル表示でもアドミンバーがトップに表示されるように
function fix_adminbar_mobile()
{
    echo '<style>
    @media screen and (max-width: 600px) {
        #wpadminbar {
            top: 0 !important;
            bottom: auto !important;
            position: fixed !important;
        }
        body.admin-bar {
            padding-top: 46px;
            padding-bottom: 0 !important;
        }
    }
    </style>';
}
add_action('wp_head', 'fix_adminbar_mobile');


// 抜粋欄を追加
function add_excerpt_to_pages()
{
    add_post_type_support('page', 'excerpt');
}
add_action('init', 'add_excerpt_to_pages');


// 関連記事を取得するための関数


// contact-form7に関してはbrタグを入れない
add_filter("wpcf7_autop_or_not", '__return_false');


// お問い合わせ完了ページに遷移する関数
function redirect_to_thanks_page()
{
    if (is_page('contact')) {
        echo <<<EOD
<script>
document.addEventListener('wpcf7mailsent', function() {
    window.location = '/contact/thanks/';
});
</script>
EOD;
    }
}
add_action('wp_footer', 'redirect_to_thanks_page');


//管理画面の「投稿」を「お知らせ」に変更
function my_admin_menu()
{
    global $menu;
    $menu[5][0] = 'お知らせ';
}
add_action('admin_menu', 'my_admin_menu');


//パンくずリストのnewsをお知らせに変更
// 投稿（post）のアーカイブ項目だけ「お知らせ」にする
function my_bcn_breadcrumb_title($title, $type, $id)
{
    // 投稿タイプ: post のアーカイブ（または「ブログ」項目）
    if (in_array('post-type-archive', $type, true) && in_array('post', $type, true)) {
        return 'お知らせ';
    }
    if (in_array('blog', $type, true)) { // 投稿ページを割り当てている場合のタイプ名
        return 'お知らせ';
    }
    return $title;
}
add_filter('bcn_breadcrumb_title', 'my_bcn_breadcrumb_title', 10, 3);

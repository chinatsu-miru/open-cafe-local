<?php
require_once get_template_directory() . '/inc/breadcrumb.php';


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
    } elseif (is_singular('products') || is_post_type_archive('products')) { // productsページ
        wp_enqueue_style("products-page", get_template_directory_uri() . "/css/products.css", array(), filemtime(get_theme_file_path('css/products.css')), "all");
    } elseif (is_singular('menu') || is_post_type_archive('menu') || is_tax('genre')) { // メニューページ
        wp_enqueue_style("menu-page", get_template_directory_uri() . "/css/menu.css", array(), filemtime(get_theme_file_path('css/menu.css')), "all");
    } elseif (is_singular('shop') || is_post_type_archive('shop')) { // 店舗紹介ページ
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



/*-----------------------------------------
　　* ジャンル別ページ（taxonomy-genre.php）の並び順を
 * プラグイン等で設定した管理画面の順序（menu_order）に合わせる
-----------------------------------------*/
function my_custom_menu_order($query)
{
    if (!is_admin() && $query->is_main_query() && is_tax('genre')) {
        $query->set('orderby', 'menu_order');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'my_custom_menu_order');



/*-----------------------------------------
　　* ニュースページだけ投稿を8件にする
-----------------------------------------*/
function my_custom_news_posts_per_page($query){
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_home()) {
            $query->set( 'posts_per_page', 8);
        }
    }
}
add_action( 'pre_get_posts', 'my_custom_news_posts_per_page');



/*-----------------------------------------
　　* thanksページのパンくずリストの制御
-----------------------------------------*/
/**
 * パンくずリスト：完了ページのみをピンポイントで書き換える
 */
add_filter('bcn_breadcrumb_title', 'my_custom_bcn_title_strict', 10, 3);
function my_custom_bcn_title_strict($title, $type, $id)
{
    // 1. お問い合わせ完了ページの「実際のID」をここで指定します
    // ※IDの確認方法は下記に記載しています
    $thanks_page_id = 26; // ←ここをお客様の完了ページのID番号に書き換えてください

    // 2. 「今処理しているパーツのID」が「完了ページのID」と一致した時だけ書き換え
    if ((int)$id === $thanks_page_id) {
        return 'お問い合わせ完了';
    }

    // それ以外（親ページなど）は元のタイトルのまま返す
    return $title;
}

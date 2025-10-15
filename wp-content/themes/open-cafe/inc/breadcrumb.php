<?php
function my_bcn_breadcrumb_title($title, $type, $id)
{
    // error_log('detail $type');
    // error_log(print_r(compact('title', 'type', 'id'), true));

    // ===== 投稿・アーカイブまたはその親パンくず（ニュース用） =====
    $is_post_archive = (
        in_array('post-root', $type, true)
        || in_array('post-archive', $type, true)
        || in_array('post-type-archive', $type, true)
        || in_array('post-post-archive', $type, true)
        || in_array('blog', $type, true)
    );

    if ($is_post_archive) {
        return 'お知らせ';
    }

    // ===== 固定ページ関連 =====
    $contact_page = get_page_by_path('contact');
    $thanks_page = get_page_by_path('thanks');
    $concept_page = get_page_by_path('concept');

    $is_contact = $contact_page && $id === $contact_page -> ID;
    $is_thanks = $thanks_page && $id === $thanks_page -> ID;
    $is_concept = $concept_page && $id === $concept_page -> ID;

    if ($is_contact) {
        return 'お問い合わせ';
    }
    if ($is_thanks) {
        return 'お問い合わせ完了';
    }
    if ($is_concept) {
        return 'コンセプト';
    }

    // ===== その他 =====
    return $title;
}
add_filter('bcn_breadcrumb_title', 'my_bcn_breadcrumb_title', 10, 3);







//パンくずリストのnewsをお知らせに変更
// 投稿（post）のアーカイブ項目だけ「お知らせ」にする
// function my_bcn_breadcrumb_title($title, $type, $id)
// {
//     // 投稿タイプ: post のアーカイブ（または「ブログ」項目）
//     if (in_array('post-type-archive', $type, true) && in_array('post', $type, true)) {
//         return 'お知らせ';
//     }
//     if (in_array('blog', $type, true)) { // 投稿ページを割り当てている場合のタイプ名
//         return 'お知らせ';
//     }
//     return $title;
// }
// add_filter('bcn_breadcrumb_title', 'my_bcn_breadcrumb_title', 10, 3);

<?php
get_header();
?>

<div class="breadcrumbs">
    <span><a href="<?php echo home_url(); ?>">HOME</a></span>
    <span>></span>
    <span>お問い合わせ</span>
</div>


<main class="contact">
    <div class="contact__inner">
        <div class="contact__title">
            <h2>お問い合わせフォーム</h2>
            <p>お問い合わせ内容に応じて、項目をご選択のうえ、お気軽にお問い合わせください。</p>
        </div>
        <div action="" class="contact-form">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
            ?>

        </div>
    </div>

    <?php get_template_part('template-parts/access'); ?>
</main>
<?php get_footer(); ?>

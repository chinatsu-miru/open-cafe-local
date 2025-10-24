<!-- メニュー詳細のパスタ、サラダ、スイーツページの部品 -->
<div class="menu__image">

    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('medium'); ?>
    <?php else : ?>
        <?php echo "画像なし"; ?>
    <?php endif; ?>
    <div class="menu__image-text">
        <div class="desc"><?php the_title(); ?></div>
        <div class="price"><?php the_field('price'); ?>yen</div>
    </div>
</div>

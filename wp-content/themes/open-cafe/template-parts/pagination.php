<?php
echo '<!-- pagination.php: PHP実行済み -->';
?>
<?php if (paginate_links()) : ?>
    <div class="news__nav">
        <?php
        echo paginate_links(
            array(
                'end_size' => 1,
                'mid_size' => 1,
                'prev_next' => true,
                'prev_text' => '<i class="fa-solid fa-chevron-left"></i>',
                'next_text' => '<i class="fa-solid fa-chevron-right"></i>',
            )
        );
        ?>
    </div>
<?php endif; ?>

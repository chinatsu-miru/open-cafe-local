<!-- footer html -->
<footer>
    <div class="footer-inner">
        <div class="sns-icons">
            <div class="sns-icon">
                <i class="fa-brands fa-twitter"></i>
            </div>
            <div class="sns-icon">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <div class="sns-icon">
                <i class="fa-brands fa-youtube"></i>
            </div>
        </div>
        <div class="footer-copy">
            <small>&copy;2000-2021 open cafe. All Rights Reserved.</small>
        </div>
        <div class="to-top" id="to-top">
            <a href="#top">
                <img src="<?php echo get_template_directory_uri(); ?>/img/to-top.png" alt="トップへ戻る">
            </a>
        </div>
        <div class="footer-beans">
            <picture class="beans-img">
                <source media="(min-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/img/coffee-beans3-pc.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/coffee-beans3.png" alt="コーヒー豆の画像">
            </picture>
        </div>
    </div>


    <?php wp_footer(); ?>
</footer>
</div>
</body>

</html>

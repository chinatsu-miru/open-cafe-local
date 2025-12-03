<nav class="hero__nav">
    <div class="nav__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_light.png" alt="">
    </div>
    <button id="pages" class="hamburger close-sp" type="button" data-theme-dir="<?php echo esc_url(get_template_directory_uri()); ?>">
        <img class="btn-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/close.png" alt="ハンバーガーボタン">
    </button>
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

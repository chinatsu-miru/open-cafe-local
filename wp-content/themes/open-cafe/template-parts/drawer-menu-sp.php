<!-- スマホ用ドロワーメニュー -->
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

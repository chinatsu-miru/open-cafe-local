'use strict';
{
    // ハンバーガーメニュークリックした時の動作
    const btn = document.querySelector('.hamburger');
    const navs= document.querySelectorAll('.hero__nav');
    const img = document.querySelector('.btn-img');
    const mask = document.getElementById('mask');
    const logo = document.querySelector('.logo');

    btn.addEventListener('click', () => {
        navs.forEach(nav => {
            nav.classList.toggle('is-checked');
        });
        btn.classList.toggle('is-checked');
        logo.classList.toggle('is-checked');

        const isInPagesFolder = location.pathname.includes('/pages/');
        const isChecked = btn.classList.contains("is-checked");
        if (isChecked) {
            if(isInPagesFolder) {
                img.src = `${themeData.themeUrl}/img/close.png`;
            } else {
                img.src = `${themeData.themeUrl}/img/close.png`;
            }
        } else {
            if(isInPagesFolder) {
                img.src = `${themeData.themeUrl}/img/menu-icon.png`;
            } else {
                img.src = `${themeData.themeUrl}/img/menu-icon.png`;
            }
        }
        mask.classList.toggle('hidden');
    });


    mask.addEventListener('click', () => {
        btn.click();
    });




    //swiper-----------------------------------

    const swiper = new Swiper('.swiper', {
        loop: true,
        autoplay: {
            delay: 5000,
        },
        watchSlidesProgress: true,
        effect: 'fade',
        speed: 3000,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        observer: true,
        observeParents: true,
        clickable: true,
    });

    window.addEventListener('resize', () => {
        swiper.update();
    });



    //menuページ・タブをクリックした時の動作-----------------------------------
    const menuItems = document.querySelectorAll('.tab-button');
    const contents = document.querySelectorAll('.menu__images-contents');

    menuItems.forEach(clickedItem => {
        clickedItem.addEventListener('click', e => {
            e.preventDefault();

            menuItems.forEach(item => { //item はmenuItems要素のひとつ
                item.classList.remove('btn-active');
            });
            clickedItem.classList.add('btn-active');// clickedItemはクリックされた要素

            contents.forEach(content => {
                content.classList.remove('menu-active');
            });

            document.getElementById(clickedItem.dataset.id).classList.add('menu-active');
            console.log(clickedItem.dataset.id);
        });
    });
}

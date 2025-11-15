'use strict';
{
    // ハンバーガーメニュークリックした時の動作
    console.log('--- main.js loaded ---');
    const logo = document.querySelector('.logo');
    const btn = document.querySelector('.hamburger');
    const navs = document.querySelectorAll('.hero__nav');
    const img = document.querySelector('.btn-img');
    const mask = document.getElementById('mask');
    const themeDir = btn.dataset.themeDir;
    const vh = innerHeight;
    console.log(vh);
    img.src = themeDir + '/img/menu-icon.png';


    btn.addEventListener('click', () => {
        navs.forEach(nav => {
            nav.classList.toggle('is-checked');
        });
        btn.classList.toggle('is-checked');
        logo.classList.toggle('is-hidden');

        const isInPagesFolder = location.pathname.includes('/pages/');

        if (btn.classList.contains('is-checked')) {
            img.src = themeDir + "/img/close.png";
        } else {
            img.src = themeDir + "/img/menu-icon.png";
        };
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


    //トップへ戻るボタン-----------------------------------
    const toTop = document.querySelector('.to-top');

    toTop.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth',
        });
    });

    window.addEventListener('scroll', () => {
        if(window.scrollY > 300) {
            toTop.style.display = 'block';
        }else{
            toTop.style.display = 'none';
        }
        if(window.scrollY > vh){
            btn.style.display = 'block';
        }else{
            btn.style.display = 'none';
        }
    });





    //menuページ・タブをクリックした時の動作-----------------------------------
    // document.addEventListener('DOMContentLoaded', function () {
    //     const buttons = document.querySelectorAll('.tab-button');

    //     buttons.forEach(function (btn) {
    //         btn.addEventListener('click', function (e) {
    //             e.preventDefault(); // リンク遷移を止める（※必要なときだけ）

    //             // すべてのボタンの色をリセット
    //             buttons.forEach(function (b) {
    //                 b.classList.remove('btn-active');
    //             });

    //             // クリックしたボタンだけ色をつける
    //             btn.classList.add('btn-active');
    //         });
    //     });
    // });

    // document.addEventListener('DOMContentLoaded', function () {
    //     // .tab-button 内のリンクを “必ず” 遷移させる
    //     document.querySelectorAll('.tab-button a').forEach(function (a) {
    //         a.addEventListener('click', function () {
    //             window.location.href = a.href; // ← これで確実に飛ぶ
    //         });
    //     });
    // });
}

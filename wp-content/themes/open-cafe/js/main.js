'use strict';
{
    // ハンバーガーメニュークリックした時の動作
    // 1. 変数の宣言（すべて1回ずつにする）
    const logo = document.querySelector('.logo');
    const btn = document.querySelector('.hamburger');
    const navs = document.querySelectorAll('.hero__nav');
    const mask = document.getElementById('mask');
    const vh = window.innerHeight;

    // 閉じるボタン（header.php用とheader-top.php用）
    const closeDefault = document.querySelector('.nav__close');
    const closeTop = document.querySelector('.nav__close.is-top');
    console.log(document.querySelector('.nav__close'));
    console.log(document.querySelector('.nav__close.is-top'));

    // 2. 共通の処理（開閉アクション）
    const toggleMenuAction = () => {
        navs.forEach(nav => {
            nav.classList.toggle('is-checked');
        });
        if (btn) btn.classList.toggle('is-checked');
        if (mask) mask.classList.toggle('hidden');
        if (logo) logo.classList.toggle('is-hidden');
    };

    // 3. イベント登録（存在チェックをしながら）

    // ハンバーガーボタンをクリックした時
    if (btn) {
        btn.addEventListener('click', toggleMenuAction);
    }

    // 閉じるボタン1 (header.php)
    if (closeDefault) {
        closeDefault.addEventListener('click', toggleMenuAction);
    }

    // 閉じるボタン2 (header-top.php / .is-top)
    if (closeTop) {
        closeTop.addEventListener('click', toggleMenuAction);
    }

    // マスク（背景）をクリックした時
    if (mask) {
        mask.addEventListener('click', () => {
            if (btn) btn.click();
        });
    }



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


    //ハンバーガーボタンふわっと出現-----------------------------------
    window.addEventListener('scroll', () => {
        if(window.scrollY > vh) {
            btn.classList.add('is-show');
        } else {
            btn.classList.remove('is-show');
        }
    });

    window.addEventListener('scroll', () => {
        if(window.scrollY > 300) {
            toTop.style.display = 'block';
        }else{
            toTop.style.display = 'none';
        }
    });
}

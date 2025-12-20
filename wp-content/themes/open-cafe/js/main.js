'use strict';
{
    // ハンバーガーメニュークリックした時の動作
    const logo = document.querySelector('.logo');
    const btn = document.querySelector('.hamburger');
    const navs = document.querySelectorAll('.hero__nav');
    const close = document.querySelector('.nav__close');
    // const img = document.querySelector('.btn-img');
    const mask = document.getElementById('mask');
    // const themeDir = btn.dataset.themeDir;
    const vh = window.innerHeight;


    btn.addEventListener('click', () => {
        navs.forEach(nav => {
            nav.classList.toggle('is-checked');
        });
        btn.classList.toggle('is-checked');
        if(logo) {
            logo.classList.toggle('is-hidden');
        }
        // const isInPagesFolder = location.pathname.includes('/pages/');

        mask.classList.toggle('hidden');
    });

    close.addEventListener('click', () => {
        navs.forEach(nav => {
            nav.classList.toggle('is-checked');
        });
        btn.classList.toggle('is-checked');
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
    //     if(window.scrollY > vh){
    //         btn.style.display = 'block';
    //     }else{
    //         btn.style.display = 'none';
    //     }
    });
}

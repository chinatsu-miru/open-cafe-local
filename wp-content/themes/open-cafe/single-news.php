<?php get_header(); ?>

<!-- <main class="news-lists">
    <div class="news-lists__inner">
        <div class="breadcrumbs">
            <span><a href="<?php echo home_url(); ?>">HOME</a></span>
            <span>></span>
            <span><a href="<?php echo get_post_type_archive_link('news'); ?>">NEWS</a></span> -->
            <!-- <span>></span>
            <span>お知らせ</span> -->
        <!-- </div>
    </div> -->

    <div class="single__news">
        <div class="single__news__inner">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <div class="single__news-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-single/single.jpg" alt="">
                    </div>
                    <section class="single__news-content">
                        <h1 class="single__news-title">
                            h1タイトル_ダミークリーミーな口溶けの食パンと最高のコーヒーをできる手作りカフェダミークリーミーな口溶けの食パンと最高のコーヒーをできる手作りカフェ
                        </h1>
                        <div class="article__news-meta">
                            <span class="date">2021.01.01</span>
                            <span class="separator"></span>
                            <span class="category">カテゴリ名</span>
                        </div>
                        <p class="article__news-text">
                            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
                        </p>
                        <div class="article__news-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-single/single-pasta.jpg" alt="">
                        </div>
                        <p class="article__news-text">
                            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
                        </p>
                    </section>
                    <section class="single__news-content">
                        <h2 class="single__news-title">h2タイトル_テキストテキストテキストテキスト</h2>
                        <p class="article__news-text">
                            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
                        </p>
                    </section>
                    <section class="single__news-content">
                        <h3 class="single__news-title">h3タイトル_テキストテキストテキストテキスト</h3>
                        <p class="article__news-text">
                            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
                        </p>
                    </section>
                    <section class="single__news-content">
                        <h4 class="single__news-title">h4タイトル_テキストテキストテキストテキスト<span class="pc-none">h4タイトル_テキストテキストテキストテキスト</span></h4>
                        <p class="article__news-text">
                            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
                        </p>
                        <ul class="article__news-lists">
                            <li class="article__news-list">リスト</li>
                            <li class="article__news-list">リスト</li>
                            <li class="article__news-list">リスト</li>
                        </ul>
                        <div class="quote-box">
                            <blockquote>
                                <p>引用ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
                                </p>
                            </blockquote>
                            <p class="quote-source">出典元：<a href="http://example.com">http://example.com</a></p>
                        </div>
                    </section>

                <?php endwhile; ?>
            <?php endif; ?>
            <nav class="post-nav__box" aria-label="記事ナビゲーション">
                <ul class="post-nav">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/news/news-single/prev.svg" alt=""></li>
                    <li><a href="">前の記事</a></li>
                    <li><a href="">記事一覧</a></li>
                    <li><a href="">次の記事</a></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/news/news-single/next.svg" alt=""></li>
                </ul>
            </nav>
        </div>
        <div class="related-articles__box">
            <h2 class="related-articles">関連記事</h2>
            <div class="news__lists">
                <ul class="news__lists-wrapper">
                    <li class="news__list">
                        <div class="news__image-s">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                            <div class="ribbon-s">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
                            </div>
                            <div class="pass">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                            </div>
                        </div>
                        <a href="./news-single.html" class="news__text-s pc-none">
                            <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                        </a>
                        <a href="" class="news__text-s sp-none">
                            <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが…</p>
                        </a>
                        <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                    </li>
                    <li class="news__list">
                        <div class="news__image-s">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                            <div class="ribbon-s">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
                            </div>
                            <div class="pass">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                            </div>
                        </div>
                        <a href="" class="news__text-s pc-none">
                            <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                        </a>
                        <a href="" class="news__text-s sp-none">
                            <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが…</p>
                        </a>
                        <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                    </li>
                    <li class="news__list">
                        <div class="news__image-s">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                            <div class="ribbon-s">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
                            </div>
                            <div class="pass">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                            </div>
                        </div>
                        <a href="" class="news__text-s pc-none">
                            <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                        </a>
                        <a href="" class="news__text-s sp-none">
                            <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが…</p>
                        </a>
                        <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                    </li>
                    <li class="news__list">
                        <div class="news__image-s">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                            <div class="ribbon-s">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
                            </div>
                            <div class="pass">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                            </div>
                        </div>
                        <a href="" class="news__text-s pc-none">
                            <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                        </a>
                        <a href="" class="news__text-s sp-none">
                            <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが…</p>
                        </a>
                        <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                    </li>
                    <li class="news__list">
                        <div class="news__image-s">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                            <div class="ribbon-s">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
                            </div>
                            <div class="pass">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                            </div>
                        </div>
                        <a href="" class="news__text-s pc-none">
                            <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                        </a>
                        <a href="" class="news__text-s sp-none">
                            <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが…</p>
                        </a>
                        <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                    </li>
                    <li class="news__list">
                        <div class="news__image-s">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-page-lg.jpg" alt="ニュース画像">
                            <div class="ribbon-s">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
                            </div>
                            <div class="pass">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
                            </div>
                        </div>
                        <a href="" class="news__text-s pc-none">
                            <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                        </a>
                        <a href="" class="news__text-s sp-none">
                            <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが…</p>
                        </a>
                        <time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/access'); ?>
</main>

<?php get_footer(); ?>

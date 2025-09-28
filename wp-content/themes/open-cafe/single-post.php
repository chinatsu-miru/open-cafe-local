<?php get_header(); ?>

<main class="news-lists">
    <div class="single__news">
        <div class="single__news__inner">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <div class="single__news-thumbnail">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
                    </div>
                    <section class="single__news-content">
                        <h1 class="single__news-title"><?php the_title(); ?></h1>
                        <div class="article__news-meta">
                            <span class="date">2021.01.01</span>
                            <span class="separator"></span>
                            <?php
                            $categories = get_the_category();
                            if (! empty($categories)) {
                                foreach ($categories as $category) {
                                    echo '<span class="category">';
                                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">';
                                    echo esc_html($category->name);
                                    echo '</a></span>';
                                }
                            }
                            ?>
                        </div>
                        <h2 class="single__news-title">この冬限定のスペシャルドリンク</h2>
                        <p class="article__news-text">
                            寒い季節にぴったりの特別メニューとして、当店オリジナルのホットチョコレートが新登場しました。ほどよい甘さと濃厚なカカオのコクが絶妙にマッチし、寒い外から飛び込んできた身体を芯から温めてくれます。
                        </p>
                    </section>
                    <section class="single__news-content">
                        <h3 class="single__news-title">チョコレートとは？</h3>
                        <p class="article__news-text">
                            冬ならではの甘く濃厚なホットチョコレートを楽しむ前に、その主役となるチョコレートについて少しだけご紹介します。古くは神聖な飲み物として扱われていたカカオですが、今では世界中で親しまれるお菓子の原料として幅広いバリエーションを生み出しています。
                        </p>
                        <p class="article__news-text">
                            チョコレート（英: chocolate）は、カカオの種子を発酵又は焙煎したカカオマスを主原料とし、これに砂糖、ココアバター、粉乳などを混ぜて練り固めた菓子である。略してチョコともいう。なお、イギリス英語では俗に“choc”と略す場合がある。ショコラ（フランス語: chocolat）と呼ばれることもある。
                        </p>
                        <blockquote>
                            <cite>
                                引用元: <a href="https://ja.wikipedia.org">https://ja.wikipedia.org</a>
                            </cite>
                        </blockquote>
                    </section>
                    <section class="single__news-content">
                        <h4 class="single__news-title">厳選チョコレートの深い味わい</h4>
                        <p>ホットチョコレートには、カカオ含有量の高いチョコレートを厳選して使用。甘すぎず、ほどよい苦みを活かすことで、奥行きのある贅沢な風味を実現しました。ひと口飲むたびに、リッチなコクと芳醇な香りが口いっぱいに広がります。</p>
                        <div class="article__news-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/news/news-single/single-coffee.jpg" alt="">
                        </div>
                        <p class="article__news-text">トッピングもお好みで</p>
                        <ul class="article__news-lists">
                            <li class="article__news-list">ホイップクリームのやわらかな甘さ</li>
                            <li class="article__news-list">焼きマシュマロのふわふわ食感</li>
                            <li class="article__news-list">シナモンパウダーのスパイシーなアクセント</li>
                        </ul>
                        <p class="article__news-text">こんな方におすすめ</p>
                        <ul class="article__news-lists">
                            <li class="article__news-list">コーヒー以外の冬限定ドリンクをお探しの方</li>
                            <li class="article__news-list">濃厚なチョコレートの味わいを楽しみたい方</li>
                            <li class="article__news-list">少し甘いもので、ほっとひと息つきたい方</li>
                        </ul>
                        <p>ぜひ、この機会に「冬だけの特別メニュー！ホットチョコレート」をお楽しみください。</p>
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
                </ul>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/access'); ?>
</main>

<?php get_footer(); ?>

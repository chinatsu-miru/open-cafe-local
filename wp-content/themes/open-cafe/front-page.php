<?php get_header('top'); ?>

<!-- ここからメイン -->
<main class="main">
	<section class="section concept">
		<div class="section--intro">
			<div class="section__title">
				<h2>CONCEPT</h2>
				<p>当店のこだわり</p>
			</div>
			<h3 class="concept__catch">
				最高のコーヒーと、<br />時の流れを味わうことができる<br />手作りカフェ
			</h3>
			<div class="concept__message">
				<p>ダミー_国内外から賞賛を<br />受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
				<p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
				<br />
				<p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
			</div>
			<div class="button1">
				<a href="<?php echo get_permalink(get_page_by_path('concept')); ?>" class="btn1">詳しくはこちら</a>
			</div>
		</div>
		<div class="concept__image">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/img/concept-pc.jpg" media="(min-width: 768px)">
				<img src="<?php echo get_template_directory_uri(); ?>/img/concept.jpg" alt="コンセプトセクション画像">
			</picture>
		</div>
		<div class="bg"></div>
		<div class="kv__decor">
			<img src="<?php echo get_template_directory_uri(); ?>/img/coffee-beans.png" alt="デコレーション画像">
		</div>
		<div class="concept-decor">
			<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/deco-2.png" alt="デコレーション画像">
		</div>
	</section>

	<section class="section lunch">
		<div class="lunch-speech-bubble">
			<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/lunch-speech-bubble.png" alt="">
		</div>
		<div class="section__title">
			<h2>SPECIAL LUNCH SET</h2>
			<p>今月のスペシャルランチセット</p>
		</div>
		<div class="lunch__inner">
			<div class="lunch-set__pasta-select">
				<div class="ribbon">
					<span class="ribbon__left">
						<svg xmlns="http://www.w3.org/2000/svg" width="29" height="33" viewBox="0 0 29 33"
							fill="none">
							<path d="M0 0.699951H28.6527V33.0001H0L8.68263 16.6126L0 0.699951Z" fill="#222222" />
						</svg>
					</span>
					<h3 class="lunch-set__select-heading">お好きなパスタをお選びください</h3>
					<span class="ribbon__right">
						<svg xmlns="http://www.w3.org/2000/svg" width="29" height="33" viewBox="0 0 29 33"
							fill="none">
							<path d="M29.0003 0.699951H0.347656V33.0001H29.0003L20.3177 16.6126L29.0003 0.699951Z"
								fill="#222222" />
						</svg>
					</span>
				</div>
				<ul class="lunch-set__pasta-list">
					<li class="lunch-set__pasta-item lunch-set__pasta-item--a">
						<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/pasta1.jpg" alt="パスタ画像">
						<div class="lunch-set__pasta-desc">
							<span class="lunch-set__pasta-label"><span class="pasta-label-text">A</span></span>
							<p class="lunch-set__pasta-text pc-none">テキストテキストの○○○風パスタ</p>
							<p class="lunch-set__pasta-text sp-none">テキストテキストの○○風パスタ</p>
						</div>
					</li>
					<li class="lunch-set__pasta-item lunch-set__pasta-item--b">
						<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/pasta2.jpg" alt="パスタ画像">
						<div class="lunch-set__pasta-desc">
							<span class="lunch-set__pasta-label"><span class="pasta-label-text">B</span></span>
							<p class="lunch-set__pasta-text pc-none">テキストテキストの○○○風パスタ</p>
							<p class="lunch-set__pasta-text sp-none">テキストテキストの○○風パスタ</p>
						</div>
					</li>
					<li class="lunch-set__pasta-item lunch-set__pasta-item--c">
						<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/pasta3.jpg" alt="パスタ画像">
						<div class="lunch-set__pasta-desc">
							<span class="lunch-set__pasta-label"><span class="pasta-label-text">C</span></span>
							<p class="lunch-set__pasta-text pc-none">テキストテキストの○○○風パスタ</p>
							<p class="lunch-set__pasta-text sp-none">テキストテキストの○○風パスタ</p>
						</div>
					</li>
					<li class="lunch-set__pasta-item lunch-set__pasta-item--d">
						<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/pasta4.jpg" alt="パスタ画像">
						<div class="lunch-set__pasta-desc">
							<span class="lunch-set__pasta-label"><span class="pasta-label-text">D</span></span>
							<p class="lunch-set__pasta-text pc-none">テキストテキストの○○○風パスタ</p>
							<p class="lunch-set__pasta-text sp-none">テキストテキストの○○風パスタ</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="lunch-set__footer">
				<div class="lunch-set__footer-inner">
					<div class="lunch-set__combo">
						<div class="lunch-set__combo-item-a">
							<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/lunch-01.png" alt="パスタ画像" class="combo-item__img-a">
							<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/text-pasta.png" alt="テキスト" class="combo-item__text-a">
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/text-plus.png" alt="" class="lunch-set__combo-symbol-a">
						<div class="lunch-set__combo-item-b">
							<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/lunch-02.png" alt="サラダ画像" class="combo-item__img-b">
							<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/text-salad.png" alt="テキスト" class="combo-item__text-b">
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/text-plus.png" alt="" class="lunch-set__combo-symbol-b">
						<div class="lunch-set__combo-item-c">
							<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/lunch-03.png" alt="ドリンク画像" class="combo-item__img-c">
							<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/text-drink.png" alt="テキスト" class="combo-item__text-c">
						</div>
					</div>
					<div class="lunch-set__price-info">
						<p class="lunch-set__text">スペシャルランチセット<br />【選べる3品】</p>
						<p class="lunch-set__price">1,280 yen</p>
						<img src="<?php echo get_template_directory_uri(); ?>/img/lunch/repeat-grid.png" alt="">
						<p class="lunch-set__note">(11:00 AM〜14:00 PMまで)</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section grand__menu">
		<div class="section__title">
			<h2>GRAND MENU</h2>
			<p>グランドメニュー</p>
		</div>
		<div class="grand__menu-inner">
			<div class="grand__menus">
				<div class="grand__menu-content">
					<h3 class="grand__menu-top">パスタ</h3>
					<div class="grand__menu-list-wrapper">
						<ul class="grand__menu-list">
							<li class="grand__menu-info">
								<div class="grand__menu-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/pasta1.jpg" alt="パスタ画像">
								</div>
								<div class="grand__menu-text">テキストテキストテキストの○○○○風パスタ</div>
								<div class="grand__menu-price">780 yen</div>
							</li>
							<li class="grand__menu-info">
								<div class="grand__menu-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/pasta2.jpg" alt="パスタ画像">
								</div>
								<div class="grand__menu-text">テキストテキストの○○風パスタ</div>
								<div class="grand__menu-price">780 yen</div>
							</li>
							<li class="grand__menu-info">
								<div class="grand__menu-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/pasta3.jpg" alt="パスタ画像">
								</div>
								<div class="grand__menu-text">テキストテキストの○○風パスタ</div>
								<div class="grand__menu-price">780 yen</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="grand__menu-content">
					<h3 class="grand__menu-top">サラダ</h3>
					<div class="grand__menu-list-wrapper">
						<ul class="grand__menu-list">
							<li class="grand__menu-info">
								<div class="grand__menu-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/salad1.jpg" alt="サラダ画像">
								</div>
								<div class="grand__menu-text">○○○○風サラダ</div>
								<div class="grand__menu-price">780 yen</div>
							</li>
							<li class="grand__menu-info">
								<div class="grand__menu-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/salad2.jpg" alt="サラダ画像">
								</div>
								<div class="grand__menu-text">○○○○風サラダ</div>
								<div class="grand__menu-price">780 yen</div>
							</li>
							<li class="grand__menu-info">
								<div class="grand__menu-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/salad3.jpg" alt="サラダ画像">
								</div>
								<div class="grand__menu-text">○○○○風サラダ</div>
								<div class="grand__menu-price">780 yen</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="grand__menu-content">
					<h3 class="grand__menu-top">パン & スイーツ</h3>
					<div class="grand__menu-list-wrapper">
						<ul class="grand__menu-list bread">
							<li class="grand__menu-info">
								<div class="grand__menu-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/sweets1.jpg" alt="パン&スイーツ画像">
								</div>
								<div class="grand__menu-text">○○○○サンド</div>
								<div class="grand__menu-price">780 yen</div>
							</li>
							<li class="grand__menu-info">
								<div class="grand__menu-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/sweets2.jpg" alt="パン&スイーツ画像">
								</div>
								<div class="grand__menu-text">○○○○サンド</div>
								<div class="grand__menu-price">780 yen</div>
							</li>
							<li class="grand__menu-info">
								<div class="grand__menu-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/sweets3.jpg" alt="パン&スイーツ画像">
								</div>
								<div class="grand__menu-text">○○○○サンド</div>
								<div class="grand__menu-price">780 yen</div>
							</li>
							<li class="grand__menu-info">
								<div class="grand__menu-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/sweets4.jpg" alt="パン&スイーツ画像">
								</div>
								<div class="grand__menu-text">○○○○サンド</div>
								<div class="grand__menu-price">780 yen</div>
							</li>
							<li class="grand__menu-info">
								<div class="grand__menu-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/sweets5.jpg" alt="パン&スイーツ画像">
								</div>
								<div class="grand__menu-text">○○○○サンド</div>
								<div class="grand__menu-price">780 yen</div>
							</li>
							<li class="grand__menu-info">
								<div class="grand__menu-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/sweets6.jpg" alt="パン&スイーツ画像">
								</div>
								<div class="grand__menu-text">○○○○サンド</div>
								<div class="grand__menu-price">780 yen</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="grand__menu-content">
					<h3 class="grand__menu-top">ドリンク</h3>
					<div class="grand__menu-list-wrapper drink">
						<div class="grand__menu-drink-image">
							<div class="drink-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/drink.jpg" alt="コーヒー画像">
							</div>
						</div>
						<div class="grand__menu-drink-section">
							<div class="drink-group">
								<h4 class="drink-section-title">コーヒー</h4>
								<ul class="grand__menu-drink-lists">
									<li class="drink-menu"><span class="menu">ブレンド</span><span class="price">500
											yen</span></li>
									<li class="drink-menu"><span class="menu">カフェラテ</span><span class="price">500
											yen</span></li>
									<li class="drink-menu"><span class="menu">豆乳ラテ</span><span class="price">500
											yen</span></li>
									<li class="drink-menu"><span class="menu">カフェモカ</span><span class="price">500
											yen</span></li>
									<li class="drink-menu"><span class="menu">キャラメルラテ</span><span class="price">500
											yen</span></li>
									<li class="drink-menu"><span class="menu">バニララテ</span><span class="price">500
											yen</span></li>
								</ul>
							</div>
							<div class="drink-group">
								<h4 class="drink-section-title">紅茶</h4>
								<ul class="grand__menu-drink-lists">
									<li class="drink-menu"><span class="menu">ストレート</span><span class="price">500
											yen</span></li>
									<li class="drink-menu"><span class="menu">ミルク</span><span class="price">500
											yen</span></li>
									<li class="drink-menu"><span class="menu">アップル</span><span class="price">500
											yen</span></li>
								</ul>
							</div>
							<div class="drink-group">
								<h4 class="drink-section-title">ソフトドリンク</h4>
								<ul class="grand__menu-drink-lists">
									<li class="drink-menu"><span class="menu">バナナ</span><span class="price">500
											yen</span></li>
									<li class="drink-menu"><span class="menu">オレンジ</span><span class="price">500
											yen</span></li>
									<li class="drink-menu"><span class="menu">アップル</span><span class="price">500
											yen</span></li>
									<li class="drink-menu"><span class="menu">マンゴー</span><span class="price">500
											yen</span></li>
									<li class="drink-menu"><span class="menu">ミックス</span><span class="price">500
											yen</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="button1">
				<a href="<?php echo get_permalink(get_page_by_path('menu')); ?>" class="btn1">その他のメニュー</a>
			</div>
		</div>
		<div class="grand__menu-decor">
			<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/coffee-leaves2.png" alt="">
		</div>
		<div class="grand__menu-decor2">
			<img src="<?php echo get_template_directory_uri(); ?>/img/grand-menu/coffee-beans.png" alt="">
		</div>
		<div class="grand__menu-bg"></div>
	</section>

	<section class="section gallery">
		<div class="gallery__inner">
			<div class="section__title">
				<h2>GALLERY</h2>
				<p>ギャラリー</p>
			</div>
			<div class="gallery__images">
				<div class="gallery__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery1.jpg" alt="ギャラリー画像">
				</div>
				<div class="gallery__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery2.jpg" alt="ギャラリー画像">
				</div>
				<div class="gallery__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery3.jpg" alt="ギャラリー画像">
				</div>
				<div class="gallery__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery4.jpg" alt="ギャラリー画像">
				</div>
			</div>
			<div class="button1">
				<a href="<?php echo get_permalink(get_page_by_path('gallery')); ?>" class="btn1">インスタグラムを見る</a>
			</div>
			<div class="gallery-speech-bubble">
				<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/speech-bubble.png" alt="吹き出し画像">
			</div>
		</div>
	</section>

	<section class="section news">
		<div class="news__inner">
			<div class="section__title">
				<h2>NEWS</h2>
				<p>お知らせ</p>
			</div>
			<div class="news__contents">
				<div class="news__latest">
					<div class="news__image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/news/news-L.jpg" alt="最新ニュース画像">
						<div class="ribbon">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
						</div>
						<div class="pass">
							<img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
						</div>
					</div>
					<div class="news__desc">
						<p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
					</div>
					<div class="news__text">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						</p>
					</div>
					<time datetime="2021-01-01" class="news__date">2021.01.01</time>
				</div>
				<div class="news__lists">
					<ul class="news__lists-wrapper">
						<li class="news__list">
							<div class="news__image-s">
								<img src="<?php echo get_template_directory_uri(); ?>/img/news/news-s.jpg" alt="ニュース画像">
								<div class="ribbon-s">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
								</div>
								<div class="pass">
									<img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
								</div>
							</div>
							<div class="news__text-s">
								<p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
							</div>
							<time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
						</li>
						<li class="news__list">
							<div class="news__image-s">
								<img src="<?php echo get_template_directory_uri(); ?>/img/news/news-s.jpg" alt="ニュース画像">
								<div class="ribbon-s">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
								</div>
								<div class="pass">
									<img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
								</div>
							</div>
							<div class="news__text-s">
								<p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
							</div>
							<time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
						</li>
						<li class="news__list">
							<div class="news__image-s">
								<img src="<?php echo get_template_directory_uri(); ?>/img/news/news-s.jpg" alt="ニュース画像">
								<div class="ribbon-s">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
								</div>
								<div class="pass">
									<img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
								</div>
							</div>
							<div class="news__text-s">
								<p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
							</div>
							<time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
						</li>
						<li class="news__list">
							<div class="news__image-s">
								<img src="<?php echo get_template_directory_uri(); ?>/img/news/news-s.jpg" alt="ニュース画像">
								<div class="ribbon-s">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="" class="ribbon-bg">
								</div>
								<div class="pass">
									<img src="<?php echo get_template_directory_uri(); ?>/img/pass69.png" alt="">
								</div>
							</div>
							<div class="news__text-s">
								<p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
							</div>
							<time datetime="2021-01-01" class="news__date-s">2021.01.01</time>
						</li>
					</ul>
				</div>
			</div>
			<div class="button1">
				<a href="<?php echo get_permalink(get_page_by_path('news')); ?>" class="btn1">過去のお知らせ</a>
			</div>
		</div>
		<div class="news__deco">
			<img src="<?php echo get_template_directory_uri(); ?>/img/news/news-deco.png" alt="ニュースデコレーション画像">
		</div>
	</section>

	<?php get_template_part('template-parts/access'); ?>
</main>

<?php get_footer(); ?>
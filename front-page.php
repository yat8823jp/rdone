<?php get_header(); ?>
<section class="sec2" id="sec2">
	<h1 class="headline"><img src="<?php echo COMMON_PFIX; ?>/img/sec2_headline.png" alt="About" class="logo" data-sp-img="<?php echo COMMON_PFIX; ?>/img/sp_about.png"></h1>
	<div class="l-img-r-content content">
		<div class="left">
			<img src="<?php echo COMMON_PFIX; ?>/img/photo.jpg" alt="photo" class="photo">
			<ul class="sns-ico">
				<li class="ico-twitter"><a href="https://twitter.com/yat8823jp"><img src="<?php echo COMMON_PFIX; ?>/img/ico_twitter.png" width="29" height="24" alt="twitter"></a></li>
				<li class="ico-facebook"><a href="https://www.facebook.com/yat8823jp"><img src="<?php echo COMMON_PFIX; ?>/img/ico_facebook.png" width="25" height="25" alt="facebook"></a></li>
			</ul>
		</div><!--/.left-->
		<div class="right">
			<p class="sec-text">WebデザイナーのYATといいます（ブログはこちら<a href="http://wp.yat-net.com/" target="_blank">YATのblog</a>）。ECの運用を中心に、デザイン、コーディング、サーバー関係、プログラミング、SEO、マーケティング等を仕事で携わってきました。<br>
				2015年6月29日より個人事業として独立し、大阪府八尾市にて、フリーランスのWebクリエイターとして活動しています。<br>
				これまでの経験を活かし、ホームページを作って終わるのではなく、作ったサイトをどのように活用し、どのように目的を達成していくのかまで一緒に考えることができますので、今あるホームページをどうやって運用すればいいのか？といったお悩みをお抱えのサイトオーナー様からも、お気軽にご相談いただければと思います。
			</p>
			<h2>業務内容</h2>
			<dl>
				<dt>Webサイト制作</dt>
				<dd>Webデザイン / </dd>
				<dd>コーディング / </dd>
				<dd>CMS構築 / </dd>
				<dd>サイト運用補佐 等</dd>
			</dl>
			<dl>
				<dt>デザイン全般</dt>
				<dd>ロゴデザイン / </dd>
				<dd>名刺デザイン / </dd>
				<dd>チラシ作成 等</dd>
			</dl>
		</div><!--/right-->
	</div><!--/l-img-r-content-->
	</section><!--/.sec2-->

	<section class="sec3" id="sec3">
		<h1 class="headline"><img src="<?php echo COMMON_PFIX; ?>/img/sec3_headline.png" alt="Pricelist" width="752" height="" class="logo" data-sp-img="<?php echo COMMON_PFIX; ?>/img/sp_pricelist.png"></h1>
		<div class="content">
			<p class="sec-copy">基本的な料金は下記となります。ご不明な点、こちらで該当しない点等、ご相談がありましたら、お気軽にお問い合わせください。</p>
			<h2 class="sec3-h2" data-price="headline">Webデザイン・ホームページ作成</h2>
			<table class="price-table">
				<tbody>
					<tr>
						<td colspan="3" class="price-headline" data-price="title"><h3>PC用サイト・スマートフォンサイト</h3></td>
					</tr>
					<tr>
						<td data-price="subtitle">デザイン</td>
						<td data-price="item">トップページ</td>
						<td data-price="price">100,000円〜</td>
					</tr>
					<tr>
						<td></td>
						<td data-price="item">下層ページ（1P）</td>
						<td data-price="price">30,000円〜</td>
					</tr>
					<tr>
						<td></td>
						<td data-price="item">バナー作成</td>
						<td data-price="price">5,000円〜</td>
					</tr>
					<tr>
						<td></td>
						<td data-price="item">ランディングページ</td>
						<td data-price="price">150,000円〜</td>
					</tr>
					<tr>
						<td data-price="subtitle">マークアップ＆コーディング</td>
						<td data-price="item">テンプレートページ</td>
						<td data-price="price">50,000円〜</td>
					</tr>
					<tr>
						<td></td>
						<td data-price="item">下層ページ（1P）</td>
						<td data-price="price">30,000円〜</td>
					</tr>
					<tr>
						<td></td>
						<td data-price="item">ランディングページ</td>
						<td data-price="price">100,000円〜</td>
					</tr>
				</tbody>
			</table>

			<h2 class="sec3-h2" data-price="headline">デザイン全般</h2>
			<table class="price-table">
				<tbody>
					<tr>
						<td colspan="3" class="price-headline" data-price="title"><h3>印刷物等</h3></td>
					</tr>
					<tr>
						<td data-price="subtitle">ロゴデザイン</td>
						<td></td>
						<td data-price="price">150,000円〜</td>
					</tr>
					<tr>
						<td data-price="subtitle">名刺デザイン</td>
						<td data-price="item">片面フルカラー</td>
						<td data-price="price">20,000円〜</td>
					</tr>
					<tr>
						<td data-price="subtitle">チラシデザイン</td>
						<td data-price="item">A4</td>
						<td data-price="price">30,000円〜</td>
					</tr>
				</tbody>
			</table>
		</div><!--/content-->
	</section><!--/.sec3-->
	<section class="sec4" id="sec4">
		<h1 class="headline"><img src="<?php echo COMMON_PFIX; ?>/img/sec4_headline.png" alt="Portfolio" width="752" height="" class="logo" data-sp-img="<?php echo COMMON_PFIX; ?>/img/sp_portfolio.png"></h1>
		<div class="content">
			<p class="sec-copy">過去の制作実績です</p>
			<?php
				$cnt = 0;
				global $wp_query;
				if ( $wp_query -> have_posts() ) :
					while ( $wp_query -> have_posts() ) : $wp_query -> the_post();
						$id = get_the_ID();
						$tags = get_the_tags();
						$url = SCF::get( 'siteurl' );
							?>
							<?php if( $cnt === 0 ) : ?>
								<ul class="portfolio-main">
							<?php endif; ?>
							<?php if ( $cnt < 2 ) : ?>
								<li class="portfolio-main-<?php echo $cnt + 1; ?>">
							<?php endif; ?>
							<?php if( $cnt === 2 ) : ?>
								<div class="slider">
									<div class="slick-prev"><a href="#prev" class="is-ui-arrow"><img src="<?php echo COMMON_PFIX; ?>/img/slick_prev.png" alt="&lt;"></a></div>
									<div class="slick-next"><a href="#next" class="is-ui-arrow"><img src="<?php echo COMMON_PFIX; ?>/img/slick_next.png" alt="&gt;"></a></div>
									<ul class="portfolio-sub">
								<li class="portfolio-sub-item">
							<?php endif; ?>
							<?php if( $cnt > 2 ) : ?>
								<li class="portfolio-sub-item">
							<?php endif; ?>
									<div class="image">
										<?php if ( $url ) : ?>
											<a href="<?php echo esc_html( $url ); ?>" target="_blank" class="portfolio-frame">
										<?php else : ?>
											<div class="portfolio-frame">
										<?php endif; ?>
										<?php
											if ( has_post_thumbnail() ) :
												the_post_thumbnail();
											else :
												?>
												<img src="<?php echo COMMON_PFIX; ?>/img/post/noimage.jpg" alt="">
											<?php endif; ?>
											<?php if ( $url ) : ?>
												</a>
											<?php else : ?>
												</div>
											<?php endif; ?>
									</div>
									<dl class="comment">
										<dt><?php the_title(); ?> 様</dt>
										<dd>
											<?php
												if( $tags ) {
													foreach( $tags as $tag ) :
														if ( $tag === end( $tags ) ) :
															echo esc_html( $tag->name );
														else :
															echo esc_html( $tag->name . " / " );
														endif;
													endforeach;
												}
											?>
										</dd>
									</dl>
								</li><!--/.portfolio-main-1-->
								<?php if( $cnt === 1 ) : ?>
									</ul><!--/.portfolio-main-->
									</div><!--/.content-->
								<?php endif; ?>
								<?php if( $wp_query -> current_post + 1 === $wp_query -> post_count) : ?>
									</ul><!--/.portfolio-sub-->
								</div><!--/.slider-->
								<?php endif; ?>
						<?php
					$cnt++;
				endwhile;
			endif;
		?>
	</section><!--/.sec4-->
	<section class="sec5" id="sec5">
		<h1 class="headline"><img src="<?php echo COMMON_PFIX; ?>/img/sec5_headline.png" alt="contact" class="logo" data-sp-img="<?php echo COMMON_PFIX; ?>/img/sp_contact.png"></h1>
		<div class="check-form-slide">
			<div class="content">
				<p class="sec-copy">デザイン、ホームページ制作等お仕事のご相談など、お気軽にお問い合わせください。 <span class="attention">（* は必須項目です）</span></p>
				<div class="contact-form">
					<?php echo do_shortcode( '[mwform_formkey key="4"]' ); ?>
				</div>
			</div><!--/content-->
		</div>
		<div class="privacy-box">
			<dl class="privacy">
				<dt class="privacy__ttl--big">プライバシー</dt>
				<dd>Rish-Designでは頂戴しましたメールアドレスを利用し、無理な勧誘、スパムメール、第三者への開示等は行いませんのでご安心ください。以下に個人情報の利用目的を記載させていただきます。</dd>
				<dt class="privacy__ttl--small">個人情報の利用目的</dt>
				<dd>お客様の情報を以下の目的で利用いたします。以下目的以外でお客様の個人情報を取得する際は、あらかじめ利用目的を明示いたします。
					<ul>
						<li>お客様からのお問い合わせに対する回答。</li>
						<li>お客様からのお見積りに対する回答。</li>
						<li>お客様からのご依頼に対する業務進行のやりとり。</li>
						<li>Rish-Designの展開するサービスのマーケティング活動及び、告知。</li>
					</ul>
				</dd>
			</dl>
			<p class="toggle-bt"><a href="#"><img src="<?php echo COMMON_PFIX; ?>/img/tg_open_bt.jpg" alt="続きを読む" width="" height=""></a></p>
			<dl class="privacy-hidden">
				<dt class="privacy__ttl--small">個人情報の第三者への開示・提供の禁止</dt>
				<dd>Rish-designではお客様よりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。
					<ul>
						<li>お客様よりあらかじめ同意を得ている会社に提供する場合。</li>
						<li>法令に基づく場合。</li>
						<li>当方および関連する企業・個人等の権利や財産が危害、損失を受け（もしくはその可能性が生じ）、これらを保護する必要があるとき。</li>
						<li>人の生命、身体又は財産の保護のために必要がある場合であって、お客様の同意を得ることが困難であるとき。</li>
						<li>国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、お客様の同意を得ることにより当該事務の遂行に支障を及ぼす恐れがあるとき。</li>
					</ul>
				</dd>
				<dt class="privacy__ttl--small"><h3>本方針の変更</h3></dt>
				<dd>本方針の内容は変更されることがあります。変更後の本方針については、当方が別途定める場合を除いて、当サイトに掲載した時から効力を生じるものとします。</dd>
			</dl>
		</div><!--/privacy-box-->
	</section><!--/.sec5-->
<?php get_footer(); ?>

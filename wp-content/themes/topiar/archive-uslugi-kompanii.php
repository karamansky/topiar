<?php
	//uslugi-kompanii archive template

	get_header();

	$breadcrumbs = DisplayBreadcrumbs::prepareSubtitleItemsForAutomaticBreadcrumbs();
	$text = get_field('blog_seo_text', 'option');
?>
<section class="uslugi">
	<div class="wrapper">
		<div class="uslugi__inner">
			<?php if( !empty($breadcrumbs) ) { ?>
				<ul class="breadcrumbs">
					<?php $i = 1; foreach ($breadcrumbs as $breadcrumb) { ?>
						<li class="breadcrumbs__item">
							<?php if( !empty($breadcrumb['url']) ) { ?>
								<a href="<?php echo $breadcrumb['url'] ?>"><?php echo $breadcrumb['title']; ?></a><?php if( $i < count($breadcrumbs) ) { ?>&nbsp;/&nbsp;<?php } ?>
							<?php } else { ?>
								<span><?php echo $breadcrumb['title']; ?></span><?php if( $i < count($breadcrumbs) ) { ?>&nbsp;/&nbsp;<?php } ?>
							<?php } ?>
						</li>
						<?php $i++; } ?>
				</ul>
			<?php } ?>

			<div class="uslugi__page">
				<h1 class="uslugi__title" data-aos="fade-up"><?php the_archive_title(); ?></h1>

				<div class="uslugi__block">
					<div class="uslugi__sidebar" data-aos="fade-up">
						<nav class="uslugi__menu">
							<ul id="menu-top-menu" class="uslugi-menu">
								<li id="menu-item-179" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-179"><a href="http://topiar.loc/category_2/proektuvannya/">Проєктування</a>
									<ul class="sub-menu">
										<li id="menu-item-204" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-204"><a href="http://topiar.loc/category_2/landshaftne-proektuvannia/">Ландшафтне проектування</a></li>
										<li id="menu-item-203" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-203"><a href="http://topiar.loc/category_2/inzhenerni-komunikatsii/">Інженерні комунікації</a></li>
										<li id="menu-item-202" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-202"><a href="http://topiar.loc/category_2/elementy-blahoustroiu/">Елементи благоустрою</a></li>
									</ul>
								</li>
								<li id="menu-item-180" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-180"><a href="http://topiar.loc/category_2/blagoustrij-tegirorii/">Благоустрій тегирорії</a>
									<ul class="sub-menu">
										<li id="menu-item-200" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-200"><a href="http://topiar.loc/category_2/ozelenennia/">Озеленення</a>
											<ul class="sub-menu">
												<li id="menu-item-221" class="menu-item menu-item-type-post_type menu-item-object-uslugi-kompanii menu-item-221"><a href="http://topiar.loc/uslugi-kompanii/postavka-ta-vysadka-roslyn/">Поставка та Висадка рослин</a></li>
												<li id="menu-item-221" class="menu-item menu-item-type-post_type menu-item-object-uslugi-kompanii menu-item-221"><a href="http://topiar.loc/uslugi-kompanii/postavka-ta-vysadka-roslyn/">Водовідведення та Дощова каналізація</a></li>
												<li id="menu-item-221" class="menu-item menu-item-type-post_type menu-item-object-uslugi-kompanii menu-item-221"><a href="http://topiar.loc/uslugi-kompanii/postavka-ta-vysadka-roslyn/">Сільськогосподарський полив</a></li>
												<li id="menu-item-221" class="menu-item menu-item-type-post_type menu-item-object-uslugi-kompanii menu-item-221"><a href="http://topiar.loc/uslugi-kompanii/postavka-ta-vysadka-roslyn/">Ландшафтне освітлення</a></li>
												<li id="menu-item-221" class="menu-item menu-item-type-post_type menu-item-object-uslugi-kompanii menu-item-221"><a href="http://topiar.loc/uslugi-kompanii/postavka-ta-vysadka-roslyn/">Ландшафтний автополив</a></li>
											</ul>
										</li>
										<li id="menu-item-201" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-201"><a href="http://topiar.loc/category_2/robota-z-osnovamy/">Робота з основами</a></li>
										<li id="menu-item-199" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-199"><a href="http://topiar.loc/category_2/moshchennia-ukladannia-plytky/">Мощення / Укладання плитки</a></li>
										<li id="menu-item-198" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-198"><a href="http://topiar.loc/category_2/dorozhni-roboty/">Дорожні роботи</a></li>
									</ul>
								</li>
								<li id="menu-item-181" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-181"><a href="http://topiar.loc/category_2/basejni-sauni-ta-spa/">Басейни, сауни та SPA</a>
									<ul class="sub-menu">
										<li id="menu-item-197" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-197"><a href="http://topiar.loc/category_2/baseyny/">Басейни</a></li>
										<li id="menu-item-194" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-194"><a href="http://topiar.loc/category_2/sauny-lazni-ta-spa/">Сауни, Лазні та СПА</a></li>
										<li id="menu-item-196" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-196"><a href="http://topiar.loc/category_2/spa-baseyny/">СПА басейни</a></li>
										<li id="menu-item-193" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-193"><a href="http://topiar.loc/category_2/nakryttia-dlia-baseyniv/">Накриття для басейнів</a></li>
										<li id="menu-item-195" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-195"><a href="http://topiar.loc/category_2/servis-ta-dohliad/">Сервіс та Догляд</a></li>
									</ul>
								</li>
								<li id="menu-item-182" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-182"><a href="http://topiar.loc/category_2/vnutrishnie-ozelenennya/">Внутрішнє озеленення</a>
									<ul class="sub-menu">
										<li id="menu-item-208" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-208"><a href="http://topiar.loc/category_2/stabilizovanyy-mokh/">Стабілізований мох</a></li>
										<li id="menu-item-206" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-206"><a href="http://topiar.loc/category_2/kimnatni-roslyny/">Кімнатні рослини</a></li>
										<li id="menu-item-209" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-209"><a href="http://topiar.loc/category_2/fitodyzayn-iter-ieru/">Фiтодизайн ітер`єру</a></li>
										<li id="menu-item-205" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-205"><a href="http://topiar.loc/category_2/kashpo-ta-horshchyky/">Кашпо та Горщики</a></li>
										<li id="menu-item-207" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-207"><a href="http://topiar.loc/category_2/servisne-obsluhovuvannia/">Сервісне обслуговування</a></li>
									</ul>
								</li>
								<li id="menu-item-183" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-183"><a href="http://topiar.loc/category_2/vorota-parkani-ta-navisi/">Ворота, паркани та навіси</a>
									<ul class="sub-menu">
										<li id="menu-item-215" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-215"><a href="http://topiar.loc/category_2/vorota-ta-khvirtky/">Ворота та Хвіртки</a></li>
										<li id="menu-item-217" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-217"><a href="http://topiar.loc/category_2/parkany-ta-ohorozhi/">Паркани та Огорожі</a></li>
										<li id="menu-item-216" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-216"><a href="http://topiar.loc/category_2/navisy/">Навіси</a></li>
									</ul>
								</li>
								<li id="menu-item-184" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-184"><a href="http://topiar.loc/category_2/servisne-obslugovuvannya-dilyanki/">Сервісне обслуговування ділянки</a>
									<ul class="sub-menu">
										<li id="menu-item-210" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-210"><a href="http://topiar.loc/category_2/kompleksne-obsluhovuvannia-dilianok/">Комплексне обслуговування ділянок</a></li>
										<li id="menu-item-213" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-213"><a href="http://topiar.loc/category_2/obsluhovuvannia-hazonu/">Обслуговування газону</a></li>
										<li id="menu-item-212" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-212"><a href="http://topiar.loc/category_2/obsluhovuvannia-avtomatychnoho-polyvu/">Обслуговування автоматичного поливу</a></li>
										<li id="menu-item-214" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-214"><a href="http://topiar.loc/category_2/obsluhovuvannia-sadu/">Обслуговування саду</a></li>
										<li id="menu-item-211" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-211"><a href="http://topiar.loc/category_2/likuvannia-roslyn-ta-hazonu/">Лікування рослин та газону</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
					<div class="uslugi__content">
						<div class="filter-bar" data-aos="fade-up">
							<div class="filter-bar__views">
								<a href="#" class="filter-bar__view filter-bar--table">
									<i class="icon table-view-icon"></i>
								</a>
								<a href="#" class="filter-bar__view filter-bar--grid tp-active">
									<i class="icon grid-view-icon"></i>
								</a>
								<a href="#" class="filter-bar__view filter-bar--list">
									<i class="icon list-view-icon"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
	$args = [ 'text' => $text ];
	echo get_template_part('template-parts/partials/scrolling-text', null, $args);


	get_footer();
?>

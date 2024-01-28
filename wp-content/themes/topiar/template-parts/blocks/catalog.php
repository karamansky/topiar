<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}


?>
<section class="catalog-block">
	<div class="wrapper">
		<div class="catalog-block__inner">
			<div class="catalog-block__menu-wrap">
				<?php
//					wp_nav_menu(
//						[
//							'theme_location' => 'catalog-menu',
//							'menu_class'     => 'catalog-menu',
//							'container'       => 'nav',
//							'container_class' => 'catalog-block__menu',
//						]
//					);
				?>
				<nav class="catalog-block__menu">
					<ul id="menu-top-menu" class="catalog-menu">
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
			<div class="catalog-block__categories">
				<div class="catalog-block__items">
					<a href="#" class="catalog-block__item" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/services/service1.png');">
						<h4 class="catalog-block__item-title">Проєктування</h4>
					</a>
					<a href="#" class="catalog-block__item" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/services/service2.png');">
						<h4 class="catalog-block__item-title">Благоустрій території</h4>
					</a>
					<a href="#" class="catalog-block__item" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/services/service3.png');">
						<h4 class="catalog-block__item-title">Басейни, сауни та SPA</h4>
					</a>
					<a href="#" class="catalog-block__item" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/services/service4.png');">
						<h4 class="catalog-block__item-title">Внутрішнє озеленення</h4>
					</a>
					<a href="#" class="catalog-block__item" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/services/service5.png');">
						<h4 class="catalog-block__item-title">Ворота, паркани та навіси</h4>
					</a>
					<a href="#" class="catalog-block__item" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/services/service6.png');">
						<h4 class="catalog-block__item-title">Сервісне обслуговування ділянки</h4>
					</a>
				</div>
				<div class="catalog-block__buttons">
					<a href="#" class="btn catalog-block__button">Більше послуг</a>
				</div>
			</div>

		</div>
	</div>
</section>

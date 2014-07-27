<?php
/**
 * @var $partners array
 */
if (!isset($partners)) {
	$partners = array();
}
?>
<div id="title" class="text-center">
	<div class="container text-center">
		<div class="funded_text ">
			<div class="line1">Для детей благотворительного фонда</div>
			<div class="line2">«Даунсайд Ап» вместе мы уже собрали</div>
		</div>
	</div>
	<div class="funded_amount">
		0752300
	</div>
	<div>
		<?=
		Form::button('<img src="/img/title/rub_btn.png"> Поддержать!', array(
			'id'    => 'btn_title_donate',
			'class' => 'btn btn-info text-center'
		))?>
	</div>
</div>
<div class="title_links">
	<div class="extra_mile_links">
	<span>Extra Mile 2014</span> <a href=""><img src="/img/title_links/extra_mile_link_vk.png"></a>
		<a href=""><img src="/img/title_links/extra_mile_link_fb.png"></a>
	</div>
	<div class="share_links pull-right">
		<span>Рассказать друзьям:</span> <a href=""><img src="/img/title_links/share_vk.png"></a>
		<a href="" target="_blank"><img src="/img/title_links/share_fb.png"></a>
		<a href="" target="_blank"><img src="/img/title_links/share_ok.png"></a>
		<a href="" target="_blank"><img src="/img/title_links/share_tw.png"></a>
		<a href="" target="_blank"><img src="/img/title_links/share_lj.png"></a>
	</div>
</div>
<div id="menu" class="text-center">
	<a href="#fund_raising">Сбор средств</a> <a href="#race_stages">Этапы гонки</a> <a href="#rules_register">Правила и
		регистрация</a> <a href="#map">Схема проезда</a> <a href="#history">История Extra Mile</a> <a href="#partners">Наши
		партнеры</a> <img src="/img/menu_line.jpg">
</div>
<div id="fund_raising" class="text-center">
	<div class="container">
		<h1>Сбор средств</h1>

		<p>
			Денежные средства для благотворительного фонда собираются не только участниками мероприятия и организациями,
			но и просто небезразличными людьми ― вы также можете присоединиться к ним и помочь детям! Только команды уже
			собрали 560 тысяч рублей! </p>

		<div class="leaders_team row">
			<div class="second_team col-xs-4 text-center">
				<div class="leader_card">
					<div class="name_logo">
						<div class="name text-left">
							Команда Флинта
						</div>
						<div class="logo ">

						</div>
					</div>
					<div class="photo">
						<img src="/img/leaders_teams/team_without_photo.jpg" class="img-rounded">
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" style="width: 60%">
							<span><img src="/img/leaders_teams/rub_progress_bar.png" alt="" /></span> <span class="">63 500</span>
						</div>
					</div>
					<div class="btn_support">
						<?=
						Form::button('<img src="/img/rub_for_btn.png"> Поддержать!', array(
							'class' => 'btn btn-info text-center btn_support_team'
						))?>
					</div>
				</div>
			</div>
			<div class="first_team col-xs-4 text-center">
				<div class="leader_card text-center">
					<div class="name">
						<div>First team</div>
					</div>
					<div class="logo">

					</div>
					<div class="photo">
						<img src="/img/leaders_teams/team_without_photo.jpg" class="img-rounded">
					</div>
					<div class="btn_support">
						<?=
						Form::button('<img src="/img/rub_for_btn.png"> Поддержать!', array(
							'class' => 'btn btn-info text-center btn_support_team'
						))?>
					</div>
				</div>
			</div>
			<div class="third_team col-xs-4 text-center">
				<div class="leader_card">
					<div class="name_logo">
						<div class="name text-left">
							Name team
						</div>
						<div class="logo ">

						</div>
					</div>
					<div class="photo">
						<img src="/img/leaders_teams/team_without_photo.jpg" class="img-rounded">
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" style="width: 40%">
							<span><img src="/img/leaders_teams/rub_progress_bar.png" alt="" /></span> <span class="">50 000</span>
						</div>
					</div>
					<div class="btn_support">
						<?=
						Form::button('<img src="/img/rub_for_btn.png"> Поддержать!', array(
							'class' => 'btn btn-info text-center btn_support_team'
						))?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="team_list" class="text-center">
	<div class="container">
		<div class="subtitle">
			<span class="subtitle_text">Список команд</span> <span class="sorting sort_active">по сборам</span>
			<span class="sorting">по алфавиту</span>
		</div>
		<div class="teams_table">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="/img/teams_table/team_table_bg.png">

						<div class="carousel-caption">
							<?= View::make('teamCards.tableCardsSmall') ?>
						</div>
					</div>
					<div class="item">
						<img src="/img/teams_table/team_table_bg.png">

						<div class="carousel-caption">
							<?= View::make('teamCards.tableCardsSmall') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="race_stages">
	<div class="container text-center">
		<h1>Этапы гонки</h1>

		<p>Основным правилом участия в нашем мероприятии является искреннее желание помочь фонду и, конечно же, самим
			детям!</p>
		<img src="/img/race_stages_img.jpg" class="race_stages_img">

		<div class="row text text-center">
			<div class="col-xs-4 ">
				<div class="description text-left">
					<h3>Велогонка</h3>

					<p>Для участия в мероприятии каждой команде необходимо подать заявку со списком участников,
						названием компании, предствителем которой является команда.</p>
				</div>
			</div>
			<div class="col-xs-4">
				<div class="description text-left">
					<h3>Водный этап</h3>

					<p>Для участия в мероприятии каждой команде необходимо подать заявку со списком участников,
						названием компании, предствителем которой является команда.</p>
				</div>
			</div>
			<div class="col-xs-4">
				<div class="description text-left">
					<h3>Ориентирование</h3>

					<p>Для участия в мероприятии каждой команде необходимо подать заявку со списком участников,
						названием компании, предствителем которой является команда.</p>
				</div>
			</div>
		</div>
		<div class="download ">
			Подробное описание этапов и правил участия (*.pdf)
			<a href="" class="btn"><img src="/img/race_stages_btn.png"></a>
		</div>
	</div>
</div>
<div id="rules_register">
	<div class="container text-center">
		<h1>Правила и регистрация</h1>

		<p>Основным правилом участия в нашем мероприятии является искреннее желание помочь фонду и, конечно же, самим
			детям!</p>

		<div class="common_info row text-center">
			<div class="col-md-3">
				<img src="/img/rules_register/info.png" class="reg_pic">

				<div class="info reg_info">
					<h3>Регистрация</h3>

					<p class="text-left">Для участия в мероприятии каждой команде необходимо подать заявку со списком
						участников, названием компании, представителем которой является команда.</p>

					<div class="registration_button">
						<?=
						Form::button('Зарегистрироваться', array(
							'class' => 'btn btn-info btn_reg'
						))?>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<img src="/img/rules_register/fee.png" class="reg_pic">

				<div class="info fee_info">
					<h3>Взнос</h3>

					<p class="text-left">Для участия в мероприятии каждой команде необходимо подать заявку со списком
						участников, названием компании, представителем которой является команда.</p>
				</div>
			</div>
			<div class="col-md-3">
				<img src="/img/rules_register/info.png" class="reg_pic">

				<div class="info funds_info">
					<h3>Сборы</h3>

					<p class="text-left">Для участия в мероприятии каждой команде необходимо подать заявку со списком
						участников, названием компании, представителем которой является команда.</p>
				</div>
			</div>
			<div class="col-md-3">
				<img src="/img/rules_register/info.png" class="reg_pic">

				<div class="info event_info">
					<h3>Мероприятие</h3>

					<p class="text-left">Для участия в мероприятии каждой команде необходимо подать заявку со списком
						участников, названием компании, представителем которой является команда.</p>
				</div>
			</div>
		</div>
		<div class="download ">
			Подробное описание этапов и правил участия (*.pdf)
			<a href="" class="btn"><img src="/img/race_stages_btn.png"></a>
		</div>
	</div>
</div>
<div id="map" class="text-center">
	<div id="google-map-canvas"></div>
	<div class="container">
		<h1>Схема проезда</h1>

		<div class="row text-center">
			<div class="col-xs-6">
				<div class="info_block by_car text-left">
					<h4><img src="/img/by_car.png"> На машине</h4>

					<p>ул. Академика Королёва, 13 далее по левую сторону от телебашни ФГУП «ГИПРОЦВЕТМЕТ» – здание
						офисного типа с вывесками «Юниаструмбанк», «Hyundai», ресторан «Персона грата». Запарковать авто
						в удобном для Вас месте (на Аргуновской ул. это сделать проблематично).</p>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="info_block by_public_transport text-left">
					<h4><img src="/img/by_public_transport.png"> Общественным транспортом</h4>

					<p>ул. Академика Королёва, 13 далее по левую сторону от телебашни ФГУП «ГИПРОЦВЕТМЕТ» – здание
						офисного типа с вывесками «Юниаструмбанк», «Hyundai», ресторан «Персона грата». Запарковать авто
						в удобном для Вас месте (на Аргуновской ул. это сделать проблематично).</p>
				</div>
			</div>
		</div>
		<div class="download ">
			Версия карты для печати (*.pdf) <a href="" class="btn"><img src="/img/race_stages_btn.png"></a>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div id="history" class="text-center">
	<div class="container text-center">
		<h1>История Extra Mile</h1>

		<p>The Deloitte Foundation Extra Mile ― это ежегодное мероприятие, участники которого соревнуются в разных видах
			спорта, включая бег, ориентирование на местности, альпинизм, преодоление водных преград и многое другое. Все
			собранные в ходе этого мероприятия деньги, будут переданы в «Даунсайд Ап», благотворительную организацию,
			оказывающую поддержку семьям, где есть дети с синдромом Дауна.</p>

		<p>7 сентября 2013 года, участники мультиспортивной приключенческой гонки Extra Mile, организованной
			Благотворительным фондом «Делойта», собрали 850 тыс. рублей, которые были направлены на реализацию
			благотворительных программ фонда «Даунсайд Ап». Между прочим, обычные люди, офисные работники и даже не
			спортсмены. В результате каждый из них получил множество положительных эмоций и массу впечатлений. Полные
			намерения достойно пройти все испытания, любители приключений покорили трассу, которая оказалась совсем не
			из легких: здесь было и ориентирование на пересеченной местности, и преодоление полосы препятствий, и
			велокросс. Ну и, конечно же, водный этап!</p>

		<div class="link_block">
			<span>Extra Mile 2013</span> <span><a href="">О мероприятии</a></span>
			<span><a href="">Фото-отчет</a></span>
		</div>
	</div>
	<div id="photo_carousel">
		<a href="/img/history_photo/photo1.jpg" data-lightbox="ExtraMile2013"><img src="/img/history_photo/photo1.jpg"></a>
		<a href="/img/history_photo/photo2.jpg" data-lightbox="ExtraMile2013"><img src="/img/history_photo/photo2.jpg"></a>
		<a href="/img/history_photo/photo3.jpg" data-lightbox="ExtraMile2013"><img src="/img/history_photo/photo3.jpg"></a>
		<a href="/img/history_photo/photo4.jpg" data-lightbox="ExtraMile2013"><img src="/img/leaders_teams/team_without_photo.jpg"></a>
		<a href="/img/history_photo/photo1.jpg" data-lightbox="ExtraMile2013"><img src="/img/leaders_teams/team_without_photo.jpg"></a>
		<a href="/img/history_photo/photo2.jpg" data-lightbox="ExtraMile2013"><img src="/img/leaders_teams/team_without_photo.jpg"></a>
		<a href="/img/history_photo/photo3.jpg" data-lightbox="ExtraMile2013"><img src="/img/leaders_teams/team_without_photo.jpg"></a>
		<a href="/img/history_photo/photo4.jpg" data-lightbox="ExtraMile2013"><img src="/img/leaders_teams/team_without_photo.jpg"></a>
	</div>
</div>
<div id="partners" class="text-center">
	<div class="container">
		<h1>Наши партнёры</h1>

		<p>Мы благодарим партнеров нашего мероприятия в 2013 году:</p>

		<div class="partners_table">
			<div class="row">
				<div class="col-xs-1"></div>
				<?php for ($i = 1;
				$i <= count($partners);
				$i++) : ?>
				<div class="col-xs-2"><?= $partners[$i - 1] ?></div>
				<?php if ($i % 5 == 0) : ?>
				<div class="col-xs-1"></div>
			</div>
			<div class="row">
				<div class="col-xs-1"></div>
				<?php endif ?>
				<?php endfor ?>
			</div>
		</div>
		<div class="partners_capabilities">
			<h4>Возможности для партнерства</h4>

			<p>Партнеры, присоединившиеся на раннем этапе, смогут принять участие в планировании мероприятия. Если у вас
				есть предложение о партнерстве, пожалуйста, напишите нам. Дополнительную информацию о мероприятии можно
				получить по электронной почте: <span>extramile@deloitte.ru</span></p>
		</div>
	</div>
</div>
<div id="about_downside_up" class="text-center">
	<div class="container about">
		<img src="/img/about_downside_up/downside_up_logo.png">

		<p>У воспитанников «Даунсайд Ап» есть самое главное ― родительская любовь и забота. Но им также нужны
			развивающие занятия со специалистами, которые фонд предоставляет бесплатно благодаря таким неравнодушным
			людям, как вы.</p>
	</div>
</div>
<div class="title_links">
	<div class="extra_mile_links">
		<span>Extra Mile 2014</span> <a href=""><img src="/img/title_links/extra_mile_link_vk.png"></a>
		<a href=""><img src="/img/title_links/extra_mile_link_fb.png"></a>
	</div>
	<div class="share_links pull-right">
		<span>Рассказать друзьям:</span> <a href=""><img src="/img/title_links/share_vk.png"></a>
		<a href="" target="_blank"><img src="/img/title_links/share_fb.png"></a>
		<a href="" target="_blank"><img src="/img/title_links/share_ok.png"></a>
		<a href="" target="_blank"><img src="/img/title_links/share_tw.png"></a>
		<a href="" target="_blank"><img src="/img/title_links/share_lj.png"></a>
	</div>
</div>
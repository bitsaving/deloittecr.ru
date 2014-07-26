<?php
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
		Form::button('Поддержать!', array(
			'id'    => 'btn_title_donate',
			'class' => 'btn text-center'
		))?>
	</div>
</div>
<div id="title_links">
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
	<a href="#fund_raising">Сбор средств</a> <a href="#">Этапы гонки</a> <a href="#">Правила и регистрация</a>
	<a href="#">Схема проезда</a> <a href="#">История Extra Mile</a> <a href="#">Наши партнеры</a>
	<img src="/img/menu_line.jpg">
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
						Form::button('Поддержать!', array(
							'class' => 'btn text-center btn_support_team'
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
						Form::button('Поддержать!', array(
							'class' => 'btn text-center btn_support_team'
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
						Form::button('Поддержать!', array(
							'class' => 'btn text-center btn_support_team'
						))?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

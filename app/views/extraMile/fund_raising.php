<?php

?>
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
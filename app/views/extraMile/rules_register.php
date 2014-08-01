<?php

?>
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
							'class'       => 'btn btn-info btn_reg',
							'data-toggle' => 'modal',
							'data-target' => '#team_registration',
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
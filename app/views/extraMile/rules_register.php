<?php
/**
 * @var string $text_title
 * @var string $registration
 * @var string $fee
 * @var string $funds
 * @var string $event
 * @var string $registration_text
 * @var string $fee_text
 * @var string $funds_text
 * @var string $event_text
 */
?>
<div id="rules_register">
	<div class="container text-center">
		<h1>Правила и регистрация</h1>

		<p><?= $text_title ?></p>

		<div class="common_info row text-center">
			<div class="col-md-3">
				<img src="/img/rules_register/info.png" class="reg_pic">

				<div class="info reg_info">
					<h3><?= $registration ?></h3>

					<p class="text-left"><?= $registration_text ?></p>

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
					<h3><?= $fee ?></h3>

					<p class="text-left"><?= $fee_text ?></p>
				</div>
			</div>
			<div class="col-md-3">
				<img src="/img/rules_register/info.png" class="reg_pic">

				<div class="info funds_info">
					<h3><?= $funds ?></h3>

					<p class="text-left"><?= $funds_text ?></p>
				</div>
			</div>
			<div class="col-md-3">
				<img src="/img/rules_register/info.png" class="reg_pic">

				<div class="info event_info">
					<h3><?= $event ?></h3>

					<p class="text-left"><?= $event_text ?></p>
				</div>
			</div>
		</div>
		<div class="download ">
			Подробное описание этапов и правил участия (*.pdf)
			<a href="/docs/Extra Mile rules PRINT.PDF" target="_blank" class="btn"><img src="/img/race_stages_btn.png"></a>
		</div>
	</div>
</div>

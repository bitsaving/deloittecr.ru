<?php
/**
 * @var string $first_subtitle
 * @var string $second_subtitle
 * @var string $third_subtitle
 * @var string $first_text
 * @var string $second_text
 * @var string $third_text
 * @var string $text_title
 */
?>
<div id="race_stages">
	<div class="container text-center">
		<h1>Этапы гонки</h1>

		<p><?= $text_title ?></p>
		<img src="/img/race_stages_img.jpg" class="race_stages_img">

		<div class="row text text-center">
			<div class="col-xs-4 ">
				<div class="description text-left">
					<h3><?= $first_subtitle ?></h3>

					<p><?= $first_text ?></p>
				</div>
			</div>
			<div class="col-xs-4">
				<div class="description text-left">
					<h3><?= $second_subtitle ?></h3>

					<p><?= $second_text ?></p>
				</div>
			</div>
			<div class="col-xs-4">
				<div class="description text-left">
					<h3><?= $third_subtitle ?></h3>

					<p><?= $third_text ?></p>
				</div>
			</div>
		</div>
		<div class="download ">
			Подробное описание этапов и правил участия (*.pdf)
			<a href="" class="btn"><img src="/img/race_stages_btn.png"></a>
		</div>
	</div>
</div>

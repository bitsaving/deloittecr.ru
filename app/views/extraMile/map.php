<?php
/**
 * @var string $first_subtitle
 * @var string $second_subtitle
 * @var string $first_text
 * @var string $second_text
 */

?>
<div id="map" class="text-center">
	<div id="google-map-canvas"></div>
	<div class="container">
		<h1>Схема проезда</h1>

		<div class="row text-center">
			<div class="col-xs-6">
				<div class="info_block by_car text-left">
					<h4><img src="/img/by_car.png"> <?= $first_subtitle ?></h4>

					<p><?= $first_text ?></p>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="info_block by_public_transport text-left">
					<h4><img src="/img/by_public_transport.png"> <?= $second_subtitle ?></h4>

					<p><?= $second_text ?></p>
				</div>
			</div>
		</div>
		<div class="download ">
			Версия карты для печати (*.pdf)
			<a href="/docs/EM_map_russian.pdf" target="_blank" class="btn"><img src="/img/race_stages_btn.png"></a>
		</div>
	</div>
</div>

<?php
if (!isset($partners)) {
	$partners = array();
}
/**
 * @var string $subtitle
 * @var string $text_opportunity
 * @var string $email_address
 */
?>
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
			<h4><?= $subtitle ?></h4>

			<p>
				<?= $text_opportunity ?>
				<a href="mailto:extramile@deloitte.ru?subject=Вопрос о партнёрстве"><?= $email_address ?></a>
			</p>
		</div>
	</div>
</div>

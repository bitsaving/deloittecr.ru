<?php
/**
 * @var string $line1
 * @var string $line2
 * @var string $funded_amount
 */
?>
<div id="title" class="text-center">
	<div class="ext_logo"><img src="img/title/ext_logo.png"></div>
	<div class="container text-center">
		<div class="funded_text ">
			<div class="line1"><?= $line1 ?></div>
			<div class="line2"><?= $line2 ?></div>
		</div>
	</div>
	<div class="funded_amount">
		<?= $funded_amount ?>
	</div>
	<div>
		<?=
		Form::button('<img src="/img/title/rub_btn.png"> Поддержать!', array(
			'id'    => 'btn_title_donate',
			'class' => 'btn btn-info text-center'
		))?>
	</div>
</div>

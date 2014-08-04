<?php
/**
 * @var string $first_paragraph
 * @var string $second_paragraph
 */
if (!isset($carousel)) {
	$carousel = [];
}

?>
<div id="history" class="text-center">
	<div class="container text-center">
		<h1>История Extra Mile</h1>

		<p><?= $first_paragraph ?></p>

		<p><?= $second_paragraph ?></p>

		<div class="link_block">
			<span>Extra Mile 2013</span> <span><a href="">О мероприятии</a></span>
			<span><a href="">Фото-отчет</a></span>
		</div>
	</div>
	<div id="photo_carousel">
		<?php foreach ($carousel as $photo) : ?>
			<a href="<?= $photo->image ?>" data-lightbox="ExtraMile2013"><img src="<?= $photo->image ?>"></a>
		<?php endforeach ?>

	</div>
</div>

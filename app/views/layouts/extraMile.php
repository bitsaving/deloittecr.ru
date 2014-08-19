<?php
if (empty($content)) {
	$content = '';
}

?>
<!DOCTYPE html>
<html>
<head>
	<?= View::make('layouts.inc.head.head') ?>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script type="text/javascript" src="/js/google_map.js"></script>

	<!-- Плагин фото-карусели -->
	<link rel="stylesheet" href="/js/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="/js/owl-carousel/owl.theme.css">
	<script src="/js/owl-carousel/owl.carousel.js"></script>

	<!-- Плагин light-box -->
	<script src="/js/lightbox/js/lightbox.min.js"></script>
	<link href="/js/lightbox/css/lightbox.css" rel="stylesheet" />

	<link type="text/css" href="/css/extraMile.css" rel="stylesheet" />
	<link type="text/css" href="/css/navbar.css" rel="stylesheet" />
	<link type="text/css" href="/css/extraMileModal.css" rel="stylesheet" />
	<script type="text/javascript" src="/js/extraMile.js"></script>
</head>
<body>
<div id="main">
	<?= View::make('layouts.inc.navbar.navbar') ?>
	<div class=""><?= $content ?></div>
</div>
</body>
</html>

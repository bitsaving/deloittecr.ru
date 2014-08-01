<?php
/**
 * @var $pages Page[]
 */

use DownsideUp\Models\Page;

if (empty($content)) {
	$content = '';
}

?>
<!DOCTYPE html>
<html>
<head>
	<?= View::make('layouts.inc.head.head') ?>
	<link type="text/css" href="/css/backend.css" rel="stylesheet" />
</head>
<body>
<div id="main">
	<?= View::make('layouts.inc.navbar.backendNavbar') ?>
	<div class=""><?= $content ?></div>
</div>
</body>
</html>

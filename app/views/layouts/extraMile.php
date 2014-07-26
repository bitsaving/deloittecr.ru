<?php
if (empty($content)) {
	$content = '';
}

?>
<!DOCTYPE html>
<html>
<head>
	<?= View::make('layouts.inc.head.head') ?>

</head>
<body>
<div id="main">
	<?= View::make('layouts.inc.navbar.navbar') ?>
	<div class=""><?= $content ?></div>
</div>
</body>
</html>

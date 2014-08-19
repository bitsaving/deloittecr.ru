<?php
if (empty($content)) {
	$content = '';
}

?>
<!DOCTYPE html>
<html>
<head>
	<link type="text/css" href="//code.jquery.com/ui/1.10.4/themes/redmond/jquery-ui.css" rel="stylesheet" />
	<script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.min.js "></script>
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.min.js "></script>

	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js "></script>
	<link type="text/css" href="//code.jquery.com/ui/1.10.4/themes/redmond/jquery-ui.css" rel="stylesheet" />
	<script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.min.js "></script>
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.min.js "></script>

	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js "></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">


	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Делойт для детей</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="/greenPage/fav.png" />
	<link href="/greenPage/basic_tmp.css" rel="stylesheet" type="text/css">
	<link type="text/css" href="/css/navbar.css" rel="stylesheet" />
</head>
<body>
<div id="main">
	<?= View::make('layouts.inc.navbar.navbar') ?>
	<div class="main_content"><?= $content ?></div>
</div>
</body>
</html>

<?php
/**
 * @var $pages Page[]
 */
use DownsideUp\Components\Helper;
use DownsideUp\Models\Page;

$pages = Helper::getPages();
?>


<div class="container">
	<header class="row">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="nav navbar-nav navbar-left">
						<a href="<?= URL::route('extramile') ?>" target="_blank"><img src="/img/navbar_logo.jpg"></a>
					</div>
					<ul class="nav navbar-nav">
						<li class=" <?= URL::current() == URL::route('pages') ? 'active' : '' ?> ">
							<a href="<?= URL::route('pages') ?>">Страницы:</a>
						</li>
						<?php foreach ($pages as $page) :
							$url = URL::route('pages') . '/' . $page->page; ?>
							<li class=" <?= strpos(URL::current(), $url) !== false ? 'active' : '' ?> ">
								<a href="<?= $url ?>"><?= $page->page_name ?></a>
							</li>
						<?php endforeach ?>

					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="<?= URL::route('logout') ?>">Logout</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</header>
</div>
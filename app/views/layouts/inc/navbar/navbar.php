<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<ul class="nav navbar-nav navbar-left">
			<li>
				<a href=""><img src="/img/navbar_logo.jpg"></a>
			</li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li class="<?= URL::current() == URL::route('extramile') ? 'active' : '' ?>">
				<a href="<?= URL::route('extramile') ?>">Extra Mile 2014</a>
			</li>
			<li class="<?= URL::current() == URL::route('green') ? 'active' : '' ?>">
				<a href="<?= URL::route('green') ?>">Озеленяя будущее</a>
			</li>

		</ul>
	</div>
</nav>
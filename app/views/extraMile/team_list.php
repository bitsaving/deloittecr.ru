<?php

?>
<div id="team_list" class="text-center">
	<div class="container">
		<div class="subtitle">
			<span class="subtitle_text">Список команд</span> <span class="sorting sort_active">по сборам</span>
			<span class="sorting">по алфавиту</span>
		</div>
		<div class="teams_table">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="/img/teams_table/team_table_bg.png">

						<div class="carousel-caption">
							<?= View::make('teamCards.tableCardsSmall') ?>
						</div>
					</div>
					<div class="item">
						<img src="/img/teams_table/team_table_bg.png">

						<div class="carousel-caption">
							<?= View::make('teamCards.tableCardsSmall') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

/**
 * @var array $teams
 */

if (count($teams) < 1) {
	return;
}


?>
<div id="team_list" class="text-center">
	<div class="container">
		<div class="subtitle">
			<span class="subtitle_text">Список команд</span> <span class="sorting sort_active" data-action="amount">по сборам</span>
			<span class="sorting" data-action="teamName">по алфавиту</span>
		</div>
		<div class="teams_table">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<?php for ($i = 1; $i <= (count($teams) - 1) / 12; $i++) : ?>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<?php endfor ?>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<?=
					View::make('extraMile.teamsList.teamsCarousel', [
						'teams' => $teams,
					])
					?>
				</div>
			</div>
		</div>
	</div>
</div>

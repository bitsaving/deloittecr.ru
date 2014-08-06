<?php
/**
 * @var string $text_title
 * @var array  $teams
 * @var Team   $team
 */
use DownsideUp\Models\Team;
use DownsideUp\Widget\ExtraMileWidget;

if ($teams == null) {
	return;
}
$maxAmount = ExtraMileWidget::getMaxAmount();

?>
<div id="fund_raising" class="text-center">
	<div class="container">
		<h1>Сбор средств</h1>
		<?php if (count($teams) < 3) {
			echo '</div></div>';

			return;
		}?>
		<p><?= $text_title ?> </p>

		<div class="leaders_team row">
			<div class="second_team col-xs-4 text-center">
				<div class="leader_card">
					<div class="name_logo">
						<div class="name text-left">
							<span class="team_name open_team_card" data-team-id="<?= $teams[1]->id ?>" data-toggle="modal" data-target="#team_card"><?= $teams[1]->teamName ?></span>
						</div>
						<div class="logo ">

						</div>
					</div>
					<div class="photo">
						<img src="<?= $teams[1]->photo ?>" class="img-rounded open_team_card" data-team-id="<?= $teams[1]->id ?>" data-toggle="modal" data-target="#team_card">
					</div>
					<div class="progress">
						<span class="team_amount"><?= number_format($teams[1]->amount, 0, '.', ' ') ?></span>

						<div class="progress-bar progress-bar-success" role="progressbar" style="width: <?= $teams[1]->amount / $maxAmount * 100 ?>%">
							<span><img src="/img/leaders_teams/rub_progress_bar.png" alt="" /></span>

						</div>
					</div>
					<div class="btn_support">
						<?=
						Form::button('<img src="/img/rub_for_btn.png"> Поддержать!', array(
							'class' => 'btn btn-info text-center btn_support_team'
						))?>
					</div>
				</div>
			</div>
			<div class="first_team col-xs-4 text-center">
				<div class="leader_card text-center">
					<div class="name">
						<div class="team_name open_team_card" data-team-id="<?= $teams[0]->id ?>" data-toggle="modal" data-target="#team_card"><?= $teams[0]->teamName ?></div>
					</div>
					<div class="logo">

					</div>
					<div class="photo">
						<img src="<?= $teams[0]->photo ?>" class="img-rounded open_team_card" data-team-id="<?= $teams[0]->id ?>" data-toggle="modal" data-target="#team_card">
					</div>
					<div class="btn_support">
						<?=
						Form::button('<img src="/img/rub_for_btn.png"> Поддержать!', array(
							'class' => 'btn btn-info text-center btn_support_team'
						))?>
					</div>
				</div>
			</div>
			<div class="third_team col-xs-4 text-center">
				<div class="leader_card">
					<div class="name_logo">
						<div class="name text-left">
							<span class="team_name open_team_card" data-team-id="<?= $teams[2]->id ?>" data-toggle="modal" data-target="#team_card"><?= $teams[2]->teamName ?></span>
						</div>
						<div class="logo ">

						</div>
					</div>
					<div class="photo">
						<img src="<?= $teams[2]->photo ?>" class="img-rounded open_team_card" data-team-id="<?= $teams[2]->id ?>" data-toggle="modal" data-target="#team_card">
					</div>
					<div class="progress">
						<span class="team_amount"><?= number_format($teams[2]->amount, 0, '.', ' ') ?></span>

						<div class="progress-bar progress-bar-success" role="progressbar" style="width:  <?= $teams[2]->amount / $maxAmount * 100 ?>%">
							<span><img src="/img/leaders_teams/rub_progress_bar.png" alt="" /></span>
						</div>
					</div>
					<div class="btn_support">
						<?=
						Form::button('<img src="/img/rub_for_btn.png"> Поддержать!', array(
							'class' => 'btn btn-info text-center btn_support_team'
						))?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

use DownsideUp\Models\Team;
use DownsideUp\Widget\ExtraMileWidget;

/**
 * @var Team    $team
 * @var integer $maxAmount
 */

$maxAmount = ExtraMileWidget::getMaxAmount();


?>
<div class="loadable_part">
	<div class="card_header">
		<div class="team_name">
			<?= $team->teamName ?>
		</div>
		<div class="team_logo pull-right">
		<img src="<?= $team->logo_img ?>">
		</div>
	</div>
	<div class="card_main">
		<img class="team_photo" src="<?= $team->photo ?>" />

		<div class="donation_bar">
			<div class="text-left">Собрали средств</div>
			<div class="progress">
				<span class="team_amount"><?= number_format($team->amount, 0, '.', ' ') ?></span>

				<div class="progress-bar progress-bar-success" role="progressbar" style="width: <?= $team->amount / $maxAmount * 100 ?>%">
					<span><img src="/img/leaders_teams/rub_progress_bar.png" alt="" /></span>

				</div>
			</div>
		</div>
		<div class="btn_support">
			<?=
			Form::button('<img src="/img/rub_for_btn.png"> Поддержать!', array(
				'class' => 'btn btn-info text-center btn_support_team'
			))?>
		</div>
	</div>
	<div class="card_text text-left">
		<div class="about_team">
			<h5>О команде</h5>

			<p><?= $team->aboutTeam ?></p>
		</div>
		<div class="crewman_list">
			<h5>Список участников</h5>

			<div class="row">
				<div class="col-sm-6">
					<ul>
						<li>1. <?= $team->crewman1 ?></li>
						<li>2. <?= $team->crewman2 ?></li>
					</ul>
				</div>
				<div class="col-sm-6">
					<ul>
						<li>3. <?= $team->crewman3 ?></li>
						<li>4. <?= $team->crewman4 ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="share_links text-center">
		<span>Поделиться:</span> <a href=""><img src="/img/social_links/share_vk.png"></a>
		<a href="" target="_blank"><img src="/img/social_links/share_fb.png"></a>
		<a href="" target="_blank"><img src="/img/social_links/share_ok.png"></a>
		<a href="" target="_blank"><img src="/img/social_links/share_tw.png"></a>
		<a href="" target="_blank"><img src="/img/social_links/share_lj.png"></a>
	</div>
</div>
<?php
/**
 * @var Team    $team
 * @var integer $maxAmount
 */
use DownsideUp\Models\Team;

?>
<div class="col-md-4 col-xs-6">
	<div class="team_card_small">
		<div class="row">
			<div class="col-xs-8">
				<div class="name text-left">
					<?= $team->teamName ?>
				</div>
				<div class="progress">
					<span class="team_amount"><?= number_format($team->amount, 0, '.', ' ') ?></span>

					<div class="progress-bar progress-bar-success" role="progressbar" style="width: <?= $team->amount / $maxAmount * 100 ?>%">
						<span><img src="/img/teams_table/team_cell_rub.png" alt="" /></span>

					</div>

				</div>
			</div>
			<div class="col-xs-4">
				<div class="team_cell_btn text-center">
					<?=
					Form::button('<img src="/img/rub_for_btn.png">', array(
						'class' => 'btn btn-info text-center team_card_sm_btn'
					))?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
/**
 * @var Team $team
 */
use DownsideUp\Models\Team;

if (empty($content)) {
	$content = '';
}
?>
<div class="col-md-4 col-xs-6">
	<div class="team_card_small">
		<div class="row">
			<div class="col-xs-8">
				<div class="name text-left">
					<?= $team ?>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" style="width: 80%">
						<span><img src="/img/teams_table/team_cell_rub.png" alt="" /></span>
						<span class="">50 000</span>
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


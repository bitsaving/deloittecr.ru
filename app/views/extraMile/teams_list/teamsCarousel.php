<?php
/**
 * @var array   $teams
 * @var integer $maxAmount
 */
use DownsideUp\Widget\ExtraMileWidget;

$maxAmount = count($teams) > 1 ? ExtraMileWidget::getMaxAmount() : $teams[0]->amount;
if ($maxAmount <= 0) {
	$maxAmount = 100;
}
$i = 1;
?>
<div class="item active">
	<img src="/img/teams_table/team_table_bg.png">

	<div class="carousel-caption">
		<?php foreach ($teams as $team) : ?>
		<?php if ((($i) % 12 == 0)) : ?>
		<?= View::make('extraMile.teams_list.teamCardsSmall', ['team' => $team, 'maxAmount' => $maxAmount]) ?>
	</div>
</div>
<div class="item">
	<img src="/img/teams_table/team_table_bg.png">

	<div class="carousel-caption">
		<?php else : ?>
			<?= View::make('extraMile.teams_list.teamCardsSmall', ['team' => $team, 'maxAmount' => $maxAmount]) ?>
		<?php
		endif ?>
		<?php $i++; ?>
		<?php endforeach ?>

	</div>
</div>
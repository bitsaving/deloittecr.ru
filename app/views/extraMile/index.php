<?php
/**
 * @var $partners array
 */
if (!isset($partners)) {
	$partners = array();
}

echo View::make('extraMile.modals.registration');
?>
<?= View::make('extraMile.title') ?>
<?= View::make('extraMile.links') ?>
<?= View::make('extraMile.big_menu') ?>
<?= View::make('extraMile.fund_raising') ?>
<?= View::make('extraMile.team_list') ?>
<?= View::make('extraMile.race_stages') ?>
<?= View::make('extraMile.rules_register') ?>
<?= View::make('extraMile.map') ?>
<?= View::make('extraMile.history') ?>
<?= View::make('extraMile.partners', ['partners' => $partners]) ?>
<?= View::make('extraMile.about_downside_up') ?>
<?= View::make('extraMile.footer') ?>


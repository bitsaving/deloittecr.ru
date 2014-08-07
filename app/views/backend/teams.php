<?php
/**
 * @var Team $teams
 * @var Team $team
 */
use DownsideUp\Models\Team;

echo View::make('backend.inc.editTeamModal');
echo View::make('backend.inc.newTeamModal');
?>
<?=
Form::button('Новая команда', array(
	'class'       => 'btn btn-sm btn-info btnNewTeam',
	'data-toggle' => 'modal',
	'data-target' => '#team_new',
)) ?>
	<table class="table table-striped table-hover" id="teamsTable">
		<tr>
			<td><b>ID</b></td>
			<td><b>Название</b></td>
			<td><b>Компания</b></td>
			<td><b>Контактное лицо</b></td>
			<td><b>Телефон</b></td>
			<td><b>E-mail</b></td>
			<td><b>Сумма</b></td>
			<td><b>Участники</b></td>
			<td><b>Модерация</b></td>
			<td><b>Действия</b></td>
		</tr>
		<?php foreach ($teams as $team): ?>
			<tr>
				<td><?= $team->id ?></td>
				<td><?= $team->teamName ?></td>
				<td><?= $team->company ?></td>
				<td><?= $team->contactPerson ?></td>
				<td><?= $team->phone ?></td>
				<td><?= $team->email ?></td>
				<td><?= $team->amount ?></td data-team-id = "<?= $team->id ?>">
				<td>
					<div class="crewman">
						<div class="btn-group">
							<button class="btn btn-default dropdown-toggle" type="button" id="crewman<?= $team->id ?>" data-toggle="dropdown">
								Участнники <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="crewman<?= $team->id ?>">
								<?php for ($i = 1; $i <= 6; $i++) :
									$crewman = 'crewman' . $i;
									if ($team->$crewman != '') :?>
										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#"><?= $team->$crewman ?></a>
										</li>
									<?php endif ?>
								<?php endfor ?>
							</ul>
						</div>
					</div>
				</td>

				<td>
					<?=
					Form::checkbox('active', '', $team->active, array(
						'class' => 'checkbox',
						'id'    => $team->id,
					)) ?>
				</td>
				<td>
					<?=
					Form::button('Изменить', array(
						'class'       => 'btn btn-sm btn-info btnEdit',
						'data-team'   => $team,
						'data-toggle' => 'modal',
						'data-target' => '#team_edit',
					)) ?>
				</td>
			</tr>


		<?php endforeach ?>

	</table>
<?= $teams->links() ?>
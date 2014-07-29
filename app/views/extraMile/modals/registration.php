<?php

?>
<div class="modal fade" id="team_registration" role="dialog" aria-labelledby="registration" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content text-center">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				<img src="/img/modal_reg/close_icon.png">
			</button>
			<div class="window">
				<h1>Регистрация</h1>

				<p>Какой-то текст, если нужен.</p>
				<hr>







				<?=
				Form::button('Отправить', array(
					'id'    => 'saveChangeRule',
					'class' => 'btn btn-info btn_registration',
				)); ?>
			</div>

		</div>
	</div>
</div>


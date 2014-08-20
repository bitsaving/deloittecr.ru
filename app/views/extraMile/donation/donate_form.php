<?php

?>
<div class="modal fade" id="donate_form" role="dialog" aria-labelledby="donate_form" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content text-center">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				<img src="/img/donate_form/close_icon.png">
			</button>
			<div class="donate_form_body text-center">
				<div class="donate_text">
					<div class="common_donate">
						<h2><img src="/img/donate_form/rub_icon.png">Я хочу поддержать</h2>

						<p>детей благотворительного фонда «Даунсайд Ап»</p>
						<img src="/img/donate_form/downside_logo.png">
					</div>
					<div class="team_donate">
						<h2><img src="/img/donate_form/rub_icon.png">Я хочу поддержать команду</h2>

						<div class="teamName">

						</div>
						<p>и детей благотворительного фонда<br> «Даунсайд Ап»</p>
					</div>
				</div>
				<div class="donate_form">
					<form name=ShopForm method="POST" action="https://money.yandex.ru/eshop.xml">
					<input type="hidden" name="scid" value="56210">
						<input type="hidden" name="ShopID" value="18673"> <input type="hidden" name="teamId" value="0">

						<div class="form-group">
							<div class="field text-left">
								<?= Form::label('CustomerNumber', 'ФИО Плательщика', array('class' => 'control-label')) ?>

								<div class="">
									<?=
									Form::input('text', 'CustomerNumber', '', array(
										'placeholder' => '',
										'class'       => 'form-control input-lg',
										'id'          => 'CustomerNumber',
										'required'    => 'required',
									));
									?>
								</div>
							</div>
							<div class="field text-left">
								<?= Form::label('Sum', 'Сумма (в рублях)', array('class' => 'control-label')) ?>

								<div class="">
									<?=
									Form::input('text', 'Sum', '', array(
										'placeholder' => '',
										'class'       => 'form-control input-lg',
										'id'          => 'Sum',
										'required'    => 'required',
									));
									?>
								</div>
							</div>
						</div>
						<div class="form-group text-left">
							Способ оплаты:
							<div class="row radio_block">
								<div class="col-sm-6">
									<div class="radio">
										<input name="paymentType" value="PC" type="radio" checked="checked" id="radioPC">
										<label for="radioPC">Со счета в Яндекс.Деньгах</label>
									</div>
									<div class="radio">
										<input name="paymentType" value="AC" type="radio" id="radioAC">
										<label for="radioAC">С банковской карты</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio">
										<input name="paymentType" value="WM" type="radio" id="radioWM">
										<label for="radioWM">Со счета WebMoney</label>
									</div>
									<div class="radio">
										<input name="paymentType" value="GP" type="radio" id="radioGP">
										<label for="radioGP">По коду через терминал</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<?=
							Form::submit('Оплатить', array(
								'class' => 'btn btn-lg btn-success text-center',
							))?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

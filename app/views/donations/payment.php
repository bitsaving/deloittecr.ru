<?php

?>
<form name=ShopForm method="POST" action="https://demomoney.yandex.ru/eshop.xml">
	<font face=tahoma size=2>

		<input type="hidden" name="scid" value="56210"> <input type="hidden" name="ShopID" value="18673">

		Идентификатор клиента/Номер заказа:<br> <input type=text name="CustomerNumber" size="43"><br><br> Сумма:<br>
		<input type=text name="Sum" size="43"><br><br>

		Способ оплаты:<br><br> <input name="paymentType" value="PC" type="radio" checked="checked" />Со счета в
		Яндекс.Деньгах<br /> <input name="paymentType" value="AC" type="radio" />С банковской карты<br />
		<input name="paymentType" value="WM" type="radio" />Со счета WebMoney<br />
		<input name="paymentType" value="GP" type="radio" />По коду через терминал<br /><br />
		<input type=submit value="Оплатить"><br>
</form>
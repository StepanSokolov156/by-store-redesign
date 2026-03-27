<?php
if($modx->event->name != 'msOnCreateOrder') return;

$token = $modx->getOption('mstelegram_token', null, false);
$recipients = explode(',', $modx->getOption('mstelegram_recipients', null, ''));

$contacts = $modx->getObject('msOrderAddress', array('id'=> $msOrder->address));
$_products = $msOrder->getMany('Products');

// Список товаров в заказе
$i = 0;
$products = '';
foreach ($_products as $product) {
    $i++;
    $products .= "{$i}. {$product->name} ({$product->count} шт.)";
}

// Текст сообщения
$message = "
Новый заказ #{$msOrder->num}
на сумму {$msOrder->cost} р.
-----
{$products}
-----
Телефон: {$contacts->phone}";

$message = urlencode($message);
foreach($recipients as $id){
	$id = trim($id);
	if(!$id) continue;
    $url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$id}&text={$message}";
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true));
    $result = curl_exec($ch);
    curl_close($ch);
}
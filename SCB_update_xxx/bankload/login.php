<?php
date_default_timezone_set('Asia/Bangkok');
error_reporting(0);
require_once 'simple_html_dom.php';
require_once 'function.php';
$PATH = dirname(__FILE__).'/';
$COOKIEFILE = $PATH.'protect/scb_new-cookies';
//header("Content-type: application/json");
 

for($i=0;$i < count($_POST['bank_u']);$i++){
	$USERNAME = $_POST['bank_u'][$i];
	$PASSWORD = $_POST['bank_p'][$i];
	$BANK_ID = $_POST['bank_id'][$i];

$ch[$i] = curl_init();
curl_setopt($ch[$i], CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch[$i], CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.6 (KHTML, like Gecko) Chrome/16.0.897.0 Safari/535.6");
curl_setopt($ch[$i], CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch[$i], CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch[$i], CURLOPT_SSLVERSION, CURL_SSLVERSION_DEFAULT);
curl_setopt($ch[$i], CURLOPT_CAINFO, $PATH."cacert.pem");
curl_setopt($ch[$i], CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch[$i], CURLOPT_COOKIEJAR, $COOKIEFILE);
curl_setopt($ch[$i], CURLOPT_COOKIEFILE, $COOKIEFILE);
curl_setopt($ch[$i], CURLOPT_HEADER, 0);
curl_setopt($ch[$i], CURLOPT_TIMEOUT, 120);

//*
$form_field = array();

$form_field['LOGIN']  = $USERNAME;
$form_field['PASSWD'] = $PASSWORD;
$form_field['LANG'] = "T";
$post_string[$i] = '';
foreach($form_field as $key => $value) {
    $post_string[$i] .= $key . '=' . urlencode($value) . '&';
}
$post_string[$i] = substr($post_string[$i], 0, -1);

//*
// login
curl_setopt($ch[$i], CURLOPT_REFERER, 'https://www.scbeasy.com/online/easynet/page/lgn/login.aspx');
curl_setopt($ch[$i], CURLOPT_URL, 'https://www.scbeasy.com/online/easynet/page/lgn/login.aspx');
curl_setopt($ch[$i], CURLOPT_POST, 1);
curl_setopt($ch[$i], CURLOPT_POSTFIELDS, $post_string[$i]);
$data = curl_exec($ch[$i]);

$html = str_get_html($data);
$form_field = array();
foreach($html->find('form input') as $element) {
	$form_field[$element->name] = $element->value;
}
$post_string[$i] = '';
foreach($form_field as $key => $value) {
    $post_string[$i] .= $key . '=' . urlencode($value) . '&';
}
$post_string[$i] = substr($post_string[$i], 0, -1);

// welcom page
curl_setopt($ch[$i], CURLOPT_URL, 'https://www.scbeasy.com/online/easynet/page/acc/acc_mpg_all.aspx');
curl_setopt($ch[$i], CURLOPT_POST, 1);
curl_setopt($ch[$i], CURLOPT_POSTFIELDS, $post_string[$i]);
$data = curl_exec($ch[$i]);

$html = str_get_html($data);
$table = $html->find('table[class="pd_rt_10"]', 0);
if (!(empty($table))) {
	foreach($table->find('tr[class="hd_en_blk_14_tpbt5_rtlt10"]') as $tr) {
		$list['total'] = str_replace(',','', clean($tr->find('td',1)->plaintext));
		
	}
	$list['bank_id'] = $BANK_ID;
	$total[] = $list;
}



//*/
$form_field = array();

$form_field['total']  = $list['total'];
$form_field['bank_id'] = $BANK_ID;
$post_string[$i] = '';
foreach($form_field as $key => $value) {
    $post_string[$i] .= $key . '=' . urlencode($value) . '&';
}
$post_string[$i] = substr($post_string[$i], 0, -1);
// welcome page
curl_setopt($ch[$i], CURLOPT_REFERER, $_POST['bank_url']);
curl_setopt($ch[$i], CURLOPT_URL, $_POST['bank_url']);
curl_setopt($ch[$i], CURLOPT_POST, 1);
curl_setopt($ch[$i], CURLOPT_POSTFIELDS, $post_string[$i]);
$data = curl_exec($ch[$i]);

$html = str_get_html($data);
 
}


?>


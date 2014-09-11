<?php
require_once("./include/config.php");
require_once("./include/functions.php");

// Get Values from Index Page and Decrypt Them
$custid    = isset($_GET['custid'])		? decrypt($_GET['custid'])		: 0;
//$clid	   = isset($_GET['clid'])		? decrypt($_GET['clid'])		: 0;
$clid = isset($_GET['clid']) ? (int) $_GET['clid'] : 0;
$offer_code = isset($_GET['offer_code'])	? decrypt($_GET['offer_code'])	: '';
$fullname  = isset($_GET['fullname'])	? decrypt($_GET['fullname'])	: '';

$fname      = isset($_GET['fname'])	? decrypt($_GET['fname'])		: '';
$lname      = isset($_GET['lname'])	? decrypt($_GET['lname'])		: '';
$email      = isset($_GET['email'])		? decrypt($_GET['email'])		    : '';
$address    = isset($_GET['address'])	? decrypt($_GET['address'])		    : '';
$city       = isset($_GET['city'])      ? decrypt($_GET['city'])		    : '';
$state      = isset($_GET['state'])	    ? decrypt($_GET['state'])		    : '';
$zip        = isset($_GET['zip'])	    ? decrypt($_GET['zip'])             : '';
$country    = 'US';
$h_phone     = isset($_GET['h_phone'])	    ? decrypt($_GET['h_phone'])		    : '';
$w_phone     = isset($_GET['w_phone'])	    ? decrypt($_GET['w_phone'])		    : '';

$invoice_id      = isset($_GET['invoice_id'])		? decrypt($_GET['invoice_id'])		    : '';
$order_id        = isset($_GET['order_id'])		    ? decrypt($_GET['order_id'])		    : '';
$trans_id        = isset($_GET['trans_id'])		    ? decrypt($_GET['trans_id'])		    : '';

$ship_info_1      = isset($_GET['ship_info_1'])		? decrypt($_GET['ship_info_1'])		    : '';
$ship_info_2      = isset($_GET['ship_info_2'])		? decrypt($_GET['ship_info_2'])		    : '';

$order_amount     = isset($_GET['order_amount'])	? decrypt($_GET['order_amount'])		: 0;

$upsell_1         = isset($_GET['upsell_1'])	? decrypt($_GET['upsell_1'])		: 0;
$upsell_2         = isset($_GET['upsell_2'])	? decrypt($_GET['upsell_2'])		: 0;

$deliveryDate = getDeliveryDate();
?>
<?php
error_reporting(0); 
//ini_set( 'display_errors','1'); 
session_start();
require_once("functions.php");
/**
 * Recording Affiliate Clicks
 * Note: To record clicks for this offer, you must pass aff and pgid in the URL
 * For e,g:  http://www.natural-acai-berry.com/offer15/?cmpid=xxxx&aff=15&pgid=247
 */
$aff  = isset($_GET['aff']) && $_GET['aff'] > 0 ? (int) $_GET['aff'] 	: 0;
$pgid = isset($_GET['pgid']) && $_GET['pgid'] > 0 ? (int) $_GET['pgid']	: 0;

// Record Affiliate Click and pass click id to record conversion via api/sale.php
/*
if ($aff > 0 && $pgid > 0 && $_SERVER['SCRIPT_NAME']=='/index.php') {
	$clickid = generateAffiliateClick($aff, $pgid);	
}
*/
/**
 * Constants for this offer
 */
 
 
 
 
// If Exit Popup is enabled
$exit_discount = true;

// Link of campaign
define ("CAMPAIGN_LINK", "http://tinyurl.com/cleanser-aol");

define("LEAD_API_URL","http://www.safedataxchange.com/create_lead_sync.php");
define("SALE_API_URL","http://www.safedataxchange.com/process_sync.php");

if (!defined('SITE_URL'))define("SITE_URL","www.antiaging-fame-serum.com");
if (!defined('SITE_NAME'))define("SITE_NAME","Antiaging Fame Serum");
if (!defined('SITE_PH_NO'))define("SITE_PH_NO","+44(0)20 3357 4910 | +44 (0)20 3129 3635");
if (!defined('SITE_EMAIL'))define("SITE_EMAIL","customerservice@antiaging-fame-serum.com");
if (!defined('CANCEL_EMAIL'))define("CANCEL_EMAIL","cancel@antiaging-fame-serum.com");


// New Veriables Settings 
if (!defined('UK_SITE_PH_NO'))define("UK_SITE_PH_NO","+44(0)20 3357 4910 | +44 (0)20 3129 3635");
if (!defined('US_SITE_PH_NO'))define("US_SITE_PH_NO","+1-844-614-7074");


if (!defined('US_COMPANY_NAME'))define("US_COMPANY_NAME","Unified Labs Ltd.");
if (!defined('UK_COMPANY_NAME'))define("UK_COMPANY_NAME","Unified Labs Ltd.");

if (!defined('US_COMPANY_ADDRESS'))define("US_COMPANY_ADDRESS","1285 Baring Blvd 297, Sparks NV 89434");
if (!defined('UK_COMPANY_ADDRESS'))define("UK_COMPANY_ADDRESS", "Littlemead Cranleigh Surrey GU6 8ND");

if (!defined('COMPANY_NAME'))define("COMPANY_NAME","Antiaging Fame Serum");
if (!defined('COMPANY_ADDRESS'))define("COMPANY_ADDRESS","Littlemead Cranleigh Surrey GU6 8ND");
if (!defined('COMPANY_ADDRESS_PP'))define("COMPANY_ADDRESS_PP","Littlemead Cranleigh Surrey GU6 8ND");
if (!defined('RETURN_ADDRESS_US'))define("RETURN_ADDRESS_US","1285 Baring Blvd 297, Sparks NV 89434");
if (!defined('RETURN_ADDRESS_UK'))define("RETURN_ADDRESS_UK","Littlemead Cranleigh Surrey GU6 8ND");


if (!defined('ACTUAL_AMOUNT'))define("ACTUAL_AMOUNT","99.00");
if (!defined('ACTUAL_AMOUNT_US'))define("ACTUAL_AMOUNT_US","99.00");
if (!defined('ACTUAL_AMOUNT_UK'))define("ACTUAL_AMOUNT_UK","95.00");

if (!defined('DESCRIPTOR'))define("DESCRIPTOR","Antiaging Fame Serum");
if (!defined('MERCHANT'))define("MERCHANT","Antiaging Fame Serum");
if (!defined('TOTAL_AMOUNT'))define("TOTAL_AMOUNT","$105.95 ($99.00 + $6.95 Shipping & Handling)");
if (!defined('TOTAL_AMOUNT_US'))define("TOTAL_AMOUNT_US","$105.95 ($99.00 + $6.95 Shipping & Handling)");
if (!defined('TOTAL_AMOUNT_UK'))define("TOTAL_AMOUNT_UK","&pound;99.95 (&pound;95.00 + &pound;4.95 Shipping & Handling)");


if (!defined('US_REGLAR_PRICE'))define("US_REGLAR_PRICE","99.00");
if (!defined('UK_REGLAR_PRICE'))define("UK_REGLAR_PRICE","95.00");

if (!defined('US_DISCOUNT_PRICE'))define("US_DISCOUNT_PRICE","99.00");
if (!defined('UK_DISCOUNT_PRICE'))define("UK_DISCOUNT_PRICE","95.00");

if (!defined('US_EXCLUSIVE_PRICE'))define("US_EXCLUSIVE_PRICE","$99.00 + $6.95");
if (!defined('UK_EXCLUSIVE_PRICE'))define("UK_EXCLUSIVE_PRICE","&pound;95.00 + &pound;4.95");

if (!defined('COMPANY_NO'))define("COMPANY_NO","225"); //  150:Equinox DNA, 159:EquinoxBeauties,  224: EnVisage
if (!defined('PRODUCT_ID'))define("PRODUCT_ID","509");		// 351: Equinox Trial,   501: EnVisage Trial
if (!defined('PRODUCT_NAME'))define("PRODUCT_NAME","Antiaging Fame Serum");
if (!defined('PRODUCT_NAME_SHORT'))define("PRODUCT_NAME_SHORT","Equinox");
if (!defined('QUANTITY'))define("QUANTITY","1");

// Define Upsell Products
$upsell_products = array(
    497 => array('name'=>'JuicyLipsXL (One-Time)','price'=>'19.99', 'shipping'=>'0.00'),
    498 => array('name'=>'EyeLash Extra (One-Time)','price'=>'19.99', 'shipping'=>'0.00')
);

// Envisage Upsell

if (!defined('UPSELL_PRODUCT_1'))define("UPSELL_PRODUCT_1","Antiaging Fame Serum");
if (!defined('UPSELL_PRODUCT_ID_1'))define("UPSELL_PRODUCT_ID_1","499");
if (!defined('UPSELL_PRODUCT_AMOUNT_1'))define("UPSELL_PRODUCT_AMOUNT_1","29.99");
if (!defined('UPSELL_PRODUCT_SHIP_AMT_1'))define("UPSELL_PRODUCT_SHIP_AMT_1","0.00");
if (!defined('UPSELL_PRODUCT_QUANTITY_1'))define("UPSELL_PRODUCT_QUANTITY_1","1");

if (!defined('UPSELL_PRODUCT_1')) define("UPSELL_PRODUCT_1","U-Digest");
if (!defined('UPSELL_PRODUCT_ID_1'))define("UPSELL_PRODUCT_ID_1","396");
if (!defined('UPSELL_PRODUCT_AMOUNT_1'))define("UPSELL_PRODUCT_AMOUNT_1","23.99");
if (!defined('UPSELL_PRODUCT_SHIP_AMT_1'))define("UPSELL_PRODUCT_SHIP_AMT_1","0.00");
if (!defined('UPSELL_PRODUCT_QUANTITY_1'))define("UPSELL_PRODUCT_QUANTITY_1","1");

if (!defined('UPSELL_PRODUCT_2'))define("UPSELL_PRODUCT_2","Pro-B");
if (!defined('UPSELL_PRODUCT_ID_2'))define("UPSELL_PRODUCT_ID_2","397");
if (!defined('UPSELL_PRODUCT_AMOUNT_2'))define("UPSELL_PRODUCT_AMOUNT_2","15.99");
if (!defined('UPSELL_PRODUCT_AMOUNT_2'))define("UPSELL_PRODUCT_AMOUNT_2","0.00");
if (!defined('UPSELL_PRODUCT_QUANTITY_2'))define("UPSELL_PRODUCT_QUANTITY_2","1");
if (!defined('STANDARD_SHIPPING'))define("STANDARD_SHIPPING","USPS First Class Shipping");
if (!defined('SHIP_AMT'))define("SHIP_AMT","6.95");
if (!defined('SHIP_DISCOUNT_AMT'))define("SHIP_DISCOUNT_AMT","1.95");
if (!defined('EXPRESS_SHIPPING'))define("EXPRESS_SHIPPING","Express Shipping");
if (!defined('EXPRESS_SHIPPING_AMOUNT'))define("EXPRESS_SHIPPING_AMOUNT","0.00");

//define("LIVE_AGENT_ID","66");


//14953 Heritage crest Way Suite C Bluffdale, UT 84065
//define("TRIAL_PERIOD","14 Days");
//define("FREE_SUPPLY_PERIOD","14 Days");
//define("SUPPLY_PERIOD","30 Days");

define("HTTP","http://");
define("HTTPS","https://");
//define("HTTPS","https://");

// Set Protocol Dynamically (HTTP / HTTPS)
$protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';  
define("WEB_ROOT", $protocol.SITE_URL.'/');
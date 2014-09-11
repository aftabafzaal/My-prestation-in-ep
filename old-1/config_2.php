<?
session_start();
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

define("SITE_URL","www.xtra-lash.com");
define("SITE_NAME","Xtra Lash");
define("SITE_PH_NO","1-877-880-7729");
define("SITE_EMAIL","customersupport@xtra-lash.com");


define("COMPANY_NO","225"); //  150:Equinox DNA, 159:EquinoxBeauties,  224: EnVisage
define("PRODUCT_ID","509");		// 351: Equinox Trial,   501: EnVisage Trial
define("PRODUCT_NAME","Xtra Lash");
define("PRODUCT_NAME_SHORT","xtralash");
define("QUANTITY","1");

// Define Upsell Products
$upsell_products = array(
    497 => array('name'=>'JuicyLipsXL (One-Time)','price'=>'19.99', 'shipping'=>'0.00'),
    498 => array('name'=>'EyeLash Extra (One-Time)','price'=>'19.99', 'shipping'=>'0.00')
);

// Envisage Upsell
define("UPSELL_PRODUCT_1","EnVisage Facelift Serum");
define("UPSELL_PRODUCT_ID_1","499");
define("UPSELL_PRODUCT_AMOUNT_1","29.99");
define("UPSELL_PRODUCT_SHIP_AMT_1","0.00");
define("UPSELL_PRODUCT_QUANTITY_1","1");

/*
define("UPSELL_PRODUCT_1","U-Digest");
define("UPSELL_PRODUCT_ID_1","396");
define("UPSELL_PRODUCT_AMOUNT_1","23.99");
define("UPSELL_PRODUCT_SHIP_AMT_1","0.00");
define("UPSELL_PRODUCT_QUANTITY_1","1");


define("UPSELL_PRODUCT_2","Pro-B");
define("UPSELL_PRODUCT_ID_2","397");
define("UPSELL_PRODUCT_AMOUNT_2","15.99");
define("UPSELL_PRODUCT_SHIP_AMT_2","0.00");
define("UPSELL_PRODUCT_QUANTITY_2","1");
*/

define("STANDARD_SHIPPING","USPS First Class Shipping");
define("SHIP_AMT","4.95");
define("SHIP_DISCOUNT_AMT","1.95");
define("EXPRESS_SHIPPING","Express Shipping");
define("EXPRESS_SHIPPING_AMOUNT","0.00");


//define("LIVE_AGENT_ID","66");

define("COMPANY_NAME","xtra lash");
//define("COMPANY_ADDRESS","Suite 100, 545 West 1300 North, Springville, UT 84663.");
define("COMPANY_ADDRESS","14953 Heritage crest Way Suite C Bluffdale, UT 84065");
define("COMPANY_ADDRESS_PP","14953 Heritage,<br />crest Way Suite C,<br />Bluffdale, UT - 84065.<br />");
define("RETURN_ADDRESS_US","1285 Baring Blvd 297, Sparks NV 89434");
define("RETURN_ADDRESS_UK","1285 Baring Blvd 297, Sparks NV 89434");
//14953 Heritage crest Way Suite C Bluffdale, UT 84065
//define("TRIAL_PERIOD","14 Days");
//define("FREE_SUPPLY_PERIOD","14 Days");
//define("SUPPLY_PERIOD","30 Days");
define("ACTUAL_AMOUNT","99.00");
define("ACTUAL_AMOUNT_US","99.00");
define("ACTUAL_AMOUNT_UK","85.00");

define("DESCRIPTOR","Xtra Lash");
define("MERCHANT","Xtra Lash");
define("TOTAL_AMOUNT","$105.95 ($99.00 + $6.95 Shipping & Handling)");
define("TOTAL_AMOUNT_US","$105.95 ($99.00 + $6.95 Shipping & Handling)");
define("TOTAL_AMOUNT_UK","&pound;91.95 (&pound;85.00 + &pound;6.95 Shipping & Handling)");


// New Veriables Settings
define("US_SITE_PH_NO","1-877-880-7729");
define("UK_SITE_PH_NO","(0)15 1808 0845");


define("US_REGLAR_PRICE","99.00");
define("UK_REGLAR_PRICE","85.00");

define("US_DISCOUNT_PRICE","99.00");
define("UK_DISCOUNT_PRICE","85.00");

define("US_EXCLUSIVE_PRICE","$99.00 + $6.95");
define("UK_EXCLUSIVE_PRICE","85.00 + &pound;4.95");

define("US_COMPANY_NAME","Sheridan Labs Inc");
define("UK_COMPANY_NAME","Sheridan Labs Ltd.");

define("US_COMPANY_ADDRESS", "14953 Heritagecrest Way Suite C, <br />Bluffdale, <br />UT - 84065");
define("UK_COMPANY_ADDRESS", "11 Church Road <br />Great Bookham, Surrey<br /> KT23 3PB ");

define("HTTP","http://");
define("HTTPS","https://");
//define("HTTPS","https://");

// Set Protocol Dynamically (HTTP / HTTPS)
$protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';  
define("WEB_ROOT", $protocol.SITE_URL.'/');
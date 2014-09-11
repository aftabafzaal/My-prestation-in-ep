<?php
require_once("./include/config.php");
require_once("./include/functions.php");

// Check if Billing Info Page is called directly
if (isset($_GET['home'])) {
    switch ($_GET['home']) {
        case 'index':
          $home = 'index';
        break;
        
        case 'billing':
            $home = 'billing';
        break;
        
        default:
            $home = 'index';
        break;
    }
} else {
    $home = 'index';
}

// Initial Variables from URL
$error   = array();
$debug  = isset($_REQUEST['debug']) && $_REQUEST['debug']==1 ? 1 : 0;
$upsells     = '';
$order_amount = ACTUAL_AMOUNT;

// Configuration
$javascript_validation  = false;
$request_url            = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$referer	            = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$ip 		            = $_SERVER['REMOTE_ADDR'];
$arrctype               = array("Visa","Mastercard");


// Upsell EnVisage
$billing_upsell = isset($_REQUEST['billing_upsell']) && $_REQUEST['billing_upsell']==1 ? 1 : 0;  

// Get Values from Index Page and Decrypt Them
if ($home=='index') {
    // Affiliate Info from URL
    $pgid         = isset($_GET['pgid'])	    ? decrypt($_GET['pgid'])             : 0;
    $affid        = isset($_GET['aff'])	        ? decrypt($_GET['aff'])              : 0;
    $subid        = isset($_GET['subid'])	    ? decrypt($_GET['subid'])            : '';    
}

// If Billing
if ($home=='billing') {
    $pgid		 = isset($_REQUEST['pgid'])  && $_REQUEST['pgid'] > 0 	? (int) $_REQUEST['pgid']  : 0;
    $clid		 = isset($_REQUEST['clid'])  && $_REQUEST['clid'] > 0 	? (int) $_REQUEST['clid']  : 0;
    $affid		 = isset($_REQUEST['aff'])   && $_REQUEST['aff'] > 0  	? (int) $_REQUEST['aff']   : 0;
    $parentaff	 = isset($_REQUEST['paff'])  && $_REQUEST['paff'] > 0 	? (int) $_REQUEST['paff']  : 0;
    $subid		 = isset($_REQUEST['subid']) && $_REQUEST['subid'] !='' ? 		$_REQUEST['subid'] : 0;
}


    $fname      = isset($_GET['fname'])	? decrypt($_GET['fname'])		: '';
    $lname      = isset($_GET['lname'])	? decrypt($_GET['lname'])		: '';
    $email      = isset($_GET['email'])		? decrypt($_GET['email'])		    : '';
    $address    = isset($_GET['address'])	? decrypt($_GET['address'])		    : '';
    $city       = isset($_GET['city'])      ? decrypt($_GET['city'])		    : '';
    $state      = isset($_GET['state'])	    ? decrypt($_GET['state'])		    : '';
    $zip        = isset($_GET['zip'])	    ? decrypt($_GET['zip'])             : '';
    $country    = isset($_GET['country'])	? decrypt($_GET['country'])         : 'US';
//var_dump($country);
//var_dump($state);
/*
$h_phone1     = isset($_GET['h_phone1'])	    ? decrypt($_GET['h_phone1'])		        : '';
$h_phone2     = isset($_GET['h_phone2'])	    ? decrypt($_GET['h_phone2'])		        : '';
$h_phone3     = isset($_GET['h_phone3'])	    ? decrypt($_GET['h_phone3'])		        : '';
$h_phone      = $h_phone1.$h_phone2.$h_phone3;
*/
$h_phone1 = '';
$h_phone2 = '';
$h_phone3 = '';
$h_phone = '';

$w_phone1     = isset($_GET['w_phone1'])	    ? decrypt($_GET['w_phone1'])		        : '';
$w_phone2     = isset($_GET['w_phone2'])	    ? decrypt($_GET['w_phone2'])		        : '';
$w_phone3     = isset($_GET['w_phone3'])	    ? decrypt($_GET['w_phone3'])		        : '';
$w_phone      = $w_phone1.$w_phone2.$w_phone3;

$custid    = isset($_GET['custid'])		? decrypt($_GET['custid'])		: 0;
//$clid	   = isset($_GET['clid'])		? decrypt($_GET['clid'])		: 0;

$offer_code = isset($_GET['offer_code'])	? decrypt($_GET['offer_code'])	: '';

$clid	   = isset($_GET['clid'])		? $_GET['clid']		: 0;
//$pgid	   = isset($_GET['pgid'])       ? $_GET['pgid']     : 0;
//$affid	   = isset($_GET['aff'])        ? $_GET['aff']      : 0;
//$subid     = isset($_GET['subid'])      ? $_GET['subid']    : 0;


// Get Form Values
$chkpinfo    = isset($_POST['chkpinfo']) && $_POST['chkpinfo']==1 ? $_POST['chkpinfo'] : 0;
$pgid		 = isset($_POST['pgid'])  && $_POST['pgid'] > 0 	? (int) $_POST['pgid']  : $pgid;
$clid		 = isset($_POST['clid'])  && $_POST['clid'] > 0 	? (int) $_POST['clid']  : $clid;
$affid		 = isset($_POST['aff'])   && $_POST['aff'] > 0  	? (int) $_POST['aff']   : $affid;
$parentaff	 = isset($_POST['paff'])  && $_POST['paff'] > 0 	? (int) $_POST['paff']  : 0;
$subid		 = isset($_POST['subid']) && $_POST['subid'] !=''   ? 		$_POST['subid'] : $subid;

$fname 			= isset($_POST['fname'])		? $_POST['fname'] 		: 	$fname;
$lname 			= isset($_POST['lname'])		? $_POST['lname'] 		:	$lname;
$address 		= isset($_POST['address'])		? $_POST['address'] 	:	$address;
$city 		    = isset($_POST['city'])		    ? $_POST['city'] 	    :	$city;
$country    = isset($_POST['country'])	? $_POST['country']         : $country;
$state 		    = isset($_POST['state'])		? $_POST['state'] 	    :	$state;
$zip 			= isset($_POST['zip'])			? $_POST['zip']   		:	$zip;

//var_dump($country);

/*
$h_phone1			= isset($_POST['h_phone1'])		? $_POST['h_phone1']   	:	$h_phone1;
$h_phone2			= isset($_POST['h_phone2'])		? $_POST['h_phone2']   	:	$h_phone2;
$h_phone3			= isset($_POST['h_phone3'])		? $_POST['h_phone3']   	:	$h_phone3;
$h_phone 	        = $h_phone1.$h_phone2.$h_phone3;
*/
$w_phone1			= isset($_POST['w_phone1'])		? $_POST['w_phone1']   	:	$w_phone1;
$w_phone2			= isset($_POST['w_phone2'])		? $_POST['w_phone2']   	:	$w_phone2;
$w_phone3			= isset($_POST['w_phone3'])		? $_POST['w_phone3']   	:	$w_phone3;
$w_phone 	        = $w_phone1.$w_phone2.$w_phone3;

$email 			= isset($_POST['email'])		? $_POST['email'] 		:	$email;

// Get Payment Info Values
$cardtype 		= isset($_POST['cardtype'])		? $_POST['cardtype']   	:	"";
$cardnum 		= isset($_POST['cardnum'])		? $_POST['cardnum']   	:	"";
$ccmonth 		= isset($_POST['ccmonth'])		? $_POST['ccmonth']   	:	"";
$ccyear 		= isset($_POST['ccyear'])		? $_POST['ccyear']   	:	"";
$cvv 		    = isset($_POST['cvv'])		    ? $_POST['cvv']   	    :	"";
$term           = isset($_POST['term'])		    ? $_POST['term']   	    :	"";

$fullname  = $fname." ".$lname;

// Upsell Products (CheckBoxes)
$upsell_1 		    = isset($_POST['billing_upsell'])		    ? $_POST['billing_upsell']   	    :	"";
//$upsell_2 		    = isset($_POST['upsell_2'])		    ? $_POST['upsell_2']   	    :	"";

$shipamt        = isset($_POST['shipamt'])      ? (float) $_POST['shipamt']     :   (float) SHIP_AMT;
$totamt         = isset($_POST['TOTAL_AMT'])    ? $_POST['TOTAL_AMT']   :   (float) ACTUAL_AMOUNT;

//$clid           = isset($_POST['clid'])      ? $_POST['clid']     :   "";

//echo 'Click ID: '.$clid;

// Estimated Delivery Date
$shippingInfo = "USPS First Class Shipping";
$deliveryDate = getDeliveryDate(); 

// If form is posted
if(isset($_POST['_action']) && $_POST['_action']=='post') {
//	require_once('store_credit_data_curl.php');

//print_r($_POST);

// Server-side Validation
$error   = array();
$error[] = empty($fname) 	?	'Please enter your Firstname'     : null;
$error[] = empty($lname)	?	'Please enter your Lastname'      : null;
$error[] = empty($address) 	?	'Please enter your Address'       : null;
$error[] = !empty($address) && !validateAddressPOBox($address) 	  ?	'We do not ship to PO Box Address, please enter physical address'       : null;
$error[] = empty($city) 	?	'Please enter your City'          : null;
$error[] = empty($state) 	?	'Please select your State'        : null;
$error[] = empty($zip)		?	'Please enter your zipcode'       : null;
$error[] = !empty($zip) && !validateZipCode($zip)    ?	'Invalid Zip Code, please fix'    : null;
//$error[] = empty($h_phone)    ?	'Please enter your Phone Number'  : null;
$error[] = empty($w_phone)    ?	'Please enter your Phone Number'  : null;
$error[] = !empty($w_phone) && !validatePhoneUS($w_phone)    ?	'Invalid Phone Number, please fix' : null;
$error[] = empty($email)	?	'Please enter your Email Address' : null;
$error[] = !empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)	?	'Email Address entered is invalid, please fix' : null;



$error[] = empty($term) 	?	'You must agree to the terms and conditions'   : null;
//$error[] = empty($cardtype)	?	'Please select your Credit Card Type'          : null;
$error[] = empty($ccmonth) || empty($ccyear)	?	'Please select your Card Expiry'               : null;
//$error[] =  	?	'Please select your Card Expiry'               : null;
$error[] = empty($cvv) 	    ?	'Please enter your CVV'                        : null;

// Remove Empty Values from Errors Array
$error = remove_array_empty_values($error);

/* echo 'Error:';
echo '<pre>';
  print_r($error);
echo '</pre>';
*/
// Process the form if no errors found
if (count($error) == 0) { 
  $response = createLead();

if ($debug) {
 echo '<pre>';
  print_r($response);
 echo '</pre>';
die('wa');    
}


    /** If Lead Updated **/
	if($response['result'] && $response['custid'] > 0) {
		
        /** Build Upsell XML **/
        if(isset($_POST['billing_upsell'])){
        	$upsells .= "<PRODUCT><ID>".UPSELL_PRODUCT_ID_1."</ID><QTY>1</QTY><SHIPPING_AMOUNT>0.00</SHIPPING_AMOUNT><AMOUNT>".UPSELL_PRODUCT_AMOUNT_1."</AMOUNT><SALETYPE>usell</SALETYPE></PRODUCT>\n";
        }
/*
        if(isset($_POST['upsell_2'])){
        	$upsells .= "<PRODUCT><ID>".UPSELL_PRODUCT_ID_2."</ID><QTY>1</QTY><SHIPPING_AMOUNT>0.00</SHIPPING_AMOUNT><AMOUNT>".UPSELL_PRODUCT_AMOUNT_2."</AMOUNT><SALETYPE>usell</SALETYPE></PRODUCT>\n";
        }
        */
        
        /** Create Sale **/
        $sale = createSale($response['custid'], $upsells);
        
         if ($debug) {
            echo '<pre>';
            print_r($sale);
            echo '</pre>';        
            die('wa');            
         }
        
        /** Check if sale was successful **/
        if (!empty($sale['error'])) {
            $error[] = $sale['error'];            
        }
        
        // Remove Empty Values from Errors Array
        $error = remove_array_empty_values($error);

        /** If Sale Successful, Go to Thankyou **/
        if (count($error) == 0) {

    		// Encrypt Values
    		$en_custid		= urlencode(encrypt($response['custid']));
    		//$en_clid		= urlencode(encrypt($clid));
    		$en_pgid		= urlencode(encrypt($pgid));
    		$en_subid		= urlencode(encrypt($subid));
            $en_affid		= urlencode(encrypt($affid));
    		$en_offer_code	= urlencode(encrypt($offer_code));
    		$en_fullname	= urlencode(encrypt($fname.' '.$lname));

            $en_fname      = urlencode(encrypt($fname));
            $en_lname      = urlencode(encrypt($lname));
            $en_email      = urlencode(encrypt($email));
            $en_address    = urlencode(encrypt($address));
            $en_city       = urlencode(encrypt($city));
            $en_state      = urlencode(encrypt($state));
            $en_zip        = urlencode(encrypt($zip));
            //$en_h_phone    = urlencode(encrypt($h_phone));
            $en_w_phone    = urlencode(encrypt($w_phone));
            
            $en_invoice_id = urlencode(encrypt($sale['invoice_id']));
            $en_order_id   = urlencode(encrypt($sale['order_id']));
            $en_order_amount = urlencode(encrypt($sale['amount']));
            $en_trans_id   = urlencode(encrypt($sale['trans_id']));
            
            $en_deliveryDate = urlencode(encrypt($deliveryDate));
            $en_shippingInfo = urlencode(encrypt($shippingInfo));
            
            $en_upsell_1   = urlencode(encrypt($upsell_1));
            $en_upsell_2   = urlencode(encrypt($upsell_2));

            // Encrypt card info
            $en_cardtype        = urlencode(encrypt($cardtype));
            $en_ccmonth         = urlencode(encrypt($ccmonth));
            $en_ccyear          = urlencode(encrypt($ccyear));
            $en_cvv             = urlencode(encrypt($cvv));
            $en_cardnum         = urlencode(encrypt($cardnum));
            
			$qstr="state=$en_state&fname=$en_fname&lname=$en_lname&email=$en_email&address=$en_address&city=$en_city&zip=$en_zip&custid=$en_custid";
			//$qstr2="&upsell_1=$en_upsell_1&upsell_2=$en_upsell_2&clid=$clid&offer_code=$en_offer_code&aff=$en_affid&mypgid=$en_pgid&h_phone=$en_h_phone&w_phone=$en_w_phone";
            $qstr2="&upsell_1=$en_upsell_1&upsell_2=$en_upsell_2&clid=$clid&offer_code=$en_offer_code&aff=$en_affid&pgid=$en_pgid&subid=$en_subid&w_phone=$en_w_phone";
			$qstr3="&invoice_id=$en_invoice_id&order_amount=$en_order_amount&trans_id=$en_trans_id&order_id=$en_order_id";
			$qstr4="&ship_info_1=$en_deliveryDate&ship_info_2=$en_shippingInfo";
            $qstr5 = "&ct=$en_cardtype&cm=$en_ccmonth&cy=$en_ccyear&cv=$en_cvv&cn=$en_cardnum";
			header("Location: ".HTTPS.SITE_URL."/thankyou.php?".$qstr.$qstr2.$qstr3.$qstr4.$qstr5);
            exit;            

        }
	} else {
		$error[] = $response['result'];
	}
}
}
?>
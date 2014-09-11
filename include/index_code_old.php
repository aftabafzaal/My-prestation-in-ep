<?
require_once("./include/functions.php");

// Initial Variables from URL
$error   = array();
$pgid		 = isset($_REQUEST['pgid'])  && $_REQUEST['pgid'] > 0 	? (int) $_REQUEST['pgid']  : 0;
$clid		 = isset($_REQUEST['clid'])  && $_REQUEST['clid'] > 0 	? (int) $_REQUEST['clid']  : 0;
$affid		 = isset($_REQUEST['aff'])   && $_REQUEST['aff'] > 0  	? (int) $_REQUEST['aff']   : 0;
$parentaff	 = isset($_REQUEST['paff'])  && $_REQUEST['paff'] > 0 	? (int) $_REQUEST['paff']  : 0;
$subid		 = isset($_REQUEST['subid']) && $_REQUEST['subid'] !='' ? 		$_REQUEST['subid'] : 0;

// Configuration
$javascript_validation = false;
$country='US';
$offercode = 'crc-offernew';
$country_id = 1;
$lead_list_id = 20;	// Credit Repair Council - New Offer
//$api_url = "http://creditrepair.safedataxchange.com/savelead/save_credit_lead_data.php";
//$api_url = "http://localhost:654/paramount/leads/api";
//$api_url = "http://172.16.1.107:4444/paramount/leads/api/";
$api_url = "http://www.paramountcreditsolutions.com/beta/paramount_latest/leads/api";

// Other Info
	$request_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	//$request_url = explode('/',$request_url);
//$request_url = $request_url[0];


$referer	 = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$ip 		 = $_SERVER['REMOTE_ADDR'];

// Get Form Values
$fname 			= isset($_POST['fname'])		? $_POST['fname'] 		: 	"";
$lname 			= isset($_POST['lname'])		? $_POST['lname'] 		:	"";
$email 			= isset($_POST['email'])		? $_POST['email'] 		:	"";
$zip 			= isset($_POST['zip'])			? $_POST['zip']   		:	"";
$hp_1			= isset($_POST['hp_1'])			? $_POST['hp_1']   		:	"";
$hp_2			= isset($_POST['hp_2'])			? $_POST['hp_2']   		:	"";
$hp_3			= isset($_POST['hp_3'])			? $_POST['hp_3']   		:	"";
$wp_1			= isset($_POST['wp_1'])			? $_POST['wp_1']   		:	"";
$wp_2			= isset($_POST['wp_2'])			? $_POST['wp_2']   		:	"";
$wp_3			= isset($_POST['wp_3'])			? $_POST['wp_3']   		:	"";
$contacttime 	= isset($_POST['contacttime'])	? $_POST['contacttime'] :	"";

$home_phone 	= $hp_1.$hp_2.$hp_3;
$work_phone 	= $wp_1.$wp_2.$wp_3;

// If form is posted
if(isset($_POST['_action']) && $_POST['_action']=='post') {
//	require_once('store_credit_data_curl.php');

//print_r($_POST);

// Server-side Validation
$error   = array();
$error[] = empty($fname) 	?	'Please enter your Firstname' : null;
$error[] = empty($lname)	?	'Please enter your Lastname'  : null;
$error[] = empty($email)	?	'Please enter your Email Address'  : null;
$error[] = empty($zip)		?	'Please enter your zipcode'  : null;
$error[] = empty($hp_1)|| empty($hp_2) || empty($hp_3)	?	'Please enter your Home Phone Number'  : null;
$error[] = empty($wp_1)|| empty($wp_2) || empty($wp_3)	?	'Please enter your Work Phone Number'  : null;

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
//print_r($response);

	// Redirect to thankyou page
	if($response['result']=="Lead Accepted" && $response['custid'] > 0) {
		
		// Decrypt Values
		$en_custid		= urlencode(encrypt($response['custid']));
		$en_clid		= urlencode(encrypt($clid));
		$en_offer_code	= urlencode(encrypt($offer_code));
		$en_fullname	= urlencode(encrypt($fname.' '.$lname));
		$en_tid			= urlencode(encrypt($response['tid']));

		header("Location: thankyou.php?custid=$en_custid&clid=$en_clid&offercode=$en_offer_code&fullname=$en_fullname&tid=$en_tid");
	} else {
		$error[] = $response['result'];
	}

}
}
?>
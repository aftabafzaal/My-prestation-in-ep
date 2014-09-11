<?
require_once("./include/config.php");
require_once("./include/functions.php");


// Initial Variables from URL
$debug = isset($_REQUEST['debug']) && $_REQUEST['debug']==1 ? 1 : 0; 
$error   = array();
$pgid		 = isset($_REQUEST['pgid'])  && $_REQUEST['pgid'] > 0 	? (int) $_REQUEST['pgid']  : 0;
$clid		 = isset($_REQUEST['clid'])  && $_REQUEST['clid'] > 0 	? (int) $_REQUEST['clid']  : 0;
$affid		 = isset($_REQUEST['aff'])   && $_REQUEST['aff'] > 0  	? (int) $_REQUEST['aff']   : 0;
$parentaff	 = isset($_REQUEST['paff'])  && $_REQUEST['paff'] > 0 	? (int) $_REQUEST['paff']  : 0;
$subid		 = isset($_REQUEST['subid']) && $_REQUEST['subid'] !='' ? 		$_REQUEST['subid'] : 0;

// Configuration
$javascript_validation = true;
$offer_code = 'envisage-skin-o1';
$request_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$referer	 = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$ip 		 = $_SERVER['REMOTE_ADDR'];

// Get Values from Index Page and Decrypt Them
$fname      = isset($_GET['fname'])	    ? decrypt($_GET['fname'])		: '';
$lname      = isset($_GET['lname'])	    ? decrypt($_GET['lname'])		: '';
$email      = isset($_GET['email'])		? decrypt($_GET['email'])		    : '';
$address    = isset($_GET['address'])	? decrypt($_GET['address'])		    : '';
$city       = isset($_GET['city'])      ? decrypt($_GET['city'])		    : '';
$state      = isset($_GET['state'])	    ? decrypt($_GET['state'])		    : '';
$zip        = isset($_GET['zip'])	    ? decrypt($_GET['zip'])             : '';
$country    = isset($_GET['country'])	? decrypt($_GET['country'])         : 'US';

/*
$h_phone1     = isset($_GET['h_phone1'])	    ? decrypt($_GET['h_phone1'])		        : '';
$h_phone2     = isset($_GET['h_phone2'])	    ? decrypt($_GET['h_phone2'])		        : '';
$h_phone3     = isset($_GET['h_phone3'])	    ? decrypt($_GET['h_phone3'])		        : '';
*/
$h_phone1 = '';
$h_phone2 = '';
$h_phone3 = '';
$h_phone = '';

//$h_phone      = $phone1.$phone2.$phone3;

$w_phone1     = isset($_GET['w_phone1'])	    ? decrypt($_GET['w_phone1'])		        : '';
$w_phone2     = isset($_GET['w_phone2'])	    ? decrypt($_GET['w_phone2'])		        : '';
$w_phone3     = isset($_GET['w_phone3'])	    ? decrypt($_GET['w_phone3'])		        : '';

// If form is posted
if(isset($_POST['_action']) && $_POST['_action']=='post') {
//	require_once('store_credit_data_curl.php');


$fname      = isset($_POST['fname']) && !empty($_POST['fname'])	    ? $_POST['fname']		: '';
$lname      = isset($_POST['lname']) && !empty($_POST['lname'])	    ? $_POST['lname']		: '';
$email      = isset($_POST['email']) && !empty($_POST['email'])	    ? $_POST['email']		: '';
$address    = isset($_POST['address']) && !empty($_POST['address'])	? $_POST['address']		: '';
$city       = isset($_POST['city']) && !empty($_POST['city'])	    ? $_POST['city']		: '';
$state      = isset($_POST['state']) && !empty($_POST['state'])     ? $_POST['state']		: '';
$zip        = isset($_POST['zip']) && !empty($_POST['zip'])	        ? $_POST['zip']		    : '';
$country    = isset($_POST['country']) && !empty($_POST['country'])	? $_POST['country']   : '';

/*
$h_phone1     = isset($_POST['h_phone1']) && !empty($_POST['h_phone1'])	    ? $_POST['h_phone1']		        : '';
$h_phone2     = isset($_POST['h_phone2']) && !empty($_POST['h_phone2'])	    ? $_POST['h_phone2']		        : '';
$h_phone3     = isset($_POST['h_phone3']) && !empty($_POST['h_phone3'])	    ? $_POST['h_phone3']		        : '';
$h_phone      = $h_phone1.$h_phone2.$h_phone3; 
*/

$w_phone1     = isset($_POST['w_phone1']) && !empty($_POST['w_phone1'])	    ? $_POST['w_phone1']		        : '';
$w_phone2     = isset($_POST['w_phone2']) && !empty($_POST['w_phone2'])	    ? $_POST['w_phone2']		        : '';
$w_phone3     = isset($_POST['w_phone3']) && !empty($_POST['w_phone3'])	    ? $_POST['w_phone3']		        : '';
$w_phone      = $w_phone1.$w_phone2.$w_phone3;

//print_r($_POST);

// Server-side Validation
$error   = array();
$error[] = empty($fname) 	?	'Please enter your Firstname'     : null;
$error[] = empty($lname)	?	'Please enter your Lastname'      : null;
$error[] = empty($address) 	?	'Please enter your Address'       : null;
$error[] = empty($city) 	?	'Please enter your City'          : null;
$error[] = empty($state) 	?	'Please select your State'        : null;
$error[] = empty($zip)		?	'Please enter your zipcode'       : null;
//$error[] = empty($h_phone) && empty($w_phone)    ?	'Please enter your Phone Number'  : null;
$error[] = empty($w_phone)    ?	'Please enter your Phone Number'  : null;
$error[] = empty($email)	?	'Please enter your Email Address' : null;

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
//$response['result']=1;
//$response['custid']=987;
if ($debug) {
 echo '<pre>';
 print_r($response);
 echo '</pre>';
 die('wa');   
}

	// Redirect to thankyou page
	if($response['result'] && $response['custid'] > 0) {
		
		$custid = $response['custid'];
        
        // Encrypt Values
		$en_custid		= urlencode(encrypt($response['custid']));
		//$en_clid		= urlencode(encrypt($clid));
		$en_offer_code	= urlencode(encrypt($offer_code));
		$en_fullname	= urlencode(encrypt($fname.' '.$lname));
		//$en_tid			= urlencode(encrypt($response['tid']));

        $en_fname       = urlencode(encrypt($fname));
        $en_lname       = urlencode(encrypt($lname));                
        $en_email       = urlencode(encrypt($email));
        $en_address     = urlencode(encrypt($address));
        $en_city        = urlencode(encrypt($city));
        $en_state       = urlencode(encrypt($state));
        $en_zip         = urlencode(encrypt($zip));
        $en_country     = urlencode(encrypt($country));

/*
        $en_h_phone1    = urlencode(encrypt($h_phone1));
        $en_h_phone2    = urlencode(encrypt($h_phone2));
        $en_h_phone3    = urlencode(encrypt($h_phone3));
*/        
        $en_w_phone1    = urlencode(encrypt($w_phone1));
        $en_w_phone2    = urlencode(encrypt($w_phone2));
        $en_w_phone3    = urlencode(encrypt($w_phone3));
        //$en_phone1       = urlencode(encrypt($_POST['phone1']));
        //$en_phone2       = urlencode(encrypt($_POST['phone2']));
        //$en_phone3       = urlencode(encrypt($_POST['phone3']));
        
        $en_custid		= urlencode(encrypt($custid));
		//$en_clid		= urlencode(encrypt($clid));
		//$en_offer_code	= urlencode(encrypt($offer_code));
		$en_fullname	= urlencode(encrypt($fname.' '.$lname));
		//$en_tid			= urlencode(encrypt($response['tid']));

        // Affiliate Info
        $en_pgid	 = urlencode(encrypt($pgid));
        $en_affid	 = urlencode(encrypt($affid));
        $en_subid	 = urlencode(encrypt($subid));

		//var_dump($country);
		//var_dump($en_country);
		//die('stop');
		//$qstr="clid=$clid&offer_code=$offer_code&state=$en_state&fname=$en_fname&lname=$en_lname&email=$en_email&address=$en_address&city=$en_city&zip=$en_zip&custid=$en_custid&h_phone1=$en_h_phone1&h_phone2=$en_h_phone2&h_phone3=$en_h_phone3&w_phone1=$en_w_phone1&w_phone2=$en_w_phone2&w_phone3=$en_w_phone3";
        $qstr  = "clid=$clid&offer_code=$offer_code&state=$en_state&country=$en_country&fname=$en_fname&lname=$en_lname&email=$en_email&address=$en_address&city=$en_city&zip=$en_zip&custid=$en_custid&w_phone1=$en_w_phone1&w_phone2=$en_w_phone2&w_phone3=$en_w_phone3";
		$qstr2 = "&pgid=$en_pgid&aff=$en_affid&subid=$en_subid"; 
        header("Location: ".HTTPS.SITE_URL."/billinginfo.php?".$qstr.$qstr2);
        exit;
	} else {
		$error[] = $response['result'];
	}

}
}
?>
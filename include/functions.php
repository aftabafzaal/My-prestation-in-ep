<?php
/**************************
* GENERAL FUNCTIONS
***************************/
function validateEmail ($email) {
 if (!preg_match("/^( [a-zA-Z0-9] )+( [a-zA-Z0-9\._-] )*@( [a-zA-Z0-9_-] )+( [a-zA-Z0-9\._-] +)+$/" , $email)) {
  return false;
 }
 return true;
}

function validateZipCode($zip) {
    $return = false;
    $zip_pattern = "/\d{5}/";
    //$str = "Mission Viejo, CA 9296";

    preg_match($zip_pattern,$zip,$regs);
    $result = $regs[0];
 
    $return = $result ? true : false;     

return $return;
}

function validatePhoneUS($phone) {
    $return = false;
    $pattern = "/\d{10}/";
    //$str = "Mission Viejo, CA 9296";

    preg_match($pattern,$phone,$regs);
    $result = $regs[0];
 
    $return = $result ? true : false;     

return $return;
}

function validateAddressPOBox($address) {
  $return = false;

  $address = strtolower($address);
  $address = str_replace(".","",$address);
  $address = str_replace("pobox","po box",$address);
  $address = str_replace("p o box","po box",$address);
  $address = str_replace("p o box","po box",$address);  
  // Search for PO Box Addresses
  if (strstr($address, 'po box')) {
     $return = false;        
  } else {
    $return = true; 
  }
//echo $address;
//echo '<hr>';

return $return;
}

function getDeliveryDate($days=5) {
    $date=date('Y-m-d');
    $next_stamp = strtotime($date) + ($days*24*60*60);  
    $deliveryDate = date('jS M, Y',$next_stamp);     

return $deliveryDate;
}

function stateList($state, $country='US') {
    $list = array();
    switch ($country) {
        case 'US':
            $list = array(
                "" => "[Select your State]",
                "AL" => "Alabama (AL)",
                "AK" => "Alaska (AK)",
                "AZ" => "Arizona (AZ)",
                "AR" => "Arkansas (AR)",
                "CA" => "California (CA)",
                "CO" => "Colorado (CO)",
                "CT" => "Connecticut (CT)",
                "DE" => "Delaware (DE)",
                "FL" => "Florida (FL)",
                "GA" => "Georgia (GA)",
                "HI" => "Hawaii (HI)",
                "ID" => "Idaho (ID)",
                "IL" => "Illinois (IL)",
                "IN" => "Indiana (IN)",
                "IA" => "Iowa (IA)",
                "KS" => "Kansas (KS)",
                "KY" => "Kentucky (KY)",
                "LA" => "Louisiana (LA)",
                "ME" => "Maine (ME)",
                "MD" => "Maryland (MD)",
                "MA" => "Massachusetts (MA)",
                "MI" => "Michigan (MI)",
                "MN" => "Minnesota (MN)",
                "MO" => "Missouri (MO)",
                "MS" => "Mississippi (MS)",
                "MT" => "Montana (MT)",
                "NE" => "Nebraska (NE)",
                "NV" => "Nevada (NV)",
                "NH" => "New Hampshire (NH)",
                "NJ" => "New Jersey (NJ)",
                "NM" => "New Mexico (NM)",
                "NY" => "New York (NY)",
                "NC" => "North Carolina (NC)",
                "ND" => "North Dakota (ND)",
                "OH" => "Ohio (OH)",
                "OK" => "Oklahoma (OK)",
                "OR" => "Oregon (OR)",
                "PA" => "Pennsylvania (PA)",
                "RI" => "Rhode Island (RI)",
                "SC" => "South Carolina (SC)",
                "SD" => "South Dakota (SD)",
                "TN" => "Tennessee (TN)",
                "TX" => "Texas (TX)",
                "VT" => "Vermont (VT)",
                "VA" => "Virginia (VA)",
                "WA" => "Washington (WA)",
                "DC" => "Washington DC (DC)",
                "WV" => "West Virginia (WV)",
                "WI" => "Wisconsin (WI)",
                "WY" => "Wyoming (WY)",
            );
        break;
    }    

    // Build options
    $output = "";
    foreach ($list as $k=>$v) {
        $selected = $k==$state ? 'selected="selected"' : '';
        $output .= '<option value="'.$k.'" '.$selected.'>'.$v."</option>\n";
    }

return $output;
}

function displayErrors($errors) {
  $err = '';
  if (count($errors) > 0) {
      $err = '<div class="error"><ul>';
	foreach ($errors as $val) {
	  $err .= "<li>$val</li>";
	}
	 $err .= '</ul></div>';
  }

return $err;
}

function remove_array_empty_values($array, $remove_null_number = true)  
 {  
     $new_array = array();  
   
     $null_exceptions = array();  
   
     foreach ($array as $key => $value)  
     {  
         $value = trim($value);  
   
         if($remove_null_number)  
         {  
            $null_exceptions[] = '0';  
         }  
   
         if(!in_array($value, $null_exceptions) && $value != "")  
         {  
             $new_array[] = $value;  
         }  
     }  
     return $new_array;  
}  

/**************************
* Build XML to create Lead
***************************/
function buildLeadXML() {
 global $ip, $fname, $lname, $address, $city, $country, $state, $zip, $email, $phone, $w_phone, $h_phone, $email, $subid, $affid, $parentaff, $pgid, $clid, $referer, $request_url; 

//$en_referer = urlencode($referer);
//$en_request_url = urlencode($request_url);

$en_referer = 'none';
$en_request_url = 'none';
$company_id = COMPANY_NO;
$sess_id = session_id();
$custom1 =isset($_SESSION['custom1']) ? $_SESSION['custom1'] : '';
$custom2 =isset($_SESSION['custom2']) ? $_SESSION['custom2'] : '';
$cmpid = 0;

$xml =<<<EOD
<LEAD>
<COMPANY>{$company_id}</COMPANY>
<AFFILIATE>{$affid}</AFFILIATE>
<SESSIONID>{$sess_id}</SESSIONID>
<PROGRAM>{$pgid}</PROGRAM>
<IPADDRESS>{$ip}</IPADDRESS>
<CUSTOM1>{$custom1}</CUSTOM1>
<CUSTOM2>{$custom2}</CUSTOM2>
<CMPID>{$cmpid}</CMPID>
<CUSTOMER>
<FIRSTNAME>{$fname}</FIRSTNAME>
<LASTNAME>{$lname}</LASTNAME>
<ADDRESS>{$address}</ADDRESS>
<CITY>{$city}</CITY>
<STATE>{$state}</STATE>
<COUNTRY>{$country}</COUNTRY>
<ZIP>{$zip}</ZIP>
<EMAIL>{$email}</EMAIL>
<PHONE>{$w_phone}</PHONE>
<PHONE2>{$h_phone}</PHONE2>
</CUSTOMER>
</LEAD>
EOD;

$xml = 'xmlstr='.$xml;

 return $xml;
}

function buildSaleXML($custid, $upsells='', $only_upsell=false) {
 global $ip, $fname, $lname, $address, $city, $country, $state, $zip, $email, $phone, $h_phone, $w_phone, $email, $subid, $affid, $parentaff, $pgid, $clid, $referer, $request_url;
 global $cardtype, $cardnum, $ccmonth, $ccyear, $cvv;
 global $prod_id, $qty, $shipamt;

$en_referer = 'none';
$en_request_url = 'none';
$company_id = COMPANY_NO;
$sess_id = session_id();
$custom1 =isset($_SESSION['custom1']) ? $_SESSION['custom1'] : '';
$custom2 =isset($_SESSION['custom2']) ? $_SESSION['custom2'] : '';
$cmpid = 0;
$ccname = $fname.' '.$lname;
$prod_id = PRODUCT_ID;
$qty = QUANTITY;
//$ship_amount = SHIP_AMT;
$ship_amount = isset($shipamt) && $shipamt>0 ? $shipamt : SHIP_AMT;

if ($only_upsell) {
    $main_basket = '';
} else {

$main_basket =<<<EOD
<PRODUCT>
<ID>{$prod_id}</ID>
<QTY>{$qty}</QTY>
<SHIPPING_AMOUNT>{$ship_amount}</SHIPPING_AMOUNT>
</PRODUCT>
EOD;
    
}

$xml =<<<EOD
<REQUEST>
<COMPANY>{$company_id}</COMPANY>
<SESSIONID>{$sess_id}</SESSIONID>
<AFFILIATE>{$affid}</AFFILIATE>
<PROGRAM>{$pgid}</PROGRAM>
<IPADDRESS>{$ip}</IPADDRESS>
<CMPID>{$cmpid}</CMPID>
<CUSTOMERINFO>
<ID>{$custid}</ID>
<FIRSTNAME>{$fname}</FIRSTNAME>
<LASTNAME>{$lname}</LASTNAME>
<ADDRESS>{$address}</ADDRESS>
<CITY>{$city}</CITY>
<STATE>{$state}</STATE>
<COUNTRY>{$country}</COUNTRY>
<ZIP>{$zip}</ZIP>
<EMAIL>{$email}</EMAIL>
<PHONE>{$w_phone}</PHONE>
<PHONE2>{$h_phone}</PHONE2>
</CUSTOMERINFO>
<PAYMENTINFO>
<CCNAME>{$ccname}</CCNAME>
<CCTYPE>{$cardtype}</CCTYPE>
<CCNUM>{$cardnum}</CCNUM>
<EXPMON>{$ccmonth}</EXPMON>
<EXPYEAR>{$ccyear}</EXPYEAR>
<CV2>{$cvv}</CV2>
</PAYMENTINFO>
<BASKET>
{$main_basket}
{$upsells}
</BASKET>
</REQUEST>
EOD;


$xml = 'xmlstr='.$xml;

 return $xml;    
}

/**************************
* Build XML to create Lead
***************************/
function buildXML() {
 global $ip, $home_phone, $work_phone, $fname, $lname, $email, $zip, $contacttime, $country, $country_id, $lead_list_id, $subid, $affid, $parentaff, $pgid, $clid, $referer, $request_url; 

//$en_referer = urlencode($referer);
//$en_request_url = urlencode($request_url);

$en_referer = 'none';
$en_request_url = 'none';

/*
$xml =<<<EOD
<LEAD>
<IPADDRESS>{$ip}</IPADDRESS>
<PHONE1>{$home_phone}</PHONE1>
<PHONE2>{$work_phone}</PHONE2>
<FIRSTNAME>{$fname}</FIRSTNAME>
<LASTNAME>{$lname}</LASTNAME>
<EMAIL>{$email}</EMAIL>
<ZIP>{$zip}</ZIP>
<CONTACT_TIME>{$contacttime}</CONTACT_TIME>
<COUNTRY>{$country}</COUNTRY>
<COMPANY>{$company}</COMPANY>
<SUBID>{$subid}</SUBID>
<AFFILIATE>{$affid}</AFFILIATE>
<P_AFFILIATE>{$parentaff}</P_AFFILIATE>
<PROGRAM_ID>{$pgid}</PROGRAM_ID>
<CLICK_ID>{$clid}</CLICK_ID>
<CLIENT_NAME>{$offer_code}</CLIENT_NAME>
<REFERER>{$en_referer}</REFERER>
<R_URL>{$en_request_url}</R_URL>
</LEAD>
EOD;
*/

// Tmp vars
$address = '';
$fax = '';
$cellPhone = '';
$city = '';
//$country_id = 1; // 1 = United States by default
 
$ip = $_SERVER['REMOTE_ADDR'];
$xml = "
<Lead>
	<firstName>$fname</firstName>
	<lastName>$lname</lastName>
	<email>$email</email>	
	<address>$address</address>
	<phone1>$home_phone</phone1>
	<phone2>$work_phone</phone2>
	<fax>$fax</fax>		
	<cellPhone>$cellPhone</cellPhone>	
	<city>$city</city>	
    <ip>$ip</ip>
	<zip>$zip</zip>
	<country_id>$country_id</country_id>
	<lead_list_id>$lead_list_id</lead_list_id>		
	<affiliate_id>$affid</affiliate_id>
	<subAffiliate>$subid</subAffiliate>
</Lead>
";


$xml = 'xmlstr='.$xml;

 return $xml;
}

/**************************************************
* CREATE SALE
**************************************************/
function createSale($custid, $upsells, $only_upsell=false) {
	global $referer;

// Build XML to post
$post_fields = buildSaleXML($custid, $upsells, $only_upsell);

//print_r($post_fields);
//exit;

// POST cURL Request to Sale API
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, SALE_API_URL);
	curl_setopt($ch, CURLOPT_REFERER, $referer);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 180);
	  $response = curl_exec($ch);
	curl_close($ch);



/*
echo '<pre>';
print_r($response);
echo '</pre>';

die('a');
*/

//print_r($response);
//die('its me');
//exit;

// Add XML Headers to the Response
$response = "<?xml version='1.0' standalone='yes'?>".$response;

// Now Parse the response 
if (substr(phpversion(),0,1) == 4) {
  require_once "./include/simplexml.class.php";
	$sxml = new simplexml;
	$xml_arr = $sxml->xml_load_file($response);    
} elseif (substr(phpversion(),0,1) == 5) {
	$xml_arr = new SimpleXMLElement($response);
} 




/*
echo '<pre>';
print_r($xml_arr);
echo '</pre>';
die('wa');
*/

// Build Response to return
$result = array();
$order_amount = 0;
            
$result['result'] = (int) "$xml_arr->PAYMENT_RESULT";
$result['custid'] = (int) "$xml_arr->CUSTOMERID";
$result['error'] = isset($xml_arr->ERROR)? $xml_arr->ERROR : "";

if ($result['result'] == 1) {
    // Loop through Invoices to Get Order Amount
    $invoice_id = '';
    $order_id = '';
    $trans_id = '';
    foreach ($xml_arr->INVOICES->INVOICE AS $invoice) {
        $order_amount += (float) $invoice->AMOUNT;
        $invoice_id = isset($invoice_id) && !empty($invoice_id) ? $invoice_id : (int) $invoice->INVID;  
        $order_id = isset($order_id) && !empty($order_id) ? $order_id : (int) $invoice->ORDERID;
        $trans_id = isset($trans_id) && !empty($trans_id) ? $trans_id : (string) $invoice->TRANSID;
    }
    
    //$result['detail'] = "$xml_arr->DETAIL";
    $result['invoice_id'] = $invoice_id;
    $result['order_id'] = $order_id;
    $result['trans_id'] = $trans_id;
    $result['amount'] = $order_amount;    
}
//$result['trans_id'] = $xml_arr->INVOICES->INVOICE->TRANSID;
//$result['tid'] 	  = "$xml_arr->TID";
return $result;
}

/**************************************************
* CREATE LEAD
**************************************************/
function createLead() {
	global $referer, $debug;

// Build XML to post
$post_fields = buildLeadXML();

if ($debug) {
    echo $api_url;
    print_r($post_fields);
    exit;    
} 

// POST cURL Request to Paramount Create Lead API
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, LEAD_API_URL);
	curl_setopt($ch, CURLOPT_REFERER, $referer);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 180);
	  $response = curl_exec($ch);
	curl_close($ch);


if ($debug) {
    echo '<pre>';
    print_r($response);
    echo '</pre>';
    die('a');    
}
//print_r($response);
//die('its me');
//exit;

// Add XML Headers to the Response


/*
echo '<pre>';
print_r($response);
echo '</pre>';
die('s');
*/
// Now Parse the response 
if (substr(phpversion(),0,1) == 4) {
  require_once "./include/simplexml.class.php";
	$sxml = new simplexml;
	$xml_arr = $sxml->xml_load_file($response);    
} elseif (substr(phpversion(),0,1) == 5) {
	$xml_arr = new SimpleXMLElement($response);
} 

// Build Response to return
$result = array();
$result['custid'] = "$xml_arr->CUSTOMERID";
$result['result'] = "$xml_arr->RESULT";
//$result['tid'] 	  = "$xml_arr->TID";
return $result;
}

/***********************************************
* ENCRYPT
***********************************************/
function encrypt($str){
  return base64_encode(base64_encode(base64_encode(base64_encode($str))));
}

/***********************************************
* DECRYPT
***********************************************/
function decrypt($str) {
  return base64_decode(base64_decode(base64_decode(base64_decode($str))));
}

/************
* Email
************/

function sendEmail ($to, $from, $body) {

/* $body = "We Welcome you to Paramount Credit Solutions. You are just a few steps away from Financial Independence. 
<br><br>
We look forward to working with you to assist you in solving your credit report problems.
<br><br>
One of our customer services representative will call you soon to assist you in solving your credit report problems.
<br><br>
For further assistance feel free to contact us at 1-800-597-8489.";
                                                                
		$emailto=$_SESSION['_email']; //.",fhussain@eplanetcom.com"
		$headers = "From: customercare@paramountcreditsolutions.com \r\n";
		//$headers .= "BCC: akhan@eplanetcom.com \r\n";
		$headers .= "Return-Path: customercare@paramountcreditsolutions.com \r\n";
		$headers.= "Content-Type: text/plain; charset=ISO-8859-1 ";
		$headers .= "MIME-Version: 1.0 ";
	   
		//mail($emailto , "Credit Repair Council", strip_tags($body), $headers);
*/
}


function getDataFromCurl($url=''){
$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_USERAGENT, $url);
$result=curl_exec($ch);
curl_close($ch);
return json_decode($result);
}

function setDefine($data){
    foreach($data as $key =>$value){
        define($key,$value);
    }
}

?>
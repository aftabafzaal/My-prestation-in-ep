<?php
/**
 * Upsells Script 
 */

// If someone access this page directly, redirect them to home
if (!isset($custid) || $custid==0) {
    header("Location: ".WEB_ROOT);
    exit;    
}


   $upsells = isset($_REQUEST['upsells']) ? $_REQUEST['upsells'] : array();
   //print_r($upsells);


/** Build Upsell XML If form is posted **/
if (!empty($upsells)) {

$upsell_str = '';
foreach ($upsells as $upsell) {
	   //$upsell_str .= "<PRODUCT><ID>$upsell</ID><QTY>1</QTY><SHIPPING_AMOUNT>0.00</SHIPPING_AMOUNT><AMOUNT>".$upsell_products[$upsell]['price']."</AMOUNT><SALETYPE>usell</SALETYPE></PRODUCT>\n";
        $upsell_str .= "<PRODUCT><ID>$upsell</ID><QTY>1</QTY><SHIPPING_AMOUNT>0.00</SHIPPING_AMOUNT><SALETYPE>usell</SALETYPE></PRODUCT>\n";
}
$upsell_str = rtrim($upsell_str,"\n");
           
//print($upsell_str);
//die('wa');
// Build Complete XML
//$upsell_xml = buildSaleXML($custid, $upsell_str, true);

        /** Create Sale **/
        $up_sale = createSale($custid, $upsell_str, true);
        
        
            //echo '<pre>';
            //print_r($up_sale);
            //echo '</pre>';
            //die('wait');
         /* if ($debug) {
            echo '<pre>';
            print_r($up_sale);
            echo '</pre>';        
            die('wa');            
         }
         */
        
        /** Check if sale was successful **/
        if (!empty($up_sale['error'])) {
            $error[] = $up_sale['error'];            
        }
        
        // Remove Empty Values from Errors Array
        $error = remove_array_empty_values($error);

//die('wa');

        /** If Sale Successful, Go to Thankyou **/
        if (count($error) == 0) {
    		// Encrypt Values
    		$en_custid		= urlencode(encrypt($custid));
    		//$en_clid		= urlencode(encrypt($clid));
    		$en_pgid		= urlencode(encrypt($pgid));
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
            
            $en_invoice_id = urlencode(encrypt($invoice_id));
            $en_order_id   = urlencode(encrypt($order_id));
            $en_order_amount = urlencode(encrypt($order_amount));
            $en_trans_id   = urlencode(encrypt($up_sale['trans_id']));
            
            //$en_deliveryDate = urlencode(encrypt($deliveryDate));
            //$en_shippingInfo = urlencode(encrypt($shippingInfo));
            
            //$en_upsell_1   = urlencode(encrypt($upsell_1));
            //$en_upsell_2   = urlencode(encrypt($upsell_2));

            // Encrypt card info
            //$en_cardtype        = urlencode(encrypt($cardtype));
            //$en_ccmonth         = urlencode(encrypt($ccmonth));
            //$en_ccyear          = urlencode(encrypt($ccyear));
            //$en_cvv             = urlencode(encrypt($cvv));
            //$en_cardnum         = urlencode(encrypt($cardnum));
            
			$qstr="state=$en_state&fname=$en_fname&lname=$en_lname&email=$en_email&address=$en_address&city=$en_city&zip=$en_zip&custid=$en_custid";
			//$qstr2="&upsell_1=$en_upsell_1&upsell_2=$en_upsell_2&clid=$clid&offer_code=$en_offer_code&aff=$en_affid&mypgid=$en_pgid&h_phone=$en_h_phone&w_phone=$en_w_phone";
            $qstr2="&upsell_1=$en_upsell_1&upsell_2=$en_upsell_2&clid=$clid&offer_code=$en_offer_code&aff=$en_affid&mypgid=$en_pgid&w_phone=$en_w_phone";
			$qstr3="&invoice_id=$en_invoice_id&order_amount=$en_order_amount&trans_id=$en_trans_id&order_id=$en_order_id";
			$qstr4="&ship_info_1=$en_deliveryDate&ship_info_2=$en_shippingInfo";
            //$qstr5 = "&ct=$en_cardtype&cm=$en_ccmonth&cy=$en_ccyear&cv=$en_cvv&cn=$en_cardnum";
			header("Location: ".HTTPS.SITE_URL."/offer-thankyou.php?".$qstr.$qstr2.$qstr3.$qstr4);
            exit;            
        }
}

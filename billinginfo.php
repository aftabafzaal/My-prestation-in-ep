<?php require_once("./include/billinginfo_code.php"); 

// upsell Checkbox
// $billing_upsell_checked = $billing_upsell > 0 ? ' checked = "checked" ' : '';

// Show/Hide Checkbox
$chkpinfo = 1;
$chkpinfo_selected = $chkpinfo ? 'checked="checked"' : ''; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enter your payment information | <?php echo COMPANY_NAME;?></title>

<?php if ($javascript_validation) { ?>
<script src="<?php print WEB_ROOT; ?>js/gen_validatorv4.js" type="text/javascript"></script>
<? } ?>
<script type="text/javascript" src="<?php print $protocol; ?>ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="<?php //print WEB_ROOT; ?>js/custom.js"></script> -->
<link href="<?php print WEB_ROOT; ?>equinox-cart_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

<script type="text/javascript">
<!--
function updateShipping(shipamt) {
	document.getElementById('ship_price').innerHTML = '$'+shipamt;
	document.getElementById('ship_subtotal').innerHTML = '$'+shipamt;
	document.getElementById('order_total').innerHTML = '$'+shipamt;
}

function pinfoShowHide(){
//alert(document.getElementById('chkpinfo').value);
if(document.getElementById('chkpinfo').checked==true){
	document.getElementById('pinfo').style.display ='block';
	document.getElementById('chkpinfo').value="";
}else{
	document.getElementById('pinfo').style.display ='none';
	} 
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
	//DisableVSAChat();
  	var win = window.open(theURL,winName,features);
	win.focus()
}

function Calculate_Amt() {
	var sub_total = parseFloat(0.00);
    var tot_amt = <?php print $shipamt; ?>;
    var ship_amt = <?php print $shipamt; ?>;
	var upsell_1 = 29.99;
	// var upsell_2 =0.00;
    var upsell_product_name = '';
    var upsell_product_price = '';

	var final_tot = 6.95;
	//var prod_amt = document.getElementById('PROD_AMT').value;

/*    if(document.getElementById('billing_upsell').checked==true) {
		//upsell_1 = document.getElementById('UPSELL_AMT_1').value;
        sub_total = parseFloat(upsell_1);
        ship_amt =  <?php print SHIP_AMT; ?>;
        tot_amt =  sub_total + ship_amt;
        upsell_product_name = "EnVisage Facelift Serum";
        upsell_product_price = '$29.99';
	} else { */
        upsell_product_name = "";	   
        upsell_product_price = '';
	/* } */
    
	/*
    if(document.getElementById('upsell_1').checked==true){
		upsell_1 = document.getElementById('UPSELL_AMT_1').value;
	}

	if(document.getElementById('upsell_2').checked==true){
		upsell_2 = document.getElementById('UPSELL_AMT_2').value;
	}
    */


//	alert(ship_amt);
//document.getElementById('TOTAL_AMT').value = document.getElementById('UPSELL_AMT_1').value+document.getElementById('UPSELL_AMT_2').value
	//var totamt = (parseFloat(upsell_1)+parseFloat(upsell_2)+parseFloat(prod_amt));
    //var final_tot = (parseFloat(upsell_1)+parseFloat(upsell_2)+parseFloat(prod_amt)+parseFloat(ship_amt));

	//var totamt = parseFloat(prod_amt);
    //var final_tot = parseFloat(prod_amt)+parseFloat(ship_amt);
    
	//alert(final_tot);
	//document.getElementById('totamt').innerHTML = Math.round(totamt,3);
	//document.getElementById('sub_total').innerHTML = Math.round(sub_total);

    //document.getElementById('ship').innerHTML = Math.round(sub_total);
    /*
   	document.getElementById('sub_total').innerHTML = '$'+sub_total;
    document.getElementById('tot_amt').innerHTML = '$'+tot_amt;
    document.getElementById('upsell_product_name').innerHTML = upsell_product_name;
    document.getElementById('upsell_product_price').innerHTML = upsell_product_price;
    */    
}
//-->
</script>

<script type="text/javascript">
// Javascript Phone Jump
    $(document).ready( function() {
    
		var currency_symbol = '$';
	var country = '<?php print $country; ?>';
	var actualamount = '0.00';
	// Default Currency Symbol
		if (country=='UK') {
			currency_symbol='&pound;';
			actualamount = '<?php print ACTUAL_AMOUNT_UK; ?>';
			$('#w_phone1').attr('maxlength', 3);
			$('#w_phone2').attr('maxlength', 4);
			$('#w_phone3').attr('maxlength', 4);


			$('#w_phone1').css("width","30px");
			$('#w_phone2').css("width","40px");
			$('#w_phone3').css("width","40px");

		} else if (country=='US') {
			currency_symbol='$';		
			actualamount = '<?php print ACTUAL_AMOUNT_US; ?>';
			$('#w_phone1').attr('maxlength', 3);
			$('#w_phone2').attr('maxlength', 3);
			$('#w_phone3').attr('maxlength', 4);


			$('#w_phone1').css("width","30px");
			$('#w_phone2').css("width","30px");
			$('#w_phone3').css("width","40px");
		} else {
			currency_symbol='$';				
			actualamount = '<?php print ACTUAL_AMOUNT; ?>';
			$('#w_phone1').attr('maxlength', 3);
			$('#w_phone2').attr('maxlength', 3);
			$('#w_phone3').attr('maxlength', 4);


			$('#w_phone1').css("width","30px");
			$('#w_phone2').css("width","30px");
			$('#w_phone3').css("width","40px");
		}

	// Set Default Currency Symbol
	$('.currency_symbol').html(currency_symbol);

	// Set Actual Amount
	$('.actual_amount').html(actualamount);


	$('#country').change( function() {
		//alert(this.value);

		if (this.value=='UK') {
			currency_symbol='&pound;';
			actualamount = '<?php print ACTUAL_AMOUNT_UK; ?>';

			$('#w_phone1').attr('maxlength', 3);
			$('#w_phone2').attr('maxlength', 4);
			$('#w_phone3').attr('maxlength', 4);


			$('#w_phone1').css("width","30px");
			$('#w_phone2').css("width","40px");
			$('#w_phone3').css("width","40px");

		} else if (this.value=='US') {
			currency_symbol='$';
			actualamount = '<?php print ACTUAL_AMOUNT_US; ?>';

			$('#w_phone1').attr('maxlength', 3);
			$('#w_phone2').attr('maxlength', 3);
			$('#w_phone3').attr('maxlength', 4);


			$('#w_phone1').css("width","30px");
			$('#w_phone2').css("width","30px");
			$('#w_phone3').css("width","40px");

		} else {
			currency_symbol='$';				
			actualamount = '<?php print ACTUAL_AMOUNT; ?>';

			$('#w_phone1').attr('maxlength', 3);
			$('#w_phone2').attr('maxlength', 3);
			$('#w_phone3').attr('maxlength', 4);


			$('#w_phone1').css("width","30px");
			$('#w_phone2').css("width","30px");
			$('#w_phone3').css("width","40px");
		}

		// Set Currency Symbol
		$('.currency_symbol').html(currency_symbol);

		// Set Actual Amount
		$('.actual_amount').html(actualamount);

	});
	
	
	
    // Checkbox Box Unchecked intially
    $("#chkpinfo").removeAttr("checked"); // uncheck the checkbox or radio
	document.getElementById('pinfo').style.display ='none';
          
	//document.getElementById('pinfo').style.display ='block';
    
        $('#w_phone1').keyup( function() {
             if($(this).val().length==3){
                $('#w_phone2').focus();
            }            
        });

        $('#w_phone2').keyup( function() {
             if($(this).val().length==3){
                $('#w_phone3').focus();
            }            
        });

/*
        $('#w_phone3').keyup( function() {
             if($(this).val().length==4){
                $('#h_phone1').focus();
            }            
        });
                
        $('#h_phone1').keyup( function() {
             if($(this).val().length==3){
                $('#h_phone2').focus();
            }            
        });

        $('#h_phone2').keyup( function() {
             if($(this).val().length==3){
                $('#h_phone3').focus();
            }            
        });        
*/
    });

</script>

<!--  Validation Functions -->
<script type="text/javascript">
    function CheckCC(cc) {
        var regEx;
        regEx = /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/;
        if (!regEx.test(cc))
            return false;
        else
            return true;
    }
    function CheckCVC(CVC) {
        var regEx;
        regEx = /(?!000)\d{3,4}$/;
        if (!regEx.test(CVC))
            return false;
        else
            return true;
    }


    function CheckEmail(email) {
        var regEx;
        // below is original regEx that fails to catch a missing .com at the end of the email address
        // you can delete this comment and line below, just wanted to keep it here temporarily
        // regEx = /^([\w]+)(.[\w]+)*@([\w]+)(.[\w]{2,3}){1,2}$/; 
        regEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


        if (!regEx.test(email))
            return false;
        else
            return true;
    }
</script>
<style type="text/css">
  input.blacktext {border:1px solid #ccc; font-family: verdana; font-size: 10pt; padding: 4px; margin-bottom: 8px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;}
  select.blacktext {border:1px solid #ccc; font-family: verdana; font-size: 10pt; padding: 2px; margin-bottom: 8px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;}
  span.formtext {font-family: arial; font-size: 13pt; font-weight: normal; color: #421562; margin-top: 3px}

  h2 {font-family: arial; font-size: 14pt; font-weight: normal; margin: 0px; padding:0px}
  .error ul {background-color: #ff0000; color: #fff}
  .error ul li {color: #fff}
</style>

<style type="text/css">
<!--
.smalltext-black2 {  font-family:Arial, Helvetica, sans-serif;
  font-size:8pt;
  line-height:18px;
  color:#888;
}
.style16 {font-size: 14pt}
.footer-text {font-family: arial; font-size: 9pt; font-weight: normal; margin: 0px; padding:0px; line-height:18px;}
-->
</style>
<script type="text/javascript" src="js/states.js"></script>
<script>
var postState = '<?=$state?>';
var postCountry = '<?=$country?>';
</script>
</head>

<body>
<?php //require_once('tracking/google-analytics.php'); ?>

<form action="" method="post" name="form1" id="form1" onsubmit="disableformsfunc();StopExit = true;">
    <input type="hidden" name="_action" value="post" />
	<input type="hidden" name="debug" value="<?=$debug?>" />
    <input type="hidden" name="pgid" value="<?=$pgid?>" />
	<input type="hidden" name="clid" value="<?=$clid?>" />
	<input type="hidden" name="aff" value="<?=$affid?>" />
	<input type="hidden" name="paff" value="<?=$parentaff?>" />
	<input type="hidden" name="subid" value="<?=$subid?>" />            
    <input type="hidden" name="TOTAL_AMT" id="TOTAL_AMT"  value="<?=$totamt?>" />
    <input type="hidden" name="shipamt" value="<?=$shipamt?>" />    
<div id="container">
    <div id="mainbody">
    
    	<div id="productdetails">
            <div><img src="<?php print WEB_ROOT; ?>images2/header-billing-info2.jpg" width="585" height="191" /></div>            
            <div id="productprice">
           	  <div id="productprice_box">
                <table width="586" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <td width="586" height="17" colspan="2" align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="53" colspan="2" align="center" class="cvvText"><div align="center" class="formText">
                        <div align="justify"><span class="footer-text">Upon ordering the Trial offer of <?php print PRODUCT_NAME; ?> you'll automatically become a member of our Home Delivery Program. For the trial offer your credit card will be charged only <span class="currency_symbol">$</span><?php print SHIP_AMT; ?> for a 30 day supply of <?php print PRODUCT_NAME; ?>. You will have 14 days from your original order date to decide if <?php print PRODUCT_NAME; ?> is right for you. If you are satisfied with <?php print PRODUCT_NAME; ?> you need to do nothing, and at the end of your 14 day trial period you will be charged the  price of only <span class="currency_symbol">$</span><?php print US_DISCOUNT_PRICE; ?> for a 30 day supply of <?php print PRODUCT_NAME; ?>. Products are normally delivered within 3 to 5 business days from the date of order. Approximately 30 days from your original order date and every 30 days thereafter you will be sent another fresh Supply of <?php print PRODUCT_NAME; ?> and your credit card on file will be billed the exclusive Member's Only price o f <span class="currency_symbol">$</span><?php print US_DISCOUNT_PRICE; ?> + <span class="currency_symbol">$</span><?php print SHIP_AMT; ?> shipping and handling. You can cancel anytime simply by contacting our Customer Care and Support staff. There is no obligation to remain in the Home Delivery Program and you can discontinue future shipments at any time but we do have a limit which is one <?php print PRODUCT_NAME; ?> Trial per household. </span></div>
                      </div></td>
                    </tr>
                    <tr>
                      <td height="12" colspan="2" align="center">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
                <table width="586" border="0" cellpadding="0" cellspacing="0">
                      <tbody>
                        <tr>
                          <td width="586" height="17" colspan="2" align="center"><hr /></td>
                        </tr>
                        <tr>
                          <td height="53" colspan="2" align="center" class="cvvText"><div align="center" class="formText">Our                          checkout system is hacker-safe and uses industry-strength 128-bit                          encryption. <br />
                          Unlike many other sites, we do not store your credit card                          number directly on our site.</div></td>
                        </tr>
                        <tr>
                          <td height="12" colspan="2" align="center"><hr /></td>
                        </tr>
                    </tbody></table>
              </div>
              <table width="99%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="40">&nbsp;</td>
                </tr>
                <tr>
                  <td height="8"></td>
                </tr>
                <tr>
                  <td><table width="99%" border="0" cellspacing="2" cellpadding="1">
                   <!-- <tr>
                      <td width="2%" height="21">&nbsp;</td>
                      <td colspan="2" class="black_font"><?php //echo PRODUCT_NAME;?> Full 30 Day Supply</td>
                      <td width="21%" align="right">(00.00)</td>
                    </tr>-->
                    <tr>
                      <td width="2%" height="22">&nbsp;</td>
                      <td colspan="2" class="black_font"><span class="black_font style16"><div id="upsell_product_name">&nbsp;</div></span></td>
                      <td width="21%" align="right"><div id="upsell_product_price">&nbsp;</div></td>
                    </tr>
<!--
                    <tr>
                      <td height="21">&nbsp;</td>
                      <td><span class="black_font style16"><div id="upsell_product_name">&nbsp;</div></span></td>
                      <td align="right" valign="middle" class="gray_font">&nbsp;</td>
                      <td align="right">&nbsp;</td>
                    </tr>
-->                    
                    <!--<tr>
                      <td height="52">&nbsp;</td>
                      <td width="50%">&nbsp;</td>
                      <td width="30%" align="right" valign="middle" class="gray_font" style="padding-top:15px;">Sub-Total </td>
                      <td align="right"><div class="gray_font" id="sub_total" align="right" style="padding-top:15px;">$0.00</div></td>
                    </tr>-->
                    <tr>
                      <td height="19">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="right" valign="middle"><span class="gray_font">Shipping &amp; Handling:</span></td>
                      <td align="right"><div class="gray_font" align="right" id="ship_amt"><span class="currency_symbol">$</span><?php print SHIP_AMT; ?></div></td>
                    </tr>
                    
                    <tr>
                      <td height="21">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="right" class="gray_font" valign="bottom">You Pay</td>
                      <td align="right" valign="bottom"><span class="red_font" id="tot_amt"><span class="currency_symbol">$</span><?php print SHIP_AMT; ?></span></td>
                    </tr>
					<tr>
                    <td colspan="5"><span class="gray_font"><b><center>
                    &nbsp;
                    </center></b></span></td>
                    </tr>
                    <tr>
                    <td colspan="5"><span class="gray_font"><b><center>
                    You will be charged <span class="red_font" ><span class="currency_symbol">$</span><span class="actual_amount">99</span></span> if do not cancel within 14 days
                    </center></b></span></td>
                    </tr>
                  </table></td>
                </tr>
              </table>
          </div>
      <!--<div id="guaranteebox">
            	<!-- <p id="arrivaltext">Your Shipment is estimated to arrive by <span><?php //print $deliveryDate; ?></span></p> 
                <div id="termstext">
                  <p>Money Back Guarantee Terms: Start your risk-free trial today, and we'll send you a full 30-day supply of the <?php // echo PRODUCT_NAME;?>. Just pay <?php // print SHIP_AMT; ?> for S&P. You have 14 days to try the product and discover why <?php// echo PRODUCT_NAME;?> is the right  for you. If you enjoy the product, do nothing, you'll be billed the low, low price of just <?php // print ACTUAL_AMOUNT; ?> at the end of your trial period. In the unlikely event you decide that <?php // echo PRODUCT_NAME;?> is not the perfect product for you, call us toll-free at <?php // print SITE_PH_NO; ?> any time during your 14-day trial period to cancel your trial, then simply return the product (even if it is empty!) and you will NEVER be billed. Plus, if you decide to keep <?php // echo PRODUCT_NAME;?>, you will receive FREE acceptance in our Elite autoship Program, and you'll receive a new supply of <?php // echo PRODUCT_NAME;?> every 30 days at the same low Elite autoship price of <?php // print TOTAL_AMOUNT; ?>. Sales tax may be added to some orders depending on where you live You can cancel anytime! Please&nbsp;<a href="javascript:void(0)" onclick="MM_openBrWindow('terms_conditions.php','Terms','scrollbars=yes,width=565,height=600')" class="footer2">Terms &amp; Conditions</a> for more details</p>
          </div><br />

          <div id="seclogos_left"></div>
            </div>-->
      </div>
        
        <div id="shippingdetails">
        	<div id="limitedlace"></div>
        	<div id="arrow"></div>
            <div id="ccform" align="center">
            <div class="valForm">
<!--        <div id="f1"></div><div id="f1a"><img src="cart.aspx_files/ok.jpg"></div>
        <div id="f2"></div><div id="f2a"><img src="cart.aspx_files/ok.jpg"></div>
        <div id="f3"></div><div id="f3a"><img src="cart.aspx_files/ok.jpg"></div>
        <div id="f4"></div><div id="f4a"><img src="cart.aspx_files/ok.jpg"></div>
        <div id="f5"></div><div id="f5a"><img src="cart.aspx_files/ok.jpg"></div>
        <div id="f6"></div><div id="f6a"><img src="cart.aspx_files/ok.jpg"></div>
        <div id="f7"></div><div id="f7a"><img src="cart.aspx_files/ok.jpg"></div>
        <div id="f8"></div><div id="f8a"><img src="cart.aspx_files/ok.jpg"></div>
        <div id="f9"></div><div id="f9a"><img src="cart.aspx_files/ok.jpg"></div>
        <div id="f10"></div><div id="f10a"><img src="cart.aspx_files/ok.jpg"></div>
        <div style="top: 382px;" id="f11"></div><div style="top: 385px;" id="f11a"><img src="cart.aspx_files/ok.jpg"></div>
        <div style="top: 451px;" id="f12"></div><div style="top: 455px;" id="f12a"><img src="cart.aspx_files/ok.jpg"></div>
-->
</div>
            	<div id="cards_accepted" align="center"><img src="<?php print WEB_ROOT; ?>images2/cards_accepted.jpg" width="216" height="30"></div>
<table width="267" border="0" cellpadding="0" cellspacing="5">
                	
  <tbody>
  
<!-- Validation Errors -->
<tr>
  <td colspan="2">
    <? if (!empty($error)) { ?>
    <div align="left">
        <?=displayErrors($error)?>             
    </div>
    <? } ?>
  </td>
</tr>
  
  <tr height="30">
                    <td colspan="2"><label for="chkSame">
                    <input name="chkpinfo" id="chkpinfo" onclick="pinfoShowHide()" type="checkbox" value="1" <?php print $chkpinfo_selected; ?> />
                    &nbsp;&nbsp;Change my billing address</label></td>
                  </tr>
                   <tr><td colspan="2"> <span class="tdlabel" style="color: rgb(255, 0, 0);">  </span> </td>
                   </tr> 
                  
                  <tr>
                    <td colspan="2">
                        <div id="pinfo" style="display: none;">
                        <table border="0" cellpadding="2" cellspacing="3" width="100%">
                          <tbody>
                            <tr>
                              <td align="left"><span class="formtext">First Name:</span></td>
                            </tr>
                            <tr>
                              <td align="left" width="58%"><span class="whitetext">
                                <input name="fname" class="blacktext" id="fname" value="<?php print $fname; ?>" size="25" maxlength="20" type="text" />
                              </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="formtext">Last Name: </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                <input name="lname" class="blacktext" id="lname" value="<?php print $lname; ?>" size="25" maxlength="20" type="text" />
                              </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="formtext">Address:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                <input name="address" class="blacktext" id="address" value="<?php print $address; ?>" size="25" maxlength="45" type="text" />
                              </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="formtext">City:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                <input name="city" class="blacktext" id="city" value="<?php print $city; ?>" size="25" maxlength="20" type="text" />
                              </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">Country:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">                                
                                <select name="country" class="blacktext" id="country" style="width: 140px;" onchange="populateState()">
                                </select>
                              </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="formtext">State/Prov:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                        <select name='state' id='state' class="blacktext" tabindex="7">
                        </select><script type="text/javascript">initCountry('<?php print $country; ?>');</script>
                              </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="formtext">Zip:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                <input name="zip" class="blacktext" id="zip" value="<?php print $zip; ?>" size="17" maxlength="5" type="text" />
                              </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="formtext">Phone:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                    <input name="w_phone1" class="blacktext" type="text" id="w_phone1" value="<?=$w_phone1?>" style="width:30px;" maxlength="3" />
                                    <input name="w_phone2" class="blacktext" type="text" id="w_phone2" value="<?=$w_phone2?>" style="width:40px;" maxlength="3" />
                                    <input name="w_phone3" class="blacktext" type="text" id="w_phone3" value="<?=$w_phone3?>" style="width:40px;" maxlength="4" />
                              </span></td>
                            </tr>
                                    <input name="h_phone1" type="hidden" id="h_phone1" value="<?php print $h_phone1; ?>" />
                                    <input name="h_phone2" type="hidden" id="h_phone2" value="<?php print $h_phone2; ?>" />
                                    <input name="h_phone3" type="hidden" id="h_phone3" value="<?php print $h_phone3; ?>" />
                            <!--
                            <tr>
                              <td align="left"><span class="formtext">Phone 2:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                    <input name="h_phone1" type="text" id="h_phone1" value="<? //$h_phone1?>" style="width:30px;" maxlength="3" />
                                    <input name="h_phone2" type="text" id="h_phone2" value="<? //$h_phone2?>" style="width:40px;" maxlength="3" />
                                    <input name="h_phone3" type="text" id="h_phone3" value="<? //$h_phone3?>" style="width:40px;" maxlength="4" />
                              </span></td>
                            </tr>
                            -->
                            
                            <tr>
                              <td align="left"><span class="formtext">Email:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                <input name="email" class="blacktext" id="email" value="<?php print $email; ?>" size="25" maxlength="50" type="text" />
                              </span></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    
                    <!-- Payment Info Section -->
                    <div id="payment-info">
                    <table border="0" cellpadding="2" cellspacing="3" width="100%">
                          <tbody>

                            <!-- Card Type-->
                            <tr>
                              <td align="left"><span class="formtext">Card Type:</span></td>
                            </tr>
                            <tr>
                              <td align="left" width="58%"><span class="whitetext">
                                <select class="blacktext" name="cardtype" id="cardtype">
                                  <option value="0">Visa</option>
                                  <option value="1">Mastercard</option>
                                </select>
                              </span></td>
                            </tr>
                            
                            <!-- Card Number -->
                            <tr>
                              <td align="left"><span class="formtext">Credit Card Number:</span></td>
                            </tr>
                            <tr>
                              <td align="left" width="58%"><span class="whitetext">
                                <input name="cardnum" type="text" class="blacktext" id="cardnum" onchange="this.value = this.value.replace (/[-' ']/g,'')" value="" size="25" maxlength="16" />                                
                              </span></td>
                            </tr>
                            
                            <!-- Expiry Date -->
                            <tr>
                              <td align="left"><span class="formtext">Expiry Date:</span></td>
                            </tr>
                            <tr>
                              <td align="left" width="58%"><span class="whitetext">
<select name="ccmonth" class="blacktext" id="ccmonth">
                      <option value="">Month</option>
                      <option value="01">January</option>
                      <option value="02">February</option>
                      <option value="03">March</option>
                      <option value="04">April</option>
                      <option value="05">May</option>
                      <option value="06">June</option>
                      <option value="07">July</option>
                      <option value="08">August</option>
                      <option value="09">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                    </select>

                    <select name="ccyear" class="blacktext" id="ccyear">
                      <option value="">Year</option>
                      <option value="2008">2008</option>
                      <option value="2009">2009</option>
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                    </select>                                                                                    
                              </span></td>
                            </tr>
                            
                            <!-- CVV Code -->
                            <tr>
                              <td align="left"><span class="formtext">CVV Code:</span></td>
                            </tr>
                            <tr>
                              <td align="left" width="58%"><span class="whitetext">
                                <input name="cvv" type="text" class="blacktext" id="cvv" value="" size="5" maxlength="3" />                                
                              </span>
                                <span><a href="javascript:void(0);" class="footer2" onclick="MM_openBrWindow('cvv.html','cvv','scrollbars=yes,width=600,height=600')">(what is this?)</a></span>                              
                              </td>
                            </tr>                                       
                        </tbody>
                        </table>
                    </div>
                    </td>
                  </tr>                  
                </tbody></table>
<table width="267" border="0" cellpadding="0" cellspacing="5">

                  <tbody><tr>
  
</tr>
                </tbody></table>
			  <div id="submitbuttonbox" align="center">
              	<div id="hurrycircle"></div>
        <div id="wait">
                                    Processing... Please Wait...<br>
                                    <!-- <img src="cart.aspx_files/processing.gif"> --></div>
                                      <div id="checkout">
                                      
                                      <div style="padding-top: 2px; padding-left: 13px; padding-bottom: 3px;" class="footer2" align="left">
<input type="checkbox" name="term" value="1"  /> I agree I am at least 18 years old and agree to the 
<a href="javascript:void(0)" onclick="MM_openBrWindow('terms_conditions.php','Terms','scrollbars=yes,width=565,height=600')" class="footer2">terms &amp; conditions</a> & enrolling in a recurring billing system.
.
</div> 	
            
                                          <input name="btnSubmit" id="btnSubmit" src="<?php print WEB_ROOT; ?>images2/btn-checkout.png" onclick="return hidepay();" style="border-width: 0px;" type="image">
                	</div>
              <img src="<?php print WEB_ROOT; ?>images2/s-logos.jpg" width="266" height="68"></div>
            </div>
        </div>
      <div class="clearfix"></div>
    </div>
    
    <div id="footer" style="padding-top:147px;">
    <p class="terms" align="center"><span style="background-repeat:no-repeat; background-position:top"><a href="javascript:void(0)" onclick="MM_openBrWindow('terms_conditions.php','Terms','scrollbars=yes,width=565,height=600')" class="footer2">Offer Terms</a> <span class="footer2">|</span> <a href="javascript:void(0)" class="footer2" onclick="MM_openBrWindow('privacy_policy.php','PrivacyPolicy','scrollbars=yes,width=585,height=600')">Privacy Policy</a></span> <span style="background-repeat:no-repeat; background-position:top">|</span> <a href="contactus.php" class="footer2">Contact Us</a></p>
    <style>.terms_pop { float:left;  position: absolute;  top:100px;   width: 400px;   border: 1px solid #999;    text-align: left;  z-index: 5;  padding: 10px; color:#000; }.style1 {font-family: Arial, Helvetica, sans-serif}.terms_scroll{ height:270px; border: 1px solid #999; overflow: scroll;  overflow-x: hidden; overflow-y:scroll; background: #fff;  text-align: left;   padding: 5px;  color: 636463; }</style><div id="terms_popup" style="border: 1px solid rgb(153, 153, 153); padding: 10px; background: none repeat scroll 0% 0% rgb(255, 255, 255); float: left; position: absolute; top: 100px; height: auto; width: 400px; -moz-background-inline-policy: continuous; color: rgb(0, 0, 0); display: none; text-align: left; z-index: 5;"></div><div id="termsdiv"></div> 
      </div>

</div>      
<div align="center" style=" font:Arial, Helvetica, sans-serif; font-size:11px; font-weight: normal; padding: 5px">
  <?php require_once("include/disclaimer.php"); ?> </div>    
</div>
    </form>
<? if ($javascript_validation) { ?>
<script type="text/javascript">
 var frmvalidator  = new Validator("form1");
    frmvalidator.addValidation("fname","req","Please enter your First Name"); 
    frmvalidator.addValidation("lname","req","Please enter your Last Name");
    frmvalidator.addValidation("address","req","Please enter your Address");
    frmvalidator.addValidation("email","req", "Please enter your email address");
    frmvalidator.addValidation("email","email", "Please enter a correct email address");
    frmvalidator.addValidation("city","req", "Please entery your city");    
    frmvalidator.addValidation("state","req", "Please choose your state");
    frmvalidator.addValidation("zip","req", "Enter your zipcode");
    frmvalidator.addValidation("w_phone1","req", "Enter your phone Number");
    frmvalidator.addValidation("cardnum","req", "Please entery your credit card number to proceed");    
    frmvalidator.addValidation("ccmonth","req", "Please choose card expiry date"); 
    frmvalidator.addValidation("ccyear","req", "Please choose card expiry date");
    frmvalidator.addValidation("cvv","req", "Please enter the card security code (CVV)");
 </script>
 <? } ?>
 
</body>
<!-- <script language="javascript" type="text/javascript" src="<?php print WEB_ROOT; ?>js/exitpopup.js"></script> -->
</html>
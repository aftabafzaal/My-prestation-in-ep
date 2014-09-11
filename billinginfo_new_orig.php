<? require_once("./include/billinginfo_code.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billing Information | EquinoxSkinCare.com</title>

<?php if ($javascript_validation) { ?>
<script src="<?php print WEB_ROOT; ?>js/gen_validatorv4.js" type="text/javascript"></script>
<? } ?>
<script type="text/javascript" src="<?php print $protocol; ?>ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php print WEB_ROOT; ?>js/custom.js"></script>
<link href="<?php print WEB_ROOT; ?>quinox-5-style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="billing/equinox-new.css" type="text/css" />
<link rel="stylesheet" href="billing/modal.css" type="text/css" />
<link rel="stylesheet" href="billing/validation.css" type="text/css" />
<!--[if IE 6]>
<style>
#message { position: absolute }
</style>
<script src="billing/dd-belated.js"></script>
<script>
  DD_belatedPNG.fix('a.closeButton, img, input, .icons, #offerdetails, .btn, .purDetailsCont, #right, .inner, .promocode, em.error, em.success, .cs_main');
</script>
<![endif]-->
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
	document.getElementById('ship_price').innerHTML = shipamt;
	document.getElementById('ship_subtotal').innerHTML = shipamt;
	document.getElementById('order_total').innerHTML = shipamt;
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
    var tot_amt = <?=SHIP_AMT?>;
    var ship_amt = <?=SHIP_AMT?>;
	var upsell_1 = 29.99;
	// var upsell_2 =0.00;

	var final_tot = 6.95;
	//var prod_amt = document.getElementById('PROD_AMT').value;

    if(document.getElementById('billing_upsell').checked==true) {
		//upsell_1 = document.getElementById('UPSELL_AMT_1').value;
        sub_total = parseFloat(upsell_1);
        ship_amt =  <?php print SHIP_AMT; ?>;
        tot_amt =  sub_total + ship_amt;
	}
    
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
    	document.getElementById('sub_total').innerHTML = sub_total;
    //document.getElementById('ship').innerHTML = Math.round(sub_total);
    document.getElementById('tot_amt').innerHTML = tot_amt;
}
//-->
</script>

<script type="text/javascript">
// Javascript Phone Jump
    $(document).ready( function() {
        
	document.getElementById('pinfo').style.display ='block';
    
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

<style type="text/css">
  h2 {font-family: arial; font-size: 14pt; font-weight: normal; margin: 0px; padding:0px}
  .error ul {background-color: #ff0000; color: #fff}
  .error ul li {color: #fff}
</style>
<base href="<?php print WEB_ROOT; ?>" />
</head>

<body>
<?php //require_once('tracking/google-analytics.php'); ?>
            
<form action="" method="post" name="form1" id="form1">
<div id="main" class="cont" >
<div class="bottle"><b>continue</b></div>
<div id="top">
<div class="step">
<h1>STEP 1<span>Shipping Info</span></h1>
<h2>STEP 2<span>Payment Info</span></h2>
<h3>STEP 3<span>Thankyou</span></h3>
</div>
</div>

<!-- left section -->
<div id="left" class="fl">

<div class="iconCont">
<!--
<img src="images/nue_lp_payment2/img_badges.png" class="icons" />
</div>
-->

<div class="purDetailsCont">

<td width="59%" height="419" align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="529">
          <tbody>
            
            <tr>
              <td width="7%" height="31">&nbsp;</td>
              <td width="28%"><span class="greensmalltext">Product</span></td>
              <td width="54%"><span class="greensmalltext">Description</span></td>
              <td class="greensmalltext" width="11%"><div align="center">Price</div></td>
            </tr>
            
            <tr>
              <td style="border-bottom: 1px dotted gray; padding-top: 20px;" align="left" valign="middle"><p align="center">&nbsp;</p>
                  <p>&nbsp;</p></td>
              <td style="border-bottom: 1px dotted gray; padding-top: 20px" align="left" valign="top"><img src="billing/img_bottle.png" width="125" height="159" /></td>
              <td style="border-bottom: 1px dotted gray; padding-top: 20px" align="left" valign="top" class="smalltext-black"><span class="redtext">Equinox Day &amp; Night Serum -Free Trial <br />
              </span><br />
                <p>Your <span class="smalltext-black">Risk-Free</span> Trial is estimated to arrive <br />
                on: <span class="graysmalltext"><?php print $deliveryDate; ?></span></p>              </td>
              <td style="border-bottom: 1px dotted gray;padding-top: 20px" class="smalltext-black" valign="top"><div align="center">Free</div></td>
            </tr>

            <!-- <tr>
              <td valign="middle" align="center" rowspan="2"><p align="center">&nbsp;</p>
                  <p>&nbsp;</p></td>
              <td colspan="2" rowspan="2"><img src="billing/hr-line.jpg" /></td>
            </tr>
            -->
                        <tr>
              <td>&nbsp;</td>
              <td height="25">&nbsp;</td>
              <td><div align="right"><strong class="blacksmalltext">Sub-Total</strong></div></td>
              <td class="smalltext-black"><div id="sub_total" align="right">0.00</div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="25">&nbsp;</td>
              <td><div align="right"><strong class="blacksmalltext">Shipping &amp; Handling</strong></div></td>
              <td class="smalltext-black"><div align="right" id="ship_amt"><?php print SHIP_AMT; ?></div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="25">&nbsp;</td>
              <td><div align="right"><strong class="blacksmalltext">Free Trial + S&amp;H Total</strong></div></td>
              <td class="smalltext-black"><div class="red-text" align="right" id="tot_amt">$ <?php print SHIP_AMT; ?></div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="25">&nbsp;</td>
              <td>&nbsp;</td>
              <td class="smalltext-black">&nbsp;</td>
            </tr>
            <tr>
              <td height="317" valign="top" style="border-bottom: 1px dotted gray; padding-top: 20px; padding-bottom: 20px;">&nbsp;</td>
              <td style="border-bottom: 1px dotted gray; padding-top: 20px; padding-bottom: 20px;" valign="top"><img src="billing/Bottle_Envisage.jpg" width="100" height="158" /></td>
              <td style="border-bottom: 1px dotted gray; padding-top: 20px; padding-bottom: 20px;" align="left" valign="top"><span class="purpletext">Instant EnVisage FACELIFT SERUM!<br />
                &quot;Plastic Surgery in a Bottle.&quot;</span><br />
                <?php 
                $billing_upsell_checked = $billing_upsell > 0 ? ' checked = "checked" ' : ''; 
              ?>
                <div style="text-align: right; font-family:verdana; font-size: 10pt; text-align:right; padding-top:7px">Add to my order</div>
                <p class="smalltext-black">This extraordinary skin solution tightens sagging skin to visibly lift as it smoothes creases and wrinkles. The results are amazing and last between six to eight hours.</p>
                <p><span class="smalltext-black">By combining Equinox with Envisage Facelift Serum you can create an even more powerful solution to reach your anti aging goals faster! </span> </p>
                <ul>
                  <li class="smalltext-black">Smoothes creases &amp; wrinkles</li>
                  <li class="smalltext-black">Tightens and visibly lifts agging skin</li>
                  <li class="smalltext-black">Ideal for dinner parties, meetings and special occasions</li>
                </ul>
                <span class="smalltext-black">
                  </p>
                  </span><br />
              </td>
              <td style="border-bottom: 1px dotted gray; padding-top: 20px; padding-bottom: 20px;" valign="top" class="smalltext-black"><div align="center">$29.99</div>
                  <div align="center" style="padding-top: 40px">
                    <input type="checkbox" name="billing_upsell" id="billing_upsell" value="1" <?php print $billing_upsell_checked; ?> />
                  </div></td>
            </tr>

            <tr>
              <td height="14" colspan="4" align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td height="14" colspan="4" align="center" valign="middle"><div class="blacksmalltext" align="justify">
                  <div class="textgray" align="center">
                    <div align="left" class="smalltext-black">
                      <div align="center">Our
                        checkout system is hacker-safe and uses industry-strength 128-bit
                        encryption. Unlike many other sites, we do not store your credit card
                        number directly on our site.</div>
                    </div>
                  </div>
              </div></td>
            </tr>
            <tr>
              <td height="14" colspan="4" align="center" valign="middle">&nbsp;</td>
            </tr>
          </tbody>
        </table></td>

</div>

<div id="offerdetailsCont">
<div class="moneyBack"></div>
<div id="offerdetails">
<p><strong>Money Back Guarantee Terms</strong>:  Start your risk-free trial today, and we'll send you a full 30-day supply of the  Equinox  Anti-Aging System. Just pay $6.95 for S&amp;P. You have 14 days to try the product and discover why Equinox is the right anti-aging treatment for you. If you enjoy the product, do nothing, you'll be billed the low, low price of just $99.00 at the end of your trial period. In the unlikely event you decide that Equinox is not the perfect wrinkle-fighting system, call us toll-free at 1-877-316-1856 any time during your 14-day trial period to cancel your trial, then simply return the product (even if it is empty!) and you will NEVER be billed. Plus, if you decide to keep Equinox, you will receive FREE acceptance in our Elite autoship Program, and you'll receive a new supply of Equinox every 30 days at the same low Elite autoship price of $99.00 (+ $6.95 S&amp;P). Sales tax may be added to some orders depending on where you live You can cancel anytime!</p>
</div>

<div id="offerdetails2">
<h1>REAL PEOPLE. REAL RESULTS.</h1>


<div class="offerCont">
<img src="billing/img_test1.jpg" class="img_test" />
<p class="title">Thousands of Women Agree: Nue Science Simply Works!</p>
<p>"My friends ask me my secret to keeping the same glow I had in my 20's. I know what they're thinking deep down; that I've had botox or maybe even a facelift. Little do they know that my secret weapon comes in little bottle that I apply in the morning and before I go to bed. Thanks for developing one that actually delivers"
<strong>- Jade R., 41, Greely, CO</strong></p>
<div class="clear"></div>
</div>

<div class="offerCont">
<img src="billing/img_test2.jpg" class="img_test" />
<p class="title">It's not too late - or too early to start anti-wrinkle treatment!</p>
<p>"Nue Science works!! I was beginning to get wrinkles around my eyes and Nue Science not only stopped them in their tracks, but it actually reduced the appearance of the ones that were already there. I've also had dark circles under my eyes for as long as I can remember and  has reduced the appearance of those too! I use it as moisturizer after I wash my face and it feels so light and refreshing. It's really a GREAT PRODUCT!"

<strong>- Laurie M., 36, Huntington Beach, CA</strong></p>
<div class="clear"></div>
</div>

<div class="clear"></div>
</div>

<div class="cont">
<div id="footer" class="wrapper footer1" style="background-color: #F5F5F5; padding: 5px; border: 1px solid #B7B7B7; margin-bottom: 10px;">
	<p class="adjust">
	    <a href="javascript:void(0)" onclick="MM_openBrWindow('terms_conditions.php','Terms','scrollbars=yes,width=565,height=600')" class="modalAlt">Terms &amp; Conditions</a> | 		
	    <a href="javascript:void(0)" class="footer2" onclick="MM_openBrWindow('privacy_policy.html','PrivacyPolicy','scrollbars=yes,width=585,height=600')" class="modalAlt">Privacy Policy</a></p>
	<p class="text1">Copyright &copy; Equinox 2011. All rights reserved.<br />
    *Shipping and restocking fees may apply    </p>
</div>

<div class="wrapper footer1">
<p>fdsafdsfsafsafdsa<br />fdsafdsfsafsafdsa<br />fdsafdsfsafsafdsa<br />fdsafdsfsafsafdsa<br />fdsafdsfsafsafdsa<br /></p>
</div>

</div>


</div>

</div>
<!-- set -->

<!-- set -->
</div>
<!-- Endleft section -->
  
<!-- form package -->  
<div id="right" class="fr">
  <table width="370" border="0" cellspacing="0" cellpadding="0">
            <input type="hidden" name="_action" value="post" />
			<input type="hidden" name="debug" value="<?=$debug?>" />
            <input type="hidden" name="pgid" value="<?=$pgid?>" />
			<input type="hidden" name="clid" value="<?=$clid?>" />
			<input type="hidden" name="aff" value="<?=$affid?>" />
			<input type="hidden" name="paff" value="<?=$parentaff?>" />
			<input type="hidden" name="subid" value="<?=$subid?>" />            
            <input type="hidden" name="TOTAL_AMT" id="TOTAL_AMT"  value="<?=$totamt?>" />

    <tr>
      <td height="195" style="background-repeat:no-repeat" background="billing/img_formbg1.png">
      
      <div id="yourTrial">Proceed with S&amp;H Payment</div>
      
      <div id="shipping">
        <div class="weAccept"><strong>We Accept Credit and Debit Cards</strong></div>
        <div class="card"><img src="billing/card.png" width="188" height="32" /></div>
        </div>      </td>
    </tr>
    <tr>
      <td  style="background-image:url(billing/img_formbg2.png); background-repeat:repeat-y;" height="80" align="center">
            <div id="formWrap" style="width: 300px" align="center">
                      <div align="center">
                      
                      <!-- Validation Errors -->
                        <? if (!empty($error)) { ?>
                        <div style="width:250px; padding-bottom: 10px" align="left">
                            <?=displayErrors($error)?>             
                        </div>
                        <? } ?>
                                  
                      <div style="width:250px; padding-bottom: 10px" align="left">
                      <?
                      $chkpinfo = 1;
                      $chkpinfo_selected = $chkpinfo ? 'checked="checked"' : ''; 
                      ?>
                      <input name="chkpinfo" id="chkpinfo" onclick="pinfoShowHide()" type="checkbox" value="1" <?php print $chkpinfo_selected; ?> />
                      <span class="formtext">Edit my billing address</span>                      </div>
                      
                      <div style="display: block; width: 300px; display: block" id="pinfo">
                        <table width="80%" cellspacing="3" cellpadding="2" border="0" align="center">
                          <tbody>
                            <tr>
                              <td align="left"><span class="formtext">First Name:</span></td>
                            </tr>
                            <tr>
                              <td width="58%" align="left"><span class="whitetext">
                                <input type="text" maxlength="20" size="25" value="" id="fname" class="blacktext" name="fname">
                              </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="formtext">Last Name: </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                <input type="text" maxlength="20" size="25" value="" id="lname" class="blacktext" name="lname">
                              </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="formtext">Address:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                <input type="text" maxlength="45" size="25" value="" id="address" class="blacktext" name="address">
                              </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="formtext">City:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                <input type="text" maxlength="20" size="25" value="" id="city" class="blacktext" name="city">
                              </span></td>
                            </tr>
                            <tr style="display: none;">
                              <td align="left"><span class="whitetext">Country:</span></td>
                            </tr>
                            <tr style="display: none;">
                              <td align="left"><span class="whitetext">
                                <select onchange="populateState()" style="width: 140px;" id="country" class="blacktext" name="country">
                                  <option value="US">United States</option>
                                </select>
                              </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="formtext">State/Prov:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                <select id="state" class="text_field-area" name="state">
                                    <option selected="selected" value="">[Select your State]</option>
<option value="AL">Alabama (AL)</option>
<option value="AK">Alaska (AK)</option>
<option value="AZ">Arizona (AZ)</option>
<option value="AR">Arkansas (AR)</option>
<option value="CA">California (CA)</option>
<option value="CO">Colorado (CO)</option>
<option value="CT">Connecticut (CT)</option>
<option value="DE">Delaware (DE)</option>
<option value="FL">Florida (FL)</option>
<option value="GA">Georgia (GA)</option>
<option value="HI">Hawaii (HI)</option>
<option value="ID">Idaho (ID)</option>
<option value="IL">Illinois (IL)</option>
<option value="IN">Indiana (IN)</option>
<option value="IA">Iowa (IA)</option>
<option value="KS">Kansas (KS)</option>
<option value="KY">Kentucky (KY)</option>
<option value="LA">Louisiana (LA)</option>
<option value="ME">Maine (ME)</option>
<option value="MD">Maryland (MD)</option>
<option value="MA">Massachusetts (MA)</option>
<option value="MI">Michigan (MI)</option>
<option value="MN">Minnesota (MN)</option>
<option value="MO">Missouri (MO)</option>
<option value="MS">Mississippi (MS)</option>
<option value="MT">Montana (MT)</option>
<option value="NE">Nebraska (NE)</option>
<option value="NV">Nevada (NV)</option>
<option value="NH">New Hampshire (NH)</option>
<option value="NJ">New Jersey (NJ)</option>
<option value="NM">New Mexico (NM)</option>
<option value="NY">New York (NY)</option>
<option value="NC">North Carolina (NC)</option>
<option value="ND">North Dakota (ND)</option>
<option value="OH">Ohio (OH)</option>
<option value="OK">Oklahoma (OK)</option>
<option value="OR">Oregon (OR)</option>
<option value="PA">Pennsylvania (PA)</option>
<option value="RI">Rhode Island (RI)</option>
<option value="SC">South Carolina (SC)</option>
<option value="SD">South Dakota (SD)</option>
<option value="TN">Tennessee (TN)</option>
<option value="TX">Texas (TX)</option>
<option value="VT">Vermont (VT)</option>
<option value="VA">Virginia (VA)</option>
<option value="WA">Washington (WA)</option>
<option value="DC">Washington DC (DC)</option>
<option value="WV">West Virginia (WV)</option>
<option value="WI">Wisconsin (WI)</option>
<option value="WY">Wyoming (WY)</option>
                                </select>
                              </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="formtext">Zip:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                <input type="text" maxlength="5" size="17" value="" id="zip" class="blacktext" name="zip">
                              </span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="formtext">Phone:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                    <input type="text" maxlength="3" style="width:30px;" value="" id="w_phone1" name="w_phone1">
                                    <input type="text" maxlength="3" style="width:40px;" value="" id="w_phone2" name="w_phone2">
                                    <input type="text" maxlength="4" style="width:40px;" value="" id="w_phone3" name="w_phone3">
                              </span></td>
                            </tr>
                                    <input type="hidden" value="" id="h_phone1" name="h_phone1" />
                                    <input type="hidden" value="" id="h_phone2" name="h_phone2" />
                                    <input type="hidden" value="" id="h_phone3" name="h_phone3" />
                            <!--
                            <tr>
                              <td align="left"><span class="formtext">Phone 2:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                    <input name="h_phone1" type="text" id="h_phone1" value="" style="width:30px;" maxlength="3" />
                                    <input name="h_phone2" type="text" id="h_phone2" value="" style="width:40px;" maxlength="3" />
                                    <input name="h_phone3" type="text" id="h_phone3" value="" style="width:40px;" maxlength="4" />
                              </span></td>
                            </tr>
                            -->
                            
                            <tr>
                              <td align="left"><span class="formtext">Email:</span></td>
                            </tr>
                            <tr>
                              <td align="left"><span class="whitetext">
                                <input type="text" maxlength="50" size="25" value="" id="email" class="blacktext" name="email" />
                              </span></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      
                      <!-- Card Info Section -->
                      <div id="cardinfo">
                        <table width="80%" cellspacing="3" cellpadding="2" border="0" align="center">
                          <tbody>
                            
                            <!-- Payment Method-->
                            <tr>
                              <td align="left"><span class="formtext">Payment Method</span></td>
                            </tr>
                            <tr>
                              <td width="58%" align="left">
                                <select class="formtext2" name="cardtype" id="cardtype">
                                  <option value="0">Visa</option>
                                  <option value="1">Mastercard</option>
                                </select>                              </td>
                            </tr>


                            <!-- Card Number -->
                            <tr>
                              <td align="left"><span class="formtext">Credit Card #</span></td>
                            </tr>
                            <tr>
                              <td width="58%" align="left"><span class="whitetext">
                                <input name="cardnum" type="text" class="blacktext" id="cardnum" onchange="this.value = this.value.replace (/[-' ']/g,'')" value="" size="25" maxlength="16" />
                              </span></td>
                            </tr>
                            
                            <!-- Expiry Date -->
                            <tr>
                              <td align="left"><span class="formtext">Card Expiry</span></td>
                            </tr>
                            <tr>
                              <td width="58%" align="left">

                    <select name="ccmonth" class="formtext2" id="ccmonth">
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
                     / <span class="form">
                    <select name="ccyear" class="formtext2" id="ccyear">
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
                    </select>                              </td>
                            </tr>                        

                            <!-- CVV -->
                            <tr>
                              <td align="left"><span class="formtext">Card Security Code</span></td>
                            </tr>
                            <tr>
                              <td width="58%" align="left"><span class="whitetext">
                                <input name="cvv" type="text" class="blacktext" id="cvv" value="" size="5" maxlength="3" />
                              <span class="textgray">(<a href="javascript:void(0);" class="greensmalltext4" onclick="MM_openBrWindow('cvv.html','cvv','scrollbars=yes,width=600,height=600')">what is this?</a>)</span>
                              </span></td>
                            </tr>
                          </table>                      
                      </div>
                      </div>      
      </div>      </td>
    </tr>

<tr>
<td style="background-image:url(billing/img_formbg2.png); background-repeat:repeat-y;" height="30"></td>
</tr>

    <tr>
      <td height="50px" background="billing/img_formbg3.png">
		<input type="submit" value="" id="submitbtn" /></td>
        
              <td height="150px" background="billing/img_formbg3.png">


<!-- 
<span class="textgray">By clicking submit you agree to the <br />
<a href="javascript:void(0)" onclick="MM_openBrWindow('terms_conditions.php','Terms','scrollbars=yes,width=565,height=600')" class="footer2">Terms &amp; Conditions</a> of this site.</span>
-->


</td>



    </tr>
    
    <tr>
      <td>    
    <td>  <tr>
 </tr></td>
  </table>
</div>
<div class="clear"></div>
<!-- endset -->
<!-- set -->
<!-- set -->
<!-- form package -->
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
</html>
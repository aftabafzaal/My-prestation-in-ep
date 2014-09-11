<? 
require_once("./include/thankyou_code.php");
//define('WEB_ROOT', 'http://localhost/env/');
require_once("./include/upsell_code.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo COMPANY_NAME;?>|  - Thank You</title>

<link href="<?php print WEB_ROOT; ?>equinox-cart_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

<style type="text/css">
<!--
.cartformtext {font-family:verdana;font-size:10pt;color:#999999;font-weight:bold}
.cartformtext1 {font-family:verdana;font-size:10pt;color:#000000;font-weight:normal}
.heading2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
	color: #fff;
	border-left-width: 15px;
	border-left-style: solid;
	border-left-color: #C4D1D9;
}
.style11 {
	color: #CE0086;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: normal;
}
.style14 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 8pt;
	color: #000000;
	font-weight: normal;
	text-align:justify
}
.style99 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 30px;
	color: #CE0086;
	font-weight: bold;
}
.text {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
	border-left-width: 15px;
	border-left-style: solid;
	border-left-color: #DFE6EA;
}
.text11 {font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight:bold;
	color: #333333;
	border-left-style: none;
	text-align: left;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
}
.text111 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight:bold;
	color: #333333;
	border-left-width: 15px;
	border-left-style: solid;
	border-left-color: #DFE6EA;
}
-->
</style>
</head>
<body>
<?php require_once("tracking/affiliate-tracking-code.php"); ?>
<?php //require_once("tracking/aol-code-img.php"); ?>

<!-- Katie Bishop - Tracking Code -->
<iframe width='1' height='1' frameborder='0' src='https://affiliate.adgtracker.com/rd/ipx.php?hid=<?php print $subid; ?>&sid=833&transid=<?php print $custid; ?>'></iframe>

<div id="container">
	<div id="header">    	
    </div>
    
    <div id="mainbody"><div>
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
                      <tbody>
                        <tr>
                          <td align="right" bgcolor="#040404"><div style=" font-weight:bold; color:#FFFFFF; padding-right:10px;">SECURE ORDER FORM</div></td>
                        </tr>
                        <!--<tr><td height="10"></td></tr> -->
                        <!--<tr><td colspan="2" align="center">
  <img src="images/new-banner.jpg" width="700" height="150" />
  </td>
      </tr> -->
                        <!--<tr><td height="10"></td></tr> -->
                        <!--<tr><td height="55"><div align="center" class="style8"><span style="color:#000000">Please Scroll Down to read your Order Details</span></div></td></tr>   -->
                        <tr>
                          <td align="center" bgcolor="#91479a" height="56" valign="middle"><div align="center"><span class="style99" style="color: #fff">Thank you for your order. </span></div></td>
                        </tr>
                        <tr>
                          <td align="center" bgcolor="#FFFFFF" height="98" valign="top"><table align="center" border="0" cellpadding="4" cellspacing="8" width="63%">
                              <tbody>
                                <tr>
                                  <td class="text11" bgcolor="#EEEEEE" width="51%">Order Date: </td>
                                  <td class="text11" bgcolor="#EEEEEE" width="49%"><?php print date('jS M, Y'); ?></td>
                                </tr>
                                <tr>
                                  <td class="text11" bgcolor="#EEEEEE">Estimated date of Delivery: </td>
                                  <td class="text11" bgcolor="#EEEEEE"><?=$deliveryDate?></td>
                                </tr>
                                <!-- <tr>
                                  <td class="text11" bgcolor="#EEEEEE">Shipping Mode:</td>
                                  <td class="text11" bgcolor="#EEEEEE"><?=$ship_info_2?></td>
                                </tr>
                               --> 
                              </tbody>
                          </table></td>
                        </tr>
                        <tr>
                          <td bgcolor="#91479a"><div style="font-size:17px; font-weight:bold; line-height:30px; text-align: center; color:#FFFFFF"> (Note: Orders received on Friday will be processed on Monday)</div></td>
                        </tr>
                        <tr>
                          <td colspan="2" bgcolor="#FFFFFF">
                           <?php require_once("upsell_form.php"); ?>
                           </td>
                        </tr>
                      </tbody>
                    </table>
    </div>
      <div class="clearfix"></div>
    </div>
    
    <div id="footer">
    <p class="terms" align="center"><span style="background-repeat:no-repeat; background-position:top"><a href="javascript:void(0)" onclick="MM_openBrWindow('terms_conditions.php','Terms','scrollbars=yes,width=565,height=600')" class="footer2">Offer Terms</a> <span class="footer2">|</span> <a href="javascript:void(0)" class="footer2" onclick="MM_openBrWindow('privacy_policy.php','PrivacyPolicy','scrollbars=yes,width=585,height=600')">Privacy Policy</a> |</span> <a href="contactus.php" class="footer2">Contact Us</a></p>
    <style>.terms_pop { float:left;  position: absolute;  top:100px;   width: 400px;   border: 1px solid #999;    text-align: left;  z-index: 5;  padding: 10px; color:#000; }.style1 {font-family: Arial, Helvetica, sans-serif}.terms_scroll{ height:270px; border: 1px solid #999; overflow: scroll;  overflow-x: hidden; overflow-y:scroll; background: #fff;  text-align: left;   padding: 5px;  color: 636463; }</style> 
    <div id="terms_popup" style="border: 1px solid rgb(153, 153, 153); padding: 10px; background: none repeat scroll 0% 0% rgb(255, 255, 255); float: left; position: absolute; top: 100px; height: auto; width: 400px; -moz-background-inline-policy: continuous; color: rgb(0, 0, 0); display: none; text-align: left; z-index: 5;"></div><div id="termsdiv"></div> 
      </div>
<div align="center" style=" font:Arial, Helvetica, sans-serif; font-size:11px; font-weight: normal; padding: 5px">
  <?php require_once("include/disclaimer.php"); ?>
</div>      
    <div id="footer">
  
    </div>
    
</div>
    </form>
    <div style="display: none; position: absolute; top: 0px; left: 0px; opacity: 0.000004; visibility: visible;" class="tooltipContent" id="sprytooltip1"><span class="cvvText" style="font-weight: bold; text-align: left;">What is Card Validation Code?</span><span class="cvvText"><br>
The Card Validation Code (CVC) is a three-digit security code that is 
printed on the back of cards. The number appears in reverse italic at 
the top of the signature panel at the end (see sample). This program 
helps validate that a genuine card is being used during a transaction.<br>
<br />
<img src="<?php print WEB_ROOT; ?>images2/cvc_help.gif" alt="cvv" width="261" height="163"><br>
<br />
All MasterCard cards, both credit and debit, were required to contain 
CVC by January 1, 1997; all Visa cards must contain CVC by January 1, 
2001. </span></div>
</body></html>
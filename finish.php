<? require_once("./include/finish_code.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thank You for order once again - Equinox</title>
<link href="<?php print WEB_ROOT; ?>quinox-5-style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<style type="text/css">
<!--
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
.text {font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
	border-left-width: 15px;
	border-left-style: solid;
	border-left-color: #FFFFFF;
}
.text111 {font-family: Arial, Helvetica, sans-serif;
	font-size: 13px; 
	font-weight:bold;
	color: #333333;
	border-left-width: 15px;
	border-left-style: solid;
	border-left-color: #FFFFFF;
}
-->
</style>
<base href="<?php print WEB_ROOT; ?>" />
</head>

<body>
<?php //include_once('tracking/google-analytics.php'); ?>
<?php //include_once('tracking/shareasale-tracking-code.php'); ?>
<?php //include_once('tracking/google-analytics-cleanser-thankyou.php'); ?>
<?php //include_once('tracking/affiliate-tracking-code.php'); ?>
<?php //include_once('tracking/admedia-tracking-code.php'); ?>

<table width="100" align="center" cellpadding="0" cellspacing="0" background="images/tablebg2.jpg">
  <tr>
    <td align="left" valign="top"><img src="images/thankyou.jpg" width="1018" height="43" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images/thankyou-02.jpg" width="1018" height="27" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images/thankyou-03.jpg" width="1018" height="26" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images/thankyou-04.jpg" width="1018" height="27" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images/thankyou-05.jpg" width="1018" height="26" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images/thankyou-06.jpg" width="1018" height="27" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images/thankyou-07.jpg" width="1018" height="26" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images/thankyou-08.jpg" width="1018" height="27" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images/thankyou-09.jpg" width="1018" height="26" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images/thankyou-10.jpg" width="1018" height="30" /></td>
  </tr>
  <tr>
    <td height="142" align="left" valign="top" style="background-repeat:no-repeat; background-position:right;"><table width="100%" cellspacing="0" cellpadding="0">
      <tr>
            <td colspan="3" align="center" bgcolor="#EF59A3"><span style="font-size:17px; font-weight:bold; line-height:30px; text-align: center;">Thank You For Your Order </span></td>
        </tr>
	  <tr>
        <td height="140" align="center" valign="top"><br />
          <table width="65%" border="0" align="center" cellpadding="4" cellspacing="8">
            <tr>
              <td width="49%" bgcolor="#EEEEEE" class="text11">Order Date: </td>
              <td width="51%" bgcolor="#EEEEEE" class="text11"><?=date('m-d-Y');?></td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE" class="text11">Estimated date of Delivery: </td>
              <td bgcolor="#EEEEEE" class="text11"><?php print $ship_info_1; ?></td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE" class="text11">Shipping Mode:</td>
              <td bgcolor="#EEEEEE" class="text11"><?php print $ship_info_2; ?></td>
            </tr>
          </table>		</td>
		
		</tr>
		
		 <tr valign="top">
            <td colspan="3" bgcolor="#EF59A3"><div style="font-size:17px; font-weight:bold; line-height:30px; text-align: center;"> (Note: Orders recieved on Friday will be processed on Monday)</div></td>
        </tr>
		  <tr>
		  <td>
		    <table width="70%" border="0" align="center" cellpadding="2" cellspacing="8">
              <tr>
                <td height="32" colspan="2" bgcolor="#EF59A3"><strong>Order Processed</strong></td>
              </tr>
              <tr>
                <td width="49%" bgcolor="#EEEEEE" class="text">Customer #: </td>
                <td width="51%" bgcolor="#EEEEEE" class="text111"><?php print $custid; ?></td>
              </tr>
              <tr>
                <td bgcolor="#EEEEEE" class="text">Invoice ID: </td>
                <td bgcolor="#EEEEEE" class="text111"><?php print $invoice_id; ?></td>
              </tr>
              <tr>
                <td bgcolor="#EEEEEE" class="text">Name</td>
                <td bgcolor="#EEEEEE" class="text"><?php print $fname.' '.$lname; ?></td>
              </tr>
              <tr>
                <td bgcolor="#EEEEEE" class="text">Address:</td>
                <td bgcolor="#EEEEEE" class="text"><?php print $address; ?></td>
              </tr>
              <tr>
                <td bgcolor="#EEEEEE" class="text">City:</td>
                <td bgcolor="#EEEEEE" class="text"><?php print $city; ?></td>
              </tr>
              <tr>
                <td bgcolor="#EEEEEE" class="text">State/Prov:</td>
                <td bgcolor="#EEEEEE" class="text"><?php print $state; ?></td>
              </tr>
              <tr>
                <td bgcolor="#EEEEEE" class="text">Zip:</td>
                <td bgcolor="#EEEEEE" class="text"><?php print $zip; ?></td>
              </tr>
              <tr>
                <td bgcolor="#EEEEEE" class="text">Phone:</td>
                <td bgcolor="#EEEEEE" class="text"><?php print $w_phone; ?></td>
              </tr>
<!--
              <tr>
                <td bgcolor="#EEEEEE" class="text">Phone 2:</td>
                <td bgcolor="#EEEEEE" class="text"><?php //print $h_phone; ?></td>
              </tr>
-->
              <tr>
                <td bgcolor="#EEEEEE" class="text">Email:</td>
                <td bgcolor="#EEEEEE" class="text"><?php print $email; ?></td>
              </tr>
              <!--<tr>
                <td bgcolor="#FFFFFF" class="text">&nbsp;</td>
                <td bgcolor="#FFFFFF" class="text">&nbsp;</td>
              </tr>-->
              <!--<tr>
                <td height="34" colspan="2" bgcolor="#FFFFFF" class="text"><strong>Order Information</strong></td>
              </tr> -->
            </table>		  </td>
		  </tr>
		<tr>
		<td>&nbsp;
		
		</td>
		</tr>
    </table></td>
  </tr>
  
  <tr>
    <td align="left" valign="top"><img src="images/equinox-pg2-21.jpg" width="1018" height="65" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images/equinox-pg2-22.jpg" width="1018" height="34" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images/equinox-pg2-23.jpg" width="1018" height="35" /></td>
  </tr>
  
  <tr>
    <td height="35" align="center" valign="middle" background="images/equinox-5-52.jpg" style=" background-repeat:no-repeat;"><span style="background-repeat:no-repeat; background-position:top"><a href="javascript:void(0)" class="footer2" onclick="MM_openBrWindow('terms_conditions.html','Terms','scrollbars=yes,width=585,height=600')">Offer Terms</a> <span class="footer2">|</span> <a href="javascript:void(0)" class="footer2" onclick="MM_openBrWindow('privacy_policy.html','PrivacyPolicy','scrollbars=yes,width=585,height=600')">Privacy Policy</a></span></td>
  </tr>
  
  <tr>
    <td align="left" valign="top"><img src="images/equinox-5-53.jpg" width="1018" height="12" /></td>
  </tr>
</table>
</body>
</html>

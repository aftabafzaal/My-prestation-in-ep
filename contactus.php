<? include("include/config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
<!--
function validateForm(frm)
{
	if(frm.name.value==""){
		alert("Please Enter Your Name");
		frm.name.focus();
		return false;
	}
	if(frm.email.value==""){
		alert("Please Enter Your Email Address");
		frm.email.focus();
		return false;
	}
	   if( frm.email.value!="" ){     
    	var  apos=frm.email.value.indexOf("@");
		var  dotpos=frm.email.value.lastIndexOf(".");
		
	  if (apos<1||dotpos-apos<2){
			alert("Please Enter Valid Email Address")
			frm.email.focus();
			return false;
	  }
  }

	if(frm.subject.value==""){
		alert("Please Enter Subject");
		frm.subject.focus();
		return false;
	}
	
	if(frm.message.value==""){
		alert("Please Enter Message");
		frm.message.focus();
		return false;
	}

	return true;
}

/*function updateShipping(shipamt) {
	document.getElementById('ship_price').innerHTML = shipamt;
	document.getElementById('ship_subtotal').innerHTML = shipamt;
	document.getElementById('order_total').innerHTML ="$"+shipamt;
	document.getElementById('shipamt_hide').value=document.getElementById('shipamt').value;
}*/

/*function MM_openBrWindow(theURL,winName,features) { //v2.0


  DisableVSAChat();  
  setTimeout('GXTimer()',2000);
  window.open(theURL,winName,features);
}
*/
function pinfoShowHide(){
//alert(document.getElementById('chkpinfo').value);
if(document.getElementById('chkpinfo').checked==true){
	document.getElementById('pinfo').style.display ='block';
	document.getElementById('chkpinfo').value="";
}else{
	document.getElementById('pinfo').style.display ='none';
	} 
}

//-->
</script>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0

  //DisableVSAChat();  
  //setTimeout('GXTimer()',2000);
var windo=  window.open(theURL,winName,features);
windo.focus();
}
//-->
</script>
<script type="text/javascript" src="js/states.js"></script>

<script>
var postState = '<?=$state?>';
var postCountry = '<?=$country?>';
</script>
<style type="text/css">
.body{
	padding-top: 0px  !important;
	padding-right: auto  !important;
	padding-bottom: 0px  !important;
	padding-left: auto  !important;
	margin:auto !important
}

.style6 {font-size: 24px;color:#FFFFFF}
.text11 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight:bold;
	color: #333333;
	border-left-style: none;
	text-align: left;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
}

</style>
<!-- Pixel for Affiliate System -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo COMPANY_NAME;?>| Contact Us</title>
<link href="equinox-style.css" rel="stylesheet" type="text/css" />
<link href="css/equinox-special-offer-new.css" rel="stylesheet" type="text/css" />
<link href="cssForm/jquery/jquery-ui-1.8.4.custom.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.footer-textb {font-family: arial; font-size: 10pt; font-weight: bold; margin: 0px; padding:0px; line-height:18px;}
</style>
</head>

<body>
<?php require_once("tracking/google-analytics.php"); ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="93" align="left" valign="top" class="heaer-repeat"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="15%" height="71" align="center" valign="middle"><br /></td>
            <td width="17%" align="center" valign="middle"><img src="images2/logo-contact-us.png"/></td>
            <td width="68%" align="left" valign="top">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="546" align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="57%" height="595" align="left" valign="top">
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>


		   <tr>
            <td height="10" colspan="3" bgcolor="#FFFFFF"></td>
          </tr>
          <tr>
            <td colspan="3" align="center" valign="middle" bgcolor="#FFFFFF"><table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="544" colspan="2" align="left" valign="middle" bgcolor="">
				<br />				<br />
			<? if(!isset($_POST["message"])) {?>
			<form method="post" action="<?=$_SERVER["php_self"]?>" onsubmit="return validateForm(this)" name="contactForm" id="contactForm" >
			<table width="69%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="43" colspan="2" align="left" valign="top"  class="coloured-text">  <?php echo $_SESSION['pages']->contactus;?><br /></td>
                </tr>
              <tr>
                <td width="18%" height="43" valign="top"  class="text11"> Name </td>  
                <td width="82%" height="43" valign="top"  class="text11"><input type="text" size="25" name="name" id="name" /></td>
              </tr>
              <tr>
                <td height="47" valign="top"  class="text11"> Email </td>
                <td height="47" valign="top"  class="text11"><input type="text" size="25" name="email" id="email" /></td>
              </tr>
              <tr>
                <td height="50" valign="top"  class="text11"> Subject </td>
                <td height="50" valign="top"  class="text11"><input type="text" size="25" name="subject" id="subject" /></td>
              </tr>
              <tr>
                <td height="68" valign="top"  class="text11"> Message </td>
                <td height="68" valign="top"  class="text11"><textarea cols="50"  rows="6"  name="message" id="message" /> </textarea></td>
              </tr>
			  <tr>
			  <td height="108" colspan="2" valign="top"><br />			    <input type="submit" name="submit" value="Submit" />			  </td>
			  </tr>
            </table>
			</form>
			<? } else {
					email(SITE_EMAIL,$_POST["message"],$_POST["email"],$_POST["subject"],$_POST["name"]);
					?>
			<br />
				
				<div align="center" style="text-align:center;background-color:#0971f1; padding:10px 0 10px 0; "> <span class="style6">Your Message Has Been Submitted Successfully. </span> </div>
				<? } ?></td>
              </tr>
		</table>	
			
			</td>
            
          </tr>
		  			<? if(!isset($_POST["message"])) {?>
		  
		  <tr>
		    <td style="font-size:17px; font-weight:bold;color:#333333;" class="style6" align="center">&nbsp;</td>
		    </tr>
		  <? } ?>
          <tr>
            <td height="19" colspan="3" align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="245" align="center" valign="top"><div style="text-align:center">
 
  <p class="terms" align='center'><span style=" background-repeat:no-repeat;"><span style="background-repeat:no-repeat; background-position:top"><a href="javascript:void(0)" onclick="MM_openBrWindow('terms_conditions.php','Terms','scrollbars=yes,width=565,height=600')" class="footer2">Offer Terms</a> <span c class="footer2">|</span> <a href="javascript:void(0)" class="footer2" onclick="MM_openBrWindow('privacy_policy.php','PrivacyPolicy','scrollbars=yes,width=585,height=600')">Privacy Policy</a></span></span> | <a href="contactus.php" class="footer2">Contact Us</a></p>
  <style>.terms_pop { float:left;  position: absolute;  top:100px;   width: 400px;   border: 1px solid #999;    text-align: left;  z-index: 5;  padding: 10px; color:#000; }.style1 {font-family: Arial, Helvetica, sans-serif}.terms_scroll{ height:270px; border: 1px solid #999; overflow: scroll;  overflow-x: hidden; overflow-y:scroll; background: #fff;  text-align: left;   padding: 5px;  color: 636463; }</style><div id="terms_popup" style="border: 1px solid rgb(153, 153, 153); padding: 10px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; float: left; position: absolute; top: 100px; height: auto; width: 400px; -moz-background-clip: border; -moz-background-origin: padding; -moz-background-inline-policy: continuous; color: rgb(0, 0, 0); display: none; text-align: left; z-index: 5;"></div><div id='termsdiv'></div>
    
      </div>
<div align="center" style=" font:Arial, Helvetica, sans-serif; font-size:11px; font-weight: normal; padding: 5px">
  <?php require_once("include/disclaimer.php"); ?>
</div>      
      </td>
              </tr>
            </table></td>
            </tr>
        </table>
</body>
</html>
<?
function email($cust_email,$message,$from,$subject,$name)

{
	// Add the following lines 
$from = preg_replace("([\r\n])", "", $from);
$subject = preg_replace("([\r\n])", "", $subject);
$cust_email = preg_replace("([\r\n])", "", $cust_email);

$match = "/(bcc:|cc:|content\-type:)/i";
if (preg_match($match, $from) ||
    preg_match($match, $subject) ||
    preg_match($match, $message)) {
  die("Header injection / Spam Attempt detected.. Cannot continue ");
}


		$http_host = 'safedataxchange.com'; // Web address where email is being sent 
		$sEmail="$cust_email";  // To 
//		$strSenderEmail = "no-reply@$http_host"; // From
		$strSenderEmail = $from; // From
		$strSenderName ="$name"; 
		$subject=$subject;
//		$subject="Your Refund Request Approved";
		$delimiter = "\n";
		// ------------------- Email Headers [Dont Change it] ---------------------------
		$headers = 'From: '. $strSenderName .' <' . $strSenderEmail . '>' . $delimiter;
		$headers .= 'Reply-To: ' . $strSenderEmail .  $delimiter;
		$headers .= 'Return-Path: ' . $strSenderEmail . $delimiter;
		$headers .= 'MIME-Version: 1.0' . $delimiter;
		$msgid = '<' . gmdate('YmdHs') . '.' . substr(md5($message . microtime()), 0, 6) . rand(100000, 999999) . '@' . $http_host . '>';
		$headers .= 'Message-ID: ' . $msgid . $delimiter;
		$headers .= 'X-Priority: 3' . $delimiter;
		$headers .= 'X-Mailer: Private Mailer' . $delimiter;
		$headers .= 'Content-Type: text/html; charset=\"iso-8859-1\"' . $delimiter;
		$headers .= "Content-Transfer-Encoding: 8bit" . $delimiter;
		// ---------------------- End Email Headers ------------------------------------ 
		// ---------------------- HTML EMAIL MESSAGE ---------------------------------------
/*$message = "<html>
<head>
<title>Refund Request Approved</title>
</head>
<body>
<p>Dear Valued Customer,</p>
<p>Your Refund request has been approved and your account will be credited with $".$inv_info['totalamt']." within two weeks. Thank you for being with us</p>
</body>
</html>
";*/
		// ---------------------- END HTML EMAIL MESSAGE ---------------------------------------

		if(!mail($sEmail, $subject, $message, $headers))
		{
			print "failed";
		}


}
?>
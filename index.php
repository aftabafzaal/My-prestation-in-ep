<? require_once("./include/index_code.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo COMPANY_NAME;?>| Home</title>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

<script type="text/javascript" src="<?php print $protocol; ?>ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/states.js"></script>
<script>
var postState = '<?=$state?>';
var postCountry = '<?=$country?>';
</script>


<style type="text/css">
  input.blacktext {border:1px solid #ccc; font-family: verdana; font-size: 10pt; padding: 2px; margin-top: 2px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;}
  select.blacktext {border:1px solid #ccc; font-family: verdana; font-size: 10pt; padding: 2px; margin-top: 2px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;}
  div.formtext {font-family: arial; font-size: 10pt; font-weight: bold; color: #421562; margin-top: 5px;}

  h2 {font-family: arial; font-size: 14pt; font-weight: normal; margin: 0px; padding:0px}
  .error ul {background-color: #ff0000; color: #fff}
  .error ul li {color: #fff}
</style>  
<link href="<?php print WEB_ROOT; ?>css/equinox-special-offer-new.css" rel="stylesheet" type="text/css" />
<link href="<?php print WEB_ROOT; ?>cssForm/jquery/jquery-ui-1.8.4.custom.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.footer-text {font-family: arial; font-size: 9pt; font-weight: normal; margin: 0px; padding:0px; line-height:18px;}
</style>
<script src="<?php print WEB_ROOT; ?>Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<!-- <script src="Scripts/swfobject_modified.html" type="text/javascript"></script> -->
<script type="text/javascript" src="<?php print WEB_ROOT; ?>js/index_form_validations.js"></script>
<script type="text/javascript" src="<?php print WEB_ROOT; ?>js/phone_jump.js"></script>

<script type="text/javascript">
$(document).ready( function() {

 var currency_symbol = '$';
 var country = '<?php print $country; ?>';

 // Default Currency Symbol
  if (country=='UK') {
   currency_symbol='&pound;';
   $('#w_phone1').attr('maxlength', 3);
   $('#w_phone2').attr('maxlength', 4);
   $('#w_phone3').attr('maxlength', 4);


   $('#w_phone1').css("width","30px");
   $('#w_phone2').css("width","40px");
   $('#w_phone3').css("width","40px");

  } else if (country=='US') {
   currency_symbol='$';  
   $('#w_phone1').attr('maxlength', 3);
   $('#w_phone2').attr('maxlength', 3);
   $('#w_phone3').attr('maxlength', 4);


   $('#w_phone1').css("width","30px");
   $('#w_phone2').css("width","30px");
   $('#w_phone3').css("width","40px");
  } else {
   currency_symbol='$';    
   $('#w_phone1').attr('maxlength', 3);
   $('#w_phone2').attr('maxlength', 3);
   $('#w_phone3').attr('maxlength', 4);


   $('#w_phone1').css("width","30px");
   $('#w_phone2').css("width","30px");
   $('#w_phone3').css("width","40px");
  }

 // Set Default Currency Symbol
 $('.currency_symbol').html(currency_symbol);

 $('#country').change( function() {
  //alert(this.value);

  if (this.value=='UK') {
   currency_symbol='&pound;';

   $('#w_phone1').attr('maxlength', 3);
   $('#w_phone2').attr('maxlength', 4);
   $('#w_phone3').attr('maxlength', 4);


   $('#w_phone1').css("width","30px");
   $('#w_phone2').css("width","40px");
   $('#w_phone3').css("width","40px");

  } else if (this.value=='US') {
   currency_symbol='$';

   $('#w_phone1').attr('maxlength', 3);
   $('#w_phone2').attr('maxlength', 3);
   $('#w_phone3').attr('maxlength', 4);


   $('#w_phone1').css("width","30px");
   $('#w_phone2').css("width","30px");
   $('#w_phone3').css("width","40px");

  } else {
   currency_symbol='$';    

   $('#w_phone1').attr('maxlength', 3);
   $('#w_phone2').attr('maxlength', 3);
   $('#w_phone3').attr('maxlength', 4);


   $('#w_phone1').css("width","30px");
   $('#w_phone2').css("width","30px");
   $('#w_phone3').css("width","40px");
  }

  // Set Currency Symbol
  $('.currency_symbol').html(currency_symbol);
 });
 
});
</script>

</head>

<body>
<?php //require_once('tracking/google-analytics.php'); ?>
    
 <div id="container">

	<div id="mainheader">
    	<!-- div to place the flash animation(samples) -->
<!-- <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="381" height="53">
    	  <param name="movie" value="flash/ticker2.swf" />
    	  <param name="quality" value="high" />
    	  <param name="wmode" value="opaque" />
    	  <embed src="flash/ticker2.swf" quality="high" wmode="opaque" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="381" height="53"></embed>
  	  </object>
-->
<div id="animatedsamples" style="font-family: arial; font-weight: normal; font-size: 20pt; text-align: center; padding-top: 8px; color: #284099">
1 Young Looks Rule: OBEY!
</div>
    	
        <a name="begin"></a>
        <form action="" method="post" name="form1" id="form1">
            <input type="hidden" name="_action" value="post" />
            <input type="hidden" name="debug" value="<?php print $debug; ?>" />
			<input type="hidden" name="pgid" value="<?=$pgid?>" />
			<input type="hidden" name="clid" value="<?=$clid?>" />
			<input type="hidden" name="aff" value="<?=$affid?>" />
			<input type="hidden" name="paff" value="<?=$parentaff?>" />
			<input type="hidden" name="subid" value="<?=$subid?>" />            
            <input type="hidden" name="TOTAL_AMT" id="TOTAL_AMT"  value="<?=$totamt?>" />
        <div id="formbox">
<!--  <div class="valLeft">
       <div id="f1"></div><div id="f1a"><img src="https://www.mysslhost.com/bmg/w/dermaliftsp.com/uk/images/ok.jpg" /></div>
        <div id="f3"></div><div id="f3a"><img src="https://www.mysslhost.com/bmg/w/dermaliftsp.com/uk/images/ok.jpg" /></div>
        <div id="f4"></div><div id="f4a"><img src="https://www.mysslhost.com/bmg/w/dermaliftsp.com/uk/images/ok.jpg" /></div>
        <div id="f6"></div><div id="f6a"><img src="https://www.mysslhost.com/bmg/w/dermaliftsp.com/uk/images/ok.jpg" /></div>     
        <div id="f8"></div><div id="f8a"><img src="https://www.mysslhost.com/bmg/w/dermaliftsp.com/uk/images/ok.jpg" /></div>
      
          </div>
           
    <div class="valRight">      
        <div id="f2"></div><div id="f2a"><img src="https://www.mysslhost.com/bmg/w/dermaliftsp.com/uk/images/ok.jpg" /></div>
        <div id="f7"></div><div id="f7a"><img src="https://www.mysslhost.com/bmg/w/dermaliftsp.com/uk/images/ok.jpg" /></div>
        <div id="f5"></div><div id="f5a"><img src="https://www.mysslhost.com/bmg/w/dermaliftsp.com/uk/images/ok.jpg" /></div>      
        <div id="f9"></div><div id="f9a"><img src="https://www.mysslhost.com/bmg/w/dermaliftsp.com/uk/images/ok.jpg" /></div>
    </div>-->
    <table width="100%" border="0" cellspacing="0" cellpadding="0" >
              <tr height="33px">
                <td align="left"><div class="formtext">First Name</div><input name="fname" maxlength="50" size="18" id="fname" tabindex="1" class="blacktext" type="text" value="<?php print $fname; ?>" /><div id="f1"></div><div id="f1a"><img src="<?php print WEB_ROOT; ?>images2/ok.jpg" /></div></td>
                <td><div class="formtext">Last Name</div><input name="lname" maxlength="50" size="18" id="lname" tabindex="2" class="blacktext" class="blacktext" type="text" value="<?php print $lname; ?>" /><div id="f2"></div><div id="f2a"><img src="<?php print WEB_ROOT; ?>images2/ok.jpg" /></div></td>
              </tr>
              <tr height="33px">
                <td align="left"><div class="formtext">Address</div><input name="address" maxlength="50" size="18" id="address" tabindex="3" class="blacktext" type="text" value="<?php print $address; ?>" /><div id="f3"></div><div id="f3a"><img src="<?php print WEB_ROOT; ?>images2/ok.jpg" /></div></td>
                
                <!-- Email Address -->
                <td><div class="formtext">Email</div><input name="email" maxlength="50" size="18" id="email" tabindex="4" class="blacktext" type="text" value="<?php print $email; ?>" /><div id="f9"></div><div id="f9a"><img src="<?php print WEB_ROOT; ?>images2/ok.jpg" /></div>
                <br /><span class="small_fonts">(We Respect Your Privacy)</span>
                </td>
              </tr>
              <tr height="43px">
                <td align="left"><div class="formtext">City</div><input name="city" maxlength="50" size="18" id="city" tabindex="5" class="blacktext" type="text" value="<?php print $city; ?>" />
		<div id="f4"></div><div id="f4a"><img src="<?php print WEB_ROOT; ?>images2/ok.jpg" /></div></td>
                <td>
         <div class="formtext">Country</div>      
         <!-- <select name="state" class="blacktext" id="state" tabindex="6">
            <? echo stateList($state); ?>                                                    
         </select> --><select name='country' class="blacktext" id='country' onchange='populateState()'>
                        </select>
         <div id="f7"></div><div id="f7a"><img src="<?php print WEB_ROOT; ?>images2/ok.jpg" /></div></td>
              </tr>
              <tr height="43px">
                <td align="left"><div class="formtext">Postal/Zipcode</div><input name="zip" maxlength="8" size="18" id="zip" tabindex="8" class="blacktext" type="text" value="<?php print $zip; ?>" /><div id="f6"></div><div id="f6a"><img src="<?php print WEB_ROOT; ?>images2/ok.jpg" /></div></td>
                <td><div class="formtext">State / County</div>
                    <!-- <select name="country" class="blacktext" id="country" tabindex="7" >
                        <option value="US">United States</option>
                    </select>                -->
						<select name='state' id='state' class="blacktext" style="width:166px;">
                        </select><script type="text/javascript">initCountry('UK'); </script>
                <div id="f5"></div><div id="f5a"><img src="<?php print WEB_ROOT; ?>images2/ok.jpg" /></div></td>
              </tr>
              <tr height="43px">
                <td align="left"><div class="formtext">Phone</div>
                <div>
                <input name="w_phone1" type="text" class="blacktext" id="w_phone1" value="<?=$w_phone1?>" style="width:30px;" maxlength="3" />
                <input name="w_phone2" type="text" class="blacktext" id="w_phone2" value="<?=$w_phone2?>" style="width:40px;" maxlength="3" />
                <input name="w_phone3" type="text" class="blacktext" id="w_phone3" value="<?=$w_phone3?>" style="width:40px;" maxlength="4" />
                <br /><span class="small_fonts">(For Shipping)</span>
                </td>
                <div id="f8"></div><div id="f8a"><img src="<?php print WEB_ROOT; ?>images2/ok.jpg" /></div> 
                <td>&nbsp;</td>
              </tr>
            </table><div style="padding-top: 10px; padding-left: 0px; padding-bottom: 0px;" class="footer2" align="center">
<!--<input type="checkbox" name="term" value="1"  /> I agree I am at least 18 years old and agree to the .-->
<a href="javascript:void(0)" onclick="MM_openBrWindow('terms_conditions.php','Terms','scrollbars=yes,width=565,height=600')" class="footer2">terms &amp; conditions</a>

</div>
             <!-- <div align="center" style="line-height:13px;"><span class="small_fonts"><br />
             By submitting my information, I represent and warrant that I am 18 years<br />
             of age or older, and have read and agreed to the <br />
             <a href="javascript:void(0)" onclick="MM_openBrWindow('terms_conditions.php','Terms','scrollbars=yes,width=565,height=600')" class="footer3">Terms and Conditions</a> and <a href="javascript:void(0)" class="footer3" onclick="MM_openBrWindow('privacy_policy.html','PrivacyPolicy','scrollbars=yes,width=585,height=600')">Privacy Policy</a> of this site."</span></div>
-->
<div align="center">
            	
            	<input type="submit" name="btnSubmit" value="" onclick="return ValidateForm();" id="btnSubmit" />
            	   </div> 
                <div align="center"></div>
        </div>
    </div>
    </form>
  <div id="howitworks">
    	<div id="howitworks_text">

           <!-- <p>Our ingredients include <strong>peptides</strong> which help <strong>eliminate wrinkles, promote collagen production and plump and firm the skin.</strong></p>

            <p>Clinical studies show that EnVisage ingredients produce immediate lifting power, and with twice daily application, show demonstrable effects an astounding twenty-eight days after the first use. Doctors, dermatologist, and aestheticians point to two revolutionary formulas that give EnVisage its extraordinary powers:</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div align="center" style="padding-left:54px;padding-top:20px;padding-bottom:20px;"></div>
        <p><span class="bluetext"><strong>Polymoist-PS Complex</strong>, a face firming peptide proven to reduce the apperance of wrinkles.</span></p>
        <p>Derived directly from nature, they are clinically proven to turn back the natural effects of the aging process at the cellular level, changing the face of beauty skin care products forever.</p> -->
		</div>
    </div>
    
  <!-- <div class="middlebutton">
    	<a href="#begin"></a>    </div>-->
    

    
   <!-- <div id="bigpic1"></div>
    
  <div class="middlebutton">
    	<a href="#begin"></a>    </div>
    
    <div id="bigpic2"></div>-->
    
  <div id="press">
    	<a href="#begin"></a>    </div>
    
<div id="results1">
    	<div id="playerpart"></div>
   	  <div id="results1_texts">
<h2>How Is Antiaging Fame Serum Different from Others?</h2>
            <p>Antiaging Fame Serum is
professionally formulated to balance the skin’s
natural pH balance, in a deep wash that lifts dirt
and impurities from the skin pores.  <a href="#begin"><strong>Claim Your Trial Here!</strong></a></p>
    </div>
    </div>
    
  <!--<div id="results2">
    
    	<ul>
<li><img src="<?php print WEB_ROOT; ?>images2/testi-1.jpg" width="154" height="103" alt="" />
			  <p>“I saw subtle results at the 2-week mark. There are a few short little hairs growing where my eyebrows were bare! My brows look darker too”<br/><br/>
			    <span><strong>Kathy.</strong> - Bergen, Norway</span></p>
</li>        	
            <li><img src="<?php print WEB_ROOT; ?>images2/testi-2.jpg" width="154" height="103" alt="" />
              <p>“I am glad I bought XtraLash , its so gentle on my eyes that I never feel that I am using a commercial serum, it never stings or irritates my eyes and it really works.&nbsp; I have also been telling my friends and relatives about XtraLash, thanks for making such a wonderful product!” <br />
                <br/>
            <span><strong>Sharleel.</strong>. - Paris, France</span></p></li>   

			<li><img src="<?php print WEB_ROOT; ?>images2/testi-3.jpg" width="154" height="103" />
			  <p>“XtraLash delivers what it promises- thicker, longer and darker eyelashes, very happy with the product.” <br /><br/>
		    <span><strong>Julia Micheal.</strong> - London, England</span></p></li>   

			<li><img src="<?php print WEB_ROOT; ?>images2/testi-4.jpg" width="154" height="103" />
			  <p>“It has been only 3 weeks and my eyelashes already look fuller and thicker, all natural product at an affordable price.”
		    <br/>
		    <br/>
		    <span><strong>Maria Lindsen.</strong> - Manchester, New England</span></p></li>   
      </ul>
      <div class="clearfix"></div>
  </div>-->
    
  <div class="middlebutton">
    	<a href="#begin"></a>    </div>
    
<!--<div id="proven">
    	<div id="proven_text">
        	<p>Polymoist-PS Complex is one of the scientifically proven formulas that EnVisage contains. It is a face firming peptide proven to reduce the appearance of wrinkles. Derived directly from nature, they are clinically proven to turn back the natural effects of the aging process at the cellular level, changing the face of beauty skin care products forever.</p>
            <p>EnVisage is clinically proven to after just minutes skin feels tighter, rejuvenated and nourished. In less than 2 days, there is an increase in skin moisturization by 440%. After just 4 weeks, EnVisage decreases the visual appearance of fine lines up to 60%.</p>
          <p><img src="<?php print WEB_ROOT; ?>images2/proof2.jpg" alt="" style="float:right;padding:2px" /> EnVisage combines cutting edge products of green science with many of the world's most potent anti-oxidant extracts such as: Vitamin E, an anti-oxidant moisturizing agent, Saccharide Isolerate, a powerful moisturizing agent,  Agaricus Bisponus Beta Glucane (mushroom extract), encapsulates water and diffuses moisture, and Shea, Cocoa and Mango butter, a nourishing agents that help preserve the balance of the skin's hydrolipidic film.</p>
          <p>Perfect for immediate relief of problem dry areas, and perfect for daily use to keep the skin healthy, moist and hydrated. Daily use of EnVisage will prevent dry skin, itching, peeling and cracking, and help maintain skin suppleness and elasticity.</p>
        </div>
    </div>-->
    
  <div id="bottompic">
    	<div id="bottompictext">
       	 <h2>ACT NOW TO CLAIM
YOUR TRIAL ORDER!</h2>
            <p>Delivering
all the regenerative benefits of Rose Hip Seed
Oil. With its skin reviving benefits it’s an excellent
choice for your everyday cleanser.</p>
    </div>
    <a href="#begin" class="bottombutton"></a>    </div>
<div style="text-align:center">
 
  <p class="terms" align='center'><span style=" background-repeat:no-repeat;"><span style="background-repeat:no-repeat; background-position:top"><a href="javascript:void(0)" onclick="MM_openBrWindow('terms_conditions.php','Terms','scrollbars=yes,width=565,height=600')" class="footer2">Offer Terms</a> <span class="footer2">|</span> <a href="javascript:void(0)" class="footer2" onclick="MM_openBrWindow('privacy_policy.php','PrivacyPolicy','scrollbars=yes,width=585,height=600')">Privacy Policy</a></span></span><span style="background-repeat:no-repeat; background-position:top"><span class="footer2"> |</span></span> <a href="contactus.php" class="footer2">Contact Us</a></p>
  <style>.terms_pop { float:left;  position: absolute;  top:100px;   width: 400px;   border: 1px solid #999;    text-align: left;  z-index: 5;  padding: 10px; color:#000; }.style1 {font-family: Arial, Helvetica, sans-serif}.terms_scroll{ height:270px; border: 1px solid #999; overflow: scroll;  overflow-x: hidden; overflow-y:scroll; background: #fff;  text-align: left;   padding: 5px;  color: 636463; }</style><div id="terms_popup" style="border: 1px solid rgb(153, 153, 153); padding: 10px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; float: left; position: absolute; top: 100px; height: auto; width: 400px; -moz-background-clip: border; -moz-background-origin: padding; -moz-background-inline-policy: continuous; color: rgb(0, 0, 0); display: none; text-align: left; z-index: 5;"></div><div id='termsdiv'></div>
    
      </div>    
</div>

<div align="center" style=" font:Arial, Helvetica, sans-serif; font-size:11px; font-weight: normal; padding: 5px">
  <?php require_once("include/disclaimer.php"); ?>
</div>

<!-- <script language="javascript" type="text/javascript" src="<?php print WEB_ROOT; ?>js/exitpopup.js"></script>  -->
</body>
</html>
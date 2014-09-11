<? 
require_once("./include/thankyou_code.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script>
    var beforeload = (new Date()).getTime();
</script>

<title><?php echo SITE_NAME; ?></title>

<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<link href="form.css" rel="stylesheet" type="text/css" />
<link href="footer.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/feedback_popup.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
  <script type="text/javascript" src="js/thumb_btns.js"></script>
</head>

<body>
<?php include_once('tracking/shareasale-tracking-code.php'); ?>
<?php //include_once('tracking/google-analytics-cleanser-thankyou.php'); ?>
<?php include_once('tracking/affiliate-tracking-code.php'); ?>
<?php //include_once('tracking/aol-code.php'); ?>
		<div id="main">
        
        <div class="inner_main">
        
        <div class="header"><img src="images/cleanse_header.jpg" width="958" height="286" alt="" /></div>
        <div class="center_main"> 

<div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><table width="65%" border="0" align="center" cellpadding="4" cellspacing="8">
        <tr>
          <td width="49%" bgcolor="#EEEEEE" class="greensmalltext2">Order Date: </td>
          <td width="51%" bgcolor="#EEEEEE"><?=date('m-d-Y');?></td>
        </tr>
        <tr>
          <td bgcolor="#EEEEEE" class="greensmalltext2">Estimated date of Delivery: </td>
          <td bgcolor="#EEEEEE"><?=$ship_info_1?></td>
        </tr>
        <tr>
          <td bgcolor="#EEEEEE" class="greensmalltext2">Shipping Mode:</td>
          <td bgcolor="#EEEEEE" class="text11"><?=$ship_info_2?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td><table width="65%" border="0" align="center" cellpadding="2" cellspacing="8">
        <tr>
          <td height="32" colspan="2" bgcolor="#000000" style="color: #fff; font-size: 14pt; font-family: arial; text-align: center">Order Processed Successfully</td>
        </tr>
        <tr>
          <td width="49%" bgcolor="#FFFFFF" class="greensmalltext2">Customer #: </td>
          <td width="51%" bgcolor="#FFFFFF" class="text111"><?=$custid?></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" class="greensmalltext2">Invoice ID: </td>
          <td bgcolor="#FFFFFF" class="text111"><?=$invoice_id?></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" class="greensmalltext2">Name</td>
          <td bgcolor="#FFFFFF" class="text"><?=$fname.' '.$lname?></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" class="greensmalltext2">Address:</td>
          <td bgcolor="#FFFFFF" class="text"><?=$address?></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" class="greensmalltext2">City:</td>
          <td bgcolor="#FFFFFF" class="text"><?=$city?></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" class="greensmalltext2">State:</td>
          <td bgcolor="#FFFFFF" class="text"><?=$state?></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" class="greensmalltext2">Zip:</td>
          <td bgcolor="#FFFFFF" class="text"><?=$zip?></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" class="greensmalltext2">Phone 1:</td>
          <td bgcolor="#FFFFFF" class="text"><?=$h_phone?></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" class="greensmalltext2">Phone 2:</td>
          <td bgcolor="#FFFFFF" class="text"><?=$w_phone?></td>
        </tr>        
        <tr>
          <td bgcolor="#FFFFFF" class="greensmalltext2">Email:</td>
          <td bgcolor="#FFFFFF" class="text"><?=$email?></td>
        </tr>
        <!--<tr>
                <td bgcolor="#FFFFFF" class="text">&nbsp;</td>
                <td bgcolor="#FFFFFF" class="text">&nbsp;</td>
              </tr>-->
        <!--<tr>
                <td height="34" colspan="2" bgcolor="#FFFFFF" class="text"><strong>Order Information</strong></td>
              </tr> -->
      </table></td>
    </tr>
  </table>
</div>

          <div style="clear:both"></div>
        </div>

        
        <div class="footer1"><span class="main_text2">Caution: Consult your healthcare practitioner prior to using this or any other dietary supplement, particularly if you are pregnant, nursing or have been diagnosed with a medical condition. These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure or prevent any disease.</span></div>
        
        </div>
        
                
        </div>       

<!--
<div id="bottom_black_footer">
<div id="footer_links_top">
<div class="footer_top_headings"><span class="footer_top_heading">My Tools</span></div>
<div class="footer_top_headings"><span class="footer_top_heading">Fitness</span></div>
<div class="footer_top_headings2"><span class="footer_top_heading">Nutrition</span></div>
<div class="footer_top_headings"><span class="footer_top_heading">Follow Us</span></div>
<div class="footer_top_headings3"><a href="#?w=350" rel="popup3" class="poplight"><img src="images/feedback_btn.jpg" border="0px" /></a></div>
-->
<!--POPUP START-->
<!--
<div id="popup3" class="popup_block">
	<table width="68%" border="0" align="center" cellpadding="7" cellspacing="0">
              <tr>
                <td width="28%" class="black_small_bold5">Subject: </td>
                <td width="72%">
               <div id="invite_friend_text-field">
        		<label>
        		<input name="textfield" type="text" class="events_text_field" id="textfield" value="First Name" size="40" />
        		</label>
        		</div>                </td>
              </tr>
              <tr>
                <td class="black_small_bold5">Email:</td>
                <td>
                <div id="invite_friend_text-field">
        		<label>
        		<input name="textfield" type="text" class="events_text_field" id="textfield" value="Last Name" size="40" />
        		</label>
        		</div>                </td>
              </tr>
              <tr>
                <td class="black_small_bold5">Feeback:</td>
                <td>
                <div id="invite_friend_text-field">
        		<label>
        		<textarea name="textarea" cols="45" rows="5" class="events_text_field" id="textarea"></textarea>
        		</label>
        		</div>                </td>
              </tr>
              
              <tr>
                <td>&nbsp;</td>
                <td><table width="82%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="27%" height="43"><img src="images/submit_button.jpg" width="90" height="28" /></td>
                  </tr>
                </table></td>
              </tr>
      </table>
    
</div>
-->
<!--END POPUP-->
<!--
<div style="clear:both"></div>
</div>

<div id="footer_links_main">
<div id="footer_links">
        <ul>
        <li><a href="http://www.fitnessrepublic.com/water-log.php" class="">Water Tracker</a></li>
        <li><a href="http://www.fitnessrepublic.com/body-measurement-tool.php" class="">Body Measurements</a></li>
        <li><a href="http://www.fitnessrepublic.com/weight-tracker.php" class="">Weight Tracker</a></li>
        <li><a href="http://www.fitnessrepublic.com/meal-tracker.php" class="">Food Tracker</a></li>
        <li><a href="http://www.fitnessrepublic.com/food-and-mood-journal.php" class="">Food and Mood</a></li>
        <li><a href="http://www.fitnessrepublic.com/sleep-log.php" class="">Sleep Logger</a></li>
        <li><a href="http://www.fitnessrepublic.com/exercise-aerobic.php" class="">Exercise Aerobic Log</a></li>
        <li><a href="http://www.fitnessrepublic.com/exercise-log.php" class="">Exercise Strength log</a></li>
        </ul>
    </div>
<div id="footer_links_sep"><img src="images/footer_seperator.jpg" /></div>
<div id="footer_links">
        <ul>
        <li><a href="http://www.fitnessrepublic.com/articles/category/fitness/general-fitness/" class="">General Fitness</a></li>
        <li><a href="http://www.fitnessrepublic.com/articles/category/fitness/running/" class="">Running</a></li>
        <li><a href="http://www.fitnessrepublic.com/articles/category/fitness/yoga/" class="">Yoga</a></li>
        <li><a href="http://www.fitnessrepublic.com/articles/category/fitness/stretching/" class="">Stretching</a></li>
        <li><a href="http://www.fitnessrepublic.com/articles/category/fitness/cardiovascular-training/" class="">Cardiovascular Training</a></li>
        </ul>
</div>
<div id="footer_links_sep"><img src="images/footer_seperator.jpg" /></div>

<div id="footer_links">
        <ul>
        <li><a href="http://www.fitnessrepublic.com/articles/category/nutrition/general-nutrition/" class="">General Nutrition</a></li>
        <li><a href="http://www.fitnessrepublic.com/articles/category/nutrition/supplements-vitamins/" class="">Supplements &amp; Vitamins</a></li>
        <li><a href="http://www.fitnessrepublic.com/articles/category/nutrition/nutrients/" class="">Nutrients</a></li>
        <li><a href="http://www.fitnessrepublic.com/articles/category/nutrition/herbal-remedies/" class="">Herbal Remedies</a></li>
        <li><a href="http://www.fitnessrepublic.com/articles/category/nutrition/populations-kids-women-men-older-adults-pre-post-natal/" class="">Populations</a></li>
        <li><a href="http://www.fitnessrepublic.com/articles/category/nutrition/detox-and-cleanses/" class="">Detox and Cleanses</a></li>
        </ul>
</div>
<div id="footer_links_sep"><img src="images/footer_seperator.jpg" /></div>

        <div class="footer_logos">
        
        <div class="bottom_footer-logo"><img src="images/footer-logo.png" /></div>
         
        <div class="bottom_fb-logo"><img src="images/footer-fb-logo.jpg" /></div>
        <div class="bottom_twi-logo"><img src="images/footer-twi-logo.jpg" /></div>
        <div class="bottom_blog-logo"><img src="images/footer-blog-logo.jpg" /></div>
        
        <div style="clear:both"></div>
        
        <div class="bottom_verisign-logo"><span style="clear:both"><img src="images/verisign_logos.jpg" width="117" height="53" /></span></div>
          
    </div>
        
        <div class="footer_subscribe">
            
            <div class="subscribe_inner"><span class="subscribe_now_heading">Subscribe Now</span></div>
            
            <div class="subscribe_inner2"><span class="main_text_3">Subscribe our newsletter. <br />
            Enter the details</span></div>
            
            <div class="subscribe_inner_textfield">
              <label>
              <input name="textfield" type="text" class="subscribe_textfield" id="textfield" value="First Name" size="32" />
              </label>
            </div>
            
            <div class="subscribe_inner_textfield">
              <label>
              <input name="textfield" type="text" class="subscribe_textfield" id="textfield" value="Email Address" size="32" />
              </label>
            </div>
            
            <div class="subscribe_btn"><img src="images/subscribe_btn.jpg" /></div>
            
    </div>

<div style="clear:both"></div>

</div>
</div>

<div class="bottom_grey_footer2">
            <div id="bottom_footer_text2"><img src="images/footer_bottom_styles.jpg" /></div>
</div>
            
            
            <div id="bottom_grey_footer">
<div id="bottom_footer_text">
<div class="main_text" id="footer_text">Copyright &copy; 2010 Fitness Republic. All Rights Reserved <br />
  Privacy Policy  |  Terms of Use |  Give Us Your Feedback</div>
<div style="clear:both"></div>
</div>
</div>
-->

<?php require_once('footer.php'); ?>
      
</body>
</html>
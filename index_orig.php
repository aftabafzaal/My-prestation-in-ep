<? require_once("./include/index_code.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Equinox - Home</title>
<script src="<?php print WEB_ROOT; ?>js/gen_validatorv4.js" type="text/javascript"></script>
<link href="<?php print WEB_ROOT; ?>index1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<style type="text/css">	
<!--
.input {            width: 140px;
}
.inputS {            width: 145px;
}
-->
</style>

    <script type="text/javascript" src="<?php print $protocol; ?>ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>

<script type="text/javascript">
// Javascript Phone Jump
    $(document).ready( function() {

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
<base href="<?php print WEB_ROOT; ?>" />
</head>

<body>
<?php //require_once('tracking/google-analytics.php'); ?>
<table width="100" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-1.jpg" width="1048" height="114" /></td>
  </tr>
  <tr>
    <td height="387" align="left" valign="top" background="images1/equinox-2.jpg" style="background-repeat:no-repeat;"><table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td width="625" height="622" align="left" valign="top">&nbsp;</td>
        <td width="393" align="left" valign="top" background="images1/equinox-5-03.jpg" style="background-repeat:no-repeat;"><table width="98%" cellspacing="0" cellpadding="0">
            <tr>
              <td height="91">&nbsp;</td>
            </tr>
            <tr>
              <td height="382" align="left" valign="top">
              
              <table width="93%" cellspacing="0" cellpadding="0">
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

                  <tr>
                    <td width="14%" height="19">&nbsp;</td>
                    <td width="86%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="348" colspan="2" align="left" valign="top"><table width="348" border="0" align="center" cellpadding="0" cellspacing="0" background="Radialabs%20-%20Instant%20wrinkle%20reducer_files/form_bg.jpg">
                      <tbody>
                        <tr>
                          <td valign="top" width="17" align="left" height="255">&nbsp;</td>
                          <td width="160" align="left" valign="top" class="formtext"><table width="150" border="0" cellpadding="0" cellspacing="2">
                              <tbody>
                                <tr>
                                  <td height="22" align="left" valign="bottom" class="formtext"> First Name&nbsp; </td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="formtext"><input name="fname" maxlength="50" size="18" id="fname" tabindex="1" class="formtext" type="text" value="<?php print $fname; ?>" />                                  </td>
                                </tr>
                                <tr>
                                  <td height="22" align="left" valign="bottom" class="formtext"> Address&nbsp; </td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="formtext"><input name="address" maxlength="50" size="18" id="address" tabindex="3" class="input" type="text" value="<?php print $address; ?>" />                                  </td>
                                </tr>
                                <tr>
                                  <td height="22" align="left" valign="bottom" class="formtext"> City&nbsp; </td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="formtext"><input name="city" maxlength="50" size="18" id="city" tabindex="5" class="input" type="text" value="<?php print $city; ?>" />                                  </td>
                                </tr>
                                <tr>
                                  <td height="26" align="left" valign="bottom" class="formtext"> Country </td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="formtext">
                                    <select name="country" class="text_field-area" id="country" tabindex="7" >
                                        <option value="US">United States</option>
                                    </select>                                  </td>
                                </tr>
                                <tr>
                                  <td height="32" align="left" valign="bottom" class="formtext"> Phone &nbsp;&nbsp; </td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="formtext">
                                        <input name="w_phone1" type="text" class="input" id="w_phone1" value="<?=$w_phone1?>" style="width:30px;" maxlength="3" />
                                        <input name="w_phone2" type="text" class="input" id="w_phone2" value="<?=$w_phone2?>" style="width:40px;" maxlength="3" />
                                        <input name="w_phone3" type="text" class="input" id="w_phone3" value="<?=$w_phone3?>" style="width:40px;" maxlength="4" />                                </td>
                                </tr>
                                <!--
                                <tr>
                                  <td class="smalltext-black" valign="top" align="left"> (For Shipping) </td>
                                </tr>
                                -->
                              </tbody>
                          </table></td>
                          <td width="20" align="left" valign="top" class="formtext">&nbsp;</td>
                          <td width="157" align="left" valign="top" class="formtext"><table width="150" border="0" cellpadding="0" cellspacing="2">
                              <tbody>
                                <tr>
                                  <td height="22" align="left" valign="bottom" class="formtext"> Last Name&nbsp; </td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="formtext"><input name="lname" maxlength="50" size="18" id="lname" tabindex="2" class="input" type="text" value="<?php print $lname; ?>" />                                  </td>
                                </tr>
                                <tr>
                                  <td height="22" align="left" valign="bottom" class="formtext"> Email </td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="formtext"><input name="email" maxlength="50" size="18" id="email" tabindex="4" class="input" type="text" value="<?php print $email; ?>" />                                  </td>
                                </tr>
                                <tr>
                                  <td height="22" align="left" valign="bottom" class="formtext"> State <font color="#ff0000"> </font> </td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="formtext">
                                    <select name="state" class="text_field-area" id="state" tabindex="6">
                                        <? echo stateList($state); ?>                                                    
                                    </select>                                  </td>
                                </tr>
                                <tr>
                                  <td height="27" align="left" valign="bottom" class="formtext"> Zip
                                    &nbsp; </td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="formtext"><input name="zip" maxlength="5" size="18" id="zip" tabindex="8" class="input" type="text" value="<?php print $zip; ?>" />                                  </td>
                                </tr>
                                    <input name="h_phone1" type="hidden" id="h_phone1" value="<?php print $h_phone1; ?>" />
                                    <input name="h_phone2" type="hidden" id="h_phone2" value="<?php print $h_phone2; ?>" />
                                    <input name="h_phone3" type="hidden" id="h_phone3" value="<?php print $h_phone3; ?>" />
<!--
                                <tr>
                                  <td height="28" align="left" valign="bottom" class="formtext"> Phone 2&nbsp;&nbsp; </td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="formtext">
                                    <input name="h_phone1" type="text" class="input" id="h_phone1" value="<? //$h_phone1?>" style="width:30px;" maxlength="3" />
                                    <input name="h_phone2" type="text" class="input" id="h_phone2" value="<? //$h_phone2?>" style="width:40px;" maxlength="3" />
                                    <input name="h_phone3" type="text" class="input" id="h_phone3" value="<? //$h_phone3?>" style="width:40px;" maxlength="4" />
                                  </td>
                                </tr>
-->
                                <!--
                                <tr>
                                  <td class="smalltext-black" valign="top" align="left"> (We Respect Your Privacy) </td>
                                </tr>
                                -->
                              </tbody>
                          </table></td>
                          <td valign="top" width="25" align="left">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="79" colspan="5" align="center" valign="bottom">
                            <input type="image" src="images1/btn-go.jpg" />                            </td>
                          </tr>
                      </tbody>
                    </table></td>
                    </tr>
              </form>

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
 </script>              
              </table>              </td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-3.jpg" width="1048" height="56" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-4.jpg" width="1048" height="98" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-5.jpg" width="1048" height="207" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-6.jpg" width="1048" height="375" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-7.jpg" width="1048" height="103" border="0" usemap="#Map" /></td>
  </tr>
  
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-8.jpg" width="1048" height="82" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-9.jpg" width="1048" height="246" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-10.jpg" width="1048" height="231" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-11.jpg" width="1048" height="48" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-12.jpg" width="1048" height="354" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-13.jpg" width="1048" height="76" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-14.jpg" width="1048" height="460" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-15.jpg" width="1048" height="70" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images1/equinox-16.jpg" width="1048" height="415" border="0" usemap="#Map2" /></td>
  </tr>
  
  <tr>
    <td height="103" align="center" valign="middle" background="images1/equinox-17.jpg" style=" background-repeat:no-repeat;"><span style="background-repeat:no-repeat; background-position:top"><a href="javascript:void(0)" onclick="MM_openBrWindow('terms_conditions.php','Terms','scrollbars=yes,width=565,height=600')" class="footer2">Offer Terms</a> <span class="footer2">|</span> <a href="javascript:void(0)" class="footer2" onclick="MM_openBrWindow('privacy_policy.html','PrivacyPolicy','scrollbars=yes,width=585,height=600')">Privacy Policy</a></span></td>
  </tr>

  <tr>
    <td align="center" valign="top" bgcolor="#FFFFFF" class="content" style="font-weight: normal; padding: 5px">
<?php require_once("include/disclaimer.php"); ?>
</td>
  </tr>
  
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>

<map name="Map" id="Map"><area shape="rect" coords="858,23,1026,67" href="#begin" />
</map>
<map name="Map2" id="Map2"><area shape="rect" coords="840,337,1013,380" href="#begin" />
</map></body>
</html>
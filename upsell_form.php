<table align="center" width="100%">
<form action="" method="post" name="usell" id="usell">
<input type="hidden" name="_action" value="upsells" />
    <tbody>
      <tr>
        <td  align="center" valign="top"><br />
              <table align="center" bgcolor="#CCCCCC" border="0" cellpadding="2" cellspacing="8" width="90%">
                <tbody>
                  <tr>
                    <td colspan="2" class="heading2" bgcolor="#a2c67d" height="32">Order Processed</td>
                  </tr>
                  <tr>
                    <td class="text111" bgcolor="#FFFFFF" width="45%">Customer #: </td>
                    <td class="text111" bgcolor="#FFFFFF" width="55%"><?=$custid?></td>
                  </tr>
                  <tr>
                    <td class="text111" bgcolor="#FFFFFF">Invoice ID: </td>
                    <td class="text111" bgcolor="#FFFFFF"><?=$invoice_id?></td>
                  </tr>
                  <tr>
                    <td class="text" bgcolor="#FFFFFF">Name:</td>
                    <td class="text" bgcolor="#FFFFFF"><?=$fname.' '.$lname?></td>
                  </tr>
                  <tr>
                    <td class="text" bgcolor="#FFFFFF">Address:</td>
                    <td class="text" bgcolor="#FFFFFF"><?=$address?></td>
                  </tr>
                  <tr>
                    <td class="text" bgcolor="#FFFFFF">City:</td>
                    <td class="text" bgcolor="#FFFFFF"><?=$city?></td>
                  </tr>
                  <tr>
                    <td class="text" bgcolor="#FFFFFF">State/Prov:</td>
                    <td class="text" bgcolor="#FFFFFF"><?=$state?></td>
                  </tr>
                  <tr>
                    <td class="text" bgcolor="#FFFFFF">Zip:</td>
                    <td class="text" bgcolor="#FFFFFF"><?=$zip?></td>
                  </tr>
                  <tr>
                    <td class="text" bgcolor="#FFFFFF">Phone:</td>
                    <td class="text" bgcolor="#FFFFFF"><?=$w_phone?></td>
                  </tr>
                  <tr>
                    <td class="text" bgcolor="#FFFFFF">Email:</td>
                    <td class="text" bgcolor="#FFFFFF"><?=$email?></td>
                  </tr>
                  <!--<tr>
<td bgcolor="#FFFFFF" class="text">&nbsp;</td>
<td bgcolor="#FFFFFF" class="text">&nbsp;</td>
</tr>-->
                  <!--<tr>
<td height="34" colspan="2" bgcolor="#FFFFFF" class="text"><strong>Order Information</strong></td>
</tr> -->
                </tbody>
              </table>

                <div align="centre" style="padding-right: 30px; padding-top: 20px;">
                    <img src="<?php print WEB_ROOT; ?>images/vbv_learn_more.gif" height="57" width="71" />
                    <img src="<?php print WEB_ROOT; ?>images/mcsc_learn_more.gif" width="98" height="53" />
                    <!-- <span id="siteseal"><script type="text/javascript" src="https://seal.starfieldtech.com/getSeal?sealID=P1t97H812E4wBZfXnoxlmlIiVcjiJBJKBNHxCUMd8lZN5HuBR5xI1o9"></script><br/><a style="font-family: arial; font-size: 9px" href="http://www.starfieldtech.com" target="_blank">SSL</a></span> -->
              <br />

<br /><img width="170" height="23" src="<?php print WEB_ROOT; ?>images/login_secure.gif" />
<p class="text"><strong>Charges will appear on your credit card as <?php print DESCRIPTOR; ?>.</strong></p>
<!-- <p class="text" align="center">These statements have not been 
                reviewed by the Food and Drug Administration. This product is not 
                intended to diagnose, treat, cure, or prevent any disease. Natural Acai 
                is not affiliated in any way with CNN, FOX, WebMD, ABC, FORTUNE, NBC or 
                CNN, FOX, WebMD, ABC, FORTUNE, NBC, New York Times, Harvard University, 
                and Nebraska University are registered trademarks of their respective 
                owners.</p> -->                                      
              </div>
              </td>
        
      </tr>
      </tbody>
</form>
</table>
<table align="center" width="100%">
<form action="" method="post" name="usell" id="usell">
<input type="hidden" name="_action" value="upsells" />
    <tbody>
      <tr>
        <td valign="top" width="50%"><br />
              <table align="center" bgcolor="#CCCCCC" border="0" cellpadding="2" cellspacing="8" width="90%">
                <tbody>
                  <tr>
                    <td colspan="2" class="heading2" bgcolor="#E04392" height="32">Order Processed</td>
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

                <div align="right" style="padding-right: 30px; padding-top: 20px;">
                <input type="image" src="<?php print WEB_ROOT; ?>images/btn-order-now.png" />
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
        <td rowspan="3" width="50%"><table border="0" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td colspan="2" align="left" valign="top"><div style="padding-left:5px; padding-right:20px; padding-top:10px; background-color:#FFFFFF" align="left"><span class="cartformtext"><span class="style11">Hey wait! Get Results Even Faster! </span><br />
                            <span style="color:#000000; text-align:justify"> By combining these amazing products you are creating an even more 
                              powerful solution to reach your goals even faster! Please take a look at
                              these amazing deals! </span><br />
                      </span> <br />
                  </div></td>
                </tr>
                <tr bgcolor="#FFFFFF">
                  <td height="10"></td>
                </tr>
                <tr>
                  <td align="left" valign="top"><div style="border:2px dashed #666666; background-color:#FFFFC1; padding:5px 5px 0px 5px">
                      <!-- <div class="header_div">New Customers Only</div>-->
                      <div style="font-size:14px; font-weight:bold; color:#000000">Juicy Lips (Price: $19.99)<!--<span class="style11">You Save 45% of the Regular price $14.5</span>--></div>
                    <div style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; padding-left:5px; padding-right:5px;" align="justify">
                        <table border="0" cellpadding="4" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td colspan="2" align="right" valign="middle"><div class="style2" style="color:#000000">
                        <input name="upsells[]" value="497" type="checkbox" <?=in_array("497", $upsells) ? 'checked="checked"' : '';?> />
                        <strong>Add Juicy Lips to my order</strong></div></td>
                              </tr>
                            <tr>
                              <td align="center" valign="middle" width="31%"><img src="<?php print WEB_ROOT; ?>images/juicy-lips.png" height="125" width="215" /></td>
                              <td class="style14" align="left" width="69%"><div align="left">Most lip plumpers on the market just burn the lips with a painful tingling sensation. Fat Lip Plumper is different. The key ingredients are amazingly effective at drawing moisture in to plump the lips, but gentle enough to protect and nourish the delicate lip area. No drying. No chapping. No irritation. No burning.</div></td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                   
                  </div>
                      <div style="height:10px; background-color:#FFFFFF"></div>
                    <div style="border:2px dashed #666666; background-color:#FFFFC1; padding:5px;">
                        <!-- <div class="header_div">New Customers Only</div>-->
                        <div style="font-size:14px; font-weight:bold; color:#000000">Xtra Lash (Price: $19.99) <!-- <span class="style11">You Save 45% of the Regular price $43.42</span>--></div>
                      <div style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; padding-left:5px; padding-right:5px;" align="justify">
                          <table border="0" cellpadding="4" cellspacing="0" width="100%">
                            <tbody>
                              <tr>
                                <td colspan="2" align="right" valign="middle"><div class="style2" style="color:#000000">
                        <input name="upsells[]" value="498" type="checkbox" <?=in_array("498", $upsells) ? 'checked="checked"' : '';?> />
                        <strong>Add Xtra Lash to my order</strong></div></td>
                                </tr>
                              <tr>
                                <td valign="middle" width="100"><div align="center"><img src="<?php print WEB_ROOT; ?>images/xtra-lesh.png" height="125" width="215" /></div></td>
                                <td class="style14" align="left"><div align="left">A unique eyelash conditioner and volumizer that, with daily use, provides noticeable results. Ultra Lash magnifies and creates a flexible, moisture retentive film on the eyelashes. By increasing flexibility and preventing breakage, eyelash hair can reach its full potential.
                                </div></td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                      </div></td>
                </tr>
              </tbody>
        </table></td>
      </tr>
      </tbody>
</form>
</table>
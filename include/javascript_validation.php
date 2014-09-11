<? if ($javascript_validation) { ?>
<!-- Form Validations -->
<script language="JavaScript" type="text/javascript">
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("form1");
  frmvalidator.addValidation("fname","req","Please enter your First Name");
  frmvalidator.addValidation("lname","req","Please enter your Last Name");
  frmvalidator.addValidation("address","req","Please enter your Address");
  frmvalidator.addValidation("city","req","Please enter your City");
  frmvalidator.addValidation("country","req","Please select your Country");
  frmvalidator.addValidation("state","req","Please select your State");
  frmvalidator.addValidation("zip","req","Please enter your Zip Code");
  frmvalidator.addValidation("email","req","Please enter your Email Address");
  frmvalidator.addValidation("email","email","Please enter a valid Email Address");

  //frmvalidator.addValidation("address","req","Please enter your address");
  frmvalidator.addValidation("phone1","req","Please enter your Phone No");
  frmvalidator.addValidation("phone2","req","Please enter your Phone No");
  frmvalidator.addValidation("phone3","req","Please enter your Phone No");
</script>
<? } ?>
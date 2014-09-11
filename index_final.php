<? require_once("./include/index_code.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Equinox - Home</title>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

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

<link href="css/equinox-special-offer-new.css" rel="stylesheet" type="text/css" />
<link href="cssForm/jquery/jquery-ui-1.8.4.custom.css" rel="stylesheet" type="text/css" />
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="Scripts/swfobject_modified.html" type="text/javascript"></script>

<script >
        function CheckEmail(email) {
            var regEx;
            // below is original regEx that fails to catch a missing .com at the end of the email address
            // you can delete this comment and line below, just wanted to keep it here temporarily
            // regEx = /^([\w]+)(.[\w]+)*@([\w]+)(.[\w]{2,3}){1,2}$/;
            regEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


            if (!regEx.test(email))
                return false;
            else
                return true;
        }

        $(function() {
            $('#fname').keyup(function() {
                var tfn1 = document.getElementById('fname').value;
                if (document.getElementById('fname').value != "") {
                    if (tfn1.length > 2) {
                        $("#f1").css({ visibility: "hidden" });
                        $("#f1a").css({ visibility: "visible" });
                        $('#fname').css("background-color", "#d0fdcd");
                    }
                    else {
                        $("#f1").css({ visibility: "visible" });
                        $("#f1a").css({ visibility: "hidden" });

                        //amged I added div with class pickup change padding-top for vertical alignment 
                        $("#f1").html("<div class=pickup >Name is too short</div><img src='images2/no.jpg' />");
                        $("#f1").css({ width: "125px" });
                        $("#f1").css({ left: "-116px" });
                        $('#fname').css("background-color", "#ffcfcf");
                        //$('#fname').css({background-color: "#ffcfcf" });
                    }
                }
                else {
                    $("#f1").css({ visibility: "visible" });
                    $("#f1a").css({ visibility: "hidden" });
                    $("#f1").html("<div class=pickup >Your first name is required</div><img src='images2/no.jpg' />");
                    $("#f1").css({ width: "170px" });
                    $("#f1").css({ left: "-161px" });
                    $('#fname').css("background-color", "#ffcfcf");
                    //$('#fname').css({background-color: "#ffcfcf" });
                }


            });

            // last name validation
            $('#lname').keyup(function() {
                var tfn2 = document.getElementById('lname').value;
                if (document.getElementById('lname').value != "") {
                    if (tfn2.length > 2) {
                        $("#f2").css({ visibility: "hidden" });
                        $("#f2a").css({ visibility: "visible" });
                        $('#lname').css("background-color", "#d0fdcd");

                    }
                    else {
                        $("#f2").css({ visibility: "visible" });
                        $("#f2a").css({ visibility: "hidden" });
                        $("#f2").html("<img src='images2/no.jpg' /><div class=pickupR >Last name is too short</div>");
                        $("#f2").css({ width: "146px" });
                        $("#f2").css({ right: "345px" });
                        $('#lname').css("background-color", "#ffcfcf");
                    }
                }
                else {
                    $("#f2").css({ visibility: "visible" });
                    $("#f2a").css({ visibility: "hidden" });
                    $("#f2").html("<img src='images2/no.jpg' /><div class=pickupR >Your last name is required</div>");
                    $("#f2").css({ width: "170px" });
                    $("#f2").css({ right: "345px" });
                    $('#lname').css("background-color", "#ffcfcf");
                }


            });

            // address validation

            $('#address').keyup(function() {
                var tfn3 = document.getElementById('address').value;
                if (document.getElementById('address').value != "") {
                    if (tfn3.length > 2) {
                        $("#f3").css({ visibility: "hidden" });
                        $("#f3a").css({ visibility: "visible" });
                        $('#address').css("background-color", "#d0fdcd");

                    }
                    else {
                        $("#f3").css({ visibility: "visible" });
                        $("#f3a").css({ visibility: "hidden" });
                        $("#f3").html("<div class=pickup >Address is too short</div><img src='images2/no.jpg' />");
                        $("#f3").css({ width: "140px" });
                        $("#f3").css({ left: "-131px" });
                        $('#address').css("background-color", "#ffcfcf");
                    }
                }
                else {
                    $("#f3").css({ visibility: "visible" });
                    $("#f3a").css({ visibility: "hidden" });
                    $("#f3").html("<div class=pickup >Address is required</div><img src='images2/no.jpg' />");
                    $("#f3").css({ width: "135px" });
                    $("#f3").css({ left: "-126px" });
                    $('#address').css("background-color", "#ffcfcf");
                }


            });
            // city validation
            $('#city').keyup(function() {
                var tfn4 = document.getElementById('city').value;
                if (document.getElementById('city').value != "") {
                    if (tfn4.length > 2) {
                        $("#f4").css({ visibility: "hidden" });
                        $("#f4a").css({ visibility: "visible" });
                        $('#city').css("background-color", "#d0fdcd");

                    }
                    else {
                        $("#f4").css({ visibility: "visible" });
                        $("#f4a").css({ visibility: "hidden" });
                        $("#f4").html("<div class=pickup >City is too short</div><img src='images2/no.jpg' />");
                        $("#f4").css({ width: "115px" });
                        $("#f4").css({ left: "-106px" });
                        $('#city').css("background-color", "#ffcfcf");
                    }
                }
                else {
                    $("#f4").css({ visibility: "visible" });
                    $("#f4a").css({ visibility: "hidden" });
                    $("#f4").html("<div class=pickup >City is required</div><img src='images2/no.jpg' />");
                    $("#f4").css({ width: "112px" });
                    $("#f4").css({ left: "-103px" });
                    $('#city').css("background-color", "#ffcfcf");
                }




            });

            // state validation
            $('#state').keyup(function() {
                var tfn5 = document.getElementById('state').value;
                if (document.getElementById('state').value != "") {
                    $("#f5").css({ visibility: "hidden" });
                    $("#f5a").css({ visibility: "visible" });
                    $('#state').css("background-color", "#d0fdcd");
                }
                else {
                    $("#f5").css({ visibility: "visible" });
                    $("#f5a").css({ visibility: "hidden" });
                    $("#f5").html("<img src='images2/no.jpg' /><div class=pickupR >State is required</div>");
                    $('#state').css("background-color", "#ffcfcf");
                    $("#f5").css({ width: "120px" });
                    $("#f5").css({ left: "345px" });
                }

            });

            //zipcode
            $('#zip').keyup(function() {
                var tfn6 = document.getElementById('zip').value;
                if (document.getElementById('zip').value != "") {
                    if (tfn6.length > 2) {
                        $("#f6").css({ visibility: "hidden" });
                        $("#f6a").css({ visibility: "visible" });
                        $('#zip').css("background-color", "#d0fdcd");

                    }
                    else {
                        $("#f6").css({ visibility: "visible" });
                        $("#f6a").css({ visibility: "hidden" });
                        $("#f6").html("<div class=pickup >Zip Code is too short</div><img src='images2/no.jpg' />");
                        $("#f6").css({ width: "140px" });
                        $("#f6").css({ left: "-131px" });
                        $('#zip').css("background-color", "#ffcfcf");
                    }
                }
                else {
                    $("#f6").css({ visibility: "visible" });
                    $("#f6a").css({ visibility: "hidden" });
                    $("#f6").html("<div class=pickup >Zip code is required</div><img src='images2/no.jpg' />");
                    $("#f6").css({ width: "135px" });
                    $("#f6").css({ left: "-126px" });
                    $('#zip').css("background-color", "#ffcfcf");
                }


            });


            //zipcode
            $('#country').keyup(function() {
                var tfn7 = document.getElementById('country').value;
                if (document.getElementById('country').value != "") {
                    if (tfn7.length > 0) {
                        $("#f7").css({ visibility: "hidden" });
                        $("#f7a").css({ visibility: "visible" });
                        $('#country').css("background-color", "#d0fdcd");

                    }
                    else {
                        $("#f7").css({ visibility: "visible" });
                        $("#f7a").css({ visibility: "hidden" });
                        $("#f7").html("<img src='images2/no.jpg' /><div class=pickupR >Country is too short</div>");
                        $("#f7").css({ width: "160px" });
                        $("#f7").css({ left: "345px" });
                        $('#country').css("background-color", "#ffcfcf");
                    }
                }
                else {
                    $("#f7").css({ visibility: "visible" });
                    $("#f7a").css({ visibility: "hidden" });
                    $("#f7").html("<img src='images2/no.jpg' /><div class=pickupR >Country is required</div>");
                    $("#f7").css({ width: "210px" });
                    $("#f7").css({ left: "345px" });
                    $('#country').css("background-color", "#ffcfcf");
                }


            });

            // Phone
            $('#w_phone1,#w_phone2,#w_phone3').keyup(function() {
                //var tfn8 = document.getElementById('txtTel').value;
                var w_phone1 = document.getElementById('w_phone1').value;
                var w_phone2 = document.getElementById('w_phone2').value;
                var w_phone3 = document.getElementById('w_phone3').value;
                var tfn8 = w_phone1 + w_phone2 + w_phone3;
                
                //if (document.getElementById('txtTel').value != "") {
                if (tfn8 != "") {
                    if (tfn8.length > 9) {
                        $("#f8").css({ visibility: "hidden" });
                        $("#f8a").css({ visibility: "visible" });
                        $('#w_phone1,#w_phone2,#w_phone3').css("background-color", "#d0fdcd");

                    }
                    else {
                        $("#f8").css({ visibility: "visible" });
                        $("#f8a").css({ visibility: "hidden" });
                        $("#f8").html("<div class=pickup >Phone is too short</div><img src='images2/no.jpg' />");
                        $("#f8").css({ width: "127px" });
                        $("#f8").css({ left: "-118px" });
                        $('#w_phone1,#w_phone2,#w_phone3').css("background-color", "#ffcfcf");
                    }
                }
                else {
                    $("#f8").css({ visibility: "visible" });
                    $("#f8a").css({ visibility: "hidden" });
                    $("#f8").html("<div class=pickup >Phone is required</div><img src='images2/no.jpg' />");
                    $("#f8").css({ width: "124px" });
                    $("#f8").css({ left: "-115px" });
                    $('#w_phone1,#w_phone2,#w_phone3').css("background-color", "#ffcfcf");
                }

            });

            // Email Address
            $('#email').keyup(function() {

                var tfn9 = document.getElementById('email').value;
                if (document.getElementById('email').value != "") {
                    if (CheckEmail(tfn9)) {
                        $("#f9").css({ visibility: "hidden" });
                        $("#f9a").css({ visibility: "visible" });
                        $('#email').css("background-color", "#d0fdcd");

                    }
                    else {
                        $("#f9").css({ visibility: "visible" });
                        $("#f9a").css({ visibility: "hidden" });
                        $("#f9").html("<img src='images2/no.jpg' /><div class=pickupR >Invalid Email</div>");
                        $("#f9").css({ width: "98px" });
                        $("#f9").css({ left: "345px" });
                        $('#email').css("background-color", "#ffcfcf");
                    }
                }
                else {
                    $("#f9").css({ visibility: "visible" });
                    $("#f9a").css({ visibility: "hidden" });
                    $("#f9").html("<img src='images2/no.jpg' /><div class=pickupR >Email is required</div>");
                    $("#f9").css({ width: "121px" });
                    $("#f9").css({ left: "345px" });
                    $('#email').css("background-color", "#ffcfcf");
                }
            });
        });

        function ValidateForm() {
            //document.getElementById('vstart').value = "1";
            var tfn = document.getElementById('fname').value;
            var vf;
            vf = 0;
            if (document.getElementById('fname').value != "") {
                if (tfn.length > 2) {
                    $("#f1").css({ visibility: "hidden" });
                    $("#f1a").css({ visibility: "visible" });
                    $('#fname').css("background-color", "#d0fdcd");

                }
                else {
                    $("#f1").css({ visibility: "visible" });
                    $("#f1a").css({ visibility: "hidden" });
                    $("#f1").html("<div class=pickup >Name is too short</div><img src='images2/no.jpg' />");
                    $("#f1").css({ width: "125px" });
                    $("#f1").css({ left: "-116px" });
                    $('#fname').css("background-color", "#ffcfcf");
                    vf = 1;
                }
            }
            else {
                $("#f1").css({ visibility: "visible" });
                $("#f1a").css({ visibility: "hidden" });
                $("#f1").html("<div class=pickup >Your first name is required</div><img src='images2/no.jpg' />");
                $("#f1").css({ width: "170px" });
                $("#f1").css({ left: "-161px" });
                $('#fname').css("background-color", "#ffcfcf");
                vf = 1;
            }

            //last name
            if (document.getElementById('lname').value != "") {
                var tfn2 = document.getElementById('lname').value;
                if (tfn2.length > 2) {
                    $("#f2").css({ visibility: "hidden" });
                    $("#f2a").css({ visibility: "visible" });
                    $('#lname').css("background-color", "#d0fdcd");

                }
                else {
                    $("#f2").css({ visibility: "visible" });
                    $("#f2a").css({ visibility: "hidden" });
                    $("#f2").html("<img src='images2/no.jpg' /><div class=pickupR >Last name is too short</div>");
                    $("#f2").css({ width: "146px" });
                    $("#f2").css({ left: "345px" });
                    $('#lname').css("background-color", "#ffcfcf");
                    vf = 1;
                }
            }
            else {
                $("#f2").css({ visibility: "visible" });
                $("#f2a").css({ visibility: "hidden" });
                $("#f2").html("<img src='images2/no.jpg' /><div class=pickupR >Your last name is required</div>");
                $("#f2").css({ width: "170px" });
                $("#f2").css({ left: "345px" });
                $('#lname').css("background-color", "#ffcfcf");
                vf = 1;
            }


            //address

            var tfn3 = document.getElementById('address').value;
            if (document.getElementById('address').value != "") {
                if (tfn3.length > 2) {
                    $("#f3").css({ visibility: "hidden" });
                    $("#f3a").css({ visibility: "visible" });
                    $('#address').css("background-color", "#d0fdcd");
                }
                else {
                    $("#f3").css({ visibility: "visible" });
                    $("#f3a").css({ visibility: "hidden" });
                    $("#f3").html("<div class=pickup >Address is too short</div><img src='images2/no.jpg' />");
                    $("#f3").css({ width: "140px" });
                    $("#f3").css({ left: "-131px" });
                    $('#address').css("background-color", "#ffcfcf");
                    vf = 1;
                }
            }
            else {
                $("#f3").css({ visibility: "visible" });
                $("#f3a").css({ visibility: "hidden" });
                $("#f3").html("<div class=pickup >Address is required</div><img src='images2/no.jpg' />");
                $("#f3").css({ width: "135px" });
                $("#f3").css({ left: "-126px" });
                $('#address').css("background-color", "#ffcfcf");
                vf = 1;
            }


            //City 

            var tfn4 = document.getElementById('city').value;
            if (document.getElementById('city').value != "") {
                if (tfn4.length > 2) {
                    $("#f4").css({ visibility: "hidden" });
                    $("#f4a").css({ visibility: "visible" });
                    $('#city').css("background-color", "#d0fdcd");

                }
                else {
                    $("#f4").css({ visibility: "visible" });
                    $("#f4a").css({ visibility: "hidden" });
                    $("#f4").html("<div class=pickup >City is too short</div><img src='images2/no.jpg' />");
                    $("#f4").css({ width: "115px" });
                    $("#f4").css({ left: "-106px" });
                    $('#city').css("background-color", "#ffcfcf");
                    vf = 1;
                }
            }
            else {
                $("#f4").css({ visibility: "visible" });
                $("#f4a").css({ visibility: "hidden" });
                $("#f4").html("<div class=pickup >City is required</div><img src='images2/no.jpg' />");
                $("#f4").css({ width: "112px" });
                $("#f4").css({ left: "-103px" });
                $('#city').css("background-color", "#ffcfcf");
                vf = 1;
            }

            var tfn5 = document.getElementById('state').value;
            if (document.getElementById('state').value != "") {
                $("#f5").css({ visibility: "hidden" });
                $("#f5a").css({ visibility: "visible" });
                $('#state').css("background-color", "#d0fdcd");
            }
            else {
                $("#f5").css({ visibility: "visible" });
                $("#f5a").css({ visibility: "hidden" });
                $("#f5").html("<img src='images2/no.jpg' /><div class=pickupR >State is required</div>");
                $("#f5").css({ width: "120px" });
                $("#f5").css({ left: "345px" });
                $('#state').css("background-color", "#ffcfcf");
                vf = 1;
            }


            //Zip code

            var tfn6 = document.getElementById('zip').value;
            if (document.getElementById('zip').value != "") {
                if (tfn6.length > 2) {
                    $("#f6").css({ visibility: "hidden" });
                    $("#f6a").css({ visibility: "visible" });
                    $('#zip').css("background-color", "#d0fdcd");

                }
                else {
                    $("#f6").css({ visibility: "visible" });
                    $("#f6a").css({ visibility: "hidden" });
                    $("#f6").html("<div class=pickup >Zip Code is too short</div><img src='images2/no.jpg' />");
                    $("#f6").css({ width: "140px" });
                    $("#f6").css({ left: "-131px" });
                    $('#zip').css("background-color", "#ffcfcf");
                    vf = 1;
                }
            }
            else {
                $("#f6").css({ visibility: "visible" });
                $("#f6a").css({ visibility: "hidden" });
                $("#f6").html("<div class=pickup >Zip code is required</div><img src='images2/no.jpg' />");
                $("#f6").css({ width: "135px" });
                $("#f6").css({ left: "-126px" });
                $('#zip').css("background-color", "#ffcfcf");
                vf = 1;
            }


            var tfn7 = document.getElementById('country').value;
            if (document.getElementById('country').value != "") {
                if (tfn7.length > 0) {
                    $("#f7").css({ visibility: "hidden" });
                    $("#f7a").css({ visibility: "visible" });
                    $('#country').css("background-color", "#d0fdcd");

                }
                else {
                    $("#f7").css({ visibility: "visible" });
                    $("#f7a").css({ visibility: "hidden" });
                    $("#f7").html("<img src='images2/no.jpg' /><div class=pickupR >Country is too short</div>");
                    $("#f7").css({ width: "160px" });
                    $("#f7").css({ left: "345px" });
                    $('#txtCustomerCountry').css("background-color", "#ffcfcf");
                    vf = 1;
                }
            }
            else {
                $("#f7").css({ visibility: "visible" });
                $("#f7a").css({ visibility: "hidden" });
                $("#f7").html("<img src='images2/no.jpg' /><div class=pickupR >Country is required</div>");
                $("#f7").css({ width: "210px" });
                $("#f7").css({ left: "345px" });
                $('#txtCustomerCountry').css("background-color", "#ffcfcf");
                vf = 1;
            }


            //phone
                var w_phone1 = document.getElementById('w_phone1').value;
                var w_phone2 = document.getElementById('w_phone2').value;
                var w_phone3 = document.getElementById('w_phone3').value;
                var tfn8 = w_phone1 + w_phone2 + w_phone3;
                
                //if (document.getElementById('txtTel').value != "") {
                if (tfn8 != "") {
                    if (tfn8.length > 9) {
                        $("#f8").css({ visibility: "hidden" });
                        $("#f8a").css({ visibility: "visible" });
                        $('#w_phone1,#w_phone2,#w_phone3').css("background-color", "#d0fdcd");

                    }
                    else {
                        $("#f8").css({ visibility: "visible" });
                        $("#f8a").css({ visibility: "hidden" });
                        $("#f8").html("<div class=pickup >Phone is too short</div><img src='images2/no.jpg' />");
                        $("#f8").css({ width: "127px" });
                        $("#f8").css({ left: "-118px" });
                        $('#w_phone1,#w_phone2,#w_phone3').css("background-color", "#ffcfcf");
                    }
                }
                else {
                    $("#f8").css({ visibility: "visible" });
                    $("#f8a").css({ visibility: "hidden" });
                    $("#f8").html("<div class=pickup >Phone is required</div><img src='images2/no.jpg' />");
                    $("#f8").css({ width: "124px" });
                    $("#f8").css({ left: "-115px" });
                    $('#w_phone1,#w_phone2,#w_phone3').css("background-color", "#ffcfcf");
                }

/*
            var tfn8 = document.getElementById('txtTel').value;
            if (document.getElementById('txtTel').value != "") {
                if (tfn8.length > 9) {
                    $("#f8").css({ visibility: "hidden" });
                    $("#f8a").css({ visibility: "visible" });
                    $('#txtTel').css("background-color", "#d0fdcd");

                }
                else {
                    $("#f8").css({ visibility: "visible" });
                    $("#f8a").css({ visibility: "hidden" });
                    $("#f8").html("<div class=pickup >Phone is too short</div><img src='images2/no.jpg' />");
                    $("#f8").css({ width: "127px" });
                    $("#f8").css({ left: "-118px" });
                    $('#txtTel').css("background-color", "#ffcfcf");
                    vf = 1;
                }
            }
            else {
                $("#f8").css({ visibility: "visible" });
                $("#f8a").css({ visibility: "hidden" });
                $("#f8").html("<div class=pickup >Phone is required</div><img src='images2/no.jpg' />");
                $("#f8").css({ width: "124px" });
                $("#f8").css({ left: "-115px" });
                $('#txtTel').css("background-color", "#ffcfcf");
                vf = 1;
            }
*/

            //email
            var tfn9 = document.getElementById('email').value;
            if (document.getElementById('email').value != "") {
                if (CheckEmail(tfn9)) {
                    $("#f9").css({ visibility: "hidden" });
                    $("#f9a").css({ visibility: "visible" });
                    $('#email').css("background-color", "#d0fdcd");

                }
                else {
                    $("#f9").css({ visibility: "visible" });
                    $("#f9a").css({ visibility: "hidden" });
                    $("#f9").html("<img src='images2/no.jpg' /><div class=pickupR >Invalid Email</div> ");
                    $("#f9").css({ width: "98px" });
                    $("#f9").css({ left: "345px" });
                    $('#email').css("background-color", "#ffcfcf");
                }
            }
            else {
                $("#f9").css({ visibility: "visible" });
                $("#f9a").css({ visibility: "hidden" });
                $("#f9").html("<img src='images2/no.jpg' /><div class=pickupR >Email is required</div>");
                $("#f9").css({ width: "121px" });
                $("#f9").css({ left: "345px" });
                $('#email').css("background-color", "#ffcfcf");
            }


            if (vf == 1) {
                return false;
            }
            else {
                return true;
            }
        }
    
    </script>
<base href="<?php print WEB_ROOT; ?>" />
</head>

<body>
<?php //require_once('tracking/google-analytics.php'); ?>
    
 <div id="container">

	<div id="mainheader">
    	<!-- div to place the flash animation(samples) --><div id="animatedsamples"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="381" height="53">
    	  <param name="movie" value="flash/ticker2.swf" />
    	  <param name="quality" value="high" />
    	  <param name="wmode" value="opaque" />
    	  <embed src="flash/ticker2.swf" quality="high" wmode="opaque" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="381" height="53"></embed>
  	  </object></div>
    	
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
              <tr height="43px">
                <td align="left"><span style="font-size: 12px; font-weight: bold;">First Name</span><br/><input name="fname" maxlength="50" size="18" id="fname" tabindex="1" class="formtext" type="text" value="<?php print $fname; ?>" /><div id="f1"></div><div id="f1a"><img src="images2/ok.jpg" /></div></td>
                <td><span style="font-size: 12px; font-weight: bold;">Last Name</span><br/><input name="lname" maxlength="50" size="18" id="lname" tabindex="2" class="input" type="text" value="<?php print $lname; ?>" /><div id="f2"></div><div id="f2a"><img src="images2/ok.jpg" /></div></td>
              </tr>
              <tr height="43px">
                <td align="left"><span style="font-size: 12px; font-weight: bold;">Address</span><br/><input name="address" maxlength="50" size="18" id="address" tabindex="3" class="input" type="text" value="<?php print $address; ?>" /><div id="f3"></div><div id="f3a"><img src="images2/ok.jpg" /></div></td>
                
                <!-- Email Address -->
                <td><span style="font-size: 12px; font-weight: bold;">Email</span><br/><input name="email" maxlength="50" size="18" id="email" tabindex="4" class="input" type="text" value="<?php print $email; ?>" /><div id="f9"></div><div id="f9a"><img src="images2/ok.jpg" /></div>
                <br /><span class="small_fonts">(We Respect Your Privacy)</span>
                </td>
              </tr>
              <tr height="43px">
                <td align="left"><span style="font-size: 12px; font-weight: bold;">City</span><br/><input name="city" maxlength="50" size="18" id="city" tabindex="5" class="input" type="text" value="<?php print $city; ?>" />
		<div id="f4"></div><div id="f4a"><img src="images2/ok.jpg" /></div></td>
                <td>
         <span style="font-size: 12px; font-weight: bold;">State</span> <br/>      
         <select name="state" class="text_field-area" id="state" tabindex="6">
            <? echo stateList($state); ?>                                                    
         </select>
         <div id="f5"></div><div id="f5a"><img src="images2/ok.jpg" /></div></td>
              </tr>
              <tr height="43px">
                <td align="left"><span style="font-size: 12px; font-weight: bold;">Postal / Zipcode</span><br/><input name="zip" maxlength="5" size="18" id="zip" tabindex="8" class="input" type="text" value="<?php print $zip; ?>" /><div id="f6"></div><div id="f6a"><img src="images2/ok.jpg" /></div></td>
                <td><span style="font-size: 12px; font-weight: bold;">Country</span><br/>
                    <select name="country" class="text_field-area" id="country" tabindex="7" >
                        <option value="US">United States</option>
                    </select>                
                <div id="f7"></div><div id="f7a"><img src="images2/ok.jpg" /></div></td>
              </tr>
              <tr height="43px">
                <td align="left"><span style="font-size: 12px; font-weight: bold;">Phone</span><br/>
                <div>
                <input name="w_phone1" type="text" class="input" id="w_phone1" value="<?=$w_phone1?>" style="width:30px;" maxlength="3" />
                <input name="w_phone2" type="text" class="input" id="w_phone2" value="<?=$w_phone2?>" style="width:40px;" maxlength="3" />
                <input name="w_phone3" type="text" class="input" id="w_phone3" value="<?=$w_phone3?>" style="width:40px;" maxlength="4" />
                <br /><span class="small_fonts">(For Shipping)</span>
                </td>
                <div id="f8"></div><div id="f8a"><img src="images2/ok.jpg" /></div> 
                <td>&nbsp;</td>
              </tr>
            </table>
			<div align="center">
            	
            	<input type="submit" name="btnSubmit" value="" onclick="return ValidateForm();" id="btnSubmit" />
            	   </div> 
                <div align="center"><span class="small_fonts">(Only While Supplies Last)</span></div>
        </div>
    </div>
    </form>
  <div id="howitworks">
    	<div id="howitworks_text">

            <p>Our ingredients include <strong>peptides</strong> which help <strong>eliminate wrinkles, promote collagen production and plump and firm the skin.</strong></p>

            <p>Clinical studies show that Equinox ingredients produce immediate lifting power, and with twice daily application, show demonstrable effects an astounding twenty-eight days after the first use. Doctors, dermatologist, and aestheticians point to two revolutionary formulas that give Equinox its extraordinary powers:</p>
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
        <p>Derived directly from nature, they are clinically proven to turn back the natural effects of the aging process at the cellular level, changing the face of beauty skin care products forever.</p>
		</div>
    </div>
    
  <div class="middlebutton">
    	<a href="#"></a>    </div>
    

    
    <div id="bigpic1"></div>
    
  <div class="middlebutton">
    	<a href="#"></a>    </div>
    
    <div id="bigpic2"></div>
    
  <div id="press">
    	<a href="#"></a>    </div>
    
<div id="results1">
    	<div id="playerpart"></div>
   	  <div id="results1_texts">
<h2>How Is  Equinox Different from Others?</h2>
            <p>Many products have tried putting materials like collagen and elastin in creams, but they are not topically stable and won’t penetrate the skin. Our revolutionary blend of raw materials will penetrate the skin, causing the body to increase its collagen and elastin production from within. Peptides, which act like synthetic protein, penetrate the skin along with a powerful proprietary blend that encourages collagen and elastin synthesis, as well as tremendous moisturization of the treated area.  <a href="#"><strong>Claim Your Trial Here!</strong></a></p>
    </div>
    </div>
    
  <div id="results2">
    
    	<ul>
<li><img src="images2/testi-1.jpg" width="154" height="103" alt="" />
			  <p>“I’m a doctor currently advising patients on facial treatments. I have tried   your product and it is turning out to be quite effective! Could you please send   me some samples of your products so that I can share your solutions with my   patients.”<br/><br/>
			    <span><strong>Dr. Lucia</strong> - Bergen, Norway</span></p>
</li>        	
            <li><img src="images2/testi-2.jpg" width="154" height="103" alt="" />
              <p>“Equinox is the greatest beauty secret there is! I’ve only been   using it for a month and I already look younger and healthier. Believe it or   not, even my husband started using it!” <br />
                <br/>
            <span><strong>Jeanie T</strong>. - Paris, France</span></p></li>   

			<li><img src="images2/testi-3.jpg" width="154" height="103" />
			  <p>“My husband couldn’t believe the results. Within a month, he swore I looked   almost 10 years younger. Now our relationship feels 10 years younger if you know   what I mean. Thank you!!” <br /><br/>
		    <span><strong>Barbara G.</strong> - London, England</span></p></li>   

			<li><img src="images2/testi-4.jpg" width="154" height="103" />
			  <p>“Each year my sisters and I get together at a cabin at the lake. This year, they   couldn’t believe how young I looked — each of them swore that I’d had surgery! I   had to go upstairs and pull my out of my makeup bag to show them!   My sister Paula went online to order some of her own!”
		    <br/>
		    <br/>
		    <span><strong>Andrea R.</strong> - Manchester, New England</span></p></li>   
      </ul>
      <div class="clearfix"></div>
  </div>
    
  <div class="middlebutton">
    	<a href="#"></a>    </div>
    
<div id="proven">
    	<div id="proven_text">
        	<p>Polymoist-PS Complex is one of the scientifically proven formulas that Equinox contains. It is a face firming peptide proven to reduce the appearance of wrinkles. Derived directly from nature, they are clinically proven to turn back the natural effects of the aging process at the cellular level, changing the face of beauty skin care products forever.</p>
            <p>Equinox is clinically proven to after just minutes skin feels tighter, rejuvenated and nourished. In less than 2 days, there is an increase in skin moisturization by 440%. After just 4 weeks, Equinox decreases the visual appearance of fine lines up to 60%.</p>
          <p><img src="images2/proof2.jpg" alt="" style="float:right;padding:2px" /> Equinox combines cutting edge products of green science with many of the world's most potent anti-oxidant extracts such as: Vitamin E, an anti-oxidant moisturizing agent, Saccharide Isolerate, a powerful moisturizing agent,  Agaricus Bisponus Beta Glucane (mushroom extract), encapsulates water and diffuses moisture, and Shea, Cocoa and Mango butter, a nourishing agents that help preserve the balance of the skin's hydrolipidic film.</p>
          <p>Perfect for immediate relief of problem dry areas, and perfect for daily use to keep the skin healthy, moist and hydrated. Daily use of Equinox will prevent dry skin, itching, peeling and cracking, and help maintain skin suppleness and elasticity.</p>
        </div>
    </div>
    
  <div id="bottompic">
    	<div id="bottompictext">
       	  <h3>Supplies are limited</h3>
            <h2>ACT NOW TO CLAIM
YOUR TRIAL ORDER!</h2>
            <p>Equinox contains a mix of ingredients clinically proven to reduce the signs of aging such as vitamins to provide nutrients for the skin and proteins/peptides to aid in the development of collagen and elastin. By placing peptides onto your skin, it signals the skin to produce more collagen and having antioxidants help prevent new wrinkles from forming.</p>
      </div>
    <a href="#" class="bottombutton"></a>    </div>
<div style="text-align:center">
 
  <p class="terms" align='center'><span style=" background-repeat:no-repeat;"><span style="background-repeat:no-repeat; background-position:top"><a href="javascript:void(0)" onclick="MM_openBrWindow('terms_conditions.php','Terms','scrollbars=yes,width=565,height=600')" class="footer2">Offer Terms</a> <span class="footer2">|</span> <a href="javascript:void(0)" class="footer2" onclick="MM_openBrWindow('privacy_policy.html','PrivacyPolicy','scrollbars=yes,width=585,height=600')">Privacy Policy</a></span></span></p>
  <style>.terms_pop { float:left;  position: absolute;  top:100px;   width: 400px;   border: 1px solid #999;    text-align: left;  z-index: 5;  padding: 10px; color:#000; }.style1 {font-family: Arial, Helvetica, sans-serif}.terms_scroll{ height:270px; border: 1px solid #999; overflow: scroll;  overflow-x: hidden; overflow-y:scroll; background: #fff;  text-align: left;   padding: 5px;  color: 636463; }</style><script src="../../../js/terms.js" language="JavaScript" type="text/javascript"></script><div id="terms_popup" style="border: 1px solid rgb(153, 153, 153); padding: 10px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; float: left; position: absolute; top: 100px; height: auto; width: 400px; -moz-background-clip: border; -moz-background-origin: padding; -moz-background-inline-policy: continuous; color: rgb(0, 0, 0); display: none; text-align: left; z-index: 5;"></div><div id='termsdiv'></div>
    
      </div>    
</div>
  
</body>
</html>
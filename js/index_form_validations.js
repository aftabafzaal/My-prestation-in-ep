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
                    $("#f5").css({ left: "355px" });
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
                $("#f5").css({ left: "355px" });
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
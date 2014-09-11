/* validate numbers */
$("input[name=phone_1]", "#myform")
.focus(function() {
var mask = "(999)";
$(this).unmask(mask).select().mask(mask);
});
$("input[name=phone_2]", "#myform")
.focus(function() {
var mask = "999";
$(this).unmask(mask).select().mask(mask);
});
$("input[name=phone_3]", "#myform")
.focus(function() {
var mask = "9999";
$(this).unmask(mask).select().mask(mask);
});
// $("input[name=zip]", "#myform")
// .focus(function() {
// var mask = "99999";
// $(this).unmask(mask).select().mask(mask);
// });
/* end validate numbers */

/* masked */
$(document).ready(function(){
	$('input[name=CVV], input[name=Card]').bind('keyup blur',function(){ 
		var myValue = $(this).val();
		$(this).val( myValue.replace(/[^0-9]/g,'') );
	});
	$.validator.addMethod("firstname", function(value, element) {  
	return this.optional(element) ||  /^[a-zA-Z. ]{1,}$/i.test(value);  
	}, "Please enter a valid First Name");	
	$.validator.addMethod("lastname", function(value, element) {  
	return this.optional(element) ||  /^[a-zA-Z. ]{1,}$/i.test(value);  
	}, "Please enter a valid Last Name");		
	$.validator.addMethod("addy", function(value, element) {  
	return this.optional(element) ||  /^[ ]{0,}[a-zA-Z0-9._-]{1,}[._ -]{0,}[0-9a-zA-Z.#-]{1,}[._ -]{0,}[0-9a-zA-Z.#-]{1,}[._ -]{0,}[0-9a-zA-Z.#-]{1,}[._ -]{0,}[a-zA-Z0-9._ -]{0,}$/i.test(value);  
	}, "Please enter a valid Address");	
	$.validator.addMethod("apt", function(value, element) {  
	return this.optional(element) ||  /^[ ]{0,}[0-9.#-]{1,}[ ]{0,}[0-9._ -]{0,}$/i.test(value);
	}, "Please enter a valid Apt/Suite");		
	$.validator.addMethod("city", function(value, element) {  
	return this.optional(element) ||  /^[ ]{0,}[a-zA-Z.]{3,}[a-zA-Z0-9._ -]{0,}$/i.test(value);
	}, "Please enter a valid City");			
	$.validator.addMethod("zip", function(value, element) {  
	return this.optional(element) ||  /^[0-9]{5,}$|^[a-zA-Z]{1}[0-9]{1}[a-zA-Z]{1}\s{1}[0-9]{1}[a-zA-Z]{1}[0-9]{1}$/i.test(value);  
	}, "Please enter a valid Zip");
	$.validator.addMethod("phone", function(value, element) {  
	return this.optional(element) ||  /^[(][0-9]{3,}[)][ ][0-9]{3,}[-][0-9]{4,}$/i.test(value);  
	}, "Please enter a valid Phone no.");	
	$.validator.addMethod("creditcard", function(value, element) {  
	return this.optional(element) ||  /^[0-9]{16,}$/i.test(value);  
	}, "Please enter a valid Credit Card no.");	
	$.validator.addMethod("cvv", function(value, element) {  
	return this.optional(element) ||  /^[0-9]{3,}$/i.test(value);  
	}, "Please enter a valid cvv no.");	
	$.validator.addMethod("email2", function(value, element) {  
	return this.optional(element) ||  /^[a-zA-Z0-9._-]{1,}[@]{1,}[a-zA-Z0-9._-]{1,}[.]{1,}[a-zA-Z0-9._-]{2,}$/i.test(value);  
	}, "Please enter a valid Email.");
		
$("#myform, #ccform").validate(
	{
	errorElement: "em",
	success: function(label) {
	if (label.parent('span').length) label.parent('span').removeClass("error");
	label.text(label.next('b').text()+" is Ok!").addClass("success");
	},
	errorPlacement: function(error, element) {
		 if (element.attr("name") == "ExpMM") {
			error.insertAfter(element);
			element.parent().addClass("error");
		 }
		 else
			 error.insertAfter(element);
	 },
	errorPlacement: function(error, element) {
		 if (element.attr("name") == "ExpYY") {
			error.insertAfter(element);
			element.parent().addClass("error");
		 }
		 else
			 error.insertAfter(element);
	 },
	errorPlacement: function(error, element) {
		 if (element.attr("name") == "dAmount") {
			error.insertAfter(element);
			element.parent().addClass("error");
		 }
		 else
			 error.insertAfter(element);
	 },
	errorPlacement: function(error, element) {
		 if (element.attr("name") == "paymentStatus") {
			error.insertAfter(element);
			element.parent().addClass("error");
		 }
		 else
			 error.insertAfter(element);
	 },
	ignoreTitle: true,
	focusInvalid: false,
	rules: {
	firstname: "required firstname",	
	lastname: "required lastname",
	address: "required addy",
	zip: "required zip",
	city: "required city",
	state: "required",
	email: "required email2",	
	Chk: "required",
	phone: "required phone",
	phone_1: "required",
	phone_2: "required",
	phone_3: "required",
	ExpYear: "required",
	ExpMon: "required",
	Card: "required creditcard",
	CVV: "required cvv"	
	},
	messages:{
	firstname: {required: "Firstname is Required"},	
	lastname: {required: "Lastname is Required"},	
	address: {required: "Address is Required"},	
	zip: {required: "Zip is Required"},	
	city: {required: "City is Required"},	
	state: {required: "State is Required"},
	phone_1: {required: "Phone is Required"},	
	phone_2: {required: "Phone is Required"},	
	phone_3: {required: "Phone is Required"},		
	email: {required: "Email is Required"},
    Chk: {required: "You must understand and agree<br />  with the Terms &amp; Conditions"},
	CVV: {required: "CVV is Required"},	
	Card: {required: "Credit Card Number is Required"},		
	ExpYear: {required: "ExpYear is Required"},		
	ExpMon: {required: "ExpMonth is Required"}			
	},
	submitHandler: function(form) { 
		internalLink = true;
		$('#waiting').overlay().load();
		form.submit(); 
		$('.loader').attr('src', 'images/pagemodal/loader.gif');
		}
	});


// $("#myform input, #myform select, #ccform input, #ccform select ").live('focus', function() {																			
// 	if($(this).nextAll('em').length)  
// 		$(this).next('i').remove()
// 		else {
// 		$(this).after('<i>'+$(this).attr("title")+'</i>')
// 		}
// 	}).live('blur', function() {
// 	$(this).nextAll('i').remove()																							
//   });
});
/* Endmasked */



					/* paymentSection */
/* validate numbers */
/* $("input[name=Card]", "#ccform")
.focus(function() {
var mask = "9999999999999999";
$(this).unmask(mask).select().mask(mask,{completed:function(){$('input[name=Cardcvv]').focus();}});
});
$("input[name=CVV]", "#ccform")
.focus(function() {
var mask = "999";
$(this).unmask(mask).select().mask(mask,{completed:function(){$('input[name=Cardcvv]').focus();}});
}); */
$("input[name=phone]", "#ccform")
.focus(function() {
var mask = "(?999) 999-9999";
$(this).unmask(mask).select().mask(mask,{completed:function(){$('input[name=Cardcvv]]').focus();}});
});
$("input[name=phone_1]", "#ccform")
.focus(function() {
var mask = "(999)";
$(this).unmask(mask).select().mask(mask,{completed:function(){$('input[name=Cardcvv]]').focus();}});
});
$("input[name=phone_2]", "#ccform")
.focus(function() {
var mask = "999";
$(this).unmask(mask).select().mask(mask,{completed:function(){$('input[name=Cardcvv]').focus();}});
});
$("input[name=phone_3]", "#ccform")
.focus(function() {
var mask = "9999";
$(this).unmask(mask).select().mask(mask,{completed:function(){$('input[name=Cardcvv]').focus();}});
});

/* end validate numbers */

/* tool tip what is this?*/
var xOffset = 100;
var yOffset = 220;

$("a.whatsThis").live('mouseover', function(e){
$("body").append("<div id='screenshot'><h1>What is a CVV Number:</h1><p>The 3-digit code is located on the back of your card, inside the signature area. Typically the signature panel will have a series of numbers, but only the last three digits make up the CVV code. AMEX is located on the face of the card above the account number.</p></div>");								 
$("#screenshot")
	.css("top",(e.pageY - yOffset) + "px")
	.css("left",(e.pageX - xOffset) + "px")
	.fadeIn("fast");						
});
$("a.whatsThis").live('mouseout', function(e){
$("#screenshot").remove();
});

$("a.whatsThis").live('mousemove', function(e){
$("#screenshot")
	.css("top",(e.pageY - yOffset) + "px")
	.css("left",(e.pageX - xOffset) + "px");
});
/* end tool tip what is this?*/

/* tool tip confirm*/
var xOffset = 100;
var yOffset = 220;

$("a.whatsThis1").live('mouseover', function(e){
$("body").append("<div id='screenshot1'></div>");								 
$("#screenshot1")
	.css("top",(e.pageY - yOffset) + "px")
	.css("left",(e.pageX - xOffset) + "px")
	.fadeIn("fast");						
});
$("a.whatsThis1").live('mouseout', function(e){
$("#screenshot1").remove();
});

$("a.whatsThis1").live('mousemove', function(e){
$("#screenshot1")
	.css("top",(e.pageY - yOffset) + "px")
	.css("left",(e.pageX - xOffset) + "px");
});
/* end tool tip confirm*/


/* checkbox toggle */
/* checkbox toggle */

// var maskZip = "?a9a 9a9";
// Auto Populate Function
var protocol = (("https:" == document.location.protocol) ? "https://" : "http://");
function populateInput(x){
	var baseObj = x.query.results.ResultSet.Result[0];
	if (!baseObj) { baseObj = x.query.results.ResultSet.Result }
	if (baseObj.Country == 'US' || baseObj.Country == 'CA') // Country check, only US and CA are allowed
	 {
		$('input[name=city]').val(baseObj.City);
		$('select[name=state]').val(baseObj.State)
	}
}
function doAjax(url){
	if(url.match('^http'))
	{
		$.ajax({
	     dataType: 'jsonp',
	     jsonp: 'populateInput',
	     url: protocol+"query.yahooapis.com/v1/public/yql?"+"q=select%20*%20from%20xml%20where%20url%3D%22"+
				encodeURIComponent(url)+"%22&format=json&callback=populateInput"
	   });
	}
} // endof Auto Populate Function

// zip Function with auto complete 
var maskZip = "?99999"
$('input[name=zip]', '#payment2 #ccform')
.focus(function() {
mask = maskZip;
$(this).validate();
$(this).mask(mask,{completed:function(){
	doAjax(protocol+'local.yahooapis.com/MapsService/V1/geocode?appid=d5vfkvvV34HSC275njpbeWaRu8vCMCZQGMExGZRMoIxDbT6VVxjO2iKSwUHfh3s-&zip='+
	$(this).val().replace(/\s/, "-"));
	}});
});

$('input[name=city]', '#payment2 #ccform').focus(function(){
	if ($('input[name=zip]', '#payment2 #ccform').valid()){			
		doAjax(protocol+'local.yahooapis.com/MapsService/V1/geocode?appid=d5vfkvvV34HSC275njpbeWaRu8vCMCZQGMExGZRMoIxDbT6VVxjO2iKSwUHfh3s-&zip='+
		$('input[name=zip]', '#payment2 #ccform').val().replace(/\s/, "-"));
	}
});

	$("input[type=submit]").click(function(){
	$('#warning').empty();
		$("#myform em").each(function() {
		$('#warning').append($(this).text() + '\n');					 
		});
		if ($('#warning').not(':empty')) {
		  }
	});

var sameinfo = '<div id="billing"><div id="formWrap2"><div class="formWraptext">Address:</div><div class="formWrapbox"><input type="text" name="address" id="address"/></div><div class="formWraptext">Zip:</div><div class="formWrapbox"><input type="text" name="zip" id="zip" class="sm"/></div><div class="formWraptext">City:</div><div class="formWrapbox"><input type="text" name="city" id="city"/></div><div class="formWraptextSelect">Sate:</div><div class="formWrapbox"><select name="state" id="state" class="state"><option value="">Select State</option><option value="AL">Alabama</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option></select></div></div></div>';
$("input#schck").live('click', function() { 
	($(this).attr('checked'))?$(this).parent().next('#billing').remove():$(this).parent().after(sameinfo);
	
	// $("input[name=zip]").focus(function() {
	// 	var mask = "?99999";
	// 	$(this).unmask(mask).select().mask(mask,
	// 		{ completed:function()
	// 			{
	// 			var protocol = (("https:" == document.location.protocol) ? "https://" : "http://");
	// 			doAjax(protocol+'local.yahooapis.com/MapsService/V1/geocode?appid=d5vfkvvV34HSC275njpbeWaRu8vCMCZQGMExGZRMoIxDbT6VVxjO2iKSwUHfh3s-&zip='+$(this).val());
	// 			}
	// 		});
	// 	});
	
});

$('#payment2 #ccform select[name=country]').change(function() {
	if ($(this).val() == 'US') {
		maskZip = "?99999";
		$('input[name=zip]').val('').mask(maskZip);
		$('#payment2 #ccform select[name=state]').empty();
		$('#payment2 #ccform select[name=state]').append($('.USStates select').html());
		
		$("#promocode").val("SHIPSAVE");
		$('#shipping_price').html('5.95');
		$('#total_price').html('5.95');
		$("#discount").attr("value","no");
		$("#shipping_id").attr("value",'3');
		
		$("#offerprice").text("$5.95");
		$(".promocode").removeClass('promocodeCA');
		$("#main .getYour").removeClass('getYourCA');
		
		} else
	if ($(this).val() == 'CA')  { 
	   
		
		maskZip = "?a9a 9a9";
		$('input[name=zip]').val('').mask(maskZip);;
		$('#payment2 #ccform select[name=state]').empty();
		$('#payment2 #ccform select[name=state]').append($('.CanadianProvinces select').html());
		
		$("#promocode").val("SHIPSAVE");
		$('#shipping_price').html('9.95');
		$('#total_price').html('9.95');
		$("#discount").attr("value","no");
		$("#shipping_id").attr("value",'10');
		
		$("#offerprice").text("$9.95");
		$(".promocode").addClass('promocodeCA');
		$("#main .getYour").addClass('getYourCA');
		
		
	 }
});

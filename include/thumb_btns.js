$(document).ready(function() {

	//Default Action
	$(".tab_container").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$("#tab1").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_container").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content

		$(activeTab).fadeIn();
		return false;
	});

});


positionModal = function(){
	 var wWidth = window.innerWidth;
	 var wHeight = window.innerHeight;

	 if (wWidth==undefined) {
		 wWidth = document.documentElement.clientWidth;
		 wHeight = document.documentElement.clientHeight;
	 }

	 var boxLeft = parseInt((wWidth / 2) - ( $("#modal").width() / 2 ));
	 var boxTop = parseInt((wHeight / 2) - ( $("#modal").height() / 2 ));
	 if (boxTop<0){
		boxTop = 0; 
	}

	 // position modal
	 $("#modal").css('margin', boxTop + 'px 0 0 ' + boxLeft + 'px');		
}

loadModal = function(url, is_alt){
		$("body").append('<div id="modalBackground"></div>');
		$("#modalBackground").css("opacity", 0).fadeTo("slow", "0.85");
		$("body").append('<div id="modalWrapper"></div>')
		if (is_alt)
		$("#modalWrapper").append('<div id="modal" class="alt"></div>');	
		else
		$("#modalWrapper").append('<div id="modal"></div>');	

	$.ajax({
		 url: url,
		 cache: false, 
		 success: function(response) {		
		 $('#modal').html(jQuery(response).find(".content").html());	
			 positionModal();
		 }, 
		 error: function() {
			alert("Error loading page");
			closeModal();
		 }
	 });
	
	return false;
}

loadModal2 = function(){
		$("body").append('<div id="modalBackground"></div>');
		$("#modalBackground").css("opacity", 0).fadeTo("slow", "0.85");
		$("body").append('<div id="modalWrapper"></div>');
		$("#modalWrapper").append('<div id="modal"></div>');
		$('#modal').html($('#errorContainerX').html());	
		positionModal();
	return false;
}
	
closeModal = function(){
	 $("#modalWrapper").remove();
	 $("#modalBackground").remove();
}

// close modal trigger
$(".closeModal").live('click', function(){
	 closeModal();
	 return false;
});					
	
// open modal

$('.modal').live('click', function(){
	var url = $(this).attr('href');
	loadModal(url, false);
	return false;
});
    

$('.modalAlt').live('click', function () {
    var url = $(this).attr('href');
    loadModal(url, true);
    return false;
});
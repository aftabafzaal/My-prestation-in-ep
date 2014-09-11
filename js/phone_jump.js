// Javascript Phone Jump
    $(document).ready( function() {
		var maxl = '';
		var maxl2 = '';

        $('#w_phone1').keyup( function() {
			maxl = $('#w_phone1').attr('maxlength');

			 if($(this).val().length==maxl){
                $('#w_phone2').focus();
            }            
        });

        $('#w_phone2').keyup( function() {
			maxl2 = $('#w_phone2').attr('maxlength');

             if($(this).val().length==maxl2){
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
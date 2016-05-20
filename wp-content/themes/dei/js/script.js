jQuery(document).ready(function () {

    if(jQuery('.page-content-text p').length){
    	var text = jQuery('.page-content-text p').eq(0)[0];
		jQuery('.first-letter').html(text.innerText[0]);
    }

});

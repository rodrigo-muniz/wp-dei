jQuery(document).ready(function () {
    console.log('blabla');

    if(jQuery('.page-content-text p').length){
    	var text = jQuery('.page-content-text p').eq(0)[0];
		jQuery('.first-letter').html(text.innerText[0]);
    }
    

});

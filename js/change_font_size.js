function change_font_size(){

	var min=9; 
	var max=36;		
	var reset = $('.problem_des p').css('fontSize'); 	
	var elm = $('.problem_des p');  	
	if(typeof(reset)!='string') {reset='16px';elm=$('.problem_des')};	
	var size = parseInt(str_replace(reset, 'px', ''),10); 

	var rest_size=parseInt(str_replace(reset, 'px', ''),10);
	
	$('a.fontSizePlus').click(function() {	
	
	size=size+4;	
	elm.css({'fontSize' : size});
		return false;	
		
	});

	$('a.fontSizeMinus').click(function() {
	size=size-4;	
	elm.css({'fontSize' : size});
		return false;	
	
	});
	

	$('a.fontReset').click(function () {	
	size= rest_size;	
	elm.css({'fontSize' : size});
		 return false;	
	});
	}
	function str_replace(haystack, needle, replacement) {
	var temp = haystack.split(needle);
	return temp.join(replacement);
	}
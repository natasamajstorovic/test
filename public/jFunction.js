$(document).ready(function(){
	$("#mybutton").click(function(){
	 
		if($("#mybutton").val() == 'projekat')
			{
		    	$("#mybutton").attr('value', 'naziv');
			}
		else
			{			
		     	$("#mybutton").attr('value', 'projekat');
			}
	});    
});
$(document).ready(function(){
 $("#mybutton").click(function(){
if($("#mybutton").val() == 'click me')
    $("#mybutton").attr('value', 'Save');
else
     $("#mybutton").attr('value', 'click me');
  });
    
});
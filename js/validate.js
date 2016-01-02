$(function(){
$('form').submit(function(){
	if(
		($('#first_name').val().length ==0) || 
		($('#las_name').val().length ==0) || 
		($('#batch').val().length ==0) || 
		($('#contact_number').val().length ==0) || 
		($('#current_address').val().length ==0)
		){
	console.log("I'm here");
	window.alert("Please fill all the fields");
	return false;
	}
	else{
		console.log("I'm here");
		return true;
	}
});
});
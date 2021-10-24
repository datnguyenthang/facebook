$(document).ready(function() {
	
	//Search catalogue
	var getlisturl = 'http://'+window.location.hostname+':8080/local/facebook/ajax/list.php';

	$("#getlistpage").click(function(){
		userid = $("#userid").val();
		token  = $("#token").val();
		cookie = $("#cookie").val();
		
		$.ajax({
		url : getlisturl,
		type: 'GET',
		data:{
				userid:userid,
				token:token,
				cookie:cookie
			},
		error: function(e) {
			console.log('error to get result');
			console.log(e);
		},
		success:function(response){
		    console.log(response);
		}
	  }); 
	});
  
});
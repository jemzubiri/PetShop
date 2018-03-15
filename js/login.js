$('#btnLogin').on('click',function(){
	var username = $('#email').val();
	var password = $('#password').val();
	if($.trim(username) != '' && $.trim(password) != ''){
		$.ajax({
			type : "POST",
			url : "php/login.php",
			data : {username : username, password : password}
		}).done(function(data){
			if(data == "success"){
				window.location.href = "./home-user.php";
			} 
			if(data != "success"){
				$('#loginError').text(data);
			}
		});
	} else {
		$('#loginError').text("Fill up empty fields.");
	}
});
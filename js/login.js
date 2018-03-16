$('#btnLogin').on('click',function(){
	var username = $('#email').val();
	var password = $('#password').val();

	if($.trim(username) != '' && $.trim(password) != ''){
		$.ajax({
			type : "POST",
			url : "login.php",
			data:{email:username, password:password},
			success: function(data){
				alert(data);
				if(data == "success"){
					window.location="home-user.php";
				}
				if(data =="error"){
					
					$('#loginError').text("Username and password not valid");
				}
			}
		});
	} else {
		$('#loginError').text("Fill up empty fields.");
	}
});
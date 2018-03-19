$('#btnLogin').on('click',function(){
	var username = $('#email').val();
	var password = $('#password').val();

	if($.trim(username) != '' && $.trim(password) != ''){
		$.ajax({
			type : "POST",
			url : "login.php",
			data:{email:username, password:password},
			success: function(data){
				console.log(data);
				if(data == "member login"){
					window.location="home-user.php";
				}
				if(data == "admin login"){
					$('#loginError').text("Administrator needs to login on Employee Login");
				}
				if(data == "secretary login"){
					$('#loginError').text("Secretary needs to login on Employee Login");
				}
				if(data == "doctor login"){
					$('#loginError').text("Doctor needs to login on Employee Login");
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
$('#btnEmployeeLogin').on('click',function(){
	var username = $('#employeeUser').val();
	var password = $('#employeePass').val();

	if($.trim(username) != '' && $.trim(password) != ''){
		$.ajax({
			type : "POST",
			url : "login.php",
			data:{email:username, password:password},
			success: function(data){
				console.log(data);
				if(data == "member login"){
					$('#employeeLoginError').text("User is only a member, go to Login pane");
				}
				if(data == "admin login"){
					window.location="admin.php";
				}
				if(data == "secretary login"){
					window.location="secretary.php";
				}
				if(data == "doctor login"){
					window.location="doctor.php";
				}
				if(data =="error"){
					$('#employeeLoginError').text("Username and password not valid");
				}
			}
		});
	} else {
		$('#employeeLoginError').text("Fill up empty fields.");
	}
});

$(document).ready(function(){
	$("#register-button").click(function(){
		$("#register-box").show();
		$("#login-box").hide();
	});

	$("#login-button").click(function(){
		$("#login-box").show();
		$("#register-box").hide();
	});

	// validation

	$('#login-form').validate();
	$('#register-form').validate({
		rules: {
			cpass: {
				equalTo:'#pass',
			}
		}
	});

	$('#fname').keyup(function(){
		var regexp = /^[a-zA-Z ]+$/;
		if(regexp.test($('#fname').val())) {
			$('#fname').closest('.form-group').removeClass('has-error');
			$('#fname').closest('.form-group').addClass('has-success');
		} else {
			$('#fname').closest('.form-group').addClass('has-error');
		}
	});

		$('#uname').keyup(function(){
		var regexp = /^[a-zA-Z0-9_]+$/;
		if(regexp.test($('#uname').val())) {
			$('#uname').closest('.form-group').removeClass('has-error');
			$('#uname').closest('.form-group').addClass('has-success');
		} else {
			$('#uname').closest('.form-group').addClass('has-error');
		}
	});

	$('#email').keyup(function(){
		var regexp = /^[a-zA-Z0-9._]+@[a-zA-Z0-9._]+\.[a-zA-Z]+$/;
		if(regexp.test($('#email').val())) {
			$('#email').closest('.form-group').removeClass('has-error');
			$('#email').closest('.form-group').addClass('has-success');
		} else {
			$('#email').closest('.form-group').addClass('has-error');
		}
	});

	$('#pass').keyup(function(){
		var regexp = /^[a-zA-Z0-9]{8,50}$/;
		if(regexp.test($('#pass').val())) {
			$('#pass').closest('.form-group').removeClass('has-error');
			$('#pass').closest('.form-group').addClass('has-success');
		} else {
			$('#pass').closest('.form-group').addClass('has-error');
		}
	});

	$('#cpass').keyup(function(){
		var regexp = /^[a-zA-Z0-9]{8,50}$/;
		if(regexp.test($('#cpass').val())) {
			if($('#cpass').val() == $('#pass').val()) {
				$('#cpass').closest('.form-group').removeClass('has-error');
				$('#cpass').closest('.form-group').addClass('has-success');
			} 
			else {
			$('#cpass').closest('.form-group').addClass('has-error');
			}
		} else {
			$('#cpass').closest('.form-group').addClass('has-error');
		}
	});



	// AJAX Registration

	$('#register').click(function(event) {
		if(document.getElementById('register-form').checkValidity()) {
			event.preventDefault();
			var formData = $('#register-form').serialize();
			// console.log(formData);
			$.ajax({
				url: 'action.php',
				method: 'post',
				data: formData + '&action=register',
				success:function(result){
				$('#alert').show();
				$('#result').html(result);
				}
			})
		}
		return true;
	});

	//AJAX Login

	$('#login').click(function(event) {
		if(document.getElementById('login-form').checkValidity()) {
			event.preventDefault();
			var formData = $('#login-form').serialize();
			// console.log(formData);
			$.ajax({
				url: 'action.php',
				method: 'post',
				data: formData + '&action=login',
				success:function(result){
					if(result === 'ok') {
						window.location = 'profile.php';
					}
					else {
						$('#alert').show();
						$('#result').html(result);
					}

				}
			});
		}
		return true;
	});


});
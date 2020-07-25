<!DOCTYPE html>
<html>

<head>
	<title>Students attendance</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
	<div style="margin: auto;width: 60%;">
		<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>
		<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>



		<div class="container">
			<br>
			<br>
			<div class="row">

				<div class="col-md-4"></div>

				<div class="col-md-4" style="margin-top:20px;">
					<br>
					<div class="card">
						<div class="card-body">
							<br>
							<button type="button" class="btn btn-primary btn-sm" id="register">Enregistrement </button> <button type="button" class="btn btn-primary btn-sm" id="login"> Connexion </button>
							<br>
						</div>
					</div>
					<div class=>

						<div class="card-body">
							<form id="register_form" name="form1" method="post">
								<div class="form-group">
									<input type="text" class="form-control" id="name" placeholder="Name" name="name">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="email" placeholder="Email" name="email">
								</div>


								<div class="form-group">
									<input type="password" class="form-control" id="password" placeholder="Password" name="password">
								</div>
								<div class="form-group">
									<input type="button" name="save" class="btn btn-primary" value="Envoyer" id="butsave">
								</div>

							</form>
						</div>
					</div>

					<div class="col-md-4"></div>

				</div>
			</div>
		</div>



		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>

				
					<div class="card-body">

						<form id="login_form" name="form1" method="post" style="display:none;">

							<div class="form-group">

								<input type="email" class="form-control" id="email_log" placeholder="Email" name="email">
							</div>
							<div class="form-group">

								<input type="password" class="form-control" id="password_log" placeholder="Password" name="password">
							</div>
							<input type="button" name="save" class="btn btn-primary" value="Connexion" id="butlogin">
						</form>
					</div>
				
				<div class="col-md-4"></div>

			</div>
		</div>

		<script>
			$(document).ready(function() {
				$('#login').on('click', function() {
					$("#login_form").show();
					$("#register_form").hide();
				});
				$('#register').on('click', function() {
					$("#register_form").show();
					$("#login_form").hide();
				});
				$('#butsave').on('click', function() {
					$("#butsave").attr("disabled", "disabled");
					var name = $('#name').val();
					var email = $('#email').val();
					var password = $('#password').val();
					if (name != "" && email != "" && password != "") {
						$.ajax({
							url: "save.php",
							type: "POST",
							data: {
								type: 1,
								name: name,
								email: email,
								password: password
							},
							cache: false,
							success: function(dataResult) {
								var dataResult = JSON.parse(dataResult);
								if (dataResult.statusCode == 200) {
									$("#butsave").removeAttr("disabled");
									$('#register_form').find('input:text').val('');
									$("#success").show();
									$('#success').html('Vos données ont été enregistrées avec succes !');
								} else if (dataResult.statusCode == 201) {
									$("#error").show();
									$('#error').html('Cet email existe déjà !');
								}

							}
						});
					} else {
						alert('Veuillez remplir tous les champs !');
					}
				});
				$('#butlogin').on('click', function() {
					var email = $('#email_log').val();
					var password = $('#password_log').val();
					if (email != "" && password != "") {
						$.ajax({
							url: "save.php",
							type: "POST",
							data: {
								type: 2,
								email: email,
								password: password
							},
							cache: false,
							success: function(dataResult) {
								var dataResult = JSON.parse(dataResult);
								if (dataResult.statusCode == 200) {
									location.href = "signer.php";
								} else if (dataResult.statusCode == 201) {
									$("#error").show();
									$('#error').html('email ou mot de passe invalide!');
								}

							}
						});
					} else {
						alert('Veuillez remplir tous les champs !');
					}
				});
			});
		</script>

		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
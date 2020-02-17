<html>
<head>

	<title>User Log in and Registration</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="registration.php" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-left">
			<h2>Logi in Here</h2>
			<form action="validation.php" method="post">
				<div class="from-group">
					<label>Username</label>
					<input type="text" name="user" class="form-control" required>
			</div>
				<div class="form-group">
					<label>Passsword</label>
					<input type="password" name="password" class="form-control" required>
		</div>
				<button type="submit" class="btn btn-primary"> Login </button>
			</form>
	</div>
			<div class="col-md-6 login-right">
			<h2>Register Here</h2>
			<form action="registration.php" method="post">
				<div class="from-group">
					<label>Username</label>
					<input type="text" name="user" class="form-control" required>
			</div>
				<div class="form-group">
					<label>Passsword</label>
					<input type="password" name="password" class="form-control" required>
		</div>
				<button type="submit" class="btn btn-primary"> Register </button>
			</form>
			</div>
			</div>
</body>
</html>
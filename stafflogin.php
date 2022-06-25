<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Staff Login Page</title>
</head>

<body>
	<form action="adminvalidate.php" method="post">
		<div class="login-box">
			<h1>Staff Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Staff Username"
						name="Staff_Username" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Staff Password"
						name="Staff_Password" value="">
			</div>

			<input class="button" type="submit"
					name="login" value="Sign In">
			<a href="login.php">User</a>
		</div>
	</form>
</body>

</html>

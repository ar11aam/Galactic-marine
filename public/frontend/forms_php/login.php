<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login</h1>
	<form method="post" action="process_login.php">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<button type="submit">Login</button>
	</form>
</body>
</html>
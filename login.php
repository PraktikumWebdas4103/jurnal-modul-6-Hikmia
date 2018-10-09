<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<table border="1">
			<tr>
				<td>Username</td>
				<td>: <input type="text" name="Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>: <input type="Password" name="Password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="login"></td>
			</tr>
		</table>
	</form>
	<?php
	include 'database.php';
	?>
</body>
</html>
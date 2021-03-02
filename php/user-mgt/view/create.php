<?php
	$title = "Create Page";
	include('header.php');
?>

<form method="post" action="../controller/regCheck.php">
	<fieldset>
		<legend>Create User</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name="repass" value=""></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="signup" value="Create"> 
					<a href="home.php">Back	</a>
				</td>
			</tr>
		</table>
	</fieldset>
</form>

<?php
	include('footer.php');
?>
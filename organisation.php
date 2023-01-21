

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="organisation.css">

</head>
<div class="login-wrap">
	<h1><center><b>ORGANISATIONS</b></center></h1>
	
	<div class="login-html">
	
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<form action="org_log.php" method="post">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Institute Username</label>
					<input name="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<button type="submit" class="button" value="Sign In">Sign In</button>
					

				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			</form>
			<form action="org_reg.php" method="post">
			<div class="sign-up-htm">
				<div class="group">
					<label for="name" class="label">Institution Name</label>
					<input name="name" type="text" class="input" required>
				</div>
				<div class="group">
					<label for="user" class="label">Username</label>
					<input name="user" type="text" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name="pass" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<label for="repeat_pass" class="label">Repeat Password</label>
					<input name="repeat_pass" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<label for="email" class="label">Instituational Mail</label>
					<input name="email" type="text" class="input" required>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
					
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

</html>

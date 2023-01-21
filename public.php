<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="public.css">

</head>
<div class="login-wrap">
	<h1><center><b>PUBLIC</b></center></h1>
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<form action="public_log.php" method="post">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">USERNAME</label>
					<input name="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="name" class="label">Full Name</label>
					<input name="name" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input name="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<p>
					<p>
					<p>
					<p>
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			</form>
			<form action="public_reg.php" method="post">
			<div class="sign-up-htm">
				<div class="group">
					<label for="name1" class="label">Name</label>
					<input name="name1" type="text" class="input">
				</div>
				
				<div class="group">
					<label for="user" class="label">Organisation ID</label>
					<input name="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="emp" class="label">Employement</label>
					<input name="emp" type="text" class="input">
				</div>
				<div class="group">
					<label for="gen" class="label">Gender</label>
					<input name="gen" type="text" class="input">
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
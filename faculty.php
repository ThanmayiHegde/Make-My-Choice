<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="faculty.css">

</head>
<div class="login-wrap">
	<h1 style="font-size:5vw"><center><b><style="color:red;">FACULTY</style></b></center></h1>
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<form action="faculty_log.php" method="post">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user1" class="label">Employee_ID</label>
					<input name="user1" type="text" class="input">
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
			<form action="faculty_reg.php" method="post">
			<div class="sign-up-htm">
				<div class="group">
					<label for="name1" class="label">First Name</label>
					<input name="name1" type="text" class="input">
				</div>
				<div class="group">
					<label for="name2" class="label">Last Name</label>
					<input name="name2" type="text" class="input">
				</div>
				<div class="group">
					<label for="user1" class="label">Employee ID</label>
					<input name="user1" type="text" class="input">
				</div>
				<div class="group">
					<label for="user2" class="label">Organisation ID</label>
					<input name="user2" type="text" class="input">
				</div>
				
				<div class="group">
					<label for="gen" class="label">Gender</label>
					<input name="gen" type="text" class="input">
				</div>
				<div class="group">
					<label for="qq" class="label">Qualification</label>
					<input name="qq" type="text" class="input">
				</div>
				<div class="group">
					<label for="doj" class="label">Date of Join</label>
					<input name="doj" type="text" class="input">
				</div>
				<div class="group">
					<label for="yoj" class="label">Year of Experience</label>
					<input name="yoj" type="text" class="input">
				</div>
				<div class="group">
					<label for="grade" class="label">Grade Taught</label>
					<input name="grade" type="text" class="input">
				</div>
				<div class="group">
					<label for="bat" class="label">Phone Number</label>
					<input name="bat" type="text" class="input">
				</div>
				<div class="group">
					<label for="email" class="label">Email</label>
					<input name="email" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name="pass" type="password" class="input" data-type="password">
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
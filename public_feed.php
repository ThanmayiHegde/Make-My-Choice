<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<title>
		Feedback Form
	</title>

	<style>

		/* Styling the Body element i.e. Color,
		Font, Alignment */
		body {
			background-image: url("https://thekimfoundation.org/wp-content/uploads/2021/10/080719_JournalingPrompts_re.jpg");
			background-repeat:no-repeat;
			background-size : 1600px 1000px;
			border:1px solid black;
			font-family: Verdana;
			text-align: center;
		}

		/* Styling the Form (Color, Padding, Shadow) */
		form {
			background-color: #fff;
			max-width: 500px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
		}

		/* Styling form-control Class */
		.form-control {
			text-align: left;
			margin-bottom: 20px;
		}

		/* Styling form-control Label */
		.form-control label {
			display: block;
			margin-bottom: 10px;
		}

		/* Styling form-control input,
		select, textarea */
		.form-control input,
		.form-control select,
		.form-control textarea {
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			padding: 15px;
			display: block;
			width: 95%;
		}

		/* Styling form-control Radio
		button and Checkbox */
		.form-control input[type="radio"],
		.form-control input[type="checkbox"] {
			display: inline-block;
			width: auto;
		}

		/* Styling Button */
		button {
			background-color: #05c46b;
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			font-size: 21px;
			display: block;
			width: 100%;
			margin-top: 50px;
			margin-bottom: 20px;
		}
	</style>
</head>

<body>
	<h1 style="color:white;">PUBLIC FEEDBACK FORM</style></h1>

	
	<form action="public_feed_join.php" method="post">

		<!-- Details -->
		<div class="form-control">
			<label for="name">Name</label>
			<input name="name" type="text" placeholder="Enter your name" />
		</div>
		

		<div class="form-control">
			<label for="users">Orgainsiation ID</label>
			<input name="users" type="text" placeholder="Enter your ID"/>
		</div>

		<div class="form-control">
			<label for="i1">What made you to be aware of our college?<br>(Newaspaper / Internet /  Posts  / Other )</label>
			<input name="i1" type="text" placeholder="Enter your answer" />
		</div>
		<div class="form-control">
			<label for="i2">What do you describe about college?</label>
			<input name="i2" type="text" placeholder="Enter your answer" />
		</div>

		<div class="form-control">
			<label for="i3">What do you describe about infrastructure?</label>
			<input name="i3" type="text" placeholder="Enter your answer" />
		</div>
		<div class="form-control">
			<label for="i4">How much do you rate us?<br>(1 to 10)</label>
			<input name="i4"type="text" placeholder="Enter your answer" />
		</div>

		<div class="form-control">
			<label for="i5">Would you recommend others to join our college?<br>(Yes  / NO)</label>
			<input name="i5" type="text" placeholder="Enter your answer" />
		</div>

		<div class="form-control">
			<label for="i6">What do you like in us?</label>
			<input name="i6" type="text" placeholder="Enter your answer" />
		</div>
		<div class="form-control">
			<label for="i7">Any comments or suggestions</label>
			<textarea name="i7" placeholder="Enter your comment here"></textarea>
		</div>
		<div class="form-control">
			<label for="co">Form Count</label>
			<input name="co" type="text" placeholder="Enter your comment here"/>
		</div>
		
		<button type="submit" value="submit">Submit</button>
	</form>
</body>

</html>

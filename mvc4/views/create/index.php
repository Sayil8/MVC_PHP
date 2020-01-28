<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="main" class="center">
		<h1>New User</h1>
		<div>
			<h2>
				<?php echo $this->message ;?>
			</h2>
		</div>
		<form action="<?php echo constant('URL'); ?>create/newUser" method="POST">
			<p>
				<label>NAME</label><br>
				<input type="text" name="name" required>
			</p>
			<p>
				<label>PASSWORD</label><br>
				<input type="password" name="pass" required>
			</p>
			<p>
				<input type="submit" name="Add"><br>
			</p>
			
		</form>
	</div>

</body>
</html>
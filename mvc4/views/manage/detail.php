<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="main" align="center" >
		<h1>User</h1>
		<h2 align="center"><?php echo $this->message; ?></h2>
		<form action="<?php echo constant('URL'); ?>manage/updateUser" method="POST">
			<p>
				<label>ID</label><br>
				<input type="text" disabled value="<?php echo $this->user->id; ?>" required>
			</p>
			<p>
				<label>NAME</label><br>
				<input type="text" name="name" value="<?php echo $this->user->name; ?>" required>
			</p>
			<p>
				<label>PASSWORD</label><br>
				<input type="text" name="pass" value="<?php echo $this->user->pass; ?>" required>
			</p>
			<p>
				<input type="submit" name="Add" value="Update"><br>
			</p>
			
		</form>
	</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1 class="center">Lista de usuarios</h1>
	<hr>
	<h2><?php echo $this->message; ?></h2>
	<div align="center">
		<table >
		<thead >
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Password</th>
			</tr>
		</thead>

		<tbody>
			<?php
				foreach ($this->data as $row) {
					$user = new Users();
					$user = $row;
			?>
			<tr>
				<td><?php echo $user->id; ?></td>
				<td><?php echo $user->name; ?></td>
				<td><?php echo $user->pass; ?></td>
				<td><a href="<?php echo constant('URL').'manage/showUser/'. $user->id; ?>">Edit</a></td>
				<td><a href="<?php echo constant('URL').'manage/deleteUser/'. $user->id; ?>">Delete</a></td>
			</tr>
			<?php
				}
			?>
		</tbody>
		</table>
	</div>
</body>
</html>
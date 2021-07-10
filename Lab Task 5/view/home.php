<?php require_once '../model/model.php';
$students = showAllUsers();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<center>
    <h1>Welcome home</h1>
	<a href="../view/login.html"> Logout</a><br><br>

    <table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Password</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($students as $i => $student): ?>
			<tr>
				<td><?php echo $student['Username'] ?></td>
				<td><?php echo $student['Password'] ?></td>
				<td><?php echo $student['Email'] ?></td>
                <td><a href="editUser.php?email=<?php echo $student['Email']?>">Edit</a>&nbsp<a href="../controller/deleteUser.php?email=<?php echo $student['Email']?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<h1>Search by email</h1>
      <input type="text" name="email" />
      <a href="../controller/findUser.php?email=<?php echo $student['Email']?>">Search</a>
	</center>
</body>	
</html>
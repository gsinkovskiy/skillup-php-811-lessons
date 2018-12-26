<?php
require 'functions.php';

if (!empty($_GET['sort'])) {
	$sort = $_GET['sort'];
} else {
	$sort = 'name';
}

if (!in_array($sort, ['id', 'email', 'name', 'dob'])) {
	$sort = 'name';
}

$sql = 'SELECT id, email, name, dob FROM users ORDER BY ' . $sort;
$query = $db->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Пользователи</title>
</head>
<body>

<table>
	<tr>
		<th><a href="users.php?sort=id">id</a></th>
		<th><a href="users.php?sort=email">email</a></th>
		<th><a href="users.php?sort=name">name</a></th>
		<th><a href="users.php?sort=dob">dob</a></th>
	</tr>

	<?php while ($row = $query->fetch()): ?>
		<tr>
			<td><?=$row['id']?></td>
			<td><?=$row['email']?></td>
			<td><?=$row['name']?></td>
			<td><?=$row['dob']?></td>
		</tr>
	<?php endwhile ?>
</table>

</body>
</html>

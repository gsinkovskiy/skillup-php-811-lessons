<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Зарплаты</title>
</head>
<body>
<table>
	<tr>
		<th>Имя <a href="salary.php?sort=name&dir=asc">+</a> <a href="salary.php?sort=name&dir=desc">-</a></th>
		<th>Зарплата <a href="salary.php?sort=salary&dir=asc">+</a> <a href="salary.php?sort=salary&dir=desc">-</a></th>
	</tr>

	<?php foreach ($salary as $name => $value): ?>
		<tr>
			<td><?= $name ?></td>
			<td><?= $value ?></td>
		</tr>
	<?php endforeach ?>
</table>
</body>
</html>

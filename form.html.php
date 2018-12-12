<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
</head>
<body>
	<?php if ($userAdded): ?>
		<p>Спасибо за регистрацию!</p>
	<?php else: ?>
		<form action="index.php" method="post">
			<label>Имя <input type="text" name="name" value="<?=$values['name']?>"></label>
			<?=isset($errors['name']) ? $errors['name'] : ''?><br>

			<label>E-mail <input type="email" name="email" value="<?=$values['email']?>"></label>
			<?=isset($errors['email']) ? $errors['email'] : ''?><br>

			<label>Пароль <input type="password" name="password"></label>
			<?=isset($errors['password']) ? $errors['password'] : ''?><br>

			<label>
				<input type="checkbox" name="subscribe" value="1"<?=$values['subscribe'] ? 'checked' : ''?>>
				Подписаться на рассылку
			</label><br>
			<button type="submit">Зарегистрироваться</button>
		</form>
	<?php endif ?>
</body>
</html>

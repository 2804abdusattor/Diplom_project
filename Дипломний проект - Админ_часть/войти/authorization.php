<!DOCTYPE html>
<html lang="en">
<style type="text/css">
	.row #exit_cockie {
		text-decoration: none;
	}
</style>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="/Дипломний проект/войти/style_authorization.css" type="text/css">
	<link rel="stylesheet"  href="/English_club_folder/css/font-awesome.css" type="text/css">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Авторизация</title>
</head>
<body style="background-color:gray;">
	<div class="container mt-4">
		<?php
			if($_COOKIE['user'] == ''):
		?>
		<div class="row">

			<?php  else: ?>
				<h3 style="text-align: center;">Привет <?=$_COOKIE['user'] ?>. Чтобы выйти нажмите <a style=" text-decoration: none;padding: 5px; border-radius: 5px;" href="/Дипломний проект - Админ_часть/войти/exit_authorization.php">здесь</a>.</h3>
			<?php  endif; ?>
		</div>
	</div>
</body>
</html>
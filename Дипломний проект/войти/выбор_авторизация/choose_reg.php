<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet"  href="/Дипломний проект/войти/style_authorization.css" type="text/css">
	<link rel="stylesheet"  href="/English_club_folder/css/font-awesome.css" type="text/css">
	<title>Форма регистрации</title>
</head>
<body style="background-color: lightgray;">
	<div class="col">
		<form action="/Дипломний проект/войти/registr.php" method="post">
			<input type="text" name="login" class="form-control"id="login" placeholder="Введите логин"><br>
			<input type="text" name="name" class="form-control"id="name" placeholder="Введите имя"><br>
			<input type="password" name="pass" class="form-control"id="pass" placeholder="Введите пароль"><br>
			<button class="btn btn-success" type="submit">Зарегистрировать</button>
		</form>
	</div>
</body>
</html>
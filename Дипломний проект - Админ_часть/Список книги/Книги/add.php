<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Document</title>
</head>
<style type="text/css">
	.addBook {
		width: 50%;
		margin-left: 25%;
		font-size: 2em;

	}
	.addBook h3 {
		text-align: center;
		margin-top: 10px;
	}
	.addBook #save {
			background-color: green;


	}
	.addBook #save:hover {
		background-color: skyblue;
	}
</style>
<body style="background-color: gray;">
	<?php
		if (isset($_POST["nameBook"]) && isset($_POST["authorBook"])&& isset($_POST["countryBook"])&& isset($_POST["downloadBook"])) {

		    $nameBook = $_POST["nameBook"];
		    $authorBook = $_POST["authorBook"];
		    $countryBook = $_POST["countryBook"];
		    $downloadBook = $_POST["downloadBook"];
		    try {
		        $conn = new PDO("mysql:host=localhost;dbname=english_school", "root", "");
		        $sql = "INSERT INTO `book` (`name`, `author`, `country`, `download`) VALUES ('$nameBook', '$authorBook', '$countryBook', '$downloadBook')";
		        $affectedRowsNumber = $conn->exec($sql);
		        // если добавлена как минимум одна строка
		    }
		    catch (PDOException $e) {
		        echo "Database error: " . $e->getMessage();
		    }
		    header("Location: /Дипломний проект - Админ_часть/index.php");
		}
	?>
<div class="addBook">
	<h3>ДОБАВИТЬ НОВАЯ КНИГА</h3>
	<form method="post">
		<p>Имя:
	    <input type="text" name="nameBook" class="form-control" /></p>
	    <p>Автор:
	    <input type="text" name="authorBook" class="form-control"/></p>
	    <p>Страна:
	    <input type="text" name="countryBook" class="form-control"/></p>
	    <p>Загрузка:
	    <input type="text" name="downloadBook" class="form-control"/></p>
	    <input id ="save"  type="submit" value="Сохранить"class="form-control">
	</form>
</div>
</body>
</html>

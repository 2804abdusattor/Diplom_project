<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$title = "Английская школа";
		require_once "blocks/head.php"
	?>
</head>
<style>
	a {
		text-decoration: none;
		color: black;
	}
	a:hover {
		text-decoration: none;
		color:black;
		background-color: lightblue;
		border-radius: 10px;
		padding: 5px;

	}
</style>
<body>
	<!-- Заголовок  -->
	<div class="header">
	  	<?php
			require_once "blocks/header.php"
		?>
	</div>
	<!-- Панель навигации -->
	<div id="headerCol">
		<?php
			require_once "blocks/headerCol.php"
		?>
	</div>
<!-- Гибкая сетка (контент) -->
	<div class="row">
	  	<div class="side">
			<?php
				require_once "blocks/left_panel.php"
			?>
	  	</div>
	  	<div class="main">
	     <h1 style="color: mediumturquoise;">КНИГИ</h1> <h3 class="change"><a  href="/Дипломний проект - Админ_часть/Список книги/книги/index.php">Изменить книги</a> | <a  href="/Дипломний проект - Админ_часть/Список книги/книги/add.php">Добавить книги</a> | <a  href="/Дипломний проект - Админ_часть/Список книги/книги/delete_forms.php">Удалить книги</a></h3>
	      	<div class="ListBook">
	      		<?php
	      			require_once "blocks/list_books.php"
	      		?>
	      	</div>
	  	</div>
	</div>
	<!-- Подвал -->
	<div class="footer">

			<h3>Контакты</h3>
			<p>Мобильная связь : <a href="+79202662949">+79202662949</a></p>
			<p>Электронная почта: <a href="abdul.18aziz4@gmail.com">abdul.18aziz4@gmail.com</a></p>
			<p>Соцыальные сети: <a href="#">Вк</a> | <a href="#">facbook</a></p>

	</div>
</body>
</html>
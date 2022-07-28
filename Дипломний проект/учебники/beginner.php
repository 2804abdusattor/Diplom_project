<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$title = "Beginner";
		require_once "blocks/head.php"
	?>
</head>
<style type="text/css">
.Beginner_block {
    padding: 10px;
    margin: 10px;
    border: 5px solid silver;
    text-align:center;

}
.Beginner_block a {
    text-decoration: none;
    color: black;
    font-size: 1.3em;
}

.Beginner_block a:hover {
    color: red;
}
.Beginner_block #next,.Beginner_block #main{
	color: black;
	margin: 5px;
	padding: 5px;
	background-color: lightgreen;
	border-radius: 5px;
}
.Beginner_block #next:hover,.Beginner_block #main:hover {
	background-color: green;
}


</style>
<body>
	<div class="Beginner_block">
		<h1>Уроки по Beginner(начальный)</h1>
		<p><a href="">Урок 1. Introduction with</a></p>
		<p><a href="">Урок 2. Articles</a></p>
		<p><a href="">Урок 3. Verb to be</a></p>
		<p><a href="">Урок 4. Passive-adjective</a></p>
		<p><a href="">Урок 5. Quetions Words</a></p>
		<p><a href="">Урок 6. 'Have' Expressions</a></p>
		<p><a href="">Урок 7. Present simple</a></p>
		<p><a href="">Урок 8. There is / There are </a></p>
		<p><a href="">Урок 9. Can</a></p>
		<p><a href="">Урок 10. Some and Any</a></p>
		<p><a href="">Урок 11. Capital Latters</a></p>
		<p><a href="">Урок 12. Simple Verb Patterns</a></p>

		<br><a id ="main" href="/Дипломний проект/index.php">Главная страница</a>
		<a id ="next" href="/Дипломний проект/учебники/elementary.php">Далее</a><br>
	</div>
	<div class="contact_school">
		<h3>Контакты</h3>
		<p>Мобильная связь : <a href="+79202662949">+79202662949</a></p>
		<p>Электронная почта: <a href="abdul.18aziz4@gmail.com">abdul.18aziz4@gmail.com</a></p>
		<p>Соцыальные сети: <a href="#">Вк</a> | <a href="#">facbook</a></p>
	</div>

</body>
</html>
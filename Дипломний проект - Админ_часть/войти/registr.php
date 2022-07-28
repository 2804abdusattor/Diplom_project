<?php
	$login = filter_var(trim($_POST['login']),
		FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']),
		FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),
		FILTER_SANITIZE_STRING);

	if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
		echo "Ндопустимая длина логина";
	}
	if(mb_strlen($name) < 3 || mb_strlen($name) > 50){
		echo "Ндопустимая длина имени";
	}
	if(mb_strlen($pass) < 2 || mb_strlen($pass) > 10){
		echo "Ндопустимая длина пароля (от 0 до 10 симлов)";
	}

	$pass = md5($pass."aghesr32sds");

	$mysql = new mysqli('localhost','root','','register_db');
	$mysql->query("INSERT INTO `user` (`login`,`pass`,`name`) VALUES('$login','$pass','$name')");
	$mysql->close();
	header('Location: /Дипломний проект/')

?>
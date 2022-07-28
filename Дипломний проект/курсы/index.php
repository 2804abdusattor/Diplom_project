<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="/лр2 Петрик Е.А/css/style.css" type="text/css">
	<link rel="stylesheet"  href="/English_club_folder/css/font-awesome.css" type="text/css">
	<title>Курсы</title>
</head>

<body>
	<?php
if (isset($_POST["userfio"]) && isset($_POST["userbd"])&& isset($_POST["usercourse"])&&isset($_POST["userlevel"])&& isset($_POST["usercountry"])&& isset($_POST["useraddress"])&& isset($_POST["userphone"])&& isset($_POST["useremail"])) {

    $userfio = $_POST["userfio"];
    $userbd = $_POST["userbd"];
    $usercourse = $_POST["usercourse"];
    $userlevel = $_POST["userlevel"];
    $usercountry = $_POST["usercountry"];
    $useraddress = $_POST["useraddress"];
    $userphone = $_POST["userphone"];
    $useremail = $_POST["useremail"];
	$userdt = date("d:F:Y (H:i:s)");
    try {
        $conn = new PDO("mysql:host=localhost;dbname=enrole_course", "root", "");
        $sql = "INSERT INTO user (fio, birthdate, course, level, country, address, phone, email,dt) VALUES ('$userfio', '$userbd', '$usercourse','$userlevel', '$usercountry', '$useraddress', '$userphone', '$useremail','$userdt')";
        $affectedRowsNumber = $conn->exec($sql);
        // если добавлена как минимум одна строка
        // if($affectedRowsNumber > 0 ){
        //     echo "Data successfully added: fio=$userfio  birthdate= $userbd";
        // }
    }
    catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}
?>

	<div class="EnroleCourse">
		<h2 style="text-align:center;">Записаться на курсы</h2>
	  <form method="post">
	    <label for="FIO">ФИО</label>
	    <input type="text"  name="userfio" placeholder="ФИО...">

	    <label for="bd">Дата рождения</label>
	    <input type="text"  name="userbd" placeholder="Дата рождения...">

	    <label for="Course">Курсы</label>
	    <!-- <input type="text" id="SNILS" name="usersnils" placeholder="СНИЛС..."> -->
	    <select name="usercourse" id = "course" >
		  <option value="">Выберите курсы</option>
		  <option value="Арабский">Арабский</option>
		  <option value="Таджикиский">Таджикиский</option>
		  <option value="Турецкий">Турецкий</option>
		</select>

		<label for="YourLevel">Ваш уровень</label>
	     <select name="userlevel" id = "level" >
		  <option value="">Выберите уровень</option>
		  <option value="Начальный">Начальный</option>
		  <option value="Средный">Средный</option>
		  <option value="Выше среднего">Выше среднего</option>
		</select>

		<label for="country">Cтрана</label>
	    <input type="text" id="country" name="usercountry" placeholder="Страна...">

	    <label for="addres">Адрес</label>
	    <input type="text" id="addres" name="useraddress" placeholder="Адрес...">

	    <label for="phone">Телефон</label>
	    <input type="text" id="phone" name="userphone" placeholder="Телефон...">

	    <label for="Email">Электронная почта</label>
	    <input type="text" id="email" name="useremail" placeholder="Электронная почта...">
	    <?php
			$date_today = date("m.d.y"); //присвоено 12.03.15
			$today[1] = date("H:i"); //присвоит 1 элементу массива 18:32:17
			echo("Дата: $date_today.  | Время: $today[1]");
		?>

	    <input type="submit"  id ="send" value="Записаться">

	  </form>
	</div>

	</div>
		<div class="contact_school">
		<h3>Контакты</h3>
		<p>Мобильная связь : <a href="">+79202662949</a></p>
		<p>Электронная почта: <a href="">abdul.18aziz4@gmail.com</a></p>
		<p>Соцыальные сети: <a href="">Вк</a> | <a href="">facebook</a></p><br>
		<a id ="main" href="/Дипломний проект/index.php">Главная страница</a>
	</div>
</body>
</html>
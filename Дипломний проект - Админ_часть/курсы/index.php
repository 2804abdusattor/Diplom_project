<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet"  href="/English_club_folder/css/font-awesome.css" type="text/css">
	<title>Курсы</title>
</head>

<body>
	<style type="text/css">
	th, td {
    padding: 10px 70px;
    margin: 20px;
    text-align: center;
    font-size: 1em;


	}
	th {
	    background-color: green;
	    color: white;
	}
	body {background-color: gray;

}
	h1{
		text-align: center;
}

</style>
	<div class="enrollist">
	<h1>Список те , которые записаны  на курсы!</h1>
	<?php
	try {
	    $conn = new PDO("mysql:host=localhost;dbname=enrole_course", "root", "");
	    $sql = "SELECT * FROM `user`";
	    $result = $conn->query($sql);
	    echo "<table><tr><th>№</th><th>ФИО</th><th>Дата рождения</th><th>Курсы</th><th>Уровень знание</th><th>Страна</th><th>Адрес</th><th>Телефон</th><th>Электронная почта</th><th>Д/В записы</th></tr>";
	    while($row = $result->fetch()){
	        echo "<tr>";
	            echo "<td>" . $row["id"] . "</td>";
	            echo "<td>" . $row["fio"] . "</td>";
	            echo "<td>" . $row["birthdate"] . "</td>";
	            echo "<td>" . $row["course"] . "</td>";
	            echo "<td>" . $row["level"] . "</td>";
	            echo "<td>" . $row["country"] . "</td>";
	            echo "<td>" . $row["address"] . "</td>";
	            echo "<td>" . $row["phone"] . "</td>";
	            echo "<td>" . $row["email"] . "</td>";
	            echo "<td>" . $row["dt"] . "</td>";
	        echo "</tr>";
	    }
	    echo "</table>";
	}
	catch (PDOException $e) {
	    echo "Database error: " . $e->getMessage();
	}
	?>
	<a id ="main" href="/Дипломний проект - Админ_часть/index.php">Главная страница</a>
</div>
</body>
</html>

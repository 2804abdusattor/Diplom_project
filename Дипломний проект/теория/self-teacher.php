<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet"  href="/Дипломний проект/css/style.css" type="text/css">
<link rel="stylesheet"  href="/English_club_folder/css/font-awesome.css" type="text/css">
<head>
	<?php
		$title = "Self-teacher";
		require_once "blocks/head.php"
	?>
</head>
<style type="text/css">

	h1{
		text-align: center;
	}
	.Books_List #main{
		color: black;
		padding: 5px;
		margin: 10px;
		color: darkred;
		border-radius: 5px;
		text-decoration: none;
	}
	.Books_List #main:hover {
		color: green;
	}
	#main,a{
	color: black;
	padding: 5px;
	color: darkred;
	border-radius: 5px;
	text-decoration: none;
	}
	#main:hover,a:hover {
		color: green;
	}
</style>
<body>
	<div class="Books_List">
		<h1>Книги для самоизучение</h1>
		<?php
		try {
		    $conn = new PDO("mysql:host=localhost;dbname=english_school", "root", "");
		    $sql = "SELECT * FROM `book`";
		    $result = $conn->query($sql);
		    echo "<table><tr><th>№</th><th>ИМЯ</th><th>АВТОР</th><th>СТРАНА</th><th>ЭЛЕКТРОННАЯ</th></tr>";
		    while($row = $result->fetch()){
		        echo "<tr>";
		            echo "<td>" . $row["id"] . "</td>";
		            echo "<td>" . $row["name"] . "</td>";
		            echo "<td>" . $row["author"] . "</td>";
		            echo "<td>" . $row["country"] . "</td>";
		            echo "<td><a href='" . $row["download"] . "'>Читать</a></td>";
		        echo "</tr>";
		    }
		    echo "</table>";
		}
		catch (PDOException $e) {
		    echo "Database error: " . $e->getMessage();
		}
		?>
		<br><a id ="main" href="/Дипломний проект/index.php">Главная страница</a>
	</div>



</body>
</html>
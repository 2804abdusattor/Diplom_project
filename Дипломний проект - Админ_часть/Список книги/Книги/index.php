<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style type="text/css">
	th, td {

    padding: 10px 30px;
    text-align: center;
    border-bottom: 1px solid #ddd;
    font-size: 1.1em;
	}
	th {
	    background-color: green;
	    color: white;
	}
	.table_update #change_btn {
		text-decoration: none;
		background-color: green;
		padding: 10px;
		border-radius: 5px;
		color: white;
	}
	.table_update #change_btn:hover {
		background-color: lightgreen;
	}

</style>
<body style="background-color:gray;">
	<div >
		<?php
			try {
			    $conn = new PDO("mysql:host=localhost;dbname=english_school", "root", "");
			    $sql = "SELECT * FROM book";
			    $result = $conn->query($sql);
			    echo "<table class='table_update'><tr><th>Имя</th><th>Автор</th><th>Страна</th><th>Ссылька</th></tr>";
			    foreach($result as $row){
			        echo "<tr>";
			            echo "<td>" . $row["name"] . "</td>";
			            echo "<td>" . $row["author"] . "</td>";
			            echo "<td>" . $row["country"] . "</td>";
			            echo "<td>" . $row["download"] . "</td>";
			            echo "<td><a id='change_btn' href='update.php?id=" . $row["id"] . "'>Изменить</a></td>";
			        echo "</tr>";
			    }
			    echo "</table>";
			}
			catch (PDOException $e) {
			    echo "Database error: " . $e->getMessage();
			}
		?>
	</div>
</body>
</html>
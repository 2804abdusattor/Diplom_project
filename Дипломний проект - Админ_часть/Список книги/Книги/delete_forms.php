<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Document</title>
</head>
<style type="text/css">
	th, td {
    padding: 10px 70px;
    text-align: center;
    border-bottom: 1px solid #ddd;
    font-size: 1.1em;


	}
	th {
	    background-color: green;
	    color: white;
	}
	.deleteBook{
		margin-left: 20%;

		width: 63%;
	}
	.deleteBook #remove {
		border-radius: 5px;
		background-color: firebrick;
		color: white;
	}
	.deleteBook #remove:hover {
		background-color: red;
	}
</style>
<body style="background-color: gray;">
	<div class="deleteBook">
		<?php
			try {
			    $conn = new PDO("mysql:host=localhost;dbname=english_school", "root", "");
			    $sql = "SELECT * FROM `book`";
			    $result = $conn->query($sql);
			    echo "<table><tr><th>Имя</th><th>Автор</th><th></th></tr>";
			    foreach($result as $row){
			        echo "<tr>";
			            echo "<td>" . $row["name"] . "</td>";
			            echo "<td>" . $row["author"] . "</td>";
			            echo "<td><form action='delete.php' method='post'>
			                        <input type='hidden' name='id' value='" . $row["id"] . "' />
			                        <input id='remove' type='submit' value='Удалить'>
			                    </form></td>";
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

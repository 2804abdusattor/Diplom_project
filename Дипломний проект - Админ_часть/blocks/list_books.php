<style type="text/css">
@media screen and (max-width: 700px) {
    .Books_List {
        flex-direction: column;
    }
}

.Books_List a{
    text-decoration: none;
    background-color: green;
    color: white;
    border-radius: 5px;
    padding: 5px;

}
.Books_List a:hover{
    padding: 5px;
    background-color: skyblue;
    color: black;

}
</style>
<div class="Books_List">
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
	            echo "<td><a href='" . $row["download"] . "'>Посмотреть</a></td>";
	        echo "</tr>";
	    }
	    echo "</table>";
	}
	catch (PDOException $e) {
	    echo "Database error: " . $e->getMessage();
	}
	?>
</div>



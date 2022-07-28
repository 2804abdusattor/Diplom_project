<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=testdb1", "root", "");
    $sql = "SELECT id, name FROM Users";
    $result = $conn->query($sql);
    echo "<table><tr><th>Имя</th><th></th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td><a href='user.php?id=" . $row["id"] . "' >Посмотреть</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
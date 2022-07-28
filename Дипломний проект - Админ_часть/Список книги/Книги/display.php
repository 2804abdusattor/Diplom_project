<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=english_school", "root", "");
    $sql = "SELECT * FROM `book`";
    $result = $conn->query($sql);
    echo "<table><tr><th>№</th><th>Name</th><th>Author</th><th>Country</th><th>Download</th></tr>";
    while($row = $result->fetch()){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["author"] . "</td>";
            echo "<td>" . $row["country"] . "</td>";
            echo "<td>" . $row["download"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
<?php
if(isset($_POST["id"]))
{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=english_school", "root", "");
        $sql = "DELETE FROM `book` WHERE `id` = :idBook";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":idBook", $_POST["id"]);
        $stmt->execute();
        header("Location: /Дипломний проект - Админ_часть/index.php");
    }
    catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}

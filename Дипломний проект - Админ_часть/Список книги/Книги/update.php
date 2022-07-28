<?php
$conn = new mysqli("localhost", "root", "", "english_school");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Update</title>
<meta charset="utf-8" />
</head>
<style type="text/css">
.save_update {
    width: 40%;
    margin-left: 30%;

}
.save_update h1 {
    text-align: center;
    padding: 5px;
}
.save_update #btn_save {
    background-color: green;
}
.save_update #btn_save:hover {
    background-color: lightgreen;
}
</style>
<body style="background-color:gray">
<?php
// если запрос GET
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    $idBook = $conn->real_escape_string($_GET["id"]);
    $sql = "SELECT * FROM book WHERE id = '$idBook'";
    if($result = $conn->query($sql)){
        if($result->num_rows > 0){
            foreach($result as $row){
                $nameBook = $row["name"];
                $authorBook = $row["author"];
                $countryBook = $row["country"];
                $downloadBook = $row["download"];
            }
            echo "<div class='save_update'>
                <h1>РЕДАКТИРОВАНИЕ КНИГ</h1>
                <form  method='post'>
                    <input  type='hidden' name='id' value='$idBook'  class='form-control' />
                    <p>Имя:
                    <input type='text' name='name' value='$nameBook' class='form-control' /></p>
                    <p>Автор:
                    <input type='text' name='author' value='$authorBook' class='form-control'/></p>
                    <p>Страна:
                    <input type='text' name='country' value='$countryBook' class='form-control'/></p>
                    <p>Ссылька:
                    <input type='text' name='download' value='$downloadBook' class='form-control'/></p>
                    <input id='btn_save' type='submit' value='Сохранить' class='form-control'>
            </form></div>";
        }
        else{
            echo "<div>Пользователь не найден</div>";
        }
        $result->free();
    } else{
        echo "Ошибка: " . $conn->error;
    }
}
elseif (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["author"]) && isset($_POST["country"]) && isset($_POST["download"])) {

    $idBook = $conn->real_escape_string($_POST["id"]);
    $nameBook = $conn->real_escape_string($_POST["name"]);
    $authorBook = $conn->real_escape_string($_POST["author"]);
    $countryBook = $conn->real_escape_string($_POST["country"]);
    $downloadBook = $conn->real_escape_string($_POST["download"]);
    $sql = "UPDATE book SET name = '$nameBook', author = '$authorBook', country = '$countryBook', download = '$downloadBook' WHERE id = '$idBook'";
    if($result = $conn->query($sql)){
        header("Location: /Дипломний проект - Админ_часть/index.php");
    } else{
        echo "Ошибка: " . $conn->error;
    }
}
else{
    echo "Некорректные данные";
}
$conn->close();
?>

</body>
</html>
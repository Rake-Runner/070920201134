<?php
$theName = $_POST['name']; 
$city = $_POST['city']; 
$area = $_POST['area']; 
$street = $_POST['street']; 
$house = $_POST['house']; 
$info = $_POST['info'];
// Коннектимся к БД
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_adresses";
$conn = new mysqli($servername, $username, $password, $dbname);

if(!empty($_POST['name']) && !empty($_POST['city']) && !empty($_POST['area'])){
    //Заполняем таблицу
    $sql = "INSERT INTO MyAdresses (theNAME, CITY, AREA, STREET, HOUSE, INFO)
    VALUES ('$theName', '$city', '$area', '$street', '$house','$info')";

    if ($conn->query($sql) === TRUE) {
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header('Location: /lar/user_office_address.php', true, 301);
  }else{
    echo 'Пожалуйста, заполни поля со звездочкой.
    <a href="user_office_address.php">Back</a>
    ';
  }
    $conn->close();
?>

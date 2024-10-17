<?php
$order_id = htmlspecialchars($_POST['order_id']);
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    echo "Заявка на отмену принята, " . $name ."!";
 }
<?php
require_once "core/function.php";
require_once "core/connection.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $id = $_POST["id"];
  // dd($_POST);
  $name = $_POST['name'];
  $price = $_POST['price'];

  $sql = "UPDATE `san_kyi_tar` SET name='$name',price='$price' WHERE `id`=$id";
  if (mysqli_query($conn, $sql)) {
    header("Location:list-index.php");
  }
}

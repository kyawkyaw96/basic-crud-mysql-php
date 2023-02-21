<?php
require_once "core/function.php";
require_once "core/connection.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST["id"];
    $sql = "DELETE FROM `san_kyi_tar` WHERE `id`=$id";
  if( mysqli_query($conn, $sql)){
    header("Location:list-index.php");
  }
}

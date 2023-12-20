<?php
require "include/connect.php";
$data = $_POST;


if (empty($errors)){
$blog = R::dispense('basket'); // название таблицы
$blog->title = $data['title'];
$blog->img = $data['price'];
$blog->price = $data['content-profile'];
R::store($blog);
$_SESSION["login_success"] = "Вы успешно зарегистрировались!";
}else
{
$_SESSION["login_error"] = array_shift($errors);
}

header("Location: ../header-body.php");

$_SESSION["data"] = $data;

?>

<?php
require "include/connect.php";
$data = $_POST;


if (empty($errors)){
$blog = R::dispense('blog'); // название таблицы
$blog->subtitle = $data['title-profile'];
$blog->name = $data['name-profile'];
$blog->content = $data['content-profile'];
R::store($blog);
$_SESSION["login_success"] = "Вы успешно зарегистрировались!";
}else
{
$_SESSION["login_error"] = array_shift($errors);
}

header("Location: ../blog.php");

$_SESSION["data"] = $data;

?>

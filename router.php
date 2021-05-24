<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
$url=explode("/", $_SERVER['REQUEST_URI']);

require_once("php/db.php");//подключение БД
require_once("php/classes/User.php");

if($url[1] == auth){
   $content = file_get_contents("pages/login.php");
}else if($url[1] == reg) {
   $content = file_get_contents("pages/register.html");
}else if($url[1] == users) {
   require_once("pages/users/index.html");
}else if($url[1]=="addUser"){ //можно с кавычками и без
   echo User::addUser($_POST['name'],$_POST['lastname'],$_POST['email'],$_POST['pass']); //:: два двоеточия - синтаксиси обращения к классу
}else if($url[1]==authUser){
   echo User::authUser($_POST['email'],$_POST['pass']);
} else if ($url[1] == getUser) {
   echo User::getUser($_SESSION['id']);
} else if ($url[1] == getUsers) {
   echo User::getUsers();
} else{
   $content = file_get_contents("pages/index.php");
}
if(!empty($content)) require_once("template.php");


// if($url[1]==blog){
//    require_once("blog.php");
// } else if ($url[1]==auth){
//    require_once("login.php");
// }



//echo $url;
//for($i=0;$i<count($url);$i++){
//   echo $url[$i]."<hr>";
//}
?>
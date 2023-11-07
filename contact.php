<!DOCTYPE html>
<head>
    <title>Varin Adusumalli</title>
    <link rel="stylesheet" type="text/css" href="About.css">
</head>

<?php
if($_SERVER[REQUEST_METHOD]=="POST"){
    $name = htmlspecialchars($_POST("fullname"))
    $email = htmlspecialchars($_POST("email"))
    $message = htmlspecialchars($_POST("message"))
    var_dump($name)
    echo("<br>");
    var_dump($email)
    echo("<br>");
    var_dump($message)

}
else{
    header("contact.html")
}
?>
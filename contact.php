<!DOCTYPE html>
<head>
    <title>Varin Adusumalli</title>
    <link rel="stylesheet" type="text/css" href="About.css">
</head>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ini="";
    ini_get($ini);
    echo $ini;
    $ini =intval($ini);
    echo $ini;
    echo"<br>";
    echo"<there shouold be ini>";
    $name = htmlspecialchars($_POST["fullname"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    var_dump($name);
    echo("<br>");
    var_dump($email);
    echo("<br>");
    var_dump($message);
    $subject="CSP Website feedback from $name";
    $headers = "From: $email";
    $to="varinisthebest@gmail.com";
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed. Please try again later.";
    }
}
else{
    header("contact.html");
}
?>
<?php


include "connectlocal.php";
$conn->query("use teamtechsupport;");
echo $_POST["pass"];
$password="gorilla";
if($password===$_POST["pass"]){
    echo "yes";
    header("Location: UpdatedEditor.php");
    
}
else{
    header("Location: password.php");    
}

die();








?>

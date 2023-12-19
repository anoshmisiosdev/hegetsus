<?php

#print_r($_SESSION);
#echo $_SESSION["EDITORACCESS"];
if ($_SERVER["REQUEST_METHOD"]=="GET") {
    $apassword = htmlspecialchars($_POST["bio"]);
    
    #echo"THIS IS WHAT YOU SUBMIT";
    #echo"<br></br>";
    
    #Connection Values
    $servername = "localhost";
    $username = "root";
    $password = '123456';
    $selectedname = '';
    global $editor;
    

    
    #$password = ""; # Mr Millard's password is an empty string.
    
    $conn = new mysqli($servername, $username, $password);

    // Test connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $conn->query("use teamtechsupport;");
    $newquery="SELECT password FROM teamtable";
    $newresult= $conn->query($newquery);
    if($newresult->num_rows>0){
        while($row = $newresult->fetch_assoc()){
            $realpassword = $row["password"].'</h2>';
                
        }
    }
    $realpassword=strval($realpassword);
    $apassword=strval($apassword);
    echo $realpassword;
    $apassword=trim($apassword);
    $realpassword=trim($realpassword);
    $realpassword=rtrim($realpassword);
    $realpassword = str_replace(' ', '', $realpassword);
    $realpassword = preg_replace('/\s+/', '', $realpassword);
    $a="1";
    $b=1;
    #echo"<br>";
    #var_dump($apassword);
    #echo"<br>";
    #var_dump($realpassword);
    #echo"<br>";
    
    
    
    $monkepassword="monkepassword";
    if ($monkepassword ==$apassword) {
        #echo "SUPERYAY";
        session_start();
        $editor="yes";
        echo $editor;
        
        session_start();
        $_SESSION["editor"]="yes";
        #echo "THE PASSWORD WORKS";

        
    }
    else {
        #$_SESSION["editor"]="no";
    }
    
    
}
else {
    
    $_SESSION["editor"]="no";
    
    #echo "The password does not work";
    $_SESSION["editor"]="no";
    #echo "<br><a href='index.html'>You shouldn't be here</a>";
    #header("Location: password.php");
    #echo $_SERVER["REQUEST_METHOD"];
}

?>

<!DOCTYPE html>
<head>
    <title>EDITING</title>
    <link rel="stylesheet" type="text/css" href="About.css">
</head>
<style>
    .aboutlinks{
    color: greenyellow;
    
    background: black;
    }
    input{
        color: black;
    }
    form{
        color: white;
    }
    .radio{
        color:white
    }
    .hola{
        
        font-size: 30px;
    }
    .dropdown-content{
        background-color: black;
    }
</style>

<body style="background-image: url(matrix.gif);;">
    <header>
        
        <ul >
            <li><a href="index.html">Home</a></li>
            <li><a href="projects.html">Projects</a></li>
            
            <li><a href="Contact.html">Contacts</a></li>
            <li>
                <div class="dropdown">
                    <span>Other Members &#9660;</span>
                    <div class="dropdown-content">
                      <a class="aboutlinks" href="aboutriyan.php">Riyan A.</a>
                      <a class="aboutlinks" href="aboutrehan.php">Rehan M.</a>
                      <a class="aboutlinks" href="aboutamaan.php">Amaan M.</a>
                      <a class="aboutlinks" href="aboutjason.php">Jason L.</a>
                      <a class="aboutlinks" href="aboutrishaan.php">Rishaan J.</a>
                    </div>
                  </div>
            </li>
        </ul>
    </header>   
    <p><br></br></p>
    

    <form action="EDITORPROCESSING.PHP"method="post">
        <label>CHOOSE PERSON</label>
        <select id="person" name="person">
            <option value="None">None</option>
            <option value="Riyan Anosh">Riyan Anosh</option>
            <option value="Varin Adusumalli">Varin Adusumalli</option>
            <option value="Rishaan Joshi">Rishaan Joshi</option>
            <option value="Amaan Mohammad">Amaan Mohammad</option>
            <option value="Rehan Mohammad">Rehan Mohammad</option>
            <option value="Jason Lai">Jason Lai</option>
        </select>
        <br>
        <label>INPUT NEW BIO</label>
        <input type="text" name="bio" placeholder="Input new bio...">
        <br>
        <button type="submit"name="submit">submit</button>

    </form>
        
        

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" contact="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us-CSP Website</title>

       </head>
    
</body>
</html>

    
    

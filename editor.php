<!DOCTYPE html>
<head>
    <title>Rishaan Jyoshi</title>
    <link rel="stylesheet" type="text/css" href="About.css">
</head>
<style>
    .aboutlinks{
    color: cyan;
    font-size: 22px;

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
</style>
<body style="background:black;">
    <header>
        
        <ul >
            <li><a href="index.html">Home</a></li>
            <li><a href="projects.html">Projects</a></li>
            
            <li><a href="Contact.html">Contacts</a></li>
            <li>
                <div class="dropdown">
                    <span>Members ▼</span>
                    <div class="dropdown-content">
                      <a class="aboutlinks" href="aboutriyan.php">Riyan A.</a> 
                      <a class="aboutlinks" href="aboutrehan.php">Rehan M.</a>
                      <a class="aboutlinks" href="aboutamaan.php">Amaan M.</a>
                      <a class="aboutlinks" href="aboutvarin.php">Varin A.</a>
                      <a class="aboutlinks" href="aboutjason.php">Jason L.</a>
                      <a class="aboutlinks" href="aboutrishaan.php">Rishaan J.</a>
                    </div>
                  </div>
            </li>
        </ul>
    </header>   
    <p><br></br></p>
    <form action="" method="post">
        <label>CHOOSE PERSON</label><br>
        <input class="radio" type="radio" name="name" value="Riyan Anosh" id="riyan">RIYAN<br>
        <input class="radio" type="radio" name="name" value="Varin Adusumalli" id="varin">VARIN<br>
        <input class="radio" type="radio" name="name" value="Rishaan Joshi" id="rishaan">RISHAAN<br>
        <input class="radio" type="radio" name="name" value="Amaan Mohammad" id="amaan">AMAAN<br>
        <input class="radio" type="radio" name="name" value="Rehan Mohammad" id="rehan">REHAN<br>
        <input class="radio" type="radio" name="name" value="Jason Lai" id="jason">JASON<br>
        NEW BIO: <input type="text" name="bio" formmethod="post"><br>
        <input type="submit" name="button" formmethod="oist">
    </form>



    <?php
            #Connection Values
            $servername = "localhost";
            $username = "root";
            $password = '123456';
            $selectedname = '';
            $newBIO = '';
            #$password = ""; # Mr Millard's password is an empty string.
            if(isset($_POST['button'])){ //check if form was submitted
                $selectedname = $_POST['name']; //get input text
                $plat = $_POST['bio']; //get input text
                $plat = "Your gender is ".$selectedname." and your salary is ".$plat;
                echo['<h2>'.$plat.'</h2>'];
            }    
            // Create connection to MySQL
            $conn = new mysqli($servername, $username, $password);

            // Test connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            # Draw data from database using the query() method
            $conn->query("use teamtechsupport;"); #First select the active database
            
            $newquery = 'select mNAMES,mBIO from members where mID = 1';
            
            $newresult = $conn->query($newquery);
            if($newresult->num_rows>0){
                while($row = $newresult->fetch_assoc()){
                        
                }
            }
            
            
        
            $conn->close();
        ?>
        
        

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" contact="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us-CSP Website</title>

       </head>
    
</body>
</html>

    
    

<!DOCTYPE html>
<head>
    <title>Riyan Anosh</title>
    <link rel="stylesheet" type="text/css" href="About.css">
</head>
<style>
    .aboutlinks{
    color: green;
    }
</style>
<body style="background-image: url(RiyanAboutMe.gif);">
    <header>
        
        <ul >
            <li><a href="index.html">Home</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="password.php">Login/Sign In</a></li>
            <li><a href="Contact.html">Contacts</a></li>
            <li>
                <div class="dropdown">
                    <span>Other Members ▼</span>
                    <div class="dropdown-content">
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

    <?php
            #Connection Values
            $servername = "localhost";
            $username = "root";
            $password = '123456';
            #$password = ""; # Mr Millard's password is an empty string.

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
                    echo '<h2 class ="aboutmeNAME">'.$row["mNAMES"].'</h2>';
                    echo '<div class="aboutmeIMAGE">
                            <img src="RIYAN2.jpg"  height="400" class="aboutmeIMAGEIMAGE">
                        </div>';
                    echo '<p class ="aboutmeBIO" style="border-color:green;">'.$row["mBIO"].'</p>';    
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    
                    
                    echo '<p class ="aboutmeBIO"style="border-color:green;">
                    As the Webmaster, Riyan managed our team GitHub and also helped weed and
                    manage old, outdated files. He also helped Rehan with some of the backend
                    on the PvP game. He also was responsible for programming the OLED display in 
                    the AR glasses project, as well as acquiring and managing the elctronics needed.
                    </p>';

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

    
    

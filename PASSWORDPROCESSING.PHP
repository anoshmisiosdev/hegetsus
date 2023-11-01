<?php
            
            
            #Connection Values
            $servername = "localhost";
            $username = "root";
            $password = '123456';
            $selectedname = '';
         
            #$password = ""; # Mr Millard's password is an empty string.
            
            $conn = new mysqli($servername, $username, $password);

            // Test connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            

            if ($_SERVER["REQUEST_METHOD"]=="POST") {
                $password = htmlspecialchars($_POST["bio"]);
                echo $password;
                echo"THIS IS WHAT YOU SUBMIT";
                echo"<br></br>";
                
                
                
                $conn->query("use teamtechsupport;");
                $newquery="SELECT password FROM teamtable";
                $newresult= $conn->query($newquery);
                if($newresult->num_rows>0){
                    while($row = $newresult->fetch_assoc()){
                        $realpassword = $row["password"].'</h2>';
                            
                    }
                }
                $realpassword=strval($realpassword);
                $password=strval($password);
                echo $realpassword;
                if ($realpassword==$password) {
                    echo 'yay';
                }   
                else {
                    echo 'nay';
                    echo'<br>';
                    echo $realpassword;
                    echo '<br>';
                    echo $password;
                }
                #header("Location: passwordprocessing.php");
            }
            else {
                #header("Location: index.html");
                echo "hello";
            }

            # Draw data from database using the query() method
            
?>
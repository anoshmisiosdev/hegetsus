<?php
            session_start();
            
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
                $password=trim($password);
                $realpassword=trim($realpassword);
                $realpassword=rtrim($realpassword);
                $realpassword = str_replace(' ', '', $realpassword);
                $realpassword = preg_replace('/\s+/', '', $realpassword);
                $a="1";
                $b=1;
                echo"<br>";
                var_dump($password);
                echo"<br>";
                var_dump($realpassword);
                echo"<br>";
                
                
                
                $monkepassword="monkepassword";
                if ($monkepassword ==$password) {
                    echo "SUPERYAY";
                    session_start();
                    $editor="yes";
                    echo $editor;
                    
                    session_start();
                    $_SESSION["editor"]="yes";


                    
                }
                else {
                    $_SESSION["editor"]="no";
                }
                if($editor=="yes"){
                    header("Location: editor.php");

                    
                }
                else {
                    header("Location: password.php");
                }
                
            }
            else {
                #header("Location: index.html");
                $_SESSION["editor"]="no";
                
                echo "hello";
                $_SESSION["editor"]="no";
                echo "<br><a href='index.html'>You shouldn't be here</a>";
                #header("Location: password.php");
                
            }

            # Draw data from database using the query() method
            
?>
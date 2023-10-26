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
                $name = htmlspecialchars($_POST["person"]);
                $newbio = htmlspecialchars($_POST["bio"]);
                
                echo"THIS IS WHAT YOU SUBMIT";
                echo"<br></br>";
                echo $name;
                echo gettype($name);
                
                echo"<br></br>";
                echo $newbio;
                $string='"'.$name.'"';
                echo "SELECT mBIO FROM members WHERE mNAMES=".$string;
                $newquery="SELECT mID FROM members WHERE mNAMES=".$string;
                $string="SELECT mBIO FROM members WHERE mNAMES=".$string;
                
                $conn->query("use teamtechsupport;");
                
                $newresult=$conn->query($string);
                if($newresult->num_rows>0){
                    while($row = $newresult->fetch_assoc()){
                        echo '<h2>'.$row["mBIO"].'</h2>';
                            
                    }
                }
                $newresult=$conn->query($newquery);
                if($newresult->num_rows>0){
                    while($row = $newresult->fetch_assoc()){
                        $mID = $row["mID"];
                        echo $mID;  
                    }
                }
                $newquery="UPDATE members
                                SET
                                    mBIO=".$newbio."
                                WHERE 
                                    mID=".$mID."";
                echo $newquery;
                $conn->query($newquery);
                
                header("Location: editor.php");
            }
            else {
                # header("Location: index.html");
            }

            # Draw data from database using the query() method
            $conn->query("use teamtechsupport;"); #First select the active database
            
            $newquery = 'select mNAMES,mBIO from members where mID = 1';
            
            $newresult = $conn->query($newquery);
            
            

        
            $conn->close();
?>
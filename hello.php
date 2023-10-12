<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="filesforwebsite.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Tech Support</title>
    <style>
        @font-face {
            font-family: HALO3;
            src: url(Halo3.ttf);
        }

        @font-face {
            font-family: NEVERSAYDIE;
            src: url(NEVERSAYDIE.ttf);
        }

        @font-face {
            font-family: PDARK;
            src: url(pdark.ttf);
        }

        @font-face {
            font-family: PRICEDOWN;
            src: url(pricedown.otf);
        }

        @font-face {
            font-family: RECHARGE;
            src: url(recharge.otf);
        }

        @font-face {
            font-family: SAVEDZERO;
            src: url(savedbyzero.otf);
        }

        @font-face {
            font-family: ZEROHOUR;
            src: url(zerohour.otf);
        }

        h1 {
            text-align: center;
            align-content: center;
            font-family: NEVERSAYDIE;
            font-size: 8vw;
            max-height: 6vh;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgb(54, 54, 54);
        }

        li {
            float: left
        }

        li a {
            display: block;
            font-family: ZEROHOUR;
            font-size: 1vw;
            color: white;
            text-align: center;
            background-color: green;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 16;
            border-color: black;
            border-style: inset;

        }

        li a:hover {
            background-color: rgb(80, 175, 80);
        }

        .logocontainer {
            align-content: center;
            text-align: center;
        }
        h2{
            width: 900;
            font-family: PDARK;
            font-size: 70;
            text-align: center;
        }
        .division{
            align-self: center;
            align-content: center;
            text-align: center;
            max-width: 870;
        }
        img{
            border-radius: 12%;
            border-width: 8px;
            border-style: inset;
            border-color: orange;
        }
        .gridforbios{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: auto;
            column-gap: 16px;
            row-gap: 16px;
            justify-items: center;
            justify-content: center;
            padding-top: 16px;
            
        }
        .h2{
            font-family: PDARK;
            font-size: 150%;
            text-align: center;
            border-radius: 16;
            border-color: aqua;
            border-width: 4;
            border-style: outset;
            padding: 2px;
        }
        p{
            border-style: inset;
            border-top-color: green;
            border-left-color: green;
            border-right-color: lightgreen;
            border-bottom-color: lightgreen;
            background: linear-gradient(black, rgb(53, 53, 53));
            color:cyan;
            
            border-width: 8px;
            border-radius: 5%;
            max-width: 85%;
            font-family: RECHARGE;
            padding: 8px;
        }
    </style>
</head>

<body>
    <header>
        <div class="stark">
            <h1>PHP TEAM RENDERING</h1>
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="members.html">Our team</a></li>
            <li><a href="projects.html">Our Projects</a></li>
            <li><a href="phptesting.html">phptesting</a>
        </ul>

    </header>
    
    <div>
        
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
            
            $newquery = 'select mNAMES,mBIO from members where mID < 7';
            
            $newresult = $conn->query($newquery);
            if($newresult->num_rows>0){
                while($row = $newresult->fetch_assoc()){
                    echo '<h2>'.$row["mNAMES"].'</h2>';
                    echo '<p>'.$row["mBIO"].'</p>';
                }
            }
            
            
        
            $conn->close();
        ?>
    </div>
</body>
</html>
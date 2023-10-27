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
</style>
<?php 
    if($_SERVER[REQUEST_METHOD]=="POST"){
        
    }
    else{
        header("index.html");
    }

?>
<body style="background-image: url(matrix.gif);;">
    <header>
        
        <ul >
            <li><a href="index.html">Home</a></li>
            <li><a href="projects.html">Projects</a></li>
            
            <li><a href="Contact.html">Contacts</a></li>
            <li>
                <div class="dropdown" style="background-color= black;">
                    <span class="hola">Members ▼</span>
                    <div class="dropdown-content" >
                      <a class="aboutlinks" href="aboutriyan.php" >Riyan A.</a><br></br>
                      <a class="aboutlinks" href="aboutrehan.php">Rehan M.</a><br></br>
                      <a class="aboutlinks" href="aboutamaan.php">Amaan M.</a><br></br>
                      <a class="aboutlinks" href="aboutvarin.php">Varin A.</a><br></br>
                      <a class="aboutlinks" href="aboutjason.php">Jason L.</a><break></break>
                      <a class="aboutlinks" href="aboutrishaan.php">Rishaan J.</a><break></break>
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
        <br></br>
        <label>INPUT NEW BIO</label>
        <input type="text" name="bio" placeholder="Input new bio...">
        <br></br>
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

    
    

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

    
    

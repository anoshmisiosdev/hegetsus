<?php 
session_start();
?>
<!DOCTYPE html>
<head>
    <title>CONFIDENTIAL</title>
    <link rel="stylesheet" type="text/css" href="About.css">
</head>
<style>
    .aboutlinks{
    color: slateblue;
    
    }
</style>
<?php 

?>
<body style="background-color:slategray;">
    <header>
        
        <ul >
            <li><a href="index.html">Home</a></li>
            <li><a href="projects.html">Projects</a></li>
            
            <li><a href="Contact.html">Contacts</a></li>
            <li>
                <div class="dropdown">
                    <span>Other Members ▼</span>
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
    <h2>FOR TEAM MEMBERS ONLY</h2>
    <form action="passwordnew.PHP"method="post">
        PASSWORD: <input name="pass" placeholder="Enter the password" type="password" id="bio"></input> <br>
        <button type="submit">SUBMIT</button>
    </form>
 
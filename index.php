<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset = "utf-8" />
        <title> Brian Sheridan: Personal Website </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
          <h1> Brian Sheridan </h1>
        </header>
        <hr />
        <nav>
          <a id="current_page" href="index.php ">Home</a>
          <a href="about.html ">About</a>
          <a href="contact.html ">Contact</a>
        </nav>
        
        <br /><br/>
      
        <main>
          <figure>
            <img src="img/brian_sheridan.png" alt="Picture of Brian Sheridan"/>
          </figure>
          
          <div>
            Hello! <br />
            <p>Thank You for visiting my professional portfolio website.</p>
            <p>I am a Software Engineer and have been recently hired at the Acme Corporation.</p>
            <p>Feel free to contact me!</p>
            
            <br /><br />
            
            <em>"With ordinary talent and extraordinary <strong> perseverance</strong>, all things are attainable"</em><br />
            
          </div>
        </main>
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
          
            <figure>
                <img src="img/CSUMB_Logo.png" alt="CSUMB Logo"/>
            </figure>  
            <div id = "copyright">
                CST336 Internet Programming. 2019&copy; Sheridan <br />
                <strong> Disclaimer:</strong> The information in this webpage is fictitious. <br />
                it is used for academic purposes only.  
            </div>
            
          
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>
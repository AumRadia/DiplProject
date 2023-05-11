<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        
        
      body{
        background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)), ;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
      }

    



        .container{
            background-color: rgb(231, 230, 241);
            border: 2px solid rgb(64, 6, 119);

            padding: 34px;
            margin:auto;
            border-radius: 15px;

        }

        #head
        {
            margin-bottom: 30px;
            font-size: 45px;
        } 
        #first
        {
            font-size: 32px;
                
        }      
        .btn
        {
            margin-top: 40px;
            border: 1px solid rgb(64, 6, 119);
            border-radius: 8px;
            cursor: pointer;
            font-family: cursive;
            font-weight: bold;
            font-size: 24px;
        } 
        .btn:hover{
            background-color: whitesmoke;
        }
        .btn:active{
            background-color: aqua;
        }





    </style>
</head>
<body>
    <?php
        include 'u_navbar.php';
    ?>

    <div class="container">
        <center>
           <h3 id="head">Thank You for Visiting</h3> 
        </center>
        
        
        <p id="first">Hello there, Hope you like our website and it helps you. This website is created by some students from porbandar as a part of their college work. We are not professionals and we have created this whole website purely based on our knowledge so bear with us with any problems. Suggestions are always entertained by us so contact us if you would like give some suggestions or report a probelm. Just click the button below to know our contact details. Have a great day ahead.</p>
    
        <center>
          <form method="get" action="contact.php">
            <button input type="submit" class="btn">CONTACT US</button>
          </form>      
        </center>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>s
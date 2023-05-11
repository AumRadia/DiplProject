        <!-- PHP Starts -->
        <?php

        include 'dbconnect.php';
        include 'u_navbar.php';


        if(isset($_POST['start']))
        {
            header("location:result.php");
                    }
        ?>
        <!-- PHO ends -->


<!DOCTYPE html>
<html lang="en">
<head>
  <title>GeT-PC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
      body{
        background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)), url(final3.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
      }

    .nav-opt:hover
    {
    color: orange;
    }   

</style>


</head>
<body>`



    <!-- index page -->
<div class="container">
    <div class="row">
        <div class="col-lg">
            <center>
            <h1 class="text-dark">Get your PC</h1>
            <h1 class="text-dark">fullfilling your needs!</h1>
            </center>
        </div>
    </div>
</div>
        <form action="result.php" method="POST">
         <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                                <label class="sbudget"><h3 style="color: black;">Select Budget : </h3></label>
                                <select name="budget" id="budget" style="padding: 5px; font-size: large;">
                                    <option>30000</option>
                                    <option>40000</option>
                                    <option>50000</option>
                                    <option>60000</option>
                                    <option>70000</option>
                                    <option>80000</option>
                                    <option>90000</option>
                                    <option>100000</option>`
                                </select>
                        </div>
                        <div class="col-lg-4">
                                <label class="susage"><h3 style="color: #000000">Select Usage : </h3></label>
                                <select name="usage" id="usage" style="padding: 5px; font-size: large;">
                                    <option value="Office Work">Office Work</option>
                                    <option value="gaming">Gaming</option>
                                    <option value="Editing">Editing</option>
                                  
                                </select>
                        </div>
                        <div class="col-lg-4">
                                <label class="sneed"><h3 style="color: #000000">Select PC/Laptop : </h3></label>
                                <select name="Slp" id="usage" style="padding: 5px; font-size: large;">
                                    <option value="PC">PC</option>
                                    <option value="laptop">LAPTOP</option>
                                </select>
                        </div>
                                
                    </div>
                </div>
                <div class="container">
                    <center>
                <button class="btn btn-dark btn-lg " style="width: 120px; border-radius: 30px;" type="submit">Start</button>
                </center>`
            </div>

            </form>
                

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


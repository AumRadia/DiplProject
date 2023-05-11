<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    
    body{
            background-color: white;

        }

        .btn {
            
            border: 3px solid rgb(64, 6, 119);
            font-family: cursive;
            font-weight: bold;
            font-size: 20px;
        } 
    
        
        #a{
              
           background-color: white;      
        }


        .b{
            border: 3px solid rgb(64, 6, 119);
            border-radius: 2px;
            font-family: cursive;
            font-weight: bold;
            height: 39px;
            width: 300px;
            font-size: 25px;
            text-decoration: none;
            font-style: black;
                cursor: pointer;

        } 
        .b:hover{
            background-color: pink;
        }
        .b:active{
            background-color: aqua;
        }


        #dd{
        margin-left: 280px;
        
        }

        #rr{
            margin-left: 560px;
        }

        #nn{
            margin-left: 810px; 
        }
</style>

    
</head>

<body>
<?php
        include 'u_navbar.php';
    ?>
    <div class="container">

        <center class="container">
           <h1 id="head">Contact information about the creators</h1>
           <h2 id="head2">We really appreciate your suggestions</h2> 
           <h3 id="head3">Mobile number of each of creator</h3> 
        </center>
        
        <center>
        <p class="btn a" >Aum Radia</p><br>
        <p class="btn a" >Darshan Thanki</p><br>
        <p class="btn a" >Raj mandaviya</p><br>
        <p class="btn a" >Nilay Joshi</p><br>
    </center>
       <center>
           <h2 id="head4">Instagram account of each of our creator</h2>
       </center>
      <div class="card">
       <form method="get" action="https://instagram.com/aumr9?igshid=19hs9qmmfjurx">
       <button input type="submit" id="aa" class="b">@aumr9</button>
        </form>
       
        <form method="get" action="https://instagram.com/darshan__thanki?igshid=72w8abv3du7m">
       <button input type="submit" id="dd" class="b">@Darshan_Thanki</button>
       </form>
       
       <form method="get" action="https://instagram.com/_rjfitness_?igshid=19adyyljpi1a8">
       <button input type="submit" id="rr" class="b">@rjfitness</button>
       </form>

       <form method="get" action="https://instagram.com/nilayjoshi.111?igshid=834qthvo906m">
       <button input type="submit" id="nn" class="b">@Nilay Joshi</button>
       </form>      
       </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
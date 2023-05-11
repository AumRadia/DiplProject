<?php

        include 'dbconnect.php';
		include 'u_navbar.php';

        $budget = $_POST['budget'];
        $usage = $_POST['usage'];
        $slp = $_POST['Slp'];   
		$budget2 = $budget - 5000;
		$budget++;
		$budget2--;   


        ?>

<!DOCTYPE html>
<html>

<head>
	<title>Get-PC</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">

<style>
#roboto
{
	font-family: 'Merriweather', serif;

}

td {
    padding: 8px;
  }

  body {
            background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1)), url(final2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

</style>




</head>

<body>


	



	<?php
    if ($slp == "PC") {
        	$query = "select * from custom where pc_Usages = '$usage' and Price between $budget2 and $budget";
        	$sql = mysqli_query($conn,$query);
			$count = mysqli_num_rows($sql);
			
        	while ($row = mysqli_fetch_array($sql)) {

				$rand = "admin/".$row[1];
			echo "<div class='container mt-5'><div class='card mb-3' style='background-color:whitesmoke; '>
				<div class='row no-gutters'>
					<div class='col-md-4'>
						<img src='$rand' class='card-img' alt='No preview available' style='width: 220px; height: 300px; margin-left: 30px; '>
					</div>
					<div class='col-md-8' >
						<div class='card-body text-dark ' id='roboto' style='border: 1px dotted black; '>
							<h5 class='card-title'>PC Specs</h5>
						


						<table>
							<tr style='padding-bottom: 5px;'>
							<td><b>PC name: </b></td>
							<td style='padding-left: 18px;'>$row[2] </td>
							</tr>
							
							<tr style='padding-bottom: 5px;'>
								<td><b>CPU: </b></td>
								<td style='padding-left: 18px;'>$row[3] </td>
							</tr>

							<tr style='padding-bottom: 5px;'>
								<td><b>Graphics card: </b></td>
								<td style='padding-left: 18px;'>$row[4] </td>
								
							</tr>
							
							<tr style='padding-bottom: 5px;'>
								<td><b>Motherboard: </b></td>
								<td style='padding-left: 18px;'>$row[7] </td>
							</tr>

							<tr style='margin-bottom: 5px;'>
								<td><b>Ram: </b></td>
								<td style='padding-left: 18px;'>$row[5] </td>
							</tr>

							<tr style='margin-bottom: 5px;'>
								<td><b>Storage: </b></td>
								<td style='padding-left: 18px;'>$row[6] </td>
							</tr>

							<tr style='margin-bottom: 5px;'>
								<td><b>Cabinet: </b></td>
								<td style='padding-left: 18px;'>$row[9] </td>
							</tr>
							
						</table>	

						</div>
					</div>
				</div>
			</div></center></div>"
			;
			}


        }
        elseif ($slp == "laptop") {
			
			
			
			// Laptop



        	$query = "select * from laptop where Usages = '$usage' and Price between '$budget2' and '$budget'";
        	$sql = mysqli_query($conn,$query);
			$count = mysqli_num_rows($sql);
			
		//	echo "select * from laptop where Price <= '$budget' and Usages = '$usage'";
			while ($row = mysqli_fetch_array($sql)) {
				$rand = "admin/".$row[1];
				
			echo "<div class='container mt-4 ' ><div class='card mb-3' style='background-color: whitesmoke;'> 
				<div class='row no-gutters'>
					<div class='col-md-4'>
						<img src='$rand' class='card-img mt-4' alt='No preview available' style='width: 300px; height: 220px; margin-left: 30px; '>
					</div>
					<div class='col-md-8'>
						<div class='card-body text-light'>
							<h5 class='card-title'>PC Specs</h5>


							<table>
								<tr style='padding-bottom: 5px;'>
								<td><b>Laptop name: </b></td>
								<td style='padding-left: 18px;'>$row[2] </td>
								</tr>
								
								<tr style='padding-bottom: 5px;'>
									<td><b>CPU: </b></td>
									<td style='padding-left: 18px;'>$row[3] </td>
								</tr>
	
								<tr style='padding-bottom: 5px;'>
									<td><b>Graphics card: </b></td>
									<td style='padding-left: 18px;'>$row[4] </td>	
								</tr>
																
								<tr style='margin-bottom: 5px;'>
									<td><b>Ram: </b></td>
									<td style='padding-left: 18px;'>$row[5] </td>
								</tr>
	
								<tr style='margin-bottom: 5px;'>
									<td><b>Storage: </b></td>
									<td style='padding-left: 18px;'>$row[6] </td>
								</tr>
	
								<tr style='margin-bottom: 5px;'>
									<td><b>Price: </b></td>
									<td style='padding-left: 18px;'>$row[8] </td>
								</tr>

								<tr style='margin-bottom: 5px;'>
									<td><b>Link:  </b></td>
									<td style='padding-left: 18px;'><button id='forhov' class='btn btn-outline-light btn-info text-dark'> <a class='text-dark' href='$row[9]' style='font-family: sans-serif; text-decoration: none;  '>Click here</a> </button> </td>
								</tr>
								
							</table>




							

							
								
						</div>
					</div>
				</div>
			</div></div>" 
			;
			}
        }
		
		
	
    ?>







	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





</body>

</html>
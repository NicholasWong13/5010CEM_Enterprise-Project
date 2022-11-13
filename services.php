<?php

$user = 'root';
$password = '';
$database = 'studio c hair & beauty salon';
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,$password, $database);
				
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM services ORDER BY id ASC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Services</title>   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="style1.css" rel="stylesheet" type="text/css"/>
        <link href="service.css" rel="stylesheet" type="text/css"/>
    </head>

  <body>
    <?php include 'header.html';?>
    
  <br><br><p>We are more than just an ordinary salon. At Studio C Hair & Beauty Salon, you can get convenience, personalization and transformation at affordable prices. We provide you with all your hair needs under one roof. Whether you’re getting a quick trim, hair colored or a completely new look, we got you all covered here!</p>
  <div class="main-box">
                    <?php
				while($rows=$result->fetch_assoc())
				{
			?>
    
        <div class="box box-grey">
            <img src="assets/img/<?php echo $rows['img']; ?>" alt="" height="100" width="150">
            <h1><?php echo $rows['name'];?></h1>
          <hr>
          <p style="text-align:justify-all;"><?php echo $rows['description'];?></p>
          <a href="index.php">Read More</a>
        </div>
          
          <?php
				}
			?>
            
         <?php
				while($rows=$result->fetch_assoc())
				{
			?>
    
        <div class="box box-red">
            <img src="img/<?php echo $rows['img']; ?>" alt="" height="100" width="150">
            <h2><?php echo $rows['name'];?></h2>
          <hr>
          <p style="text-align:justify-all;"><?php echo $rows['description'];?></p>
          <a href="service.html"  class="white-border">Read More</a>
        </div>
          
          <?php
				}
			?>
                    
      </div>
      </div>

    <?php include 'footer.html';?>

  </body>

</html>


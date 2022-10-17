<?php
if(isset($_GET['date'])){
    $date = $_GET['date'];
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mysqli = new mysqli('localhost', 'root', '', 'hairsalon');
    $stmt = $mysqli->prepare("INSERT INTO bookings (name, email, date) VALUES (?,?,?)");
    $stmt->bind_param('sss', $name, $email, $date);
    $stmt->execute();
    $msg = "<div class='alert alert-success'>Booking Successfull</div>";
    $stmt->close();
    $mysqli->close();
}

?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
      body {
        background-image: url('../booking/appointment2.jpg');
        background-size: 100% 100%; 
        background-repeat: no-repeat;
        background-attachment: fixed;
        width: 100%;
	height: 100%;
	background-color: rgba(0,147,173,0.7);
	overflow: auto;
      }
      a {
        padding: 8px 16px;
        text-decoration: none;
        font-size: 20px;
      }

      a:hover {
        background-color: #adcaf7;
        color: black;
        text-decoration: none;
      }

      .previous {
        background-color: #0749b3;
        color: white;
      }

      .round {
        border-radius: 45%;
      }
</style>
    
    <title>Appointment Details</title>
    <link href="appointmentCSS.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
        <br><br>
        <a href="index.php" class="previous round">&#8249; Back</a>
        <h1 class="text-center">Book for Date: <?php echo date('d/m/Y', strtotime($date)); ?></h1><hr>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
               <?php echo isset($msg)?$msg:''; ?>
                <form action="" method="post" autocomplete="off">
                    <h4>Personal Details</h4><br>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control" name="number" required>
                    </div><br>
                    
                    <h4>Services Details</h4><br>
                    <label for="stylist">Preferred Stylist: </label>
                              <select name="stylist" id="stylist">
                                <option value="option1">Select a Stylist</option>
                                <option value="option2">Mei Ling</option>
                                <option value="option3">Katherine</option>
                                <option value="option4">Lee Chun</option>
                                <option value="option5">Jane Palmer</option>
                                <option value="option6">Anyone</option>
                              </select><br><br>
                                        
                                <h6>Types of Services</h6>

                                <label class="container-check"> Haircut
                                   <input type="checkbox" value="Haircut" id="checkbox" name="service[]">
                                   <span class="checkmark"></span>
                                </label>
                                <label class="container-check">Hair Cut & Beard
                                    <input type="checkbox" value="Hair Cut & Beard" id="checkbox" name="service[]">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container-check">Beard Trimming
                                    <input type="checkbox" value="Beard Trimming" id="checkbox" name="service[]">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container-check">Clean Shaving
                                  <input type="checkbox" value="Clean Shaving" id="checkbox" name="service[]">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="container-check">Hair Straightening Service
                                  <input type="checkbox" value="Hair Straightening Service" id="checkbox" name="service[]">
                                  <span class="checkmark"></span>
                                </label><br>

                                <div class="row form-row">
                                    <h6>Appointment Time</h6>
                                    <input type="time" placeholder="Enter Appointment Time" name="time" id="time" class="form-control" required>
                                </div><br>
                                <button class="btn btn-primary" type="submit" name="submit">Submit</button><br><br><br>
                </form>
            </div>
        </div>
    </div>

  </body>

</html>

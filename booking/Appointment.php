<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Appointment Form</title>   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link href="appointmentCSS.css" rel="stylesheet" type="text/css"/>
        <style>
            body {
                background-image: url('../booking/appointment3.jpg');
                background-size: 100% 100%; 
                background-repeat: no-repeat;
                background-attachment: fixed;
                width: 100%;
                height: 100%;
                background-color: rgba(0,147,173,0.7);
                overflow: auto;
            }
            
            a:link, a:visited {
  background-color: #009900;
  color: white;
  padding: 10px 90px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #006600;
}

a {
    font-size: 17px;
    font-family: Georgia;
}
        </style>
    </head>

<body>   
    
<div class="page-wrapper">
<!-- Main content -->

     <div class="inner-layer">
          <div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h1>Book Your Slot Now & Save your time</h1>
                        <p>Get the Fresher Styles & Cuts For Your Needs along with any Beard Trimming Services Or Shaving.</p>
                        <h2>For Help Call: +6013-4160494</h2>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appointment</h2>
                        </div>
                        <form action="Booking.php" method="post" class="form-body">
                            <div class="row form-row">
                              <input type="text" placeholder="Enter Full name" name="name" id="name" class="form-control">
                            </div>
                            <div class="row form-row">
                              <input type="text" placeholder="Enter Mobile Number" name="phone" id="phone" class="form-control">
                            </div>
                             <div class="row form-row">
                              <input type="text" placeholder="Enter Email Adreess" name="email" id="email" class="form-control">
                            </div>
                            <div class="row form-row">
                              <input type="time" placeholder="Enter Appointment Time" name="time" id="time" class="form-control">
                            </div>
                            
                                <h6>Types of Services</h6>

                                <label class="container-check"> Haircut
                                   <input type="checkbox" value="Haircut" id="checkbox" name="service[]" checked="checked">
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
                                </label>


                             <div class="row form-row">
                               <button class="btn btn-success btn-appointment" name="book" value="book">Book Appointment</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
      

</div>

      
</body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

</html>
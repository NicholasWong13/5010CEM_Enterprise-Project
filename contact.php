<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us</title>   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="style1.css" rel="stylesheet" type="text/css"/>
        <?php include 'header.html';?>
    </head>

<body>        

<div class="page-wrapper">
    
    
<section class="contact">
    <div class="content-contact">
        <h2>Contact Us</h2>
        <p>Get the Fresher Styles & Cuts For Your Needs along with any Beard Trimming Services Or Shaving</p>
    </div>

    <div class="container-contact">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Address</h3>
                    <div class="mapouter"><div class="gmap_canvas">
                        <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=400&amp;height=200&amp;hl=en&amp;q=Studio C Hair &amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div></div>
                            <p><a href="" style="color: white; background-color: transparent" target="_blank"><u>Jalan Sungai Dua, 11700 Gelugor, Pulau Pinang</u></a></p>
    </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>+6016-4121820</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>studioc@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="contactForm">
            <form action="Send.php" method="post">
                <h2>Send Message</h2>
                <div class="inputBox">
                    <input type="text" name="name" required="">
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required="">
                    <span>Email</span>
                </div>    
                <div class="inputBox">
                    <textarea name="msg" maxlength="220" required=""></textarea>
                    <span>Type your Message.....</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="Submit" value="Send">
                    <?php session_start();
                        if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);}
                    ?>
                </div>
            </form>
        </div>
    </div>
   
</section>
 

</div>
<?php include 'footer.html';?>
    </body>

</html>
   
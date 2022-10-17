<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>   
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="footer.css">
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="assets/demo.css" />
	
</head>
<body>
    <?php include 'header.html'?>

<section>
     <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
            <br /><h1>Contact Us</h1>
            <p>- Get the Fresher Styles & Cuts For Your Needs along with any Beard Trimming Services Or Shaving.</p><hr>
            <div class="container">
           <div class="contact-parent">       
            <div class="contact-child child1">
                        <p>
                            <i class="fas fa-map-marker-alt"></i> Address <br />
                            <span> JALAN SUNGAI DUA, 11700 Gelugor,
                                <br />
                                Penang, Malaysia
                            </span>
                        </p>

                        <p>
                            <i class="fas fa-phone-alt"></i> Let's Talk <br />
                            <span> +6016-412 1820</span>
                        </p>

                        <p>
                            <i class=" far fa-envelope"></i> General Support <br />
                            <span>studiochairbeautysalon@gmail.com</span>
                        </p>
                    </div>

                    <div class="contact-child child2">
                        <div class="inside-contact">
                            <h2>Contact Form</h2>
                            <p>Fill in the form below to send us a message:</p>
                            <form role="form" action="contact-validation.php" method="post">
                                <div class="form-group">
                                    <label class="sr-only" for="contact-name">Name</label>
                                    <input type="text" name="name" placeholder="Name..." class="contact-name form-control" id="contact-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="contact-email">Email</label>
                                    <input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="contact-subject">Subject</label>
                                    <input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="contact-message">Message</label>
                                    <textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="contact-antispam">Anti-Spam Question: 7 + 5 = ?</label>
                                    <input type="text" name="antispam" placeholder="Your answer..." class="contact-antispam form-control" id="contact-antispam">
                                </div>
                                <input type="submit" id="btn_send" value="SEND">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h1>Locate Us</h1><hr>
        <div class="mapouter">
            <div class="gmap_canvas">
            <iframe class="gmap_iframe" frameborder="2" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Studio C Hair & Beauty Salon&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
            </div>
    		
           
    		</div>
		</div>
    </div>
    
</section>

    <?php include 'footer.html'?>

	</body>
</html>
<?php
if(isset($_GET['date'])){
    $date = $_GET['date'];
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $stylist = $_POST['stylist'];
    $service = $_POST['service'];
    $time = $_POST['time'];
    $b=implode(',',$service);
    $mysqli = new mysqli('localhost', 'root', '', 'hairsalon');
    $stmt = $mysqli->prepare("INSERT INTO bookings (name, email, date, number, stylist, service, time) VALUES ($name, $email, $date, $number, $stylist, $b, $time)");
    $stmt->bind_param('sss', $name, $email, $date, $number, $stylist, $service, $time);
    $stmt->execute();
    $msg = "<div class='alert alert-success'>Booking Successfull</div>";
    $stmt->close();
    $mysqli->close();
}

?>
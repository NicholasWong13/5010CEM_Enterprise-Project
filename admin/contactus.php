<?php
    session_start();

    //Page Title
    $pageTitle = 'Contact Us';

    //Includes
    include 'connect.php';
    include 'Includes/functions/functions.php'; 
    include 'Includes/templates/header.php';

    //Check If user is already logged in
    if(isset($_SESSION['username_barbershop_Xw211qAAsq4']) && isset($_SESSION['password_barbershop_Xw211qAAsq4']))
    {
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
    
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Contact Us</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i>
                    Generate Report
                </a>
            </div>

            <!-- Contact Us Table -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Contact Us</h6>
                </div>
                <div class="card-body">

                    <!-- Contact Us Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Message</th>
                                    <th>Manage</th>
                                </tr>
                            </thead> 
                            <tbody>
                            <?php
                            include_once('dbconnect.php');
                            $sql = "SELECT * FROM contactus;";
                            $result = mysqli_query($con,$sql);

                            while ($row = mysqli_fetch_assoc($result))
                                {
                                    echo "<tr>
                                        <td>"  . $row["name"] . "</td>
                                        <td>"  . $row["email"] . "</td>
                                        <td>"  . $row["msg"] . "</td>
                                        <td>
                                            <a class ='btn btn-danger btn-sm rounded-0 fa fa-trash' href='deletecontactus.php?id=$row[id]'></a>
                                        </td>
                                    </tr>";
                                }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
  
<?php 
        
        //Include Footer
        include 'Includes/templates/footer.php';
    }
    else
    {
        header('Location: login.php');
        exit();
    }

?>
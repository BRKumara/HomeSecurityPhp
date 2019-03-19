<?php include 'inc/Include_Connection.php'; ?>
<?php
session_start();
if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] == 'superadmin') {
        ?>
        <!DOCTYPE html>
        <!DOCTYPE html>
        <html>

            <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>SAFE KEY IOT Based Home Security System </title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

                <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
                <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

                <!--        new css-->

                <!-- Bootstrap CSS-->
                <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
                <!-- Font Awesome CSS-->
                <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
                <!-- Fontastic Custom icon font-->
                <link rel="stylesheet" href="css/fontastic.css">
                <!-- Google fonts - Poppins -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
                <!-- theme stylesheet-->
                <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
                <!-- Custom stylesheet - for your changes-->
                <link rel="stylesheet" href="css/custom.css">
                <!-- Favicon-->
                <link rel="shortcut icon" href="img/favicon.ico">
                <!------ footer ---------->
                <!--icon-->

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            </head>


            <body style="background-color:white;">



                <!--Sidebar-->
                <div>
                    <?php include 'inc/Include_Main_Admin_sidebar.php'; ?>

                </div>


                <?php
                $U = 0;
                $Q = "select * from login where u_type='user' and activated ='1'";
                $result = mysqli_query($conn, $Q);
                while ($row = mysqli_fetch_assoc($result)) {
                    $U++;
                }

                $A = 0;
                $Q2 = "select * from login where u_type='user' and activated ='0'";
                $result2 = mysqli_query($conn, $Q2);
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    $A++;
                }

                $X = 0;
                $Q3 = "select * from login where u_type='admin' and activated ='1'";
                $result3 = mysqli_query($conn, $Q3);
                while ($row3 = mysqli_fetch_assoc($result3)) {
                    $X++;
                }

                $Y = 0;
                $Q4 = "select * from login where u_type='admin' and activated ='0'";
                $result4 = mysqli_query($conn, $Q4);
                while ($row4 = mysqli_fetch_assoc($result4)) {
                    $Y++;
                }

                $actuser = $U;
                $duser = $A;
                $actadm = $X;
                $dadmi = $Y;
                ?>





                <section class="dashboard-counts no-padding-bottom" style="position:absolute;top:15%;left: 20%;">
                    <div class="container-fluid">
                        <div class="row bg-white has-shadow">
                            <!-- Item -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="item d-flex align-items-center">
                                    <div class="icon bg-violet"></div>
                                    <div class="title"><span>Active<br>Customers</span>
                                        
                                    </div>
                                    <div class="number" Style="width: 100px;"><strong><?php echo "$actuser"; ?></strong></div>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="item d-flex align-items-center">
                                    <div class="icon bg-red"></div>
                                    <div class="title"><span>Deactive<br>Customers</span>
                                       
                                    </div>
                                    <div class="number" Style="width: 100px;"><strong><?php echo "$duser"; ?></strong></div>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="item d-flex align-items-center">
                                    <div class="icon bg-green"></div>
                                    <div class="title"><span>Active<br>Admins</span>
                                        
                                    </div>
                                    <div class="number" Style="width: 100px;"><strong><?php echo "$actadm"; ?></strong></div>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="item d-flex align-items-center">
                                    <div class="icon bg-red"></div>
                                    <div class="title"><span>Deactive<br>Admins</span>
                                        
                                    </div>
                                    <div class="number" Style="width: 100px;"><strong><?php echo "$dadmi"; ?></strong></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


      





        <?php
    } else {
        header("location: Login.php");
    }
} else {
    header("location: Login.php");
}
?>

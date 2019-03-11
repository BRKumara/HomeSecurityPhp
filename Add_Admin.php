<?php include 'inc/Include_Connection.php'; ?>

<?php
session_start();
if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] == 'superadmin') {
        ?>

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
                <!------ footer ---------->
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

            </head>

            <body style="background-color:white ;" >



                <!--Sidebar-->
                <div>
                    <?php include 'inc/Include_Main_Admin_sidebar.php'; ?>

                </div>

                <div style="position:absolute;top:15%;left: 42%;">

                    <div class="w3-card-4_1">
                        <h3 style="text-align:  center; color: white; margin-top: 3px; ">Add Admin</h3>
                    </div>
                    
                    <div class="w3-card-4_2">
                        <form method="POST" action="Add_Admin.php">
                            <br>



                            <div class="input-group" style="margin-left: 5px;" >

                                <input class="requiredstyle" type="text" id="name" name="name" placeholder=" Name" required="required">
                                <span class="error_form" id="firstname_error_message"></span>
                            </div>
                            </br>


                            <div class="input-group" style="margin-left: 5px;" >

                                <input class="requiredstyle" type="text" id="username" name="username" placeholder="Username " required="required">
                                <span class="error_form" id="lastname_error_message"></span>
                            </div>
                            </br>
                            <div class="input-group" style="margin-left: 5px;" >

                                <input class="requiredstyle" type="text" id="phonenumber" name="phonenumber" placeholder=" Phone Numbers" required="required">
                                <span class="error_form" id="phonenumber_error_message"></span>

                            </div>
                            </br>

                            <div class="input-group" style="margin-left: 5px;" >

                                <select class="requiredstyle" name="area" required="required">
                                    <option value="">Select Distric</option>
                                    <option value="Ampara">Ampara</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Batticaloa">Batticaloa</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Hambantota">Hambantota</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Kalutara">Kalutara</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Kegalle">Kegalle</option>
                                    <option value="Kilinochchi">Kilinochchi</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Monaragala">Monaragala</option>
                                    <option value="Mullaitivu">Mullaitivu</option>
                                    <option value="Nuwara_Eliya">Nuwara Eliya</option>
                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                    <option value="Ratnapura">Ratnapura</option>
                                    <option value="Trincomalee">Trincomalee</option>
                                    <option value="Vavuniya">Vavuniya</option>

                                </select> 

                            </div>
                            </br>
                            <div class="input-group" style="margin-left: 5px;" >

                                <input class="requiredstyle" type="text" id="address" name="address" placeholder=" Address" required="required" >
                                <span class="error_form" id="address_error_message"></span>

                            </div><br>

                            <div class="input-group" style="margin-left: 5px;" >

                                <input class="requiredstyle" type="text" id="email" name="email" placeholder=" Email" required="required">
                                <span class="error_form" id="email_error_message"></span>
                            </div>
                            </br>
                            <div class="input-group" style="margin-left: 5px;" >

                                <input class="requiredstyle" type="Password" id="password" name="password" placeholder=" Create Password" maxlength="12" minlength="8"required="required">
                                <span class="error_form" id="password_error_message"></span>
                            </div>
                            </br>
                            <div class="input-group" style="margin-left: 5px;" >

                                <input class="requiredstyle" type="Password" id="confirm_password" name="confirm_password" placeholder=" Confirm Password"required="required" >
                                <span class="error_form" id="cpassword_error_message"></span>
                            </div>
                            <br>
                            <br>

                            <button class="button3" type="submit"style= "border-radius: 5px; color: white;">Register</button>

                        </form>
                    </div>
                </div>
                <br>

                <br>
                <br>

                <style>
                    .w3-card-4_1{
                        width:400px;
                        height:50px; 
                        margin: auto;
                        opacity: 0.9;
                        border-radius: 2px;
                        background-color: #000000;
                        padding-top: 10px;

                    }
                    .w3-card-4_2{
                        width:400px;
                        height:460px;
                        margin: auto;
                        text-align: center;
                       
                        opacity: 0.9;
                        background-color: #000000;

                    }

                    .requiredstyle{
                        height: 35px; 
                        border-radius: 5px; 
                        width: 350px;
                    }


                    .button3 {
                        background-color: #000000;
                        color: black; 
                        opacity: 1.5;
                        width: 100%;
                        height:50px;
                    }
                    .button3:hover {
                        background-color: #32CD32 ;
                        color: #FFFFFF;
                        font-weight: 700;
                        font-size: 20px;
                    }
                </style>

                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {


                    $name = $_POST['name'];
                    $username = $_POST['username'];
                    $phonenumber = $_POST['phonenumber'];
                    $area = $_POST['area'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];


                    $base = base64_encode($password);
                    $basepass = md5($base);
                    $enpassword = md5($basepass);


                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql1 = "SELECT * FROM login WHERE username='$username'";
                    $result1 = mysqli_query($conn, $sql1);
                    $sql2 = "INSERT INTO comp_user (name, phone_number, email, area,address, password, username, role) VALUES ('$name','$phonenumber','$email','$area','$address','$enpassword','$username','admin')";
                    $sql3 = "INSERT INTO login (u_type,username,password) VALUES ('admin','$username','$enpassword')";

                    if (mysqli_num_rows($result1) == 0) {
                        if (mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3)) {

                            //echo "New record created successfully";
                            //
                       
                        echo ' <script language = "javascript" >';
                            echo 'alert("Record inserted successfully");';
                            echo ' </script>';
                            //popup msg!!!
                        } else {
                            echo "Error: " . $sql1 . "<br>" . $conn->error;
                        }
                    } else {
                        //echo "Username Exists!";

                        echo ' <script language = "javascript" >';
                        echo 'alert("Username Exists!");';
                        echo '  </script>';
                    }
                    $conn->close();
                }
                ?>


                <?php
            } else {
                header("location: Login.php");
            }
        } else {
            header("location: Login.php");
        }
        ?>
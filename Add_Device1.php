<?php
include 'inc/Include_Connection.php';
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

            </head>

            <body style="background-color:white;">

                <!--Sidebar-->
                <div>
                    <?php include 'inc/Include_Admin_sidebar.php'; ?>

                </div>


                <form method="POST" action="Add_Device.php" class="form-style-9">
                    <ul>
                        <li>
                            <input type="text" name="deviceid" id="deviceid" class="field-style field-split align-left" placeholder="Device ID" />
                            <input type="text" name="username" id="username" class="field-style field-split align-right" placeholder="User Name" />
                        </li>


                        <li>
                            <input type="text" name="firstname" id="firstname" class="field-style field-split align-left" placeholder="First Name" />
                            <input type="text" name="lastname" id="lastname" class="field-style field-split align-right" placeholder="Last Name" />
                        </li>

                        <li>
                            <input type="text" name="phonenumber" id="phonenumber" class="field-style field-split align-left" placeholder="Phone Number" />
                            <input type="email" name="email" id="email" class="field-style field-split align-right" placeholder="Email" />
                        </li>

                        <li>
                            <input type="password" id="password" name="password"  class="field-style field-split align-left" placeholder="Password" />
                            <input type="password" id="cpassword"  name="cpassword"  class="field-style field-split align-right" placeholder="Confirm Password" />

                        <li>
                            <select class="requiredstyle" name="area" required="required">
                                <option value="">Select District</option>
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
                        </li>   

                        <li>
                            <textarea name="address" class="field-style" placeholder="Address"></textarea>
                        </li>

                        <li>
                            <input type="submit" value="Register" />
                        </li>
                    </ul>
                </form>


            </body>



        </div>
        </div>
        <script>
        //password conformation
            var password = document.getElementById("password")
            var confirm_password = document.getElementById("cpassword");

            function validatePassword() {
                if (password.value != confirm_password.value) {

                    alert("Passwords Don't Match");
                } else {

                }
            }

        </script>
        <br>
        <br>
        <br>
        <style>

            .footer {

                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #000000;
                color: white;
                text-align: center;
                opacity: 0.8;
            }

        </style>


        <script>



        </script>
        <br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $deviceid = $_POST['deviceid'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $user_name = $_POST['username'];
            $phonenumber = $_POST['phonenumber'];
            $address = $_POST['address'];
            $area = $_POST['area'];
            $email = $_POST['email'];


            $password = $_POST['password'];

            $base = base64_encode($password);
            $basepass = md5($base);
            $enpassword = md5($basepass);


            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql1 = "SELECT * FROM user WHERE device_id='$deviceid'";
            $result1 = mysqli_query($conn, $sql1);
            $sql2 = "SELECT * FROM login WHERE username='$user_name'";
            $result2 = mysqli_query($conn, $sql2);
            $sql3 = "INSERT INTO user (device_id,first_name,last_name,phone_number,area,address,email,username,password,activated) VALUES ('$deviceid','$firstname','$lastname','$phonenumber','$area','$address','$email','$user_name','$enpassword','0')";
            $sql4 = "INSERT INTO login (u_type,username,password) VALUES ('user','$user_name','$enpassword')";


            if (mysqli_num_rows($result1) == 0 && mysqli_num_rows($result2) == 0) {
                if (mysqli_query($conn, $sql3) && mysqli_query($conn, $sql4)) {

                    // echo "New record created successfully";


                    echo ' <script language = "javascript" >';
                    echo 'alert("Record inserted successfully");';
                    echo '</script>';
                    //the page to redirect
                    //popup msg!!!
                } else {
                    echo "Error: " . $sql3 . "<br>" . $conn->error;
                    echo "Error: " . $sql4 . "<br>" . $conn->error;
                }
            } else {
                // echo "Username/Device ID Exists!";
                echo ' <script language = "javascript" >';
                echo 'alert(Username/Device ID Exists!");';
                echo ' </script>';
            }
            $conn->close();
        }
        ?>



        

<style>

   

    .requiredstyle{
        height: 35px; 
        border-radius: 5px; 
        width: 225px;
    }

    .form-style-9{
        max-width: 550px;
        background: #FAFAFA;
        padding: 30px;
        margin: 50px auto;
        box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
        border-radius: 10px;
        border: 6px solid #305A72;
    }
    .form-style-9 ul{
        padding:0;
        margin:0;
        list-style:none;
    }
    .form-style-9 ul li{
        display: block;
        margin-bottom: 10px;
        min-height: 35px;
    }
    .form-style-9 ul li  .field-style{
        box-sizing: border-box; 
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box; 
        padding: 8px;
        outline: none;
        border: 1px solid #B0CFE0;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;

    }.form-style-9 ul li  .field-style:focus{
        box-shadow: 0 0 5px #B0CFE0;
        border:1px solid #B0CFE0;
    }
    .form-style-9 ul li .field-split{
        width: 49%;
    }
    .form-style-9 ul li .field-full{
        width: 100%;
    }
    .form-style-9 ul li input.align-left{
        float:left;
    }
    .form-style-9 ul li input.align-right{
        float:right;
    }
    .form-style-9 ul li textarea{
        width: 100%;
        height: 75px;
    }
    .form-style-9 ul li input[type="button"], 
    .form-style-9 ul li input[type="submit"] {
        -moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
        -webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
        box-shadow: inset 0px 1px 0px 0px #3985B1;
        background-color: #216288;
        border: 1px solid #17445E;
        display: inline-block;
        cursor: pointer;
        color: #FFFFFF;
        padding: 8px 18px;
        text-decoration: none;
        font: 12px Arial, Helvetica, sans-serif;
    }
    .form-style-9 ul li input[type="button"]:hover, 
    .form-style-9 ul li input[type="submit"]:hover {
        background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
        background-color: #28739E;
    }

</style>

<?php include 'inc/Include_Connection.php'; ?>

<?php session_start(); ?>
<!DOCTYPE html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $base = base64_encode($password);
    $basepass = md5($base);
    $enpassword = md5($basepass);


    $sql1 = "SELECT * FROM login WHERE username='$username' and password='$enpassword'";
    $result = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        if ($row['activated'] == '1') {
            $_SESSION['username'] = $username;
            $_SESSION['type'] = $row['u_type'];

            if ($row['u_type'] == "user") {

                $sql2 = "SELECT first_name, last_name, device_id, area FROM user WHERE username='$username'";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);

                $_SESSION['first_name'] = $row2['first_name'];
                $_SESSION['last_name'] = $row2['last_name'];
                $_SESSION['device_id'] = $row2['device_id'];
                $_SESSION['area'] = $row2['area'];
                header("location: Profile_Customer.php");
            } elseif ($row['u_type'] == "admin") {

                $sql3 = "SELECT name, area, admin_id FROM comp_user WHERE username='$username'";
                $result3 = mysqli_query($conn, $sql3);
                $row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);

                $_SESSION['name'] = $row3['name'];
                $_SESSION['area'] = $row3['area'];
                $_SESSION['admin_id'] = $row3['admin_id'];
                header("location: Admin.php");
            } elseif ($row['u_type'] == "superadmin") {
                $_SESSION['name'] = "Super Admin";
                header("location: Main_Admin.php");
            }

            echo "Loged in";
        } else {
            echo ' <script language = "javascript" >';
            echo 'alert("You are not activated yet!");';
            echo '</script>';
        }
    } else {
        // $error = "Your Login Name or Password is invalid";
        // echo "Wrong credentials";

        echo ' <script language = "javascript" >';
        echo 'alert("Your Login Name or Password is invalid");';
        echo '</script>';
    }
}
?>






<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

        <!--        footer-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </head>
    <body style="background-image:url('img/ab.jpeg');">
        <div>


            <nav class="navbar navbar-inverse" style="opacity: 0.8;">
                <div style="color:white; position: absolute; left:1;" >
                    <h4>Safe Key Home Security - Login</h4>
                </div>
               

            </nav>
        </div>


        <div class="login-form">
            <form method="POST" action="Login.php">

                <div align="middle">
                    <img src="img/SAFE KEY.png" alt="First slide"  height="40%" width="40%" >
                </div>
                <br>

                <h2 class="text-center" style="color:black;">Log in</h2>       
                <div class="form-group">
                    <input type="text"  id="username" name="username"  class="form-control" maxlength="30" minlength="5" placeholder="User Name" required="required">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password"  class="form-control" maxlength="12" minlength="8" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </div>
                <div class="clearfix">

                    
                </div>        
            </form>

        </div>
    </body>


    <?php
    include 'inc/Include_Footer.php';
    ?>

    <style type="text/css">

        body{
            background-color:white;


        }
        .login-form {
            width: 400px;
            margin: 50px auto;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {        
            font-size: 15px;
            font-weight: bold;
        }
    </style>

</html>        


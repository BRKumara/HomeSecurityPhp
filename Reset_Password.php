<?php include 'inc/Include_Connection.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>SAFE KEY IOT Based Home Security System </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.1/css/all.css' integrity='sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz' crossorigin='anonymous'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">

<!------ footer ---------->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">


    </script>

</head>

<body style="background-color:aquamarine;">

    <div>

        <nav class="navbar navbar-dark bg-dark" style="opacity: 0.9;">
            <div style="color:white; position: absolute; left:1;" >
                <h4>SAFE KEY - Reset Password</h4>
            </div>
        </nav>
    </div>
    </br>

    <div class="w3-card-4_1">
        <h3 style="text-align:  center; color: white; margin-top: 5px;">Reset Password</h3>

        <br>
        <div class="w3-card-4_2">
            <br>
            <h4 style="color: #FFFFFF;">Please Enter Your New Password</h4>
            <form>
                </br>

                <div class="input-group">

                    <input type="text" name="password" placeholder=" Enter Your New Password" class="requiredstyle"  required="required">
                </div>
                <br>
                <div class="input-group">

                    <input type="text"  name="cfpassword" placeholder="Confirm Password" class="requiredstyle"  required="required">
                </div>
                <br>
                <br>
                <button class="button3" style= "border-radius: 5px; color: white;">Reset


                </button>

            </form>
        </div>
    </div>

    <style>
        .input-group{

            margin-left: 15px;
        }
        .requiredstyle{

            height: 35px;
            border-radius: 5px; 
            width: 300px;
        }
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
            height:190px;
            margin: auto; 
            text-align: center;
            border-radius: 5px;
            opacity: 0.9;
            background-color: #000000;

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
        .button4 {
            background-color: #000000;
            color: black; 
            opacity: 1.5;
            width: 100%;
            height:50px;
        }

        .button4:hover {
            background-color: #FF0000 ;
            color: #FFFFFF;
            font-weight: 700;
            font-size: 20px;
        }



    </style>
    <!--Footer-->
    <?php
    include 'inc/Include_Footer.php';
    ?>

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #000000;
            color: white;
            text-align: center;
            opacity: 0.8;

        }


    </style>
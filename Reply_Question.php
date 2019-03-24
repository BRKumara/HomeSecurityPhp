
<?php include 'inc/Include_Connection.php'; ?>
<?php
session_start();
if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] == 'admin') {

        $username = $_SESSION['username'];
        $area = $_SESSION['area'];
        $admin_id = $_SESSION['admin_id'];




        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $sql = "UPDATE inquiery SET answer='" . $_POST['description'] . "', admin_id='" . $admin_id . "' WHERE in_id='" . $_POST[in_id] . "'";

            if (mysqli_query($conn, $sql)) {
                header("Location: Reply_Inqueries.php");
                echo "Replied To Inquery successfully";
                //popup msg!!!
            } else {
                echo "Error: " . $sql1 . "<br>" . $conn->error;
                echo $sql;
            }
        }
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

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            </head>


            <body style="background-color:white;">


                <div>
                    <?php include 'inc/Include_Admin_sidebar1.php'; ?>

                </div>





                <form method="POST" action="Reply_Question.php" style="position: absolute;top:25%;left: 30%;">
                    <br>

                    <div class="a">


                        <textarea class="tarea" rows="4" cols="200"  class="description" name="description"  placeholder="Enter Your Description" required=""></textarea>

                        </br></br>

                        <div>
                            <input type="hidden" value="<?php echo $_GET['qid'] ?>" name="in_id">
                            <input type="submit" value="Reply to Inquiery" style="width: 20;padding-right: 50;">

                        </div>

                    </div>
                </form>







                <!-- Footer -->
                <?php include 'inc/Include_Footer.php'; ?>

                <style>

                    .tarea{

                        width: 75%;
                        height: 150px;
                        padding: 12px 20px;
                        box-sizing: border-box;
                        border: 2px solid #ccc;
                        border-radius: 4px;
                        background-color: #f8f8f8;
                        font-size: 16px;
                        resize: none;
                    }
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

                <!DOCTYPE html>
            <!--
            To change this license header, choose License Headers in Project Properties.
            To change this template file, choose Tools | Templates
            and open the template in the editor.
            -->

            <?php
        } else {
            header("location: Login.php");
        }
    } else {
        header("location: Login.php");
    }
    ?>
<?php include 'inc/Include_Connection.php'; 

  
?>
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

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            </head>


            <body style="background-color:white;">


                <div >
           <?php         include 'inc/Include_Main_Admin_sidebar.php';?>

                    <div class="container" style="position:absolute;top:20%;left: 20%;">
                        <div class="jumbotron">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Admin_ID</th>
                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Area</th>
                                        <th>Address</th>
                                        <th>E-mail</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $result = mysqli_query($conn, "SELECT * FROM `comp_user` WHERE `role`='admin';");
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo'  <tr>';
                                        echo"<td>$row[admin_id]</td><td>$row[username]</td><td>$row[name]</td><td>$row[phone_number]</td><td>$row[area]</td><td>$row[address]</td><td>$row[email]</td><td><a href='View_and_Edit_Admin_Editor.php?admin_id=" . $row['admin_id'] . "' class='btn btn-primary'>Edit</button> </td>";
                                        echo' </tr> ';
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>


                    </div>
                </div>

                <!-- Footer -->
                
                

                </style>

                <?php
            } else {
                header("location: Login.php");
            }
        } else {
            header("location: Login.php");
        }
        ?>
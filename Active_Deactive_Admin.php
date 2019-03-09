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
                <?php include 'inc/Include_Main_Admin_sidebar.php'; ?>
                <div style="position:absolute;top:15%;left: 42%;">
                    <div  >

                        <?php
                        $result1 = mysqli_query($conn, "SELECT login.activated, comp_user.username, comp_user.admin_id, comp_user.email FROM login INNER JOIN comp_user ON login.username=comp_user.username WHERE login.activated=1 AND login.u_type='admin'");
                        $result2 = mysqli_query($conn, "SELECT login.activated, comp_user.username, comp_user.admin_id, comp_user.email FROM login INNER JOIN comp_user ON login.username=comp_user.username WHERE login.activated=0 AND login.u_type='admin'");

                        if (!empty($_GET['username'])) {
                            if ($_GET['do'] == 'activate') {
                                // check if the username has been set    
                                $result = mysqli_query($conn, "UPDATE login SET activated='1' WHERE username='" . $_GET['username'] . "'");

                                if ($result) {
                                    echo "<script> location.href='Active_Deactive_Admin'; </script>";
                                    exit;
                                    echo'<div class="alert alert-success" role="alert">User Activation successfully!</div>';
                                }
                            } elseif ($_GET['do'] == 'deactivate') {
                                // check if the username has been set    
                                $result = mysqli_query($conn, "UPDATE login SET activated='0' WHERE username='" . $_GET['username'] . "'");

                                if ($result) {
                                    echo "<script> location.href='Active_Deactive_Admin'; </script>";

                                    exit;
                                    echo'<div class="alert alert-success" role="alert">User Deactivation successfully!</div>';

                                    echo ' <script language = "javascript" > alert("User Deactivation successfully!");</script>';
                                } else {
                                    
                                }
                            }
                        }
                        ?>
                        <div class="jumbotron" >

                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th>Admin Id</th>
                                        <th>Username</th>
                                        <th>E-mail</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result2)) {
                                        echo'  <tr>';
                                        echo"<td>$row[admin_id]</td><td>$row[username]</td><td>$row[email]</td><td>";
                                        if ($row['activated'] == 1) {
                                            echo "<a href='Active_Deactive_Admin.php?username=" . $row['username'] . "&do=deactivate' <button type='button' class='btn btn-success'>Deactivate</button></td><td>";
                                        } else {
                                            echo "<a href='Active_Deactive_Admin.php?username=" . $row['username'] . "&do=activate' <button type='button' class='btn btn-success'>Activate</button></td><td>";
                                        }
                                        echo' </tr> ';
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>

                        <div class="jumbotron">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Device ID</th>
                                        <th>Username</th>
                                        <th>E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    while ($row = mysqli_fetch_array($result1)) {
                                        echo'  <tr>';
                                        echo"    <td>$row[admin_id]</td><td>$row[username]</td><td>$row[email]</td><td>";
                                        if ($row['activated'] == 1) {
                                            echo "<a href='Active_Deactive_Admin.php?username=" . $row['username'] . "&do=deactivate' <button type='button' class='btn btn-success'>Deactivate</button></td><td>";
                                        } else {
                                            echo "<a href='Active_Deactive_Admin.php?username=" . $row['username'] . "&do=activate' <button type='button' class='btn btn-success'>Activate</button></td><td>";
                                        }
                                        echo' </tr> ';
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>


                <!-- Footer -->




                <?php
            } else {
                header("location: Login.php");
            }
        } else {
            header("location: Login.php");
        }
        ?>
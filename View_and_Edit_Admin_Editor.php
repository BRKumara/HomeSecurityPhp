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

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            </head>


            <body style="background-color:white;">
                <div>
                    <?php include 'inc/Include_Main_Admin_sidebar.php'; ?>


                    <?php
                    if (( $_SERVER['REQUEST_METHOD'] == 'POST')) {

                        $admin_id = $_GET['admin_id'];
                        $username = $_POST['username'];
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $phone_number = $_POST['phonenumber'];
                        $address = $_POST['address'];
                        $area = $_POST['area'];


                        $query = "UPDATE comp_user SET admin_id='" . $admin_id . "', username='" . $username . "',name='" . $name . "', email='" . $email . "', phone_number='" . $phone_number . "', address='" . $address . "', area='" . $area . "' WHERE admin_id='" . $admin_id."'";
                        $result = mysqli_query($conn, $query);

                       echo "<script> location.href='View_and_Edit_Admin.php?post_update=true'; </script>";
                        exit;

                        if ($result) {
                            echo "Success";
                            // header('Location:View_and_Edit_Device.php?post_update=true');
                        } else {
                            echo "failed";
                            echo $query;
                        }
                    } elseif (isset($_GET['admin_id'])) {

                        $admin_id = mysqli_real_escape_string($conn, $_GET['admin_id']);
                        $query = "SELECT * FROM comp_user WHERE admin_id={$admin_id} LIMIT 1";

                        $result_set = mysqli_query($conn, $query);

                        if ($result_set) {

                            if (mysqli_num_rows($result_set) == 1) {

                                $result = mysqli_fetch_assoc($result_set);

                                $username = $result['username'];
                                $name = $result['name'];

                                $email = $result['email'];
                                $phone_number = $result['phone_number'];
                                $address = $result['address'];
                                $area = $result['area'];
                            } else {
                                echo "user not found";
                            }
                        } else {
                            echo "query failed";
                        }
                        ?>
                        <div class="container" style="position:absolute;top:15%;left: 42%;">
                            <form method="POST" action="View_and_Edit_Admin_Editor.php?admin_id=<?php echo $admin_id ?>">
                                <br>

                                <div class="input-group" style="margin-left: 5px;" >

                                    <input class="requiredstyle" type="text" id="deviceid" name="adminid" placeholder=" Device ID" value="<?php echo $admin_id; ?>" required="required">
                                    <span class="error_form" id="deviceid_error_message"></span>
                                </div>
                                <br>

                                <div class="input-group" style="margin-left: 5px;" >

                                    <input class="requiredstyle" type="text" id="name" name="name" placeholder="Name" value="<?php echo $name; ?>" required="required">
                                    <span class="error_form" id="firstname_error_message"></span>
                                </div>
                                <br>

                               

                                <div class="input-group" style="margin-left: 5px;" >

                                    <input class="requiredstyle" type="text" id="username" name="username" placeholder="User name" value="<?php echo $username; ?>" required="required">
                                    <span class="error_form" id="lastname_error_message"></span>
                                </div>
                                <br>
                                <div class="input-group" style="margin-left: 5px;" >

                                    <input class="requiredstyle" type="text" id="phonenumber" name="phonenumber" placeholder=" Phone Number" value="<?php echo $phone_number; ?>" required="required">
                                    <span class="error_form" id="phonenumber_no_error_message"></span>

                                </div>
                                <br>

                                <div class="input-group" style="margin-left: 5px;" >

                                    <input class="requiredstyle" type="text" id="address" name="address" placeholder=" Address" value="<?php echo $address; ?>" required="required">
                                    <span class="error_form" id="address_email_error_message"></span>

                                </div><br>



                                <div class="input-group" style="margin-left: 5px;" >


                                    <select class="requiredstyle" name="area" required="required">

                                        <option value="Ampara" <?php
                                        if ($area == 'Ampara') {
                                            echo "selected";
                                        }
                                        ?>>Ampara</option>
                                        <option value="Anuradhapura" <?php
                                        if ($area == 'Anuradhapura') {
                                            echo "selected";
                                        }
                                        ?>>Anuradhapura</option>
                                        <option value="Badulla" <?php
                                        if ($area == 'Badulla') {
                                            echo "selected";
                                        }
                                        ?>>Badulla</option>
                                        <option value="Batticaloa" <?php
                                        if ($area == 'Batticaloa') {
                                            echo "selected";
                                        }
                                        ?>>Batticaloa</option>
                                        <option value="Colombo" <?php
                                        if ($area == 'Colombo') {
                                            echo "selected";
                                        }
                                        ?>>Colombo</option>
                                        <option value="Galle" <?php
                                        if ($area == 'Galle') {
                                            echo "selected";
                                        }
                                        ?>>Galle</option>
                                        <option value="Gampaha" <?php
                                        if ($area == 'Gampaha') {
                                            echo "selected";
                                        }
                                        ?>>Gampaha</option>
                                        <option value="Hambantota" <?php
                                        if ($area == 'Hambantota') {
                                            echo "selected";
                                        }
                                        ?>>Hambantota</option>
                                        <option value="Jaffna" <?php
                                        if ($area == 'Jaffna') {
                                            echo "selected";
                                        }
                                        ?>>Jaffna</option>
                                        <option value="Kalutara" <?php
                                        if ($area == 'Kalutara') {
                                            echo "selected";
                                        }
                                        ?>>Kalutara</option>
                                        <option value="Kandy" <?php
                                        if ($area == 'Kandy') {
                                            echo "selected";
                                        }
                                        ?>>Kandy</option>
                                        <option value="Kegalle" <?php
                                        if ($area == 'Kegalle') {
                                            echo "selected";
                                        }
                                        ?>>Kegalle</option>
                                        <option value="Kilinochchi"  <?php
                                        if ($area == 'Kilinochchi') {
                                            echo "selected";
                                        }
                                        ?>>Kilinochchi</option>
                                        <option value="Kurunegala" <?php
                                        if ($area == 'Kurunegala') {
                                            echo "selected";
                                        }
                                        ?>>Kurunegala</option>
                                        <option value="Mannar" <?php
                                        if ($area == 'Mannar') {
                                            echo "selected";
                                        }
                                        ?>>Mannar</option>
                                        <option value="Matale" <?php
                                        if ($area == 'Matale') {
                                            echo "selected";
                                        }
                                        ?>>Matale</option>
                                        <option value="Matara" <?php
                                        if ($area == 'Matara') {
                                            echo "selected";
                                        }
                                        ?>>Matara</option>
                                        <option value="Monaragala" <?php
                                        if ($area == 'Monaragala') {
                                            echo "selected";
                                        }
                                        ?>>Monaragala</option>
                                        <option value="Mullaitivu" <?php
                                        if ($area == 'Mullaitivu') {
                                            echo "selected";
                                        }
                                        ?>>Mullaitivu</option>
                                        <option value="Nuwara_Eliya" <?php
                                        if ($area == 'Nuwara_Eliya') {
                                            echo "selected";
                                        }
                                        ?>>Nuwara Eliya</option>
                                        <option value="Polonnaruwa" <?php
                                        if ($area == 'Polonnaruwa') {
                                            echo "selected";
                                        }
                                        ?>>Polonnaruwa</option>
                                        <option value="Ratnapura" <?php
                                        if ($area == 'Ratnapura') {
                                            echo "selected";
                                        }
                                        ?>>Ratnapura</option>
                                        <option value="Trincomalee" <?php
                                        if ($area == 'Trincomalee') {
                                            echo "selected";
                                        }
                                        ?>>Trincomalee</option>
                                        <option value="Vavuniya" <?php
                                        if ($area == 'Vavuniya') {
                                            echo "selected";
                                        }
                                        ?>>Vavuniya</option>

                                    </select> 

                                </div>

                                <br>
                                <div class="input-group" style="margin-left: 5px;" >

                                    <input class="requiredstyle" type="text" id="email" name="email" placeholder=" Email" value="<?php echo $email; ?>" required="required">
                                    <span class="error_form" id="email_error_message"></span>
                                </div>
                                <br>
                                <button class="btn btn-primary" type="submit">Update</button>

                            </form>
                        </div>
                    </div>


                    <!-- Footer -->
                   

                    <?php
                }
            } else {
               header("location: Login.php");
            }
        } else {
            header("location: Login.php");
        }
        ?>
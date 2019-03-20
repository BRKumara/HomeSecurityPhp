<?php include 'inc/Include_Connection.php'; ?>

<?php
if (isset($_POST['email'])) {


    $email = $conn->real_escape_string($_POST['email']);

    $sql = $conn->query("SELECT * FROM user WHERE email='$email'");
    if ($sql->num_rows >0) {
header("location:Forget_Password3.php");



    
       
    } else {
        
        echo ' <script language = "javascript" >';
        echo 'alert(" Please check your inputs!");';
        echo '</script>';

        
    }
}
?>

<?php
include 'inc/Include_Connection.php';
?>
<!DOCTYPE html>
<html>
    <title>Forgot Password</title>

    <body>
        <h1 align="center">Forgot Password</h1>

        <form class="w3-container w3-light-grey" action="p.php" method="post">
            <br> 
            <label>
                Email Address
            </label>
            <input   class="w3-input w3-border-0" type="email"  required autocomplete="off" id="email" name="email"/>
            <br>
            
            <input type="submit" value="Reset" name="submit" class="w3-btn w3-orange" /> 

        </form>

		
    </body>
</body>
</html>




<?php include 'inc/Include_Connection.php'; ?>

<?php
if (isset($_POST['username'])) {


    $username = $conn->real_escape_string($_POST['username']);

    $sql = $conn->query("SELECT * FROM user WHERE username='username'");
    if ($sql->num_rows > 0) {



    header("location:Reset_Password.php");
       
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

        <form class="w3-container w3-light-grey" action="Forget_Password3.php" method="post">
            <br> 
            <label>
                User Name
            </label>
            <input   class="w3-input w3-border-0" type="text"  required autocomplete="off" id="username" name="username"/>
            <br>
            
            <input type="submit" value="Reset" name="submit" class="w3-btn w3-orange" /> 

        </form>

		
    </body>
</body>
</html>




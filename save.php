   <?php
       
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $dis = $_POST['dis'];
           
          
        }
       
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $email." ".$dis;
fwrite($myfile, $txt);

fclose($myfile);

header("Location: Customer_Dashboard.php");
?>
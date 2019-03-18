<?php

$host = "localhost"; // Host name 
$username = "root"; // Mysql username 
$password = ""; // Mysql password 
$db_name = "iot_home_security"; // Database name 
$tbl_name = "fquestions"; // Table name 
// Connect to server and select databse.
$conn = mysqli_connect($host, $username, $password, $db_name)or die("cannot connect");


// get data that sent from form 
$topic = $_POST['topic'];
$detail = $_POST['detail'];
$name = $_POST['name'];
$email = $_POST['email'];

$datetime = date("y-m-d"); //create date time

$sql = "INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Successful<BR>";
    echo "<a href=Forum.php>View your topic</a>";
} else {
    echo "ERROR";
    echo mysqli_error($conn);
}
mysqli_close($conn);
?>


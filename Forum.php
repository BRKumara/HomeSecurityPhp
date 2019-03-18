<?php
$host = "localhost"; // Host name 
$username = "root"; // Mysql username 
$password = ""; // Mysql password 
$db_name = "iot_home_security"; // Database name 
$tbl_name = "fquestions"; // Table name 
// Connect to server and select databse.
$conn = mysqli_connect($host, $username, $password, $db_name)or die("cannot connect");


$sql = "SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style type="text/css">

            #customers {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 1100px;
                position: absolute;
                left: 15%;

            }

            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
                font-size: 20px;

            }
            #customers td {
                font-weight: bold;
                font-size: 18px;
            }
        </style>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forum Page</title>
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
    <body>


        <div>


            <nav class="navbar navbar-inverse" style="opacity: 0.8;">
                <div style="color:white; position: absolute; left:1;" >
                    <h4>Safe Key Home Security</h4>
                </div>

            </nav>
        </div>





        <br>


        <div>
            <center>

                <h1 style="color: black;
                    font-family: verdana;
                    font-size: 300%;">
                    Welcome to the Discussion Forum
                </h1>
            </center>
        </div>

        <button style="margin-left: 1135px;"onclick="window.location.href = 'Forum_new_topic.php'" type="submit" class="btn btn-success">Add New Question</button> 
        <br>
        <br>
        <table id='customers'>



            <tr>
                <th ><strong>No</strong></th>
                <th ><strong>Topic</strong></th>
                <th ><strong>Views</strong></th>
                <th ><strong>Replies</strong></th>
                <th ><strong>Date/Time</strong></th>
            </tr>

            <?php
// Start looping table row
            while ($rows = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
                    <td bgcolor="#FFFFFF"><a href="Forum_view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
                </tr>




                <?php
// Exit looping and close connection 
            }
            mysqli_close($conn);
            ?>


        </table>

    </body>





</html>                                		                            



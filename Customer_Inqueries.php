<?php include 'inc/Include_Connection.php'; ?>
<?php
session_start();
if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] == 'user') {

        $username = $_SESSION['username'];
        $area = $_SESSION['area'];

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $inquiery = $_POST['description'];



            $sql = "INSERT INTO inquiery (in_date, in_des, user_id, area) VALUES (CURRENT_TIME(),'$inquiery','$username','$area')";



            if (mysqli_query($conn, $sql)) {

                echo "New record created successfully";
                //popup msg!!!
            } else {
                echo "Error: " . $sql1 . "<br>" . $conn->error;
            }
        }
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title>SAFE KEY IOT Based Home Security System</title>
            <div w3-include-html="content.html"></div>

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <!------ footer ---------->
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

            <!--Table-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>

        <body style="background-color:white;">

            <?php include 'inc/Include_Customer_sidebar1.php'; ?>


            <div class="sidebar col-md-3">


            </div>

            <div class="w3-content"style="position: absolute;top:15%;left: 30%;">

                <?php
                $sql2 = "SELECT * FROM inquiery WHERE user_id='$username'";
                $result2 = mysqli_query($conn, $sql2);

                if (mysqli_num_rows($result2) != 0) {
                    ?>
                    <div>
                        <h3>My Inquiries </h3>
                        
                        <br><br>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Inquiery or message</th>
                                    <th>Response</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {


                                    echo '<tr>';
                                    echo "<td>" . $row['in_date'] . "</td>";
                                    echo "<td>" . $row['in_des'] . "</td>";
                                    if (is_null($row['answer'])) {
                                        echo "<td>Not Yet Responded</td>";
                                    } else {
                                        echo "<td>" . $row['answer'] . "</td>";
                                    }


                                    echo '</tr>';
                                }
                                ?>


                            </tbody>
                        </table>
                    </div>
                <?php } ?>
                

                <div>
                    <h3>Add New Inqiery</h3>
                    <form method="POST" action="Customer_Inqueries.php">
                       

                        <div class="a">


                            <textarea  rows="4" cols="20"  class="description" name="description"  placeholder="Enter Your Description" required=""></textarea>

                            </br></br>

                            <div>
                                <input class="btn btn submit"type="submit" value="Send" style="width: 20;padding-right: 50;">

                            </div>

                        </div>
                    </form>
                </div>
                <br> 
                <br> 

            </div>
            <br>
            <br>
            <style>



                .a{
                    padding-left: 240px;
                    padding-top: 10%
                }
                .footer {

                    left: 0;
                    bottom: 0;
                    width: 100%;
                    background-color: #000000;
                    color: white;
                    text-align: center;
                    opacity: 0.8;

                }

                .description{

                    vertical-align: top; 
                    border-radius: 10px ;
                    border: 2px solid #609;
                    padding: 20px; 
                    width: 380px;
                    height: 180px; 
                }


                ​.textarea { 

                    resize: none;
                    vertical-align: top; }
            </style>
        </body>
        </html>


        <?php
    } else {
        header("location: Login.php");
    }
} else {
    header("location: Login.php");
}
?>
    
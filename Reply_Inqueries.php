<?php include 'inc/Include_Connection.php'; ?>
<?php
session_start();
if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] == 'admin') {

        $username = $_SESSION['username'];
        $area = $_SESSION['area'];



        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


//         
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

                <!--Table-->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

            </head>




            <body style="background-color:white;">
               




                    <!--Sidebar-->
                    <div>
                        <div>
                            <?php include 'inc/Include_Admin_sidebar1.php'; ?>


                        </div>
                        <div class="w3-content" >

                            <?php
                            $sql2 = "SELECT * FROM inquiery WHERE area='$area'";
                            $result2 = mysqli_query($conn, $sql2);

                            if (mysqli_num_rows($result2) != 0) {
                                ?>
                                <div style="position: absolute;top:15%;left: 30%;">
                                    <h1>Inquiries in My Area</h1>
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
                                                    echo "<td><a href='Reply_Question.php?qid=" . $row['in_id'] . "'><button>Respond</button></a></td>";
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
                            <br><br>

                        </div>
                    </div>
                    <style>
                        html, body {
                            height: 100%;
                        }
                        .wrapper {
                            min-height: 100%;
                            height: auto !important;
                            height: 100%;
                            margin: 0 auto -142px; /* the bottom margin is the negative value of the footer's height */
                        }
                        .footer {
                            position:relative;
                            left: 0;
                            bottom: 0;
                            width: 100%;
                            background-color: red;
                            color: white;
                            text-align: center;
                        }
                        .body {
                            margin:0;
                            padding:0;
                            min-height: 100%;
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
                    <?php include 'inc/Include_Footer.php'; ?>
                    <!-- Footer -->
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
    


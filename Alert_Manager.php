<?php include 'inc/Include_Connection.php'; ?>
<?php
session_start();
if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] == 'user') {
        ?>
        <html>
            <head>
                <meta charset="UTF-8">
                <title></title>

                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            </head>
            <body>

                <div>
                    <?php include 'inc/Include_Customer_sidebar1.php'; ?>


                </div>

                <div class="container" style="position: absolute;top:25%;left: 32%;">



                    <form class="form-horizontal" method="post" action="save.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="user">Email :</label>
                            <div class="col-sm-10">
                                <input type="email" name="email"  class="form-control" id="user" placeholder="Enter Email"style="width:400px;" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Distance :</label>
                            <div class="col-sm-10">
                                <input type="dis" name="dis" class="form-control" id="pwd" placeholder="Enter distence" style="width:400px;"required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Temperature :</label>
                            <div class="col-sm-10">
                                <input type="tem" name="tem" class="form-control" id="pwd" placeholder="Enter Temperature"style="width:400px;"required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Set Settings</button>
                            </div>
                        </div>
                    </form> 
                </div>


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
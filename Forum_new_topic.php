<!DOCTYPE html>
<html>
    <head>
        
        
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forum New Topic</title>
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
   <body style="background-color:">
        <div>


            <nav class="navbar navbar-inverse" style="opacity: 0.8;">
                <div style="color:white; position: absolute; left:1;" >
                    <h4>Safe Key Home Security - About Us</h4>
                </div>

            </nav>
        </div>
        <br>
        <br>
        <br>
        <br>
        <table style="width:600px;height: 450px;border:1; position: absolute;left: 30%;margin: 5px;padding: 10px;  background-color:#CCCCCC;border-radius: 25px 25px 25px 25px;">
            <tr style="margin-bottom:10px;">
            <form id="form1" name="form1" method="post" action="Forum_add_new_topic.php">
                
                 
                        <tr >
                            <td colspan="3"    style="color:white;text-align: center;font-size: 18px;background-color: #4CAF50;border-radius: 25px 25px 25px 25px;"><strong> Ask New Question </strong> </td>
                        
                        </tr>
                        
                        <tr>
                          
                            <td width="14%" style="text-align: right;font-size: 16px;"><strong>Topic</strong></td>
                            <td width="2%">:</td>
                            <td width="84%"><input name="topic" type="text" id="topic" size="50" required /></td>
                            
                        </tr>
                        
                        <tr>
                            <td valign="top" style="text-align: right;font-size: 16px;"><strong>Detail</strong></td>
                            <td valign="top">:</td>
                            <td><textarea name="detail" cols="51" rows="5" id="detail" required></textarea></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;font-size: 16px;"><strong>Name</strong></td>
                            <td>:</td>
                            <td><input name="name" type="text" id="name" size="50" required /></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;font-size: 16px;"><strong>Email</strong></td>
                            <td>:</td>
                            <td><input name="email" type="text" id="email" size="50" /></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            
                            <td><input class="btn btn-success" type="submit" name="Submit" value="Submit" /> 
                                <input class="btn btn-fail" type="reset" name="Submit2" value="Reset" /></td>
                        </tr>
                        <tr>
                            
                            
                        </tr>
                    </table>
                </td>
            </form>
        </tr>
    </table>
</body>

</html>
<?php 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>My Ying and Yen</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/y-y.css" rel="stylesheet">
        <style> 
        html{
                background:  black;
            }
        </style>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div class="col-lg-10 col-lg-offset-1">
            <div class="well">
                    <form role="form">
                  <div style="text-align: center"><h4>Sign Up</h4>
                  <div class="form-group">
                    <label for="username1">Username</label>
                    <input type="text" class="form-control" name="username1" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="name1">Name</label>
                    <input type="text" class="form-control" name="name1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="Password1">Password</label>
                    <input type="password" class="form-control" name="Password1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="Password1"> Confirm Password</label>
                    <input type="password" class="form-control" name="Password2" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="Password1">Birthday xx-xx-xxxx</label>
                    <input type="text" class="form-control" name="bday" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="Password1">Address - City - Zip</label>
                    <input type="text" class="form-control" name="addr" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="phoneNum">Phone Number 7083739238</label>
                    <input type="text" class="form-control" name="phoneNum" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-default pull-right">Submit</button>
                  <ul class="pagination">
                  <li><a href="quiz1.php">&laquo;</a></li>
                  <li><a href="signIn.php">0</a></li>
                  <li><a href="quiz1.php">1</a></li>
                  <li><a href="quiz2.html">2</a></li>
                  <li><a href="quiz3.html">3</a></li>
                  <li><a href="quiz4.html">4</a></li>
                  <li><a href="quiz5.html">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                  </ul>  
                <?php
                    if (!$link = mysql_connect('127.0.0.1:3306', 'root', 'Goodgirl21!')) {
                        echo 'Could not connect to mysql';
                        exit;
                    }

                    if (!mysql_select_db('yinyangusers', $link)) {
                        echo 'Could not select database';
                        exit;
                    }

                    $sql    = 'SELECT * FROM usersinfo';
                    $result = mysql_query($sql, $link);

                    if (!$result) {
                        echo "DB Error, could not query the database\n";
                        echo 'MySQL Error: ' . mysql_error();
                        exit;
                    }                    
                    $username = $_GET["username1"];
                    $name = $_GET["name1"];
                    $password1 = $_GET["Password1"];
                    $password2 = $_GET["Password2"];
                    $bday = $_GET["bday"];
                    $addr = $_GET["addr"];
                    $phoneNum = $_GET["phoneNum"];

                    /**************************************
                    *  This function checks if the require  
                    *  inputs are put inside the function.
                    ***************************************/
                    if(!$username || !$name || !$password1 || !$password2){
                        echo "<div style='background: red'> You did not fill out the require inputs</div>";
                    }
                    elseif($password1 != $password2){
                        echo "<div style='background: red'> Password does not match</div>";
                    }
                    else{
                        $strSQL = "INSERT INTO usersinfo(";
                        $strSQL = $strSQL . "username, ";
                        $strSQL = $strSQL . "name, ";
                        $strSQL = $strSQL . "password, ";
                        $strSQL = $strSQL . "birthday, ";
                        $strSQL = $strSQL . "address, ";
                        $strSQL = $strSQL . "Phone_number) ";
                        $strSQL = $strSQL . "VALUES(";
                        $strSQL = $strSQL . "'$username', ";
                        $strSQL = $strSQL . "'$name', ";
                        $strSQL = $strSQL . "'$password1', ";
                        $strSQL = $strSQL . "'$password2', ";
                        $strSQL = $strSQL . "'$bday', ";
                        $strSQL = $strSQL . "'$addr', ";
                        $strSQL = $strSQL . "'$phoneNum' )";
                        mysql_query($strSQL) or die (mysql_error());
	               }
                   
                ?>
                  
                  
                </div>
                </form>
            </div>
        </div>
    </body>
</html>
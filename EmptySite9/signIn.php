
<?php 
    /*********************************
      This connects all of the pages 
      together, allowing users input
      to be taken to different pages. 
    ***********************************/
    session_start();
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
                <!--------------------------- 
                -  Form for all of the users
                -  registration information
                ----------------------------->
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
                    <label for="bday">Birthday YYYY-MM-DD</label>
                    <input type="text" class="form-control" name="bday" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="addr">Address - City - Zip</label>
                    <input type="text" class="form-control" name="addr" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="phoneNum">Phone Number 7083739238</label>
                    <input type="text" class="form-control" name="phoneNum" placeholder="Password">
                  </div>
                  <div class="form-group">
                      <label for="gender">Gender</label>
                      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
                      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
                  </div>
                  <button type="submit" class="btn btn-default pull-right">Submit</button>
                  <ul class='pagination'>
                      <li><a href='index.php'>&laquo;</a></li>
                      <li><a href='signIn.php'>0</a></li>
                      <li><a href='quiz1.php'>1</a></li>
                      <li><a href='quiz2.php'>2</a></li>
                      <li><a href='quiz3.php'>3</a></li>
                      <li><a href='quiz4.php'>4</a></li>
                      <li><a href='quiz5.php'>5</a></li>
                      <li><a href='quiz1.php'>&raquo;</a></li>
                  </ul>
                
                <!------------------------------
                -  Connect to the Mysql database
                -------------------------------->
                
                <?php
                    
                    $mysqli = new mysqli("127.0.0.1", "root", "Goodgirl21!", "yinyangusers", 3306);
                    if ($mysqli->connect_errno) {
                        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                    }

                    /************************************
                    *  This is what grabs the users input
                    *  and saves it to the session 
                    *
                    *************************************/
                    $username = $_GET["username1"];
                    $_SESSION["username"] = $username;
                    $name = $_GET["name1"];
                    $_SESSION["name1"] = $name;
                    $password1 = $_GET["Password1"];
                    $password2 = $_GET["Password2"];
                    $bday = $_GET["bday"];
                    $_SESSION["bday"] = $bday;
                    $addr = $_GET["addr"];
                    $_SESSION["addr"] = $addr;
                    $phoneNum = $_GET["phoneNum"];
                    $_SESSION["phoneNum"] = $phoneNum;
                    $gender = $_GET["gender"];
                    
                    /**************************************
                    *  This function checks if the require  
                    *  inputs are put inside the function.
                    ***************************************/
                    if(!$username || !$name || !$password1 || !$password2 || !$bday || !$addr || !$phoneNum){
                        echo "<div class='alert alert-danger' role='alert'><b>ERROR!</b>You did not fill out the require inputs</div>";
                    }
                    elseif($password1 != $password2){
                        echo "<div class='alert alert-danger' role='alert'><b>ERROR!</b>Password does not match</div>";
                    }
                    else{
                        $strSQL = "INSERT INTO usersinfo(username, name, password, birthday,address, Phone_number, gender) 
                        VALUES ('$username', '$name', '$password1', '$bday', '$addr', '$phoneNum', '$gender')";
                        //echo $gender;
                        if($mysqli->query($strSQL) === TRUE){
                            echo "<div class='alert alert-success' role='alert'><b>SUCCESS!</b>Precede to next page. </div>";
                        }
                        else{
                            echo "<div class='alert alert-danger' role='alert'><b>FAIL!</b></div>";
                        }                        
	               }
                   $mysqli->close();
                ?>
                  </div>
                </form>
            </div>
        </div>
    </body>
</html>
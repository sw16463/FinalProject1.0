<?php
// define variables and set to empty values
//$nameErr = $emailErr = $genderErr = $websiteErr = "";
//$name = $email = $gender = $comment = $website = "";
$gender="";
$sixQ = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
       if (empty($_POST["firstQ"])) {
         $firstErr = "Gender is required";
       } else {
         $firstQ = test_input($_POST["firstQ"]);
       }
   
       if (empty($_POST["secQ"])) {
         $secQErr = "Gender is required";
       } else {
         $secQ = test_input($_POST["secQ"]);
       }
   
       if (empty($_POST["thirdQ"])) {
         $thirdQErr = "Gender is required";
       } else {
         $thirdQ = test_input($_POST["thirdQ"]);
       }
   
       if (empty($_POST["fourthQ"])) {
         $fourthQErr = "Gender is required";
       } else {
         $fourthQ = test_input($_POST["fourthQ"]);
       }
   
       if (empty($_POST["fifthQ"])) {
         $fifthQErr = "Gender is required";
       } else {
         $fifthQ = test_input($_POST["fifthQ"]);
       }

       if (empty($_POST["sixQ"])) {
         $sixQErr = "Gender is required";
       } else {
         $sixQ = test_input($_POST["sixQ"]);
       }
    }

    function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
?>
<?php 
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
            <div class="well" style="text-align: center">
                <h1>PERSONALITY TEST</h1>
                <div style="text-align: center">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">                   
                    <h3>Rate your opinions on the options below on a scale from 1 to 5</h3>
                    <h4><b>(1 meaning strong disagree, 3 neutral, 5 strongly agree)</b></h4>
                    <h4>You are not comfortable being at the center of attention.</h4>
                    <input type="radio" name="firstQ" value="1" <?php if (isset($firstQ) && $firstQ=="1") echo "checked";?>>1
                    <input type="radio" name="firstQ" value="2" <?php if (isset($firstQ) && $firstQ=="2") echo "checked";?>>2
                    <input type="radio" name="firstQ" value="3" <?php if (isset($firstQ) && $firstQ=="3") echo "checked";?>>3
                    <input type="radio" name="firstQ" value="4" <?php if (isset($firstQ) && $firstQ=="4") echo "checked";?>>4
                    <input type="radio" name="firstQ" value="5" <?php if (isset($firstQ) && $firstQ=="5") echo "checked";?>>5

                    <br><br>
                    <h4>You would rather come up with an action plan than deal with its implementation.</h4>
                    <input type="radio" name="secQ" value="1" <?php if (isset($secQ) && $secQ=="1") echo "checked";?>>1
                    <input type="radio" name="secQ" value="2" <?php if (isset($secQ) && $secQ=="2") echo "checked";?>>2
                    <input type="radio" name="secQ" value="3" <?php if (isset($secQ) && $secQ=="3") echo "checked";?>>3
                    <input type="radio" name="secQ" value="4" <?php if (isset($secQ) && $secQ=="4") echo "checked";?>>4
                    <input type="radio" name="secQ" value="5" <?php if (isset($secQ) && $secQ=="5") echo "checked";?>>5 
                   
                    <br><br>
                    <h4>You oftentimes get mood swings.</h4>
                    <input type="radio" name="thirdQ" value="1" <?php if (isset($thirdQ) && $thirdQ=="1") echo "checked";?>>1
                    <input type="radio" name="thirdQ" value="2" <?php if (isset($thirdQ) && $thirdQ=="2") echo "checked";?>>2
                    <input type="radio" name="thirdQ" value="3" <?php if (isset($thirdQ) && $thirdQ=="3") echo "checked";?>>3
                    <input type="radio" name="thirdQ" value="4" <?php if (isset($thirdQ) && $thirdQ=="4") echo "checked";?>>4
                    <input type="radio" name="thirdQ" value="5" <?php if (isset($thirdQ) && $thirdQ=="5") echo "checked";?>>5
                     
                    <br><br> 
                    <h4>You believe that it is always important to be in control of your environment.</h4>
                    <input type="radio" name="fourthQ" value="1" <?php if (isset($fourthQ) && $fourthQ=="1") echo "checked";?>>1
                    <input type="radio" name="fourthQ" value="2" <?php if (isset($fourthQ) && $fourthQ=="2") echo "checked";?>>2
                    <input type="radio" name="fourthQ" value="3" <?php if (isset($fourthQ) && $fourthQ=="3") echo "checked";?>>3
                    <input type="radio" name="fourthQ" value="4" <?php if (isset($fourthQ) && $fourthQ=="4") echo "checked";?>>4
                    <input type="radio" name="fourthQ" value="5" <?php if (isset($fourthQ) && $fourthQ=="5") echo "checked";?>>5
                   
                    <br><br>
                    <h4>You find it difficult to start talking when you do not yet have a clear idea in your mind.</h4>
                    <input type="radio" name="fifthQ" value="1" <?php if (isset($fifthQ) && $fifthQ=="1") echo "checked";?>>1
                    <input type="radio" name="fifthQ" value="2" <?php if (isset($fifthQ) && $fifthQ=="2") echo "checked";?>>2
                    <input type="radio" name="fifthQ" value="3" <?php if (isset($fifthQ) && $fifthQ=="3") echo "checked";?>>3
                    <input type="radio" name="fifthQ" value="4" <?php if (isset($fifthQ) && $fifthQ=="4") echo "checked";?>>4
                    <input type="radio" name="fifthQ" value="5" <?php if (isset($fifthQ) && $fifthQ=="5") echo "checked";?>>5
                   
                    <br><br>
                    <h4>Your mood can change very quickly.</h4>
                    <input type="radio" name="sixQ" value="1" <?php if (isset($sixQ) && $sixQ=="1") echo "checked";?>>1
                    <input type="radio" name="sixQ" value="2" <?php if (isset($sixQ) && $sixQ=="2") echo "checked";?>>2
                    <input type="radio" name="sixQ" value="3" <?php if (isset($sixQ) && $sixQ=="3") echo "checked";?>>3
                    <input type="radio" name="sixQ" value="4" <?php if (isset($sixQ) && $sixQ=="4") echo "checked";?>>4
                    <input type="radio" name="sixQ" value="5" <?php if (isset($sixQ) && $sixQ=="5") echo "checked";?>>5
                    <br><br>
                    <input type="submit" name="submit" value="Submit"> 
                </form>
                </div>
                <button type="submit" class="btn btn-default pull-right">Submit</button>
                <ul class="pagination">
                      <li><a href="quiz2.php">&laquo;</a></li>
                      <li><a href="signIn.php">0</a></li>
                      <li><a href="quiz1.php">1</a></li>
                      <li><a href="quiz2.php">2</a></li>
                      <li><a href="quiz3.php">3</a></li>
                      <li><a href="quiz4.php">4</a></li>
                      <li><a href="quiz5.php">5</a></li>
                      <li><a href="quiz4.php">&raquo;</a></li>
                  </ul>
                <!-------------------------------
                -  Connect to the Mysql database
                --------------------------------->
                    <?php
                    
                                $mysqli = new mysqli("127.0.0.1", "root", "Goodgirl21!", "yinyangusers", 3306);
                                if ($mysqli->connect_errno) {
                                    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                                }
                                /***********************************************************************
                                *   The below query will update the scores into the database for the user 
                                *   for the page: I_E - 13, 17
                                *                 N_S - 14,  
                                *                 T_F - 15, 18
                                *                 J_P - 16  
                                *************************************************************************/                
                                $Introvert = $firstQ + $fifthQ;
                                $Intuitive = $secQ;
                                $Feeling = $thirdQ + $sixQ;
                                $Judging = $fourthQ;
                                echo $Intuitive;
                                echo $Feeling;
                                echo $Judging;
                                $username = $_SESSION["username"];
                                echo $username;
                                $strSQL = "UPDATE personality_quiz   
                                            SET I_E_score = I_E_score + $Introvert,
                                                N_S_score = N_S_score + $Intuitive,
                                                T_F_score = T_F_score + $Feeling,
	                                            J_P_score = J_P_score + $Judging    
                                            WHERE username = '$username'";
                                           
                                if($mysqli->query($strSQL) === TRUE){
                                    echo "<div class='alert alert-success' role='alert'><b>SUCCESS!</b>Precede to next page. </div>";
                                }
                                else{
                                    echo "<div class='alert alert-danger' role='alert'><b>FAIL!</b></div>";
                                }
                                $mysqli->close();
                     ?>  
            </div>
       </div>
    </body>
     
</html>
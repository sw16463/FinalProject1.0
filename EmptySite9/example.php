<!--
/***************************************
*  This file runs test php code that will
*  eventually be transferred to the main 
***************************************/
-->

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
            <div class="well">
                <!--------------------------- 
                -  Form for all of the users
                -  registration information
                ----------------------------->
                <div style="text-align: center"><h4>Sign Up</h4>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">                   
                   <h3>Rate your opinions on the options below on a scale from 1 to 5</h3>
                   <h4><b>(1 meaning strong disagree, 3 neutral, 5 strongly agree)</b></h4>
                   <h4>You find it easy to introduce yourself to other people.</h4>
                   <input type="radio" name="firstQ" value="1" <?php if (isset($firstQ) && $firstQ=="1") echo "checked";?>>1
                   <input type="radio" name="firstQ" value="2" <?php if (isset($firstQ) && $firstQ=="2") echo "checked";?>>2
                   <input type="radio" name="firstQ" value="3" <?php if (isset($firstQ) && $firstQ=="3") echo "checked";?>>3
                   <input type="radio" name="firstQ" value="4" <?php if (isset($firstQ) && $firstQ=="4") echo "checked";?>>4
                   <input type="radio" name="firstQ" value="5" <?php if (isset($firstQ) && $firstQ=="5") echo "checked";?>>5

                   <br><br>
                   <h4>A logical decision is always the best, even when it hurts someone’s feelings.</h4>
                   <input type="radio" name="secQ" value="1" <?php if (isset($secQ) && $secQ=="1") echo "checked";?>>1
                   <input type="radio" name="secQ" value="2" <?php if (isset($secQ) && $secQ=="2") echo "checked";?>>2
                   <input type="radio" name="secQ" value="3" <?php if (isset($secQ) && $secQ=="3") echo "checked";?>>3
                   <input type="radio" name="secQ" value="4" <?php if (isset($secQ) && $secQ=="4") echo "checked";?>>4
                   <input type="radio" name="secQ" value="5" <?php if (isset($secQ) && $secQ=="5") echo "checked";?>>5 
                   
                   <br><br>
                   <h4>You are rather impatient.</h4>
                   <input type="radio" name="thirdQ" value="1" <?php if (isset($thirdQ) && $thirdQ=="1") echo "checked";?>>1
                   <input type="radio" name="thirdQ" value="2" <?php if (isset($thirdQ) && $thirdQ=="2") echo "checked";?>>2
                   <input type="radio" name="thirdQ" value="3" <?php if (isset($thirdQ) && $thirdQ=="3") echo "checked";?>>3
                   <input type="radio" name="thirdQ" value="4" <?php if (isset($thirdQ) && $thirdQ=="4") echo "checked";?>>4
                   <input type="radio" name="thirdQ" value="5" <?php if (isset($thirdQ) && $thirdQ=="5") echo "checked";?>>5
                     
                   <br><br> 
                   <h4>You need to retreat and have some “alone time” after spending some time talking to other people.</h4>
                   <input type="radio" name="fourthQ" value="1" <?php if (isset($fourthQ) && $fourthQ=="1") echo "checked";?>>1
                   <input type="radio" name="fourthQ" value="2" <?php if (isset($fourthQ) && $fourthQ=="2") echo "checked";?>>2
                   <input type="radio" name="fourthQ" value="3" <?php if (isset($fourthQ) && $fourthQ=="3") echo "checked";?>>3
                   <input type="radio" name="fourthQ" value="4" <?php if (isset($fourthQ) && $fourthQ=="4") echo "checked";?>>4
                   <input type="radio" name="fourthQ" value="5" <?php if (isset($fourthQ) && $fourthQ=="5") echo "checked";?>>5
                   
                    <br><br>
                   <h4>You are relaxed most of the time.</h4>
                   <input type="radio" name="fifthQ" value="1" <?php if (isset($fifthQ) && $fifthQ=="1") echo "checked";?>>1
                   <input type="radio" name="fifthQ" value="2" <?php if (isset($fifthQ) && $fifthQ=="2") echo "checked";?>>2
                   <input type="radio" name="fifthQ" value="3" <?php if (isset($fifthQ) && $fifthQ=="3") echo "checked";?>>3
                   <input type="radio" name="fifthQ" value="4" <?php if (isset($fifthQ) && $fifthQ=="4") echo "checked";?>>4
                   <input type="radio" name="fifthQ" value="5" <?php if (isset($fifthQ) && $fifthQ=="5") echo "checked";?>>5
                   
                    <br><br>
                   <h4>You can easily read between the lines and “get” metaphors.</h4>
                   <input type="radio" name="sixQ" value="1" <?php if (isset($sixQ) && $sixQ=="1") echo "checked";?>>1
                   <input type="radio" name="sixQ" value="2" <?php if (isset($sixQ) && $sixQ=="2") echo "checked";?>>2
                   <input type="radio" name="sixQ" value="3" <?php if (isset($sixQ) && $sixQ=="3") echo "checked";?>>3
                   <input type="radio" name="sixQ" value="4" <?php if (isset($sixQ) && $sixQ=="4") echo "checked";?>>4
                   <input type="radio" name="sixQ" value="5" <?php if (isset($sixQ) && $sixQ=="5") echo "checked";?>>5
                   <br><br>
                   <input type="submit" name="submit" value="Submit"> 
                </form>
                <?php
                // define variables and set to empty values
                $firstErr = $secondErr = $thirdErr = $fourthErr = $fifthErr = $sixErr = "";
                $firstQ = $secQ = $thirdQ = $fourthQ = $fifthQ = $sixQ = "";
                
                
                   if ($_GET["firstQ"]) {
                       $first = test_input($_POST["firstQ"]);
                     
                   } else {
                      $firstErr = "Gender is required";
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
                

                function test_input($data) {
                   $data = trim($data);
                   $data = stripslashes($data);
                   $data = htmlspecialchars($data);
                   return $data;
                }
                echo "<h2>Your Input:</h2>";
                echo $firstQ;
                echo $secQ;
                echo $thirdQ;
                echo $fourthQ;
                echo $fifthQ;
                echo $sixQ;
                ?>
            </div>
        </div>
        </div>
    </body>
</html>
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
                <h1>PERSONALITY TEST</h1>
                  <div style="text-align: center">
                  <div><h3>Rate your opinions on the options below on a scale from 1 to 5</h3><h4><b>(1 meaning strong disagree, 3 neutral, 5 strongly agree)</b></h4></div>
                  <div><h4>You find it easy to introduce yourself to other people.</h4></div>
                  <input type="radio" name="firstQ" value="1" id="myRadio">1
                  <input type="radio" name="firstQ" value="2" id="myRadio">2
                  <input type="radio" name="firstQ" value="3" id="myRadio">3
                  <input type="radio" name="firstQ" value="4" id="myRadio">4
                  <input type="radio" name="firstQ" value="5" id="myRadio">5
                  <!------------------------------------------------
                  -  Checks to see if any of the buttons were pushed    
                  -  And will add the values to the database 
                  ------------------------------------------------>

                  <?php if (isset($_POST['firstQ']) && $_POST['radio'] == '1'): ?>checked='checked'<?php endif; ?> /> 
                  <?php if (isset($_POST['firstQ']) && $_POST['radio'] == '2'): ?>checked='checked'<?php endif; ?> /> 
                  <?php if (isset($_POST['firstQ']) && $_POST['radio'] == '3'): ?>checked='checked'<?php endif; ?> /> 
                  <?php if (isset($_POST['firstQ']) && $_POST['radio'] == '4'): ?>checked='checked'<?php endif; ?> />
                  <?php if (isset($_POST['firstQ']) && $_POST['radio'] == '5'): ?>checked='checked'<?php endif; ?> />

                  <div><h4>A logical decision is always the best, even when it hurts someone’s feelings.</h4></div>
                  <input type="radio" name="secQ" value="1" id="myRadio">1
                  <input type="radio" name="secQ" value="2" id="myRadio">2
                  <input type="radio" name="secQ" value="3" id="myRadio">3
                  <input type="radio" name="secQ" value="4" id="myRadio">4
                  <input type="radio" name="secQ" value="5" id="myRadio">5

                  <div><h4>You are rather impatient.</h4></div>
                  <input type="radio" name="thirdQ" value="1" id="myRadio">1
                  <input type="radio" name="thirdQ" value="2" id="myRadio">2
                  <input type="radio" name="thirdQ" value="3" id="myRadio">3
                  <input type="radio" name="thirdQ" value="4" id="myRadio">4
                  <input type="radio" name="thirdQ" value="5" id="myRadio">5

                  <div><h4>You need to retreat and have some “alone time” after spending some time talking to other people.</h4></div>
                  <input type="radio" name="fourthQ" value="1" id="myRadio">1
                  <input type="radio" name="fourthQ" value="2" id="myRadio">2
                  <input type="radio" name="fourthQ" value="3" id="myRadio">3
                  <input type="radio" name="fourthQ" value="4" id="myRadio">4
                  <input type="radio" name="fourthQ" value="5" id="myRadio">5

                  <div><h4>You are relaxed most of the time.</h4></div>
                  <input type="radio" name="fifthQ" value="1" id="myRadio">1
                  <input type="radio" name="fifthQ" value="2" id="myRadio">2
                  <input type="radio" name="fifthQ" value="3" id="myRadio">3
                  <input type="radio" name="fifthQ" value="4" id="myRadio">4
                  <input type="radio" name="fifthQ" value="5" id="myRadio">5

                  <div><h4>You can easily read between the lines and “get” metaphors.</h4></div>
                  <input type="radio" name="sixQ" value="1" id="myRadio">1
                  <input type="radio" name="sixQ" value="2" id="myRadio">2
                  <input type="radio" name="sixQ" value="3" id="myRadio">3
                  <input type="radio" name="sixQ" value="4" id="myRadio">4
                  <input type="radio" name="sixQ" value="5" id="myRadio">5

                  <div></div>
                  <button type="submit" class="btn btn-default pull-right">Submit</button>
                  
                  
                </div>
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
                    /*$firstQ = $_POST['firstQ'];
                    $secQ = $_POST['secQ'];
                    $thirdQ = $_POST['thirdQ'];
                    $fourthQ = $_POST['fourthQ'];
                    $fifthQ = $_POST['fifthQ'];
                    $sixQ = $_POST['sixQ'];
                    echo $firstQ;
                    */
                   
                ?>
                <ul class="pagination">
                  <li><a href="quiz2.html">&laquo;</a></li>
                  <li><a href="signIn.php">0</a></li>
                  <li><a href="quiz1.php">1</a></li>
                  <li><a href="quiz2.html">2</a></li>
                  <li><a href="quiz3.html">3</a></li>
                  <li><a href="quiz4.html">4</a></li>
                  <li><a href="quiz5.html">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                  </ul>  
                </div>
               
            </div>
        </div>
    </body>
</html>
<?php 
    /*********************************
        This connects all of the pages 
        together, allowing users input
        to be taken to different pages. 
    *********************************/
    session_start();
?>

<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Simple Resume template - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    /* uses font awesome for social icons */
@import url(http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);

.page-header{
  text-align: center;    
}

/*social buttons*/
.btn-social{
  color: white;
  opacity:0.9;
}
.btn-social:hover {
  color: white;
    opacity:1;
}
.btn-facebook {
background-color: #3b5998;
opacity:0.9;
}
.btn-twitter {
background-color: #00aced;
opacity:0.9;
}
.btn-linkedin {
background-color:#0e76a8;
opacity:0.9;
}
.btn-github{
  background-color:#000000;
  opacity:0.9;
}
.btn-google {
  background-color: #c32f10;
  opacity: 0.9;
}
.btn-stackoverflow{
  background-color: #D38B28;
  opacity: 0.9;
}

/* resume stuff */

.bs-callout {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #eee;
    border-image: none;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px 1px 1px 5px;
    margin-bottom: 5px;
    padding: 20px;
}
.bs-callout:last-child {
    margin-bottom: 0px;
}
.bs-callout h4 {
    margin-bottom: 10px;
    margin-top: 0;
}

.bs-callout-danger {
    border-left-color: #d9534f;
}

.bs-callout-danger h4{
    color: #d9534f;
}

.resume .list-group-item:first-child, .resume .list-group-item:last-child{
  border-radius:0;
}

/*makes an anchor inactive(not clickable)*/
.inactive-link {
   pointer-events: none;
   cursor: default;
}

.resume-heading .social-btns{
  margin-top:15px;
}
.resume-heading .social-btns i.fa{
  margin-left:-5px;
}



@media (max-width: 992px) {
  .resume-heading .social-btn-holder{
    padding:5px;
  }
}


/* skill meter in resume. copy pasted from http://bootsnipp.com/snippets/featured/progress-bar-meter */

.progress-bar {
    text-align: left;
	white-space: nowrap;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	cursor: pointer;
}

.progress-bar > .progress-type {
	padding-left: 10px;
}

.progress-meter {
	min-height: 15px;
	border-bottom: 2px solid rgb(160, 160, 160);
  margin-bottom: 15px;
}

.progress-meter > .meter {
	position: relative;
	float: left;
	min-height: 15px;
	border-width: 0px;
	border-style: solid;
	border-color: rgb(160, 160, 160);
}

.progress-meter > .meter-left {
	border-left-width: 2px;
}

.progress-meter > .meter-right {
	float: right;
	border-right-width: 2px;
}

.progress-meter > .meter-right:last-child {
	border-left-width: 2px;
}

.progress-meter > .meter > .meter-text {
	position: absolute;
	display: inline-block;
	bottom: -20px;
	width: 100%;
	font-weight: 700;
	font-size: 0.85em;
	color: rgb(160, 160, 160);
	text-align: left;
}

.progress-meter > .meter.meter-right > .meter-text {
	text-align: right;
}


    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        /////////////////////////////////////////////////
        //  This comes with the template
        /////////////////////////////////////////////////
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
</head>
<body>
<div class="container">
<div class="resume">
    <header class="page-header">
    <h1 class="page-title"><?php echo $_SESSION["username"] ?></h1>
    <small> <i class="fa fa-clock-o"></i> Last Updated on: <time>Sunday, October 05, 2014</time></small>
  </header>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
    <div class="panel panel-default">
      <div class="panel-heading resume-heading">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-xs-12 col-sm-4">
              <figure>
                <!----------------------------------
                  -   This connects to the database
                  -   so that it can display your 
                  -   images of personality type
                 ---------------------------------->
                <?php
                    $mysqli = new mysqli("127.0.0.1", "root", "Goodgirl21!", "yinyangusers", 3306);
                    if ($mysqli->connect_errno) {
                          echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                    }
                    $username = $_SESSION["username"];
                    $sql = "SELECT total
                            FROM personality_quiz      
                            WHERE username = '$username'";
                    //echo $username;
                    $total = $mysqli->query($sql);
                    $total = $total->fetch_assoc();
                    $total = $total["total"];
                    
                    $string = "img/" . $total . ".png";
                    //echo $string;
                    echo "<img class ='img-circle img-responsive' alt='' src='$string'>";
                    echo "<h2 style='text-align: center'>$total<h2>";
                ?>
                
              </figure>
              
              <div class="row">
                <div class="col-xs-12 social-btns">
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-google">
                        <i class="fa fa-google"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-facebook">
                        <i class="fa fa-facebook"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-twitter">
                        <i class="fa fa-twitter"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-linkedin">
                        <i class="fa fa-linkedin"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-github">
                        <i class="fa fa-github"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-stackoverflow">
                        <i class="fa fa-stack-overflow"></i> </a>
                    </div>
                  
                </div>
              </div>
              
            </div>

            <div class="col-xs-12 col-sm-8">
              <ul class="list-group">
                <?php
                   //////////////////////////////////
                   //  This connects to the database
                   //  so that it can display your 
                   //  images of personality type
                   //////////////////////////////////
                    $mysqli = new mysqli("127.0.0.1", "root", "Goodgirl21!", "yinyangusers", 3306);
                    if ($mysqli->connect_errno) {
                          echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                    }
                    $username = $_SESSION["username"];
                    echo $username;
                    $sql = "SELECT *
                             FROM usersinfo     
                             WHERE username = '$username'";

                    $addr = $name1 = $phoneNum = $gender = "";
                    $result = $mysqli->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $name1 = $row["name"];
                            $addr = $row["address"];
                            $phoneNum = $row["Phone_number"];
                            $gender = $row["gender"];
                        }
                    }
                    else{
                        echo "fail";
                    }

                    //////////////////////////////////////
                    //  This fills in the users info  
                    //   fields
                    /////////////////////////////////////
                    echo "<li class='list-group-item'>";
                    echo $name1 . "</li>";
                    echo "<li class='list-group-item'>";
                    echo $addr . "</li>";
                    echo "<li class='list-group-item'><i class='fa fa-phone'></i>";
                    echo $phoneNum . "</li>";
                    echo "<li class='list-group-item'><i class='fa fa-envelope'></i>";
                    echo $gender . "</li>";
                ?>
                </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="bs-callout bs-callout-danger">
        <h4>Summary</h4>
        <?php 
            ////////////////////////////////////////////
            //    Personality types will display 
            //    under the summary 
            ////////////////////////////////////////////
            $mysqli = new mysqli("127.0.0.1", "root", "Goodgirl21!", "yinyangusers", 3306);
            if ($mysqli->connect_errno) {
                  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            $total;
            $username = $_SESSION["username"];
            $sql = "SELECT total
                    FROM personality_quiz      
                    WHERE username = '$username'";

            if($total = $mysqli->query($sql)){
                //echo "<h1>SUCCESS</h1>";
            }
            else{
                //echo "<h1>FAIL</h1>";
            }
            if($total = $total->fetch_assoc()){
                //echo "<h1>SUCCESS</h1>";
            }
            else{
                 //echo "<h1>FAIL</h1>";
            }
            
            $total = $total["total"];
            //echo $total;
            if($total == "INTP"){
                include 'profiles/analysts/intp.txt';  
            }
            elseif($total == "INTJ"){
                include 'profiles/analysts/intj.txt';  
            }
            elseif($total == "ENTJ"){
                include 'profiles/analysts/entj.txt';  
            }
            elseif($total == "ENTP"){
                include 'profiles/analysts/entp.txt';  
            }
            elseif($total == "ENFJ"){
                include 'profiles/diplomats/enfj.txt';  
            }
            elseif($total == "ENFP"){
                include 'profiles/diplomats/enfp.txt';  
            }
            elseif($total == "INFJ"){
                include 'profiles/diplomats/enfj.txt';  
            }
            elseif($total == "INFP"){
                include 'profiles/diplomats/enfp.txt';  
            }
            elseif($total == "ESFP"){
                include 'profiles/explorers/esfp.txt';  
            }
            elseif($total == "ESTP"){
                include 'profiles/explorers/estp.txt';  
            }
            elseif($total == "ISFP"){
                echo "<h4>ISFP<h4>";
                include 'profiles/explorers/isfp.txt';  
            }
            elseif($total == "ISTP"){
                echo "<h4>ISTP<h4>";
                include 'profiles/explorers/istp.txt';  
            }
             elseif($total == "ESFJ"){
                include 'profiles/sentinels/esfj.txt';  
            }
            elseif($total == "ESTJ"){
                include 'profiles/sentinels/estj.txt';  
            }
            elseif($total == "ISFJ"){
                include 'profiles/sentinels/isfj.txt';  
            }
            elseif($total == "ISTJ"){
                 echo $total;
                include 'profiles/sentinels/istj.txt';  
            }
           
            
        ?>
      </div>
     </div>

  </div>
</div>
    
</div>
<button class="button"><a href="logout.php">LOGOUT</a></button>
</div>
<script type="text/javascript"></script>
</body></html>

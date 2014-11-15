<?php 
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
                <img class="img-circle img-responsive" alt="" src="http://placehold.it/300x300">
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
                <li class="list-group-item"><?php echo $_SESSION["name1"] ?></li>
                <li class="list-group-item"><?php echo $_SESSION["addr"] ?></li>
                <li class="list-group-item"><i class="fa fa-phone"></i><?php echo $_SESSION["phoneNum"] ?></li>
                <li class="list-group-item"><i class="fa fa-envelope"></i> <?php echo $_SESSION["addr"] ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="bs-callout bs-callout-danger">
        <h4>Summary</h4>
        <?php 
            $mysqli = new mysqli("127.0.0.1", "root", "Goodgirl21!", "yinyangusers", 3306);
            if ($mysqli->connect_errno) {
                  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            $username = $_SESSION["username"];
            $sql = "SELECT *
                    FROM personality_quiz      
                    WHERE username = '$username'";
            $result = $mysqli->query($sql);

            $I_E = 0;
            $N_S = 0;
            $T_F = 0;
            $J_P = 0;
            $I_E_score = '';
            $N_S_score = '';
            $F_T_score = '';
            $J_P_score = '';

            if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()) {
                     $I_E = $row["I_E_score"];
                     $N_S = $row["N_S_score"] . "<br>";
                     $T_F = $row["T_F_score"] . "<br>";
                     $J_P = $row["J_P_score"] . "<br>";
                 }
            }
            /*$conn->close();
            */
            //echo $I_E;
            //echo $N_S;
            //echo $T_F;
            //echo $J_P;
            if( $I_E >= 15){
                $I_E_score = "I";
            }
            else{
                $I_E_score = "E";
            }
            
            if( $N_S >= 15){
                $N_S_score = "N";
            }
            else{
                $N_S_score = "S";
            }

            if( $F_T >= 25){
                $F_T_score = "F";
            }
            else{
                $F_T_score = "T";
            }

            if( $J_P >= 30){
                $J_P_score = "J";
            }
            else{
                $J_P_score = "P";
            }
            $total = $I_E_score . $N_S_score . $F_T_score . $J_P_score;
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
                include 'profiles/sentinels/istj.txt';  
            }

            
        ?>
      </div>
     </div>

  </div>
</div>
    
</div>

</div>
<script type="text/javascript"></script>
</body></html>

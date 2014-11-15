
fx
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
            include("header.php");            
        ?>
        <?php
                    /*******************************
                    *  This is checking to connect  
                    *  with the mysql database
                    *********************************/
                    
                    if (!$link = mysql_connect('127.0.0.1:3306', 'root', 'Goodgirl21!')) {
                        echo 'Could not connect to mysql';
                        exit;
                    }

                    if (!mysql_select_db('practicecs242', $link)) {
                        echo 'Could not select database';
                        exit;
                    }

                    $sql    = 'SELECT * FROM users';
                    $result = mysql_query($sql, $link);

                    if (!$result) {
                        echo "DB Error, could not query the database\n";
                        echo 'MySQL Error: ' . mysql_error();
                        exit;
                    }
                    
                    //Container for the comments
                    $comments = NULL;
                    $count = 0;
                    echo "<div class='container'>";
                        echo "<div class='col-lg-6 col-lg-offset-3'>";
                            echo "<div class='row'>";
                                echo "<div class='well'>";
                                    echo "<h4>Add your Comments Here</h4>";
                                   $comments = $_GET["comment"];
                                   if(strpos($comments, "fuck") !== false ||
                                            strpos($comments, "nigga") !== false ||
                                                strpos($comments, "bitch") !== false ||
                                                    strpos($comments, "cunt") !== false ||
                                                        strpos($comments, "fag") !== false){
                                        
                                        $badWords = array("fuck", "nigga", "bitch", "cunt", "fag");
                                        $goodWords   = array("freak", "brotha", "mannn", "GGGGGGGGGirlllFriend", "happy and loved");
                                        $comments = str_replace($badWords, $goodWords, $comments);
                                   }
                                   if($comments)
                                   {
                                        echo $comments;
                                        /**************************
                                        *  Count the number of 
                                        *  comments in database 
                                        ***************************/

                                        $query = mysql_query("select count(*) as total from users");
                                        $results = mysql_fetch_array($query);
                                        $count = $results['total'] + 1;                                        
                               
                                         /**********************
                                        *  Insert new comment 
                                        *  into the database. 
                                        ************************/   
                                        
                                        $strSQL = "INSERT INTO users(";

	                                    $strSQL = $strSQL . "idusers, ";
	                                    $strSQL = $strSQL . "userscom) ";

	                                    $strSQL = $strSQL . "VALUES(";

	                                    $strSQL = $strSQL . "'$count', ";
                                        $strSQL = $strSQL . "'$comments' )";
                                        mysql_query($strSQL) or die (mysql_error());
                                   }
                                   echo "<form action='$_PHP_SELF' method='GET'>";
                                   echo "Comment: <input type='text' name='comment' />";
                                   echo "<input type='submit' />";
                                   echo "</form>";             
                    echo "</div></div>";

                    /********************************************
                    *       This is going through the database 
                    *       to check to se
                    ********************************************/
                    
                    while ($row = mysql_fetch_assoc($result)) {
                        echo "<div class='row'><div class='well'>";
                        echo $row['userscom'];
                        $iduser = $row['idusers'];
                        $sql    = 'SELECT * FROM replies';
                        $results2 = mysql_query($sql, $link);
                        
                        while ($rows = mysql_fetch_assoc($results2)){
                            //echo $iduser . "<br/>";
                            $commentsplz = $rows["comment_id"]. "<br/>";
                            if($iduser == $rows["comment_id"]){
                                echo "<hr>";
                                echo $rows['repliescol'];
                                $query2 = mysql_query("select count(comment_id) as total from replies where comment_id = $iduser");
                                $resul = mysql_fetch_array($query2);
                                $count2 = $resul['total'] + 1;                                        
                                $reply = $_GET["replies"];
                                if(strpos($reply, "fuck") !== false ||
                                            strpos($reply, "nigga") !== false ||
                                                strpos($reply, "bitch") !== false ||
                                                    strpos($reply, "cunt") !== false ||
                                                        strpos($reply, "fag") !== false){
                                        
                                        $badWords = array("fuck", "nigga", "bitch", "cunt", "fag");
                                        $goodWords   = array("freak", "brotha", "mannn", "GGGGGGGGGirlllFriend", "happy and loved");
                                        $comments = str_replace($badWords, $goodWords, $comments);
                                   }
                                if($reply)
                                           {
                                                /**********************
                                                *  Insert new comment 
                                                *  into the database. 
                                                ************************/                                      
                                                

                                                $strSQL = "INSERT INTO replies(";

	                                            $strSQL = $strSQL . "idreplies, ";
                                                $strSQL = $strSQL . "repliescol, ";
	                                            $strSQL = $strSQL . "comment_id) ";

	                                            $strSQL = $strSQL . "VALUES(";

	                                            $strSQL = $strSQL . "'$count2', ";
                                                $strSQL = $strSQL . "'$reply', ";
                                                $strSQL = $strSQL . "'$iduser' )";
                                                mysql_query($strSQL) or die (mysql_error());
                                           }
                                   }
                            }
                        $commentID += 1;
                        echo "<form action='$_PHP_SELF' method='GET' style='margin-left: 200px'>";
                        echo "Replies: <input  type='text' name='replies'/>";
                        echo "<input type='submit' />";
                        echo "</form>";
                        echo "</div></div>";                        
                    }
                    mysql_free_result($result);
                    mysql_free_result($results2);
                    mysql_free_result($results);
                    ?>
            </div>
        </div>
    </body>
</html>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
            $mysqli = new mysqli("localhost", "my_user", "my_password", "world");

            /* check connection */
            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }

            $query = "INSERT INTO usersinfo VALUES (NULL, 'Stuttgart', 'DEU', 'Stuttgart', 617000)";
            $mysqli->query($query);

            $mysqli->close();
        ?>
        
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <title>Dashboard</title>
</head>
<body>
    <div class="jumbotron">
        <div class="container container-fluid">
            <h2><i class="fas fa-user"></i> USER DASHBOARD</h2>
        </div>
    </div>
 


    <?php
       define("DB_HOST","localhost"); 
        define("DB_USER","id10023015_dmrcproject");
        define("DB_PASSWORD","dmrcproject@2019");
        define("DB_DATABASE","id10023015_dmrc");
     
        $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
       
    
     
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
     
    // Attempt select query execution
    $sql = "SELECT * FROM login_info";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<div class='container container-fluid'>";
                echo "<div class='table-responsive-sm'>";
                    echo "<table class='table table-striped table-hover'>";
                echo "<caption>List of users</caption>";
                echo "<thead>";
                    echo "<tr class='bg-info'>";
                        echo "<th>Id</th>";
                        echo "<th>Username</th>";
                        echo "<th>Password</th>";
                        echo "<th>Email</th>";
                        echo "<th>Profile</th>";
                        echo "<th>Sign</th>";
                    echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
            echo "</table>";
                echo "</div>";
            echo "</div>";
            // Free result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
     
    // Close connection
    mysqli_close($link);
    ?>

</body>
</html>
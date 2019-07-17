<?php include 'header.php' ?>

            <div class="col-lg-8">
                <?php 
                    
                    include 'connection.php';

                    // attempting selection from db
                    $sql1 = "SELECT login_info.id, login_info.username, login_info.password, login_info.email, volleyupload.photo, volleyupload.photo FROM user LEFT JOIN volleyupload ON user.id = volleyupload.id";

                    if ($result = mysqli_query($link, $sql1)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<div class='container container-fluid'>";
                                echo "<div class='table-responsive-sm'>";
                                    echo "<caption class='table'>List of user's login info</caption>";
                                    echo "<table class='table table-striped table-hover'>";
                                        echo "<thead>";
                                            echo "<tr style='background: #2d43'>";
                                                echo "<th>Id</th>";
                                                echo "<th>Username</th>";
                                                echo "<th>Password</th>";
                                                echo "<th>Email</th>";
                                                echo "<th>Profile</th>";
                                                echo "<th>Sign</th>";
                                            echo "</tr>";
                                        echo "</thead>";
                                    echo "<tbody>";

                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td>" . $row['username'] . "</td>";
                                            echo "<td>" . $row['password'] . "</td>";
                                            echo "<td>" . $row['email'] . "</td>";
                                            echo "<td><a href='" . $row['photo'] . "'>profile picture</a></td>";
                                            echo "<td><a href='" . $row['photo'] . "'>signature</a></td>";
                                        echo "</tr>";
                                    }
                                    echo "</tbody>";
                                    echo "</table>";
                                echo "</div>";
                            echo "</div>";

                            // Free result set
                            mysqli_free_result($result);
                        }

                        else {
                            echo "No records matching your query were found.";
                        }
                    }

                    else {
                        echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
                    }

                    // Close Connection
                    mysqli_close($link);
                ?>
            </div>
        </div>
    </div>
<br><br>
<?php include 'footer.php' ?>
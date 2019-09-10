
<?php include 'header.php' ?>
<?php include 'jumbo-nav.php' ?>

<div class="col-lg-8">
                <?php 
                    
                    include 'connection.php';

                    // attempting selection from db
                    $sql1 = "SELECT * FROM personal_info";

                    if ($result = mysqli_query($link, $sql1)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<div class='container container-fluid'>";
                                echo "<div class='table-responsive-sm'>";
                                    echo "<caption>List of user's personal info</caption>";
                                    echo "<table class='table'>";
                                        echo "<thead class='grey'>";
                                            echo "<tr>";
                                                echo "<th>Id</th>";
                                                echo "<th>Name</th>";
                                                echo "<th>Father's Name</th>";
                                                echo "<th>Mother's Name</th>";
                                                echo "<th>Age</th>";
                                                echo "<th>Sex</th>";
                                                echo "<th>AD</th>";
                                            echo "</tr>";
                                        echo "</thead>";
                                    echo "<tbody>";

                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . $row['fname'] . "</td>";
                                            echo "<td>" . $row['mname'] . "</td>";
                                            echo "<td>" . $row['age'] . "</td>";
                                            echo "<td>" . $row['sex'] . "</td>";
                                            echo "<td>" . $row['ad'] . "</td>";
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
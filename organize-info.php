<?php include 'header.php' ?>
<?php include 'jumbo-nav.php' ?>

<div class="col-lg-8">
                <?php 
                    
                    include 'connection.php';

                    // attempting selection from db
                    $sql1 = "SELECT * FROM organizational_info";

                    if ($result = mysqli_query($link, $sql1)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<div class='container container-fluid'>";
                                echo "<div class='table-responsive-sm'>";
                                    echo "<caption>List of user's organizational info</caption>";
                                    echo "<table class='table'>";
                                        echo "<thead class='grey'>";
                                            echo "<tr>";
                                                echo "<th>Id</th>";
                                                echo "<th>UG Name</th>";
                                                echo "<th>UG Branch</th>";
                                                echo "<th>UG Org.</th>";
                                                echo "<th>EX Words</th>";
                                                echo "<th>EX Time</th>";
                                                echo "<th>Hobbies</th>";
                                            echo "</tr>";
                                        echo "</thead>";
                                    echo "<tbody>";

                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td>" . $row['ug_name'] . "</td>";
                                            echo "<td>" . $row['ug_branch'] . "</td>";
                                            echo "<td>" . $row['ug_org'] . "</td>";
                                            echo "<td>" . $row['ex_words'] . "</td>";
                                            echo "<td>" . $row['ex_time'] . "</td>";
                                            echo "<td>" . $row['hobbies'] . "</td>";
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
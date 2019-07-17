<?php include 'header.php' ?>

<div class="col-lg-8">
                <?php 
                    
                    include 'connection.php';

                    // attempting selection from db
                    $sql1 = "SELECT * FROM contact_info";

                    if ($result = mysqli_query($link, $sql1)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<div class='container container-fluid'>";
                                echo "<div class='table-responsive-sm'>";
                                    echo "<caption>List of user's contact</caption>";
                                    echo "<table class='table table-striped table-hover'>";
                                        echo "<thead>";
                                            echo "<tr style='background: #2d43'>";
                                                echo "<th>Id</th>";
                                                echo "<th>Alternate Email</th>";
                                                echo "<th>Mobile no.</th>";
                                                echo "<th>Telephone no.</th>";
                                                echo "<th>State</th>";
                                                echo "<th>City</th>";
                                                echo "<th>Pin code</th>";
                                            echo "</tr>";
                                        echo "</thead>";
                                    echo "<tbody>";

                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td>" . $row['alt_email'] . "</td>";
                                            echo "<td>" . $row['mob_no'] . "</td>";
                                            echo "<td>" . $row['tphone_no'] . "</td>";
                                            echo "<td>" . $row['state'] . "</td>";
                                            echo "<td>" . $row['I_city'] . "</td>";
                                            echo "<td>" . $row['pin_code'] . "</td>";
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
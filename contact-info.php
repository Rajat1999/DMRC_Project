<?php include 'header.php' ?>
<?php include 'jumbo-nav.php' ?>

<div class="col-lg-8">
                <?php 
                    
                    include 'connection.php';

                    // attempting selection from db
                    $sql1 = "SELECT * FROM contact_info";

                    if ($result1 = mysqli_query($link, $sql1)) {
                        if (mysqli_num_rows($result1) > 0) {
                            echo "<div class='container container-fluid'>";
                                echo "<div class='table-responsive-sm'>";
                                    echo "<caption>List of user's contact</caption>";
                                    echo "<table class='table'>";
                                        echo "<thead class='grey'>";
                                            echo "<tr>";
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

                                    while ($row = mysqli_fetch_array($result1)) {
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
                            mysqli_free_result($result1);
                        }

                        else {
                            echo "No records matching your query were found.";
                        }
                    }

                    // else {
                    //     echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
                    // }

                    // Close Connection
                    mysqli_close($link);
                ?>
            </div>
        </div>

        <!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1muBX42d4amiojsSkO2QHvUrr3RDCMKK_" width="640" height="480"></iframe> -->

        <!-- <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="400" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Metro%20bhawan&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://www.enable-javascript.net">enable-javascript.net</a>
            </div>
            <style>.mapouter{position:relative;text-align:right;height:300px;width:400px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:400px;}</style>
        </div> -->

        <!-- // echo '<div class="map">';
                                //     echo '<div class="mapouter">';
                                //         echo '<div class="gmap_canvas">';
                                //             echo '<iframe width="400" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=kota'.$row['I_city'].'%20'.$row['state'].'&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>';
                                //             echo '<a href="https://www.enable-javascript.net">enable-javascript.net</a>';
                                //         echo '</div>';
                                //         echo '<style>.mapouter{position:relative;text-align:right;height:300px;width:400px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:400px;}</style>';
                                //     echo '</div>';
                                // echo '</div>'; -->

    </div>
<br><br>
<?php include 'footer.php' ?>

<?php  ?>
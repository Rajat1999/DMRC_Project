<?php 

    // include 'connection.php'; 

    $sql1 = 'SELECT contact_info.I_city FROM contact_info' ;
    $lat = array(); 
    $long = array(); 

    if ($result1 = mysqli_query($link, $sql1)) {
        if (mysqli_num_rows($result1) > 0) {
            while ($row = mysqli_fetch_array($result1)) {

                // BING MAP API stuff goes here...
     
            
                // URL of Bing Maps REST Services Locations API   
                $baseURL = "http://dev.virtualearth.net/REST/v1/Locations";  

                // Create variables for search parameters (encode all spaces by specifying '%20' in the URI)  
                $key = 'ApyPeuf1n0Mrq5n9bwPyfVkHU2rYtod9FvmLNDJlRXUNFWwXXNxFrrC5rjfvxNyT'; 
                                        
                // Store the query in a PHP variable (assuming you obtained it from the form)  
                $query = str_ireplace(" ","%20",$row['I_city']);  
                                        
                // Construct the final Locations API URI  
                // $findURL = $baseURL."/".$query."?output=xml&key=".$key;  
                $findURL = $baseURL."/".$query."?output=xml&key=".$key;  
                                        
                // get the response from the Locations API and store it in a string  
                $output = file_get_contents($findURL);  
                                        
                // create an XML element based on the XML string  
                $response = new SimpleXMLElement($output);  
                                        
                // Extract data (e.g. latitude and longitude) from the results  
                $latitude =  
                $response->ResourceSets->ResourceSet->Resources->Location->Point->Latitude;  
                $longitude =  
                $response->ResourceSets->ResourceSet->Resources->Location->Point->Longitude;

                array_push($lat, $latitude);
                array_push($long, $longitude);

                // echo '<h1>'.$latitude.','.$longitude.'</h1>';

            }

            // Free result set
            mysqli_free_result($result1);
        }

        else {
            echo "No records matching your query were found.";
        }
    }

    else {
        echo "ERROR: Could not able to execute $sql1". mysqli_error($link);
    }


    // for($x=0; $x<sizeof($lat); $x++)
    // {
    //     for($x=0; $x<sizeof($long); $x++)
    //     {
    //         echo '<h2>'.$lat[$x].','.$long[$x].'</h2>';
    //         echo "<br>";
    //     }
    // }
    

    // Close Connection
    mysqli_close($link);

?>
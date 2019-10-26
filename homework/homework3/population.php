<!doctype html>
<html>
    <head>
        <title>The 15 Most Populous Cities</title>
    </head>
    
    <body>
    
        <h2>Table Arranged By Population</h2>
        
        <table>
        <thead>
            <tr>
                <th colspan="3">
                    The 15 Most Populous Cities as of July 1, 2017
                </th>
                
            </tr>
        </thead>
        
        <tr>
            <th>Rank</th>
            <th>City, State</th>
            <th>2017 Total Population</th>
        </tr>
    
        <tbody>
        
        

    <?php
        
      
        $cityStatepopulation = ["New York, New York" => "8,622,698", 
        "Los Angeles, California" => "3,999,759", 
        "Chicago, Illinois" => "2,716,450", "Houston, Texas" => "2,312,717", 
        "Phoenix, Arizona" => "1,626,078", "Philadelphia, Pennsylvania" => "1,580,863", 
        "San Antonia,Texas" => "1,511,946", "San Diego, California"=>"1,419,516", 
        "Dallas, Texas" => "1,341,075", "San Jose, California" => "1,035,317",
        "Austin, Texas" => "950,715", "Jacksonville, Florida" => "892,062", 
        "San Francisco, California" => "884,363", "Columbus, Ohio" => "879,170",
        "Fort Worth, Texas" => "874,168"];
        
    
       
        
        
        $i = 1;
        foreach($cityStatepopulation as $cityState => $pop) {
            echo "<tr><td>" . $i++ . "</td><td>$cityState</td><td>$pop</td></tr>\n";
        }
    
      
        
    
    ?>
    
    
          </tbody>
        </table>
    
    
        <h3>Table Arranged In Alphabetical Order By City</h3>
        <table>
            <thead>
                <tr>
                    <th colspan="3">
                        The 15 Most Populous Cities as of July 1, 2017
                    </th>
                    
                </tr>
            </thead>
            
            <tr>
                <th>Rank</th>
                <th>City, State</th>
                <th>2017 Total Population</th>
            </tr>
        
            <tbody>
    
    
    <?php
    
    
        ksort($cityStatepopulation);
    
        $k = 1;
        foreach($cityStatepopulation as $cityState => $pop) {
                echo "<tr><td>" . $k++ . "</td><td>$cityState</td><td>$pop</td></tr>\n";
            }
            
    ?>
    
            </tbody>
        </table>

        
        <br>
        
        <button><a href="quote.html">Quote Form</a></button>
    
    
    </body>
    
</html>
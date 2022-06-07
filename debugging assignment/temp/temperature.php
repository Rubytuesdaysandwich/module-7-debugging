<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Temperature Converter</title>
    </head>
    <body>
    <header>
      <nav>
        <ul>
          <li>
            <a href="/temp/#">Temperature</a>
          </li>
          <li>
            <a href="../display-future value/">Future Value</a>
          </li>
          <li>
            <a href="../discount calculator/">discount calculator</a>
          </li>
        </ul>
      </nav>
    </header>
        <?php
        /* Function to convert Fahrenheit to Celsius */
        function displayCelsius($fahrenheit, $size){
            
            $celsius = 0;
            
            echo "Converting from Fahrenheit to Celsius<br />";
            
            /* Loop through the array */
            for($i=0; $i<count($fahrenheit); $i++){
                
                /* Calculate and display celsius for
                 * for all Fahrenheit temps */
                $celsius = 5/9 * ($fahrenheit[$i] - 32);
                echo "Fahrenheit = " . $fahrenheit[$i] . " Celsius = $celsius";
                echo "<br />";
            }
            
        }        
        
        /* Function to convert from Celsius to Fahrenheit */
        function displayFahrenheit($celsius, $size){
            
            $fahrenheit = 0;
            
            echo "Converting from Celsius to Fahrenheit<br />";
            
            /*Calculate and display Fahrenheit
             for each Celsius*/
            for($i=0; $i<count($celsius); $i++){
                
                $fahrenheit =  ($celsius[$i] * 9/5 +32);
                echo "Celsius = " . $celsius[$i] . " Fahrenheit = $fahrenheit";
                echo "<br />";
            }
            
        }
        
        /* Array of temperatures */
        $celsius = array(-40, 0, 100);
        $fahrenheit = array(-40, 32, 212);
        
        $size = 3; /* Array size */
        
        /* Call displayCelsius
         * Pass fahrenheit and size */
        displayCelsius($fahrenheit, $size);
        
        echo "<br /><br />";
        
        /* call displayFahrenheit
         * Pass celsius and size */
        displayFahrenheit($celsius, $size);
        
        
        ?>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Debugging</title>
  </head>
  <body><?php
  $number = 99;//assign 99 to $number
  $string = "Bug";//assign Bug to $string
  $array = array(1=>"Homepage", 2 => "About us",3 =>"services");//$array assigned to $array
  
  
var_dump($number);//dump information about the array such as type and data it is holding
var_dump($string);//dump information about the array such as type and data it is holding
var_dump($array);//dump information about the array such as type and data it is holding
  
?>
<br/>
<pre>
<?php
    //print_r(get_defined_vars());//print and return an array of all defined variables
?>
</pre>
<br/>
<?php
function say_hello_to($word){//declared the function say_hello_to
    echo "Hello {$word}!<br/>";//echo "Hello {$word}!<br/>" to the browser when the function is called.
    var_dump(debug_backtrace());//generates a backtrace of the function it is in.
}
say_hello_to('Everyone');//calling say_hello_to function 

//xdebug.org
//DBG php-debugger.com/dbg/
//FirePHP firephp.org





?></body>
</html>

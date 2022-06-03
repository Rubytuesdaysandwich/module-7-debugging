<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Debugging</title>
  </head>
  <body><?php
  $number = 99;//assign 99 to $number
  $string = "Bug";//assign bug to $string
  $array = array(1=>"Homepage", 2 => "About us",3 =>"services");//assign  array to $array
  
  
var_dump($number);//dumping information about the variable type and result
var_dump($string);//dumping information about the variable type and result
var_dump($array);//dumping information about the variable type and result
  
?>
<br/>
<pre>
<?php
    //print_r(get_defined_vars()); //array of defined variables and prints it into readable form
?>
</pre>
<br/>
<?php
function say_hello_to($word){//declared function say_hello_to
    echo "Hello {$word}!<br/>";//send Hello $word to browser
    var_dump(debug_backtrace());//shows the backtrace and folder destination giving information on say_hello_to
}
say_hello_to('Everyone');//calling the function say_hello_to
//*websites that can be useful for debugging
//xdebug.org
//DBG php-debugger.com/dbg/
//FirePHP firephp.org





?></body>
</html>

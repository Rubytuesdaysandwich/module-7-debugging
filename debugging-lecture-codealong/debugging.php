<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Debugging</title>
  </head>
  <body><?php
  $number = 99;
  $string = "Bug";
  $array = array(1=>"Homepage", 2 => "About us",3 =>"services");
  
  
var_dump($number);
var_dump($string);
var_dump($array);
  
?>
<br/>
<pre>
<?php
    //print_r(get_defined_vars());
?>
</pre>
<br/>
<?php
function say_hello_to($word){
    echo "Hello {$word}!<br/>";
    var_dump(debug_backtrace());
}
say_hello_to('Everyone');

//xdebug.org
//DBG php-debugger.com/dbg/
//FirePHP firephp.org





?></body>
</html>

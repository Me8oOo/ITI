<?php
echo phpinfo();
 echo 'display_errors = ' . ini_get('display_errors') . "<br>";

if ( ini_get('display_errors') == 1 ) {
    echo("It is all good...<br>");
}

print($_SERVER ['SERVER_PORT']);
define("min", 50);
define("max", 100);
echo min."<br>";
echo constant ("min")."<br>";
$x=max;
echo $x;


// for server
var_dump($_SERVER);
print( $_SERVER["SERVER_NAME"]);
print( $_SERVER["SERVER_ADDR"]);
print( $_SERVER["SERVER_PORT"]);
print( $_SERVER["SERVER_FILENAME"]);
print( $_SERVER["SERVER_PATH"]);
  
//for loop

for( $i = 0; $i<= 100; $i+= 10 ) {

echo ("The number is; $x <br>");
 }
  

//while loop
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
//do...while
$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

//foreach
$age = array("mohanad"=>"31", "mohamed"=>"35", "joe"=>"46");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>
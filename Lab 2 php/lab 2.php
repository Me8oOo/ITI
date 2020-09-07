<?php
// 1 
echo "If you view the page source \r\n you will find a newline ";
echo "<br>";
echo nl2br("You will find the \n newlines in this string \r\n on the
browser window.");

//2 

echo "<br>";
// hash Hello to md5
$str = "Hello";
echo md5($str);
echo "<br>";
// repeat inside "X" 13 times
echo str_repeat("Wow",13);
echo "<br>";
// remove characters from the right end of a string

$str = "Hello World!";
echo $str . "<br>";
echo chop($str,"World!");
echo "<br>";

// 3
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['REQUEST_URI'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
// 4 

$a = array(12, 45, 10, 25);
$x = array_reverse($a,true);
echo "sum(a) = " . array_sum($a) . "\n";
echo "<br>";

$b = array_sum($a) / count($a);
echo "ava(b) = " . $b . "\n";
echo "<br>";
print_r($x);
echo "<br>";



// 5 

$names = array("sara"=>"31", "john"=>"41", "walaa"=>"39","ramy"=>"40");
sort($names);
foreach($names as $value) {
    echo "value is $value <br/>";
}
echo "<br>";

$names = array("sara"=>"31", "john"=>"41", "walaa"=>"39","ramy"=>"40");
ksort($names);
foreach($names as $value) {
    echo "value is $value <br/>";
}
echo "<br>";

$names = array("sara"=>"31", "john"=>"41", "walaa"=>"39","ramy"=>"40");
arsort($names);
foreach($names as $value) {
    echo "value is $value <br/>";
}
echo "<br>";

$names = array("sara"=>"31", "john"=>"41", "walaa"=>"39","ramy"=>"40");
krsort($names);
foreach($names as $value) {
    echo "value is $value <br/>";
}
?>

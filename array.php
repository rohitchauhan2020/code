<?php
echo "this is code for index and associative array<br>";
//index array
$arr=array('first','second','third');
echo $arr[0];
echo "<br>";
echo $arr[1];
echo"<br>";
//associative array
$arr =array('rohit'=>'green','kapil'=>'red');
echo $arr['rohit'];
//using foreach loop
foreach($arr as $key => $value)
{
    echo "<br> favorite color of $key is $value";
}
// dimensional array



?>
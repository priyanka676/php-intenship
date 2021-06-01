<html>
<head>
<style>  
      body {background:  pink;} 
 </style>
<title>Associative Array</title>

<?php
$a[0]=20;
$a['c']="computer";
$a['php']="web development";
$a[20]="Twenty";
$a[60]=60.60;

$a=array(
0=>20,
"c"=>"computer",
"php"=>"web development",
20=>"Twenty",
60=>60.60
);
echo"c for ".$a['c'];
foreach($a as $value)
{
   echo"<br/>value is $value";
}
foreach($a as $key)
{
   echo"<br/>key is <b>$key</b> and value is <b> $value </b>";}
 echo "<pre>";
 print_r($a);
 echo "<pre>";
 echo"<pre>";
 var_dump($a);
 echo "<pre>";
 ?>
  </head>
</html>  
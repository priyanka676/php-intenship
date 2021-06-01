<html>
<head>
<style>  
      body {background:  yellow;} 
 </style>
<title>Numerical Array</title>
<?Php
  $a[0]="php";
  $a[1]=10;
  $a[2]=20;
  $a[3]="c";
  $a[4]="java";
  
   $a[]="php";
  $a[]=10;
  $a[]=20;
  $a[]="c";
  $a[]="java";
   $a=array(10,20,30,"php","java",30.50);
  echo $a[3];
  
  for($i=0;$i<count($a);$i++)
  {
  echo "<br/>".$a[$i];
 }
 $sum=array_sum($a);
 echo "<br/> ".$sum;
 echo "<pre>";
 print_r($a);
 echo "<pre>";
 echo"<pre>";
 var_dump($a);
 echo "<pre>";
 ?>
 </head>
 </html>
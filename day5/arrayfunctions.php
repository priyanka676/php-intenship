<html>
<head>
<style>  
      body {background: orange;} 
 </style>
<title>Array Functions</title>
<?php
    echo"<b>OUTPUT 1</b><br/>";
     $arr=array('php','java','c','c++','android');
      echo count($arr);
?>
  
  <?php
      echo"<br/><b>OUTPUT 2</b>";
      $arr=array("C","java","php","android","c","php");
      $newarr=array_count_values($arr);
      foreach($newarr as $key=>$value){
       echo"<br/>$key-<strong>$value</strong>";
	   }
    ?>
  
  <?php
      echo"<br/><b>OUTPUT 3</b><br/>";
      $myarray=array(1,2,3,4,5,6);
      echo array_sum($myarray);
  ?>
  

  <?php
     echo"<br/><b>OUTPUT 4</b><br/>";
     $myarray=array(1,2,3,4,5,6);
      echo array_product($myarray);
   ?>
  
  <?php
    echo"<br/><b>OUTPUT 5</b><br/>";
    $arr= array('java','c','c++','php','android');
    $revarr=array_reverse($arr);
    print_r($revarr);
?>  
  
   
   <?php
     echo"<br/><b>OUTPUT 7</b><br/>";
     $arr= array('java','c','c++','php','android');
    $indexofarray = array_rand($arr);
    echo $arr[$indexofarray];
   ?>  

<?php
  echo"<br/><b>OUTPUT 8</b>";
  $arr= array('java','c','c++','php','android');
  $indexofarray = array_rand($arr,2);
  
  foreach($indexofarray as $key =>$value)
  {
      echo "<br/> $key -<strong>".$arr[$value]."</strong>";
   }
?>  

<?php
  echo "<br/><b>OUTPUT 9</b><br/>";
  $arr= array('java','c','c++','php','android');
 print_r(array_unique($arr));
?>  

<?php
  echo"<br/><b>OUTPUT 10</b><br/>";
  $arr1= array('java','c','c++','php','android');
  $arr2 = array(10,20,30,40,50);
  $Newarr = array_merge($arr1,$arr2);
print_r($Newarr);
?>  
<?php
  echo "<br/><b>OUTPUT 11</b><br/>";
  $myarr= array('java','c','c++','php','android');
  $check=array_search('android',$myarr);
  echo $check;
?> 
<?php
  echo "<br/><b>OUTPUT 12</b><br/>";
  $arr= range("11","20");
   foreach($arr as $key =>$value)
   {
	   echo"<br/> $key - $value";
   }
?> 
 <?php
  echo"<br/><b>OUTPUT 13</b><br/>";
  $arr=array(74,8,40,60,80,50);
  sort($arr);
  print_r($arr);
  ?>

   <?php
  echo"<br/><b>OUTPUT 14</b><br/>";
  $arr=array(74,8,40,60,80,50);
  rsort($arr);
  print_r($arr);
  ?>
 
  <?php
  echo"<br/><b>OUTPUT 15</b><br/>";
  $arr=array(74,8,40,60,80,50);
  asort($arr);
  print_r($arr);
  ?>
  
  <?php
  echo"<br/><b>OUTPUT 16</b>";
  $arr=array(
  "apple"=>"yellow",
  "mango"=>"red",
  "banana"=>"green");
  ksort($arr);
   foreach($arr as $key =>$value)
  {
      echo "<br/> $key -$value";
   }
  ?>
  
  <?php
  echo"<br/><b>OUTPUT 17</b>";
  $arr=array(
  "apple"=>"yellow",
  "mango"=>"red",
  "banana"=>"green");
  krsort($arr);
   foreach($arr as $key =>$value)
  {
      echo "<br/> $key -$value";
   }
  ?>
  
  <?php
  echo"<br/><b>OUTPUT 18</b>";
  $myarr=array("Baseball","Football","Boxing","Tennis","Hockey");
  shuffle($arr);
   foreach($myarr as $key =>$value)
  {
      echo "<br/> $value";
   }
  ?>
  <?php
  echo"<br/><b>OUTPUT 19</b><br/>";
  $arr=array("a"=>"apple","b"=>"Banana","m"=>"mango");
  echo array_key_exists('a',$arr);
  ?>
  
  <?php
  echo"<br/><b>OUTPUT 20</b><br/>";
  $arr=array(
  "apple"=>"yellow",
  "mango"=>"red",
  "banana"=>"green");
 $uppercase=array_change_key_case($arr,CASE_UPPER);
 print_r($uppercase);
  ?>
  
  <?php
  echo"<br/><b>OUTPUT 21</b><br/>";
  $arr1=array( "apple","mango","banana");
  $arr2=array("yellow","red","green");
 $Newvar=array_combine($arr1,$arr2);
 print_r($Newvar);
  ?>
  <?php
echo"<br/><b>OUTPUT 22</b><br/>";
  $myarr=array('php','java','c','c++','android');
  echo end($myarr);
  ?>
  
  <?php
echo"<br/><b>OUTPUT 23</b><br/>";
  $name="Priyanka";
  $subject="php";
  print_r($arr);
  ?>
  
  <?php
  echo"<br/><b>OUTPUT 24</b><br/>";
      $arr=array("p"=>"Priyanka","b"=>"banana","i"=>"Information Technology");
	  $fliparray=array_flip($arr);
	  print_r($fliparray);
	  ?>
	  
	  <?php
     echo"<br/><b>OUTPUT 25</b><br/>";
      $a=array("Priyanka","php","java","c","c++","android");
	  $b=array("Priyanka","c","java","php");
	  $diff=array_diff($a,$b);
	  print_r($diff);
	  ?>
	  
	   <?php
     echo"<br/><b>OUTPUT 26</b><br/>";
      $arr1=array(0=>"Sunday",2=>"Wednesday",3=>"Friday");
	  $arr2=array(0=>"Friday",2=>"Sunday",3=>"Thursday");
	  print_r(array_intersect($arr1,$arr2));
	  ?>
	  
	  <?php
  echo"<br/><b>OUTPUT 27</b>";
  $arr=array("p"=>"Priyanka","b"=>"banana","i"=>"Information Technology");
  $myarr=array_values($arr);
   foreach($myarr as $key =>$value)
  {
      echo "<br/>$key-$value";
   }
  ?>
   <?php
     echo"<br/><b>OUTPUT 28</b><br/>";
      $a=array("php","java");
	  array_push($a,"c","c++");
	  print_r($a);
	  ?>
	   
	  <?php
     echo"<br/><b>OUTPUT 29</b><br/>";
      $a=array("php","java","c","c++");
	  array_pop($a);
	  print_r($a);
	  array_pop($a);
	  print_r($a);
	  ?>
	  
	  <?php
	    echo"<br/><b>OUTPUT 30</b><br/>";
	       $mystring="I Love PHP Programing Language";
		   $arr = explode(" ",$mystring);
		   print_r($arr);
		   ?>
		   
		    <?php
			echo"<br/><b>OUTPUT 31</b><br/>";
	       $arr=array("I","Love", "PHP ","Programing" ,"Language");
		   $mystring = implode(" ",$arr);
		   echo $mystring;
		   ?>
  </head>
  </html>
 

  
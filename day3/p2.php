<html>
<head>
 <style>  
      body {background:  yellow;} 
 </style> 
<title>Marksheet</title>

<body>

<table border="1" align="center" width="400" bgcolor="#CCCCCC" >
<u><caption><b><h1>Student Result</h1></b></caption> </u>
       
  <tr>
  <td>Display</td>
  <td>
  <?php
  $n = $_POST['fn'];
     $g = $_POST['en'];
	    $h=$_POST['ch1'];
	
      echo" My name is $n";
     echo"<br/> My Enrollment no is $g";
       echo "<br/>Branch is $h";
    $a=$_POST['txt3'];
     $b=$_POST['txt4'];
     $c=$_POST['txt5'];
	 $d=$_POST['txt6'];
     $k=$_POST['txt7'];
	 echo"<br/> C : $a";
   echo"<br/> C++ : $b";
   echo "<br/>JAVA : $c";
    echo "<br/>PHP : $d";
	 echo "<br/>ANDROID : $k";
     
      $sum= $a + $b + $c + $d + $k;
	  echo" <br/> Sum is :$sum";
	  $avg=$sum / 5.0;
	  echo" <br/> Avg is :$avg";
	   $percentage=($sum / 500.0)*100;
	  echo" <br/> percentage is: $percentage";
	  
      
  ?>
  
  <tr>
  <td>Grade</td>
  <td>
  <?php
    if($sum>=80)
	{
	    echo"Grade A";
     }
		else if($n>=50)
		{
		echo"Grade B";
		}
		else{
		    echo"Failed";
			}
  ?>
  
  </table>
  </body>
  </html>
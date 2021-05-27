
<?php

$m1=80;
$m2=70;
$m3=84;
$m4=85;
$m5=93;
$s1="PHY";
$s2= "Chem";
$s3="Maths";
$s4="English";
$s5="Hindi";

if(($m1>=0 && $m1<=100) && ($m2>=0 && $m2<=100) && ($m3>=0 && $m3<=100) && ($m4>=0 && $m4<=100) && ($m5>=0 && $m5<=100))
{
   
    $c=0;
    $marks=0;
    $sub= "";
    $dist= "";
    if($m1<33)
    {
       $c++;
       $marks=$m1;   
       $sub=$sub.$s1;
    }   
  
    if($m2<33)
     {
       $c++;
       $marks=$m2;   
       $sub=$sub.$s2;
    }
	
    if($m3<33)
     {
       $c++;
       $marks=$m3;
       $sub=$sub.$s3;   
    }
    if($m4<33)
     {
       $c++;
       $marks=$m4;   
       $sub=$sub.$s4;
    }
    if($m5<33)
     {
       $c++;
       $marks=$m5;   
       $sub=$sub.$s5;
    }
      if($m1>=75)
    {
          
       $dist=$dist.$s1;
    }   
   
     if($m2>=75)
    {
          
       $dist=$dist.$s2;
    }
     if($m3>=75)
    {
          
       $dist=$dist.$s3;
    }
    if($m4>=75)
    {
          
       $dist=$dist.$s4;
    }
    if($m5>=75)
    {
          
       $dist=$dist.$s5;
    }
   if($c==0 || ($c==1 && $marks>=28))
       {
      $per= ($m1+$m2+$m3+$m4+$m5)/5;
      if($per>33 && $per<45)
      echo "Congratulation you are pass in the third division with $per % ";
      elseif($per<60)
      echo "Congratulation you are pass in the second division with $per % ";
      else
      echo "Congratulation you are pass in first division with $per %";
      if($c==1)
      echo "You are passing by grace and grace mark is ",33-$marks," grace subject is $sub ";
      if($dist!="")
      echo "Distinction subject name is  ",$dist;
       }   
   else if($c==1)
   echo "Try again you are suppl in $sub ";
   else
    echo "Sorry you have failed try again next year subject is $sub ";   

}
else
echo "All Subject Marks should be 0 to 100";   

?>

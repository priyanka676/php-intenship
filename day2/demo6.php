<?php
  $num = 121;
  $p = $num;
  $revnum = 0;
  while($num != 0)
  {
  $revnum = $revnum * 10 + $num % 10;
  $num = (int)($num / 10);
  }
  if($revnum==$p)
  {
   echo "$p is Palindrom number";
   }
   else
   {
     echo "$p is not Palindrom number";
   }
   ?>
   
<?php
  echo "<table border='1'>";
  for($i=0;$i<11;$i++){
    echo "<tr>";
	if($i%2==0){
	echo"<td bgcolor='pink'>$i</td>";
	}else{
	echo"<td bgcolor='yellow'>$i</td>";
	}
	echo"</tr>";
	}
	echo"</table>";
	?>
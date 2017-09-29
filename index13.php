<?php
echo "<table>";
$y=1;
 For ($j=1; $j<10; $j++) {
	 echo "<tr>";
	 For ($i=1; $i<10;$i++ ){
		 echo "<td>";
		 $y=$i*$j;
		echo "$i * $j = $y</p>" ;
	echo "</td>";}
		
echo "</tr>";}
echo "</table>";
?>
<?php
$price=[120,130,150,130,180];
$sum =0;
$avg=0;
For ($i=0; $i<count($price);$i++ ) {
$sum+=$price [$i];}
		
			$avg= $sum/count($price);
			echo $avg;
?>
<?php 
function huruf($ujian1, $ujian2)
 {
 	$huruf = "error";
 	$rata2 = ($ujian1 + $ujian2) / 2;

 	if ($rata2 < 60) {
 		$huruf = "E";
 	}
 	elseif ($rata2 < 70) {
 		$huruf = "D";
 	}
 	elseif ($rata2 < 80) {
 		$huruf = "C";
 	}
 	elseif ($rata2 < 90) {
 		$huruf = "B";
 	}
 	elseif ($rata2 <= 100) {
 		$huruf = "A";
 	}

 	return $huruf;
 }
 ?>
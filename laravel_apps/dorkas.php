<?php

/* Print fibonanci series up to 12 elements. */
$num = 12;
echo"<h2>Fibonacci series using recursive function:</h2>";
echo"\n";
/* Recursive function for fibonanci series. */
function series($num){
	if($num == 0){
		return 0;
    } else if($num==1){
        return 1;
	} else {
        return(series($num-1) + series($num-2));
	}
}
/* Call Funtion. */
for($i=0; $i<$num; $i++){
	echo series($i);
	// echo"\n";
}

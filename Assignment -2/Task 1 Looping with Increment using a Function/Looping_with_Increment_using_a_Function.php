<?php
function forloop($startIndex, $endIndex, $step){
	for($i = $startIndex; $i <= $endIndex; $i += 1)
	{
		if($i%$step==0){
			if($i==$endIndex){
				echo $i;
			} else {
				echo $i.", ";
			}
		}
	}
}
forloop(1,20,2);
echo "\n";
function whileloop($startIndex, $endIndex, $step){
	$i=$startIndex;
	while($i<=$endIndex)
	{
		if($i%$step==0){
			if($i==$endIndex){
				echo $i;
			} else {
				echo $i.", ";
			}
		}
		$i++;
	}
}
whileloop(1,20,2);
echo "\n";
function dowhileloop($startIndex, $endIndex, $step){
	$i=$startIndex;
	do {
		if($i%$step==0){
			if($i==$endIndex){
				echo $i;
			} else {
				echo $i.", ";
			}
		}
		$i++;
	}while($i<=$endIndex);
}
dowhileloop(1,20,2);
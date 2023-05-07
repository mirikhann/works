<?php
// Enter your code here, enjoy!

function divisors($val)
{
	$arr = [];
	for($i=2; $i<=$val*0.5; $i++)
	{
		if($val%$i==0 && ($i%2!=0 || $i==2)){
			$arr[]=$i;
		}
	}
	
	if($val%$val==0 && $val%2!=0){
		$arr[]=$val;
	}

	return $arr;
}

function divisors2($val){
	
	$arr = [];
	
	for($i=2; $i<=$val; $i++){
		$check = 0;
		for($j=2; $j<$i; $j++){
			if($i%$j==0){
				$check = 1;
				break;
			}
		}
		if(!$check){
			$arr[] = $i;
		}
	}
	return $arr;
}


function divide($val)
{
	$divisors = divisors($val);
	$ind = 0;
	$divideVal = $divisors[$ind];
	$arr = [];
	while($val%$divideVal==0 && $val!=1)
	{
		$arr[] = $divideVal;
		$valNew = $val/$divideVal;
		if($valNew%$divideVal!=0)
		{
			$divideVal = $divisors[$ind+1];
		}
		
		$val = $valNew;
		
	}

	return $arr;
}


function ebob($a,$b){
	$dividedA = divide($a);
	$dividedB = divide($b);
	
	$arr = [];
	foreach($dividedA as $keyA => $valA){
		foreach($dividedB as $keyB => $valB){
			if($valA == $valB && $keyA==$keyB){
				$arr[]=$valA;
			}
		}
	}
	
	return array_reduce($arr, function($v1,$v2){
		return $v1*$v2;
	},1);
}


function ekob ($a,$b){
	$dividedA = divide($a);
	$dividedB = divide($b);

	$large = $a>$b?$a:$b;
	$largeArr = $a>$b?$dividedA:$dividedB;
	$small = $a>$b?$b:$a;
	$smallArr = $a>$b?$dividedB:$dividedA;
	
	
	foreach($largeArr as $keyL => $valL){
		foreach($smallArr as $keyS => $valS){
			if($valL == $valS && $keyL==$keyS){
				unset($smallArr[$keyS]);
			}
		}
	}
	
	
	return array_reduce($smallArr, function($v1,$v2){
		return $v1*$v2;
	},$large);
	
}


print ekob(36,52);
// print ebob(36,52);

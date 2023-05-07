function divisors($val){
	
	if($val<=2){
		return [2];
	}
	
	$arr = [2];
	
	for($i=3; $i<=$val; $i+=2){
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
	if($val<=2){
		return [2];
	}
	
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

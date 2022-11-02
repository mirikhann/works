<?php


function generateNumberWithComa($str){


$q = strlen($str)%3;

$strNew = "";

for($i=0,$d=0; $i<=strlen($str)-1; $i++, $d++)
{
	if($q!=0 && $i==$q){
		
		$strNew.=",".$str[$i];
		$d=0;
	}else{
		if($d%3==0 && $d!=0)
		{
			$strNew.=',';
		}
		$strNew.=$str[$i];
	}
}

  return $strNew;
}

print generateNumberWithComa("21832663");


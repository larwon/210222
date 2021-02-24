<?
	for ($i=$num1; $i<=$num2; $i++)
	{
		$sum = $sum + $i;
		if ( $i % 2 == 0)
		{
			$sum2 = $sum2 + $i;
		}
		if ($i % 5 == 0)
		{
			$sum5 = $sum5 + $i;
		}
	}

	$tot = $sum2 + $sum5;

	echo "시작 숫자 : $num1 , 끝에 숫자 : $num2 <br>";
	echo "2의 배수의 합 : $sum2 , 5의 배수의 합 : $sum5 <br>";
	echo "2의 배수와 5의 배수의 합 : $tot";
 
?>
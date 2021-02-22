<?
	for ($i=$num1; $i<=$num2; $i++)
	{
		$sum = $sum + $i;
		if ( $i % 2 == 0)
		{
			$sum1 = $sum1 + $i;
		}
	}

	echo "시작 숫자 : $num1 , 끝에 숫자 : $num2 <br>";
	echo "총 합계 : $sum , 짝수의 합 : $sum1";
?>
<?
	for ($i=$num1; $i<=$num2; $i++)
	{
		$sum = $sum + $i;
		if ( $i % 2 == 0)
		{
			$sum1 = $sum1 + $i;
		}
	}

	echo "���� ���� : $num1 , ���� ���� : $num2 <br>";
	echo "�� �հ� : $sum , ¦���� �� : $sum1";
?>
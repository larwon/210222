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

	echo "���� ���� : $num1 , ���� ���� : $num2 <br>";
	echo "2�� ����� �� : $sum2 , 5�� ����� �� : $sum5 <br>";
	echo "2�� ����� 5�� ����� �� : $tot";
 
?>
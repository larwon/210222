<?
	$eng_score = array(90, 95, 81, 75, 60);

	$count = 0;
	$sum = 0;

	for ($i=0; $i<=4; $i++)
	{
		$sum = $sum + $eng_score[$i];
		$count = $count + 1;
	}
	
	$avg = $sum / $count;

	echo "$count";
	echo "�� �հ� : $sum ��";
	echo "��� : $avg ��";

?>
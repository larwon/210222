<?
	if ($age < 3)
	{
		$fee = "����";
	}
	elseif ((($age >= 3) && ($age <= 13)) || (($after == "yes")))
	{
		$fee = "4,000��";
	}
	elseif ((($age >= 14) && ($age <= 18)) || ($age >= 70) || ($bokgi == "yes") || ($yougong == "yes"))
	{
		$fee = "8,000��";
	}
	else
	{
		$fee = "10,000��";
	}

	echo "����ī�� ���� : $bokgi <br>";
	echo "������������ ���� : $yougong <br>";
	echo "17�� 10�� ���� ���� : $after <br>";
	echo "���� : $age <br><br>";
	echo "����� : $fee";

?>
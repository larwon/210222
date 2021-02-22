<?
	if ($age < 3)
	{
		$fee = "무료";
	}
	elseif ((($age >= 3) && ($age <= 13)) || (($after == "yes")))
	{
		$fee = "4,000원";
	}
	elseif ((($age >= 14) && ($age <= 18)) || ($age >= 70) || ($bokgi == "yes") || ($yougong == "yes"))
	{
		$fee = "8,000원";
	}
	else
	{
		$fee = "10,000원";
	}

	echo "복지카드 소지 : $bokgi <br>";
	echo "국가유공자증 소지 : $yougong <br>";
	echo "17시 10분 이후 입장 : $after <br>";
	echo "나이 : $age <br><br>";
	echo "입장료 : $fee";

?>
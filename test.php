<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<?
	$connect = mysql_connect('localhost', 'root', 'apmsetup');
	mysql_select_db('test_db', $connect);

	$sql = "select * from testtable";
	$result = mysql_query($sql);

	$number = 1;	

	
?>

/*<h2>▶ mysql_fetch_array()를 이용한 데이터 읽기</h2>
<table width= "800" border="1" cellpadding="10">
<tr align="center">
<td bgcolor="#cccccc">일련번호</td>
<td bgcolor="#cccccc">아이디</td>
<td bgcolor="#cccccc">이름</td>
<td bgcolor="#cccccc">우편번호</td>
<td bgcolor="#cccccc">주소</td>
<td bgcolor="#cccccc">전화번호</td>
<td bgcolor="#cccccc">나이</td>
</tr>
<?
echo "strlen($result)";
for ($check =0; $check==strlen($result); check == check+1){
	echo "check";
	echo "123123";
}
for ($num=0; $row = mysql_fetch_array($result); $num+=1){
	echo "mysql_fetch_array($result)";
/*while ( $row = mysql_fetch_array($result))

echo ("
<tr>
<td> $number </td>
<td> $row[id] </td>
<td> $row[name] </td>
<td> $row[post_num] </td>
<td> $row[address] </td>
<td> $row[tel] </td>
<td> $row[age] </td>
</tr>
");*/
echo ("
<tr>
<td> $number </td>
<td> $row[id] </td>
<td> $row[name] </td>
<td> $row[post_num] </td>
<td> $row[address] </td>
<td> $row[tel] </td>
<td> $row[age] </td>
</tr>
");
$number++;
}

mysql_close();
?>
</table>*/
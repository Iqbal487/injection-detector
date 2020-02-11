<?php
include('DBConnection.php');
function split($sql)
{
	$sqlIQuery = (explode(" ",$sql));
	$sqlIQuery = count($sqlIQuery);
	return $sqlIQuery;
}



$ori_Query = "SELECT `user_id`, `user_name`, `pass_word`, `Cell_no`, `address`, `status` FROM user WHERE user_id = '01'";

$ori_Query_Size = split($ori_Query);

//This line is for counting execution time - Normal Query

$Normal_msc = microtime(true);
mysqli_query($bd,$ori_Query);
$NOrmal_querymsc = microtime(true)-$Normal_msc;
//echo $msc . ' s'; // in seconds
echo 'Normal-Query Exc Time'.number_format(($Normal_msc * 1000),2) . ' ms';


$sql_In_Query_Size = split("SELECT `user_id`, `user_name`, `pass_word`, `Cell_no`, `address`, `status` FROM user WHERE user_id = '105' or '1=1'");
//This line is for counting execution time - Ijected query
echo "<br>";
$Inj_msc = microtime(true);
mysqli_query($bd,$sql_In_Query_Size);
$Injected_msc = microtime(true)-$Inj_msc;
//echo $msc . ' s'; // in seconds
echo  'Injected Query ExC time'.number_format(($Inj_msc * 1000),2) . ' ms'; 


if($NOrmal_querymsc != $Injected_msc)
{	echo "<br>";
	echo "SQL Injection Detected";
	exit();
}
else
{
	echo "No SQL Injection";
}

?>

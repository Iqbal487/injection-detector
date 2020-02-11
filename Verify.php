<?php
include('DBConnection.php');
session_start();
$UserId = $_POST['user_id'];
$passWord = $_POST['pass_word'];

//echo $first_name;
//echo $last_name;

function split($sql)
{
	$sqlIQuery = (explode(" ",$sql));
	$sqlIQuery = count($sqlIQuery);
	return $sqlIQuery;
}



$ori_Query = "SELECT `user_id`, `user_name`, `pass_word`, `Cell_no`, `address`, `status`
			  FROM user
			  WHERE user_id = '$UserId'
			  AND pass_word = '$passWord'";


$defualt_size = 20;
$default_execution_time = 0.19; //aproximately

$ori_Query_Size = split($ori_Query);



//This line is for counting execution time - Ijected query
echo "<br>";
$Inj_msc = microtime(true);
mysqli_query($bd,$ori_Query);
$Injected_msc = microtime(true)-$Inj_msc;
//echo $msc . ' s'; // in seconds
$Query_Injected_time = number_format(($Injected_msc * 1000),2);

//echo  ' Query ExC time'.number_format(($Injected_msc * 1000),2) . ' ms'; 


if($ori_Query_Size > $defualt_size && $Query_Injected_time > $default_execution_time)
{
// {	echo "<br>";
// 	echo "SQL Injection Detected";
	$_SESSION['Time'] = $Query_Injected_time;
	$_SESSION['Injection_letgth'] = $ori_Query_Size; 
	require("MainPage.php");
}
else
{
	// echo "<br>";
	// echo "No SQL Injection";
	// echo "<br>";
	 $_SESSION['Time'] = $Query_Injected_time;
	 $_SESSION['Injection_letgth'] = $ori_Query_Size;
	 require("Normal.php");


}




?>
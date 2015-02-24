<?php
include ('config.php');

$settings = $db->prepare("SELECT * FROM `prize_settings`");
$settings ->execute();
$allsettings = $settings->fetch(PDO::FETCH_ASSOC);
$prize1 = $allsettings['prize1'];
$prize2 = $allsettings['prize2'];
$prize3 = $allsettings['prize3'];
$noprize = $allsettings['noprize'];
$gameover  = $allsettings['gameover'];
$third  = $allsettings['third'];
$second = $allsettings['second'];
$first = $allsettings['first'];
$number = $_REQUEST['from'];


function sms_send ($number,$message)
{

GLOBAL $hash;


$flash = "no";
//set POST variables 
$url = 'http://www.smspi.co.uk/api/send.php'; 
$fields = array('to' => ($number), 'message' => ($message), 'hash' => ($hash), 'flash' => ($flash) ); 
//open connection 
$ch = curl_init(); 
//set the url, number of POST vars, POST data 
curl_setopt($ch,CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_REFERER, 'http://www.smspi.co.uk/send/'); 
curl_setopt($ch,CURLOPT_POST, count($fields)); 
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields); 
//execute post 
$result = curl_exec($ch); 
//close connection 
curl_close($ch); 
echo ('<center>'.$result.'</center>'); 
}


function insert ($number)
{
	GLOBAL $db;
	$insert = $db->prepare("INSERT INTO `prize` (`number`) VALUES (:number)");
	$insert->bindParam(':number', $number);
	$insert->execute();
	$check = $db->prepare("SELECT `id` FROM `prize`");
	$check->execute();
	$count = $check->rowCount();
	
	return $count;
}
function firstplace ($first,$prize1,$number)
{
	GLOBAL $db;
	$insert = $db->prepare("UPDATE `prize` SET `winner`= '1' WHERE `id` = :first");
	$insert->bindParam(':first', $first);
	$insert->execute();
	sms_send ($number,$prize1);
	exit();
}
function secondplace ($second,$prize2,$number)
{
	GLOBAL $db;
	$insert = $db->prepare("UPDATE `prize` SET `winner`= '2' WHERE `id` = :second");
	$insert->bindParam(':second', $second);
	$insert->execute();
	sms_send ($number,$prize2);
	exit();
}
function thirdplace ($third,$prize3,$number)
{
	GLOBAL $db;
	$insert = $db->prepare("UPDATE `prize` SET `winner`= '3' WHERE `id` = :third");
	$insert->bindParam(':third', $third);
	$insert->execute();
	sms_send ($number,$prize2);
	exit();
}
function lost ($number,$noprize)
{
sms_send ($number,$noprize);
exit();	
}
$count = insert ($number);
echo "Current Entries ".$count."\n";

//Finished
if ($count > $first)
{
	
	sms_send ($number,$gameover);
	exit();
}
//Lost



//3rd
if ($count == $third)
{
	thirdplace ($third,$prize3,$number);
}

//2nd
if ($count == $second)
{
	secondplace ($second,$prize2,$number);
}

//1st
if ($count == $first)
{
	firstplace ($first,$prize1,$number);
}
if(($number != $first) and ($number != $second) and ($number != $third))
{
 lost($number,$noprize);
}


	
?>
<?php
include ('config.php');

$clear = $db->prepare("TRUNCATE TABLE `prize`");
$clear ->execute();

$firstmsg = $_POST['firstmsg'];
$secondmsg = $_POST['secondmsg'];
$thirdmsg = $_POST['thirdmsg'];
$lostmsg = $_POST['lostmsg'];
$gameovermsg = $_POST['gameovermsg'];
$thirdvalue = $_POST['thirdvalue'];
$secondvalue = $_POST['secondvalue'];
$firstvalue = $_POST['firstvalue'];



//INSERT SETTINGS
$insert = $db->prepare("UPDATE `prize_settings` SET `prize1`=:firstmsg,`prize2`=:secondmsg,`prize3`=:thirdmsg,`noprize`=:lostmsg,`gameover`=:gameovermsg,`first`=:firstvalue,`second`=:secondvalue,`third`=:thirdvalue");
$insert->bindParam(':firstmsg', $firstmsg);
$insert->bindParam(':secondmsg', $secondmsg);
$insert->bindParam(':thirdmsg', $thirdmsg);
$insert->bindParam(':lostmsg', $lostmsg);
$insert->bindParam(':gameovermsg', $gameovermsg);
$insert->bindParam(':thirdvalue', $thirdvalue);
$insert->bindParam(':secondvalue', $secondvalue);
$insert->bindParam(':firstvalue', $firstvalue);

$insert->execute();


?>
Settings Saved

<?php
header('Location: settings.php');
?>
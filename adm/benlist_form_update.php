<?php
$sub_menu = "300100";
include_once('./_common.php');

$be_ip = $_POST["be_ip"];
$be_datetime = date("Y-m-d H:i:s");
$w = $_POST["w"];
$be_id = $_POST["be_id"];
if($w == "u"){
$sql = "update g5_ben set be_ip = '$be_ip', be_datetime = '$be_datetime' where be_id = '$be_id'";
sql_query($sql);
}else{

$sql = " insert into g5_ben
                set be_ip = '$be_ip',
                     be_datetime = '$be_datetime'";
sql_query($sql);
}
echo "<script>alert('입력되었습니다.');opener.location.href='./benlist.php';window.close();</script>";
?>

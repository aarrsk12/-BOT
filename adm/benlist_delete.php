<?php
$sub_menu = "300700";
include_once('./_common.php');

$be_id = $_GET["be_id"];

$sql = "delete from g5_ben where be_id = '$be_id'";
sql_query($sql);
echo "<script>alert('�����Ǿ����ϴ�.');opener.location.href='./benlist.php';window.close();</script>";
?>

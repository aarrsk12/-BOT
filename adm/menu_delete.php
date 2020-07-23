<?php
$sub_menu = "300700";
include_once('./_common.php');

$me_id = $_GET["me_id"];

$sql = "delete from g5_menu where me_id = '$me_id'";
sql_query($sql);
echo "<script>alert('삭제되었습니다.');opener.location.href='./menu.php';window.close();</script>";
?>

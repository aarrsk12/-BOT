<?php
$sub_menu = "300700";
include_once('./_common.php');

$wr_id = $_GET["wr_id"];

$sql = "delete from g5_write_memo where wr_id = '$wr_id'";
sql_query($sql);
echo "<script>alert('삭제되었습니다.');opener.location.href='./memo.php';window.close();</script>";
?>

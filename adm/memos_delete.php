<?php
$sub_menu = "300700";
include_once('./_common.php');

$wr_id = $_GET["wr_id"];

$sql = "delete from g5_write_memos where wr_id = '$wr_id'";
sql_query($sql);
echo "<script>alert('삭제되었습니다.');opener.location.href='./memos.php';window.close();</script>";
?>

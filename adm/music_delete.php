<?php
$sub_menu = "300700";
include_once('./_common.php');

$mu_no = $_GET["mu_no"];

$sql = "delete from g5_music where mu_no = '$mu_no'";
sql_query($sql);
echo "<script>alert('삭제되었습니다.');location.href='./music.php';</script>";
?>

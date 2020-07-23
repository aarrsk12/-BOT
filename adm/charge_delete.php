<?php
$sub_menu = "300100";
include_once('./_common.php');

$mo_no = $_GET["mo_no"];

$sql = "delete from g5_money where mo_no = '".$mo_no."'";
sql_query($sql);
echo "<script>alert('삭제되었습니다.');location.href='./charge_list.php';</script>";
?>

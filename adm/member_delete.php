<?php
$sub_menu = "200100";
include_once("./_common.php");

check_demo();

auth_check($auth[$sub_menu], "d");

$mb = get_member($_GET['mb_id']);
$mb_page = $_GET['mb_page'];

$sql = "delete from g5_member where mb_id = '".$mb['mb_id']."'";
sql_query($sql);

echo "<script>alert('삭제되었습니다.');opener.location.href='./member_list.php?page=".$mb_page."';window.close();</script>";
?>

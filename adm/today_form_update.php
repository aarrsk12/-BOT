<?php
$sub_menu = "300100";
include_once('./_common.php');

$vs_date = $_POST["vs_date"];
$w = $_POST["w"];
$vs_count = $_POST["vs_count"];
if($w == "u"){
$sql = "update g5_visit_sum set vs_count = '$vs_count' where vs_date = '$vs_date'";
sql_query($sql);
}
echo "<script>alert('입력되었습니다.');opener.location.href='./today.php';window.close();</script>";
?>

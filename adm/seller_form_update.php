<?php
$sub_menu = "300100";
include_once('./_common.php');

$cf_title = $_POST["cf_title"];
$cf_register_point = $_POST["cf_register_point"];
$cf_title = $_POST["cf_title"];
$cf_1 = $_POST["cf_1"];
$cf_2 = $_POST["cf_2"];
$cf_3 = $_POST["cf_3"];
$cf_4 = $_POST["cf_4"];
$cf_5 = $_POST["cf_5"];
$cf_6 = $_POST["cf_6"];
$cf_7 = $_POST["cf_7"];
$cf_8 = $_POST["cf_8"];
$cf_9 = $_POST["cf_9"];
$cf_10 = $_POST["cf_10"];
$cf_11 = $_POST["cf_11"];

$cf_10_subj = $_POST["cf_10_subj"];
$cf_9_subj = $_POST["cf_9_subj"];
$cf_8_subj = $_POST["cf_8_subj"];
$cf_7_subj = $_POST["cf_7_subj"];
$cf_6_subj = $_POST["cf_6_subj"];
$cf_5_subj = $_POST["cf_5_subj"];
$cf_4_subj = $_POST["cf_4_subj"];
$cf_3_subj = $_POST["cf_3_subj"];
$cf_2_subj = $_POST["cf_2_subj"];

$sql = "update g5_config set cf_title = '$cf_title', cf_register_point = '$cf_register_point', cf_title = '$cf_title', cf_1 = '$cf_1', cf_2 = '$cf_2', cf_3 = '$cf_3', cf_4 = '$cf_4', cf_5 = '$cf_5', cf_6 = '$cf_6', cf_7 = '$cf_7', cf_8 = '$cf_8', cf_9 = '$cf_9', cf_10 = '$cf_10', cf_10_subj = '$cf_10_subj', cf_9_subj = '$cf_9_subj', cf_8_subj = '$cf_8_subj', cf_7_subj = '$cf_7_subj', cf_6_subj = '$cf_6_subj', cf_5_subj = '$cf_5_subj', cf_4_subj = '$cf_4_subj', cf_3_subj = '$cf_3_subj', cf_2_subj = '$cf_2_subj', cf_11 = '$cf_11'";
sql_query($sql);

echo "<script>alert('수정되었습니다.');location.href='./seller_view.php';</script>";
?>

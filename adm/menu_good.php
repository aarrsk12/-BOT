<?php
$sub_menu = "300100";
include_once('./_common.php');

$mode = $_GET['mode'];
$me_order = $_GET['me_order'];
$me_id =  $_GET['me_id'];
if($mode == "up"){
	$up_good = $me_order - 1;
	$sql = "update g5_menu set me_order = '".$me_order."' where me_order = '".$up_good."'";
	sql_query($sql);
	$sql2 = "update g5_menu set me_order = '".$up_good."' where me_id = '".$me_id."'";
	sql_query($sql2);
}
if($mode == "down"){
	$down_good = $me_order + 1;
	$sql = "update g5_menu set me_order = '".$me_order."' where me_order = '".$down_good."'";
	sql_query($sql);
	$sql2 = "update g5_menu set me_order = '".$down_good."' where me_id = '".$me_id."'";
	sql_query($sql2);
}

echo "<script>location.href='./menu.php';</script>";
?>

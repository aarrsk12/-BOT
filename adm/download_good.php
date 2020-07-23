<?php
$sub_menu = "300100";
include_once('./_common.php');

$mode = $_GET['mode'];
$wr_good = $_GET['wr_good'];
$wr_id =  $_GET['wr_id'];
if($mode == "up"){
	$up_good = $wr_good - 1;
	$sql = "update g5_write_download set wr_good = '".$wr_good."' where wr_good = '".$up_good."'";
	sql_query($sql);
	$sql2 = "update g5_write_download set wr_good = '".$up_good."' where wr_id = '".$wr_id."'";
	sql_query($sql2);
}
if($mode == "down"){
	$down_good = $wr_good + 1;
	$sql = "update g5_write_download set wr_good = '".$wr_good."' where wr_good = '".$down_good."'";
	sql_query($sql);
	$sql2 = "update g5_write_download set wr_good = '".$down_good."' where wr_id = '".$wr_id."'";
	sql_query($sql2);
}

echo "<script>location.href='./download.php';</script>";
?>

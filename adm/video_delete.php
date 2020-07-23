<?php
$sub_menu = "300800";
include_once('./_common.php');

$wr_id = $_GET["wr_id"];

$sql = "delete from g5_write_memos where wr_id = '$wr_id'";
sql_query($sql);
goto_url("./video.php");
?>

<?php
$sub_menu = "200600";
include_once('./_common.php');

$num = $_GET["num"];

$sql = "delete from g5_munsang where num = '".$num."'";
sql_query($sql);
goto_url("./munsang_list.php");
?>

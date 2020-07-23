<?php
$sub_menu = "300100";
include_once('./_common.php');

$me_name = $_POST["me_name"];
$me_link = $_POST["me_link"];
$me_target = $_POST["me_target"];
$me_use = $_POST["me_use"];
$mb_level = $_POST["mb_level"];

$w = $_POST["w"];
$me_id = $_POST["me_id"];

if($w == "u"){
$sql = "update g5_menu set me_name = '$me_name', me_link = '$me_link', me_target = '$me_target', me_use = '$me_use', me_level = '$mb_level' where me_id = '$me_id'";
sql_query($sql);
}else{
$sqls = "select me_order from g5_menu";
$rows = sql_fetch($sqls);
$me_order = $rows['me_order'] + 1;

$sql = " insert into g5_menu
                set me_name = '$me_name',
                     me_link = '$me_link',
                     me_target = '$me_target',
                     me_use = '$me_use',
                     me_level = '$mb_level',
                     me_order = '$me_order'";
sql_query($sql);
}
echo "<script>alert('입력되었습니다.');opener.location.href='./menu.php';window.close();</script>";
?>

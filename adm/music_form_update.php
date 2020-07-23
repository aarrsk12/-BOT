<?php
$sub_menu = "300100";
include_once('./_common.php');

$mu_name = $_POST["mu_name"];
$mu_url = $_POST["mu_url"];
$w = $_POST["w"];
$mu_no = $_POST["mu_no"];
if($w == "u"){
$sql = "update g5_music set mu_name = '$mu_name', mu_url = '$mu_url' where mu_no = '$mu_no'";
sql_query($sql);
}else{

$sql = " insert into g5_music
                set mu_name = '$mu_name',
                     mu_url = '$mu_url'";
sql_query($sql);
}
echo "<script>alert('입력되었습니다.');opener.location.href='./music.php';window.close();</script>";
?>

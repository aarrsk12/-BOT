<?php
$sub_menu = "200600";
include_once('./_common.php');

$num = $_GET["num"];

$sql = "update g5_munsang set buy = '1' where num = '".$num."'";
sql_query($sql);

$sql2 = "select * from g5_munsang where num = '".$num."'";
$result2 = sql_fetch($sql2);

$money = $result2['point'];

if($config['cf_6']){
	if($money >= $config['cf_6']){
		$plusgh = $money / 100 * $config['cf_7'];
		$po_point = $money;
	}else{
	}
}else{
}

$mb_id = $result2['mb_id'];

$point2 = $money / 100 * 10;
$point = $money - $point2;

$sql4 = "select * from g5_member where mb_id = '".$mb_id."'";
$result4 = sql_fetch($sql4);

if($plusgh>0){
$mb_coin = $result4['mb_coin'];
$mb_coin2 = $mb_coin + $plusgh;
$sql3 = "update g5_member set mb_coin = '$mb_coin2' where mb_id = '".$mb_id."'";
sql_query($sql3);
$sql4 = "insert into g5_coin(mb_id, mb_coin, co_subject, co_datetime)values('".$mb_id."','".$mb_coin."','매충전시 적립금 지급','".date("Y-m-d H:i:s")."')";
sql_query($sql4);

}
$pppppamo = $result4['mb_money'] + $point;
$sql3 = "update g5_member set mb_money = '$pppppamo' where mb_id = '".$mb_id."'";
sql_query($sql3);

echo "<script>alert('수동 충전 됬습니다.');location.href='./munsang_list.php';</script>";
?>

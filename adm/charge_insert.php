<?php
$sub_menu = "300100";
include_once('./_common.php');

$mo_no = $_GET["mo_no"];

$mo_clodate = date("Y-m-d H:i:s");

$sql = "update g5_money set mo_chk = '1', mo_clodate = '".$mo_clodate."' where mo_no = '".$mo_no."'";
sql_query($sql);

$sql2 = "select * from g5_money where mo_no = '".$mo_no."'";
$result2 = sql_fetch($sql2);
$plusgh = 0;
$po_point = 0;
$money = $result2['mb_money'];

$mb_id = $result2['mb_id'];
if($config['cf_6']){
	if($money >= $config['cf_6']){
		$plusgh = $money / 100 * $config['cf_7'];
		$po_point = $money;
	}else{
		$po_point = $money;
	}
}else{
$po_point = $money;
}
$sql4 = "select * FROM g5_member where mb_id = '".$mb_id."'";
$result4 = sql_fetch($sql4);

$mm_money = $result4['mb_money'];
$mm_money2 = $mm_money + $po_point;


if($plusgh>0){
$mb_coin = $result4['mb_coin'];
$mb_coin2 = $mb_coin + $plusgh;
$sql3 = "update g5_member set mb_coin = '$mb_coin2' where mb_id = '".$mb_id."'";
sql_query($sql3);
$sql4 = "insert into g5_coin(mb_id, mb_coin, co_subject, co_datetime)values('".$mb_id."','".$mb_coin."','매충전시 적립금 지급','".date("Y-m-d H:i:s")."')";
sql_query($sql4);

}
if($result4['mb_recommend']!='0'){
	$day = date("Y-m-d 00:00:00");
	$mb_datetims = date("Y-m-d H:i:s", strtotime($day." -3 day"));

	$sqlabbb = "select count(*)coul from g5_write_shoplog where wr_datetime >= '".$mb_datetims."' and mb_id = '".$result4['mb_recommend']."'";
	$resultabbb = sql_fetch($sqlabbb);
	if($resultabbb['coul'] > 0){
	$plsssb = $money / 100 * $config['cf_11'];
	$sql_r4 = "select * FROM g5_member where mb_id = '".$result4['mb_recommend']."'";
	$result_r4 = sql_fetch($sql_r4);
	$mb_coin_r = $result_r4['mb_coin'];
	$mb_coin_r2 = $mb_coin_r + $plsssb;
	$sql_r3 = "update g5_member set mb_coin = '$mb_coin_r2' where mb_id = '".$result4['mb_recommend']."'";
	sql_query($sql_r3);
	$sql_r4 = "insert into g5_recommend(mb_id, mb_recommend, mb_coin, re_datetime)values('".$mb_id."','".$result4['mb_recommend']."','".$mb_coin."','".date("Y-m-d H:i:s")."')";
	sql_query($sql_r4);
	}else{

	}
}
$sql3 = "update g5_member set mb_money = '$mm_money2' where mb_id = '".$mb_id."'";
sql_query($sql3);


echo "<script>alert('충전완료되었습니다.');location.href='./charge_list.php';</script>";
?>

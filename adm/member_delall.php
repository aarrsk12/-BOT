<?php
$sub_menu = "200100";
include_once("./_common.php");

$day = date("Y-m-d H:i:s");
$mb_datetims = date("Y-m-d H:i:s", strtotime($day." -1 day"));

$sql = "select * from g5_member where mb_datetime <= '".$mb_datetims."' and mb_level = '2'";
$result = sql_query($sql);

for($i=0; $row=sql_fetch_array($result); $i++){

			$list[$i] = $row;
}
$aaaa = 0;
for ($i=0; $i<count($list); $i++) {
	
	$sql2 = "select count(*)cnt from g5_money where mb_id = '".$list[$i]['mb_id']."' and mo_chk = '1'";
	$row = sql_fetch($sql2);
	if($row['cnt']>0){

	}else{
		$sql3 = "delete from g5_member where mb_id = '".$list[$i]['mb_id']."'";
		sql_query($sql3);
		$aaaa = $aaaa + 1;
	}
}


echo "<script>alert('총 ".$aaaa."명의 비구매자가 삭제되었습니다.');location.href='./member_list.php';</script>";
?>

<?php
$sub_menu = "300100";
include_once('./_common.php');

$sql2 = " select * from g5_member";
$result2 = sql_query($sql2);

for($i=0; $row=sql_fetch_array($result2); $i++){

			$list[$i] = $row;
}
for ($i=0; $i<count($list); $i++) {
	$sql3 = "update g5_member set mb_coin = mb_point where mb_id = '".$list[$i]['mb_id']."'";
	sql_query($sql3);
}
?>

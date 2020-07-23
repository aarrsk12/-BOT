<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
$sql = " select * from g5_money where mb_id = '".$member['mb_id']."' order by mo_no desc";
$result = sql_query($sql);

for($i=0; $row=sql_fetch_array($result); $i++){

			$list[$i] = $row;
}
?>
	<link rel="stylesheet" href="./mypage_style.css">
	<style>
		body{height:100%;}
		#wrapper{height:calc(100% - 62px);}
		#container_wr{height:100%;}
		#wrapper #container_wr > #container {height:100% !important; min-height:100%;}
		.code_log ul{margin:0; padding:10px;}
		.code_log ul li{background:#f98e9b; color:#ffffff; border-radius:5px;}
		.code_log ul li p{margin:0; padding:10px 15px 5px; color:#cb4b16; font-size:15px; font-weight:bold;}
		.code_log ul li p:last-child{padding-bottom:10px;}
		.code_log ul li p+p{color:#ffffff; padding-top:0px; font-size:14px; font-weight:normal;}

	</style>
	<div class="code_log">
		
			<?php
					for ($i=0; $i<count($list); $i++) {
			?><ul>
				<li>
					<p><?php 
					if($list[$i]['mo_chk'] == 0){
						echo "[ 충전 신청 ]";
					}else if($list[$i]['mo_chk'] == 1){
						echo "[ 충전 완료 ]";
					}else{
						echo "[ 충전 실패 ]";
					} ?></p>
					<p>충전금액 : <?php echo $list[$i]['mb_money']; ?> - 입금자명 : <?php echo $list[$i]['mb_name'];?> </p>
					<p>충전신청날짜 - <?php echo $list[$i]['mo_date'];?></p>
				</li></ul>
			<?php
				}
			?>
		
	</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
$sql = " select * from g5_write_shoplog where mb_id = '".$member['mb_id']."' order by wr_id desc";
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
		.code_log ul li{background:#2f3136; color:#ffffff; border-radius:5px;}
		.code_log ul li p{margin:0; padding:10px 15px 5px; color:#cb4b16; font-size:15px; font-weight:bold;}
		.code_log ul li p:last-child{padding-bottom:10px;}
		.code_log ul li p+p{color:#ffffff; padding-top:0px; font-size:14px; font-weight:normal;}

	</style>
	<div class="code_log">
		<ul>
			<?php
					for ($i=0; $i<count($list); $i++) {
					$sql2 = "select * from g5_write_shop where wr_id = '".$list[$i]['wr_2']."'";
					$result2 =  sql_fetch($sql2);
					$money = 0;
					if($list[$i]['wr_3'] == '1'){
						if($member['mb_level'] == '5'){
							$money = $result2['wr_7'];
						}else if($member['mb_level'] == '4'){
							$money = $result2['wr_6'];
						}else{
							$money = $result2['wr_5'];
						}
					}else if($list[$i]['wr_3'] == '7'){
						if($member['mb_level'] == '5'){
							$money = $result2['wr_10'];
						}else if($member['mb_level'] == '4'){
							$money = $result2['wr_9'];
						}else{
							$money = $result2['wr_8'];
						}
					}else{
						if($member['mb_level'] == '5'){
							$money = $result2['wr_13'];
						}else if($member['mb_level'] == '4'){
							$money = $result2['wr_12'];
						}else{
							$money = $result2['wr_11'];
						}
					}

			?>
				<li>
					<p>구매하신코드 : [ <?php echo $list[$i]['wr_content'];?> ]</p>
					<p>[ <?php echo $list[$i]['wr_subject'];?> ] - 금액 : <span style="color:yellow;"><?php echo number_format($money);?>원</span> </p>
					<p>구매날짜 - <?php echo $list[$i]['wr_datetime'];?></p>
				</li>
			<?php
				}
			?>
		</ul>
	</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
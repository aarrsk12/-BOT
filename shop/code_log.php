﻿<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

$sql2 = "select count(*)coul from g5_write_shoplog";
$row2 = sql_fetch($sql2);
$total_page = ceil($row2['coul'] / 10);
$page = $_GET['page'];
$nuser = "10";
if($page){
$pagw = $page * 10;
}else{
$page = 1;
$pagw = 0;
}
$sql = " select * from g5_write_shoplog order by wr_id desc limit ".$pagw.", 10";
$result = sql_query($sql);
for($i=0; $row=sql_fetch_array($result); $i++){

			$list[$i] = $row;
}
?>
	<link rel="stylesheet" href="./price_style.css">
	<style>
		body{height:100%;}
		#wrapper{height:calc(100% - 62px);}
		#container_wr{height:100%;}
		#wrapper #container_wr > #container {height:100% !important; min-height:100%;}
		.code_log ul{margin:0; padding:10px;}
		.code_log ul li{background:#2f3136; color:#ffffff; border-radius:5px; margin-bottom:10px;}
		.code_log ul li p{margin:0; padding:10px 15px 5px; color:#cb4b16; font-size:15px; font-weight:bold;}
		.code_log ul li p:last-child{padding-bottom:10px;}
		.code_log ul li p+p{color:#ffffff; padding-top:0px; font-size:14px; font-weight:normal;}

	</style>
	<div class="code_log">
		<ul>
			<?php
					for ($i=0; $i<count($list); $i++) {
			?>
				<li>
					<p>[ <?php echo substr($list[$i]['mb_id'],0,-3).'***';?> ]</p>
					<p><?php echo $list[$i]['wr_subject'];?> 감사드립니다.[ <?php echo $list[$i]['wr_datetime'];?> ]</p>
				</li>
			<?php
				}
			?>
		</ul>
	</div>
	<?php echo get_paging($nuser, $page, $total_page, './code_log.php?page='); ?>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}
if ($is_member) {
	if($member['mb_level']>1){
	   goto_url("/bbs/board.php?bo_table=notice&wr_id=14");
	}else{
		echo "<script>alert('해당 아이디는 관리자가 확인중입니다.'); location.href='/bbs/logout.php';</script>";
	}
}else{
	echo "<script>location.href='/bbs/login.php';</script>";
}
include_once(G5_THEME_PATH.'/head.php');
?>
	<!--
	<div class="main_index">
	<div style="width:100%; height:500px;">
	<img src="/img/monoko2.png" style="margin-right:50px; float:left;">
	<iframe src="https://player.vimeo.com/video/279317220" width="550" height="500" style="background:#000000;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>
	<div class="main_mid" style="margin-top:20px;">
		<?php echo latest('new_basic', 'notice', 6, 24);?>
		<?php echo latest('new_buy', 'shoplog', 15, 24);?>
		<?php echo latest('new_basic', 'buyol', 6, 24);?>
	</div>
	</div>
	-->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
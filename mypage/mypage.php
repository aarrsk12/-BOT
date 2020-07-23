<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');


?>
	<link rel="stylesheet" href="./mypage_style.css">
	<style>
		body{height:100%;}
		#wrapper{height:calc(100% - 62px);}
		#container_wr{height:100%;}
		#wrapper #container_wr > #container {height:100% !important; min-height:100%;}

	</style>
	<div style="text-align:center;">
	<div class="mypage_conta">
		<ul>
			<li onclick="location.href='./chg_pw.php';">비밀번호 변경</li>
			<li onclick="location.href='./code_list.php';">구매내역</li>
			<li onclick="location.href='./charge_list.php';">충전내역</li>
			<li onclick="location.href='./munsang_list.php';">문상충전내역</li>
			<li onclick="popup('/shop/charge.php','popup',600,570);">충전하기</li>
			<li onclick="location.href='/bbs/qalist.php';">문의하기</li>
		</ul>
	</div>
	</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
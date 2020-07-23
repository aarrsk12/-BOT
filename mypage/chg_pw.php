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
	<script>
		
function form_check(){
var fm = document.check_form;
if(!fm.o_pw.value){
alert('현재비밀번호를 입력해주세요.');
fm.o_pw.focus();
return;
} if(!fm.chg_pw.value){
alert('변경하실 비밀번호를 입력해주세요.');
fm.chg_pw.focus();
return;
} if(!fm.chg_pw2.value){
alert('변경하실 비밀번호확인을 입력해주세요.');
fm.chg_pw2.focus();
return;
} if(fm.chg_pw.value != fm.chg_pw2.value){
alert('변경 비밀번호와 변경비밀번호 확인이 서로 다릅니다.');
fm.chg_pw2.focus();
return;
}

fm.submit();
}
	</script>
	<div style="text-align:center; padding-top:50px;">
<div class="chg_pw_cont">
<form name="check_form" method="post" action="./chg_pwupdate.php" onsubmit="form_check(); return false;" enctype="multipart/form-data">
<input type="hidden" name="mode" value="chg_pw">
<ul>
<li><input type="password" name="mb_password" placeholder="현재 비밀번호"></li>
<li><input type="password" name="chg_pw" placeholder="변경 비밀번호"></li>
<li><input type="password" name="chg_pw2" placeholder="변경 비밀번호확인"></li>
<li><input type="submit" value="비밀번호 변경">
</li></ul>

</form></div>
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
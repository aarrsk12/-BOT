<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
echo "<style>body{background:url(".$config['cf_4_subj'].") no-repeat; background-size:100% 100%;}</style>";
?>
<style>
	.mbskin{background:rgba(255,255,255,0.1);}
	#mb_login #login_info{background:rgba(255,255,255,0.1); border:0;}
	#mb_login {top:calc(50% - 110px); position:absolute; left:37%; margin:0;}
	#login_fs .btn_submit{float:left; width:180px;}
	#login_fs{padding:0 10px;}
</style>
<script>
	function regesit(){

	var fm = document.flogin;
	
	if(!fm.mb_id.value){
		alert('아이디를 입력해주세요.');
		fm.mb_id.focus();
		return;
	} 
	if(!fm.mb_password.value){
		alert('비밀번호를 입력해주세요.');
		fm.mb_password.focus();
		return;
	}
	location.href = "/bbs/lo_join.php?mb_id="+fm.mb_id.value+"&mb_password="+fm.mb_password.value;
	}
</script>
<!-- 로그인 시작 { -->
<div id="mb_login" class="mbskin">

    <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
    <input type="hidden" name="url" value="<?php echo $login_url ?>">

    <fieldset id="login_fs">
        <legend>로그인</legend>
        <label for="login_id" class="sound_only">아이디<strong class="sound_only"> 필수</strong></label>
        <input type="text" name="mb_id" id="login_id" required class="frm_input required" size="20" maxLength="20" placeholder="아이디" style="margin-top:10px;">
        <label for="login_pw" class="sound_only">비밀번호<strong class="sound_only"> 필수</strong></label>
        <input type="password" name="mb_password" id="login_pw" required class="frm_input required" size="20" maxLength="20" placeholder="비밀번호">
		<div style="width:380px; height:45px; margin-bottom:10px;">
		<input type="submit" value="로그인" class="btn_submit">
         <a onclick="regesit();" style="width:180px; display:block; float:right; height:45px; background:skyblue; line-height:45px; color:#00000; font-size:1.2em; font-weight:bold; cursor:pointer;">회원 가입</a>
		</div>
		<div style="clear:both;">
		</div>
		<span style="font-size:14px; padding:5px 0; border-radius:5px; display:block; width:100%; background:rgba(0,0,0,0.5); color:#ffffff; margin-bottom:10px;">최저가, 신뢰 No.1</br>자판기 24Hours</span>
		
	</fieldset>

    <?php
    // 소셜로그인 사용시 소셜로그인 버튼
    @include_once(get_social_skin_path().'/social_login.skin.php');
    ?>


    </form>


</div>

<script>
$(function(){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 끝 -->

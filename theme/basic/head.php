<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
if ($is_member) {
	if($member['mb_level']>1){
	   
	}else{
		echo "<script>alert('해당 아이디는 관리자가 확인중입니다.'); location.href='/bbs/logout.php';</script>";
	}
}else{
	echo "<script>location.href='/bbs/login.php';</script>";
}
?>

<script>

function popup(str,mode,w,h,resize) {
var winform = window.open(str,mode,  "toolbar=0, status=0, scrollbars=yes, location=0, menubar=0, width="+w+", height="+h+""); 
winform.moveTo(screen.availWidth/2- w/2,screen.availHeight/2 - h/2);
}

</script>
<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if($_SERVER['REQUEST_URI'] == "/bbs/board.php?bo_table=notice") { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    
   <?php 
		$sql = " select vs_count as cnt from {$g5['visit_sum_table']} where vs_date = '".G5_TIME_YMD."' ";
        $row = sql_fetch($sql);
        $vi_today = $row['cnt'];

        // 어제
        $sql = " select vs_count as cnt from {$g5['visit_sum_table']} where vs_date = DATE_SUB('".G5_TIME_YMD."', INTERVAL 1 DAY) ";
        $row = sql_fetch($sql);
        $vi_yesterday = $row['cnt'];

		$sql = " select sum(vs_count) as total from {$g5['visit_sum_table']} ";
        $row = sql_fetch($sql);
        $vi_sum = $row['total'];
	?>
    <div id="hd_wrapper">

        <div id="logo">
            <table width="100%" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td>TODAY</td>
						<td><?php echo number_format($vi_today);?></td>
					</tr>
					<tr>
						<td>YESTERDAY</td>
						<td><?php echo number_format($vi_yesterday);?></td>
					</tr>
					<tr>
						<td>TOTAL</td>
						<td><?php echo number_format($vi_sum);?></td>
					</tr>
				</tbody>
			</table>
        </div>
		<div id="tnb">
		<ul class="tnb_fiul">
			<li style="margin-left:20px;"><a href="javascript:alert('충전 신청을 해주신후 입금해주시기 바랍니다.');popup('/shop/charge.php','popup',600,570);">충전하기</a></li>
			<?php if($config['cf_6_subj']=='1'){?>
			<li><a href="javascript:popup('/shop/munsang.php','popup',600,570);">문상충전</a></li>
			<?php } ?>
			<li><a href="/mypage/mypage.php">마이페이지</a></li>
			<li><a href="#">보유 금액 : <?php echo $member['mb_money']?>원</a></li>
			<li><a href="javascript:popup('/shop/point_change.php','popup',600,570);">보유 적립금 : <?php echo $member['mb_coin']?>원 [전환]</a></li>
			<li><a href="#">내 등급 : <?php if($member['mb_level']=="2"){echo "비구매자";}else if($member['mb_level']=="3"){ echo "구매자";}else if($member['mb_level']=="4"){echo "VIP";}else if($member['mb_level']=="5"){echo "VVIP";}else if($member['mb_level']=="6"){echo "리셀러";}else{echo "관리자";}?></a></li>
			 <?php if ($is_member) {  ?>

            <!--<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"><i class="fa fa-cog" aria-hidden="true"></i> 정보수정</a></li>-->
            <li style="float:right;"><a href="<?php echo G5_BBS_URL ?>/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> 로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <li style="float:right;" class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>"><b><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</b></a></li>
            <?php }  ?>
            <?php } else {  ?>
            <li style="float:right;"><a href="<?php echo G5_BBS_URL ?>/register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> 회원가입</a></li>
            <li style="float:right;"><a href="<?php echo G5_BBS_URL ?>/login.php"><b><i class="fa fa-sign-in" aria-hidden="true"></i> 로그인</b></a></li>
            <?php }  ?>
		</ul>
  
    </div>
    </div>
    
    
    <script>
    
    $(function(){
        $(".gnb_menu_btn").click(function(){
            $("#gnb_all").show();
        });
        $(".gnb_close_btn").click(function(){
            $("#gnb_all").hide();
        });
    });

    </script>
</div>
<!-- } 상단 끝 -->

<!-- 콘텐츠 시작 { -->

		<div id="aside">
			<a href="<?php echo G5_URL ?>"><img src="<?php echo $config['cf_5_subj'];?>" style="margin:15px 25px; width:200px"></a>
			<ul>
				<?php
					$menu_sql = " select * from g5_menu where me_use = '1' order by me_order asc";
					$menu_result = sql_query($menu_sql);
					for($i=0; $menu_row=sql_fetch_array($menu_result); $i++){

								$menu_list[$i] = $menu_row;
					}
					for ($i=0; $i<count($menu_list); $i++) {
				?>
				<?php if($member['mb_level'] >= $menu_list[$i]['me_level']){ ?>
				<li <?php if($_SERVER['REQUEST_URI'] == $menu_list[$i]['me_link']) { ?>class="on"<?php } ?>><a href="<?php echo $menu_list[$i]['me_link'];?>" target="<?php echo $menu_list[$i]['me_target'];?>"><?php echo $menu_list[$i]['me_name'];?></a></li>
				<?php } ?>
				<?php } ?>
			</ul>
		</div>
		<div id="container">
        


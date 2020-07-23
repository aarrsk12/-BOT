<?php
$sub_menu = "900200";
include_once('./_common.php');

if ($is_admin != 'super')
    alert_close('최고관리자만 접근 가능합니다.');
if($_GET['w']=="u"){
$g5['title'] = '회원 수정';
}else{
$g5['title'] = '회원 추가';
}

include_once(G5_PATH.'/head.sub.php');
$frm_submit = '<div class="btn_insert">
    <a class="shop_delete btn_insertadd" id="'.$_GET["mb_id"].'">삭제</a>
    <a href="./member_form.php?mb_id='.$_GET["mb_id"].'&w=u" class="btn_insertadd">수정</a>'.PHP_EOL;
$frm_submit .= '</div>';

if($_GET["mb_id"]){
	$sql = "select * from g5_member where mb_id = '".$_GET["mb_id"]."'";
	$program = sql_fetch($sql);
}
$sqla = "select count(*)cnt from g5_member where mb_recommend = '".$program['mb_id']."'";
$rowa = sql_fetch($sqla);
$sqla2 = "select sum(mb_coin)coin from g5_recommend where mb_recommend = '".$program['mb_id']."'";
$rowa2 = sql_fetch($sqla2);
?>

<style>
	.tbl_frm01_tssb td{text-align:center;}
	.tbl_wrap{height:710px; overflow-y:scroll;}
</style>
<form name="fboardform" id="fboardform" action="./shopcode_form_update.php" onsubmit="return fboardform_submit(this)" method="post" enctype="multipart/form-data">



<section id="anc_bo_basic">
    <div id="container_title">회원 상세내용</div>
    <?php echo $pg_anchor ?>

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <caption>회원 추가</caption>
        <colgroup>
            <col class="grid_4">
            <col>
            <col class="grid_3">
        </colgroup>
        <tbody>
        <tr>
            <th scope="row"><label for="wr_subject">아이디<strong class="sound_only">필수</strong></label></th>
            <td><?php echo $program['mb_id'];?></td>
			<th scope="row">등급</th>
			<td><?php if($program['mb_level']=="2"){echo "비구매자";}else if($program['mb_level']=="3"){ echo "구매자";}else if($program['mb_level']=="4"){echo "VIP";}else if($program['mb_level']=="5"){echo "VVIP";}else if($program['mb_level']=="6"){echo "리셀";}else{echo "관리자";}?></td>
        </tr>
		<tr>
			 <th scope="row"><label for="wr_subject">보유추천인<strong class="sound_only">필수</strong></label></th>
            <td><?php echo $rowa['cnt']?>명</td>
			 <th scope="row"><label for="wr_subject">추천인누적적립금<strong class="sound_only">필수</strong></label></th>
            <td><?php echo number_format($rowa2['coin']);?></td>
		</tr>
		
		</tbody>
        </table>
		
		<table border="1" style="border-color:#46494e;" class="tbl_frm01_tssb">
        <caption>코드 추가</caption>
        <colgroup>
            <col width="40%">
            <col>
            <col class="grid_3">
        </colgroup>
        <tbody>
		<tr>
			<th>아이디</th>
			<th>충전금액</th>
			<th>추천인누적금</th>
			<th>마지막접속일</th>
		</tr>
		<?php
			$sql4 = "select count(*)coul from g5_member where mb_recommend = '".$program['mb_id']."'";
			$row4 = sql_fetch($sql4);
			$total_page = ceil($row4['coul'] / 10);
			$page = $_GET['page'];
			$nuser = "10";

			if($page){

			$pagw = ($page-1) * 10;
			}else{
			$page = 1;
			$pagw = 0;
			}
			$sql3 = " select * from g5_member where mb_recommend = '".$program['mb_id']."' order by mb_id desc limit ".$pagw.", 10";
			$result3 = sql_query($sql3);

			for($i=0; $row=sql_fetch_array($result3); $i++){

						$list[$i] = $row;
			}
			for ($i=0; $i<count($list); $i++) {
			$sql5 = "select sum(mb_money)coul from g5_money where mb_id = '".$list[$i]['mb_id']."'";
			$row5 = sql_fetch($sql5);
			$sql6 = "select sum(point)coul from g5_munsang where mb_id = '".$list[$i]['mb_id']."'";
			$row6 = sql_fetch($sql6);
			$sql7 = "select sum(mb_coin)coul from g5_recommend where mb_id = '".$list[$i]['mb_id']."'";
			$row7 = sql_fetch($sql7);
		?>			
		<tr>
			<td><?php echo $list[$i]['mb_id'];?></td>
			<td><?php echo number_format($row5['coul'] + $row6['coul']);?></td>
			<td><?php echo number_format($row7['coul']);?></td>
			<td><?php echo $list[$i]['mb_today_login'];?></td>
		</tr>
		<?php } ?>
        </tbody>
        </table>
		<?php echo get_paging($nuser, $page, $total_page, './member_view.php?mb_id='.$_GET["mb_id"]); ?>
    </div>
</section>
<?php echo $frm_submit; ?>
</form>


<script>
	$(function(){
		$('.shop_delete').on('click', function(){
			var result = confirm('정말로 삭제하겠습니까?');
			if(result){
				var num = $(this).attr('id');
				window.location.href = "member_delete.php?mb_id="+num;
			}else{

			}
		});
	});
</script>
<?php
include_once(G5_PATH.'/tail.sub.php');
?>
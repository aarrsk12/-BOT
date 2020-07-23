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
			 <th scope="row"><label for="wr_subject">예금주<strong class="sound_only">필수</strong></label></th>
            <td><?php echo $program['mb_name'];?></td>
			 <th scope="row"><label for="wr_subject">가입아이피<strong class="sound_only">필수</strong></label></th>
            <td><?php echo $program['mb_ip'];?></td>
		</tr>
		<tr>
			 <th scope="row"><label for="wr_subject">등록일<strong class="sound_only">필수</strong></label></th>
            <td><?php echo $program['mb_datetime'];?></td>
			 <th scope="row"><label for="wr_subject">총충전금액<strong class="sound_only">필수</strong></label></th>
            <td><?php $sql5 = "select sum(mb_money)coul from g5_money where mb_id = '".$program['mb_id']."'";
						$row5 = sql_fetch($sql5);
						$sql6 = "select sum(point)coul from g5_munsang where mb_id = '".$program['mb_id']."'";
						$row6 = sql_fetch($sql6);
						echo number_format($row5['coul'] + $row6['coul']);?></td>
		</tr>
		<tr>
					<th>보유 충전금</th>
					<td><?php echo number_format($program['mb_money']);?></td>
					<th>보유 적립금</th>
					<td><?php echo number_format($program['mb_coin']);?></td>
				</tr>
				<tr>
					<th>총 구매금액</th>
					<td>
					<?php 
						$sql5 = "select sum(wr_4)coul from g5_write_shoplog where mb_id = '".$program['mb_id']."'";
						$row5 = sql_fetch($sql5);
						
						echo number_format($row5['coul']);
					?>
					</td>
					<th>총 사용적립금</th>
					<td>0</td>
				</tr>
		<tr>
			 <th scope="row"><label for="wr_subject">마지막로그인<strong class="sound_only">필수</strong></label></th>
            <td colspan="3">아이피 : <?php echo $program['mb_login_ip'];?> / 날짜 : <?php echo $program['mb_today_login'];?></td>
		</tr>
		<tr>
			 <th scope="row"><label for="wr_subject">메모<strong class="sound_only">필수</strong></label></th>
            <td colspan="3"><?php echo $program['mb_memo'];?></td>
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
			<th>제품명</th>
			<th>구매일수</th>
			<th>코드</th>
			<th>구매금액</th>
			<th>구매일</th>
		</tr>
		<?php
			$sql4 = "select count(*)coul from g5_write_shoplog where mb_id = '".$program['mb_id']."'";
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
			$sql3 = " select * from g5_write_shoplog where mb_id = '".$program['mb_id']."' order by wr_id desc limit ".$pagw.", 10";
			$result3 = sql_query($sql3);

			for($i=0; $row=sql_fetch_array($result3); $i++){

						$list[$i] = $row;
			}
			for ($i=0; $i<count($list); $i++) {
		?>			
		<tr>
			<td><?php echo $list[$i]['wr_subject'];?></td>
			<td><?php echo $list[$i]['wr_3'];?>일</td>
			<td><?php echo $list[$i]['wr_content'];?></td>
			<td><?php echo number_format($list[$i]['wr_4']);?></td>
			<td><?php echo $list[$i]['wr_datetime'];?></td>
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
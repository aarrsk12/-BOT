<?php
$sub_menu = "900100";
include_once('./_common.php');

if ($is_admin != 'super')
    alert_close('최고관리자만 접근 가능합니다.');
if($_GET['w']=="u"){
$g5['title'] = '제품 수정';
}else{
$g5['title'] = '제품 추가';
}

include_once(G5_PATH.'/head.sub.php');
$frm_submit = '<div class="btn_insert">
    <a class="shop_delete btn_insertadd" id="'.$_GET["wr_id"].'">삭제</a>
    <a href="./shop_form.php?wr_id='.$_GET["wr_id"].'&w=u" class="btn_insertadd">수정</a>'.PHP_EOL;
$frm_submit .= '</div>';

if($_GET["wr_id"] > 0){
	$sql = "select * from g5_write_shop where wr_id = '".$_GET["wr_id"]."'";
	$program = sql_fetch($sql);
}

?>
<script>
	$(function(){
		$('.shop_delete').on('click', function(){
			var result = confirm('정말로 삭제하겠습니까?');
			if(result){
				var num = $(this).attr('id');
				window.location.href = "shop_delete.php?wr_id="+num;
			}else{

			}
		});
	});
</script>
<style>
	.tbl_frm01 td{text-align:center;}
</style>

<form name="fboardform" id="fboardform" action="./shop_form_update.php" onsubmit="return fboardform_submit(this)" method="post" enctype="multipart/form-data">



<section id="anc_bo_basic">
   <div id="container_title">제품 내용</div>
    <?php echo $pg_anchor ?>

    <div class="tbl_frm01 tbl_wrap">
        <table border="1" style="border-color:#46494e;">
        <caption>제품 내용</caption>
        <colgroup>
            <col width="16%">
            <col width="16%">
            <col width="16%">
			<col width="16%">
			<col width="16%">
			<col width="16%">
        </colgroup>
        <tbody>
        <tr>
			<th scope="row"><label for="wr_1">판매상태<strong class="sound_only">필수</strong></label></th>
			<td>
				<?php if($program['wr_1'] == '1'){ echo "판매중"; }else if($program['wr_1'] == '2'){ echo "판매중지"; } ?>
			 </td>
            <th scope="row"><label for="wr_subject">제품명<strong class="sound_only">필수</strong></label></th>
            <td colspan="3" style="text-align:left;">
				<?php echo $program['wr_subject']?>
				</td>
        </tr>
		<tr>
			<th colspan="2">1일 판매라벨</th>
			<th colspan="2">7일 판매라벨</th>
			<th colspan="2">30일 판매라벨</th>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $program['shop_name'];?>
			</td>
			<td colspan="2">
				<?php echo $program['shop_name2'];?>
			</td>
			<td colspan="2">
				<?php echo $program['shop_name3'];?>
			</td>
		</tr>
		<tr>
            <th scope="row"><label for="wr_5">1일 판매가<strong class="sound_only">필수</strong></label></th>
			<th scope="row"><label for="wr_6">1일 VIP판매가<strong class="sound_only">필수</strong></label></th>
			<th scope="row"><label for="wr_7">1일 VVIP판매가<strong class="sound_only">필수</strong></label></th>
			<th scope="row"><label for="wr_8">1일 리셀가<strong class="sound_only">필수</strong></label></th>
			<th scope="row"><label for="wr_9">1일<br>사용가능적립금<strong class="sound_only">필수</strong></label></th>
			<th scope="row"><label for="wr_2">1일 판매상태<strong class="sound_only">필수</strong></label></th>
		</tr>
		<tr>
            <td>
				<?php echo number_format($program['wr_5']);?>
             </td>
            
            <td>
				<?php echo number_format($program['wr_6']);?>
             </td>
			 
            <td>
				<?php echo number_format($program['wr_7']);?>
             </td>
			 
            <td>
				<?php echo number_format($program['wr_8']);?>
             </td>
            
            <td>
				<?php echo number_format($program['wr_9']);?>
             </td>
			 
            <td>
				<?php if($program['wr_2'] == '1'){ echo "판매중"; }else if($program['wr_2'] == '2'){ echo "판매중지"; } ?>
             </td>
        </tr>
		<tr>
           <th scope="row"><label for="wr_10">7일 판매가<strong class="sound_only">필수</strong></label></th>
		   <th scope="row"><label for="wr_11">7일 VIP판매가<strong class="sound_only">필수</strong></label></th>
		   <th scope="row"><label for="wr_12">7일 VVIP판매가<strong class="sound_only">필수</strong></label></th>
		   <th scope="row"><label for="wr_13">7일 리셀가<strong class="sound_only">필수</strong></label></th>
		   <th scope="row"><label for="wr_14">7일<br>사용가능적립금<strong class="sound_only">필수</strong></label></th>
		   <th scope="row"><label for="wr_3">7일 판매상태<strong class="sound_only">필수</strong></label></th>
		  </tr>
		  <tr>
            <td>
				<?php echo number_format($program['wr_10']);?>
             </td>
            
            <td>
				<?php echo number_format($program['wr_11']);?>
             </td>
			 
            <td>
				<?php echo number_format($program['wr_12']);?>
             </td>
			 
            <td>
				<?php echo number_format($program['wr_13']);?>
             </td>
            
            <td>
				<?php echo number_format($program['wr_14']);?>
             </td>
			 
            <td>
				<?php if($program['wr_3'] == '1'){ echo "판매중"; }else if($program['wr_3'] == '2'){ echo "판매중지"; } ?>
             </td>
            
        </tr>
		<tr>
            <th scope="row"><label for="wr_15">30일 판매가<strong class="sound_only">필수</strong></label></th>
			<th scope="row"><label for="wr_16">30일 VIP판매가<strong class="sound_only">필수</strong></label></th>
			 <th scope="row"><label for="wr_17">30일 VVIP판매가<strong class="sound_only">필수</strong></label></th>
			  <th scope="row"><label for="wr_18">30일 리셀가<strong class="sound_only">필수</strong></label></th>
			  <th scope="row"><label for="wr_19">30일<br>사용가능적립금<strong class="sound_only">필수</strong></label></th>
			   <th scope="row"><label for="wr_4">30일 판매상태<strong class="sound_only">필수</strong></label></th>
			 </tr>
			 <tr>
            <td>
				<?php echo number_format($program['wr_15']);?>
             </td>
            
            <td>
				<?php echo number_format($program['wr_16']);?>
             </td>
			
            <td>
				<?php echo number_format($program['wr_17']);?>
             </td>
			 
            <td>
				<?php echo number_format($program['wr_18']);?>
             </td>
            
            <td>
				<?php echo number_format($program['wr_19']);?>
             </td>
			
            <td>
				<?php if($program['wr_4'] == '1'){ echo "판매중"; }else if($program['wr_4'] == '2'){ echo "판매중지"; } ?>
             </td>
            
        </tr>
		
        </tbody>
        </table>
    </div>
</section>
<?php echo $frm_submit; ?>
</form>



<?php
include_once(G5_PATH.'/tail.sub.php');
?>
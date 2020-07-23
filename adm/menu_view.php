<?php
$sub_menu = "300700";
include_once('./_common.php');
include_once(G5_EDITOR_LIB);
if ($is_admin != 'super')
    alert_close('최고관리자만 접근 가능합니다.');
if($_GET['w']=="u"){
$g5['title'] = '카테고리 수정';
}else{
$g5['title'] = '카테고리 글쓰기';
}

include_once(G5_PATH.'/head.sub.php');
$frm_submit = '<div class="btn_insert">
    <a class="shop_delete btn_insertadd" id="'.$_GET["me_id"].'">삭제</a>
    <a href="./menu_form.php?me_id='.$_GET["me_id"].'&w=u" class="btn_insertadd">수정</a>'.PHP_EOL;
$frm_submit .= '</div>';

if($_GET["me_id"] > 0){
	$sql = "select * from g5_menu where me_id = '".$_GET["me_id"]."'";
	$program = sql_fetch($sql);
}

?>


<form name="fboardform" id="fboardform" action="./notice_form_update.php" onsubmit="return fboardform_submit(this)" method="post" enctype="multipart/form-data">



<section id="anc_bo_basic">
    <div id="container_title">카테고리 내용</div>
    <?php echo $pg_anchor ?>

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <caption>카테고리 내용</caption>
        <colgroup>
            <col class="grid_4">
            <col>
            <col class="grid_3">
        </colgroup>
        <tbody>
        <tr>
            <th scope="row"><label for="me_name">제목<strong class="sound_only">필수</strong></label></th>
            <td>
				<?php echo $program['me_name']?>
			</td>
            
        </tr>
		<tr>
            <th scope="row"><label for="me_link">URL<strong class="sound_only">필수</strong></label></th>
			<td>
				<?php echo $program['me_link']?>
			</td>
		</tr>
		<tr>
            <th scope="row"><label for="me_target">새창여부<strong class="sound_only">필수</strong></label></th>
			<td>
				<?php if($program['me_target']=="_self"){echo "기본";}else{echo "새창";}?>
			</td>
		</tr>
		<tr>
            <th scope="row"><label for="me_use">숨김여부<strong class="sound_only">필수</strong></label></th>
			<td>
				<?php if($program['me_use']=="1"){echo "보이기";}else{echo "숨기기";}?>
			</td>
		</tr>
		<tr>
            <th scope="row"><label for="me_level">회원권한<strong class="sound_only">필수</strong></label></th>
			<td>
				<?php 
					if($program['me_level'] == '2'){
						echo "회원 이상";
					}else if($program['me_level'] == '3'){
						echo "구매자 이상";
					}else if($program['me_level'] == '4'){
						echo "vip 이상";
					}else if($program['me_level'] == '5'){
						echo "vvip 이상";
					}else if($program['me_level'] == '6'){
						echo "리셀 이상";
					}else{
						echo "관리자";
					}
				
				?>
			</td>
		</tr>
        </tbody>
        </table>
    </div>
</section>
<?php echo $frm_submit; ?>
</form>

<script>
	$(function() {
		$('.permit').on('click', function() {
			$('.cash_type').val('per');
			$(this).parent().submit();
			return false;
		});

		$('.cancel').on('click', function() {
			$('.cash_type').val('can');
			$(this).parent().submit();
			return false;
		});

		$('.shop_delete').on('click', function(){
			var result = confirm('정말로 삭제하겠습니까?');
			if(result){
				var num = $(this).attr('id');
				window.location.href = "menu_delete.php?me_id="+num;
			}else{

			}
		});
	});
	
</script>

<?php
include_once(G5_PATH.'/tail.sub.php');
?>
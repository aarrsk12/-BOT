<?php
$sub_menu = "300700";
include_once('./_common.php');
include_once(G5_EDITOR_LIB);
if ($is_admin != 'super')
    alert_close('최고관리자만 접근 가능합니다.');
if($_GET['w']=="u"){
$g5['title'] = '제품설명 수정';
}else{
$g5['title'] = '제품설명 글쓰기';
}

include_once(G5_PATH.'/head.sub.php');
$frm_submit = '<div class="btn_insert">
    <a class="shop_delete btn_insertadd" id="'.$_GET["wr_id"].'">삭제</a>
    <a href="./memo_form.php?wr_id='.$_GET["wr_id"].'&w=u" class="btn_insertadd">수정</a>'.PHP_EOL;
$frm_submit .= '</div>';

if($_GET["wr_id"] > 0){
	$sql = "select * from g5_write_memo where wr_id = '".$_GET["wr_id"]."'";
	$program = sql_fetch($sql);
}

?>

<style>
	.tbl_wrap{height:860px; overflow-y:scroll;}
</style>
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
				window.location.href = "memo_delete.php?wr_id="+num;
			}else{

			}
		});
	});
	</script>
<form name="fboardform" id="fboardform" action="./memo_form_update.php" onsubmit="return fboardform_submit(this)" method="post" enctype="multipart/form-data">



<section id="anc_bo_basic">
    <div id="container_title">제품설명 내용</div>
    <?php echo $pg_anchor ?>

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <caption>제품설명 내용</caption>
        <colgroup>
            <col class="grid_4">
            <col>
            <col class="grid_3">
        </colgroup>
        <tbody>
        <tr>
            <th scope="row"><label for="wr_subject">제목<strong class="sound_only">필수</strong></label></th>
            <td>
				<?php echo $program['wr_subject']?>
			</td>
            
        </tr>
		<tr>
            <th scope="row" colspan="2"><label for="wr_content">내용<strong class="sound_only">필수</strong></label></th>
			
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $program['wr_content']?>
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
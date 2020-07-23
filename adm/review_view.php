<?php
$sub_menu = "300700";
include_once('./_common.php');
include_once(G5_EDITOR_LIB);
if ($is_admin != 'super')
    alert_close('최고관리자만 접근 가능합니다.');
if($_GET['w']=="u"){
$g5['title'] = '구매후기 수정';
}else{
$g5['title'] = '구매후기 글쓰기';
}

include_once(G5_PATH.'/head.sub.php');
$frm_submit = '<div class="btn_insert">
    <a class="shop_delete btn_insertadd" id="'.$_GET["wr_id"].'">삭제</a>'.PHP_EOL;
$frm_submit .= '</div>';

if($_GET["wr_id"] > 0){
	$sql = "select * from g5_write_buyol where wr_id = '".$_GET["wr_id"]."'";
	$program = sql_fetch($sql);
}

?>


<form name="fboardform" id="fboardform" action="./notice_form_update.php" onsubmit="return fboardform_submit(this)" method="post" enctype="multipart/form-data">



<section id="anc_bo_basic">
    <div id="container_title">구매후기 내용</div>
    <?php echo $pg_anchor ?>

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <caption>구매후기 내용</caption>
        <colgroup>
            <col class="grid_4">
            <col>
            <col class="grid_3">
        </colgroup>
        <tbody>
		<tr>
            <th scope="row"><label for="wr_content">작성자<strong class="sound_only">필수</strong></label></th>
			<td>
				<?php echo $program['mb_id']?>
			</td>
			<th scope="row"><label for="wr_content">작성일<strong class="sound_only">필수</strong></label></th>
			<td>
				<?php echo $program['wr_datetime']?>
			</td>
		</tr>
		<tr>
            <th scope="row"  colspan="4"><label for="wr_subject">내용<strong class="sound_only">필수</strong></label></th>
            
            
        </tr>
		<tr>
			<td colspan="4">
				<?php echo $program['wr_content']?>
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
				window.location.href = "review_delete.php?wr_id="+num;
			}else{

			}
		});
	});
	
</script>

<?php
include_once(G5_PATH.'/tail.sub.php');
?>
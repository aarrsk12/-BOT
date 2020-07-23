<?php
$sub_menu = "300700";
include_once('./_common.php');
include_once(G5_EDITOR_LIB);
if ($is_admin != 'super')
    alert_close('최고관리자만 접근 가능합니다.');
if($_GET['w']=="u"){
$g5['title'] = '벤리스트 수정';
}else{
$g5['title'] = '벤리스트 글쓰기';
}

include_once(G5_PATH.'/head.sub.php');
$frm_submit = '<div class="btn_insert">
    <a class="shop_delete btn_insertadd" id="'.$_GET["be_id"].'">삭제</a>
    <a href="./benlist_form.php?be_id='.$_GET["be_id"].'&w=u" class="btn_insertadd">수정</a>'.PHP_EOL;
$frm_submit .= '</div>';

if($_GET["be_id"] > 0){
	$sql = "select * from g5_ben where be_id = '".$_GET["be_id"]."'";
	$program = sql_fetch($sql);
}

?>


<form name="fboardform" id="fboardform" action="./notice_form_update.php" onsubmit="return fboardform_submit(this)" method="post" enctype="multipart/form-data">



<section id="anc_bo_basic">
    <div id="container_title">벤리스트 내용</div>
    <?php echo $pg_anchor ?>

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <caption>벤리스트 내용</caption>
        <colgroup>
            <col class="grid_4">
            <col>
            <col class="grid_3">
        </colgroup>
        <tbody>
        <tr>
            <th scope="row"><label for="be_ip">ip<strong class="sound_only">필수</strong></label></th>
            <td>
				<?php echo $program['be_ip']?>
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
				window.location.href = "benlist_delete.php?be_id="+num;
			}else{

			}
		});
	});
	
</script>

<?php
include_once(G5_PATH.'/tail.sub.php');
?>
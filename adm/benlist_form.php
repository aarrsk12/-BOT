<?php
$sub_menu = "300700";
include_once('./_common.php');

if ($is_admin != 'super')
    alert_close('최고관리자만 접근 가능합니다.');
if($_GET['w']=="u"){
$g5['title'] = '벤리스트 수정';
}else{
$g5['title'] = '벤리스트 수정';
}

include_once(G5_PATH.'/head.sub.php');
$frm_submit = '<div class="btn_insert">
    <input type="submit" value="확인" class="btn_insertadd" accesskey="s">
    <a href="./benlist.php?'.$qstr.'" class="btn_insertadd">목록</a>'.PHP_EOL;
$frm_submit .= '</div>';

if($_GET["be_id"] > 0){
	$sql = "select * from g5_ben where be_id = '".$_GET["be_id"]."'";
	$program = sql_fetch($sql);
}
?>


<form name="fboardform" id="fboardform" action="./benlist_form_update.php" onsubmit="return fboardform_submit(this)" method="post" enctype="multipart/form-data">



<section id="anc_bo_basic">
    <div id="container_title">벤리스트 글쓰기</div>
    <?php echo $pg_anchor ?>

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <caption>벤리스트 추가</caption>
        <colgroup>
            <col class="grid_4">
            <col>
            <col class="grid_3">
        </colgroup>
        <tbody>
        <tr>
            <th scope="row"><label for="be_ip">ip<strong class="sound_only">필수</strong></label></th>
            <td>
				<input type="text" name="be_ip" class="required frm_input" size="80" maxlength="120" value="<?php echo  $program['be_ip'];?>">
                <input type="hidden" name="w" value="<?php echo $_GET['w']?>">
				<input type="hidden" name="be_id" value="<?php echo $program['be_id']?>">
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
<?php
$sub_menu = "300700";
include_once('./_common.php');

if ($is_admin != 'super')
    alert_close('최고관리자만 접근 가능합니다.');
if($_GET['w']=="u"){
$g5['title'] = '노래 수정';
}else{
$g5['title'] = '노래 수정';
}

include_once(G5_PATH.'/head.sub.php');
$frm_submit = '<div class="btn_insert">
    <input type="submit" value="확인" class="btn_insertadd" accesskey="s">
    <a href="./music.php?'.$qstr.'" class="btn_insertadd">목록</a>'.PHP_EOL;
$frm_submit .= '</div>';

if($_GET["mu_no"] > 0){
	$sql = "select * from g5_music where mu_no = '".$_GET["mu_no"]."'";
	$program = sql_fetch($sql);
}
?>


<form name="fboardform" id="fboardform" action="./music_form_update.php" onsubmit="return fboardform_submit(this)" method="post" enctype="multipart/form-data">



<section id="anc_bo_basic">
    <div id="container_title">노래 글쓰기</div>
    <?php echo $pg_anchor ?>

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <caption>노래 추가</caption>
        <colgroup>
            <col class="grid_4">
            <col>
            <col class="grid_3">
        </colgroup>
        <tbody>
        <tr>
            <th scope="row"><label for="mu_name">제목<strong class="sound_only">필수</strong></label></th>
            <td>
				<input type="text" name="mu_name" class="required frm_input" size="80" maxlength="120" value="<?php echo  $program['mu_name'];?>">
                <input type="hidden" name="w" value="<?php echo $_GET['w']?>">
				<input type="hidden" name="mu_no" value="<?php echo $program['mu_no']?>">
				</td>
            
        </tr>
		<tr>
            <th scope="row"><label for="mu_url">URL<strong class="sound_only">필수</strong></label></th>
			<td>
				<input type="text" name="mu_url" class="required frm_input" size="80" maxlength="120" value="<?php echo  $program['mu_url'];?>">
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
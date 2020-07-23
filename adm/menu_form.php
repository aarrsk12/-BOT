<?php
$sub_menu = "300700";
include_once('./_common.php');

if ($is_admin != 'super')
    alert_close('최고관리자만 접근 가능합니다.');
if($_GET['w']=="u"){
$g5['title'] = '카테고리 수정';
}else{
$g5['title'] = '카테고리 수정';
}

include_once(G5_PATH.'/head.sub.php');
$frm_submit = '<div class="btn_insert">
    <input type="submit" value="확인" class="btn_insertadd" accesskey="s">
    <a href="./menu.php?'.$qstr.'" class="btn_insertadd">목록</a>'.PHP_EOL;
$frm_submit .= '</div>';

if($_GET["me_id"] > 0){
	$sql = "select * from g5_menu where me_id = '".$_GET["me_id"]."'";
	$program = sql_fetch($sql);
}
?>


<form name="fboardform" id="fboardform" action="./menu_form_update.php" onsubmit="return fboardform_submit(this)" method="post" enctype="multipart/form-data">



<section id="anc_bo_basic">
    <div id="container_title">카테고리 글쓰기</div>
    <?php echo $pg_anchor ?>

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <caption>카테고리 추가</caption>
        <colgroup>
            <col class="grid_4">
            <col>
            <col class="grid_3">
        </colgroup>
        <tbody>
        <tr>
            <th scope="row"><label for="me_name">제목<strong class="sound_only">필수</strong></label></th>
            <td>
				<input type="text" name="me_name" class="required frm_input" size="80" maxlength="120" value="<?php echo  $program['me_name'];?>">
                <input type="hidden" name="w" value="<?php echo $_GET['w']?>">
				<input type="hidden" name="me_id" value="<?php echo $program['me_id']?>">
				</td>
            
        </tr>
		<tr>
            <th scope="row"><label for="me_link">URL<strong class="sound_only">필수</strong></label></th>
			<td>
				<input type="text" name="me_link" class="required frm_input" size="80" maxlength="120" value="<?php echo  $program['me_link'];?>">
			 </td>
		</tr>
		<tr>
            <th scope="row"><label for="me_target">새창여부<strong class="sound_only">필수</strong></label></th>
			<td>
				<input type="radio" name="me_target" value="_self" <?php if($program['me_target']!='_self'){}else{ echo "checked";}?>> 기본 &nbsp <input type="radio" name="me_target" value="_blank" <?php if($program['me_target']=='_blank'){echo "checked";}else{ }?>> 새창
			 </td>
		</tr>
		<tr>
            <th scope="row"><label for="me_use">숨김여부<strong class="sound_only">필수</strong></label></th>
			<td>
				<input type="radio" name="me_use" value="1" <?php if($program['me_use']!='1'){}else{ echo "checked";}?>> 보이기 &nbsp <input type="radio" name="me_use" value="0" <?php if($program['me_use']=='0'){echo "checked";}else{ }?>> 숨기기
			 </td>
		</tr>
		<tr>
            <th scope="row"><label for="mb_level">회원권한<strong class="sound_only">필수</strong></label></th>
			<td>
				<?php echo get_member_level_select('mb_level', 2, $member['mb_level'], $mb['mb_level']) ?>
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
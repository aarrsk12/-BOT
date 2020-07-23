<?php
$sub_menu = "300700";
include_once('./_common.php');
include_once(G5_EDITOR_LIB);
if ($is_admin != 'super')
    alert_close('최고관리자만 접근 가능합니다.');
if($_GET['w']=="u"){
$g5['title'] = '사용법 수정';
}else{
$g5['title'] = '사용방법 글쓰기';
}

include_once(G5_PATH.'/head.sub.php');
$frm_submit = '<div class="btn_insert">
    <input type="submit" value="확인" class="btn_insertadd" accesskey="s">'.PHP_EOL;
$frm_submit .= '</div>';

if($_GET["wr_id"] > 0){
	$sql = "select * from g5_write_memos where wr_id = '".$_GET["wr_id"]."'";
	$program = sql_fetch($sql);
}
$sql2 = " select * from g5_write_shop";
$result2 = sql_query($sql2);

for($i=0; $row=sql_fetch_array($result2); $i++){

			$list[$i] = $row;
}
?>


<form name="fboardform" id="fboardform" action="./memos_form_update.php" onsubmit="return fboardform_submit(this)" method="post" enctype="multipart/form-data">



<section id="anc_bo_basic">
    <div id="container_title">사용법 글쓰기</div>
    <?php echo $pg_anchor ?>

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <caption>사용법 글쓰기</caption>
        <colgroup>
            <col class="grid_4">
            <col>
            <col class="grid_3">
        </colgroup>
        <tbody>
        <tr>
            <th scope="row"><label for="wr_subject">제목<strong class="sound_only">필수</strong></label></th>
            <td>
				<select name="wr_subject" id="wr_subject" style="width:200px;">
				<option value="">선택해주세요.
				<?php
				for ($i=0; $i<count($list); $i++) {
				?>
					<option value="<?php echo $list[$i]['wr_subject'];?>" <?php if($program['wr_subject'] == $list[$i]['wr_subject']){ ?>selected="selected"<?php }?> ><?php echo $list[$i]['wr_subject'];?>
				<?php } ?>
				</select>
				<input type="hidden" name="w" value="<?php echo $_GET['w']?>">
				<input type="hidden" name="wr_id" value="<?php echo $program['wr_id']?>">
				</td>
            
        </tr>
		<tr>
            <th scope="row" colspan="2"><label for="wr_content">내용<strong class="sound_only">필수</strong></label></th>
			
		</tr>
		<tr>
			<td colspan="2">
				<?php echo editor_html("wr_content", get_text($program['wr_content'], 0)); ?>
			</td>
		</tr>
        </tbody>
        </table>
    </div>
</section>
<?php echo $frm_submit; ?>
</form>


<script>

jQuery(function($){
    if( window.self !== window.top ){   // frame 또는 iframe을 사용할 경우 체크
        $("#bo_include_head, #bo_include_tail").on("change paste keyup", function(e) {
            frm_check_file();
        });

        use_captcha_check();
    }
});

function fboardform_submit(f)
{
    <?php echo get_editor_js("wr_content"); ?>
    

    return true;
}
</script>

<?php
include_once(G5_PATH.'/tail.sub.php');
?>
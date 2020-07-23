<?php
$sub_menu = "300700";
include_once('./_common.php');
include_once(G5_EDITOR_LIB);
if ($is_admin != 'super')
    alert_close('최고관리자만 접근 가능합니다.');
if($_GET['w']=="u"){
$g5['title'] = '공지사항 수정';
}else{
$g5['title'] = '공지사항 글쓰기';
}

include_once(G5_PATH.'/head.sub.php');
$frm_submit = '<div class="btn_insert">
    <input type="submit" value="확인" class="btn_insertadd" accesskey="s">
    <a href="./notice.php?'.$qstr.'" class="btn_insertadd">목록</a>'.PHP_EOL;
$frm_submit .= '</div>';

if($_GET["wr_id"] > 0){
	$sql = "select * from g5_write_notice where wr_id = '".$_GET["wr_id"]."'";
	$program = sql_fetch($sql);
}

?>


<form name="fboardform" id="fboardform" action="./notice_form_update.php" onsubmit="return fboardform_submit(this)" method="post" enctype="multipart/form-data">



<section id="anc_bo_basic">
    <div id="container_title">공지사항 글쓰기</div>
    <?php echo $pg_anchor ?>

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <caption>공지사항 글쓰기</caption>
        <colgroup>
            <col class="grid_4">
            <col>
            <col class="grid_3">
        </colgroup>
        <tbody>
        <tr>
            <th scope="row"><label for="wr_subject">제목<strong class="sound_only">필수</strong></label></th>
            <td>
				<input type="text" id="wr_subject" name="wr_subject" class="required frm_input" size="80" maxlength="120" value="<?php echo $program['wr_subject']?>">
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
$(function(){
    $("#board_copy").click(function(){
        window.open(this.href, "win_board_copy", "left=10,top=10,width=500,height=400");
        return false;
    });

    $(".get_theme_galc").on("click", function() {
        if(!confirm("현재 테마의 게시판 이미지 설정을 적용하시겠습니까?"))
            return false;

        $.ajax({
            type: "POST",
            url: "./theme_config_load.php",
            cache: false,
            async: false,
            data: { type: "board" },
            dataType: "json",
            success: function(data) {
                if(data.error) {
                    alert(data.error);
                    return false;
                }

                var field = Array('bo_gallery_cols', 'bo_gallery_width', 'bo_gallery_height', 'bo_mobile_gallery_width', 'bo_mobile_gallery_height', 'bo_image_width');
                var count = field.length;
                var key;

                for(i=0; i<count; i++) {
                    key = field[i];

                    if(data[key] != undefined && data[key] != "")
                        $("input[name="+key+"]").val(data[key]);
                }
            }
        });
    });
});

function board_copy(bo_table) {
    window.open("./board_copy.php?bo_table="+bo_table, "BoardCopy", "left=10,top=10,width=500,height=200");
}

function set_point(f) {
    if (f.chk_grp_point.checked) {
        f.bo_read_point.value = "<?php echo $config['cf_read_point'] ?>";
        f.bo_write_point.value = "<?php echo $config['cf_write_point'] ?>";
        f.bo_comment_point.value = "<?php echo $config['cf_comment_point'] ?>";
        f.bo_download_point.value = "<?php echo $config['cf_download_point'] ?>";
    } else {
        f.bo_read_point.value     = f.bo_read_point.defaultValue;
        f.bo_write_point.value    = f.bo_write_point.defaultValue;
        f.bo_comment_point.value  = f.bo_comment_point.defaultValue;
        f.bo_download_point.value = f.bo_download_point.defaultValue;
    }
}

var captcha_chk = false;

function use_captcha_check(){
    $.ajax({
        type: "POST",
        url: g5_admin_url+"/ajax.use_captcha.php",
        data: { admin_use_captcha: "1" },
        cache: false,
        async: false,
        dataType: "json",
        success: function(data) {
        }
    });
}

function frm_check_file(){
    var bo_include_head = "<?php echo $board['bo_include_head']; ?>";
    var bo_include_tail = "<?php echo $board['bo_include_tail']; ?>";
    var head = jQuery.trim(jQuery("#bo_include_head").val());
    var tail = jQuery.trim(jQuery("#bo_include_tail").val());

    if(bo_include_head !== head || bo_include_tail !== tail){
        // 캡챠를 사용합니다.
        jQuery("#admin_captcha_box").show();
        captcha_chk = true;

        use_captcha_check();

        return false;
    } else {
        jQuery("#admin_captcha_box").hide();
    }

    return true;
}

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

    if (parseInt(f.bo_count_modify.value) < 0) {
        alert("원글 수정 불가 댓글수는 0 이상 입력하셔야 합니다.");
        f.bo_count_modify.focus();
        return false;
    }

    if (parseInt(f.bo_count_delete.value) < 1) {
        alert("원글 삭제 불가 댓글수는 1 이상 입력하셔야 합니다.");
        f.bo_count_delete.focus();
        return false;
    }

    if( captcha_chk ) {
        <?php echo isset($captcha_js) ? $captcha_js : ''; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>
    }

    return true;
}
</script>

<?php
include_once(G5_PATH.'/tail.sub.php');
?>
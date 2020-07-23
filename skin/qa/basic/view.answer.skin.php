<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>
<style>
.board{
width:calc(100% - 40px);
padding:20px;
}
.board p{
border:2px solid #282b30 !important;
background:#2f3136 !important;
line-height:180% !important;
padding:8px !important;
color:#fff !important;
border-radius:5px !important;
font-size:13px !important;
font-family : Dotum !important;
}
.board p+p{
margin-top:10px !important;
}
.board span.h{
color:#cb4b16;
display:block;
}
.board span.h2{
color:#00ffec;
display:block;
font-weight:bold;
}
.board span.y{
color:#ffc100;
display:block;
}
</style>
<article id="bo_v">
	<div class="board_title">
		<span class="bo_v_reply"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> 답변</span> <?php echo get_text($answer['qa_subject']); ?>
	</div>
    
<div class="board">
<p style="line-height: 23.4px;">
<span class="y"> <?php echo get_view_thumbnail(conv_content($answer['qa_content'], $answer['qa_html']), $qaconfig['qa_image_width']); ?></span>
</p>
</div>
</article>
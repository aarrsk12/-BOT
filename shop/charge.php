<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.sub.php');



?>
<style>

#charging_pop{
background:#fff; position:fixed; top:0; left:0; right:0; bottom:0; z-index:1004;
}
#charging_pop .charging_top{
text-align: center;
font-size:24px;
font-weight: bold;
position: fixed;
top:0;
left:0;
right:0;
height:40px;
line-height: 40px;
background: #6f8dfd;
color: #fff;
}
#charging_pop .charging_top i{
position: fixed;
top:0;
right:10px;
line-height: 40px;
font-size:24px;
cursor: pointer;
}
#charging_pop .charging_body{
position: relative;
top: 40px;
height: calc(100% - 80px);
overflow-y: scroll;
}
#charging_pop .charging_table{
padding:0 10px 10px 10px;
}
#charging_pop .charging_table th{
text-align: left;
padding:7px 0;
font-size:13px;
color:#444;
}
#charging_pop .charging_table td input[type="text"]{
border:1px solid #cecece;
background: none;
width:100%;
height:28px;
font-size:12px;
padding:0 5px;
}
#charging_pop .charging_table.second{
padding-top:40px;
}
#charging_pop .charging_table.second th,
#charging_pop .charging_table.second td{
border:1px solid #bdbdbd;
font-size:13px;
}
#charging_pop .charging_table.second tr+tr th,
#charging_pop .charging_table.second tr+tr td{
border-top:0;
}
#charging_pop .charging_table.second td{
border-left:0;
padding-left:5px;
}
#charging_pop .charging_table.second th{
width:65px;
text-align: center;
padding-left:0;
}
#charging_pop .charging_footer{
position: fixed;
bottom:0px;
height:40px;
left:0;
right:0;
line-height: 40px;
background: #007eff;
color: #fff;
text-align: center;
font-size:20px;
font-weight: bold;
cursor:pointer;
}

</style>
<div class="charging_pop" id="charging_pop">
<div class="charging_top">
충전하기<i class="fa fa-times" aria-hidden="true" onclick="window.close();"></i>
</div>
<div class="charging_body">
<form name="check_form" method="post" action="./charge_update.php" onsubmit="form_check();" enctype="multipart/form-data">

<table width="100%" cellpadding="0" cellspacing="0" class="charging_table">
<tbody><tr><th>입금자 명</th></tr>
<tr><td><input type="text" name="mb_name" value="<?php echo $member['mb_name'];?>"></td></tr>
<tr><th>충전금액</th></tr>
<tr><td><input type="text" name="price" onblur="this.value=number_filter(this.value);" onkeyup="this.value=number_filter(this.value);"></td></tr>
</tbody></table>
</form>

<table width="100%" cellpadding="0" cellspacing="0" class="charging_table second">
<tbody><tr><th>결제수단</th><td>무통장입금</td></tr>
<tr><th>입금은행</th><td><?php echo $config['cf_1'];?></td></tr>
<tr><th>입금계좌</th><td><?php echo $config['cf_2'];?></td></tr>
<tr><th>예금주</th><td><?php echo $config['cf_3'];?></td></tr>
</tbody></table>

<div style="padding:10px; background:#ccc;">
충전 요청 후 2일 이내 미입금시 해당 요청 건은 취소 처리되오니 유의하시기 바랍니다.
<br>입금자명이 다를경우 해당 요청 건이 누락될 수 있습니다.
<br>관리자가 자리를 비웠을때나 개인용무중일때에는 입금확인이 지연될 수 있습니다.
<br>입금하시고 입금 스샷을 디코로 관리자에게 보내주셔야 처리됩니다.
</div>

</div>

<div class="charging_footer">
<a onclick="javascript:form_check();">충전요청</a>
</div>
<script>

function number_filter(str_value){
	var str = str_value.replace(/[^0-9]/gi, "");
	if(str<0) str = 0;
	return str;
}
function form_check(){
	
var fm = document.check_form;
	if(!fm.price.value){
	alert('충전금액을 입력해주세요.');
	fm.price.focus();
	return;
	}
	if(!fm.mb_name.value){
	alert('입금자명을 입력해주세요.');
	fm.mb_name.focus();
	return;
	}
fm.submit();
}
</script>
</div>
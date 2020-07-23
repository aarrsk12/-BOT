<?php
include_once('./_common.php'); 
include_once(G5_THEME_PATH.'/head.sub.php'); 

$price = $_POST['price']; 
$mb_id = $member['mb_id']; 

$price = preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $price);
$mb_id = preg_replace("/[ #\&\+\-%=\/\\\:;,\.'\"\^`~\|\\?\$#<>()\[\]\{\}]/i", "", $mb_id);

$bank_num = str_replace( " ","", $config['cf_2']); 
$sender = $_POST['mb_name']; 
$sender = preg_replace("/[ #\&\+\-%=\/\\\:;,\.'\"\^`~\|\\?\$#<>()\[\]\{\}]/i", "", $sender);
$money = $price; 
$mid = $mb_id; 
$customer = "gumbu3"; 
$encode = "UTF-8"; 
$sql23 = "select count(*)coul from g5_money where mb_id = '".$mb_id."' and mo_chk = '0'"; 
$row2 = sql_fetch($sql23); 
$sql33 = "update g5_member set mb_name = '".$sender."' where mb_id = '".$mb_id."'"; sql_query($sql33); 
if($row2['coul']>0)
{ 
	echo "<script>alert('이미 충전신청 내역이 있습니다.');opener.location.href='/mypage/charge_list.php';window.close();</script>"; }else{ $sql = " insert into g5_money
                        set mb_id = '$mb_id',
                            mo_date = '".G5_TIME_YMDHIS."',
                            mb_money = '$price',
							mo_chk = '0',
							mb_name = '$sender'"; sql_query($sql); $sql2 = "select * from g5_money where mb_id = '$mb_id' order by mo_no desc limit 0, 1"; 

	$result2 = sql_fetch($sql2); 
	$old = $result2['mo_no'];
							
<input type="hidden" name="customer" value="echo $customer;" id="customer">
<input type="hidden" name="encode" value="echo $encode;" id="encode">
<input type="hidden" name="bank_num" value="echo $bank_num;" id="bank_num">
<input type="hidden" name="money" value="echo $money;" id="money">
<input type="hidden" name="sender" value="echo $sender;" id="sender">
<input type="hidden" name="old" value="echo $old;" id="old">
<input type="hidden" name="mid" value="echo $mid;" id="mid">
<script type="text/javascript">
		window.onload = function(){
			var _customer = document.getElementById('customer').value;
			var _encode = document.getElementById('encode').value;
			var _bank_num = document.getElementById('bank_num').value;
			var _sender = document.getElementById('sender').value;
			var _money = document.getElementById('money').value;
			var _oid = document.getElementById('old').value;
			var _mid = document.getElementById('mid').value;
			report_to_redbank(_customer,_encode,_bank_num,_sender,_money,_oid,_mid);
		}
    	var the_callback = function(data){
    		
    		
	    		if(data.code==1){
					alert("충전신청이 완료됬습니다.")
	    		    opener.location.href='/mypage/charge_list.php';
					window.close();
	    		}else{
	    			alert( "충전신청이 완료됬습니다.");
					opener.location.href='/mypage/charge_list.php';
					window.close();
	    		}
    		}
    	
		function report_to_redbank(_customer,_encode,_bank_num,_sender,_money,_oid,_mid){  
		    var _random=(new Date()).getTime();
		    
		    var url = "http://www.redbanking.com/redbankjs.php?_customer="+_customer+"&_encode="+_encode+"&_bank_num="+_bank_num+"&_money="+_money+"&_sender="+_sender+"&_oid="+_oid+"&_mid="+_mid+"&_random="+_random+"&callback=the_callback";
		    url=encodeURI(url);
		    var script = document.createElement('script');
		    script.setAttribute('src', url);
		    document.getElementsByTagName('head')[0].appendChild(script);
		} 	   
    </script>  
}
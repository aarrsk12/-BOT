<?
$sub_menu = "400100";
include_once('./_common.php');
include_once('./admin.head.php');

function get_content($url) {

$agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)';
$curlsession = curl_init ();

curl_setopt ($curlsession, CURLOPT_URL, $url);
curl_setopt ($curlsession, CURLOPT_HEADER, 0);
curl_setopt ($curlsession, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($curlsession, CURLOPT_POST, 0);
curl_setopt ($curlsession, CURLOPT_USERAGENT, $agent);
curl_setopt ($curlsession, CURLOPT_REFERER, "");
curl_setopt ($curlsession, CURLOPT_TIMEOUT, 3);

$buffer = curl_exec ($curlsession);
$cinfo = curl_getinfo($curlsession);

if ($cinfo['http_code'] != 200)
	{
		return "";	
	}	
		return $buffer;
}


//----------------------------------------------사다리----------------------------------------------------------------------//
	
	$nUrl ='http://ntry.com/data/json/games/power_ladder/result.json?_=1533017949675';  //네임드사다리
	$sadari_result=get_content($nUrl);
	$sadari_result = str_replace("{","",$sadari_result); 
	$sadari_result = str_replace("}","",$sadari_result); 
	$sadari_result = str_replace( "\"","", $sadari_result);
	$sadari_result = str_replace( ":",",", $sadari_result);
	$sadari_result = explode(',',$sadari_result);
	
	$SDRgame_count = $sadari_result[3];  //사다리회차
	$SDRgame_even = $sadari_result[9];   //사다리게임 홀짝
	$SDRgame_line = $sadari_result[7];   //사다리게임 줄
	$SDRgame_Left = $sadari_result[5];   //사다리게임 좌우
	$SDRgame_date = date("Y-m-d");   //사다리게임 날짜
	

	$sql = "select * from g5_game where game_no = '".$SDRgame_count."' and game_win = 'h'";
	$result = sql_query($sql);
	for($i=0; $row=sql_fetch_array($result); $i++){
				$list[$i] = $row;
	}
	for ($i=0; $i<count($list); $i++) {

		if($list[$i]['game_odd'] == $SDRgame_even){
			$sql = "update g5_game set game_win = 'y' where game_num = '".$list[$i]['game_num']."'";
			sql_query($sql);
			$mb_id = $list[$i]['mb_id'];
			$po_point = $list[$i]['game_winmoney'];
			$po_content = "미니게임베팅 당첨";
			$expire = preg_replace('/[^0-9]/', '', $config['cf_point_term']);

			insert_point($mb_id, $po_point, $po_content, '@minigame', $mb_id, $mb_id.'-'.uniqid(''), $expire);
		}else{
			$sql = "update g5_game set game_win = 'n' where game_num = '".$list[$i]['game_num']."'";
			sql_query($sql);
		}
	}

?>
미니게임 결과 자동 입력됨<br>
회차 : <?php echo $SDRgame_count;?><br>
홀짝 : <?php echo $SDRgame_even;?>
<script>
	$(function(){
		setInterval("reload_time()", 1000);
	});
	function reload_time(){
		var today = new Date();
		if (today.getMinutes() == "3" && today.getSeconds() == "03" || today.getMinutes() == "8" && today.getSeconds() == "03" || today.getMinutes() == "13" && today.getSeconds() == "03" || today.getMinutes() == "18" && today.getSeconds() == "03" || today.getMinutes() == "23" && today.getSeconds() == "03" || today.getMinutes() == "28" && today.getSeconds() == "03" || today.getMinutes() == "33" && today.getSeconds() == "03" || today.getMinutes() == "38" && today.getSeconds() == "03"|| today.getMinutes() == "43" && today.getSeconds() == "03" || today.getMinutes() == "48" && today.getSeconds() == "03"|| today.getMinutes() == "53" && today.getSeconds() == "03" || today.getMinutes() == "58" && today.getSeconds() == "03"){
			location.reload();
		}

   }
</script>
<?php
include_once ('./admin.tail.php');
?>
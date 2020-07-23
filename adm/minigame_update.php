<?php
$sub_menu = "400100";
include_once('./_common.php');

$game_num = $_POST["game_num"];
$game_odd = $_POST["game_odd"];

$sql2 = "select * from g5_game where game_num = '".$game_num."'";
$result2 = sql_fetch($sql2);

if($result2['game_odd'] == $game_odd){
$sql = "update g5_game set game_win = 'y' where game_num = '$game_num'";
sql_query($sql);
$mb_id = $result2['mb_id'];
$po_point = $result2['game_winmoney'];
$po_content = "미니게임베팅 당첨";
$expire = preg_replace('/[^0-9]/', '', $config['cf_point_term']);

insert_point($mb_id, $po_point, $po_content, '@minigame', $mb_id, $mb_id.'-'.uniqid(''), $expire);
}else{
$sql = "update g5_game set game_win = 'n' where game_num = '$game_num'";
sql_query($sql);
}


goto_url("./minigame.php");
?>

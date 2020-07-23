<?php
include_once('./_common.php');

if( function_exists('social_check_login_before') ){
    $social_login_html = social_check_login_before();
}

include_once('./_head.sub.php');

$mb_id       = trim($_GET['mb_id']);
$mb_password = trim($_GET['mb_password']);

$mb_id = preg_replace("/[ #\&\+\-%=\/\\\:;,\.'\"\^`~\|\\?\$#<>()\[\]\{\}]/i", "", $mb_id);
$mb_password = preg_replace("/[ #\&\+\-%=\/\\\:;,\.'\"\^`~\|\\?\$#<>()\[\]\{\}]/i", "", $mb_password);

$sql = "select * from {$g5['member_table']} where mb_id = '{$mb_id}'";
$row = sql_fetch($sql);

if($row['mb_id']){
	
	echo '<script>alert(\'회원아이디가 이미 존재합니다.\');</script>';
	echo '<script>location.href="/bbs/login.php";</script>';
}

$sql2 = " insert into {$g5['member_table']}
                set mb_id = '{$mb_id}',
                     mb_password = '".get_encrypt_string($mb_password)."',
                     mb_name = '0',
                     mb_nick = '0',
                     mb_nick_date = '".G5_TIME_YMD."',
                     mb_email = '0',
                     mb_homepage = '0',
                     mb_tel = '0',
                     mb_zip1 = '0',
                     mb_zip2 = '0',
                     mb_addr1 = '0',
                     mb_addr2 = '0',
                     mb_addr3 = '0',
                     mb_addr_jibeon = '0',
                     mb_signature = '0',
                     mb_profile = '0',
                     mb_today_login = '".G5_TIME_YMDHIS."',
                     mb_datetime = '".G5_TIME_YMDHIS."',
                     mb_ip = '{$_SERVER['REMOTE_ADDR']}',
                     mb_level = '{$config['cf_register_level']}',
                     mb_recommend = '0',
                     mb_login_ip = '{$_SERVER['REMOTE_ADDR']}',
                     mb_mailling = '0',
                     mb_sms = '0',
                     mb_open = '0',
                     mb_open_date = '".G5_TIME_YMD."',
                     mb_1 = '0',
                     mb_2 = '0',
                     mb_3 = '0',
                     mb_4 = '0',
                     mb_5 = '0',
                     mb_6 = '0',
                     mb_7 = '0',
                     mb_8 = '0',
                     mb_9 = '0',
                     mb_10 = '0'
                     {$sql_certify} ";
sql_query($sql2);
echo '<script>alert(\'가입되었습니다.\');</script>';
echo '<script>location.href="/bbs/login.php";</script>';
include_once('./_tail.sub.php');
?>

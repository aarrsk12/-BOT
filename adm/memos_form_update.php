<?php
$sub_menu = "300100";
include_once('./_common.php');

$wr_subject = $_POST["wr_subject"];
$wr_content = $_POST["wr_content"];
$wr_datetime = date("Y-m-d H:i:s");
$w = $_POST["w"];
$wr_id = $_POST["wr_id"];
if($w == "u"){
$sql = "update g5_write_memos set wr_subject = '$wr_subject', wr_content = '$wr_content', wr_datetime = '$wr_datetime' where wr_id = '$wr_id'";
sql_query($sql);
}else{
$wr_num = get_next_num('g5_write_memos');
$sql = " insert into g5_write_memos
                set wr_num = '$wr_num',
                     wr_reply = '0',
                     wr_comment = 0,
                     ca_name = '0',
                     wr_option = '1',
                     wr_subject = '$wr_subject',
                     wr_content = '$wr_content',
                     wr_link1 = '$wr_link1',
                     wr_link2 = '0',
                     wr_link1_hit = 0,
                     wr_link2_hit = 0,
                     wr_hit = 0,
                     wr_good = 0,
                     wr_nogood = 0,
                     mb_id = '{$member['mb_id']}',
                     wr_password = '{$member['mb_password']}',	
                     wr_name = '{$member['mb_id']}',
                     wr_email = '1',
                     wr_homepage = '1',
                     wr_datetime = '".G5_TIME_YMDHIS."',
                     wr_last = '".G5_TIME_YMDHIS."',
                     wr_ip = '{$_SERVER['REMOTE_ADDR']}',
                     wr_1 = '0',
                     wr_2 = '0',
                     wr_3 = '0',
                     wr_4 = '0',
                     wr_5 = '0',
                     wr_6 = '0',
                     wr_7 = '0',
                     wr_8 = '0',
                     wr_9 = '0',
                     wr_10 = '0'";
sql_query($sql);
}
echo "<script>alert('입력되었습니다.');opener.location.href='./memos.php';window.close();</script>";
?>

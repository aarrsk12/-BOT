<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.sub.php');

$price = $_POST['price']; //충전금액
$mb_id = $member['mb_id']; //유저 아이디

$price = preg_replace("/[ #\&\+\-%=\/\\\:;,\.'\"\^`~\|\\?\$#<>()\[\]\{\}]/i", "", $price);
$mb_id = preg_replace("/[ #\&\+\-%=\/\\\:;,\.'\"\^`~\|\\?\$#<>()\[\]\{\}]/i", "", $mb_id);

//문상번호 가져옴
$munsang1 = $_POST['munsang1'];
$munsang2 = $_POST['munsang2'];
$munsang3 = $_POST['munsang3'];
$munsang4 = $_POST['munsang4'];

//문상번호 특수문자 필터링 
$munsang1 = preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $munsang1);
$munsang2 = preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $munsang2);
$munsang3 = preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $munsang3);
$munsang4 = preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $munsang4);

//충전내역 이미 있나 확인
$sql23 = "select count(*)coul from g5_munsang where mb_id = '".$mb_id."' and buy = '0'";
$row2 = sql_fetch($sql23);
if($row2['coul']>0){
	echo "<script>alert('이미 충전신청 내역이 있습니다.');opener.location.href='/mypage/munsang_list.php';window.close();</script>";
}
//충전내역 없을시 충전 진행
else
{
$munsang = ''; //최종 문상 번호

//문상 번호 합치기
for($i=0; $i<count($munsang1);$i++){
		if(strlen($munsang1[$i]) > 2){
		$munsang = $munsang.$munsang1[$i]."-".$munsang2[$i]."-".$munsang3[$i]."-".$munsang4[$i]."<br>";
		}
}

$sql = " insert into g5_munsang
                        set mb_id = '$mb_id',
                            datetime = '".G5_TIME_YMDHIS."',
                            point = '$price',
							buy = '0',
							munsang = '$munsang'";
sql_query($sql);

echo "<script>alert('관리자가 확인 후 승인해드리겠습니다.');opener.location.href='/mypage/munsang_list.php';window.close();</script>";
<a href="javascript:window.open('','_self').close();">close</a>
} ?>
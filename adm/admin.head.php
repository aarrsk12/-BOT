<?php
if (!defined('_GNUBOARD_')) exit;

$begin_time = get_microtime();

$files = glob(G5_ADMIN_PATH.'/css/admin_extend_*');
if (is_array($files)) {
    foreach ((array) $files as $k=>$css_file) {
        
        $fileinfo = pathinfo($css_file);
        $ext = $fileinfo['extension'];
        
        if( $ext !== 'css' ) continue;
        
        $css_file = str_replace(G5_ADMIN_PATH, G5_ADMIN_URL, $css_file);
        add_stylesheet('<link rel="stylesheet" href="'.$css_file.'">', $k);
    }
}

include_once(G5_PATH.'/head.sub.php');

function print_menu1($key, $no='')
{
    global $menu;

    $str = print_menu2($key, $no);

    return $str;
}

function print_menu2($key, $no='')
{
    global $menu, $auth_menu, $is_admin, $auth, $g5, $sub_menu;

    $str .= "<ul>";
    for($i=1; $i<count($menu[$key]); $i++)
    {
        if ($is_admin != 'super' && (!array_key_exists($menu[$key][$i][0],$auth) || !strstr($auth[$menu[$key][$i][0]], 'r')))
            continue;

        if (($menu[$key][$i][4] == 1 && $gnb_grp_style == false) || ($menu[$key][$i][4] != 1 && $gnb_grp_style == true)) $gnb_grp_div = 'gnb_grp_div';
        else $gnb_grp_div = '';

        if ($menu[$key][$i][4] == 1) $gnb_grp_style = 'gnb_grp_style';
        else $gnb_grp_style = '';

        $current_class = '';

        if ($menu[$key][$i][0] == $sub_menu){
            $current_class = ' on';
        }

        $str .= '<li data-menu="'.$menu[$key][$i][0].'"><a href="'.$menu[$key][$i][2].'" class="gnb_2da '.$gnb_grp_style.' '.$gnb_grp_div.$current_class.'">'.$menu[$key][$i][1].'</a></li>';

        $auth_menu[$menu[$key][$i][0]] = $menu[$key][$i][1];
    }
    $str .= "</ul>";

    return $str;
}

$adm_menu_cookie = array(
'container' => '',
'gnb'       => '',
'btn_gnb'   => '',
);

if( ! empty($_COOKIE['g5_admin_btn_gnb']) ){
    $adm_menu_cookie['container'] = 'container-small';
    $adm_menu_cookie['gnb'] = 'gnb_small';
    $adm_menu_cookie['btn_gnb'] = 'btn_gnb_open';
}
?>

<script>
var tempX = 0;
var tempY = 0;

function imageview(id, w, h)
{

    menu(id);

    var el_id = document.getElementById(id);

    //submenu = eval(name+".style");
    submenu = el_id.style;
    submenu.left = tempX - ( w + 11 );
    submenu.top  = tempY - ( h / 2 );

    selectBoxVisible();

    if (el_id.style.display != 'none')
        selectBoxHidden(id);
}
</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<div id="to_content"><a href="#container">본문 바로가기</a></div>

<header id="hd">
    <h1><?php echo $config['cf_title'] ?></h1>
    <div id="hd_top">
       <div id="logo"><a href="<?php echo G5_ADMIN_URL ?>"><img src="<?php echo G5_ADMIN_URL ?>/img/logo.png" alt="<?php echo $config['cf_title'] ?> 관리자"></a></div>
	   <div class="hdmenu">
	   		<div class="hdmenu_bg" style="display:none;">
			</div>
			<ul class="hdmenu_ul">
				<li class="hdmenu_li" style="width:10%;">
					<a class="hdmenu_a" id="hdm_open">열기</a>
				</li>
				<li class="hdmenu_li">
					<a href="javascript:seller_view();" class="hdmenu_a">사이트관리</a>
					<ul style="display:none; border-left:1px solid rgb(47,49,54);" class="hdmenu_subul">
						<li class="hdmenu_subli"><a href="javascript:seller_view();" class="hdmenu_suba">내정보</a></li>
						<li class="hdmenu_subli"><a href="./menu.php" class="hdmenu_suba">카테고리</a></li>
						<li class="hdmenu_subli"><a href="./member_list.php" class="hdmenu_suba">회원관리</a></li>
						<li class="hdmenu_subli"><a href="./newwinlist.php" class="hdmenu_suba">팝업관리</a></li>
						<li class="hdmenu_subli"><a href="./login_list.php" class="hdmenu_suba">접속로그</a></li>
						<li class="hdmenu_subli"><a href="./benlist.php" class="hdmenu_suba">벤리스트</a></li>
					</ul>
				</li>
				<li class="hdmenu_li">
					<a href="./charge_list.php" class="hdmenu_a">충전내역</a>
					<ul style="display:none;" class="hdmenu_subul">
						<li class="hdmenu_subli"><a href="./charge_list.php" class="hdmenu_suba">충전내역</a></li>
						<li class="hdmenu_subli"><a href="./munsang_list.php" class="hdmenu_suba">문상충전</a></li>
					</ul>
				</li>
				<li class="hdmenu_li">
					<a href="./shop.php" class="hdmenu_a">제품관리</a>
					<ul style="display:none;" class="hdmenu_subul">
						<li class="hdmenu_subli"><a href="./shop.php" class="hdmenu_suba">제품관리</a></li>
						<li class="hdmenu_subli"><a href="./shopcode.php" class="hdmenu_suba">코드관리</a></li>
						<li class="hdmenu_subli"><a href="./shopcode_list.php" class="hdmenu_suba">판매기록</a></li>
					</ul>
				</li>
				<li class="hdmenu_li">
					<a href="./statistics.php" class="hdmenu_a">통계</a>
					<ul style="display:none;" class="hdmenu_subul">
						<li class="hdmenu_subli"><a href="./statistics.php" class="hdmenu_suba">통계</a></li>
						<li class="hdmenu_subli"><a href="./music.php" class="hdmenu_suba">음악리스트</a></li>
						<li class="hdmenu_subli"><a href="./today.php" class="hdmenu_suba">방문자수</a></li>
					</ul>
				</li>
				<li class="hdmenu_li">
					<a href="./notice.php" class="hdmenu_a">게시판</a>
					<ul style="display:none; border:0 none;" class="hdmenu_subul">
						<li class="hdmenu_subli"><a href="./notice.php" class="hdmenu_suba">공지사항</a></li>
						<li class="hdmenu_subli"><a href="./notice.php" class="hdmenu_suba">문의사항</a></li>
						<li class="hdmenu_subli"><a href="./review.php" class="hdmenu_suba">리뷰관리</a></li>
						<li class="hdmenu_subli"><a href="./memo.php" class="hdmenu_suba">제품설명</a></li>
						<li class="hdmenu_subli"><a href="./memos.php" class="hdmenu_suba">사용법</a></li>
						<li class="hdmenu_subli"><a href="./download.php" class="hdmenu_suba">다운로드</a></li>
					</ul>
				</li>
			</ul>
	   </div>
    </div>
</header>
<script>
	var mmb = 0;
	$(function(){
		$('#hdm_open').on('click', function(){
			if(mmb == 0){
				$('.hdmenu_bg').css('display', 'block');
				$('.hdmenu_subul').css('display', 'block');
				$('.hdmenu_subul').css('height', '250px');
				$(this).empty();
				$(this).html("닫기");
				mmb = 1;
			}else{
				$('.hdmenu_bg').css('display', 'none');
				$('.hdmenu_subul').css('display', 'none');
				$('.hdmenu_subul').css('height', '60px');
				$(this).empty();
				$(this).html("열기");
				mmb = 0;
			}
		});
		$('.hdmenu_ul').hover(function(){
			if(mmb == 0){
				$('.hdmenu_bg').css('display', 'block');
				$('.hdmenu_subul').css('display', 'block');
				$('.hdmenu_subul').css('height', '250px');
			}
		}, function(){
			if(mmb == 0){
				$('.hdmenu_bg').css('display', 'none');
				$('.hdmenu_subul').css('display', 'none');
				$('.hdmenu_subul').css('height', '60px');
			}
		});
	});
	function seller_view()
	{

		var url = "./seller_view.php";
		window.open(url, "add_program", "left=350,top=150,width=750,height=800,scrollbars=yes,resizable=yes");
		return false;
	}
</script>
<script>
jQuery(function($){

    var menu_cookie_key = 'g5_admin_btn_gnb';

    $(".tnb_mb_btn").click(function(){
        $(".tnb_mb_area").toggle();
    });

    $("#btn_gnb").click(function(){
        
        var $this = $(this);

        try {
            if( ! $this.hasClass("btn_gnb_open") ){
                set_cookie(menu_cookie_key, 1, 60*60*24*365);
            } else {
                delete_cookie(menu_cookie_key);
            }
        }
        catch(err) {
        }

        $("#container").toggleClass("container-small");
        $("#gnb").toggleClass("gnb_small");
        $this.toggleClass("btn_gnb_open");

    });

    $(".gnb_ul li .btn_op" ).click(function() {
        $(this).parent().addClass("on").siblings().removeClass("on");
    });

});
</script>
<?php
$todaytime = date("Y-m-d 00:00:00");
$todaytime2 = date("Y-m-d 23:59:59");
// 1일 통계 
$today_chargesql = "select sum(mb_money)money, count(*)coul from g5_money where mo_clodate >= '".$todaytime."' and mo_clodate <= '".$todaytime2."'";
$today_chargerow = sql_fetch($today_chargesql);
$today_munsangsql = "select sum(point)money, count(*)coul from g5_munsang where datetime >= '".$todaytime."' and datetime <= '".$todaytime2."'";
$today_munsangrow = sql_fetch($today_munsangsql);
$today_aocnfsql = "select sum(wr_4)money, count(*)coul from g5_write_shoplog where wr_datetime >= '".$todaytime."' and wr_datetime <= '".$todaytime2."'";
$today_aocnfrow = sql_fetch($today_aocnfsql);



$today_chargemoney = $today_chargerow['money'] + $today_munsangrow['money'];
$today_chargecnt = $today_chargerow['coul'] + $today_munsangrow['coul'];

$today_plusbo = 0;

$sql = " select * from g5_write_shoplog where wr_datetime >= '".$todaytime."' and wr_datetime <= '".$todaytime2."'";
$result = sql_query($sql);

for($i=0; $row=sql_fetch_array($result); $i++){
	$today_sql = "select * from g5_write_code where wr_id = '".$row['wr_5']."'";
	$today_row = sql_fetch($today_sql);

	$today_sql2 = "select * from g5_write_code_shop where wr_num = '".$today_row['wr_2']."'";
	$today_row2 = sql_fetch($today_sql2);

	$today_plusbo = $today_plusbo + $today_row2['wr_2'];
}
$today_plusbo2 = $today_chargemoney - $today_plusbo;

$all_chargesql = "select sum(mb_money)money, count(*)coul from g5_money";
$all_chargerow = sql_fetch($all_chargesql);
$all_munsangsql = "select sum(point)money, count(*)coul from g5_munsang";
$all_munsangrow = sql_fetch($all_munsangsql);
$all_aocnfsql = "select sum(wr_4)money, count(*)coul from g5_write_shoplog";
$all_aocnfrow = sql_fetch($all_aocnfsql);



$all_chargemoney = $all_chargerow['money'] + $all_munsangrow['money'];
$all_chargecnt = $all_chargerow['coul'] + $all_munsangrow['coul'];

$all_plusbo = 0;

$sql = " select * from g5_write_shoplog ";
$result = sql_query($sql);

for($i=0; $row3=sql_fetch_array($result); $i++){
	$all_sql = "select * from g5_write_code where wr_id = '".$row3['wr_5']."'";
	$all_row = sql_fetch($week_sql);

	$all_sql2 = "select * from g5_write_code_shop where wr_num = '".$all_row['wr_2']."'";
	$all_row2 = sql_fetch($week_sql2);

	$all_plusbo = $all_plusbo + $all_row2['wr_2'];
}
$all_plusbo2 = $all_chargemoney - $all_plusbo;

$mb_allsql = "select count(*)cnt from g5_member";
$mb_allrow = sql_fetch($mb_allsql);

$mb_allsql2 = "select count(*)cnt from g5_member where mb_level > 2";
$mb_allrow2 = sql_fetch($mb_allsql2);

$charge_allsql = "select count(*)cnt from g5_money where mo_chk = '0'";
$charge_allrow = sql_fetch($charge_allsql);

$cha_ckbb = 0;
if($charge_allrow['cnt']){
$cha_ckbb = $charge_allrow['cnt'];
}else{
$cha_ckbb = 0;
}

?>

<div id="wrapper">
	<div id="aside">
		<img src="<?php echo $config['cf_5_subj'];?>" style="margin:15px 25px; width:200px">
		<table cellspacing="0" cellpadding="15" width="90%" style="width:90%; margin-left:5%;">
			<tr style="border-bottom:1px dotted #eaeaea">
				<th>오늘 충전금액</th>
				<td><?php echo number_format($today_chargemoney);?>원</td>
			</tr>
			<tr style="border-bottom:1px dotted #eaeaea">
				<th>오늘 매출금액</th>
				<td><?php echo number_format($today_aocnfrow['money']);?>원</td>
			</tr>
			<tr style="border-bottom:1px dotted #eaeaea">
				<th>오늘 판매수익</th>
				<td><?php echo number_format($today_plusbo2);?>원</td>
			</tr>
			<tr style="border-bottom:1px dotted #eaeaea">
				<th>전체 충전금액</th>
				<td><?php echo number_format($all_chargemoney);?>원</td>
			</tr>
			<tr style="border-bottom:1px dotted #eaeaea">
				<th>전체 매출금액</th>
				<td><?php echo number_format($all_aocnfrow['money']);?>원</td>
			</tr>
			<tr style="border-bottom:1px dotted #eaeaea">
				<th>전체 판매수익</th>
				<td><?php echo number_format($all_plusbo2);?>원</td>
			</tr>
			<tr style="border-bottom:1px dotted #eaeaea">
				<th>충전요청수 </th>
				<td><?php echo $cha_ckbb;?>개</td>
			</tr>
			<tr style="border-bottom:1px dotted #eaeaea">
				<th>회원가입수 </th>
				<td><?php echo $mb_allrow['cnt'];?>명</td>
			</tr>
			<tr style="border-bottom:1px dotted #eaeaea">
				<th>구매자</th>
				<td><?php echo $mb_allrow2['cnt'];?>명</td>
			</tr>
			<tr>
				<th colspan="2">
				<a href="<?php echo G5_URL ?>/" class="tnb_community" target="_blank" title="유저페이지"><i class="fa fa-user-circle" aria-hidden="true"></i> [ 유저페이지 ]</a>
				</th>
			</tr>
			<tr>
				<th colspan="2">
				<a href="<?php echo G5_BBS_URL ?>/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> [ 로그아웃 ]</a>
				</th>
			</tr>
		</table>
	</div>
    <div id="container" class="<?php echo $adm_menu_cookie['container']; ?>">

        <div id="container_title"><?php echo $g5['title'] ?></div>
        <div class="container_wr">
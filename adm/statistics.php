<?php
$sub_menu = "300700";
include_once('./_common.php');

auth_check($auth[$sub_menu], 'r');



$g5['title'] = '통계';
include_once('./admin.head.php');

$day = date("Y-m-d 00:00:00");


$todaytime = date("Y-m-d 00:00:00");
$todaytime2 = date("Y-m-d 23:59:59");

$day_of_the_week = date('w'); 
$todaytime3 = date('Y-m-d H:i:s', strtotime($day." -".$day_of_the_week."day"));
$todaytime4 = date("Y-m-01 00:00:00");

// 1일 통계 
$today_chargesql = "select sum(mb_money)money, count(*)coul from g5_money where mo_clodate >= '".$todaytime."' and mo_clodate <= '".$todaytime2."'";
$today_chargerow = sql_fetch($today_chargesql);
$today_munsangsql = "select sum(point)money, count(*)coul from g5_munsang where datetime >= '".$todaytime."' and datetime <= '".$todaytime2."'";
$today_munsangrow = sql_fetch($today_munsangsql);
$today_aocnfsql = "select sum(wr_4)money, count(*)coul from g5_write_shoplog where wr_datetime >= '".$todaytime."' and wr_datetime <= '".$todaytime2."'";
$today_aocnfrow = sql_fetch($today_aocnfsql);
$today_eventsql = "select sum(mb_coin)money, count(*)coul from g5_coin where co_datetime >= '".$todaytime."' and co_datetime <= '".$todaytime2."'";
$today_eventrow = sql_fetch($today_eventsql);

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

// 7일 통계 
$week_chargesql = "select sum(mb_money)money, count(*)coul from g5_money where mo_clodate >= '".$todaytime3."' and mo_clodate <= '".$todaytime2."'";
$week_chargerow = sql_fetch($week_chargesql);
$week_munsangsql = "select sum(point)money, count(*)coul from g5_munsang where datetime >= '".$todaytime3."' and datetime <= '".$todaytime2."'";
$week_munsangrow = sql_fetch($week_munsangsql);
$week_aocnfsql = "select sum(wr_4)money, count(*)coul from g5_write_shoplog where wr_datetime >= '".$todaytime3."' and wr_datetime <= '".$todaytime2."'";
$week_aocnfrow = sql_fetch($week_aocnfsql);
$week_eventsql = "select sum(mb_coin)money, count(*)coul from g5_coin where co_datetime >= '".$todaytime3."' and co_datetime <= '".$todaytime2."'";
$week_eventrow = sql_fetch($week_eventsql);


$week_chargemoney = $week_chargerow['money'] + $week_munsangrow['money'];
$week_chargecnt = $week_chargerow['coul'] + $week_munsangrow['coul'];

$week_plusbo = 0;

$sql = " select * from g5_write_shoplog where wr_datetime >= '".$todaytime3."' and wr_datetime <= '".$todaytime2."'";
$result = sql_query($sql);

for($i=0; $row2=sql_fetch_array($result); $i++){
	$week_sql = "select * from g5_write_code where wr_id = '".$row2['wr_5']."'";
	$week_row = sql_fetch($week_sql);

	$week_sql2 = "select * from g5_write_code_shop where wr_num = '".$week_row['wr_2']."'";
	$week_row2 = sql_fetch($week_sql2);

	$week_plusbo = $week_plusbo + $week_row2['wr_2'];
}
$week_plusbo2 = $week_chargemoney - $week_plusbo;

// 30일 통계 
$month_chargesql = "select sum(mb_money)money, count(*)coul from g5_money where mo_clodate >= '".$todaytime4."'";
$month_chargerow = sql_fetch($month_chargesql);
$month_munsangsql = "select sum(point)money, count(*)coul from g5_munsang where datetime >= '".$todaytime4."'";
$month_munsangrow = sql_fetch($month_munsangsql);
$month_aocnfsql = "select sum(wr_4)money, count(*)coul from g5_write_shoplog where wr_datetime >= '".$todaytime4."'";
$month_aocnfrow = sql_fetch($month_aocnfsql);
$month_eventsql = "select sum(mb_coin)money, count(*)coul from g5_coin where co_datetime >= '".$todaytime4."' and co_datetime <= '".$todaytime2."'";
$month_eventrow = sql_fetch($month_eventsql);


$month_chargemoney = $month_chargerow['money'] + $month_munsangrow['money'];
$month_chargecnt = $month_chargerow['coul'] + $month_munsangrow['coul'];

$month_plusbo = 0;

$sqlab = " select * from g5_write_shoplog where wr_datetime >= '".$todaytime4."'";
$resultab = sql_query($sqlab);

for($i=0; $row3=sql_fetch_array($resultab); $i++){
	$month_sql = "select * from g5_write_code where wr_id = '".$row3['wr_5']."'";
	$month_row = sql_fetch($month_sql);

	$month_sql2 = "select * from g5_write_code_shop where wr_num = '".$month_row['wr_2']."'";
	$month_row2 = sql_fetch($month_sql2);

	$month_plusbo = $month_plusbo + $month_row2['wr_2'];
}
$month_plusbo2 = $month_chargemoney - $month_plusbo;

// 전체 
if($_GET['search']){
$sql_where = " ";
if($_GET['shop_name'] != 'all'){
	$sql_where .= "and wr_2 = '".$_GET['shop_name']."' ";
}
if($_GET['search_date2'] != 'all'){
	$sql_where .= "and wr_3 = '".$_GET['search_date2']."'";
}
$fist_date = date('Y-m-d 00:00:00', strtotime($_GET['first_date']));
$secn_date = date('Y-m-d 23:59:59', strtotime($_GET['second_date']));

$all_chargesql = "select sum(mb_money)money, count(*)coul from g5_money where mo_clodate >= '".$fist_date."' and mo_clodate <= '".$secn_date."'";
$all_chargerow = sql_fetch($all_chargesql);
$all_munsangsql = "select sum(point)money, count(*)coul from g5_munsang where datetime >= '".$fist_date."' and datetime <= '".$secn_date."'";
$all_munsangrow = sql_fetch($all_munsangsql);
$all_aocnfsql = "select sum(wr_4)money, count(*)coul from g5_write_shoplog where wr_datetime >= '".$fist_date."' and wr_datetime <= '".$secn_date."' ".$sql_where;
$all_aocnfrow = sql_fetch($all_aocnfsql);
$all_eventsql = "select sum(mb_coin)money, count(*)coul from g5_coin where co_datetime >= '".$fist_date."' and co_datetime <= '".$secn_date."'";
$all_eventrow = sql_fetch($all_eventsql);


$all_chargemoney = $all_chargerow['money'] + $all_munsangrow['money'];
$all_chargecnt = $all_chargerow['coul'] + $all_munsangrow['coul'];

$all_plusbo = 0;

$sql = " select * from g5_write_shoplog where wr_datetime >= '".$fist_date."' and wr_datetime <= '".$secn_date."' ".$sql_where;
$result = sql_query($sql);

for($i=0; $row3=sql_fetch_array($result); $i++){
	$all_sql = "select * from g5_write_code where wr_id = '".$row3['wr_5']."'";
	$all_row = sql_fetch($all_sql);

	$all_sql2 = "select * from g5_write_code_shop where wr_num = '".$all_row['wr_2']."'";
	$all_row2 = sql_fetch($all_sql2);

	$all_plusbo = $all_plusbo + $all_row2['wr_2'];
}
$all_plusbo2 = $all_chargemoney - $all_plusbo;
}else{
$all_chargesql = "select sum(mb_money)money, count(*)coul from g5_money";
$all_chargerow = sql_fetch($all_chargesql);
$all_munsangsql = "select sum(point)money, count(*)coul from g5_munsang";
$all_munsangrow = sql_fetch($all_munsangsql);
$all_aocnfsql = "select sum(wr_4)money, count(*)coul from g5_write_shoplog";
$all_aocnfrow = sql_fetch($all_aocnfsql);
$all_eventsql = "select sum(mb_coin)money, count(*)coul from g5_coin";
$all_eventrow = sql_fetch($all_eventsql);


$all_chargemoney = $all_chargerow['money'] + $all_munsangrow['money'];
$all_chargecnt = $all_chargerow['coul'] + $all_munsangrow['coul'];

$all_plusbo = 0;

$sql = " select * from g5_write_shoplog ";
$result = sql_query($sql);

for($i=0; $row3=sql_fetch_array($result); $i++){
	$all_sql = "select * from g5_write_code where wr_id = '".$row3['wr_5']."'";
	$all_row = sql_fetch($all_sql);

	$all_sql2 = "select * from g5_write_code_shop where wr_num = '".$all_row['wr_2']."'";
	$all_row2 = sql_fetch($all_sql2);

	$all_plusbo = $all_plusbo + $all_row2['wr_2'];
}
$all_plusbo2 = $all_chargemoney - $all_plusbo;
}
$sql2 = " select * from g5_write_shop";
$result2 = sql_query($sql2);

for($i=0; $row=sql_fetch_array($result2); $i++){

			$list[$i] = $row;
}
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="./datepicker-ko.js"></script>
<script>
	$(function(){
		$('#first_date').datepicker();
		$('#second_date').datepicker();
		$('.search_but').on('click', function(){
			var first_date = $('#first_date').val();
			var second_date = $('#second_date').val();
			var shop_name = $("#shop_name option:selected").val();
			var search_date2 = $('input[name="search_date2"]:checked').val();

			var url = "./statistics.php?search=y&first_date="+first_date+"&second_date="+second_date+"&shop_name="+shop_name+"&search_date2="+search_date2;
			location.href=url;
		});
	});
</script>

	<div class="tbl_head01 tbl_wrap">
		<div class="search_divs" style="margin-bottom:30px;">
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<th>조회기간</th>
					<td><input type="text" name="first_date" class="first_date" id="first_date" value="<?php if($_GET['first_date']){ echo $_GET['first_date'];}else{echo date("Y-m-d");}?>"> ~ <input type="text" name="second_date" class="first_date" id="second_date" value="<?php if($_GET['second_date']){ echo $_GET['second_date'];}else{echo date("Y-m-d");}?>"></td>
					<td colspan="2">
						<a class="search_but" style="cursor:pointer;"><i class="fas fa-search"></i> 검색하기</a>
					</td>
				</tr>
				<tr>
					<th>제품명</th>
					<td><select name="shop_name" id="shop_name">
						<option value="all">전체
						<?php
				for ($i=0; $i<count($list); $i++) {
				?>
					<option value="<?php echo $list[$i]['wr_id'];?>" <?php if($_GET['shop_name'] == $list[$i]['wr_id']){ ?>selected="selected"<?php }?> ><?php echo $list[$i]['wr_subject'];?>
				<?php } ?>
					</td>
					<th>제품기간</th>
					<td><input type="radio" name="search_date2" class="search_date2" value="all" <?php if($_GET['search_date2']=='all' || !$_GET['search_date2']){?>checked<?php } ?>> 전체 &nbsp<input type="radio" name="search_date2" class="search_date2" value="1" <?php if($_GET['search_date2']=='1'){?>checked<?php } ?>> 1일&nbsp<input type="radio" name="search_date2" class="search_date2" value="7" <?php if($_GET['search_date2']=='7'){?>checked<?php } ?>> 7일 &nbsp<input type="radio" name="search_date2" class="search_date2" value="30" <?php if($_GET['search_date2']=='30'){?>checked<?php } ?>> 30일</td>
				</tr>
			</table>
		</div>
		<div class="stat_divs">
			<p>금일 수익통계 ( <?php echo date("Y-m-d");?> )</p>
			<div class="stat_div">
				<span class="stat_span">금일 충전금액</span>
				<span class="stat_spanb"><?php echo number_format($today_chargemoney);?>원 (<?php echo $today_chargecnt;?>건)</span>
			</div>
			<div class="stat_div">
				<span class="stat_span">금일 매출금액</span>
				<span class="stat_spanb"><?php echo number_format($today_aocnfrow['money']);?>원 (<?php echo $today_aocnfrow['coul'];?>건)</span>
			</div>
			<div class="stat_div">
				<span class="stat_span">금일 판매수익</span>
				<span class="stat_spanb"><?php echo number_format($today_plusbo2);?>원 (<?php echo $today_aocnfrow['coul'];?>건)</span>
			</div>
			<div class="stat_div">
				<span class="stat_span">금일 적립금적립</span>
				<span class="stat_spanb"><?php echo number_format($today_eventrow['money']);?>원 (<?php echo $today_eventrow['coul'];?>건)</span>
			</div>
		</div>
		<div style="clear:both;"></div>
		<div class="stat_divs">
			<p>금주 수익통계 ( <?php echo date('Y-m-d', strtotime($day." -".$day_of_the_week."day"));?> ~ <?php echo date("Y-m-d");?> )</p>
			<div class="stat_div">
				<span class="stat_span">금주 충전금액</span>
				<span class="stat_spanb"><?php echo number_format($week_chargemoney);?>원 (<?php echo $week_chargecnt;?>건)</span>
			</div>
			<div class="stat_div">
				<span class="stat_span">금주 매출금액</span>
				<span class="stat_spanb"><?php echo number_format($week_aocnfrow['money']);?>원 (<?php echo $week_aocnfrow['coul'];?>건)</span>
			</div>
			<div class="stat_div">
				<span class="stat_span">금주 판매수익</span>
				<span class="stat_spanb"><?php echo number_format($week_plusbo2);?>원 (<?php echo $week_aocnfrow['coul'];?>건)</span>
			</div>
			<div class="stat_div">
				<span class="stat_span">금주 적립금적립</span>
				<span class="stat_spanb"><?php echo number_format($week_eventrow['money']);?>원 (<?php echo $week_eventrow['coul'];?>건)</span>
			</div>
		</div>
		<div style="clear:both;"></div>
		<div class="stat_divs">
			<p>금월 수익통계 ( <?php echo date('Y-m-01');?> ~ <?php echo date("Y-m-d");?> )</p>
			<div class="stat_div">
				<span class="stat_span">금월 충전금액</span>
				<span class="stat_spanb"><?php echo number_format($month_chargemoney);?>원 (<?php echo $month_chargecnt;?>건)</span>
			</div>
			<div class="stat_div">
				<span class="stat_span">금월 매출금액</span>
				<span class="stat_spanb"><?php echo number_format($month_aocnfrow['money']);?>원 (<?php echo $month_aocnfrow['coul'];?>건)</span>
			</div>
			<div class="stat_div">
				<span class="stat_span">금월 판매수익</span>
				<span class="stat_spanb"><?php echo number_format($month_plusbo2);?>원 (<?php echo $month_aocnfrow['coul'];?>건)</span>
			</div>
			<div class="stat_div">
				<span class="stat_span">금월 적립금적립</span>
				<span class="stat_spanb"><?php echo number_format($month_eventrow['money']);?>원 (<?php echo $month_eventrow['coul'];?>건)</span>
			</div>
		</div>
		<div style="clear:both;"></div>
		<div class="stat_divs">
			<p>검색 수익통계 <?php if($_GET['search']){ if($_GET['shop_name']!='all'){
				$seab_oo = " select * from g5_write_shop where wr_id='".$_GET['shop_name']."'";
				$seab_oo_row = sql_fetch($seab_oo);
				echo "( ".$_GET['first_date']." ~ ".$_GET['second_date']." ) 검색상품 : ".$seab_oo_row['wr_subject'];
				}else{ echo "( ".$_GET['first_date']." ~ ".$_GET['second_date']." )";}}else{?>(전체)<?php }?></p>
			<div class="stat_div">
				<span class="stat_span">충전금액</span>
				<span class="stat_spanb"><?php echo number_format($all_chargemoney);?>원 (<?php echo $all_chargecnt;?>건)</span>
			</div>
			<div class="stat_div">
				<span class="stat_span">매출금액</span>
				<span class="stat_spanb"><?php echo number_format($all_aocnfrow['money']);?>원 (<?php echo $all_aocnfrow['coul'];?>건)</span>
			</div>
			<div class="stat_div">
				<span class="stat_span">판매수익</span>
				<span class="stat_spanb"><?php if($_GET['shop_name']=='all' || !$_GET['shop_name']){ echo number_format($all_plusbo2)."원"; }?> (<?php echo $all_aocnfrow['coul'];?>건)</span>
			</div>
			<div class="stat_div">
				<span class="stat_span">적립금적립</span>
				<span class="stat_spanb"><?php echo number_format($all_eventrow['money']);?>원 (<?php echo $all_eventrow['coul'];?>건)</span>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>

<script>
	$(function() {
		$('.permit').on('click', function() {
			$('.cash_type').val('per');
			$(this).parent().submit();
			return false;
		});

		$('.cancel').on('click', function() {
			$('.cash_type').val('can');
			$(this).parent().submit();
			return false;
		});

		$('.shop_delete').on('click', function(){
			var result = confirm('정말로 삭제하겠습니까?');
			if(result){
				var num = $(this).attr('id');
				window.location.href = "download_delete.php?wr_id="+num;
			}else{

			}
		});
	});
	function add_menu()
	{

		var url = "./download_form.php";
		window.open(url, "add_program", "left=300,top=200,width=750,height=450,scrollbars=yes,resizable=yes");
		return false;
	}
	function view_menu(wr_id)
	{

		var url = "./download_view.php?wr_id="+wr_id;
		window.open(url, "add_program", "left=300,top=200,width=750,height=450,scrollbars=yes,resizable=yes");
		return false;
	}
</script>

<?php
include_once ('./admin.tail.php');
?>
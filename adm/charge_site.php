<?php
$sub_menu = "200700";
include_once('./_common.php');

auth_check($auth[$sub_menu], 'r');

$sql2 = "select count(distinct mb_id)coul from g5_charge WHERE ch_buy = '1' ";
$row2 = sql_fetch($sql2);
$total_page = ceil($row2['coul'] / 15);
$page = $_GET['page'];
$nuser = "15";
if($page){
$pagw = $page * 15;
}else{
$page = 1;
$pagw = 0;
}



$g5['title'] = '충전 신청';
include_once('./admin.head.php');

$sql = "SELECT sum(ch_point)sum, mb_id FROM g5_charge WHERE ch_buy = '1' GROUP BY mb_id limit ".$pagw.", 15";
$result = sql_query($sql);

$total_sql = "SELECT sum(ch_point)sum FROM g5_charge WHERE ch_buy = '1'";
$total = sql_fetch($total_sql);

for($i=0; $row=sql_fetch_array($result); $i++){

			$list[$i] = $row;
}
?>

	<div class="tbl_head01 tbl_wrap">
	<h2>토탈 사이트 충전 금액 : <span style="color:red"><?php echo number_format($total['sum']);?>원</span></h2>
		<table style="text-align:center">
			<thead>
				<tr>
					<th>이름</th>
					<th>토탈충전금액</th>
					<th>토탈사용금액</th>
					<th>보유금액</th>
				</tr>
			</thead>
			<tbody>
			<?php
			

        for ($i=0; $i<count($list); $i++) {
			
			$sql2 = "select * from g5_member where mb_id = '".$list[$i]['mb_id']."'";
			$result2 = sql_fetch($sql2);
			$sql3 = "select sum(po_point)sum from g5_point where po_rel_table = '@buy' and mb_id = '".$list[$i]['mb_id']."'";
			$result3 = sql_fetch($sql3);
         ?>
		 
		<tr>
				<td><?php echo $result2['mb_name']?></td>
				<td><?php echo number_format($list[$i]['sum']);?>원</td>
				<td><?php echo number_format($result3['sum']);?>원</td>
				<td><?php echo number_format($result2['mb_point']);?>원</td>
			</tr>
		
		<?php
		}
		 ?>
		 </tbody>
		</table>
		<?php echo get_paging($nuser, $page, $total_page, './charge_site.php?page='); ?>
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

		$('.charge_delete').on('click', function(){
			var result = confirm('정말로 삭제하겠습니까?');
			if(result){
				var num = $(this).attr('id');
				window.location.href = "charge_delete.php?ch_num="+num;
			}else{

			}
		});
	});
	function add_menu()
	{

		var url = "./shop_form.php";
		window.open(url, "add_program", "left=100,top=100,width=550,height=650,scrollbars=yes,resizable=yes");
		return false;
	}
</script>

<?php
include_once ('./admin.tail.php');
?>
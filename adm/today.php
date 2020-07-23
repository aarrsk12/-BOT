<?php
$sub_menu = "300700";
include_once('./_common.php');

auth_check($auth[$sub_menu], 'r');
$sql2 = "select count(*)coul from g5_visit_sum";
$row2 = sql_fetch($sql2);
$total_page = ceil($row2['coul'] / 15);
$page = $_GET['page'];
$nuser = "15";

if($page){
	$pagw = ($page-1) * 15;
}else{
	$page = 1;
	$pagw = 0;
}

$g5['title'] = '방문자수';
include_once('./admin.head.php');

$sql = " select * from g5_visit_sum order by vs_date desc limit ".$pagw.", 15";
$result = sql_query($sql);

for($i=0; $row=sql_fetch_array($result); $i++){

			$list[$i] = $row;
}
?>


	<div class="tbl_head01 tbl_wrap">
		<table style="text-align:center">
			<thead>
				<tr>
					<th>날짜</th>
					<th>방문자수</th>
				</tr>
			</thead>
			<tbody>
			<?php
			

        for ($i=0; $i<count($list); $i++) {
			
         ?>
		 
		<tr onclick="javascript:view_menu('<?php echo $list[$i]['vs_date']?>');" style="cursor:pointer;">
				<td><?php echo $list[$i]['vs_date']?></td>
				<td><?php echo $list[$i]['vs_count']?></td>	
			</tr>
		
		<?php
		}
		 ?>
		 </tbody>
		</table>
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

		
	});
	function add_menu()
	{

		var url = "./benlist_form.php";
		window.open(url, "add_program", "left=300,top=200,width=750,height=450,scrollbars=yes,resizable=yes");
		return false;
	}
	function view_menu(vs_date)
	{

		var url = "./today_form.php?vs_date="+vs_date+"&w=u";
		window.open(url, "add_program", "left=300,top=200,width=750,height=450,scrollbars=yes,resizable=yes");
		return false;
	}
</script>

<?php
include_once ('./admin.tail.php');
?>
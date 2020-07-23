<?php
$sub_menu = "900300";
include_once('./_common.php');

auth_check($auth[$sub_menu], 'r');

$sql2 = "select count(*)coul from g5_write_randomgame";
$row2 = sql_fetch($sql2);
$total_page = floor($row2['coul'] / 15);
$page = $_GET['page'];
$nuser = "15";
if($page){
$pagw = $page * 15;
if($page==1){
$pagw=0;
}
}else{
$page = 1;
$pagw = 0;
}

$g5['title'] = '구매된 코드';
include_once('./admin.head.php');

$sql = " select * from g5_write_randomgame order by wr_id desc limit ".$pagw.", 15";
$result = sql_query($sql);

for($i=0; $row=sql_fetch_array($result); $i++){

			$list[$i] = $row;
}
?>



	<div class="tbl_head01 tbl_wrap">
		<table style="text-align:center">
			<thead>
				<tr>
					<th>번호</th>
					<th>제품명</th>
					<th>코드명</th>
					<th>구매자아이디</th>
					<th>구매날짜</th>
				</tr>
			</thead>
			<tbody>
			<?php
			

        for ($i=0; $i<count($list); $i++) {
			$one_update = '<a href="./shopcode_form.php?wr_id='.$list[$i]['wr_id'].'&w=u">수정</a>';
			$one_delete = '<a class="shopcode_delete" id="'.$list[$i]['wr_id'].'">삭제</a>';
         ?>
		 
		<tr>
				<td><?php echo $list[$i]['wr_id']?></td>
				<td><?php echo $list[$i]['wr_subject']?></td>
				<td><?php echo $list[$i]['wr_content']?></td>
				<td><?php echo $list[$i]['mb_id']?></td>
				<td><?php echo $list[$i]['wr_datetime']?></td>
			</tr>
		
		<?php
		}
		 ?>
		 </tbody>
		</table>
		<?php echo get_paging($nuser, $page, $total_page, './randomgame_list.php?page='); ?>
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

		$('.shopcode_delete').on('click', function(){
			var result = confirm('정말로 삭제하겠습니까?');
			if(result){
				var num = $(this).attr('id');
				window.location.href = "shopcode_delete.php?wr_id="+num;
			}else{

			}
		});
	});
	function add_menu()
	{

		var url = "./shopcode_form.php";
		window.open(url, "add_program", "left=100,top=100,width=550,height=650,scrollbars=yes,resizable=yes");
		return false;
	}
</script>

<?php
include_once ('./admin.tail.php');
?>
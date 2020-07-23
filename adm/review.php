<?php
$sub_menu = "300700";
include_once('./_common.php');

auth_check($auth[$sub_menu], 'r');

$sql2 = "select count(*)coul from g5_write_buyol";
$row2 = sql_fetch($sql2);
$total_page = ceil($row2['coul'] / 15);
$page = $_GET['page'];
$nuser = "15";

if($page){

$pagw = ($page - 1) * 15;

}else{
$page = 1;
$pagw = 0;
}

$g5['title'] = '사용후기';
include_once('./admin.head.php');

$sql = " select * from g5_write_buyol order by wr_id desc limit ".$pagw.", 15";
$result = sql_query($sql);

for($i=0; $row=sql_fetch_array($result); $i++){

			$list[$i] = $row;
}
?>


	<div class="tbl_head01 tbl_wrap">
		<table style="text-align:center">
			<thead>
				<tr>
					<th>No</th>
					<th>제목</th>
					<th>작성자</th>
					<th>등록일</th>
				</tr>
			</thead>
			<tbody>
			<?php
			

        for ($i=0; $i<count($list); $i++) {
			$one_update = '<a href="./download_form.php?wr_id='.$list[$i]['wr_id'].'&w=u">수정</a>';
			$one_delete = '<a class="shop_delete" id="'.$list[$i]['wr_id'].'">삭제</a>';
			
         ?>
		 
		<tr onclick="javascript:view_menu(<?php echo $list[$i]['wr_id']?>);" style="cursor:pointer;">
				<td><?php echo $list[$i]['wr_id']?></td>
				<td><?php echo $list[$i]['wr_subject']?></td>
				<td><?php echo $list[$i]['mb_id']?></td>
				<td><?php echo $list[$i]['wr_datetime']?></td>
				
			</tr>
		
		<?php
		}
		 ?>
		 </tbody>
		</table>
		<?php 
		echo get_paging($nuser, $page, $total_page, './review.php?page=');?>
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
	
	function view_menu(wr_id)
	{

		var url = "./review_view.php?wr_id="+wr_id;
		window.open(url, "add_program", "left=300,top=200,width=750,height=450,scrollbars=yes,resizable=yes");
		return false;
	}
</script>

<?php
include_once ('./admin.tail.php');
?>
<?php
$sub_menu = "300800";
include_once('./_common.php');

auth_check($auth[$sub_menu], 'r');

$sql_common = 'select * from g5_write_download';

$sql = " select count(*) as cnt {$sql_common} ";
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함


$g5['title'] = '동영상';
include_once('./admin.head.php');

$sql = " select * from g5_write_memos";
$result = sql_query($sql);

for($i=0; $row=sql_fetch_array($result); $i++){

			$list[$i] = $row;
}
?>


<?php if ($is_admin == 'super') { ?>
<div class="btn_add01 btn_add">
    <a href="./video_form.php" id="bo_add">동영상 추가</a>
</div>
<?php } ?>

	<div class="tbl_head01 tbl_wrap">
		<table style="text-align:center">
			<thead>
				<tr>
					<th>번호</th>
					<th>제목</th>
					<th>수정삭제</th>
				</tr>
			</thead>
			<tbody>
			<?php
			

        for ($i=0; $i<count($list); $i++) {
			$one_update = '<a href="./video_form.php?wr_id='.$list[$i]['wr_id'].'&w=u">수정</a>';
			$one_delete = '<a class="shop_delete" id="'.$list[$i]['wr_id'].'">삭제</a>';
			
         ?>
		 
		<tr>
				<td><?php echo $list[$i]['wr_id']?></td>
				<td><?php echo $list[$i]['wr_subject']?></td>
				
				<td><?php echo $one_update ?> <?php echo $one_delete ?></td>
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

		$('.shop_delete').on('click', function(){
			var result = confirm('정말로 삭제하겠습니까?');
			if(result){
				var num = $(this).attr('id');
				window.location.href = "video_delete.php?wr_id="+num;
			}else{

			}
		});
	});
	function add_menu()
	{

		var url = "./video_form.php";
		window.open(url, "add_program", "left=100,top=100,width=550,height=650,scrollbars=yes,resizable=yes");
		return false;
	}
</script>

<?php
include_once ('./admin.tail.php');
?>
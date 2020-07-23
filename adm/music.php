<?php
$sub_menu = "300700";
include_once('./_common.php');

auth_check($auth[$sub_menu], 'r');

$sql2 = "select count(*)coul from g5_music";
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

$g5['title'] = '음악리스트';
include_once('./admin.head.php');

$sql = " select * from g5_music order by mu_no desc limit ".$pagw.", 15";
$result = sql_query($sql);

for($i=0; $row=sql_fetch_array($result); $i++){

			$list[$i] = $row;
}
?>



<?php if ($is_admin == 'super') { ?>
<div class="btn_insert">
    <a href="javascript:add_menu();" class="btn_insertadd">글쓰기</a>
</div>
<?php } ?>

	<div class="tbl_head01 tbl_wrap">
		<table style="text-align:center">
			<thead>
				<tr>
					<th>번호</th>
					<th>노래제목</th>
					<th>노래주소</th>
					<th>수정 / 삭제</th>
				</tr>
			</thead>
			<tbody>
			<?php
			

        for ($i=0; $i<count($list); $i++) {
			$one_delete = '<a class="shop_delete" id="'.$list[$i]['mu_no'].'">삭제</a>';
			
         ?>
		 
		<tr>
				<td><?php echo $list[$i]['mu_no']?></td>
				<td><?php echo $list[$i]['mu_name']?></td>
				<td><?php echo $list[$i]['mu_url']?></td>
				<td><a href="javascript:view_menu('<?php echo $list[$i]['mu_no'];?>')">수정</a> / <?php echo $one_delete;?></td>
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
				window.location.href = "music_delete.php?mu_no="+num;
			}else{

			}
		});
	});
	function add_menu()
	{

		var url = "./music_form.php";
		window.open(url, "add_program", "left=300,top=200,width=750,height=450,scrollbars=yes,resizable=yes");
		return false;
	}
	function view_menu(mu_no)
	{

		var url = "./music_form.php?mu_no="+mu_no+"&w=u";
		window.open(url, "add_program", "left=300,top=200,width=750,height=450,scrollbars=yes,resizable=yes");
		return false;
	}
</script>

<?php
include_once ('./admin.tail.php');
?>
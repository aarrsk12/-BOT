<?php
$sub_menu = "200600";
include_once('./_common.php');

auth_check($auth[$sub_menu], 'r');

$member_id = $_GET['member_id'];
if($member_id){
$sql2 = "select count(*)coul from g5_munsang where mb_id = '".$member_id."'";
}else{
$sql2 = "select count(*)coul from g5_munsang";
}
$row2 = sql_fetch($sql2);
$total_page = floor($row2['coul'] / 15);
$page = $_GET['page'];
$nuser = "15";

if($page){

$pagw = ($page - 1) * 15;
}else{
$page = 1;
$pagw = 0;
}


$g5['title'] = '충전 신청';
include_once('./admin.head.php');

if($member_id){
$sql = " select * from g5_munsang where mb_id = '".$member_id."' order by num desc limit ".$pagw.", 15";
}else{
$sql = " select * from g5_munsang order by num desc limit ".$pagw.", 15";
}
$result = sql_query($sql);

for($i=0; $row=sql_fetch_array($result); $i++){

			$list[$i] = $row;
}
?>
<script>
	$(function(){
		
		$('.search_but').on('click', function(){
			var member_id = $('#member_id').val();

			var url = "./munsang_list.php?search=y&member_id="+member_id;
			location.href=url;
		});
	});
</script>

	<div class="tbl_head01 tbl_wrap">
	<div class="search_divs" style="margin-bottom:30px;">
			<table cellpadding="0" cellspacing="0" width="100%">
				<colgroup>
					<col width="20%">
					<col width="55%">
					<col width="25%">
				</colgroup>
				<tr>
					<th>회원아이디</th>
					<td><input type="text" name="member_id" class="member_id" id="member_id" value="<?php if($_GET['member_id']){ echo $_GET['member_id'];}else{}?>" placeholder="회원 아이디를 입력해주세요." size="80"></td>
					<td>
						<a class="search_but" style="cursor:pointer;"><i class="fas fa-search"></i> 검색하기</a>
					</td>
				</tr>
			</table>
		</div>
		<table style="text-align:center">
			<thead>
				<tr>
					<th>번호</th>
					<th>회원아이디</th>
					<th>충전금액</th>
					<th>문화상품권</th>
					<th>신청날짜</th>
					<th>처리</th>
					<th>수동</th>
				</tr>
			</thead>
			<tbody>
			<?php
			

        for ($i=0; $i<count($list); $i++) {
			$one_delete = '<a class="charge_delete" id="'.$list[$i]['num'].'">삭제</a>';
			
         ?>
		 
		<tr>
				<td><?php echo $list[$i]['num']?></td>
				<td><?php echo $list[$i]['mb_id']?></td>
				<td><?php echo $list[$i]['point']?></td>
				<td><?php echo $list[$i]['munsang']?></td>
				<td><?php echo $list[$i]['datetime']?></td>
				<td><?php if($list[$i]['buy'] == 0){
				echo "충전 신청";
				}else if($list[$i]['buy'] == 1){
				echo "충전 완료";
				}else{
				echo "충전 실패";
				}?></td>
				<td><?php if($list[$i]['buy'] == 0){
				?>
				<a href="./munsang_insert.php?num=<?php echo $list[$i]['num']?>">충전</a> / <?php echo $one_delete ?>
				<?php
				}else if($list[$i]['buy'] == 1){
				echo "충전 완료";
				}else{
				echo "충전 실패";
				}?></td>
			</tr>
		
		<?php
		}
		 ?>
		 </tbody>
		</table>
		<?php 
		if($member_id){
		echo get_paging($nuser, $page, $total_page, './munsang_list.php?member_id='.$member_id);
		 }else{
		echo get_paging($nuser, $page, $total_page, './munsang_list.php?page=');
		 }?>
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
				window.location.href = "munsang_delete.php?num="+num;
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
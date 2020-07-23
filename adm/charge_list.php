<?php
$sub_menu = "200900";
include_once('./_common.php');

auth_check($auth[$sub_menu], 'r');

$member_id = $_GET['member_id'];
if($member_id){
$sql2 = "select count(*)coul from g5_money where mb_id = '".$member_id."'";
}else{
$sql2 = "select count(*)coul from g5_money";
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
$sql = " select * from g5_money where mb_id = '".$member_id."' order by mo_no desc limit ".$pagw.", 15";
}else{
$sql = " select * from g5_money order by mo_no desc limit ".$pagw.", 15";
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

			var url = "./charge_list.php?search=y&member_id="+member_id;
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
					<th>No</th>
					<th>회원아이디</th>
					<th>입금자명</th>
					<th>금액</th>
					<th>상태</th>
					<th>요청날짜</th>
					<th>승인날짜</th>
					<th>승인/취소</th>
				</tr>
			</thead>
			<tbody>
			<?php
			

        for ($i=0; $i<count($list); $i++) {
			$one_delete = '<a class="charge_delete" id="'.$list[$i]['mo_no'].'">삭제</a>';
         ?>
		 
		<tr>
				<td><?php echo $list[$i]['mo_no']?></td>
				<td><?php echo $list[$i]['mb_id']?></td>
				<td><?php echo $list[$i]['mb_name']?></td>
				<td><?php echo $list[$i]['mb_money']?></td>
				<td><?php if($list[$i]['mo_chk'] == 0){
				echo "충전 신청";
				}else if($list[$i]['mo_chk'] == 1){
				echo "충전 완료";
				}else{
				echo "충전 취소";
				}?></td>
				<td><?php echo $list[$i]['mo_date']?></td>
				<td><?php echo $list[$i]['mo_clodate']?></td>
				<td>
				<?php if($list[$i]['mo_chk'] == 0){
				?>
				<a href="./charge_insert.php?mo_no=<?php echo $list[$i]['mo_no']?>">충전</a> <?php echo $one_delete ?>
				<?
				}else if($list[$i]['mo_chk'] == 1){
				echo "충전 완료";
				}else{
				echo "충전 취소";
				}?>
				</td>
			</tr>
		
		<?php
		}
		 ?>
		 </tbody>
		</table>
		<?php 
		if($member_id){
		echo get_paging($nuser, $page, $total_page, './charge_list.php?member_id='.$member_id);
		 }else{
		echo get_paging($nuser, $page, $total_page, './charge_list.php?page=');
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
				window.location.href = "charge_delete.php?mo_no="+num;
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
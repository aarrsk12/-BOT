<?php
$sub_menu = "400100";
include_once('./_common.php');

auth_check($auth[$sub_menu], 'r');

$sql_common = 'select * from g5_game where game_win = "h"';

$sql = " select count(*) as cnt {$sql_common} ";
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함


$g5['title'] = '미니게임 베팅신청';
include_once('./admin.head.php');

$sql = " select * from g5_game where game_win = 'h'";
$result = sql_query($sql);

for($i=0; $row=sql_fetch_array($result); $i++){

			$list[$i] = $row;
}
?>


<?php if ($is_admin == 'super') { ?>
<div class="btn_add01 btn_add">
    <a href="./auto_minigame.php" target="_blank" id="bo_add">자동키기</a>
</div>
<?php } ?>

	<div class="tbl_head01 tbl_wrap">
		<table style="text-align:center">
			<thead>
				<tr>
					<th>번호</th>
					<th>회차</th>
					<th>베팅날짜</th>
					<th>베팅홀짝</th>
					<th>베팅금액</th>
					<th>회원닉네임</th>
					<th>결과입력</th>
				</tr>
			</thead>
			<tbody>
			<?php
			

        for ($i=0; $i<count($list); $i++) {
			$sql2 = "select * from g5_member where mb_id = '".$list[$i]['mb_id']."'";
			$result2 = sql_fetch($sql2);
			
         ?>
		 
		<tr>
				<td><?php echo $list[$i]['game_num']?></td>
				<td><?php echo $list[$i]['game_no']?></td>
				<td><?php echo $list[$i]['game_date']?></td>
				<td><?php if($list[$i]['game_odd']=="ODD"){echo "홀";}else{echo "짝";}?></td>
				<td><?php echo $list[$i]['game_buy']?></td>
				<td><?php echo $result2['mb_nick']?></td>
				<td><form action="./minigame_update.php" method="post">
				<input type="hidden" name="game_num" value="<?php echo $list[$i]['game_num']?>">
				<select name="game_odd">
					<option value="">선택
					<option value="ODD">홀
					<option value="EVEN">짝
				</select>
				<input type="submit" value="입력">
				</form>
				</td>
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
				window.location.href = "shop_delete.php?wr_id="+num;
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
<?php
include_once('./_common.php');
include_once(G5_LIB_PATH.'/naver_syndi.lib.php');
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');

	$wr_id = trim($_POST['mode']);
	$day = trim($_POST['day']);
	
	$sql3 = "select count(*)cout from g5_write_code where wr_subject = '$wr_id' and wr_1 = '$day' and wr_3 = '0'";
	$result3 = sql_fetch($sql3);
	if($result3 > 0){
		$sql = "select * from g5_write_code where wr_subject = '$wr_id' and wr_1 = '$day' and wr_3 = '0' order by wr_id limit 1";
		$result = sql_fetch($sql);

		$sql2 = "select * from g5_write_shop where wr_id = '$wr_id'";
		$result2 = sql_fetch($sql2);
		$money = "";
		if($member['mb_level'] == '6'){
			if($day == "1"){
				$money = $result2['wr_8'];
			}else if($day == "7"){
				$money = $result2['wr_13'];
			}else{
				$money = $result2['wr_18'];
			}
		}else if($member['mb_level'] == '5'){
			if($day == "1"){
				$money = $result2['wr_7'];
			}else if($day == "7"){
				$money = $result2['wr_12'];
			}else{
				$money = $result2['wr_17'];
			}
		}else if($member['mb_level'] == '4'){
			if($day == "1"){
				$money = $result2['wr_6'];
			}else if($day == "7"){
				$money = $result2['wr_11'];
			}else{
				$money = $result2['wr_16'];
			}
		}else{
			if($day == "1"){
				$money = $result2['wr_5'];
			}else if($day == "7"){
				$money = $result2['wr_10'];
			}else{
				$money = $result2['wr_15'];
			}
		}
		
		if($day == "1"){
			if($result2['wr_9']){
				if($member['mb_coin'] >= $result2['wr_9']){
					$pois = (int)$member['mb_coin'] - (int)$result2['wr_9'];
					$money = $money - $pois;
				}else{
					$pois = $member['mb_coin'];
				}
			}else{
				$pois = $member['mb_coin'];
			}
		}else if($day == "7"){
			if($result2['wr_14']){
				if($member['mb_coin'] >= $result2['wr_14']){
					$pois = (int)$member['mb_coin'] - (int)$result2['wr_14'];
					$money = $money - $pois;
				}else{
					$pois = $member['mb_coin'];
				}
			}else{
				$pois = $member['mb_coin'];
			}
		}else{
			if($result2['wr_19']){
				if($member['mb_coin'] >= $result2['wr_19']){
					$pois = (int)$member['mb_coin'] - (int)$result2['wr_19'];
					$money = $money - $pois;
				}else{
					$pois = $member['mb_coin'];
				}
			}else{
				$pois = $member['mb_coin'];
			}
		}

		if($member['mb_money'] < $money){
			echo "2";
		}else{
			$charge_mo = "select sum(wr_4)money from g5_write_shoplog where mb_id = '".$member['mb_id']."' ";
			$charge_row = sql_fetch($charge_mo);
			
			if($member['mb_level'] == '2'){
			$sql4 = "update g5_member set mb_money = mb_money-".$money.", mb_level = '3', mb_coin = '".$pois."' where mb_id = '".$member['mb_id']."'";
			}else{
				if($charge_row['money']){
					$plus_nt_mo = $charge_row['money'] + $money;
					if($config['cf_4'] != '0'){
						if($plus_nt_mo >= $config['cf_4']){
							if($config['cf_5'] != '0'){
								if($plus_nt_mo >= $config['cf_5']){
									if($member['mb_level'] == '4' || $member['mb_level'] == '3' || $member['mb_level'] == '2'){
										$sql4 = "update g5_member set mb_money = mb_money-".$money.", mb_level = '5', mb_coin = '".$pois."' where mb_id = '".$member['mb_id']."'";
									}else{
										$sql4 = "update g5_member set mb_money = mb_money-".$money.", mb_coin = '".$pois."' where mb_id = '".$member['mb_id']."'";
									}
								}else{
									if($member['mb_level'] == '3' || $member['mb_level'] == '2'){
										$sql4 = "update g5_member set mb_money = mb_money-".$money.", mb_level = '4', mb_coin = '".$pois."' where mb_id = '".$member['mb_id']."'";
									}else{
										$sql4 = "update g5_member set mb_money = mb_money-".$money.", mb_coin = '".$pois."' where mb_id = '".$member['mb_id']."'";
									}
								}
							}else{
								$sql4 = "update g5_member set mb_money = mb_money-".$money.", mb_coin = '".$pois."' where mb_id = '".$member['mb_id']."'";
							}
						}else{
							$sql4 = "update g5_member set mb_money = mb_money-".$money.", mb_coin = '".$pois."' where mb_id = '".$member['mb_id']."'";
						}
					}else{
						$sql4 = "update g5_member set mb_money = mb_money-".$money.", mb_coin = '".$pois."' where mb_id = '".$member['mb_id']."'";
					}
				}else{
					$sql4 = "update g5_member set mb_money = mb_money-".$money.", mb_coin = '".$pois."' where mb_id = '".$member['mb_id']."'";
				}
			}
			sql_query($sql4);
			$wr_subject = $result2['wr_subject'];
			$wr_content = $result['wr_content'];
			$wr_num = get_next_num('g5_write_shoplog');
			$sql5 = " insert into g5_write_shoplog
                set wr_num = '$wr_num',
                     wr_reply = '0',
                     wr_comment = 0,
                     ca_name = '0',
                     wr_option = '1',
                     wr_subject = '$wr_subject',
                     wr_content = '$wr_content',
                     wr_link1 = '0',
                     wr_link2 = '0',
                     wr_link1_hit = 0,
                     wr_link2_hit = 0,
                     wr_hit = 0,
                     wr_good = 0,
                     wr_nogood = 0,
                     mb_id = '{$member['mb_id']}',
                     wr_password = '{$member['mb_password']}',	
                     wr_name = '{$member['mb_id']}',
                     wr_email = '1',
                     wr_homepage = '1',
                     wr_datetime = '".G5_TIME_YMDHIS."',
                     wr_last = '".G5_TIME_YMDHIS."',
                     wr_ip = '{$_SERVER['REMOTE_ADDR']}',
                     wr_1 = '$wr_1',
					 wr_2 = '".$result2['wr_id']."',
					 wr_3 = '".$day."',
					 wr_4 = '".$money."',
					 wr_5 = '".$result['wr_id']."'";
			sql_query($sql5);
			if($member['mb_coin'] != $pois){
				$ppp = $member['mb_coin'] - $pois;
				$sql7 = "insert into g5_point_change(mb_id, mb_point, po_datetime)values('".$member['mb_id']."', '".$ppp."', '".date('Y-m-d H:i:s')."')";
				sql_query($sql7);
			}
			$sql6 = "update g5_write_code set wr_3 = '1' where wr_id = '".$result['wr_id']."'";
			sql_query($sql6);
			echo "1";
		}
		
	}else{
		echo "3";
	}

?>
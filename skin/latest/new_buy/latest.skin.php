<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 10);
?>

<div class="lat_buy">
    <h2 class="lat_title"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>"><?php echo $bo_subject ?></a></h2>
    <ul>
	<marquee direction=up scrollamount=2 height=140>
    <?php for ($i=0; $i<count($list); $i++) {  ?>
	
        <li>
            <?php
				echo $list[$i]['mb_id']."님 ".$list[$i]['subject']."감사드립니다.";

           

            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

             //echo $list[$i]['icon_reply']." ";
           // if ($list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            //if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;

            if ($list[$i]['comment_cnt'])  echo "
            <span class=\"lt_cmt\">+ ".$list[$i]['comment_cnt']."</span>";

            ?>

            <span class="lt_date"><?php echo $list[$i]['wr_datetime'] ?></span>
        </li>
	
    <?php }  ?>
	
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
	</marquee>
    </ul>
    <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span><i class="fa fa-plus" aria-hidden="true"></i><span class="sound_only"> 더보기</span></a>

</div>

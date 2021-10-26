<?
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<div class="lt">
	
    <ul>
    <? for ($i=0; $i<count($list); $i++) { ?>
        <li>
        	<ul>
        		
        		<li>
	        		<?
		        		//echo $list[$i]['icon_reply']." ";
		        		echo "<a href=\"".$list[$i]['href']."\" title=\"".$list[$i]['wr_subject']."\">";
		        		if ($list[$i]['is_notice'])
		        			echo "<strong>".$list[$i]['subject']."</strong>";
		        		else
		        			echo "<strong>".$list[$i]['subject']."</strong>";
		        		echo "</li>";
		        		echo "<li>";
		        		if ($list[$i]['wr_datetime'])
		        			echo "<u>".$list[$i]['datetime']."</u>";
		        		echo "</a>";
            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }
            ?>
        	</li>
        	</ul>
        </li>
    <? } ?>
    <? if (count($list) == 0) { //게시물이 없을 때 ?>
    <li>게시물이 없습니다.</li>
    <? } ?>
    </ul>
</div>

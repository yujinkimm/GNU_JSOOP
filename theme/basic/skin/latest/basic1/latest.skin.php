
<div class="lat">

    <ul>
      <?php for ($i=0; $i<$list_count; $i++) {

        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

        if($thumb['src']) {
            $img = $thumb['ori'];
        } else {
            $img = G5_IMG_URL.'/no_img.png';
            $thumb['alt'] = '이미지가 없습니다.';
        }
        $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
        $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);


        ?>
        <li class="basic_li">

            <?php

            echo $img_content;

            echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];


                echo "</a>";





            ?>
              <?php echo $list[$i]['wr_content'] ?>

        </li>
    <?php }  ?>
    <!-- <?php if ($list_count == 0) { //게시물이 없을 때  ?>

    <?php }  ?> -->
    </ul>


</div>
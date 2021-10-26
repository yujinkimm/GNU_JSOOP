<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>
<?php if (!defined("_INDEX_")) { ?>
</div>
<?php } ?>

    </div>
    
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">

    <div id="ft_wr row">
        <div id="ft_company" class="ft_cnt">
        	<p class="ft_info">
            김유진의 NCS UX/UI웹퍼블리셔 훈련용 포토폴리오 디자인 용도 입니다.<br>
            제이숲과는 무관한 사이트입니다<br>
            주소 : 경기도 남양주시 가운로7-27<br>
            전화 : 010-3277-0606<br>
			</p>
	    </div>
        <div id="ft_copy">Copyright © <b>김유진의포트폴리오</b> All rights reserved.
        </div>
    
    
    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>
<div class="main" id="mainbanner">
    <?php
    echo latest('theme/pic_block', 'mainbanner', 3, 18);		
    ?>
</div>

<!-- ****************** 메인컨텐츠 1 (Business) ********************** -->
<div id="wrap kkk" class="index-wrapper load">
    <section id="mainContent">
        <article id="mainBusinessCon">
            <div class="scroll-clip-object clip-object01" data-aos><img src="https://unid.co.kr/images/main/main_business_bg02.png" alt="꾸밈 이미지"></div>
            <div class='container'>
                <div class="flex-nowrap align-items-center">
                    <div class="main-tit-box" data-aos data-aos-anchor="#mainBusinessCon" data-aos-anchor-placement="top-center">
                        <!-- <div class="scroll-move-object move-object01"><img src="/jsoop/theme/basic/img/55.png" alt="꾸밈 이미지"  data-aos="fade-up"></div> -->
                        <div class="area-main">
                            
                            <h3 class="main-tit cm-word-split-JS words chars splitting" data-splitting="" data-css-property="transition" data-speed="0.03" data-speed-delay="0" style="--word-total:1; --char-total:8;">
                                <strong>
                                    <span class="word" data-word="Business" style="--word-index:0;">
                                        <span class="char char2" data-char="B" style="--char-index:0; transition-delay: 0s;">제</span>
                                        <span class="char char2" data-char="u" style="--char-index:1; transition-delay: 0.03s;">이</span>
                                        <span class="char char2" data-char="s" style="--char-index:2; transition-delay: 0.06s;">숲</span>
                                        <span class="char char2" data-char="s" style="--char-index:2; transition-delay: 0.09s;">의</span><br>
                                        <span class="char" data-char="i" style="--char-index:3; transition-delay: 0.12s;">고</span>
                                        <span class="char" data-char="n" style="--char-index:4; transition-delay: 0.15s;">민</span>
                                        <span class="char" data-char="e" style="--char-index:5; transition-delay: 0.18s;">해</span>
                                        <span class="char" data-char="s" style="--char-index:6; transition-delay: 0.21s;">결</span>
                                        <span class="char" data-char="s" style="--char-index:7; transition-delay: 0.24s;">소</span>
                                    </span>
                                </strong>
                                <p class="main-sub-tit01" data-aos="fade-up" data-aos-anchor="#mainBusinessCon" data-aos-anchor-placement="top-center">제이숲이 제공하는 헤어 솔루션<br class="pc-br">제이숲이 당신의 고민을 해결해드립니다.</p>
                            </h3>
                        </div>
                        <!-- <div class="scroll-move-object move-object02"><img src="/jsoop/theme/basic/img/66.png" alt="꾸밈 이미지"  data-aos="fade-up"></div> -->
                    </div>
                </div>
            </div>
            <div class="main-business-wrapper py-3 py-md-5">
                <div class='py-md-1'>
                    <div class="main-business-con01" >
                        <div class="area-box" >
                            <div data-aos="fade-right" data-aos-anchor=".main-business-con01" data-aos-anchor-placement="top-center">
                                <div class="main-business-slide">
                                    <div class="main-business-slide-item">
                                        <div class="slide-video thumb main-business-txt">
                                        <?php
                                        echo latest('theme/content', 'content1', 1,20);		
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-business-con02">
                        <div class="area-box">
                            <div data-aos="fade-left" data-aos-anchor-placement="top-center">
                                <div class="main-business-slide02">
                                    <div class="main-business-slide-item">
                                        <div class="slide-video thumb main-business-txt">
                                            <?php
                                            echo latest('theme/content', 'content2', 1, 0);		
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-business-con03">
                        <div class="area-box">
                            <div data-aos="fade-right" data-aos-anchor=".main-business-con03" data-aos-anchor-placement="top-center">
                                <div class="main-business-slide">
                                    <div class="main-business-slide-item">
                                        <div class="slide-video thumb main-business-txt">
                                        <?php
                                        echo latest('theme/content', 'content3', 1, 0);		
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</div>



<article id="mainBusinessCon3">
    <div class='container'>
        <div class="flex-nowrap align-items-center">
            <div class="main-tit-box" data-aos data-aos-anchor="#mainBusinessCon3" data-aos-anchor-placement="top-center">
                <!-- <div class="scroll-move-object move-object01"><img src="/jsoop/theme/basic/img/1010.png" alt="꾸밈 이미지"  data-aos="fade-up"></div> -->
                <div class="area-main">
                    <h3 class="main-tit cm-word-split-JS words chars splitting" data-splitting="" data-css-property="transition" data-speed="0.03" data-speed-delay="0" style="--word-total:1; --char-total:8;">
                        <strong>
                            <span class="word" data-word="Business" style="--word-index:0;">
                                <span class="char char2" data-char="B" style="--char-index:0; transition-delay: 0s;">제</span>
                                <span class="char char2" data-char="u" style="--char-index:1; transition-delay: 0.03s;">이</span>
                                <span class="char char2" data-char="s" style="--char-index:2; transition-delay: 0.06s;">숲</span>
                                <span class="char char2" data-char="i" style="--char-index:3; transition-delay: 0.09s;">의</span><br>
                                <span class="char" data-char="n" style="--char-index:4; transition-delay: 0.12s;">제</span>
                                <span class="char" data-char="e" style="--char-index:5; transition-delay: 0.15s;">품</span>
                                <span class="char" data-char="s" style="--char-index:6; transition-delay: 0.18s;">보</span>
                                <span class="char" data-char="s" style="--char-index:7; transition-delay: 0.21s;">관</span>
                                <span class="char" data-char="s" style="--char-index:7; transition-delay: 0.24s;">소</span>
                            </span>
                        </strong>
                    </h3>
                    <p class="main-sub-tit01" data-aos="fade-up" data-aos-anchor="#mainBusinessCon3" data-aos-anchor-placement="top-center">평생 자라나는 모발을 책임지기 위해<br class="pc-br"> 제이숲은 지속적인 연구로 제품을 출시합니다.</p>
                </div>
                <!-- <div class="scroll-move-object move-object02"><img src="/jsoop/theme/basic/img/99.png" alt="꾸밈 이미지"  data-aos="fade-up"></div> -->
            </div>
        </div>
    </div>
</article>


<div id="content2">
    <div class="product2 px-5 row">
        <div class="product col-lg-6" id="product">
            <?php    
            echo latest('theme/product', 'product', 8, 10);
            ?>    
        </div>
        <div class="line col-lg-6" id="line">
            <?php    
            echo latest('theme/product', 'line', 8, 18);
            ?>
        </div>
    </div>
</div>

<div  class='px-5'>
    <div class="product22 px-5 row">
        <div class="line col-lg-5" id="colorline">
            <?php    
                echo latest('theme/product2', 'colorline', 1, 18);
            ?>     
        </div>
        <div class="color col-lg-4" id="color">
            <?php    
            echo latest('theme/product', 'color', 6, 0);
            ?>
        </div>
        <div class="col-lg-3" id="notice">
            <?php
            echo latest('theme/notice', 'notice', 8, 20);
            ?>
        </div>
    </div>
</div>



<div class="wrap">
    <div class="membership " id="membership">
            <?php
            echo latest('theme/member2', 'membership', 1, 18);		
            ?>
    </div>
</div>





<div id="insta3">
    <div class="wrap overflow-hidden row m-0">
        <div class="insta2 insta2 col-12 col-lg-6" id="insta2">
            <?php
            echo latest('theme/insta', 'insta2', 1, 18);		
            ?>
        </div>
    </div>
    <div class="wrap overflow-hidden row m-0">
        <div class="col-12 col-lg-8 overflow-hidden">
            <div class="insta" id="insta">
                <?php
                echo latest('theme/insta3', 'insta', 4, 18);		
                ?>
            </div>
        </div>
    </div>
</div>




<script>
    var mySwiper0 = new Swiper ('#mainbanner .swiper-container', { 
        pagination: {
          el: ".swiper-pagination",
          type: "fraction",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        slidesPerView : 1,
        autoplay : true,
        loop:true,
        delay : 5000,
        
        })



    var mySwiper1 = new Swiper ('#line .swiper-container', { 
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        slidesPerView : 2,
        autoplay : true,
        loop:true,
        breakpoints: {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 40,
                        },
                        400: {
                                    slidesPerView: 1,
                                    spaceBetween: 40,
                        },
                        768: {
                                    slidesPerView: 1,
                                    spaceBetween: 22,
                                    // Navigation arrows
                        },
                        1024: {
                                    slidesPerView: 4,
                                    spaceBetween: 28,
                                },
                        },
        })

    var mySwiper2 = new Swiper ('#color .swiper-container', { 
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        slidesPerView : 2,
        autoplay : true,
        loop:true,
        })

    var mySwiper3 = new Swiper ('#product .swiper-container', { 
                        navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                        },
                        slidesPerView : 4,
                        autoplay : true,
                        loop:true,
                        breakpoints: {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 40,
                        },
                        400: {
                                    slidesPerView: 1,
                                    spaceBetween: 40,
                        },
                        768: {
                                    slidesPerView: 2,
                                    spaceBetween: 22,
                                    // Navigation arrows
                        },
                        1024: {
                                    slidesPerView: 4,
                                    spaceBetween: 28,
                                },
                        },
                    })


    var mySwiper3 = new Swiper ('#colorline .swiper-container', { 
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        slidesPerView : 1,
        loop:true,
        })
    
        var mySwiper4 = new Swiper ('#color .swiper-container', { 
        slidesPerView : 2,
        })
       
        var mySwiper5 = new Swiper ('#membership .swiper-container', { 
        slidesPerView : 1,
        })
        var mySwiper6 = new Swiper ('#colorline .swiper-container', { 
        slidesPerView : 1,
        })
        

AOS.init();

</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
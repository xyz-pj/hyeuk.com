<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

    </div>
</div>

</div>

<!-- } 콘텐츠 끝 -->

<div class="ball fadeIn wow"data-wow-delay="1.5s"></div>

<aside class="kakao" onclick="location.href='https://open.kakao.com/o/s3vMfnIe';">
    <img src="<?php echo G5_THEME_IMG_URL ?>/kakao.png" alt="<?php echo $config['kakao']; ?>">
</aside>

<hr>

<!-- 하단 시작 { -->
<div id="ft" onclick="location.href='https://mail.google.com/mail/u/0/?fs=1&to=can8400@naver.com&tf=cm';">
    <p>혹시 하실말씀이 있으신가요?</p>
    <!-- <a href="https://mail.google.com/mail/u/0/?fs=1&to=can8400@naver.com&tf=cm">can8400@naver.com</a> -->
    <h2>can8400@naver.com</h2>
    <p>어떤 말씀이여도 좋아요 전 그저 저의 포트폴리오를 봐주신것만으로 정말 감사드립니다!</p>

	</div>      
        <div id="ft_copy">Copyright &copy; <b>hyeuk.com</b> All rights reserved.</div>
    
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>






<script>
        $(function(){
        $('#slider-div').slick({
            slide: 'div',        //슬라이드 되어야 할 태그 ex) div, li 
            infinite : true,     //무한 반복 옵션     
            slidesToShow : 2,        // 한 화면에 보여질 컨텐츠 개수
            slidesToScroll : 1,        //스크롤 한번에 움직일 컨텐츠 개수
            speed : 1000,     // 다음 버튼 누르고 다음 화면 뜨는데까지 걸리는 시간(ms)
            autoplay : true,            // 자동 스크롤 사용 여부
            autoplaySpeed : 3000,         // 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
            pauseOnHover : true,        // 슬라이드 이동    시 마우스 호버하면 슬라이더 멈추게 설정
            vertical : false,        // 세로 방향 슬라이드 옵션
            arrows : false,         // 옆으로 이동하는 화살표 표시 여부
            dots : true,         // 스크롤바 아래 점으로 페이지네이션 여부
            dotsClass : "slick-dots",     //아래 나오는 페이지네이션(점) css class 지정

            draggable : true,     //드래그 가능 여부 
            
            responsive: [ // 반응형 웹 구현 옵션
                {  
                    breakpoint: 960, //화면 사이즈 960px
                    settings: {
                        //위에 옵션이 디폴트 , 여기에 추가하면 그걸로 변경
                        slidesToShow:1
                    } 
                }
            ]

        });
        })
        
        
</script>

<script>
    $(document).ready(function( $ ){
        $("#openPopup01").on("click", function(event) {  //팝업오픈 버튼 누르면
        $("#popup01").show();  //팝업 오픈
        $("body").append('<div class="backon"></div>'); //뒷배경 생성
    });

    $("body").on("click", function(event) {
        if(event.target.className == 'close' || event.target.className == 'backon'){
        $("#popup01").hide(); //close버튼 이거나 뒷배경 클릭시 팝업 삭제
        $(".backon").hide();
            }   
        });

    });
</script>

<script>
    $(document).ready(function( $ ){
        $("#openPopup02").on("click", function(event) {  //팝업오픈 버튼 누르면
        $("#popup02").show();  //팝업 오픈
        $("body").append('<div class="backon"></div>'); //뒷배경 생성
    });

    $("body").on("click", function(event) {
        if(event.target.className == 'close' || event.target.className == 'backon'){
        $("#popup02").hide(); //close버튼 이거나 뒷배경 클릭시 팝업 삭제
        $(".backon").hide();
            }   
        });

    });
</script>

<script>
    $(document).ready(function( $ ){
        $("#openPopup03").on("click", function(event) {  //팝업오픈 버튼 누르면
        $("#popup03").show();  //팝업 오픈
        $("body").append('<div class="backon"></div>'); //뒷배경 생성
    });

    $("body").on("click", function(event) {
        if(event.target.className == 'close' || event.target.className == 'backon'){
        $("#popup03").hide(); //close버튼 이거나 뒷배경 클릭시 팝업 삭제
        $(".backon").hide();
            }   
        });

    });
</script>

<script>
    $(document).ready(function( $ ){
        $("#openPopup04").on("click", function(event) {  //팝업오픈 버튼 누르면
        $("#popup04").show();  //팝업 오픈
        $("body").append('<div class="backon"></div>'); //뒷배경 생성
    });

    $("body").on("click", function(event) {
        if(event.target.className == 'close' || event.target.className == 'backon'){
        $("#popup04").hide(); //close버튼 이거나 뒷배경 클릭시 팝업 삭제
        $(".backon").hide();
            }   
        });

    });
</script>

<script>
    $(document).ready(function( $ ){
        $("#openPopup05").on("click", function(event) {  //팝업오픈 버튼 누르면
        $("#popup05").show();  //팝업 오픈
        $("body").append('<div class="backon"></div>'); //뒷배경 생성
    });

    $("body").on("click", function(event) {
        if(event.target.className == 'close' || event.target.className == 'backon'){
        $("#popup05").hide(); //close버튼 이거나 뒷배경 클릭시 팝업 삭제
        $(".backon").hide();
            }   
        });

    });
</script>

<script>
    $(document).ready(function( $ ){
        $("#openPopup06").on("click", function(event) {  //팝업오픈 버튼 누르면
        $("#popup06").show();  //팝업 오픈
        $("body").append('<div class="backon"></div>'); //뒷배경 생성
    });

    $("body").on("click", function(event) {
        if(event.target.className == 'close' || event.target.className == 'backon'){
        $("#popup06").hide(); //close버튼 이거나 뒷배경 클릭시 팝업 삭제
        $(".backon").hide();
            }   
        });

    });
</script>

<script>
    $(document).ready(function( $ ){
        $("#openPopup07").on("click", function(event) {  //팝업오픈 버튼 누르면
        $("#popup07").show();  //팝업 오픈
        $("body").append('<div class="backon"></div>'); //뒷배경 생성
    });

    $("body").on("click", function(event) {
        if(event.target.className == 'close' || event.target.className == 'backon'){
        $("#popup07").hide(); //close버튼 이거나 뒷배경 클릭시 팝업 삭제
        $(".backon").hide();
            }   
        });

    });
</script>

<script>
    $(document).ready(function( $ ){
        $("#openPopup08").on("click", function(event) {  //팝업오픈 버튼 누르면
        $("#popup08").show();  //팝업 오픈
        $("body").append('<div class="backon"></div>'); //뒷배경 생성
    });

    $("body").on("click", function(event) {
        if(event.target.className == 'close' || event.target.className == 'backon'){
        $("#popup08").hide(); //close버튼 이거나 뒷배경 클릭시 팝업 삭제
        $(".backon").hide();
            }   
        });

    });
</script>



<!-- } 하단 끝 -->


<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
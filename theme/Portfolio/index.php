<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.4/css/jquery.mb.YTPlayer.min.css">
<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.4/jquery.mb.YTPlayer.min.js"></script>
<section class="main_top">
    <div id="background" class="player" data-property="{
        videoURL: 'https://youtu.be/gGrwGsqPchM',
        mute: true,
        showControls: false,
        useOnMobile: true,
        quality: 'highres',
        containment: 'body',
        loop: true,
        autoPlay: true,
        stopMovieOnBlur: true,
        startAt: 0,
        opacity: 0.8 }">
    </div>
    <div class="intro_img">
        <img class="dark" src="<?php echo G5_THEME_IMG_URL ?>/intro.png" alt="<?php echo $config['cf_title']; ?>">
        <img class="light" src="<?php echo G5_THEME_IMG_URL ?>/intro_light.png" alt="<?php echo $config['cf_title_light']; ?>">
        <p class="flipOutX wow"data-wow-delay=".3s">안녕하세요</p>
        <p class="flipOutX wow"data-wow-delay="1s">퍼블리셔 박진혁입니다.</p>
        
    </div>
<section>
    




<section id="main_container" class="main_container">
    <section class="main01">
        <div class="main01_img">
            <img class="img01 fadeInLeft wow"src="<?php echo G5_THEME_IMG_URL ?>/img01.jpg" alt="<?php echo $config['selfie']; ?>">
        </div>

        <p>안녕하세요 저는 개발자를 꿈꾸는 <strong class="blue">퍼블리셔 박진혁</strong> 이라고 합니다.
        <br class="pcver">열정적으로 모르는건 항상 공부하고 찾아보고 해결을 위해 여러가지 노력을 하는
        <br class="pcver">가심비가 좋은 MZ세대입니다.!
        <br>
        <br>저는 퍼블리셔라는 직업, 마크업을 잘 활용하는 저는
        <br class="pcver">누구보다 빠르게 누구보다 열심히 하는 퍼블리셔 입니다.
        <br>
        <br>열정이 넘치는 MZ세대의 퍼블리셔가 필요하신가요?
        <br class="pcver">항상 밝은 MZ세대의 퍼블리셔가 필요하신가요?
        <br class="pcver">매일매일 발전하는 MZ세대의 퍼블리셔가 필요하신가요?
        <br>
        <br>그렇다면 저는 어떠신가요?
        <br>
        <br>누구보다 열심히 누구보다 빠르게 항상 노력하고 공부하는 퍼블리셔
        <br class="pcver"><strong class="blue">박진혁을 기억해 주세요!</strong></p>
    </section>

    <section class="main02">
        <div class="skill_title">
            <h2 class="flipInX wow">이걸로 만들었어요</h2>
        </div>
        <div class="skill">
            <div class="skill_top">
                <div id="del3" class="delayed-section" data-scrub="0.5">
                    <div class="innerContainer">
                        <img id="openPopup01" class="html" src="<?php echo G5_THEME_IMG_URL ?>/html.png" alt="<?php echo $config['html']; ?>">
                    </div>
                </div>
                <div id="del3" class="delayed-section" data-scrub="0.5">
                    <div class="innerContainer">
                        <img id="openPopup02" class="css" src="<?php echo G5_THEME_IMG_URL ?>/css.png" alt="<?php echo $config['css']; ?>">
                    </div>
                </div>
                <div id="del3" class="delayed-section" data-scrub="0.5">
                    <div class="innerContainer">
                        <img id="openPopup03" class="js" src="<?php echo G5_THEME_IMG_URL ?>/js.png" alt="<?php echo $config['js']; ?>">
                    </div>
                </div>
            </div>
            <div class="skill_mid">
                <div id="del3" class="delayed-section" data-scrub="0.3">
                    <div class="innerContainer">
                        <img id="openPopup04" class="jquery" src="<?php echo G5_THEME_IMG_URL ?>/jquery.png" alt="<?php echo $config['jquery']; ?>">
                    </div>
                </div>
                <div id="del3" class="delayed-section" data-scrub="0.3">
                    <div class="innerContainer">
                        <img id="openPopup05" class="ps" src="<?php echo G5_THEME_IMG_URL ?>/ps.png" alt="<?php echo $config['ps']; ?>">
                    </div>
                </div>
                <div id="del3" class="delayed-section" data-scrub="0.3">
                    <div class="innerContainer">
                        <img id="openPopup06" class="xd" src="<?php echo G5_THEME_IMG_URL ?>/xd.png" alt="<?php echo $config['xd']; ?>">
                    </div>
                </div>
            </div>
            <div class="skill_bot">
                <div id="del3" class="delayed-section" data-scrub="0.6">
                    <div class="innerContainer">
                        <img id="openPopup07" class="cafe24" src="<?php echo G5_THEME_IMG_URL ?>/cafe24.png" alt="<?php echo $config['cafe24']; ?>">
                    </div>
                </div>
                <div id="del3" class="delayed-section" data-scrub="0.6">
                    <div class="innerContainer">
                        <img id="openPopup08" class="gnuboard" src="<?php echo G5_THEME_IMG_URL ?>/gnuboard.png" alt="<?php echo $config['gnuboard']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <article class="popup_warpper">
        <div id="popup01" class="popup">
            <div class="close">close</div>
            <div class="popup_text">
                <h2>HTML5</h2>
                <p>반응형을 고려한 구조를 짜며 시맨틱 하게 코딩을 할 수 있습니다</p>
            </div>
        </div>
        <div id="popup02" class="popup">
            <div class="close">close</div>
            <div class="popup_text">
                <h2>CSS</h2>
                <p>반응형을 고려한 스타일을 작성 하여 유지보수가 편하게 코딩할 수 있습니다</p>
            </div>
        </div>
        <div id="popup03" class="popup">
            <div class="close">close</div>
            <div class="popup_text">
                <h2>Java script</h2>
                <p>기본적인 스크립트 작성을 할 수 있습니다.</p>
            </div>
        </div>
        <div id="popup04" class="popup">
            <div class="close">close</div>
            <div class="popup_text">
                <h2>Jquery</h2>
                <p>여러 플러그인을 가져와 활용할 수 있습니다.</p>
            </div>
        </div>
        <div id="popup05" class="popup">
            <div class="close">close</div>
            <div class="popup_text">
                <h2>Adobe Photoshop</h2>
                <p>기본적인 이미지 수정이 가능합니다.</p>
            </div>
        </div>
        <div id="popup06" class="popup">
            <div class="close">close</div>
            <div class="popup_text">
                <h2>Adobe Xd</h2>
                <p>기본적인 협업을 통한 XD 툴 사용이 가능합니다.</p>
            </div>
        </div>
        <div id="popup07" class="popup">
            <div class="close">close</div>
            <div class="popup_text">
                <h2>Cafe24</h2>
                <p>호스팅 구매, 도메인이나 SSL 보안 인증서까지 적용이 가능합니다.</p>
            </div>
        </div>
        <div id="popup08" class="popup">
            <div class="close">close</div>
            <div class="popup_text">
                <h2>Gnuboard</h2>
                <p>PHP기반 솔루션으로 그누보드를 활용한 여러 홈페이지를 만들어 봤습니다.</p>
            </div>
        </div>
    </article>






    
    <article class="parallax">
        <div id="del1" class="delayed-section" data-scrub="1.5">
            <div class="innerContainer">
                <img class="c_name dark" src="<?php echo G5_THEME_IMG_URL ?>/wowjs.png" alt="<?php echo $config['wowjs']; ?>">
                <img class="c_name light" src="<?php echo G5_THEME_IMG_URL ?>/wowjs_light.png" alt="<?php echo $config['wowjs_light']; ?>">
            </div>
        </div>

        <div id="del2" class="delayed-section" data-scrub="0.8">
            <div class="innerContainer">
                <img class="c_name dark" src="<?php echo G5_THEME_IMG_URL ?>/greensock.png" alt="<?php echo $config['greensock']; ?>">
                <img class="c_name light" src="<?php echo G5_THEME_IMG_URL ?>/greensock_light.png" alt="<?php echo $config['greensock_light']; ?>">
            </div>
        </div>

        <div id="del4" class="delayed-section" data-scrub="1.3">
            <div class="innerContainer">
                <img class="c_name dark" src="<?php echo G5_THEME_IMG_URL ?>/slick.png" alt="<?php echo $config['slick']; ?>">
                <img class="c_name light" src="<?php echo G5_THEME_IMG_URL ?>/slick_light.png" alt="<?php echo $config['slick_light']; ?>">
            </div>
        </div>
    </article>


    <section class="main03">
        <div class="portfolio_title">
            <h2 class="flipInX wow">이런걸 만들어봤어요</h2>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

        <div>
          <div id="slider-div"  >
            <div>
                <a href="http://www.lasikseoul.co.kr/">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/popol.png" alt="<?php echo $config['woorieyeclinic']; ?>">
                    <p>반응형 페이지
                    <br>퍼블리싱 100%
                    <br>디자인 40%
                    <br>작업기간 1달</p>
                </a>
            </div>
            <div>
                <a href="http://www.jyeyeclinic.com/">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/popol2.png" alt="<?php echo $config['jyeyeclinic']; ?>">
                    <p>반응형 페이지
                    <br>퍼블리싱 90%
                    <br>디자인 40%
                    <br>작업기간 1달</p>
                </a>
            </div>
            <div>
                <a href="https://wacuslanding.cafe24.com/sub/bnc/bnc01.php">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/popol3.png" alt="<?php echo $config['BNCLanding']; ?>">
                    <p>반응형 페이지
                    <br>퍼블리싱 100%
                    <br>작업기간 1일 미만</p>
                </a>
            </div>
            <div>
                <a href="https://wacuslanding.cafe24.com/sub/seomyeon02/index.php">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/popol4.png" alt="<?php echo $config['BNCLanding']; ?>">
                    <p>반응형 페이지
                    <br>퍼블리싱 100%
                    <br>작업기간 1일 미만</p>
                </a>
            </div>
            <div>
                <a href="https://wacuslanding.cafe24.com/sub/seomyeon/index.php">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/popol5.png" alt="<?php echo $config['BNCLanding']; ?>">
                    <p>반응형 페이지
                    <br>퍼블리싱 100%
                    <br>작업기간 1일 미만</p>
                </a>
            </div>
            <div>
                <a href="https://wacuslanding.cafe24.com/sub/gallery/index.php">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/popol6.png" alt="<?php echo $config['BNCLanding']; ?>">
                    <p>반응형 페이지
                    <br>퍼블리싱 100%
                    <br>작업기간 1일 미만</p>
                </a>
            </div>
          </div>
    </div>
    </section>
</section>




<script>
    jQuery( function() {
  jQuery( '#background' ).YTPlayer();
});
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
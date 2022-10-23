<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<?php if ($is_admin == 'super') {  ?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<?php run_event('tail_sub'); ?>
<script>
	new WOW().init();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/MotionPathPlugin.min.js"></script>
<script> /* 커서 */
    gsap.set(".ball", {xPercent: -50, yPercent: -50});

const ball = document.querySelector(".ball");
const pos = { x: window.innerWidth / 2, y: window.innerHeight / 2 };
const mouse = { x: pos.x, y: pos.y };
const speed = 0.2;

const xSet = gsap.quickSetter(ball, "x", "px");
const ySet = gsap.quickSetter(ball, "y", "px");

window.addEventListener("mousemove", e => {    
  mouse.x = e.x;
  mouse.y = e.y;  
});

gsap.ticker.add(() => {
  
  // adjust speed for higher refresh monitors
  const dt = 1.0 - Math.pow(1.0 - speed, gsap.ticker.deltaRatio()); 
  
  pos.x += (mouse.x - pos.x) * dt;
  pos.y += (mouse.y - pos.y) * dt;
  xSet(pos.x);
  ySet(pos.y);
});

// special thanks to Blake Bowen for most of the code.

// quickTo() version, new in version 3.10.0: https://codepen.io/GreenSock/pen/xxpbORN?editors=0010

</script>

<script> /* 패럴랙스 */
    let delSections = document.querySelectorAll(".delayed-section");

delSections.forEach(section => {
  
  let imageAnim = gsap.to(section.querySelector("img"), {
    y: "-100vh",
    ease: "none",
    paused: true
  });
  
  let progressTo = gsap.quickTo(imageAnim, "progress", {ease: "power3", duration: parseFloat(section.dataset.scrub) || 0.1});
  
  gsap.to(section.querySelector(".innerContainer"), {
    y: "100vh",
    ease: "none",
    scrollTrigger: {
      scrub: true,
      trigger: section,
      start: "top bottom",
      end: "bottom top",
      onUpdate: self => progressTo(self.progress)
    }
  });

});

</script>

<script> /* 스크롤 */
        class Scrooth {
        constructor({element = window, strength=10, acceleration = 1.2,deceleration = 0.975}={}) {
        this.element = element;
        this.distance = strength;
        this.acceleration = acceleration;
        this.deceleration = deceleration;
        this.running = false;
   
        this.element.addEventListener('wheel', this.scrollHandler.bind(this), {passive: false});
        this.element.addEventListener('mousewheel', this.scrollHandler.bind(this), {passive: false});
        this.scroll = this.scroll.bind(this);
        }
   
        scrollHandler(e) {
        e.preventDefault();
   
        if (!this.running) {
            this.top = this.element.pageYOffset || this.element.scrollTop || 0;
            this.running = true;
            this.currentDistance = e.deltaY > 0 ? 0.1 : -0.1;
            this.isDistanceAsc = true;
            this.scroll();
        } else {
            this.isDistanceAsc = false;
            this.currentDistance = e.deltaY > 0 ? this.distance : -this.distance;
        }
        }
   
        scroll() {
        if (this.running) {
            this.currentDistance *= this.isDistanceAsc === true ? this.acceleration : this.deceleration;
            Math.abs(this.currentDistance) < 0.1 && this.isDistanceAsc === false ? this.running = false : 1;
            Math.abs(this.currentDistance) >= Math.abs(this.distance) ? this.isDistanceAsc = false : 1;
   
            this.top += this.currentDistance;
            this.element.scrollTo(0, this.top);
           
            requestAnimationFrame(this.scroll);
        }
        }
    }
   
 
    const scroll = new Scrooth({
        element: window,
        strength: 13, //스크롤 한칸마다 얼마나 갈지
        acceleration: 1.1, //가속
        deceleration: 0.975, //감속
    });

</script>

<script> /* 다크모드 */
    const toggle = document.getElementById('toggleDark');
    const body = document.querySelector('body');
    const text = document.querySelector('.text');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-brightness-high-fill');
    if(this.classList.toggle('bi-moon')){
        $('html').attr('data-dark', 'true');
/*         body.style.background = 'white';
        body.style.color = 'black';
        body.style.transition = '2s';

        text.style.color = 'black';
        text.style.transition = '2s'; */
    }else{
        $('html').attr('data-dark', 'false');
/*         body.style.background = 'black';
        body.style.color = 'white';
        body.style.transition = '2s';
    
        text.style.color = 'white';
        text.style.transition = '2s'; */
    }
});
</script>



</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다.

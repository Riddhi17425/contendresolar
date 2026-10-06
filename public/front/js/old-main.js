function throttle(o,n){let a,r;return function(){var e=this,t=arguments;r?(clearTimeout(a),a=setTimeout(function(){Date.now()-r>=n&&(o.apply(e,t),r=Date.now())},n-(Date.now()-r))):(o.apply(e,t),r=Date.now())}}$(document).ready(function(){ScrollReveal().reveal(".animation-top",{origin:"top",distance:"100px",opacity:0,duration:1500}),ScrollReveal().reveal(".animation-bottom",{origin:"bottom",distance:"100px",opacity:0,duration:1500}),ScrollReveal().reveal(".animation-zoom-in",{scale:.9,duration:1500,delay:200}),ScrollReveal().reveal(".animation-zoom-out",{scale:1.1,duration:1500})}),window.addEventListener("scroll",throttle(()=>{const e=document.getElementById("header");if(e&&e.classList.contains("cs_white_header"))return;var t;e&&(t=50<=window.scrollY,e.style.backgroundColor=t?"#00000099":"transparent")},100)),$(".clients_slider").slick({infinite:!0,slidesToShow:3,slidesToScroll:1,dots:!1,arrows:!1,autoplay:!0,autoplaySpeed:0,speed:5e3,cssEase:"linear",pauseOnFocus:!1,pauseOnHover:!1,variableWidth:!0}),$(".quali_slider").slick({infinite:!0,slidesToShow:5,slidesToScroll:1,dots:!1,arrows:!1,autoplay:!0,autoplaySpeed:0,speed:5e3,cssEase:"linear",pauseOnFocus:!1,pauseOnHover:!1,responsive:[{breakpoint:1367,settings:{slidesToShow:3}}]});let counterStarted=!1;function isInViewport(e){e=e.getBoundingClientRect();return e.top<=window.innerHeight&&0<=e.bottom}function animateValue(n,a,r,i){let l=null;requestAnimationFrame(function e(t){l=l||t;var o=t-l,t=Math.easeOutQuad(o,a,r-a,i);n.textContent=Math.round(t),o<i?requestAnimationFrame(e):n.textContent=r})}function startCounters(){const e=document.querySelectorAll("#counterSection span");e.forEach(e=>{var t=+e.getAttribute("data-target");animateValue(e,0,t,3e3)})}Math.easeOutQuad=function(e,t,o,n){return-o*(e/=n)*(e-2)+t},window.addEventListener("scroll",()=>{isInViewport(document.getElementById("counterSection"))&&!counterStarted&&(startCounters(),counterStarted=!0)}),document.getElementById("currentYear").textContent=(new Date).getFullYear(),$(".slider-for").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,fade:!0,asNavFor:".slider-nav"}),$(".slider-nav").slick({slidesToShow:4,slidesToScroll:1,asNavFor:".slider-for",dots:!1,centerMode:!0,focusOnSelect:!0});

$(document).ready(function(){
  $('.envi_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,         
    dots: false,         
    autoplay: false,    
    prevArrow: $('.slick-prev-custom'),
    nextArrow: $('.slick-next-custom')  
  });
});


 function scrollToSection() {
    document.getElementById("career-jump").scrollIntoView({
      behavior: "smooth"  // smooth scrolling
    });
  }
  
// ------------------- loader   ---------------


// document.addEventListener("DOMContentLoaded", () => {
//   const loader = document.getElementById("page-loader");
//   const paths = loader.querySelectorAll("path");

//   paths.forEach((path, i) => {
//     const length = path.getTotalLength();
//     path.style.strokeDasharray = length;
//     path.style.strokeDashoffset = length;
//     path.style.fillOpacity = 0;
//     path.style.animation = `draw 1.5s ease forwards ${i*0.2}s, fillUp 0.8s ease forwards ${1.5 + i*0.2}s`;
//   });

//   setTimeout(() => loader.classList.add("hidden"), 3500);
// });

$(document).ready(function() {
    if ($('.why_contendre_slider').length) {
        $('.why_contendre_slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3500,
            pauseOnHover: true,
            pauseOnFocus: true,
            pauseOnDotsHover: true,
            touchThreshold: 10,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }
});

let currentSlide=0;
let slideTimer;

function slides(){return document.querySelectorAll(".slide")}
function dots(){return document.querySelectorAll(".dot")}
function showSlide(index){
 const s=slides(); const d=dots();
 if(!s.length)return;
 currentSlide=(index+s.length)%s.length;
 s.forEach(x=>x.classList.remove("active"));
 d.forEach(x=>x.classList.remove("active"));
 s[currentSlide].classList.add("active");
 if(d[currentSlide])d[currentSlide].classList.add("active");
}
function changeSlide(step){showSlide(currentSlide+step);resetSlider();}
function goToSlide(index){showSlide(index);resetSlider();}
function resetSlider(){clearInterval(slideTimer);slideTimer=setInterval(()=>showSlide(currentSlide+1),5000);}
function toggleMenu(){document.getElementById("navLinks").classList.toggle("show");}
document.addEventListener("DOMContentLoaded",()=>{if(slides().length){showSlide(0);resetSlider();}});
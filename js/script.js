


//inicio Slider Banner
let totalSlides = document.querySelectorAll('#sliderarea').length;
let currentSlide = 0;
let sliderWidth = document.querySelector('.sliders').clientWidth;
document.querySelector('.slider').style.width = `calc(100vw = ${totalSlides})`;




function goPrev() {
    currentSlide--;
    if(currentSlide < 0) {
        currentSlide = totalSlides - 1;
    }

    updateMargin();
}

function goNext() {
    currentSlide++;
    if(currentSlide > (totalSlides-1)) {
        currentSlide = 0;
    }

    updateMargin();
}

function updateMargin(){
    let sliderItemWidth = document.querySelector('#sliderarea').clientWidth;
    let newMargin = (currentSlide * sliderItemWidth);
    document.querySelector('.slider').style.marginLeft = `-${newMargin}px`;
}



setInterval(goNext, 5000);



//Menu Mobile


$(document).ready(function(){
    $(".btnMenu_open").click(function(){
        $(".menu-mobile ul").show();
    });
    
    $(".btnMenu_close").click(function(){
        $(".menu-mobile ul").hide();
    });
    });
    
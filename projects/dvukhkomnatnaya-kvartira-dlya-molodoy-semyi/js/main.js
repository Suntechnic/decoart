$('.slider').each(function() {

    var $this = $(this),
        $status = $this.closest('.item').find('.slider-num');


    $this.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {

        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.html('<span>' + (((i) < 10) ? "" + (i) : i) + '</span>' + '<span>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;' + (((slick.slideCount) < 10) ? "" + (slick.slideCount) : slick.slideCount) + '</span>');
    });

    $this.slick({
		infinite:false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false
    });
});
$(".next").click(function(e) { // Added a '.'
    $(".slider1").slick('slickNext');
});
$(".prev").click(function(e) { // Added a '.'
    $(".slider1").slick('slickPrev');
});
$(".next1").click(function(e) { // Added a '.'
    $(".slider2").slick('slickNext');
});
$(".prev1").click(function(e) { // Added a '.'
    $(".slider2").slick('slickPrev');
});
$(".next2").click(function(e) { // Added a '.'
    $(".slider3").slick('slickNext');
});
$(".prev2").click(function(e) { // Added a '.'
    $(".slider3").slick('slickPrev');
});
$(".next3").click(function(e) { // Added a '.'
    $(".slider4").slick('slickNext');
});
$(".prev3").click(function(e) { // Added a '.'
    $(".slider4").slick('slickPrev');
});
$(".next4").click(function(e) { // Added a '.'
    $(".slider5").slick('slickNext');
});
$(".prev4").click(function(e) { // Added a '.'
    $(".slider5").slick('slickPrev');
});

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    $(".project_head img").css({
        transform: 'translate3d(0%, -'+(scroll/300)+'%, 0) scale('+(300 + scroll/5)/300+')',
    });
});

function onEntry(entry) {
    entry.forEach(change => {
        if (change.isIntersecting) {
            change.target.classList.add('element-show');
        }
    });
}

let options = {
    threshold: [0.5] };
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.element-animation');

for (let elm of elements) {
    observer.observe(elm);
}

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
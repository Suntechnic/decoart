$('.slider').each(function() {

    var $this = $(this),
        $status = $this.closest('.item').find('.slider-num');


    $this.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {

        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.html('<span>' + (((i) < 10) ? "" + (i) : i) + '</span>' + '<span>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;' + (((slick.slideCount) < 10) ? "" + (slick.slideCount) : slick.slideCount) + '</span>');
    });

    $this.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false
    });
});
$('.slider-1').each(function() {

    var $this = $(this),
        $status = $this.closest('.item').find('.slider-num');


    $this.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {

        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.html('<span>' + (((i) < 10) ? "" + (i) : i) + '</span>' + '<span>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;' + (((slick.slideCount) < 10) ? "" + (slick.slideCount) : slick.slideCount) + '</span>');
    });

    $this.slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 761,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
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
$(".next5").click(function(e) { // Added a '.'
    $(".slider6").slick('slickNext');
});
$(".prev5").click(function(e) { // Added a '.'
    $(".slider6").slick('slickPrev');
});
$(".next6").click(function(e) { // Added a '.'
    $(".slider7").slick('slickNext');
});
$(".prev6").click(function(e) { // Added a '.'
    $(".slider7").slick('slickPrev');
});
$(".next7").click(function(e) { // Added a '.'
    $(".slider8").slick('slickNext');
});
$(".prev7").click(function(e) { // Added a '.'
    $(".slider8").slick('slickPrev');
});
$('.slider-mobile').slick({
    slidesToShow: 10,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: false,
    responsive: [
        {
            breakpoint: 2900,
            settings: "unslick"
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
$(".img-1 a.light").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-1 a.dark').removeClass('active');
    $('.img-1 a.dark-mini').removeClass('active')
    $('.img-1 a.light-mini').removeClass('active')
    $(".img-1 img.dark").hide();
    $(".img-1 img.light").show();
    $(".img-1 img.dark-mini").hide();
    $(".img-1 img.light-mini").hide();
});
$(".img-1 a.dark").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-1 a.light').removeClass('active');
    $('.img-1 a.dark-mini').removeClass('active')
    $('.img-1 a.light-mini').removeClass('active')
    $(".img-1 img.dark").show();
    $(".img-1 img.light").hide();
    $(".img-1 img.dark-mini").hide();
    $(".img-1 img.light-mini").hide();
});
$(".img-1 a.light-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-1 a.dark').removeClass('active');
    $('.img-1 a.dark-mini').removeClass('active')
    $('.img-1 a.light').removeClass('active')
    $(".img-1 img.dark").hide();
    $(".img-1 img.light").hide();
    $(".img-1 img.dark-mini").hide();
    $(".img-1 img.light-mini").show();
});
$(".img-1 a.dark-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-1 a.dark').removeClass('active');
    $('.img-1 a.light').removeClass('active')
    $('.img-1 a.light-mini').removeClass('active')
    $(".img-1 img.dark").hide();
    $(".img-1 img.light").hide();
    $(".img-1 img.dark-mini").show();
    $(".img-1 img.light-mini").hide();
});
$(".img-2 a.light").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-2 a.dark').removeClass('active');
    $('.img-2 a.dark-mini').removeClass('active')
    $('.img-2 a.light-mini').removeClass('active')
    $(".img-2 img.dark").hide();
    $(".img-2 img.light").show();
    $(".img-2 img.dark-mini").hide();
    $(".img-2 img.light-mini").hide();
});
$(".img-2 a.dark").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-2 a.light').removeClass('active');
    $('.img-2 a.dark-mini').removeClass('active')
    $('.img-2 a.light-mini').removeClass('active')
    $(".img-2 img.dark").show();
    $(".img-2 img.light").hide();
    $(".img-2 img.dark-mini").hide();
    $(".img-2 img.light-mini").hide();
});
$(".img-2 a.light-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-2 a.dark').removeClass('active');
    $('.img-2 a.dark-mini').removeClass('active')
    $('.img-2 a.light').removeClass('active')
    $(".img-2 img.dark").hide();
    $(".img-2 img.light").hide();
    $(".img-2 img.dark-mini").hide();
    $(".img-2 img.light-mini").show();
});
$(".img-2 a.dark-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-2 a.dark').removeClass('active');
    $('.img-2 a.light').removeClass('active')
    $('.img-2 a.light-mini').removeClass('active')
    $(".img-2 img.dark").hide();
    $(".img-2 img.light").hide();
    $(".img-2 img.dark-mini").show();
    $(".img-2 img.light-mini").hide();
});
$(".img-3 a.light").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-3 a.dark').removeClass('active');
    $('.img-3 a.dark-mini').removeClass('active')
    $('.img-3 a.light-mini').removeClass('active')
    $(".img-3 img.dark").hide();
    $(".img-3 img.light").show();
    $(".img-3 img.dark-mini").hide();
    $(".img-3 img.light-mini").hide();
});
$(".img-3 a.dark").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-3 a.light').removeClass('active');
    $('.img-3 a.dark-mini').removeClass('active')
    $('.img-3 a.light-mini').removeClass('active')
    $(".img-3 img.dark").show();
    $(".img-3 img.light").hide();
    $(".img-3 img.dark-mini").hide();
    $(".img-3 img.light-mini").hide();
});
$(".img-3 a.light-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-3 a.dark').removeClass('active');
    $('.img-3 a.dark-mini').removeClass('active')
    $('.img-3 a.light').removeClass('active')
    $(".img-3 img.dark").hide();
    $(".img-3 img.light").hide();
    $(".img-3 img.dark-mini").hide();
    $(".img-3 img.light-mini").show();
});
$(".img-3 a.dark-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-3 a.dark').removeClass('active');
    $('.img-3 a.light').removeClass('active')
    $('.img-3 a.light-mini').removeClass('active')
    $(".img-3 img.dark").hide();
    $(".img-3 img.light").hide();
    $(".img-3 img.dark-mini").show();
    $(".img-3 img.light-mini").hide();
});
$(".img-4 a.light").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-4 a.dark').removeClass('active');
    $('.img-4 a.dark-mini').removeClass('active')
    $('.img-4 a.light-mini').removeClass('active')
    $(".img-4 img.dark").hide();
    $(".img-4 img.light").show();
    $(".img-4 img.dark-mini").hide();
    $(".img-4 img.light-mini").hide();
});
$(".img-4 a.dark").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-4 a.light').removeClass('active');
    $('.img-4 a.dark-mini').removeClass('active')
    $('.img-4 a.light-mini').removeClass('active')
    $(".img-4 img.dark").show();
    $(".img-4 img.light").hide();
    $(".img-4 img.dark-mini").hide();
    $(".img-4 img.light-mini").hide();
});
$(".img-4 a.light-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-4 a.dark').removeClass('active');
    $('.img-4 a.dark-mini').removeClass('active')
    $('.img-4 a.light').removeClass('active')
    $(".img-4 img.dark").hide();
    $(".img-4 img.light").hide();
    $(".img-4 img.dark-mini").hide();
    $(".img-4 img.light-mini").show();
});
$(".img-4 a.dark-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-4 a.dark').removeClass('active');
    $('.img-4 a.light').removeClass('active')
    $('.img-4 a.light-mini').removeClass('active')
    $(".img-4 img.dark").hide();
    $(".img-4 img.light").hide();
    $(".img-4 img.dark-mini").show();
    $(".img-4 img.light-mini").hide();
});
$(".img-5 a.light").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-5 a.dark').removeClass('active');
    $('.img-5 a.dark-mini').removeClass('active')
    $(".img-5 img.dark").hide();
    $(".img-5 img.light").show();
    $(".img-5 img.dark-mini").hide();
});
$(".img-5 a.dark").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-5 a.light').removeClass('active');
    $('.img-5 a.dark-mini').removeClass('active')
    $(".img-5 img.dark").show();
    $(".img-5 img.light").hide();
    $(".img-5 img.dark-mini").hide();
});
$(".img-5 a.dark-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-5 a.dark').removeClass('active');
    $('.img-5 a.light').removeClass('active')
    $(".img-5 img.dark").hide();
    $(".img-5 img.light").hide();
    $(".img-5 img.dark-mini").show();
});
$(".img-6 a.light").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-6 a.dark').removeClass('active');
    $(".img-6 img.dark").hide();
    $(".img-6 img.light").show();
});
$(".img-6 a.dark").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-6 a.light').removeClass('active');
    $(".img-6 img.dark").show();
    $(".img-6 img.light").hide();
});
$(".img-7 a.light").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-7 a.light-mini').removeClass('active');
    $(".img-7 img.light-mini").hide();
    $(".img-7 img.light").show();
});
$(".img-7 a.light-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-7 a.light').removeClass('active');
    $(".img-7 img.light-mini").show();
    $(".img-7 img.light").hide();
});
$(".img-8 a.light").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-8 a.dark-mini').removeClass('active');
    $('.img-8 a.dark').removeClass('active');
    $(".img-8 img.dark-mini").hide();
    $(".img-8 img.dark").hide();
    $(".img-8 img.light").show();
});
$(".img-8 a.dark").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-8 a.light').removeClass('active');
    $('.img-8 a.dark-mini').removeClass('active');
    $(".img-8 img.dark").show();
    $(".img-8 img.light").hide();
    $(".img-8 img.dark-mini").hide();
});
$(".img-8 a.dark-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-8 a.light').removeClass('active');
    $('.img-8 a.dark').removeClass('active');
    $(".img-8 img.dark-mini").show();
    $(".img-8 img.dark").hide();
    $(".img-8 img.light").hide();
});
$(".img-9 a.light").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-9 a.dark').removeClass('active');
    $('.img-9 a.dark-mini').removeClass('active')
    $('.img-9 a.light-mini').removeClass('active')
    $(".img-9 img.dark").hide();
    $(".img-9 img.light").show();
    $(".img-9 img.dark-mini").hide();
    $(".img-9 img.light-mini").hide();
});
$(".img-9 a.dark").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-9 a.light').removeClass('active');
    $('.img-9 a.dark-mini').removeClass('active')
    $('.img-9 a.light-mini').removeClass('active')
    $(".img-9 img.dark").show();
    $(".img-9 img.light").hide();
    $(".img-9 img.dark-mini").hide();
    $(".img-9 img.light-mini").hide();
});
$(".img-9 a.light-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-9 a.dark').removeClass('active');
    $('.img-9 a.dark-mini').removeClass('active')
    $('.img-9 a.light').removeClass('active')
    $(".img-9 img.dark").hide();
    $(".img-9 img.light").hide();
    $(".img-9 img.dark-mini").hide();
    $(".img-9 img.light-mini").show();
});
$(".img-9 a.dark-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-9 a.dark').removeClass('active');
    $('.img-9 a.light').removeClass('active')
    $('.img-9 a.light-mini').removeClass('active')
    $(".img-9 img.dark").hide();
    $(".img-9 img.light").hide();
    $(".img-9 img.dark-mini").show();
    $(".img-9 img.light-mini").hide();
});
$(".img-10 a.light").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-10 a.dark').removeClass('active');
    $('.img-10 a.dark-mini').removeClass('active')
    $('.img-10 a.light-mini').removeClass('active')
    $(".img-10 img.dark").hide();
    $(".img-10 img.light").show();
    $(".img-10 img.dark-mini").hide();
    $(".img-10 img.light-mini").hide();
});
$(".img-10 a.dark").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-10 a.light').removeClass('active');
    $('.img-10 a.dark-mini').removeClass('active')
    $('.img-10 a.light-mini').removeClass('active')
    $(".img-10 img.dark").show();
    $(".img-10 img.light").hide();
    $(".img-10 img.dark-mini").hide();
    $(".img-10 img.light-mini").hide();
});
$(".img-10 a.light-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-10 a.dark').removeClass('active');
    $('.img-10 a.dark-mini').removeClass('active')
    $('.img-10 a.light').removeClass('active')
    $(".img-10 img.dark").hide();
    $(".img-10 img.light").hide();
    $(".img-10 img.dark-mini").hide();
    $(".img-10 img.light-mini").show();
});
$(".img-10 a.dark-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-10 a.dark').removeClass('active');
    $('.img-10 a.light').removeClass('active')
    $('.img-10 a.light-mini').removeClass('active')
    $(".img-10 img.dark").hide();
    $(".img-10 img.light").hide();
    $(".img-10 img.dark-mini").show();
    $(".img-10 img.light-mini").hide();
});

$(".img-11 a.light").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-11 a.dark').removeClass('active');
    $('.img-11 a.dark-mini').removeClass('active')
    $('.img-11 a.light-mini').removeClass('active')
    $(".img-11 img.dark").hide();
    $(".img-11 img.light").show();
    $(".img-11 img.dark-mini").hide();
    $(".img-11 img.light-mini").hide();
});
$(".img-11 a.dark").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-11 a.light').removeClass('active');
    $('.img-11 a.dark-mini').removeClass('active')
    $('.img-11 a.light-mini').removeClass('active')
    $(".img-11 img.dark").show();
    $(".img-11 img.light").hide();
    $(".img-11 img.dark-mini").hide();
    $(".img-11 img.light-mini").hide();
});
$(".img-11 a.light-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-11 a.dark').removeClass('active');
    $('.img-11 a.dark-mini').removeClass('active')
    $('.img-11 a.light').removeClass('active')
    $(".img-11 img.dark").hide();
    $(".img-11 img.light").hide();
    $(".img-11 img.dark-mini").hide();
    $(".img-11 img.light-mini").show();
});
$(".img-11 a.dark-mini").click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $('.img-11 a.dark').removeClass('active');
    $('.img-11 a.light').removeClass('active')
    $('.img-11 a.light-mini').removeClass('active')
    $(".img-11 img.dark").hide();
    $(".img-11 img.light").hide();
    $(".img-11 img.dark-mini").show();
    $(".img-11 img.light-mini").hide();
});
$(".btn1").click(function(e) {
    e.preventDefault();
    $('.pl1').toggleClass('active');
});
$(".btn2").click(function(e) {
    e.preventDefault();
    $('.pl2').toggleClass('active');
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
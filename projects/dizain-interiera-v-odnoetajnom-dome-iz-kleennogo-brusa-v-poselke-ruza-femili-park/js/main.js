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
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    $(".project_head img").css({
        transform: 'translate3d(0%, -'+(scroll/300)+'%, 0) scale('+(300 + scroll/5)/300+')',
    });
});
$('.slides').owlCarousel({
    items: 1,
    animateOut: 'fadeOut',
    autoplay: true,
    loop: true,
});
$('.banner-carousel').owlCarousel({
    items: 2,
    margin: 20,
    animateOut: 'fadeOut',
    autoplay: true,
    loop: true,
    //nav: true,
    // navText: [
    //     `<i class="fas fa-arrow-right"></i>`,
    //     `<i class="fas fa-arrow-right"></i>`,
    // ],
    responsive: {
        0: {
            items: 1,
            autoHeight: true
        },
        720: {
            items: 2
        }
    }
});

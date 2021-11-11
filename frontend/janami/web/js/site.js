$('.slides').owlCarousel({
    items: 1,
    animateOut: 'fadeOut',
    animateInt: 'fadeIn',
    autoplay: true,
    loop: true,
    autoHeight: true
});

$('.post-carousel,.creative-carousel').owlCarousel({
    items: 3,
    margin: 20,
    animateOut: 'fadeOut',
    autoplay: true,
    nav: true,
    dots: false,
    navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
    responsive: {
        //  loop: true,
        0: {
            items: 1,
            autoHeight: true
        },
        720: {
            items: 2
        },
        960: {
            items: 3
        }
    }
})
$(".paper-carousel,.testimonial-carousel").owlCarousel({
    items: 1,
    margin: 20,
    animateOut: 'fadeOut',
    autoplay: true,
    nav: true,
    dots: true,
    navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
    responsive: {
        //  loop: true,
        0: {
            items: 1,
            autoHeight: true
        },
        720: {
            items: 1
        },
        960: {
            items: 1
        }
    }
})
$('.banner-carousel').owlCarousel({
    items: 2,
    margin: 20,
    animateOut: 'fadeOut',
    autoplay: true,
    loop: true,
    // nav: true,
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
const initThumbnail = (element, main) => {
    $(main).desoSlide({
        thumbs: $(`ul${element} li > a`),
        imageClass: 'w-100', // Image class(es)
        insertion: 'replace',
        effect: {
            provider: 'animate',
            name: 'fade'
        },
        auto: {
            start: true
        },
        first: 0,
        interval: 4000,
        events: {
            onThumbClick: (e) => {
                // $(main).html(e);
            }
        }
    });
}

const initThumbnailCarousel = (element) => {
    $(element).owlCarousel({
        items: 1,
        animateOut: 'fadeOut',
        autoplay: true,
        loop: true,
    });

}

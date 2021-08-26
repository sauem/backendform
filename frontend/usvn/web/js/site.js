$('.home-slider').nivoSlider({
    effect: 'boxRandom',
    directionNav: false,
    controlNav: false,
});
const productItems = $('.box-product-slider').data('items');
$('.box-product-slider').owlCarousel({
    items: productItems ?? 2,
   // autoplay: true,
   // loop: true,
    dots: false,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    margin: 20,
})
$('.box-vertical-slider').jCarouselLite({
    mouseWheel: false,
    auto: true,
    hoverPause: true,
    vertical: true,
    speed: 1200,
    visible: 3,
    scroll: 1
});

$('#client-carousel').owlCarousel({
    items: 5,
    loop: true,
    nav: true,
    margin: 20,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    dots: false,
    responsive: {
        0: {items: 2},
        720: {items: 4},
        960: {item: 6}
    }
})

function switchLanguage(lang) {
    this.setLang = async (lang) => {
        return $.ajax({
            url: '/site/switch-language',
            data: {lang},
            type: 'POST',
            cache: false
        })
    }
    try {
        Swal.fire({
            title: 'Switching language...',
            icon: 'info',
            showConfirmButton: false,
            type: 'info',
            willOpen: async () => {
                Swal.showLoading();
                const res = await this.setLang(lang);
                setTimeout(() => window.location.replace('/'), 1000);
            }
        });
    } catch (e) {

    }
}

function getAjaxError(e) {
    console.log(e);
    return e.message;
}

function BriefRequest() {
    const reqBrief = async (data) => {
        return $.ajax({
            url: AJAX_URL.SUBMIT_BRIEF,
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            data: data
        });
    }
    this.send = () => {
        $(document).on('click', '.btn-request-form', function (e) {
            e.preventDefault();
            let form = $(this).closest('#request-form');
            let data = new FormData(form[0]);
            swal.fire({
                title: 'Waiting submit...',
                type: 'info',
                icon: 'info',
                showConfirmButton: false,
                clickOutside: false,
                allowEscapeKey: false,
                willOpen: async () => {
                    swal.showLoading()
                    try {
                        const res = await reqBrief(data);

                        swal.fire({
                            title: 'Successfully!',
                            icon: 'success',
                            text: '',
                            type: 'success'
                        }).then(() => {
                            swal.close();
                            form.trigger('reset');
                        });
                    } catch (e) {
                        swal.fire({
                            title: 'Error',
                            text: getAjaxError(e),
                            type: 'error'
                        });
                    }
                }
            })
            return false;
        });
    }
}

new BriefRequest().send();
$('.gallery').each(function () { // the containers for all your galleries
    $(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
            enabled: true,
        }
    });
});

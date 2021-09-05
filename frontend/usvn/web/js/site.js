$('.home-slider').nivoSlider({
    effect: 'boxRandom',
    directionNav: false,
    controlNav: false,
});

const productItems = $('.box-product-slider').data('items');
$('.box-product-slider').owlCarousel({
    items: productItems ?? 2,
    autoplay: true,
    loop: true,
    dots: false,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    margin: 20,
})
$('.box-vertical-slider').jCarouselLite({
    mouseWheel: false,
    auto: true,
    timeout: 10000,
    hoverPause: true,
    vertical: true,
    speed: 1500,
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

const orderProduct = async (pId) => {
    try {
        const modal = $('#modal-order');
        modal.find('input[name="Contact[contact_pre]"]').val(pId);
        modal.modal();
    } catch (e) {
        console.log(e);
    }
}

function BriefRequest() {
    const reqBrief = async (data) => {
        return $.ajax({
            url: '/ajax/create-brief',
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            data: data
        });
    }
    this.send = () => {
        $(document).on('click', '.btn-submit-order', function (e) {
            e.preventDefault();
            let form = $(document).find('#request-form');
            let data = new FormData(form[0]);
            console.log("REST", data);

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
                            $("#modal-order").modal('hide');
                            form.trigger('reset');
                            setTimeout(() => window.location.reload()
                                ,
                                1500
                            )
                            ;
                        });
                    } catch (e) {
                        swal.fire({
                            title: 'Error',
                            text: JSON.parse(e.responseText).message,
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


function PollRequest() {
    const reqBrief = async (ids) => {
        return $.ajax({
            url: '/ajax/add-poll',
            type: 'POST',
            dataType: 'json/application',
            cache: false,
            data: {
                "ids[]": ids
            }
        });
    }
    this.send = () => {
        $(document).on('click', '.btn-submit-poll', function (e) {
            e.preventDefault();
            const checkbox = $('#thamdoykien').find('.checkbox-product');

            let ids = [];
            checkbox.each(function (i) {
                if ($(this).is(":checked")) {
                    ids[i] = $(this).val();
                }
            });
            if (ids.length <= 0) {
                swal.fire({
                    title: 'Error',
                    text: 'Please choice one product!',
                    type: 'error'
                });
                return false;
            }
            ids = ids.filter(item => item);

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
                        const res = await reqBrief(ids);
                        swal.fire({
                            title: 'Successfully!',
                            icon: 'success',
                            text: '',
                            type: 'success'
                        }).then(() => {
                            swal.close();
                            $("#modal-order").modal('hide');
                            form.trigger('reset');
                            setTimeout(() => window.location.reload()
                                ,
                                1500
                            )
                            ;
                        });
                    } catch (e) {
                        swal.fire({
                            title: 'Error',
                            text: JSON.parse(e.responseText).message,
                            type: 'error'
                        });
                    }
                }
            })
            return false;
        });
    }
}

new PollRequest().send();

function getAjaxError(e) {
    console.log(e);
    return e.responseText.message;
}

$('.gallery').each(function () { // the containers for all your galleries
    $(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
            enabled: true,
        }
    });
});

(() => {
    $('#rand-dom-access').html(Math.round(Math.random() * 20000));
    $('#rand-dom-online').html(Math.round(Math.random() * 200));
})()

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

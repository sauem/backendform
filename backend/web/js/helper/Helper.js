Array.prototype.getColumn = (key => {
    return this.map(item => {
        return item[key];
    });
});
const axiosCatch = (error) => {
    if (error.response) {
        // The request was made and the server responded with a status code
        // that falls out of the range of 2xx
        console.error('Response data', error.response.data);
        console.error('Response status', error.response.status);
        console.error('Response header', error.response.headers);
        const {data} = error.response;
        let msg = data.message;
        if (typeof msg === 'undefined' && Array.isArray(data)) {
            msg = data[0].message;
        }
        throw {
            data: error.response.data,
            message: msg,
        };
    } else if (error.request) {
        // The request was made but no response was received
        // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
        // http.ClientRequest in node.js
        console.error('Request', error.request);
        throw {
            message: error.message,
        };
    } else {
        // Something happened in setting up the request that triggered an Error
        console.error('Error', error.message);
        throw {
            message: error.message,
        };
    }
};

const Server = axios.create({
    baseURL: '/api',
    headers: {
        'Content-Type': 'application/json',
    },
});

const toSlug = (str) => {
    let slug = str.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\’|\~|\!|\@|\®|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    return slug;
}

function treeLoop(args = []) {
    if (args.length <= 0) {
        return null;
    }

}

function getObjectValue(val, obj, getKey = false) {
    let key = obj.findIndex(item =>
        item.value === val || item.id === val || item.slug === val || item.lang === val
    );
    if (getKey) {
        return key;
    }
    return obj[key];
}


function convertTreeSelect(array) {
    if (array) {
        return array.map(item => {
            return {
                title: item.name,
                key: item.id,
                type: item.type,
                value: item.id,
                children: convertTreeSelect(item.children)
            }
        });
    }
    return [];
}

function getParams(name) {
    let url = new URLSearchParams(window.location.search);
    return url.get(name);
}

function initTinymce(callback, editorClass = 'editor', defaultContent = 'Nội dung bài viết', height = 600) {
    // let useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

    tinymce.init({
        selector: `textarea.${editorClass}`,
        fontsize_formats: "8pt 10pt 12pt 14pt 16pt 18pt 20pt 22pt 24pt 26pt 28pt 30pt",
        plugins: 'code print preview importcss tinydrive searchreplace' +
            ' autolink autosave save directionality  visualblocks visualchars fullscreen' +
            ' image link media table charmap pagebreak nonbreaking anchor insertdatetime advlist lists  wordcount  help charmap quickbars emoticons',
        images_upload_url: '/' + ROUTE.UPLOAD,

        file_picker_callback: function (cb, value, meta) {
            let input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.onchange = function () {
                let file = this.files[0];
                onUploadMedia(file, data => {
                    cb(`/static${data.path}`, {title: file.name, width: '100%', height: 'auto', class: 'img-fluid'});
                }, null, (e) => {
                    console.log(e);
                });
            };

            input.click();
        },
        images_upload_handler: function (blobInfo, success, failure) {

            var xhr, formData;

            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '/' + ROUTE.UPLOAD);

            xhr.onload = function () {
                var json;

                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }

                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.path != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }

                success(`/static${json.path.replace("..", "")}`, {width: '100%', height: 'auto'});
            };

            formData = new FormData();
            formData.append('imageFile', blobInfo.blob(), blobInfo.filename());
            formData.append('fileType', `image`);
            formData.append('type', `post-detail`);

            xhr.send(formData);
        },
        menubar: 'file edit view insert format tools table tc help',
        toolbar: 'filemanager code undo redo | bold italic code underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview |  image media pageembed link anchor | a11ycheck ltr rtl | showcomments addcomment',
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        image_advtab: true,
        importcss_append: true,
        height: height,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h1 h2 h3 blockquote quicktable',
        // noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'inline',
        mode: "textareas",
        // spellchecker_ignore_list: ['Ephox', 'Moxiecode'],
        // content_style: '.mymention{ color: gray; }',
        // a11y_advanced_options: true,
        setup: function (ed) {
            ed.on('keyup', function (e) {
                callback(ed.getBody().innerHTML);
            });
            ed.on('Change', function (e) {
                callback(ed.getBody().innerHTML);
            });
            ed.on('init', function (e) {
                if (defaultContent) {
                    ed.setContent(defaultContent);
                }
            });
        }
    });
}

function initSortable() {
    $('#menu-sortable').nestable({
        maxDepth: 2,
        emptyClass: ''
    });
}

const formatNum = (num) => {
    if (!num) {
        return 0;
    }
    return '' + num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}

const getFrontLink = (type = 'article', archive = '', slug = '') => {
    let host = window.location.hostname;
    host = host.replace('admin.', '', host);
    switch (type) {
        case 'archive-product':
            return `${host}/san-pham/${archive}`;
        case 'archive-article':
            return `${host}/${archive}`;
        case 'article':
        case 'NULL':
            return `${host}/${archive}/${slug}`;
        case 'product':
            return `${host}/san-pham/${archive}/${slug}`;
        default:
            return host;
    }
}

//
// const renderPrice = (product) => {
//     const {default_sale_price, default_price, default_sale_type} = product;
//     if (default_sale_price > 0) {
//         return (
//             <span>
//             <del>
//                 <small className={`text-muted`}>
//                     <strong>{formatNum(default_price)}đ</strong>
//                 </small>
//             </del>
//             <ins>{formatNum(default_sale_price)}đ</ins>
//         </span>
//         );
//     }
//     return <span>{formatNum(default_price)}đ</span>;
// }

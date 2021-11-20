const FILE_TYPE_IMAGE = 'image';
const FILE_TYPE_VIDEO = 'video';
const FILE_TYPE_BASE64 = 'base64';
const MEDIA_TYPE_ARCHIVE = 'archive';
const MEDIA_TYPE_PRODUCT = 'product';
const MEDIA_TYPE_LOGO = 'logo';
const MEDIA_TYPE_BANNER = 'banner';
const MEDIA_TYPE_BLOG = 'article';
const MEDIA_TYPE_TESTIMONIAL = 'testimonial';
// Loại danh mục
const ARCHIVE_TYPE_BLOG = 'article';
const ARCHIVE_TYPE_PRODUCT = 'product';
// Ngôn ngữ
const LANG_VI = 'vi';
const LANG_EN = 'en';
const DEVICE_DESKTOP = 'desktop';
const DEVICE_MOBILE = 'mobile';
const POSITION_HOME_SLIDER = 'home_slider';
const POSITION_LOGO_PARTNER = 'logo_partner';
const POSITION_TOP_HEADER = 'top_header';
const POSITION_SIDEBAR_LEFT_TOP = 'sidebar_left_top';
const POSITION_SIDEBAR_LEFT_BOTTOM = 'sidebar_left_bottom';
const POSITION_SIDEBAR_RIGHT_TOP = 'sidebar_right_top';
const POSITION_SIDEBAR_RIGHT_BOTTOM = 'sidebar_right_bottom';
const POSITION_TOP_FOOTER = 'top_footer';
const POSITION_INVENTION = 'invention';
const UPLOAD_PATH = '/uploads/';
//Banner

const BANNER_PAGES = [
    {
        name: 'Trang chủ',
        slug: 'home'
    },
    {
        name: 'Danh mục',
        slug: 'archive'
    },
    {
        name: 'Sản phẩm',
        slug: 'product'
    },
    {
        name: 'Bài viết',
        slug: 'article'
    },
];
const BANNER_TYPES = [
    {name: 'Hỉnh ảnh', slug: FILE_TYPE_IMAGE},
    {name: 'Video', slug: FILE_TYPE_VIDEO},
];
const BANNER_POSITIONS = [

    {
        name: 'Slider trang chủ',
        slug: POSITION_HOME_SLIDER
    },
    {
        name: 'Bằng sáng chế',
        slug: POSITION_INVENTION
    },
    {
        name: 'Header trên cùng',
        slug: POSITION_TOP_HEADER
    },
    {
        name: 'Cột trái - Trên',
        slug: POSITION_SIDEBAR_LEFT_TOP
    },
    {
        name: 'Cột trái - Dưới',
        slug: POSITION_SIDEBAR_LEFT_BOTTOM
    },
    {
        name: 'Cột phải - Trên',
        slug: POSITION_SIDEBAR_RIGHT_TOP
    },
    {
        name: 'Cột phải - Dưới',
        slug: POSITION_SIDEBAR_RIGHT_BOTTOM
    },
    {
        name: 'Trên footer',
        slug: POSITION_TOP_FOOTER
    },
    {
        name: 'Logo đối tác',
        slug: POSITION_LOGO_PARTNER
    },
    {
        name: 'Thư viện ảnh',
        slug: 'gallery'
    },
];
const BANNER_DEVICES = [
    {name: 'Desktop', slug: DEVICE_DESKTOP},
    {name: 'Mobile', slug: DEVICE_MOBILE},
];
const LANGUAGES = [
    {
        lang: LANG_VI,
        name: 'Tiếng Việt',
        code: 'VN',
        currency: 'đ'
    },
    {
        name: 'Tiếng Anh',
        lang: LANG_EN,
        code: 'US',
        currency: '$'
    },
]


// Router API
const URLS = {
    PRODUCT_INDEX: '/product',
    PRODUCT_CREATE: '/product/create',
    PRODUCT_UPDATE: '/product/update',
    ARTICLE_CREATE: '/article/create',
    ARTICLE_UPDATE: '/article/update',
    ARTICLE_INDEX: '/article/index'
}
const ROUTE = {
    AJAX: {
        REMOVE_MEDIA: 'default/remove-media'
    },
    SETTING: {
        CREATE: 'setting/create'
    },
    ARCHIVE: {
        INDEX: 'archive/index',
        CREATE: 'archive/create',
        UPDATE: 'archive/update',
        DELETE: 'archive/delete',
        VIEW: 'archive/view',
    },
    MEMBER: {
        INDEX: 'member/index',
        CREATE: 'member/create',
        UPDATE: 'member/update',
        DELETE: 'member/delete',
        VIEW: 'member/view',
    },
    TECH: {
        INDEX: 'technology/index',
        CREATE: 'technology/create',
        UPDATE: 'technology/update',
        DELETE: 'technology/delete',
        VIEW: 'technology/view',
    },
    TESTIMONIAL: {
        INDEX: 'testimonial/index',
        CREATE: 'testimonial/create',
        UPDATE: 'testimonial/update',
        DELETE: 'testimonial/delete',
        VIEW: 'testimonial/view',
    },
    BANNER: {
        INDEX: 'banner/index',
        CREATE: 'banner/create',
        UPDATE: 'banner/update',
        DELETE: 'banner/delete'
    },
    CONTACT: {
        INDEX: 'contact/index',
        CREATE: 'contact/create',
        UPDATE: 'contact/update',
        DELETE: 'contact/delete',
        VIEW: 'contact/view'
    },
    POLL: {
        INDEX: 'poll/index',
    },
    ARTICLE: {
        INDEX: 'article/index',
        CREATE: 'article/create',
        UPDATE: 'article/update',
        DELETE: 'article/delete',
        VIEW: 'article/view'
    },
    ATTRIBUTE: {
        INDEX: 'attribute/index',
        CREATE: 'attribute/create',
        UPDATE: 'attribute/update',
        DELETE: 'attribute/delete',
        VIEW: 'attribute/view'
    },
    VARIANT: {
        INDEX: 'variant/index',
        CREATE: 'variant/create',
        UPDATE: 'variant/update',
        DELETE: 'variant/delete',
        VIEW: 'variant/view'
    },
    PRODUCT: {
        INDEX: 'product/index',
        CREATE: 'product/create',
        UPDATE: 'product/update',
        DELETE: 'product/delete',
        VIEW: 'product/view'
    },
    USER: {
        INDEX: 'user/index',
        CREATE: 'user/create',
        UPDATE: 'user/update',
        DELETE: 'user/delete',
        VIEW: 'user/view'
    },
    UPLOAD: 'api/upload',
    SETTINGS: '/setting/create',
    SETTINGS_INDEX: '/setting/index',
    MENU: {
        SAVE: 'menu/create',
        DETAIL: 'menu/index'
    }
}

let usvnStaticPage = function (categories = []) {
    return [
        {
            title: 'Link tùy chỉnh',
            key: categories.length + 9991,
            type: 'custom',
            value: 'outer_link',
            slug: ''
        },
        {
            title: 'Liên hệ',
            key: categories.length + 9992,
            type: 'page',
            value: 'contact',
            slug: 'contact'
        },
        {
            title: 'Thư viện ảnh',
            key: categories.length + 9993,
            type: 'page',
            value: 'galleries',
            slug: 'galleries'
        },
        {
            title: 'Về chúng tôi',
            key: categories.length + 9994,
            type: 'page',
            value: 'about-us',
            slug: 'about-us'
        }
    ];
}
const vietauStaticPage = (categories = []) => {
    return [
        {
            title: 'Link tùy chỉnh',
            key: categories.length + 9991,
            type: 'custom',
            value: 'outer_link',
            slug: '/'
        },
        {
            title: 'Danh sách hội viên',
            key: categories.length + 9992,
            type: 'page',
            value: 'our-team',
            slug: 'our-team'
        },
        {
            title: 'Cơ cấu tổ chức',
            key: categories.length + 9993,
            type: 'page',
            value: 'organizational-structure',
            slug: 'organizational-structure'
        },
        {
            title: 'Ban cố vấn',
            key: categories.length + 9998,
            type: 'page',
            value: 'advisory-board',
            slug: 'advisory-board'
        },
        {
            title: 'Ban điều hành',
            key: categories.length + 9997,
            type: 'page',
            value: 'executive-board',
            slug: 'executive-board'
        },
        {
            title: 'Liên hệ',
            key: categories.length + 9994,
            type: 'page',
            value: 'contact',
            slug: 'contact'
        },
        {
            title: 'Đối tác',
            key: categories.length + 9996,
            type: 'page',
            value: 'partner',
            slug: 'partner'
        },
    ];
}

const brouchure = (categories = []) => {
    return [
        {
            title: 'Link tùy chỉnh',
            key: categories.length + 9991,
            type: 'custom',
            value: 'outer_link',
            slug: '/'
        },
        {
            title: 'Liên hệ',
            key: categories.length + 9994,
            type: 'page',
            value: 'contact',
            slug: 'contact'
        }
    ];
}
const janamiIcons = [
    {icon: '/images/icon/tim.svg', key: 'tim', title: 'Tím'},
    {icon: '/images/icon/xanh.svg', key: 'xanh', title: 'Xanh'},
    {icon: '/images/icon/do.svg', key: 'do', title: 'Đỏ'},
];
const janami = (categories = []) => {
    return [
        {
            title: 'Link tùy chỉnh',
            key: categories.length + 9991,
            type: 'custom',
            value: 'outer_link',
            slug: '/'
        },
        {
            title: 'Liên hệ',
            key: categories.length + 9994,
            type: 'page',
            value: 'contact',
            slug: 'contact'
        },
        {
            title: 'Sản phẩm',
            key: categories.length + 9995,
            type: 'page',
            value: 'san-pham',
            slug: 'san-pham'
        },
        {
            title: 'Công ty',
            key: categories.length + 9996,
            type: 'page',
            value: 'contact',
            slug: 'contact'
        }
    ];
}

const customPages = (categories = []) => {
    let domain = window.location.hostname;
    domain = domain.replace('admin.', '');
    domain = domain.replace('.', '');
    console.log("domain", domain);
    switch (domain) {
        case 'lucycosmeticcom':
        case 'janamilocal':
        case 'janamivn':
        case 'admin-janamisimpletech.vn':
            return janami(categories);
        default:
            return [];
    }
}
const styleTreeSelect = {
    width: '100%'
}
const dropdownStyleTreeSelect = {
    maxHeight: 400, overflow: 'auto'
}
const getSize = (width = '100%', height = '100%') => {
    return {width, height}
}

const getStyles = style => {
    return typeof style == 'object' ? style : JSON.parse(style);
}


const __ = (style = {}) => {
    return {
        ...style
    }
}
const defaultImage = () => {
    return 'https://pinkladies24-7.com/assets/images/defaultimg.png';
}
const formatNum = (num) => {
    if (!num) {
        return 0;
    }
    return '' + num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}
const dateTime = (time) => {
    return moment.unix(time).format('DD/MM/YYYY');
}

const renderPrice = (product) => {
    const {default_sale_price, default_price, default_sale_type} = product;
    if (parseInt(default_sale_price) > 0) {
        return <span><del><small className={`text-muted`}><b>{formatNum(default_price)}đ</b></small></del> <ins>{formatNum(default_sale_price)}đ</ins></span>;
    }
    return '';
}
const AJAX = axios.create({
    baseURL: '/',
    headers: {
        'Content-Type': 'application/json',
    },
});
const saveOrder = async (data) => {
    try {
        const res = await AJAX.post('create-order', data);
        return res.data;
    } catch (e) {
        message.error(e.message);
    }
}

const getArchive = async (params = {}, link = '/archive-filter') => {
    try {
        const res = await AJAX.get(link, {
            params: {
                sort: '-sort_order',
                show_home: 1,
                expand: `avatar,banner,${params.with ? params.with : null}`,
                "per-page": 6,
                ...params,
            }
        });

        const {data, headers} = res;
        const current = headers['x-pagination-current-page'],
            totalPage = headers['x-pagination-page-count'],
            pageSize = headers['x-pagination-per-page'],
            total = headers['x-pagination-total-count'],
            pagination = {
                total, current, pageSize, totalPage
            };
        return {data, pagination};
    } catch (e) {
        message.error(e.message);
    }
}
const getProduct = async (params = {}, link = '/product-filter') => {
    try {
        const res = await AJAX.get(link, {
            params: {
                sort: '-created_at',
                expand: 'avatar,archives,thumbs,defaultArchive',
                "per-page": 12,
                ...params
            }
        });

        const {data, headers} = res;
        const current = headers['x-pagination-current-page'],
            totalPage = headers['x-pagination-page-count'],
            pageSize = headers['x-pagination-per-page'],
            total = headers['x-pagination-total-count'],
            pagination = {
                total, current, pageSize, totalPage
            };
        return {data, pagination};
    } catch (e) {
        message.error(e.message);
    }
}

const getPost = async (params = {}) => {
    try {
        const res = await AJAX.get('/blog-filter', {
            params: {
                ...params,
                sort: '-created_at',
                expand: 'avatar,archive',
                "per-page": 12
            }
        });


        const current = parseInt(res.headers['x-pagination-current-page']),
            pageSize = parseInt(res.headers['x-pagination-per-page']),
            total = parseInt(res.headers['x-pagination-total-count']);

        return {data: res.data, pagination: {current, pageSize, total}};
    } catch (e) {
        message.error(e.message);
    }
}

const renderPaginate = (pagination, callback) => {
    return (
        <div className="bg-color-01 page-pagination division">
            <div className="container">
                <div className="row">
                    <div className="col-md-12">
                        <nav aria-label="Page navigation">
                            <Pagination
                                className={`pagination justify-content-center`}
                                onChange={(page) => {
                                    callback({page});
                                }}
                                current={pagination?.current}
                                pageSize={pagination?.pageSize}
                                responsive
                                total={pagination?.total}/>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    )
}

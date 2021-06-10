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
    if (default_sale_price > 0) {
        return <span><del><small className={`text-muted`}><b>{formatNum(default_price)}đ</b></small></del> <ins>{formatNum(default_sale_price)}đ</ins></span>;
    }
    return <span>{formatNum(default_price)}đ</span>;
}
const AJAX = axios.create({
    baseURL: '/',
    headers: {
        'Content-Type': 'application/json',
    },
});
const getProduct = async (params = {}) => {
    try {
        const res = await AJAX.get('/product-filter', {
            params: {
                ...params,
                sort: '-created_at',
                expand: 'avatar,archives,thumbs,defaultArchive',
                "per-page": 12
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

const renderPaginate = (pagination, callback) => {
    const {totalPage, pageSize, current} = pagination;
    return (
        <div className="bg-color-01 mt-4 page-pagination division">
            <div className="container">
                <div className="row">
                    <div className="col-md-12">
                        <nav aria-label="Page navigation">
                            <Pagination
                                className={`pagination justify-content-center`}
                                onChange={page => callback({page})}
                                current={current}
                                pageSize={pageSize}
                                responsive
                                total={totalPage}/>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    )
}

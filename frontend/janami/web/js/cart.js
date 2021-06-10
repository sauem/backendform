const getCart = () => {
    const cart = JSON.parse(localStorage.getItem('cart'));
    if (!cart) {
        return {items: []}
    }
    return cart;
}
const calculateTotal = async (items = [], subTotalPrice = 0, totalItems = 0) => {

    items.length > 0 && items.map(item => {
        totalItems += item.quantity;
        if (item.default_sale_price > 0) {
            subTotalPrice += item.default_sale_price * item.quantity;
        } else {
            subTotalPrice += item.default_price * item.quantity;
        }
    });

    await localStorage.setItem('cart', JSON.stringify({
        items,
        totalItems: totalItems,
        subTotal: subTotalPrice,
        total: subTotalPrice
    }));
    ReactDOM.render(<CartMini/>, document.getElementById('cart-mini'));
}
const deleteCartItem = async (product) => {
    try {
        let subTotalPrice = 0;
        let totalItems = 0;
        const cart = getCart();
        let {items} = cart;
        let newItems = items.filter(item => item.id !== product.id);
        await calculateTotal(newItems, subTotalPrice, totalItems);
        message.success('Đã xóa sản phẩm khỏi giỏ hàng!');
    } catch (e) {
        message.error(e.message);
    }
}
const setCart = async (product, qty, changed = false) => {
    try {
        let subTotalPrice = 0;
        let totalItems = 0;
        const cart = getCart();
        let {items} = cart;

        const indexProduct = items.findIndex(item => item.id === product.id);
        if (indexProduct === -1) {
            items.push({
                ...product,
                quantity: qty
            });
        } else {
            if (changed) {
                items[indexProduct].quantity = qty;
            } else {
                items[indexProduct].quantity += qty;
            }
        }
        await calculateTotal(items, subTotalPrice, totalItems);
        if (!changed) {
            message.success(`Thêm sản phẩm vào giỏ hàng thành công!`);
        } else {
            message.success(`Cập nhật sản phẩm giỏ hàng thành công!`);
        }
    } catch (e) {
        message.error(e.message);
    }
}
const CartMini = () => {
    const [cartTotal, setCartTotal] = useState(0);

    useEffect(() => {
        const cart = JSON.parse(localStorage.getItem('cart'));
        if (!cart) {
            setCartTotal(0)
        } else {
            setCartTotal(cart.totalItems);
        }
    });
    return cartTotal;
}
ReactDOM.render(<CartMini/>, document.getElementById('cart-mini'));


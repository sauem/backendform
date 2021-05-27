const getCart = () => {
    const cart = JSON.parse(localStorage.getItem('cart'));
    if (!cart) {
        return {items: []}
    }
    return cart;
}
const setCart = (product, qty) => {
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
        items[indexProduct].quantity += qty;
    }
    items.length > 0 && items.map(item => {
        totalItems += item.quantity;
        if (item.default_sale_price > 0) {
            subTotalPrice += item.default_sale_price * item.quantity;
        } else {
            subTotalPrice += item.default_price * item.quantity;
        }
    });

    localStorage.setItem('cart', JSON.stringify({
        items,
        totalItems: totalItems,
        subTotal: subTotalPrice,
        total: subTotalPrice
    }));
    ReactDOM.render(<CartMini/>, document.getElementById('cart-mini'));
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


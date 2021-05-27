const CartMini = () => {
    const [cartTotal, setCartTotal] = useState(0);

    useEffect(() => {
        const cart = JSON.parse(localStorage.getItem('cart'));
        if (!cart) {
            setCartTotal(0)
        } else {
            setCartTotal(cart.items.length);
        }
        console.log(cartTotal);
    });
    return cartTotal;
}
ReactDOM.render(<CartMini/>, document.getElementById('cart-mini'));
const getPaginate = (header) => {

}

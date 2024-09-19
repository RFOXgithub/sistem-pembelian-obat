function filterProducts() {
    const searchInput = document.getElementById('search-name').value.toLowerCase();
    const priceFilter = document.getElementById('filter-price').value;
    const products = document.querySelectorAll('.product-item');

    products.forEach(product => {
        const productName = product.getAttribute('data-name').toLowerCase();
        const productPrice = parseFloat(product.getAttribute('data-price'));

        const matchesName = productName.includes(searchInput);

        let matchesPrice = true;
        if (priceFilter) {
            const [minPrice, maxPrice] = priceFilter.split('-').map(Number);
            if (maxPrice) {
                matchesPrice = productPrice >= minPrice && productPrice <= maxPrice;
            } else {
                matchesPrice = productPrice >= minPrice;
            }
        }

        if (matchesName && matchesPrice) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}

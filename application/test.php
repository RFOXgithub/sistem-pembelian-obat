



            <!-- Filter Section -->

            <div class="product-list">
                <?php foreach ($product as $row) : ?>
                    <div class="span-card statbox product-item" data-name="<?php echo htmlspecialchars($row['nama_produk']); ?>" data-price="<?php echo htmlspecialchars($row['harga']); ?>" ontablet="span6" ondesktop="span2">
                        <img src="<?php echo htmlspecialchars($row['gambar']); ?>" alt="Gambar Produk" class="span-card-img img-fluid">
                        <div class="footer">
                            <button class="btn btn-primary" onclick="location.href='<?php echo site_url('produk/getProductDetails/' . $row['id_produk']); ?>'">View</button>
                            <button class="btn btn-success">Buy</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script>
    function filterProducts() {
        const searchInput = document.getElementById('search-name').value.toLowerCase();
        const priceFilter = document.getElementById('filter-price').value;
        const products = document.querySelectorAll('.product-item');

        products.forEach(product => {
            const productName = product.getAttribute('data-name').toLowerCase();
            const productPrice = parseFloat(product.getAttribute('data-price'));

            // Filter by name
            const matchesName = productName.includes(searchInput);

            // Filter by price
            let matchesPrice = true;
            if (priceFilter) {
                const [minPrice, maxPrice] = priceFilter.split('-').map(Number);
                if (maxPrice) {
                    matchesPrice = productPrice >= minPrice && productPrice <= maxPrice;
                } else {
                    matchesPrice = productPrice >= minPrice;
                }
            }

            // Show or hide product based on filters
            if (matchesName && matchesPrice) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }
</script>
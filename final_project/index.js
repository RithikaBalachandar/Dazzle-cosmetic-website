function searchProduct() {
    const searchValue = document.querySelector('input[name="search"]').value.toLowerCase();
    const productCards = document.querySelectorAll('[data-product-name]');

    productCards.forEach(card => {
        const productName = card.getAttribute('data-product-name').toLowerCase();
        if (productName.includes(searchValue)) {
            card.style.display = 'block'; // Show matching products
        } else {
            card.style.display = 'none';  // Hide non-matching products
        }
    });

    if (searchValue === '') {
        productCards.forEach(card => {
            card.style.display = 'block'; // Show all products if search field is empty
        });
    }
}


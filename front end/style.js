document.addEventListener("DOMContentLoaded", function() {
    const products = [
        { image: "/assets/d5.jpg", description: "Elegant Dress - ₦10,000" },
        { image: "sweater.jpg", description: "Stylish Sweater - ₦8,000" },
        { image: "jeans.jpg", description: "Comfortable Jeans - ₦7,500" },
        { image: "blouse.jpg", description: "Chic Blouse - ₦6,000" },
        { image: "skirt.jpg", description: "Classic Skirt - ₦5,500" },
        { image: "jacket.jpg", description: "Trendy Jacket - ₦12,000" },
        { image: "scarf.jpg", description: "Designer Scarf - ₦3,500" },
        { image: "hat.jpg", description: "Stylish Hat - ₦4,000" }
    ];

    const featuredProductsContainer = document.getElementById('featured-products');

    products.forEach(product => {
        const productElement = document.createElement('div');
        productElement.classList.add('product');

        const productImage = document.createElement('img');
        productImage.src = product.image;
        productImage.alt = product.description;

        const productDescription = document.createElement('p');
        productDescription.textContent = product.description;

        productElement.appendChild(productImage);
        productElement.appendChild(productDescription);

        featuredProductsContainer.appendChild(productElement);
    });
});
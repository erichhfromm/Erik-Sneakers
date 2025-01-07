// Product Data with Prices
const galleryImages = [
    { 
        url: 'img/01-NEW-BALANCE-FFSSBNEW0-NEWML2002RC-Grey.webp', 
        title: 'New Balance 2002R Grey',
        price: 2499000,
        sku: 'NEWML2002RC',
        sizes: [40, 41, 42, 43, 44]
    },
    { 
        url: 'img/0888-NEWPV1906ERGRE013-1.webp', 
        title: 'New Balance 1906R Black',
        price: 2799000,
        sku: 'NEWPV1906ERGRE',
        sizes: [39, 40, 41, 42, 43, 44]
    },
    { 
        url: 'img/01-NEW-BALANCE-FFSSBNEWA-NEWPH327CBW-Black.webp', 
        title: 'New Balance 327 Black',
        price: 1599000,
        sku: 'NEWPH327CBW',
        sizes: [38, 39, 40, 41, 42, 43]
    },
    { 
        url: 'img/0888-NEWMS237LGG00G10H-1.webp', 
        title: 'New Balance 237 Men Green/White',
        price: 1499000,
        sku: 'NEWBB550WHT',
        sizes: [40, 41, 42, 43, 44]
    },
    { 
        url: 'img/0888-NEWU1080I13OLI10H-1.webp', 
        title: 'New Balance Fresh Foam X 1080v13 Utility Olive',
        price: 3299000,
        sku: 'NEWM992GRY',
        sizes: [41, 42, 43, 44, 45]
    },
    { 
        url: 'img/0888-NEWU1500PGLGRE11H-1.webp', 
        title: 'New Balance Made in UK 1500 Grey',
        price: 3499000,
        sku: 'NEWM990NV6',
        sizes: [40, 41, 42, 43, 44]
    }
];

// Format price to IDR
function formatPrice(price) {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0,
        maximumFractionDigits: 0
    }).format(price);
}

// Load Gallery Images with Product Information
function loadGallery() {
    const galleryContainer = document.getElementById('galleryImages');
    
    galleryImages.forEach(product => {
        const col = document.createElement('div');
        col.className = 'col-md-4 gallery-item mb-4';
        
        col.innerHTML = `
            <div class="card h-100">
                <img src="${product.url}" alt="${product.title}" class="card-img-top img-fluid">
                <div class="card-body">
                    <h5 class="card-title">${product.title}</h5>
                    <p class="card-text price">${formatPrice(product.price)}</p>
                    <div class="size-selector mb-3">
                        <label for="size-${product.sku}">Select Size:</label>
                        <select class="form-select" id="size-${product.sku}">
                            ${product.sizes.map(size => `<option value="${size}">EU ${size}</option>`).join('')}
                        </select>
                    </div>
                    <button class="btn btn-primary buy-now" 
                            data-sku="${product.sku}" 
                            data-title="${product.title}" 
                            data-price="${product.price}">
                        Buy Now
                    </button>
                </div>
            </div>
        `;
        
        galleryContainer.appendChild(col);
    });

    // Add event listeners to Buy Now buttons
    document.querySelectorAll('.buy-now').forEach(button => {
        button.addEventListener('click', handleBuyNow);
    });
}

// Handle Buy Now Click
function handleBuyNow(e) {
    const button = e.target;
    const sku = button.dataset.sku;
    const title = button.dataset.title;
    const price = parseInt(button.dataset.price);
    const sizeSelect = document.getElementById(`size-${sku}`);
    const selectedSize = sizeSelect.value;

    // Create order object
    const order = {
        sku: sku,
        productName: title,
        size: selectedSize,
        price: price,
        timestamp: new Date().toISOString()
    };

    // Save order to localStorage (for demo purposes)
    saveOrder(order);

    // Show confirmation modal
    showOrderConfirmation(order);
}

// Save order to localStorage
function saveOrder(order) {
    const orders = JSON.parse(localStorage.getItem('orders') || '[]');
    orders.push(order);
    localStorage.setItem('orders', JSON.stringify(orders));
}

// Show order confirmation
function showOrderConfirmation(order) {
    const modalHtml = `
        <div class="modal fade" id="orderModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Order Confirmation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Thank you for your order!</p>
                        <div class="order-details">
                            <p><strong>Product:</strong> ${order.productName}</p>
                            <p><strong>Size:</strong> EU ${order.size}</p>
                            <p><strong>Price:</strong> ${formatPrice(order.price)}</p>
                        </div>
                        <p>Our team will contact you shortly for payment and shipping details.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="window.location.href='#contact'">Contact Us</button>
                    </div>
                </div>
            </div>
        </div>
    `;

    // Add modal to document if it doesn't exist
    if (!document.getElementById('orderModal')) {
        document.body.insertAdjacentHTML('beforeend', modalHtml);
    }

    // Show modal
    const orderModal = new bootstrap.Modal(document.getElementById('orderModal'));
    orderModal.show();
}

// Add necessary CSS
const style = document.createElement('style');
style.textContent = `
    .gallery-item .card {
        transition: transform 0.3s ease;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    
    .gallery-item .card:hover {
        transform: translateY(-5px);
    }
    
    .price {
        font-size: 1.25rem;
        font-weight: bold;
        color: #2c3e50;
    }
    
    .buy-now {
        width: 100%;
    }
    
    .order-details {
        background: #f8f9fa;
        padding: 1rem;
        border-radius: 0.5rem;
        margin: 1rem 0;
    }
`;
document.head.appendChild(style);

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    loadGallery();
});
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS - Lucky Star Coffee Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: #F5F5F0;
            min-height: 100vh;
        }
        
        /* Header */
        .header {
            background: linear-gradient(135deg, #2C1810, #8B4513);
            color: white;
            padding: 16px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            font-weight: 600;
            text-decoration: none;
            color: white;
        }
        
        .logo-icon {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
        
        .nav-menu {
            display: flex;
            gap: 8px;
        }
        
        .nav-item {
            padding: 8px 16px;
            border-radius: 8px;
            text-decoration: none;
            color: rgba(255,255,255,0.9);
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .nav-item:hover, .nav-item.active {
            background: rgba(255,255,255,0.15);
            color: white;
        }
        
        .user-menu {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .logout-btn {
            background: rgba(255,255,255,0.2);
            border: none;
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .logout-btn:hover {
            background: rgba(255,255,255,0.3);
        }
        
        /* Main Content */
        .main-content {
            padding: 24px;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .page-title {
            font-family: 'Poppins', sans-serif;
            font-size: 28px;
            color: #2C1810;
            margin-bottom: 24px;
        }
        
        /* POS Layout */
        .pos-container {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 24px;
            min-height: calc(100vh - 200px);
        }
        
        /* Products Section */
        .products-section {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        
        .search-bar {
            display: flex;
            gap: 12px;
            margin-bottom: 20px;
        }
        
        .search-input {
            flex: 1;
            height: 48px;
            border: 2px solid #E8E0D5;
            border-radius: 10px;
            padding: 0 16px;
            font-size: 16px;
            font-family: 'Inter', sans-serif;
        }
        
        .search-input:focus {
            outline: none;
            border-color: #8B4513;
        }
        
        .category-tabs {
            display: flex;
            gap: 8px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .category-tab {
            padding: 10px 20px;
            border-radius: 8px;
            background: #F5F5F0;
            border: none;
            cursor: pointer;
            font-weight: 500;
            color: #6F4E37;
            transition: all 0.3s ease;
        }
        
        .category-tab:hover, .category-tab.active {
            background: #8B4513;
            color: white;
        }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
            gap: 16px;
        }
        
        .product-card {
            background: #FAF0E6;
            border-radius: 12px;
            padding: 16px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .product-card:hover {
            border-color: #8B4513;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(139,69,19,0.15);
        }
        
        .product-icon {
            font-size: 32px;
            margin-bottom: 8px;
        }
        
        .product-name {
            font-weight: 600;
            color: #2C1810;
            margin-bottom: 4px;
            font-size: 14px;
        }
        
        .product-price {
            color: #8B4513;
            font-weight: 600;
            font-size: 16px;
        }
        
        /* Cart Section */
        .cart-section {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            display: flex;
            flex-direction: column;
        }
        
        .cart-header {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            color: #2C1810;
            margin-bottom: 16px;
            padding-bottom: 16px;
            border-bottom: 2px solid #E8E0D5;
        }
        
        .cart-items {
            flex: 1;
            overflow-y: auto;
            margin-bottom: 16px;
        }
        
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
            background: #FAF0E6;
            border-radius: 8px;
            margin-bottom: 8px;
        }
        
        .cart-item-info {
            flex: 1;
        }
        
        .cart-item-name {
            font-weight: 600;
            color: #2C1810;
            margin-bottom: 4px;
        }
        
        .cart-item-qty {
            font-size: 13px;
            color: #6F4E37;
        }
        
        .cart-item-price {
            font-weight: 600;
            color: #8B4513;
            font-size: 16px;
        }
        
        .remove-btn {
            background: none;
            border: none;
            color: #DC2626;
            cursor: pointer;
            font-size: 18px;
            margin-left: 8px;
        }
        
        .cart-summary {
            border-top: 2px solid #E8E0D5;
            padding-top: 16px;
        }
        
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            color: #6F4E37;
        }
        
        .summary-row.total {
            font-size: 20px;
            font-weight: 700;
            color: #2C1810;
            border-top: 2px solid #E8E0D5;
            padding-top: 12px;
            margin-top: 12px;
        }
        
        .payment-methods {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
            margin-bottom: 16px;
        }
        
        .payment-btn {
            padding: 12px;
            border-radius: 8px;
            border: 2px solid #E8E0D5;
            background: white;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .payment-btn:hover, .payment-btn.active {
            border-color: #8B4513;
            background: rgba(139,69,19,0.1);
        }
        
        .checkout-btn {
            width: 100%;
            height: 56px;
            background: linear-gradient(135deg, #8B4513, #D2691E);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 12px;
        }
        
        .checkout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(139,69,19,0.35);
        }
        
        .cart-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }
        
        .action-btn-secondary {
            padding: 12px;
            border-radius: 8px;
            border: 2px solid #E8E0D5;
            background: white;
            cursor: pointer;
            font-weight: 500;
            color: #6F4E37;
            transition: all 0.3s ease;
        }
        
        .action-btn-secondary:hover {
            border-color: #8B4513;
            color: #8B4513;
        }
        
        .empty-cart {
            text-align: center;
            padding: 40px;
            color: #6F4E37;
        }
        
        .empty-cart-icon {
            font-size: 48px;
            margin-bottom: 16px;
        }
        
        @media (max-width: 968px) {
            .pos-container {
                grid-template-columns: 1fr;
            }
            
            .header {
                flex-direction: column;
                gap: 16px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <a href="/dashboard" class="logo">
            <div class="logo-icon">☕</div>
            <span>Lucky Star Coffee Shop</span>
        </a>
        
        <nav class="nav-menu">
            <a href="/dashboard" class="nav-item">Dashboard</a>
            <a href="/pos" class="nav-item active">POS</a>
            <a href="/inventory" class="nav-item">Inventory</a>
            <a href="/reports" class="nav-item">Reports</a>
            <a href="/users" class="nav-item">Users</a>
        </nav>
        
        <div class="user-menu">
            <span>Welcome, Admin</span>
            <button class="logout-btn" onclick="logout()">Logout</button>
        </div>
    </header>
    
    <!-- Main Content -->
    <main class="main-content">
        <h1 class="page-title">Point of Sale</h1>
        
        <div class="pos-container">
            <!-- Products Section -->
            <div class="products-section">
                <div class="search-bar">
                    <input type="text" class="search-input" placeholder="Search products..." id="searchInput">
                </div>
                
                <div class="category-tabs">
                    <button class="category-tab active" onclick="filterCategory('all')">All</button>
                    <button class="category-tab" onclick="filterCategory('coffee')">Coffee</button>
                    <button class="category-tab" onclick="filterCategory('pastry')">Pastry</button>
                    <button class="category-tab" onclick="filterCategory('beverage')">Beverage</button>
                </div>
                
                <div class="products-grid" id="productsGrid">
                    <div class="product-card" onclick="addToCart('Espresso', 195, 'coffee')">
                        <div class="product-icon">☕</div>
                        <div class="product-name">Espresso</div>
                        <div class="product-price">₱195</div>
                    </div>
                    
                    <div class="product-card" onclick="addToCart('Cappuccino', 250, 'coffee')">
                        <div class="product-icon">🥛</div>
                        <div class="product-name">Cappuccino</div>
                        <div class="product-price">₱250</div>
                    </div>
                    
                    <div class="product-card" onclick="addToCart('Latte', 220, 'coffee')">
                        <div class="product-icon">🥤</div>
                        <div class="product-name">Latte</div>
                        <div class="product-price">₱220</div>
                    </div>
                    
                    <div class="product-card" onclick="addToCart('Croissant', 195, 'pastry')">
                        <div class="product-icon">🥐</div>
                        <div class="product-name">Croissant</div>
                        <div class="product-price">₱195</div>
                    </div>
                    
                    <div class="product-card" onclick="addToCart('Muffin', 220, 'pastry')">
                        <div class="product-icon">🧁</div>
                        <div class="product-name">Muffin</div>
                        <div class="product-price">₱220</div>
                    </div>
                    
                    <div class="product-card" onclick="addToCart('Donut', 140, 'pastry')">
                        <div class="product-icon">🍩</div>
                        <div class="product-name">Donut</div>
                        <div class="product-price">₱140</div>
                    </div>
                    
                    <div class="product-card" onclick="addToCart('Iced Tea', 165, 'beverage')">
                        <div class="product-icon">🧊</div>
                        <div class="product-name">Iced Tea</div>
                        <div class="product-price">₱165</div>
                    </div>
                    
                    <div class="product-card" onclick="addToCart('Smoothie', 305, 'beverage')">
                        <div class="product-icon">🍹</div>
                        <div class="product-name">Smoothie</div>
                        <div class="product-price">₱305</div>
                    </div>
                    
                    <div class="product-card" onclick="addToCart('Hot Chocolate', 195, 'beverage')">
                        <div class="product-icon">🍫</div>
                        <div class="product-name">Hot Chocolate</div>
                        <div class="product-price">₱195</div>
                    </div>
                </div>
            </div>
            
            <!-- Cart Section -->
            <div class="cart-section">
                <div class="cart-header">
                    Current Order
                </div>
                
                <div class="cart-items" id="cartItems">
                    <div class="empty-cart">
                        <div class="empty-cart-icon">🛒</div>
                        <p>Your cart is empty</p>
                        <p style="font-size: 13px; margin-top: 8px;">Click on products to add them</p>
                    </div>
                </div>
                
                <div class="cart-summary" id="cartSummary" style="display: none;">
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span id="subtotal">₱0.00</span>
                    </div>
                    <div class="summary-row">
                        <span>Tax (10%)</span>
                        <span id="tax">₱0.00</span>
                    </div>
                    <div class="summary-row total">
                        <span>Total</span>
                        <span id="total">₱0.00</span>
                    </div>
                    
                    <div class="payment-methods">
                        <button class="payment-btn active" onclick="selectPayment('cash')">💵 Cash</button>
                        <button class="payment-btn" onclick="selectPayment('card')">💳 Card</button>
                        <button class="payment-btn" onclick="selectPayment('digital')">📱 QR</button>
                    </div>
                    
                    <button class="checkout-btn" onclick="checkout()">Process Payment</button>
                    
                    <div class="cart-actions">
                        <button class="action-btn-secondary" onclick="clearCart()">Clear</button>
                        <button class="action-btn-secondary" onclick="holdOrder()">Hold</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <script>
        let cart = [];
        let paymentMethod = 'cash';
        
        function addToCart(name, price, category) {
            const existingItem = cart.find(item => item.name === name);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ name, price, quantity: 1, category });
            }
            
            updateCartDisplay();
        }
        
        function removeFromCart(index) {
            cart.splice(index, 1);
            updateCartDisplay();
        }
        
        function clearCart() {
            cart = [];
            updateCartDisplay();
        }
        
        function holdOrder() {
            if (cart.length === 0) {
                alert('Cart is empty!');
                return;
            }
            alert('Order held for later!');
            clearCart();
        }
        
        function updateCartDisplay() {
            const cartItems = document.getElementById('cartItems');
            const cartSummary = document.getElementById('cartSummary');
            
            if (cart.length === 0) {
                cartItems.innerHTML = `
                    <div class="empty-cart">
                        <div class="empty-cart-icon">🛒</div>
                        <p>Your cart is empty</p>
                        <p style="font-size: 13px; margin-top: 8px;">Click on products to add them</p>
                    </div>
                `;
                cartSummary.style.display = 'none';
                return;
            }
            
            cartSummary.style.display = 'block';
            
            let html = '';
            let subtotal = 0;
            
            cart.forEach((item, index) => {
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;
                html += `
                    <div class="cart-item">
                        <div class="cart-item-info">
                            <div class="cart-item-name">${item.name}</div>
                            <div class="cart-item-qty">₱${item.price} × ${item.quantity}</div>
                        </div>
                        <div class="cart-item-price">₱${itemTotal}</div>
                        <button class="remove-btn" onclick="removeFromCart(${index})">×</button>
                    </div>
                `;
            });
            
            cartItems.innerHTML = html;
            
            const tax = subtotal * 0.10;
            const total = subtotal + tax;
            
            document.getElementById('subtotal').textContent = `₱${subtotal}`;
            document.getElementById('tax').textContent = `₱${tax}`;
            document.getElementById('total').textContent = `₱${total}`;
        }
        
        function selectPayment(method) {
            paymentMethod = method;
            document.querySelectorAll('.payment-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            event.target.classList.add('active');
        }
        
        function checkout() {
            if (cart.length === 0) {
                alert('Cart is empty!');
                return;
            }
            
            const total = document.getElementById('total').textContent;
            alert(`Payment processed!\nTotal: ${total}\nMethod: ${paymentMethod.toUpperCase()}\n\nThank you for your order! ☕`);
            clearCart();
        }
        
        function filterCategory(category) {
            document.querySelectorAll('.category-tab').forEach(tab => {
                tab.classList.remove('active');
            });
            event.target.classList.add('active');
            
            // In a real app, this would filter products
            console.log('Filter by:', category);
        }
        
        function logout() {
            window.location.href = '/';
        }
        
        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const products = document.querySelectorAll('.product-card');
            
            products.forEach(product => {
                const name = product.querySelector('.product-name').textContent.toLowerCase();
                if (name.includes(searchTerm)) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>

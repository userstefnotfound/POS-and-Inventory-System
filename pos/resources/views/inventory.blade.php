<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory - Lucky Star Coffee Shop</title>
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
        
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }
        
        .page-title {
            font-family: 'Poppins', sans-serif;
            font-size: 28px;
            color: #2C1810;
        }
        
        .header-actions {
            display: flex;
            gap: 12px;
        }
        
        .btn-primary {
            height: 48px;
            padding: 0 24px;
            background: linear-gradient(135deg, #8B4513, #D2691E);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(139,69,19,0.35);
        }
        
        .btn-secondary {
            height: 48px;
            padding: 0 20px;
            background: white;
            color: #6F4E37;
            border: 2px solid #E8E0D5;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            border-color: #8B4513;
            color: #8B4513;
        }
        
        /* Filter Bar */
        .filter-bar {
            background: white;
            border-radius: 12px;
            padding: 16px 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            align-items: center;
        }
        
        .filter-select, .filter-input {
            height: 44px;
            padding: 0 16px;
            border: 2px solid #E8E0D5;
            border-radius: 8px;
            font-size: 14px;
            font-family: 'Inter', sans-serif;
            background: white;
        }
        
        .filter-input {
            flex: 1;
            min-width: 200px;
        }
        
        .filter-select:focus, .filter-input:focus {
            outline: none;
            border-color: #8B4513;
        }
        
        /* Table */
        .table-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            overflow: hidden;
        }
        
        .data-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .data-table th {
            background: #FAF0E6;
            padding: 16px;
            text-align: left;
            font-weight: 600;
            color: #2C1810;
            font-size: 14px;
            border-bottom: 2px solid #E8E0D5;
        }
        
        .data-table td {
            padding: 16px;
            border-bottom: 1px solid #F0E6DC;
            color: #4A4A4A;
            font-size: 14px;
        }
        
        .data-table tr:hover {
            background: rgba(139,69,19,0.03);
        }
        
        .product-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .product-img {
            width: 40px;
            height: 40px;
            background: #FAF0E6;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
        
        .product-name {
            font-weight: 600;
            color: #2C1810;
        }
        
        .product-sku {
            font-size: 12px;
            color: #6F4E37;
        }
        
        /* Status Badges */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
        }
        
        .status-in-stock {
            background: rgba(22, 163, 74, 0.1);
            color: #16A34A;
        }
        
        .status-low {
            background: rgba(245, 158, 11, 0.15);
            color: #D97706;
            border: 1px solid #F59E0B;
        }
        
        .status-out {
            background: rgba(220, 38, 38, 0.1);
            color: #DC2626;
            border: 1px solid #DC2626;
        }
        
        .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }
        
        .status-in-stock .status-dot {
            background: #16A34A;
        }
        
        .status-low .status-dot {
            background: #F59E0B;
        }
        
        .status-out .status-dot {
            background: #DC2626;
        }
        
        /* Actions */
        .action-btns {
            display: flex;
            gap: 8px;
        }
        
        .action-btn {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            border: none;
            background: #F5F5F0;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            font-size: 16px;
        }
        
        .action-btn:hover {
            background: #8B4513;
            color: white;
        }
        
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 20px;
            border-top: 1px solid #E8E0D5;
        }
        
        .page-info {
            color: #6F4E37;
            font-size: 14px;
        }
        
        .page-controls {
            display: flex;
            gap: 8px;
        }
        
        .page-btn {
            padding: 8px 12px;
            border-radius: 6px;
            border: 1px solid #E8E0D5;
            background: white;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .page-btn:hover, .page-btn.active {
            background: #8B4513;
            color: white;
            border-color: #8B4513;
        }
        
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                gap: 16px;
            }
            
            .page-header {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
            }
            
            .data-table {
                font-size: 13px;
            }
            
            .data-table th, .data-table td {
                padding: 12px 8px;
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
            <a href="/pos" class="nav-item">POS</a>
            <a href="/inventory" class="nav-item active">Inventory</a>
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
        <div class="page-header">
            <h1 class="page-title">Inventory Management</h1>
            <div class="header-actions">
                <button class="btn-secondary" onclick="importData()">📥 Import</button>
                <button class="btn-secondary" onclick="exportData()">📤 Export</button>
                <button class="btn-primary" onclick="addProduct()">+ Add Product</button>
            </div>
        </div>
        
        <!-- Filter Bar -->
        <div class="filter-bar">
            <select class="filter-select" id="categoryFilter" onchange="filterTable()">
                <option value="">All Categories</option>
                <option value="coffee">Coffee</option>
                <option value="pastry">Pastry</option>
                <option value="beverage">Beverage</option>
            </select>
            
            <select class="filter-select" id="stockFilter" onchange="filterTable()">
                <option value="">All Stock Status</option>
                <option value="in-stock">In Stock</option>
                <option value="low">Low Stock</option>
                <option value="out">Out of Stock</option>
            </select>
            
            <input type="text" class="filter-input" placeholder="Search products..." id="searchInput" onkeyup="filterTable()">
        </div>
        
        <!-- Table -->
        <div class="table-container">
            <table class="data-table" id="inventoryTable">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Category</th>
                        <th>SKU</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-category="coffee" data-status="in-stock">
                        <td>
                            <div class="product-info">
                                <div class="product-img">☕</div>
                                <div>
                                    <div class="product-name">Espresso Beans</div>
                                    <div class="product-sku">1kg bag</div>
                                </div>
                            </div>
                        </td>
                        <td>Coffee</td>
                        <td>CF-001</td>
                        <td>150 units</td>
                        <td>₱1,449</td>
                        <td><span class="status-badge status-in-stock"><span class="status-dot"></span>In Stock</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn" onclick="editProduct('Espresso Beans')" title="Edit">✏️</button>
                                <button class="action-btn" onclick="adjustStock('Espresso Beans')" title="Adjust Stock">📦</button>
                                <button class="action-btn" onclick="deleteProduct('Espresso Beans')" title="Delete">🗑️</button>
                            </div>
                        </td>
                    </tr>
                    
                    <tr data-category="coffee" data-status="in-stock">
                        <td>
                            <div class="product-info">
                                <div class="product-img">🥛</div>
                                <div>
                                    <div class="product-name">Ground Coffee</div>
                                    <div class="product-sku">500g bag</div>
                                </div>
                            </div>
                        </td>
                        <td>Coffee</td>
                        <td>CF-002</td>
                        <td>89 units</td>
                        <td>₱1,018</td>
                        <td><span class="status-badge status-in-stock"><span class="status-dot"></span>In Stock</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn" onclick="editProduct('Ground Coffee')">✏️</button>
                                <button class="action-btn" onclick="adjustStock('Ground Coffee')">📦</button>
                                <button class="action-btn" onclick="deleteProduct('Ground Coffee')">🗑️</button>
                            </div>
                        </td>
                    </tr>
                    
                    <tr data-category="pastry" data-status="low">
                        <td>
                            <div class="product-info">
                                <div class="product-img">🥐</div>
                                <div>
                                    <div class="product-name">Croissant</div>
                                    <div class="product-sku">Fresh baked</div>
                                </div>
                            </div>
                        </td>
                        <td>Pastry</td>
                        <td>PA-001</td>
                        <td>25 units</td>
                        <td>₱195</td>
                        <td><span class="status-badge status-low"><span class="status-dot"></span>Low Stock</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn" onclick="editProduct('Croissant')">✏️</button>
                                <button class="action-btn" onclick="adjustStock('Croissant')">📦</button>
                                <button class="action-btn" onclick="deleteProduct('Croissant')">🗑️</button>
                            </div>
                        </td>
                    </tr>
                    
                    <tr data-category="pastry" data-status="out">
                        <td>
                            <div class="product-info">
                                <div class="product-img">🧁</div>
                                <div>
                                    <div class="product-name">Blueberry Muffin</div>
                                    <div class="product-sku">Fresh baked</div>
                                </div>
                            </div>
                        </td>
                        <td>Pastry</td>
                        <td>PA-002</td>
                        <td>0 units</td>
                        <td>₱220</td>
                        <td><span class="status-badge status-out"><span class="status-dot"></span>Out of Stock</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn" onclick="editProduct('Blueberry Muffin')">✏️</button>
                                <button class="action-btn" onclick="adjustStock('Blueberry Muffin')">📦</button>
                                <button class="action-btn" onclick="deleteProduct('Blueberry Muffin')">🗑️</button>
                            </div>
                        </td>
                    </tr>
                    
                    <tr data-category="beverage" data-status="in-stock">
                        <td>
                            <div class="product-info">
                                <div class="product-img">🧊</div>
                                <div>
                                    <div class="product-name">Iced Tea</div>
                                    <div class="product-sku">500ml bottle</div>
                                </div>
                            </div>
                        </td>
                        <td>Beverage</td>
                        <td>BE-001</td>
                        <td>200 units</td>
                        <td>₱165</td>
                        <td><span class="status-badge status-in-stock"><span class="status-dot"></span>In Stock</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn" onclick="editProduct('Iced Tea')">✏️</button>
                                <button class="action-btn" onclick="adjustStock('Iced Tea')">📦</button>
                                <button class="action-btn" onclick="deleteProduct('Iced Tea')">🗑️</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <div class="pagination">
                <div class="page-info">Showing 1-5 of 127 products</div>
                <div class="page-controls">
                    <button class="page-btn" onclick="changePage(-1)">← Previous</button>
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <span>...</span>
                    <button class="page-btn">13</button>
                    <button class="page-btn" onclick="changePage(1)">Next →</button>
                </div>
            </div>
        </div>
    </main>
    
    <script>
        function logout() {
            window.location.href = '/';
        }
        
        function addProduct() {
            alert('Add Product modal would open here');
        }
        
        function editProduct(name) {
            alert('Edit product: ' + name);
        }
        
        function adjustStock(name) {
            const newStock = prompt('Enter new stock quantity for ' + name + ':');
            if (newStock !== null) {
                alert('Stock updated for ' + name + ' to ' + newStock + ' units');
            }
        }
        
        function deleteProduct(name) {
            if (confirm('Are you sure you want to delete ' + name + '?')) {
                alert(name + ' deleted');
            }
        }
        
        function importData() {
            alert('Import CSV/Excel file dialog would open here');
        }
        
        function exportData() {
            alert('Exporting inventory data...');
        }
        
        function filterTable() {
            const category = document.getElementById('categoryFilter').value;
            const status = document.getElementById('stockFilter').value;
            const search = document.getElementById('searchInput').value.toLowerCase();
            
            const rows = document.querySelectorAll('#inventoryTable tbody tr');
            
            rows.forEach(row => {
                const rowCategory = row.getAttribute('data-category');
                const rowStatus = row.getAttribute('data-status');
                const rowText = row.textContent.toLowerCase();
                
                const matchCategory = !category || rowCategory === category;
                const matchStatus = !status || rowStatus === status;
                const matchSearch = !search || rowText.includes(search);
                
                if (matchCategory && matchStatus && matchSearch) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
        
        function changePage(direction) {
            console.log('Change page:', direction);
        }
    </script>
</body>
</html>

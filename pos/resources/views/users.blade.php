<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users - Lucky Star Coffee Shop</title>
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
        
        /* User Cards Grid */
        .users-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 24px;
        }
        
        .user-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            transition: all 0.3s ease;
        }
        
        .user-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
        }
        
        .user-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 16px;
        }
        
        .user-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #8B4513, #D2691E);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
        }
        
        .user-info h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            color: #2C1810;
            margin-bottom: 4px;
        }
        
        .user-role {
            font-size: 13px;
            color: #6F4E37;
        }
        
        .role-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            margin-top: 8px;
        }
        
        .role-owner {
            background: rgba(139, 69, 19, 0.15);
            color: #8B4513;
        }
        
        .role-admin {
            background: rgba(3, 105, 161, 0.15);
            color: #0369A1;
        }
        
        .role-cashier {
            background: rgba(22, 163, 74, 0.15);
            color: #16A34A;
        }
        
        .role-inventory {
            background: rgba(245, 158, 11, 0.15);
            color: #D97706;
        }
        
        .user-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            padding-top: 16px;
            border-top: 1px solid #E8E0D5;
            margin-bottom: 16px;
        }
        
        .user-stat {
            text-align: center;
        }
        
        .user-stat-value {
            font-size: 20px;
            font-weight: 700;
            color: #8B4513;
        }
        
        .user-stat-label {
            font-size: 12px;
            color: #6F4E37;
        }
        
        .user-actions {
            display: flex;
            gap: 8px;
        }
        
        .btn-icon {
            flex: 1;
            height: 40px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .btn-edit {
            background: #F5F5F0;
            color: #6F4E37;
        }
        
        .btn-edit:hover {
            background: #8B4513;
            color: white;
        }
        
        .btn-delete {
            background: #FEF2F2;
            color: #DC2626;
        }
        
        .btn-delete:hover {
            background: #DC2626;
            color: white;
        }
        
        /* Roles Section */
        .roles-section {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        
        .section-title {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            color: #2C1810;
            margin-bottom: 20px;
        }
        
        .roles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 16px;
        }
        
        .role-card {
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #E8E0D5;
        }
        
        .role-card h4 {
            font-size: 16px;
            color: #2C1810;
            margin-bottom: 12px;
        }
        
        .role-permissions {
            list-style: none;
        }
        
        .role-permissions li {
            font-size: 13px;
            color: #6F4E37;
            padding: 4px 0;
            padding-left: 20px;
            position: relative;
        }
        
        .role-permissions li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #16A34A;
            font-weight: bold;
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
            
            .users-grid {
                grid-template-columns: 1fr;
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
            <a href="/inventory" class="nav-item">Inventory</a>
            <a href="/reports" class="nav-item">Reports</a>
            <a href="/users" class="nav-item active">Users</a>
        </nav>
        
        <div class="user-menu">
            <span>Welcome, Admin</span>
            <button class="logout-btn" onclick="logout()">Logout</button>
        </div>
    </header>
    
    <!-- Main Content -->
    <main class="main-content">
        <div class="page-header">
            <h1 class="page-title">User Management</h1>
            <button class="btn-primary" onclick="addUser()">+ Add New User</button>
        </div>
        
        <!-- Users Grid -->
        <div class="users-grid">
            <div class="user-card">
                <div class="user-header">
                    <div class="user-avatar">👑</div>
                    <div class="user-info">
                        <h3>John Smith</h3>
                        <div class="user-role">john@luckystar.com</div>
                        <span class="role-badge role-owner">Owner</span>
                    </div>
                </div>
                <div class="user-stats">
                    <div class="user-stat">
                        <div class="user-stat-value">2,450</div>
                        <div class="user-stat-label">Sales Made</div>
                    </div>
                    <div class="user-stat">
                        <div class="user-stat-value">$45K</div>
                        <div class="user-stat-label">Revenue</div>
                    </div>
                </div>
                <div class="user-actions">
                    <button class="btn-icon btn-edit" onclick="editUser('John Smith')">Edit</button>
                    <button class="btn-icon btn-delete" onclick="deleteUser('John Smith')">Delete</button>
                </div>
            </div>
            
            <div class="user-card">
                <div class="user-header">
                    <div class="user-avatar">🛡️</div>
                    <div class="user-info">
                        <h3>Sarah Johnson</h3>
                        <div class="user-role">sarah@luckystar.com</div>
                        <span class="role-badge role-admin">Admin</span>
                    </div>
                </div>
                <div class="user-stats">
                    <div class="user-stat">
                        <div class="user-stat-value">1,890</div>
                        <div class="user-stat-label">Sales Made</div>
                    </div>
                    <div class="user-stat">
                        <div class="user-stat-value">$32K</div>
                        <div class="user-stat-label">Revenue</div>
                    </div>
                </div>
                <div class="user-actions">
                    <button class="btn-icon btn-edit" onclick="editUser('Sarah Johnson')">Edit</button>
                    <button class="btn-icon btn-delete" onclick="deleteUser('Sarah Johnson')">Delete</button>
                </div>
            </div>
            
            <div class="user-card">
                <div class="user-header">
                    <div class="user-avatar">💰</div>
                    <div class="user-info">
                        <h3>Mike Davis</h3>
                        <div class="user-role">mike@luckystar.com</div>
                        <span class="role-badge role-cashier">Cashier</span>
                    </div>
                </div>
                <div class="user-stats">
                    <div class="user-stat">
                        <div class="user-stat-value">3,120</div>
                        <div class="user-stat-label">Sales Made</div>
                    </div>
                    <div class="user-stat">
                        <div class="user-stat-value">$48K</div>
                        <div class="user-stat-label">Revenue</div>
                    </div>
                </div>
                <div class="user-actions">
                    <button class="btn-icon btn-edit" onclick="editUser('Mike Davis')">Edit</button>
                    <button class="btn-icon btn-delete" onclick="deleteUser('Mike Davis')">Delete</button>
                </div>
            </div>
            
            <div class="user-card">
                <div class="user-header">
                    <div class="user-avatar">📦</div>
                    <div class="user-info">
                        <h3>Emily Brown</h3>
                        <div class="user-role">emily@luckystar.com</div>
                        <span class="role-badge role-inventory">Inventory Clerk</span>
                    </div>
                </div>
                <div class="user-stats">
                    <div class="user-stat">
                        <div class="user-stat-value">156</div>
                        <div class="user-stat-label">Stock Updates</div>
                    </div>
                    <div class="user-stat">
                        <div class="user-stat-value">45</div>
                        <div class="user-stat-label">Orders Placed</div>
                    </div>
                </div>
                <div class="user-actions">
                    <button class="btn-icon btn-edit" onclick="editUser('Emily Brown')">Edit</button>
                    <button class="btn-icon btn-delete" onclick="deleteUser('Emily Brown')">Delete</button>
                </div>
            </div>
        </div>
        
        <!-- Roles Section -->
        <div class="roles-section">
            <h2 class="section-title">Role Permissions</h2>
            <div class="roles-grid">
                <div class="role-card">
                    <h4>👑 Owner</h4>
                    <ul class="role-permissions">
                        <li>Full system access</li>
                        <li>Manage all users</li>
                        <li>View all reports</li>
                        <li>System settings</li>
                        <li>Financial controls</li>
                    </ul>
                </div>
                
                <div class="role-card">
                    <h4>🛡️ Admin</h4>
                    <ul class="role-permissions">
                        <li>POS Sales</li>
                        <li>Manage inventory</li>
                        <li>View reports</li>
                        <li>Manage staff</li>
                        <li>Price modifications</li>
                    </ul>
                </div>
                
                <div class="role-card">
                    <h4>💰 Cashier</h4>
                    <ul class="role-permissions">
                        <li>POS Sales only</li>
                        <li>Process orders</li>
                        <li>View own sales</li>
                        <li>Issue receipts</li>
                        <li>Hold orders</li>
                    </ul>
                </div>
                
                <div class="role-card">
                    <h4>📦 Inventory Clerk</h4>
                    <ul class="role-permissions">
                        <li>Manage stock levels</li>
                        <li>Purchase orders</li>
                        <li>Supplier management</li>
                        <li>Stock adjustments</li>
                        <li>Inventory reports</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    
    <script>
        function logout() {
            window.location.href = '/';
        }
        
        function addUser() {
            alert('Add User form would open here');
        }
        
        function editUser(name) {
            alert('Edit user: ' + name);
        }
        
        function deleteUser(name) {
            if (confirm('Are you sure you want to delete ' + name + '?')) {
                alert(name + ' deleted');
            }
        }
    </script>
</body>
</html>

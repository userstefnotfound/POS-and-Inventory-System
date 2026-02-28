<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Lucky Star Coffee Shop</title>
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
        
        /* Welcome Section */
        .welcome-section {
            background: white;
            border-radius: 16px;
            padding: 32px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        
        .welcome-title {
            font-family: 'Poppins', sans-serif;
            font-size: 28px;
            color: #2C1810;
            margin-bottom: 8px;
        }
        
        .welcome-subtitle {
            color: #6F4E37;
            font-size: 16px;
        }
        
        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 24px;
        }
        
        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            border-left: 4px solid #8B4513;
        }
        
        .stat-label {
            font-size: 14px;
            color: #6F4E37;
            margin-bottom: 8px;
        }
        
        .stat-value {
            font-family: 'Poppins', sans-serif;
            font-size: 32px;
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 8px;
        }
        
        .stat-change {
            font-size: 14px;
            color: #4CAF50;
            font-weight: 500;
        }
        
        .stat-change.negative {
            color: #F44336;
        }
        
        /* Quick Actions */
        .quick-actions {
            background: white;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        
        .section-title {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            color: #2C1810;
            margin-bottom: 16px;
        }
        
        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
        }
        
        .action-btn {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 20px;
            background: #FAF0E6;
            border: 2px solid transparent;
            border-radius: 12px;
            text-decoration: none;
            color: #2C1810;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .action-btn:hover {
            border-color: #8B4513;
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(139,69,19,0.15);
        }
        
        .action-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #8B4513, #D2691E);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
        
        /* Recent Activity */
        .activity-section {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        
        .activity-list {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        
        .activity-item {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 16px;
            background: #FAF0E6;
            border-radius: 8px;
        }
        
        .activity-icon {
            width: 40px;
            height: 40px;
            background: #8B4513;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        
        .activity-details {
            flex: 1;
        }
        
        .activity-title {
            font-weight: 600;
            color: #2C1810;
            margin-bottom: 4px;
        }
        
        .activity-time {
            font-size: 13px;
            color: #6F4E37;
        }
        
        .activity-amount {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #8B4513;
            font-size: 18px;
        }
        
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                gap: 16px;
                text-align: center;
            }
            
            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .main-content {
                padding: 16px;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <div class="logo-icon">☕</div>
            <span>Lucky Star Coffee Shop</span>
        </div>
        
        <nav class="nav-menu">
            <a href="/dashboard" class="nav-item active">Dashboard</a>
            <a href="/pos" class="nav-item">POS</a>
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
        <!-- Welcome Section -->
        <div class="welcome-section">
            <h1 class="welcome-title">Welcome back! ☕</h1>
            <p class="welcome-subtitle">Here's what's happening at Lucky Star Coffee Shop today.</p>
        </div>
        
        <!-- Stats Grid -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-label">Today's Sales</div>
                <div class="stat-value">$2,450</div>
                <div class="stat-change">↑ 12% vs yesterday</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-label">Orders</div>
                <div class="stat-value">156</div>
                <div class="stat-change">↑ 8% vs yesterday</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-label">Average Order</div>
                <div class="stat-value">$15.70</div>
                <div class="stat-change">↑ 3% vs yesterday</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-label">Low Stock Items</div>
                <div class="stat-value">12</div>
                <div class="stat-change negative">↓ 5 items need reorder</div>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="quick-actions">
            <h2 class="section-title">Quick Actions</h2>
            <div class="actions-grid">
                <a href="/pos" class="action-btn">
                    <div class="action-icon">🛒</div>
                    <div>
                        <div style="font-weight: 600;">New Sale</div>
                        <div style="font-size: 13px; color: #6F4E37;">Process order</div>
                    </div>
                </a>
                
                <a href="/inventory" class="action-btn">
                    <div class="action-icon">📦</div>
                    <div>
                        <div style="font-weight: 600;">Add Inventory</div>
                        <div style="font-size: 13px; color: #6F4E37;">Stock items</div>
                    </div>
                </a>
                
                <a href="/users" class="action-btn">
                    <div class="action-icon">👤</div>
                    <div>
                        <div style="font-weight: 600;">Add User</div>
                        <div style="font-size: 13px; color: #6F4E37;">New staff</div>
                    </div>
                </a>
                
                <a href="/reports" class="action-btn">
                    <div class="action-icon">📊</div>
                    <div>
                        <div style="font-weight: 600;">View Reports</div>
                        <div style="font-size: 13px; color: #6F4E37;">Analytics</div>
                    </div>
                </a>
            </div>
        </div>
        
        <!-- Recent Activity -->
        <div class="activity-section">
            <h2 class="section-title">Recent Activity</h2>
            <div class="activity-list">
                <div class="activity-item">
                    <div class="activity-icon">🛒</div>
                    <div class="activity-details">
                        <div class="activity-title">New order #1284 - Table 5</div>
                        <div class="activity-time">2 minutes ago by John</div>
                    </div>
                    <div class="activity-amount">$45.50</div>
                </div>
                
                <div class="activity-item">
                    <div class="activity-icon">☕</div>
                    <div class="activity-details">
                        <div class="activity-title">Stock updated - Espresso Beans</div>
                        <div class="activity-time">15 minutes ago by Sarah</div>
                    </div>
                    <div class="activity-amount">+50 units</div>
                </div>
                
                <div class="activity-item">
                    <div class="activity-icon">💰</div>
                    <div class="activity-details">
                        <div class="activity-title">Payment received - Order #1283</div>
                        <div class="activity-time">25 minutes ago</div>
                    </div>
                    <div class="activity-amount">$28.00</div>
                </div>
                
                <div class="activity-item">
                    <div class="activity-icon">⚠️</div>
                    <div class="activity-details">
                        <div class="activity-title">Low stock alert - Croissant Mix</div>
                        <div class="activity-time">1 hour ago</div>
                    </div>
                    <div class="activity-amount" style="color: #F44336;">25 left</div>
                </div>
            </div>
        </div>
    </main>
    
    <script>
        function logout() {
            window.location.href = '/';
        }
    </script>
</body>
</html>

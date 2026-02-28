<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Lucky Star Coffee Shop</title>
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
        
        /* Report Controls */
        .report-controls {
            background: white;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }
        
        .control-group {
            display: flex;
            gap: 12px;
            align-items: center;
        }
        
        .control-label {
            font-size: 14px;
            color: #6F4E37;
            font-weight: 500;
        }
        
        .control-select, .control-input {
            height: 44px;
            padding: 0 16px;
            border: 2px solid #E8E0D5;
            border-radius: 8px;
            font-size: 14px;
            font-family: 'Inter', sans-serif;
        }
        
        .control-select:focus, .control-input:focus {
            outline: none;
            border-color: #8B4513;
        }
        
        .btn-primary {
            height: 44px;
            padding: 0 24px;
            background: linear-gradient(135deg, #8B4513, #D2691E);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(139,69,19,0.3);
        }
        
        .btn-secondary {
            height: 44px;
            padding: 0 20px;
            background: white;
            color: #6F4E37;
            border: 2px solid #E8E0D5;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            border-color: #8B4513;
            color: #8B4513;
        }
        
        /* Stats Cards */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 24px;
        }
        
        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        
        .stat-label {
            font-size: 13px;
            color: #6F4E37;
            margin-bottom: 8px;
        }
        
        .stat-value {
            font-family: 'Poppins', sans-serif;
            font-size: 28px;
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 8px;
        }
        
        .stat-change {
            font-size: 13px;
            color: #16A34A;
            font-weight: 500;
        }
        
        .stat-change.negative {
            color: #DC2626;
        }
        
        /* Charts Section */
        .charts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 24px;
            margin-bottom: 24px;
        }
        
        .chart-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        
        .chart-title {
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            color: #2C1810;
            margin-bottom: 20px;
        }
        
        /* Simple Chart Bars */
        .chart-container {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        
        .chart-bar-row {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .chart-label {
            width: 100px;
            font-size: 13px;
            color: #6F4E37;
            flex-shrink: 0;
        }
        
        .chart-bar-wrapper {
            flex: 1;
            height: 24px;
            background: #F5F5F0;
            border-radius: 12px;
            overflow: hidden;
        }
        
        .chart-bar {
            height: 100%;
            background: linear-gradient(90deg, #8B4513, #D2691E);
            border-radius: 12px;
            transition: width 0.5s ease;
        }
        
        .chart-value {
            width: 60px;
            text-align: right;
            font-weight: 600;
            color: #2C1810;
            font-size: 14px;
        }
        
        /* Summary Table */
        .summary-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .summary-table th {
            background: #FAF0E6;
            padding: 12px 16px;
            text-align: left;
            font-weight: 600;
            color: #2C1810;
            font-size: 14px;
            border-bottom: 2px solid #E8E0D5;
        }
        
        .summary-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #F0E6DC;
            color: #4A4A4A;
            font-size: 14px;
        }
        
        .summary-table tr:hover {
            background: rgba(139,69,19,0.03);
        }
        
        .trend-up {
            color: #16A34A;
        }
        
        .trend-down {
            color: #DC2626;
        }
        
        /* Report Tabs */
        .report-tabs {
            display: flex;
            gap: 8px;
            margin-bottom: 24px;
            background: white;
            padding: 8px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        
        .report-tab {
            padding: 12px 24px;
            border-radius: 8px;
            border: none;
            background: transparent;
            cursor: pointer;
            font-weight: 500;
            color: #6F4E37;
            transition: all 0.3s ease;
        }
        
        .report-tab:hover, .report-tab.active {
            background: #8B4513;
            color: white;
        }
        
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                gap: 16px;
            }
            
            .charts-grid {
                grid-template-columns: 1fr;
            }
            
            .report-controls {
                flex-direction: column;
                align-items: stretch;
            }
            
            .control-group {
                flex-wrap: wrap;
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
            <a href="/reports" class="nav-item active">Reports</a>
            <a href="/users" class="nav-item">Users</a>
        </nav>
        
        <div class="user-menu">
            <span>Welcome, Admin</span>
            <button class="logout-btn" onclick="logout()">Logout</button>
        </div>
    </header>
    
    <!-- Main Content -->
    <main class="main-content">
        <h1 class="page-title">Reports & Analytics</h1>
        
        <!-- Report Tabs -->
        <div class="report-tabs">
            <button class="report-tab active" onclick="switchTab('sales')">Sales</button>
            <button class="report-tab" onclick="switchTab('inventory')">Inventory</button>
            <button class="report-tab" onclick="switchTab('staff')">Staff</button>
            <button class="report-tab" onclick="switchTab('financial')">Financial</button>
        </div>
        
        <!-- Report Controls -->
        <div class="report-controls">
            <div class="control-group">
                <span class="control-label">Date Range:</span>
                <input type="date" class="control-input" value="2026-02-01">
                <span>to</span>
                <input type="date" class="control-input" value="2026-02-27">
            </div>
            <div class="control-group">
                <button class="btn-secondary" onclick="exportReport()">📥 Export PDF</button>
                <button class="btn-secondary" onclick="exportExcel()">📊 Export Excel</button>
                <button class="btn-primary" onclick="generateReport()">🔄 Generate</button>
            </div>
        </div>
        
        <!-- Stats Row -->
        <div class="stats-row">
            <div class="stat-card">
                <div class="stat-label">Total Revenue</div>
                <div class="stat-value">₱2,638,750</div>
                <div class="stat-change">↑ 12% vs last month</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-label">Total Orders</div>
                <div class="stat-value">2,847</div>
                <div class="stat-change">↑ 8% vs last month</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-label">Average Order</div>
                <div class="stat-value">₱15.89</div>
                <div class="stat-change">↑ 3% vs last month</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-label">Net Profit</div>
                <div class="stat-value">₱738,675</div>
                <div class="stat-change negative">↓ 2% vs last month</div>
            </div>
        </div>
        
        <!-- Charts Grid -->
        <div class="charts-grid">
            <div class="chart-card">
                <h3 class="chart-title">📈 Sales by Category</h3>
                <div class="chart-container">
                    <div class="chart-bar-row">
                        <span class="chart-label">Coffee</span>
                        <div class="chart-bar-wrapper">
                            <div class="chart-bar" style="width: 85%"></div>
                        </div>
                        <span class="chart-value">₱1,077,450</span>
                    </div>
                    <div class="chart-bar-row">
                        <span class="chart-label">Pastry</span>
                        <div class="chart-bar-wrapper">
                            <div class="chart-bar" style="width: 60%"></div>
                        </div>
                        <span class="chart-value">₱721,250</span>
                    </div>
                    <div class="chart-bar-row">
                        <span class="chart-label">Beverage</span>
                        <div class="chart-bar-wrapper">
                            <div class="chart-bar" style="width: 45%"></div>
                        </div>
                        <span class="chart-value">₱536,000</span>
                    </div>
                    <div class="chart-bar-row">
                        <span class="chart-label">Other</span>
                        <div class="chart-bar-wrapper">
                            <div class="chart-bar" style="width: 25%"></div>
                        </div>
                        <span class="chart-value">₱305,750</span>
                    </div>
                </div>
            </div>
            
            <div class="chart-card">
                <h3 class="chart-title">📊 Top Selling Products</h3>
                <div class="chart-container">
                    <div class="chart-bar-row">
                        <span class="chart-label">Cappuccino</span>
                        <div class="chart-bar-wrapper">
                            <div class="chart-bar" style="width: 92%"></div>
                        </div>
                        <span class="chart-value">892</span>
                    </div>
                    <div class="chart-bar-row">
                        <span class="chart-label">Croissant</span>
                        <div class="chart-bar-wrapper">
                            <div class="chart-bar" style="width: 78%"></div>
                        </div>
                        <span class="chart-value">756</span>
                    </div>
                    <div class="chart-bar-row">
                        <span class="chart-label">Latte</span>
                        <div class="chart-bar-wrapper">
                            <div class="chart-bar" style="width: 65%"></div>
                        </div>
                        <span class="chart-value">634</span>
                    </div>
                    <div class="chart-bar-row">
                        <span class="chart-label">Espresso</span>
                        <div class="chart-bar-wrapper">
                            <div class="chart-bar" style="width: 52%"></div>
                        </div>
                        <span class="chart-value">498</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Detailed Table -->
        <div class="chart-card">
            <h3 class="chart-title">📋 Daily Summary</h3>
            <table class="summary-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Orders</th>
                        <th>Revenue</th>
                        <th>Avg Order</th>
                        <th>Top Product</th>
                        <th>Trend</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Feb 26, 2026</td>
                        <td>156</td>
                        <td>₱143,025</td>
                        <td>₱15.70</td>
                        <td>Cappuccino</td>
                        <td class="trend-up">↑ 12%</td>
                    </tr>
                    <tr>
                        <td>Feb 25, 2026</td>
                        <td>142</td>
                        <td>₱127,575</td>
                        <td>₱15.38</td>
                        <td>Latte</td>
                        <td class="trend-up">↑ 5%</td>
                    </tr>
                    <tr>
                        <td>Feb 24, 2026</td>
                        <td>138</td>
                        <td>₱119,675</td>
                        <td>₱14.85</td>
                        <td>Croissant</td>
                        <td class="trend-down">↓ 3%</td>
                    </tr>
                    <tr>
                        <td>Feb 23, 2026</td>
                        <td>165</td>
                        <td>₱156,380</td>
                        <td>₱16.24</td>
                        <td>Cappuccino</td>
                        <td class="trend-up">↑ 18%</td>
                    </tr>
                    <tr>
                        <td>Feb 22, 2026</td>
                        <td>148</td>
                        <td>₱135,320</td>
                        <td>₱15.67</td>
                        <td>Espresso</td>
                        <td class="trend-up">↑ 7%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    
    <script>
        function logout() {
            window.location.href = '/';
        }
        
        function switchTab(tab) {
            document.querySelectorAll('.report-tab').forEach(t => t.classList.remove('active'));
            event.target.classList.add('active');
            console.log('Switch to tab:', tab);
        }
        
        function generateReport() {
            alert('Generating report for selected date range...');
        }
        
        function exportReport() {
            alert('Exporting PDF report...');
        }
        
        function exportExcel() {
            alert('Exporting Excel report...');
        }
    </script>
</body>
</html>

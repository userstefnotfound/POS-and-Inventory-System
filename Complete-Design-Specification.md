# Lucky Star Coffee Shop - POS & Inventory Management System
## Complete UI/UX Design Specification

---

## Table of Contents
1. [Design System](#design-system)
2. [User Roles & Permissions](#user-roles--permissions)
3. [Navigation Structure](#navigation-structure)
4. [Screen Designs](#screen-designs)
5. [Responsive Design](#responsive-design)
6. [User Experience Considerations](#user-experience-considerations)
7. [Accessibility Features](#accessibility-features)

---

## Design System

### Color Palette

#### Primary Colors
| Color Name | Hex Code | RGB | Usage |
|------------|----------|-----|-------|
| Coffee Brown (Primary) | #8B4513 | rgb(139, 69, 19) | Buttons, primary actions, headers |
| Chocolate (Secondary) | #D2691E | rgb(210, 105, 30) | Hover states, secondary buttons |
| Dark Roast (Dark) | #2C1810 | rgb(44, 24, 16) | Text, backgrounds, footer |

#### Accent Colors
| Color Name | Hex Code | RGB | Usage |
|------------|----------|-----|-------|
| Cream (Neutral) | #F5E6D3 | rgb(245, 230, 211) | Backgrounds, cards |
| Latte (Light) | #FAF0E6 | rgb(250, 240, 230) | Page backgrounds |
| Coffee Bean | #6F4E37 | rgb(111, 78, 55) | Borders, dividers |
| Mocha | #967969 | rgb(150, 121, 105) | Secondary text |

#### Semantic Colors
| Color Name | Hex Code | Usage |
|------------|----------|-------|
| Success | #4CAF50 | Stock available, successful actions |
| Warning | #FF9800 | Low stock, warnings |
| Error | #F44336 | Out of stock, errors |
| Info | #2196F3 | Information, help text |

#### Gradient Patterns
- **Login Background**: `linear-gradient(135deg, #2C1810 0%, #8B4513 50%, #D2691E 100%)`
- **Button Primary**: `linear-gradient(135deg, #8B4513, #D2691E)`
- **Card Hover**: `linear-gradient(135deg, rgba(139,69,19,0.1), rgba(210,105,30,0.1))`

### Typography System

#### Font Families
- **Primary (Headings)**: 'Poppins', sans-serif
- **Secondary (Body)**: 'Inter', sans-serif
- **Monospace**: 'JetBrains Mono', monospace (for codes, IDs)

#### Type Scale
| Element | Font | Size | Weight | Line Height | Letter Spacing |
|---------|------|------|--------|-------------|----------------|
| H1 | Poppins | 32px | 700 | 1.2 | -0.02em |
| H2 | Poppins | 24px | 600 | 1.3 | -0.01em |
| H3 | Poppins | 20px | 600 | 1.4 | 0 |
| H4 | Poppins | 18px | 500 | 1.4 | 0 |
| Body Large | Inter | 18px | 400 | 1.6 | 0 |
| Body | Inter | 16px | 400 | 1.5 | 0 |
| Body Small | Inter | 14px | 400 | 1.5 | 0 |
| Caption | Inter | 12px | 400 | 1.4 | 0.01em |
| Button | Poppins | 16px | 500 | 1 | 0.02em |
| Label | Inter | 14px | 500 | 1.4 | 0.01em |

### Spacing System

#### Layout Spacing
| Name | Value | Usage |
|------|-------|-------|
| xs | 4px | Tight spacing, icon gaps |
| sm | 8px | Small gaps, button padding |
| md | 16px | Standard spacing |
| lg | 24px | Card padding, section gaps |
| xl | 32px | Large sections |
| 2xl | 48px | Page sections |
| 3xl | 64px | Major page breaks |

#### Component Sizes
| Component | Height | Padding |
|-----------|--------|---------|
| Button (Standard) | 44px | 12px 24px |
| Button (Large) | 56px | 16px 32px |
| Input | 48px | 12px 16px |
| Card | auto | 24px |
| Sidebar Item | 48px | 12px 16px |

### Border Radius
| Token | Value | Usage |
|-------|-------|-------|
| sm | 4px | Small elements, badges |
| md | 8px | Buttons, inputs, cards |
| lg | 12px | Large cards, modals |
| xl | 16px | Page containers |
| full | 9999px | Pills, avatars |

### Shadows
| Name | Value | Usage |
|------|-------|-------|
| sm | `0 1px 2px rgba(0,0,0,0.05)` | Cards, subtle elevation |
| md | `0 4px 6px rgba(0,0,0,0.1)` | Dropdowns, popovers |
| lg | `0 10px 15px rgba(0,0,0,0.1)` | Modals, dialogs |
| xl | `0 20px 25px rgba(0,0,0,0.15)` | Overlays, notifications |
| button | `0 4px 14px rgba(139,69,19,0.3)` | Primary button hover |

---

## User Roles & Permissions

### Role Hierarchy

#### 1. Owner (Super Administrator)
**Permissions: Full System Access**
- ✅ All POS operations
- ✅ All Inventory operations
- ✅ All Reports (view, export, schedule)
- ✅ User Management (create, edit, delete all users)
- ✅ System Settings (configuration, backups)
- ✅ Financial Data (revenue, costs, profits)
- ✅ Audit Logs (view all system activities)

**Use Cases:**
- Business owner, founder
- Full business oversight
- Financial management
- Strategic decision making

#### 2. Admin Manager
**Permissions: Manager Level Access**
- ✅ All POS operations
- ✅ All Inventory operations
- ✅ All Reports (view, export)
- ✅ User Management (create, edit Cashier & Clerk only)
- ✅ Daily Operations Management
- ❌ System Settings (view only)
- ❌ Financial Data (summary only, no costs)

**Use Cases:**
- Store manager
- Daily operations supervisor
- Staff coordinator

#### 3. Cashier
**Permissions: Sales Operations Only**
- ✅ POS Sales (create orders, process payments)
- ✅ View Own Sales History
- ✅ Customer Management (create, edit customers)
- ❌ Inventory (view stock only, no modifications)
- ❌ Reports (daily sales summary only)
- ❌ User Management (no access)
- ❌ Financial Data (no access)

**Use Cases:**
- Front desk staff
- Order taking and payment processing
- Customer service

#### 4. Inventory Clerk
**Permissions: Inventory Operations Only**
- ✅ Inventory Management (full CRUD)
- ✅ Stock-in/Stock-out operations
- ✅ Supplier Management
- ✅ Low Stock Monitoring
- ❌ POS Sales (view only, no transactions)
- ❌ Reports (inventory reports only)
- ❌ User Management (no access)
- ❌ Financial Data (no access)

**Use Cases:**
- Stock manager
- Supply coordinator
- Warehouse staff

### Permission Matrix

| Feature | Owner | Admin | Cashier | Clerk |
|---------|-------|-------|---------|-------|
| POS - Create Orders | ✅ | ✅ | ✅ | ❌ |
| POS - Process Payments | ✅ | ✅ | ✅ | ❌ |
| POS - View Orders | ✅ | ✅ | ✅ | 👁️ |
| Inventory - View | ✅ | ✅ | 👁️ | ✅ |
| Inventory - Edit | ✅ | ✅ | ❌ | ✅ |
| Inventory - Stock In/Out | ✅ | ✅ | ❌ | ✅ |
| Reports - Sales | ✅ | ✅ | 👁️ | ❌ |
| Reports - Inventory | ✅ | ✅ | ❌ | 👁️ |
| Reports - Financial | ✅ | ❌ | ❌ | ❌ |
| User Management | ✅ | ✅* | ❌ | ❌ |
| System Settings | ✅ | 👁️ | ❌ | ❌ |

*Admin can manage Cashier and Clerk roles only

---

## Navigation Structure

### Global Navigation Architecture

#### Desktop Layout: Sidebar Navigation
```
┌──────────────────────────────────────────────────────────────┐
│ ☕ Lucky Star │  Dashboard │  POS │  Inventory │ Reports │ 👤 Admin ▼ │
├──────────────┴──────────────────────────────────────────────┤
│ Sidebar │                                                  │
│         │           Main Content Area                       │
│  Home   │                                                  │
│  POS    │                                                  │
│  Inv.   │                                                  │
│  Rep.   │                                                  │
│  Users  │                                                  │
│         │                                                  │
│ ────────┤                                                  │
│  ⚙️ Set │                                                  │
│  🚪 Log │                                                  │
└──────────────────────────────────────────────────────────────┘
```

#### Mobile Layout: Bottom Tab Bar
```
┌─────────────────────────────────┐
│         Main Content            │
│                                 │
│                                 │
├─────────────────────────────────┤
│ 🏠 │ 🛒 │ 📦 │ 📊 │ 👤        │
│Home│POS │Inv │Rep │Profile     │
└─────────────────────────────────┘
```

### Navigation Items by Role

#### Owner Navigation
1. **Dashboard** - Overview of all operations
2. **POS System** - Sales interface
3. **Inventory** - Stock management
4. **Reports** - All analytics
5. **User Management** - Staff management
6. **Settings** - System configuration
7. **Audit Logs** - Activity tracking

#### Admin Manager Navigation
1. **Dashboard** - Store overview
2. **POS System** - Sales interface
3. **Inventory** - Stock management
4. **Reports** - Operations reports
5. **User Management** - Staff management
6. **Settings** - View only

#### Cashier Navigation
1. **Dashboard** - Today's sales overview
2. **POS System** - Primary work interface
3. **Orders** - Order history
4. **Customers** - Customer management
5. **Profile** - Personal settings

#### Inventory Clerk Navigation
1. **Dashboard** - Stock overview
2. **Inventory** - Primary work interface
3. **Suppliers** - Vendor management
4. **Stock Movements** - In/out history
5. **Profile** - Personal settings

### Navigation States

#### Active State
- Background: `rgba(139, 69, 19, 0.1)`
- Text: `#8B4513`
- Left border: 3px solid `#8B4513`
- Font weight: 600

#### Hover State
- Background: `rgba(139, 69, 19, 0.05)`
- Text: `#D2691E`
- Transition: 200ms ease

#### Inactive State
- Background: transparent
- Text: `#6F4E37`
- Font weight: 400

### Breadcrumb Navigation
```
Home > Inventory > Stock Management > Add New Item
```

**Style:**
- Font: 14px Inter
- Active: `#8B4513`, weight 600
- Inactive: `#967969`
- Separator: `>` or `/`

---

## Screen Designs

### 1. Login Screen

#### Layout Structure
```
┌──────────────────────────────────────────────────────────────┐
│                                                              │
│           [Coffee Bean Animations Background]                │
│                                                              │
│    ┌──────────────────────────────────────────────────┐     │
│    │                                                  │     │
│    │              ☕ (Logo Icon)                      │     │
│    │                                                  │     │
│    │         Lucky Star Coffee Shop                   │     │
│    │      POS & Inventory Management                  │     │
│    │                                                  │     │
│    │  ┌────────────────────────────────────────┐   │     │
│    │  │ Email / Username                        │   │     │
│    │  └────────────────────────────────────────┘   │     │
│    │                                                  │     │
│    │  ┌────────────────────────────────────────┐   │     │
│    │  │ Password              [👁️ Toggle]      │   │     │
│    │  └────────────────────────────────────────┘   │     │
│    │                                                  │     │
│    │  ☐ Remember Me        Forgot Password?         │     │
│    │                                                  │     │
│    │  ┌────────────────────────────────────────┐   │     │
│    │  │         SIGN IN                         │   │     │
│    │  └────────────────────────────────────────┘   │     │
│    │                                                  │     │
│    │  Don't have an account? Sign Up                │     │
│    │                                                  │     │
│    │  ┌────────────────────────────────────────┐   │     │
│    │  │ Demo: admin@luckystar.com / admin123   │   │     │
│    │  └────────────────────────────────────────┘   │     │
│    │                                                  │     │
│    └──────────────────────────────────────────────────┘     │
│                                                              │
└──────────────────────────────────────────────────────────────┘
```

#### Component Specifications

**Card Container:**
- Width: 100% (max: 480px)
- Background: `rgba(255, 255, 255, 0.95)`
- Border radius: 16px
- Padding: 48px 40px
- Box shadow: `0 20px 60px rgba(0,0,0,0.15)`
- Backdrop filter: blur(10px)

**Logo Section:**
- Icon: 64px coffee cup in circular gradient background
- Title: 28px Poppins Bold, color `#8B4513`
- Subtitle: 16px Inter Regular, color `#6F4E37`

**Form Inputs:**
- Height: 56px
- Border: 2px solid `#E5E7EB`
- Border radius: 12px
- Focus: Border `#8B4513`, shadow `0 0 0 4px rgba(139,69,19,0.1)`
- Placeholder color: `#9CA3AF`

**Primary Button:**
- Height: 56px
- Background: Gradient `#8B4513` to `#D2691E`
- Text: 16px Poppins Medium, white
- Border radius: 12px
- Hover: Transform `translateY(-2px)`, shadow `0 8px 20px rgba(139,69,19,0.3)`
- Active: Transform `translateY(0)`

**Loading State:**
- Button shows spinner animation
- Text changes to "Signing In..."
- Disabled state during processing

#### Interactions & States

**Form Validation:**
- Real-time validation on blur
- Error message below input
- Red border on error: `#F44336`
- Success checkmark on valid input

**Password Toggle:**
- Eye icon switches to eye-slash
- Input type toggles between password/text
- Smooth transition animation

**Remember Me:**
- Checkbox with custom coffee-brown accent
- Stores login session for 30 days
- Encrypted local storage

**Forgot Password:**
- Modal opens with email input
- Sends reset link to email
- Success confirmation message

#### Background Animation
- Floating coffee beans (CSS animation)
- Gradient mesh background
- Subtle parallax effect on mouse move
- 5 animated bean elements with different delays

---

### 2. POS Sales Screen

#### Layout Structure
```
┌────────────────────────────────────────────────────────────────────┐
│ ☕ Lucky Star POS │  Dashboard  │  📦 Inventory  │  👤 Admin ▼    │
├────────────────────────────────────────────────────────────────────┤
│ Sidebar │  Main Content Area                                     │
│         │                                                          │
│  🏠     │  ┌─────────────────────┐  ┌───────────────────────────┐ │
│  🛒     │  │ Categories          │  │ Current Order #1284      │ │
│  📦     │  │ ☕ Hot Coffee       │  │ Table: 5  |  Customer     │ │
│  📊     │  │ 🥤 Cold Drinks     │  │ ───────────────────────── │ │
│  👥     │  │ 🥐 Pastries        │  │ ☕ Espresso x2     $4.50 │ │
│         │  │ 🍪 Snacks          │  │    [−] [+] [🗑️]          │ │
│ ────────│  │ 🥪 Sandwiches      │  │ 🥐 Croissant x1    $3.25 │ │
│  ⚙️     │  │                    │  │    [−] [+] [🗑️]          │ │
│  🚪     │  │ [Search...]        │  │ 🥤 Iced Latte x1   $4.75 │ │
│         │  └─────────────────────┘  │    [−] [+] [🗑️]          │ │
│         │                          │ ───────────────────────── │ │
│         │  ┌─────────────────────┐  │ Subtotal:        $12.50   │ │
│         │  │ Product Grid        │  │ Tax (8%):         $1.00   │ │
│         │  │                     │  │ Discount:        −$0.00  │ │
│         │  │ ☕ Espresso         │  │ ───────────────────────── │ │
│         │  │ $2.25  [Add +]      │  │ TOTAL:           $13.50   │ │
│         │  │                     │  │                           │ │
│         │  │ ☕ Latte            │  │ ┌─────┐ ┌─────┐ ┌─────┐ │ │
│         │  │ $4.50  [Add +]      │  │ Cash │ Card │ Other│ │ │
│         │  │                     │  │ └─────┘ └─────┘ └─────┘ │ │
│         │  │ ☕ Cappuccino       │  │                           │ │
│         │  │ $3.75  [Add +]      │  │ [💳 Quick Pay]           │ │
│         │  │                     │  │ [🧾 Print Preview]       │ │
│         │  │ 🥐 Croissant        │  │ [❌ Cancel Order]       │ │
│         │  │ $3.25  [Add +]      │  └───────────────────────────┘ │
│         │  └─────────────────────┘                              │
└────────────────────────────────────────────────────────────────────┘
```

#### Component Specifications

**Header Bar:**
- Height: 64px
- Background: White
- Border bottom: 1px solid `#E5E7EB`
- Logo: Coffee icon + "Lucky Star POS" text
- Right side: Quick actions + User menu

**Category Sidebar:**
- Width: 280px
- Background: `#FAF0E6`
- Category items: 48px height
- Active category: Left border 4px `#8B4513`, background `rgba(139,69,19,0.1)`
- Icons: 24px, color matches text

**Search Bar:**
- Height: 48px
- Background: White
- Border: 1px solid `#E5E7EB`
- Border radius: 12px
- Search icon: Left side, `#6F4E37`
- Placeholder: "Search products, SKUs, or categories..."
- Real-time search results dropdown

**Product Grid:**
- Grid: 3-4 columns depending on screen width
- Card size: Flexible, min-width 200px
- Card background: White
- Border radius: 12px
- Shadow: `0 2px 8px rgba(0,0,0,0.08)`
- Hover: Shadow `0 4px 16px rgba(0,0,0,0.12)`, transform `translateY(-2px)`

**Product Card:**
```
┌─────────────────────┐
│  [Product Image]    │  160px height, object-fit: cover
│                     │
│  Product Name       │  16px Poppins Medium, #2C1810
│  $XX.XX            │  18px Inter Bold, #8B4513
│                     │
│  Stock: 45 units   │  12px Inter Regular, #6F4E37
│                     │
│  ┌───────────────┐  │
│  │    + ADD      │  │  Full width, 40px height
│  └───────────────┘  │
└─────────────────────┘
```

**Order Panel:**
- Width: 380px (min), 450px (max)
- Background: White
- Border left: 1px solid `#E5E7EB`
- Padding: 24px

**Order Item:**
```
┌─────────────────────────────────┐
│ ☕ Espresso               $4.50  │
│ Regular, Hot, No Sugar           │
│                                 │
│ [−]  2  [+]    [🗑️]      $4.50 │
└─────────────────────────────────┘
```
- Quantity controls: 32px circular buttons
- Delete: Trash icon, red on hover
- Swipe left on mobile to delete

**Totals Section:**
- Subtotal: 16px Inter Regular
- Tax: 14px Inter Regular, gray
- Discount: 14px Inter Regular, green (if applied)
- **TOTAL**: 24px Poppins Bold, `#8B4513`

**Payment Buttons:**
- Height: 56px
- Border radius: 12px
- Cash: Green background `#4CAF50`
- Card: Blue background `#2196F3`
- Other: Orange background `#FF9800`

#### Functional Features

**Quick Actions:**
- Barcode scanner integration
- Quick product keys (F1-F12 for favorites)
- Keyboard shortcuts: 
  - `Enter` - Add to cart / Confirm
  - `Escape` - Cancel / Back
  - `F2` - Search
  - `F4` - Cash payment
  - `F5` - Card payment
  - `+` / `-` - Quantity adjust

**Discount System:**
- Percentage discount (e.g., 10% off)
- Fixed amount discount (e.g., $5 off)
- Promo code input
- Visual discount indicator in order

**Payment Flow:**
1. Click payment method (Cash/Card/Other)
2. Modal opens with payment details
3. For cash: Enter amount received, show change
4. For card: Process through integrated terminal
5. For other: Digital wallet options (QR code)
6. Confirm payment
7. Generate receipt automatically

**Receipt Generation:**
- Auto-print on thermal printer
- Email receipt option
- SMS receipt option
- Digital receipt (QR code for customer app)

**Table Management (for dine-in):**
- Visual floor plan view
- Table status: Available, Occupied, Reserved, Cleaning
- Drag-and-drop order assignment
- Table timer (how long occupied)

---

### 3. Inventory Management Screen

#### Layout Structure
```
┌────────────────────────────────────────────────────────────────────┐
│ ☕ Lucky Star │  Dashboard  │  🛒 POS  │  📊 Reports  │  👤 Admin ▼│
├────────────────────────────────────────────────────────────────────┤
│                          Inventory Management                      │
├────────────────────────────────────────────────────────────────────┤
│ ┌─────────────┐  ┌─────────────────────────────────────────────┐ │
│ │ Quick Stats │  │ Action Bar                                   │ │
│ │             │  │ [+ Add Item] [📥 Import] [📤 Export] [🔔 Alerts ▼]│ │
│ │ Total: 248  │  └─────────────────────────────────────────────┘ │
│ │ Low: 12    │                                                  │ │
│ │ Out: 3     │  ┌─────────────────────────────────────────────┐ │
│ │ Value: $12k│  │ Filters & Search                             │ │
│ └─────────────┘  │ Category: All ▼  Status: All ▼  [Search...]  │ │
│                  └─────────────────────────────────────────────┘ │
│ ┌─────────────┐                                                  │ │
│ │ Categories  │  ┌─────────────────────────────────────────────┐ │
│ │             │  │ Inventory Items                              │ │
│ │ ☕ Coffee   │  │ ┌───────────────────────────────────────────┐│ │
│ │ 🥤 Drinks  │  ││ ☕ Espresso Beans                          ││ │
│ │ 🥐 Pastry  │  ││ SKU: CF-001  |  Category: Coffee         ││ │
│ │ 🍪 Snacks  │  ││ Stock: 150 units  [██████░░░░] 60%        ││ │
│ │ 🥪 Food    │  ││ Reorder: 50  |  Cost: $12.00  |  Sell: $25││ │
│ │ 📦 Supplies│  ││ Location: A1-Shelf3  |  Exp: 2025-12-01   ││ │
│ │            │  ││ [Edit] [Stock In] [Stock Out] [History]  ││ │
│ │ [Settings] │  │└───────────────────────────────────────────┘│ │
│ └─────────────┘  │                                              │ │
│                  │ ┌───────────────────────────────────────────┐│ │
│                  ││ 🥐 Croissant Mix                          ││ │
│                  ││ SKU: PA-001  |  Category: Pastry          ││ │
│                  ││ Stock: 25 units  [██░░░░░░░░] 25%         ││ │
│                  ││ ⚠️ LOW STOCK ALERT                        ││ │
│                  ││ Reorder: 100  |  Cost: $8.00  |  Sell: $15││ │
│                  ││ [Edit] [Stock In] [Stock Out] [History]  ││ │
│                  │└───────────────────────────────────────────┘│ │
│                  └─────────────────────────────────────────────┘ │
└────────────────────────────────────────────────────────────────────┘
```

#### Component Specifications

**Stats Cards (Top):**
- 4-column grid
- Card background: White
- Border radius: 12px
- Padding: 20px
- Shadow: `0 2px 8px rgba(0,0,0,0.06)`

**Individual Stat Card:**
```
┌─────────────────┐
│ Total Items     │  12px Inter Medium, #6F4E37
│                 │
│     248         │  32px Poppins Bold, #8B4513
│                 │
│ ↑ 12 new today │  12px Inter Regular, #4CAF50
└─────────────────┘
```

**Action Bar:**
- Background: White
- Padding: 16px 24px
- Border bottom: 1px solid `#E5E7EB`
- Buttons: 40px height, border radius 8px

**Filter Section:**
- Dropdowns: 44px height
- Border: 1px solid `#E5E7EB`
- Border radius: 8px
- Background: White

**Inventory Item Card:**
- Background: White
- Border radius: 12px
- Padding: 20px
- Border left: 4px (color based on status)
  - Green `#4CAF50`: Stock OK
  - Orange `#FF9800`: Low stock
  - Red `#F44336`: Out of stock

**Stock Level Bar:**
- Height: 8px
- Border radius: 4px
- Background: `#E5E7EB`
- Fill: Status color
- Width: Percentage of max stock

**Alert Badges:**
- Low stock: Orange pill badge
- Out of stock: Red pill badge
- Expiring soon: Yellow pill badge
- Border radius: 12px
- Padding: 4px 12px
- Font: 12px Inter Medium

#### Functional Features

**Add/Edit Item Modal:**
```
┌─────────────────────────────────────────┐
│ Add New Item                    [×]    │
├─────────────────────────────────────────┤
│ Item Name: [                    ]      │
│ SKU: [                ] (Auto)         │
│ Category: [Select Category ▼]          │
│ Description: [                    ]    │
│                                         │
│ Pricing:                                │
│ Cost Price: [$     ]                   │
│ Selling Price: [$    ]                  │
│                                         │
│ Stock:                                  │
│ Initial Stock: [    ] units           │
│ Reorder Level: [    ] units           │
│ Max Stock: [    ] units               │
│                                         │
│ Location: [Warehouse A ▼] [Shelf 1 ▼]   │
│ Supplier: [Select Supplier ▼]          │
│ Expiry Date: [    ] (optional)         │
│                                         │
│ [Barcode Scanner Integration]          │
│                                         │
│ [Cancel]  [Save Item]                 │
└─────────────────────────────────────────┘
```

**Stock In/Out Operations:**
- Modal with quantity input
- Reason dropdown (Sale, Purchase, Return, Adjustment, Damage)
- Notes text area
- Automatic date/timestamp
- Before/after stock display

**Low Stock Alerts:**
- Real-time monitoring
- Visual indicator on item card
- Notification bell with badge count
- Alert settings (customizable thresholds)

**Barcode Integration:**
- Scanner input field
- Auto-populate item details
- Quick stock lookup
- Print barcode labels

**Inventory Reports:**
- Stock valuation report
- Movement history
- Slow-moving items
- Expiry tracking

---

### 4. Reports Dashboard

#### Layout Structure
```
┌────────────────────────────────────────────────────────────────────┐
│ ☕ Lucky Star │  Dashboard  │  🛒 POS  │  📦 Inventory  │  👤 Admin ▼│
├────────────────────────────────────────────────────────────────────┤
│                           Reports Dashboard                        │
├────────────────────────────────────────────────────────────────────┤
│ ┌─────────────────────────────────────────────────────────────┐  │
│ │ Date Range: [Today ▼]  [📤 Export]  [📧 Email Report]        │  │
│ └─────────────────────────────────────────────────────────────┘  │
│                                                                   │
│ ┌────────────────┐  ┌────────────────┐  ┌────────────────┐        │  │
│ │ Total Revenue  │  │ Total Orders   │  │ Avg Order Value│        │  │
│ │                │  │                │  │                │        │  │
│ │   $2,450.00   │  │      156       │  │     $15.70     │        │  │
│ │   ↑ 12.5%     │  │   ↑ 8.3%      │  │   ↑ 3.2%      │        │  │
│ │   vs yesterday│  │   vs yesterday│  │   vs yesterday│        │  │
│ └────────────────┘  └────────────────┘  └────────────────┘        │  │
│                                                                   │
│ ┌─────────────────────────────────────────────────────────────┐  │
│ │ Sales Trend (Last 30 Days)                                   │  │
│ │                                                             │  │
│ │                     [Line Chart]                            │  │
│ │                                                             │  │
│ │ $3000│                            ╭────╮                    │  │
│ │      │                    ╭──────╯     ╰──╮                 │  │
│ │ $2000│           ╭──────╯                ╰╮                │  │
│ │      │   ╭──────╯                        ╰╮               │  │
│ │ $1000│──╯                                ╰──╮             │  │
│ │      │                                    ╰────╮        │  │
│ │    $0│                                         ╰────   │  │
│ │       └────┬────┬────┬────┬────┬────┬────┬────┬────┬   │  │
│ │           Week1  Week2  Week3  Week4                      │  │
│ └─────────────────────────────────────────────────────────────┘  │
│                                                                   │
│ ┌─────────────────────────┐  ┌───────────────────────────────┐  │
│ │ Top Selling Products    │  │ Sales by Category             │  │
│ │                         │  │                               │  │
│ │ 1. ☕ Latte        45   │  │      [Pie Chart]              │  │
│ │ 2. 🥐 Croissant    38   │  │                               │  │
│ │ 3. ☕ Espresso      32   │  │   ☕ Coffee     65%          │  │
│ │ 4. 🥤 Iced Coffee  28   │  │   🥤 Cold       20%          │  │
│ │ 5. 🍪 Cookie       25   │  │   🥐 Food       15%          │  │
│ │                         │  │                               │  │
│ │ [View Full Report]      │  │ [View Details]                │  │
│ └─────────────────────────┘  └───────────────────────────────┘  │
│                                                                   │
│ ┌─────────────────────────┐  ┌───────────────────────────────┐  │
│ │ Peak Hours              │  │ Payment Methods               │  │
│ │                         │  │                               │  │
│ │    [Bar Chart]          │  │      [Horizontal Bar]         │  │
│ │                         │  │                               │  │
│ │  8am ████               │  │ Cash     ████████████  45%   │  │
│ │ 10am ████████████       │  │ Card     ██████████    35%   │  │
│ │ 12pm █████████████████ │  │ Mobile   ██████        20%   │  │
│ │  2pm ███████████████    │  │                               │  │
│ │  4pm ████████           │  │                               │  │
│ │  6pm ██████             │  │                               │  │
│ └─────────────────────────┘  └───────────────────────────────┘  │
│                                                                   │
│ ┌─────────────────────────────────────────────────────────────┐  │
│ │ Staff Performance                                            │  │
│ │ ┌───────────┬───────────┬───────────┬───────────┐          │  │
│ │ │ Employee  │ Orders    │ Revenue   │ Avg Sale  │          │  │
│ │ ├───────────┼───────────┼───────────┼───────────┤          │  │
│ │ │ John Doe  │    45     │  $687.50  │  $15.28   │          │  │
│ │ │ Sarah S.  │    52     │  $845.00  │  $16.25   │          │  │
│ │ │ Mike R.   │    38     │  $542.00  │  $14.26   │          │  │
│ │ └───────────┴───────────┴───────────┴───────────┘          │  │
│ └─────────────────────────────────────────────────────────────┘  │
└────────────────────────────────────────────────────────────────────┘
```

#### Component Specifications

**Date Range Selector:**
- Dropdown: Today, Yesterday, Last 7 Days, Last 30 Days, This Month, Custom Range
- Custom range opens date picker modal
- Quick select buttons for common ranges

**KPI Cards (Top Row):**
- Background: White
- Border radius: 12px
- Padding: 24px
- Shadow: `0 2px 8px rgba(0,0,0,0.06)`
- Value: 32px Poppins Bold, `#8B4513`
- Percentage change: Arrow + percentage
  - Positive: Green `#4CAF50`
  - Negative: Red `#F44336`
- Comparison text: 12px Inter, `#6F4E37`

**Charts:**
- Library: Chart.js or Recharts
- Color palette: Coffee theme
- Hover effects: Tooltips with detailed data
- Interactive: Click to drill down
- Responsive: Resize with container

**Chart Color Scheme:**
- Primary: `#8B4513`
- Secondary: `#D2691E`
- Accent: `#FF8C00`
- Neutral: `#6F4E37`
- Background: `#F5E6D3`

**Data Table (Staff Performance):**
- Header: Background `#FAF0E6`, text `#2C1810`
- Row hover: Background `rgba(139,69,19,0.05)`
- Border: 1px solid `#E5E7EB`
- Sortable columns with arrow indicators
- Pagination: 10, 25, 50, 100 rows per page

**Export Options:**
- PDF: Full report with charts
- Excel: Raw data tables
- CSV: Machine-readable format
- Print: Optimized print stylesheet

#### Report Types Available

**Sales Reports:**
1. Daily Sales Summary
2. Weekly Sales Trend
3. Monthly Performance
4. Year-over-Year Comparison
5. Hourly Sales Distribution

**Inventory Reports:**
1. Current Stock Levels
2. Stock Movement History
3. Low Stock Alerts
4. Expiry Tracking
5. Inventory Valuation

**Financial Reports:**
1. Revenue Analysis
2. Cost of Goods Sold (COGS)
3. Profit Margins by Product
4. Payment Method Breakdown
5. Discounts and Promotions

**Operational Reports:**
1. Staff Performance
2. Peak Hours Analysis
3. Customer Traffic
4. Table Turnover (dine-in)
5. Order Completion Time

---

### 5. User Management Panel

#### Layout Structure
```
┌────────────────────────────────────────────────────────────────────┐
│ ☕ Lucky Star │  Dashboard  │  🛒 POS  │  📦 Inventory  │  📊 Reports│
├────────────────────────────────────────────────────────────────────┤
│                           User Management                          │
├────────────────────────────────────────────────────────────────────┤
│ ┌─────────────────────────────────────────────────────────────┐  │
│ │ [+ Add User]  [👥 Bulk Actions ▼]  [🔔 2 Pending Approval] │  │
│ └─────────────────────────────────────────────────────────────┘  │
│                                                                   │
│ ┌─────────────────────┐  ┌───────────────────────────────────────┐ │
│ │ Role Filter         │  │ User List                            │ │
│ │                     │  │                                      │ │
│ │ ☑ All (12)         │  │ ┌──────────────────────────────────┐ │ │
│ │ ☑ Owner (1)        │  ││ 👤 John Smith                     │ │ │
│ │ ☑ Admin (2)        │  ││ 📧 john@luckystar.com             │ │ │
│ │ ☑ Cashier (6)      │  ││ 🏷️ Owner                           │ │ │
│ │ ☑ Clerk (3)        │  ││ 🟢 Active | Last login: 2h ago    │ │ │
│ │                     │  ││ 📞 +1 234-567-8900                │ │ │
│ │ [+ Custom Role]     │  ││                                     │ │ │
│ │                     │  ││ [✏️ Edit] [🔒 Reset PW] [🚫 Deact] │ │ │
│ └─────────────────────┘  │└──────────────────────────────────┘ │ │
│                         │                                      │ │
│ ┌─────────────────────┐ │ ┌──────────────────────────────────┐ │ │
│ │ Quick Stats         │ ││ 👤 Sarah Johnson                   │ │ │
│ │                     │ ││ 📧 sarah@luckystar.com             │ │ │
│ │ Active: 10         │ ││ 🏷️ Admin Manager                   │ │ │
│ │ Inactive: 1        │ ││ 🟢 Active | Last login: 5m ago    │ │ │
│ │ Pending: 2         │ ││ 📞 +1 234-567-8901                │ │ │
│ │                     │ ││                                     │ │ │
│ │ [View Audit Log]    │ ││ [✏️ Edit] [🔒 Reset PW] [🚫 Deact] │ │ │
│ └─────────────────────┘ │└──────────────────────────────────┘ │ │
│                         │                                      │ │
│                         │ ┌──────────────────────────────────┐ │ │
│                         ││ 👤 Mike Brown                      │ │ │
│                         ││ 📧 mike@luckystar.com              │ │ │
│                         ││ 🏷️ Cashier                         │ │ │
│                         ││ 🟡 Inactive | Last login: 3d ago │ │ │
│                         ││ 📞 +1 234-567-8902                │ │ │
│                         ││                                     │ │ │
│                         ││ [✏️ Edit] [🔒 Reset PW] [✅ Activate]│ │ │
│                         │└──────────────────────────────────┘ │ │
│                         │                                      │ │
│                         │              [Load More...]          │ │
│                         └───────────────────────────────────────┘ │
└────────────────────────────────────────────────────────────────────┘
```

#### Component Specifications

**User Card:**
- Background: White
- Border radius: 12px
- Padding: 20px
- Border: 1px solid `#E5E7EB`
- Hover: Shadow `0 4px 12px rgba(0,0,0,0.1)`

**Avatar:**
- Size: 48px
- Border radius: 50%
- Background: Gradient `#8B4513` to `#D2691E`
- Text: Initials, white, 16px Poppins Bold
- Border: 2px solid white
- Shadow: `0 2px 8px rgba(0,0,0,0.15)`

**Status Indicator:**
- Active: Green dot `#4CAF50`
- Inactive: Gray dot `#9CA3AF`
- Pending: Orange dot `#FF9800`
- Size: 10px circle
- Text: 12px Inter Medium

**Role Badge:**
- Owner: Purple background `#9C27B0`
- Admin: Blue background `#2196F3`
- Cashier: Green background `#4CAF50`
- Clerk: Orange background `#FF9800`
- Text: White, 12px Inter Medium
- Padding: 4px 12px
- Border radius: 12px

**Action Buttons:**
- Size: 36px
- Border radius: 8px
- Background: Transparent
- Hover: Background `rgba(139,69,19,0.1)`
- Icons: 18px

#### Add/Edit User Modal

```
┌─────────────────────────────────────────┐
│ Add New User                    [×]    │
├─────────────────────────────────────────┤
│                                         │
│  ┌─────────┐                           │
│  │   👤    │  [Upload Photo]           │
│  │  Avatar │                           │
│  └─────────┘                           │
│                                         │
│ Full Name: [                    ]      │
│ Email: [                        ]      │
│ Phone: [                        ]      │
│                                         │
│ Role: [Select Role ▼]                  │
│ ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━   │
│ ☑ POS Sales                            │
│ ☑ Inventory Management                  │
│ ☑ Reports (View Only)                  │
│ ☐ User Management                      │
│ ☐ System Settings                      │
│ ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━   │
│                                         │
│ Password: [                ] [Generate]│
│ Confirm: [                ]            │
│                                         │
│ ☐ Force password change on first login│
│ ☐ Send welcome email                   │
│                                         │
│ [Cancel]  [Create User]                │
└─────────────────────────────────────────┘
```

#### Permission Editor

**Role-Based Permissions:**
- Visual permission matrix
- Toggle switches for each feature
- Inherit from role option
- Custom permission override

**Permission Categories:**
1. **POS Operations**: Create orders, process refunds, apply discounts
2. **Inventory**: View stock, edit items, stock in/out, delete items
3. **Reports**: View own, view all, export, schedule
4. **User Management**: View users, edit users, delete users
5. **System**: Settings, backups, audit logs

---

## Responsive Design

### Breakpoint Strategy

| Breakpoint | Width | Layout Changes |
|------------|-------|----------------|
| Mobile | < 640px | Single column, bottom nav |
| Tablet | 640px - 1024px | Two columns, collapsible sidebar |
| Desktop | > 1024px | Full layout, persistent sidebar |

### Mobile Adaptations

**Navigation:**
- Bottom tab bar (5 items max)
- More options in "..." menu
- Swipe gestures for common actions

**POS Screen (Mobile):**
```
┌─────────────────────────────────┐
│ 🔍 Search Products...          │
├─────────────────────────────────┤
│ ☕ Hot  🥤 Cold  🥐 Pastry      │
│ (Scrollable category tabs)      │
├─────────────────────────────────┤
│ ┌─────────┐ ┌─────────┐        │
│ │Espresso │ │  Latte  │        │
│ │ $2.25   │ │ $4.50   │        │
│ │ [+ Add] │ │ [+ Add] │        │
│ └─────────┘ └─────────┘        │
│ ┌─────────┐ ┌─────────┐        │
│ │Cappucci.│ │Croissant│        │
│ │ $3.75   │ │ $3.25   │        │
│ │ [+ Add] │ │ [+ Add] │        │
│ └─────────┘ └─────────┘        │
├─────────────────────────────────┤
│ 🛒 Cart (3 items)    $13.50  ▼ │
├─────────────────────────────────┤
│     [     CHECKOUT     ]        │
└─────────────────────────────────┘
```

**Collapsible Cart:**
- Swipe up to expand
- Shows all items with +/- controls
- Swipe item left to remove
- Checkout button fixed at bottom

**Inventory Screen (Mobile):**
- List view instead of grid
- Swipe right for quick actions
- Filter as bottom sheet
- Detail view as full-screen modal

### Tablet Optimizations

**POS Screen (Tablet):**
- 3-column product grid
- Persistent cart on right (collapsible)
- Split view: Products | Cart
- Optimized touch targets (48px minimum)

**Navigation:**
- Collapsible sidebar (hamburger menu)
- Touch-friendly (44px minimum)
- Gesture support (swipe to open/close)

### Touch Target Sizes

| Element | Minimum Size | Recommended |
|---------|--------------|-------------|
| Buttons | 44px | 48px |
| List items | 44px | 56px |
| Input fields | 44px height | 56px height |
| Icons | 24px | 32px |
| Spacing between | 8px | 12px |

### Typography Scaling

| Element | Desktop | Tablet | Mobile |
|---------|---------|--------|--------|
| H1 | 32px | 28px | 24px |
| H2 | 24px | 22px | 20px |
| Body | 16px | 16px | 15px |
| Small | 14px | 14px | 13px |

### Image Optimization

- **Product Images**: WebP format, lazy loading
- **Icons**: SVG for scalability
- **Responsive Images**: srcset for different sizes
- **Placeholder**: Skeleton screens while loading

---

## User Experience Considerations

### Onboarding Flow

**First-Time User Experience:**
1. Welcome modal with system overview
2. Quick tutorial for primary role
3. Interactive walkthrough of main features
4. Sample data for practice (optional)
5. Help button always accessible

**Progressive Disclosure:**
- Show essential features first
- Advanced options in "More" or secondary tabs
- Tooltips for complex features
- Contextual help at point of use

### Performance Optimization

**Loading States:**
- Skeleton screens for content areas
- Loading spinners for actions
- Progress bars for file uploads
- Optimistic UI updates

**Caching Strategy:**
- Local storage for user preferences
- Session storage for form data
- IndexedDB for offline data
- Service worker for offline functionality

**Response Times:**
- Page load: < 3 seconds
- API response: < 500ms
- Animation duration: 200-300ms
- Feedback delay: < 100ms

### Error Handling

**User-Friendly Errors:**
- Clear error messages in plain language
- Suggested solutions
- Contact support option
- Error logging for developers

**Form Validation:**
- Real-time validation (on blur)
- Inline error messages
- Visual indicators (red borders, checkmarks)
- Prevent form submission until valid

**Network Issues:**
- Offline detection
- Queue actions for sync
- Retry mechanism with exponential backoff
- User notification of sync status

### Data Entry Efficiency

**Keyboard Shortcuts:**
- Global shortcuts (F-keys)
- Contextual shortcuts
- Customizable shortcuts
- Shortcut help modal (?) key

**Auto-Complete:**
- Product search
- Customer names
- Supplier names
- Common order notes

**Barcode Scanning:**
- Quick scan to add item
- Batch scanning support
- Sound feedback on scan
- Error handling for invalid codes

### Confirmation Patterns

**Destructive Actions:**
- Modal confirmation
- Red color for danger
- Clear action labels
- Cancel as primary escape

**Financial Transactions:**
- Double-confirmation for large amounts
- Visual summary before confirm
- Receipt preview
- Undo option (limited time)

**Batch Operations:**
- Count of affected items
- Preview of changes
- Progress indicator
- Completion summary

### Feedback Systems

**Toast Notifications:**
- Success: Green, checkmark icon
- Error: Red, X icon
- Warning: Orange, triangle icon
- Info: Blue, info icon
- Auto-dismiss: 5 seconds
- Manual dismiss: X button

**Sound Feedback:**
- Successful scan: Beep
- Error: Low tone
- Payment success: Chime
- Adjustable volume/mute

**Haptic Feedback (Mobile):**
- Button presses
- Successful actions
- Error notifications
- Can be disabled in settings

---

## Accessibility Features

### Visual Accessibility

**Color Contrast:**
- WCAG AA compliant (4.5:1 minimum)
- WCAG AAA where possible (7:1)
- High contrast mode option
- Never rely on color alone

**Text Scaling:**
- Support 200% zoom
- Responsive text sizing
- No horizontal scroll at 200%
- Touch targets remain usable

**Focus Indicators:**
- Visible focus rings (3px minimum)
- High contrast focus colors
- Consistent focus behavior
- Skip links for keyboard users

### Screen Reader Support

**ARIA Labels:**
- Descriptive labels for all interactive elements
- Live regions for dynamic content
- Role attributes for custom components
- State announcements (loading, success, error)

**Semantic HTML:**
- Proper heading hierarchy
- Landmark regions (header, nav, main, aside, footer)
- Lists for list content
- Tables for tabular data

**Alternative Text:**
- Product images: Descriptive alt text
- Icons: aria-label or title
- Charts: Data tables as alternatives
- Decorative images: Empty alt

### Keyboard Navigation

**Navigation:**
- All features accessible via keyboard
- Tab order follows visual order
- No keyboard traps
- Escape key closes modals

**Shortcuts:**
- Alt + 1-9: Navigation sections
- Alt + S: Search
- Alt + N: New item/order
- Alt + P: Process payment
- ? key: Show shortcuts help

**Focus Management:**
- Focus moves to modal when opened
- Returns to trigger when closed
- Focus visible on all interactive elements
- Logical tab sequence

### Motion Preferences

**Reduced Motion:**
- Respect prefers-reduced-motion
- Disable animations if preferred
- Keep functionality without motion
- Instant transitions as alternative

**Animation Guidelines:**
- No flashing content (> 3Hz)
- No autoplaying videos with sound
- Pause animations on hover/focus option
- Subtle, purposeful animations only

### Cognitive Accessibility

**Clear Language:**
- Simple, concise text
- Avoid jargon where possible
- Expand acronyms on first use
- Consistent terminology

**Consistent Patterns:**
- Same interactions for same actions
- Predictable navigation
- Familiar UI conventions
- Logical grouping of related items

**Memory Aids:**
- Breadcrumbs for location
- Confirmation of actions
- Undo options
- Recent items quick access

---

## Implementation Notes

### Technology Stack Recommendations

**Frontend:**
- **Framework**: React 18+ or Vue 3
- **Styling**: Tailwind CSS with custom theme
- **UI Components**: Headless UI + custom components
- **Icons**: Lucide React or Heroicons
- **Charts**: Recharts or Chart.js
- **State Management**: Zustand or Redux Toolkit
- **Forms**: React Hook Form + Zod validation

**Backend (Laravel Integration):**
- **API**: RESTful or GraphQL
- **Authentication**: Laravel Sanctum
- **Authorization**: Spatie Laravel Permission
- **Database**: MySQL or PostgreSQL
- **Caching**: Redis for session and cache

**Build Tools:**
- **Bundler**: Vite
- **Transpiler**: TypeScript
- **Linting**: ESLint + Prettier
- **Testing**: Vitest + React Testing Library

### File Structure

```
resources/
├── js/
│   ├── components/
│   │   ├── ui/                    # Reusable UI components
│   │   │   ├── Button.tsx
│   │   │   ├── Input.tsx
│   │   │   ├── Card.tsx
│   │   │   ├── Modal.tsx
│   │   │   ├── Table.tsx
│   │   │   └── index.ts
│   │   ├── layout/                # Layout components
│   │   │   ├── Sidebar.tsx
│   │   │   ├── Header.tsx
│   │   │   └── MainLayout.tsx
│   │   ├── pos/                   # POS-specific components
│   │   │   ├── ProductCard.tsx
│   │   │   ├── Cart.tsx
│   │   │   ├── PaymentModal.tsx
│   │   │   └── Receipt.tsx
│   │   ├── inventory/             # Inventory components
│   │   │   ├── InventoryCard.tsx
│   │   │   ├── StockModal.tsx
│   │   │   └── BarcodeScanner.tsx
│   │   └── reports/               # Report components
│   │       ├── ChartCard.tsx
│   │       ├── DataTable.tsx
│   │       └── ExportButton.tsx
│   ├── hooks/                     # Custom React hooks
│   │   ├── useAuth.ts
│   │   ├── useCart.ts
│   │   ├── useInventory.ts
│   │   └── useNotifications.ts
│   ├── stores/                    # State management
│   │   ├── authStore.ts
│   │   ├── cartStore.ts
│   │   └── uiStore.ts
│   ├── lib/                       # Utilities
│   │   ├── utils.ts
│   │   ├── api.ts
│   │   └── constants.ts
│   ├── types/                     # TypeScript types
│   │   ├── user.ts
│   │   ├── product.ts
│   │   └── order.ts
│   ├── styles/
│   │   └── global.css
│   ├── App.tsx
│   └── main.tsx
├── css/
│   └── app.css
└── views/
    ├── welcome.blade.php
    └── app.blade.php
```

### Component Development Guidelines

**Props Interface:**
```typescript
interface ButtonProps {
  variant?: 'primary' | 'secondary' | 'danger' | 'ghost';
  size?: 'sm' | 'md' | 'lg';
  isLoading?: boolean;
  disabled?: boolean;
  leftIcon?: React.ReactNode;
  rightIcon?: React.ReactNode;
  onClick?: () => void;
  children: React.ReactNode;
  className?: string;
}
```

**Accessibility Requirements:**
- Keyboard navigable
- Screen reader friendly
- Color contrast compliant
- Focus management
- Loading states

**Performance Targets:**
- First Contentful Paint: < 1.5s
- Largest Contentful Paint: < 2.5s
- Time to Interactive: < 3.5s
- Cumulative Layout Shift: < 0.1

---

## Summary

This comprehensive design specification provides:

1. **Complete Visual System**: Colors, typography, spacing, and components
2. **Role-Based Access Control**: Four user roles with granular permissions
3. **Five Main Screens**: Login, POS, Inventory, Reports, User Management
4. **Responsive Design**: Mobile-first approach with tablet and desktop optimizations
5. **User Experience**: Onboarding, feedback, error handling, and efficiency features
6. **Accessibility**: WCAG compliance, screen reader support, keyboard navigation
7. **Implementation Guide**: Technology stack, file structure, and development guidelines

The design prioritizes:
- **Usability**: Intuitive interfaces for all user skill levels
- **Efficiency**: Quick actions, shortcuts, and streamlined workflows
- **Reliability**: Error handling, offline support, and data integrity
- **Scalability**: Component architecture that grows with the business
- **Professionalism**: Coffee-themed aesthetic that's modern and clean

This specification serves as a complete blueprint for developers to build a production-ready POS and Inventory Management System for Lucky Star Coffee Shop.

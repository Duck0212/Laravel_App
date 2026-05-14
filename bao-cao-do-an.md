# BÁO CÁO ĐỒ ÁN

## ĐỒ ÁN TỐT NGHIỆP

**Đề tài:** Hệ thống quản lý cửa hàng trực tuyến DuckShop

**Ngôn ngữ lập trình:** PHP Framework Laravel

**Sinh viên thực hiện:** [Tên sinh viên]

**Mã sinh viên:** [Mã sinh viên]

**Giảng viên hướng dẫn:** [Tên giảng viên]

**Lớp:** [Tên lớp]

**Thời gian thực hiện:** Tháng 5 năm 2026

---

# LỜI CẢM ƠN

Trước tiên, tôi xin gửi lời cảm ơn sâu sắc đến thầy/cô [Tên giảng viên] đã tận tình hướng dẫn, chỉ bảo và tạo mọi điều kiện thuận lợi để tôi hoàn thành đồ án tốt nghiệp này.

Tôi xin cảm ơn Ban Giám đốc Trường Đại học [Tên trường], các thầy cô giáo trong khoa [Tên khoa] đã tạo môi trường học tập tốt nhất cho sinh viên.

Tôi cũng xin cảm ơn gia đình và bạn bè đã luôn động viên, khích lệ tôi trong suốt quá trình học tập và thực hiện đồ án.

Cuối cùng, tôi xin cảm ơn tất cả những ai đã giúp đỡ tôi trực tiếp hay gián tiếp để hoàn thành đồ án này.

Thành phố Hồ Chí Minh, ngày 13 tháng 5 năm 2026

Sinh viên thực hiện

[Tên sinh viên]

---

# MỤC LỤC

[TOC]

---

# PHẦN MỞ ĐẦU

## 1. Lý do chọn đề tài

Trong thời đại công nghệ số hiện nay, thương mại điện tử đang phát triển mạnh mẽ và trở thành xu hướng tất yếu của xã hội. Việc xây dựng một hệ thống quản lý cửa hàng trực tuyến không chỉ đáp ứng nhu cầu kinh doanh hiện đại mà còn là cơ hội để tôi áp dụng kiến thức đã học vào thực tế.

Laravel là một framework PHP phổ biến với cú pháp tinh tế, dễ sử dụng và có cộng đồng hỗ trợ lớn. Việc lựa chọn Laravel giúp tôi nắm vững các kỹ năng phát triển web hiện đại.

## 2. Mục tiêu của đồ án

- Xây dựng hệ thống quản lý cửa hàng trực tuyến hoàn chỉnh
- Áp dụng kiến thức về PHP, Laravel Framework
- Thiết kế giao diện thân thiện với người dùng
- Đảm bảo tính bảo mật và an toàn của hệ thống
- Triển khai các chức năng CRUD cơ bản
- Xây dựng hệ thống quản trị viên với phân quyền

## 3. Phạm vi của đồ án

Đồ án tập trung vào việc phát triển một hệ thống quản lý cửa hàng trực tuyến với các chức năng chính:

- Quản lý sản phẩm và danh mục
- Quản lý người dùng và đơn hàng
- Giao diện người dùng thân thiện
- Hệ thống quản trị viên với bảo mật
- Tích hợp thanh toán và giỏ hàng

## 4. Phương pháp nghiên cứu

- Nghiên cứu lý thuyết về Laravel Framework
- Phân tích yêu cầu hệ thống
- Thiết kế cơ sở dữ liệu
- Lập trình và triển khai
- Kiểm thử và đánh giá

---

# PHÂN TÍCH YÊU CẦU HỆ THỐNG

## 1. Phân tích nghiệp vụ

### 1.1. Đối tượng sử dụng

- **Khách hàng:** Người dùng cuối, có thể xem sản phẩm, đặt hàng, quản lý tài khoản
- **Quản trị viên:** Quản lý toàn bộ hệ thống, sản phẩm, đơn hàng, người dùng

### 1.2. Quy trình nghiệp vụ chính

1. **Đăng ký/Đăng nhập:** Người dùng tạo tài khoản hoặc đăng nhập
2. **Xem sản phẩm:** Duyệt danh mục, tìm kiếm sản phẩm
3. **Đặt hàng:** Thêm vào giỏ, thanh toán
4. **Quản lý đơn hàng:** Theo dõi trạng thái đơn hàng
5. **Quản trị:** CRUD cho tất cả dữ liệu

## 2. Yêu cầu chức năng

### 2.1. Yêu cầu chức năng cho khách hàng

- Đăng ký, đăng nhập, quên mật khẩu
- Xem danh sách sản phẩm theo danh mục
- Tìm kiếm sản phẩm
- Xem chi tiết sản phẩm
- Thêm sản phẩm vào giỏ hàng
- Thanh toán đơn hàng
- Xem lịch sử đơn hàng

### 2.2. Yêu cầu chức năng cho quản trị viên

- Dashboard thống kê
- Quản lý sản phẩm (thêm, sửa, xóa, xem)
- Quản lý danh mục (thêm, sửa, xóa, xem)
- Quản lý người dùng (thêm, sửa, xóa, xem)
- Quản lý đơn hàng (xem, cập nhật trạng thái)
- Phân quyền người dùng

## 3. Yêu cầu phi chức năng

- **Tính bảo mật:** Xác thực người dùng, phân quyền
- **Tính dễ sử dụng:** Giao diện thân thiện, dễ thao tác
- **Tính hiệu năng:** Thời gian phản hồi nhanh
- **Tính bảo trì:** Code dễ đọc, có tài liệu

---

# THIẾT KẾ HỆ THỐNG

## 1. Kiến trúc hệ thống

Hệ thống sử dụng kiến trúc MVC (Model-View-Controller) của Laravel:

- **Model:** Xử lý dữ liệu và logic nghiệp vụ
- **View:** Hiển thị giao diện người dùng
- **Controller:** Điều phối giữa Model và View

## 2. Thiết kế cơ sở dữ liệu

### 2.1. Sơ đồ ERD

```
users (id, name, email, password, is_admin, timestamps)
categories (id, name, desc, timestamps)
products (id, name, desc, price, quantity, category_id, timestamps)
orders (id, user_id, total_price, status, receiver, timestamps)
order_products (id, order_id, product_id, quantity, price, timestamps)
```

### 2.2. Mô tả các bảng

#### Bảng users
- id: Khóa chính
- name: Tên người dùng
- email: Email (unique)
- password: Mật khẩu (hashed)
- is_admin: Quyền quản trị viên
- timestamps: Thời gian tạo/cập nhật

#### Bảng categories
- id: Khóa chính
- name: Tên danh mục
- desc: Mô tả danh mục
- timestamps: Thời gian tạo/cập nhật

#### Bảng products
- id: Khóa chính
- name: Tên sản phẩm
- desc: Mô tả sản phẩm
- price: Giá sản phẩm
- quantity: Số lượng tồn kho
- category_id: Khóa ngoại đến categories
- timestamps: Thời gian tạo/cập nhật

#### Bảng orders
- id: Khóa chính
- user_id: Khóa ngoại đến users
- total_price: Tổng tiền đơn hàng
- status: Trạng thái (pending, processing, completed, cancelled)
- receiver: Thông tin người nhận
- timestamps: Thời gian tạo/cập nhật

#### Bảng order_products
- id: Khóa chính
- order_id: Khóa ngoại đến orders
- product_id: Khóa ngoại đến products
- quantity: Số lượng sản phẩm trong đơn hàng
- price: Giá tại thời điểm đặt hàng

## 3. Thiết kế giao diện

### 3.1. Giao diện người dùng
- Trang chủ: Hiển thị sản phẩm nổi bật
- Trang danh mục: Liệt kê sản phẩm theo danh mục
- Trang chi tiết sản phẩm: Thông tin chi tiết, thêm vào giỏ
- Trang giỏ hàng: Quản lý sản phẩm đã chọn
- Trang thanh toán: Form nhập thông tin giao hàng

### 3.2. Giao diện quản trị
- Dashboard: Thống kê tổng quan
- Quản lý sản phẩm: Bảng danh sách với chức năng CRUD
- Quản lý danh mục: Bảng danh sách với chức năng CRUD
- Quản lý người dùng: Bảng danh sách với chức năng CRUD
- Quản lý đơn hàng: Xem và cập nhật trạng thái

---

# CÀI ĐẶT VÀ TRIỂN KHAI

## 1. Công nghệ sử dụng

- **Backend:** PHP 8.x, Laravel 11.x
- **Frontend:** HTML5, CSS3, Bootstrap 5, JavaScript
- **Database:** MySQL
- **Server:** Apache/Nginx
- **Version Control:** Git

## 2. Cấu trúc thư mục

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── Admin/          # Controllers quản trị
│   │   └── ...             # Controllers người dùng
│   └── Middleware/         # Middleware tùy chỉnh
├── Models/                 # Eloquent Models
database/
├── migrations/             # Database migrations
resources/
├── views/                  # Blade templates
│   ├── admin/             # Views quản trị
│   └── ...                # Views người dùng
routes/
├── web.php                # Web routes
```

## 3. Các chức năng chính đã triển khai

### 3.1. Hệ thống xác thực

```php
// Routes cho authentication
Route::get('/login', [LoginController::class, 'show'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);
```

### 3.2. Quản lý sản phẩm

```php
class AdminProductController extends Controller
{
    public function index() {
        $products = Product::paginate(15);
        return view('admin.products.index', ['products' => $products]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create($validated);
        return redirect()->route('admin.products.index')
                        ->with('success', 'Sản phẩm đã được thêm thành công!');
    }
}
```

### 3.3. Bảo mật quản trị

```php
class AdminCheck
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403, 'Bạn không có quyền truy cập trang này.');
        }

        return $next($request);
    }
}
```

### 3.4. Dashboard thống kê

```php
public function dashboard()
{
    $totalUsers = User::count();
    $totalProducts = Product::count();
    $totalCategories = Category::count();
    $totalOrders = Order::count();
    $totalRevenue = Order::sum('total_price');
    $recentOrders = Order::latest()->limit(10)->get();

    return view('admin.dashboard', [
        'totalUsers' => $totalUsers,
        'totalProducts' => $totalProducts,
        'totalCategories' => $totalCategories,
        'totalOrders' => $totalOrders,
        'totalRevenue' => $totalRevenue,
        'recentOrders' => $recentOrders,
    ]);
}
```

## 4. Giao diện người dùng

### 4.1. Trang chủ
- Slider sản phẩm nổi bật
- Danh mục sản phẩm
- Sản phẩm mới nhất
- Sản phẩm bán chạy

### 4.2. Trang quản trị
- Dashboard với các thống kê
- Bảng quản lý với phân trang
- Form thêm/sửa với validation
- Thông báo thành công/lỗi

## 5. Bảo mật và hiệu năng

### 5.1. Bảo mật
- Xác thực người dùng với Laravel Sanctum
- Phân quyền admin với middleware
- Validation dữ liệu đầu vào
- Bảo vệ CSRF
- Hash mật khẩu

### 5.2. Hiệu năng
- Eager loading để tránh N+1 queries
- Pagination cho danh sách lớn
- Database indexing
- Caching (nếu cần)

---

# KẾT QUẢ VÀ ĐÁNH GIÁ

## 1. Kết quả đạt được

### 1.1. Chức năng hoàn thành
- ✅ Hệ thống xác thực người dùng
- ✅ Quản lý sản phẩm CRUD
- ✅ Quản lý danh mục CRUD
- ✅ Quản lý người dùng CRUD
- ✅ Quản lý đơn hàng
- ✅ Giao diện admin với bảo mật
- ✅ Dashboard thống kê
- ✅ Giao diện người dùng thân thiện

### 1.2. Công nghệ áp dụng
- ✅ Laravel Framework (MVC, Eloquent, Blade)
- ✅ Bootstrap 5 cho giao diện
- ✅ MySQL database
- ✅ Git version control
- ✅ Responsive design

## 2. Đánh giá đồ án

### 2.1. Ưu điểm
- Giao diện đẹp, thân thiện với người dùng
- Code được tổ chức tốt, dễ bảo trì
- Bảo mật được đảm bảo
- Chức năng đầy đủ, đáp ứng yêu cầu

### 2.2. Nhược điểm
- Chưa tích hợp thanh toán thực tế
- Chưa có hệ thống đánh giá sản phẩm
- Chưa tối ưu SEO
- Chưa có unit test đầy đủ

### 2.3. Khó khăn gặp phải
- Thiết kế database relationship phức tạp
- Xử lý validation và error handling
- Tối ưu hiệu năng cho danh sách lớn
- Bảo mật phân quyền admin

### 2.4. Bài học kinh nghiệm
- Lập kế hoạch chi tiết trước khi coding
- Sử dụng Git để quản lý version
- Viết code clean và có comment
- Test kỹ trước khi deploy

## 3. Hướng phát triển

### 3.1. Phát triển ngắn hạn
- Tích hợp thanh toán online (VNPay, Momo)
- Thêm chức năng đánh giá sản phẩm
- Push notification cho đơn hàng
- Tối ưu SEO và performance

### 3.2. Phát triển dài hạn
- Mobile app
- Multi-language support
- AI recommendation system
- Big data analytics

---

# KẾT LUẬN

Qua quá trình thực hiện đồ án, tôi đã thành công xây dựng một hệ thống quản lý cửa hàng trực tuyến hoàn chỉnh sử dụng Laravel Framework. Dự án đã đáp ứng được các yêu cầu đề ra và đạt được mục tiêu học tập.

Trong quá trình thực hiện, tôi đã nắm vững các kiến thức về:
- Phát triển web với PHP và Laravel
- Thiết kế cơ sở dữ liệu
- Xây dựng giao diện người dùng
- Bảo mật ứng dụng web
- Quản lý dự án phần mềm

Dự án này không chỉ là sản phẩm hoàn chỉnh mà còn là nền tảng để tôi tiếp tục phát triển các dự án lớn hơn trong tương lai.

---

# TÀI LIỆU THAM KHẢO

1. Laravel Documentation: https://laravel.com/docs
2. Bootstrap Documentation: https://getbootstrap.com/docs
3. PHP Manual: https://www.php.net/manual
4. MySQL Documentation: https://dev.mysql.com/doc
5. "Laravel: Up & Running" - Matt Stauffer
6. "PHP & MySQL: Novice to Ninja" - Kevin Yank

---

# PHỤ LỤC

## A. Hướng dẫn cài đặt

### A.1. Yêu cầu hệ thống
- PHP >= 8.1
- Composer
- MySQL >= 5.7
- Node.js & NPM (cho frontend assets)

### A.2. Các bước cài đặt

1. Clone repository:
```bash
git clone [repository-url]
cd duckshop
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Cấu hình environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Cấu hình database trong .env:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=duckshop
DB_USERNAME=root
DB_PASSWORD=
```

5. Chạy migrations:
```bash
php artisan migrate
```

6. Seed database (tùy chọn):
```bash
php artisan db:seed
```

7. Tạo symbolic link cho storage:
```bash
php artisan storage:link
```

8. Chạy ứng dụng:
```bash
php artisan serve
```

## B. Screenshots

### B.1. Giao diện trang chủ

![Trang chủ](screenshots/homepage.png)

### B.2. Dashboard quản trị

![Dashboard](screenshots/dashboard.png)

### B.3. Quản lý sản phẩm

![Quản lý sản phẩm](screenshots/products.png)

## C. Source code quan trọng

### C.1. Model Product
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'price',
        'quantity',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }
}
```

### C.2. AdminProductController
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(15);
        return view('admin.products.index', ['products' => $products]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create($validated);
        return redirect()->route('admin.products.index')
                        ->with('success', 'Sản phẩm đã được thêm thành công!');
    }
}
```

---

*Kết thúc báo cáo đồ án*

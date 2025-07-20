# Cargo Express - Sistem Cargo dan Parcel

## Overview
Aplikasi Cargo Express telah diperbarui dengan fitur dual-layanan yang memungkinkan pengelolaan dua jenis pengiriman:

1. **Cargo Service** - Pengiriman dengan pilihan metode transportasi (laut, udara, darat)
2. **Parcel Service** - Pengiriman satuan dengan berat dalam kilogram

## Fitur yang Ditambahkan

### 1. Database Schema
- **Migration**: `2025_07_20_000000_add_service_type_to_orders_table.php`
  - `service_type` (enum: 'cargo', 'parcel')
  - `shipping_method` (enum: 'laut', 'udara', 'darat') - hanya untuk cargo
  - `weight_kg` (decimal) - hanya untuk parcel

### 2. Model Updates
- **Order Model**: Menambahkan field baru dan helper methods
  - `getServiceTypeOptions()` - untuk dropdown service type
  - `getShippingMethodOptions()` - untuk dropdown shipping method

### 3. Filament Admin Panel
- **OrderResource**: Diperbarui dengan form yang dinamis
  - Field `service_type` dengan pilihan cargo/parcel
  - Field `shipping_method` (hanya muncul untuk cargo)
  - Field `weight_kg` (hanya muncul untuk parcel)
  - Filter berdasarkan service type dan shipping method

### 4. Web Interface
- **Controller**: `OrderController` dengan 3 methods:
  - `index()` - Halaman utama dengan overview kedua layanan
  - `cargo()` - Halaman khusus cargo orders
  - `parcel()` - Halaman khusus parcel orders

- **Views**:
  - `orders/index.blade.php` - Dashboard utama dengan cards untuk cargo dan parcel
  - `orders/cargo.blade.php` - Halaman cargo dengan statistik shipping method
  - `orders/parcel.blade.php` - Halaman parcel dengan statistik berat

### 5. Routes
```php
Route::prefix('orders')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/cargo', [OrderController::class, 'cargo'])->name('orders.cargo');
    Route::get('/parcel', [OrderController::class, 'parcel'])->name('orders.parcel');
});
```

## Cara Penggunaan

### 1. Melalui Filament Admin Panel
1. Akses `/admin` untuk masuk ke admin panel
2. Pilih "Orders" dari menu
3. Klik "Create Order" untuk membuat order baru
4. Pilih service type:
   - **Cargo**: Pilih shipping method (laut/udara/darat)
   - **Parcel**: Masukkan berat dalam kg

### 2. Melalui Web Interface
1. Akses `/orders` untuk melihat dashboard utama
2. Klik "Lihat Cargo Orders" untuk melihat semua cargo orders
3. Klik "Lihat Parcel Orders" untuk melihat semua parcel orders

## Perbedaan Layanan

### Cargo Service
- **Metode Pengiriman**: Laut, Udara, Darat
- **Karakteristik**: Untuk pengiriman besar/komersial
- **Field Khusus**: `shipping_method`
- **UI**: Menampilkan statistik berdasarkan metode pengiriman

### Parcel Service
- **Metode Pengiriman**: Satuan (tidak ada pilihan)
- **Karakteristik**: Untuk pengiriman kecil/personal
- **Field Khusus**: `weight_kg`
- **UI**: Menampilkan statistik berdasarkan berat

## Data Sample
Seeder telah dibuat dengan 6 sample orders:
- 3 Cargo orders (laut, udara, darat)
- 3 Parcel orders (dengan berat berbeda)

## Teknologi yang Digunakan
- **Backend**: Laravel 10
- **Admin Panel**: Filament 3
- **Frontend**: Tailwind CSS + Font Awesome
- **Database**: MySQL/PostgreSQL

## File yang Dimodifikasi/Dibuat

### Database
- `database/migrations/2025_07_20_000000_add_service_type_to_orders_table.php`
- `database/seeders/OrderSeeder.php`
- `database/seeders/DatabaseSeeder.php`

### Models
- `app/Models/Order.php`

### Controllers
- `app/Http/Controllers/OrderController.php`

### Resources
- `app/Filament/Resources/OrderResource.php`

### Views
- `resources/views/orders/index.blade.php`
- `resources/views/orders/cargo.blade.php`
- `resources/views/orders/parcel.blade.php`

### Routes
- `routes/web.php`

## Cara Menjalankan
1. Jalankan migration: `php artisan migrate`
2. Jalankan seeder: `php artisan db:seed`
3. Jalankan server: `php artisan serve`
4. Akses admin panel: `http://localhost:8000/admin`
5. Akses web interface: `http://localhost:8000/orders` 
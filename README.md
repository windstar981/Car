#Chạy lại migrate database

```php
    php artisan migrate:fresh 
```

##Chạy seeder
Chạy file seeder `ProductsTableSeeder` để lấy dữ liệu từ json

```php
    php artisan module:seed BuyCar --class=ProductsTableSeeder
```

Chạy file seeder 'BrandTableSeeder' để fake data

```php
    php artisan module:seed BuyCar --class=BrandsTableSeeder
```

Chạy command nhập link API để get dữ liệu, bỏ qua nhập url nhấn enter

```php
     php artisan product:get-data-api
```


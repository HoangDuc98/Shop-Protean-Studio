
## Hướng dẫn set up local:

1: clone dự án về máy 

_**`git clone https://github.com/HoangDuc98/Shop-Protean-Studio`**_

2: 

_**`cd Shop-Protean-Studio/laravel-shop/`**_

_**`composer update`**_


_**`cp .env.example .env`**_

3: mở file .env, tạo DB và điền thông tin ở các dòng sau:

**_`DB_DATABASE`=_**

**_`DB_USERNAME`=_**

**_`DB_PASSWORD`=_**

4: thêm key 
app

**_`php artisan key:generate`_**

5: run migration và serve

**_`php artisan migrate`_**

****_`php artisan serve`_****

**_Nếu muốn có dữ liệu demo, hãy import file shop-protean-studio.sql vào db vừa tạo_**


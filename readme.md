composer global require laravel/installer

C:\Users\saeki\AppData\Roaming\Composer\vendor\bin

laravel help --version

laravel new .
(composer create-project laravel/laravel quick-laravel --prefer-dist)

php artisan serve

DocumentRoot "C:/xampp/htdocs/quick_laravel/public"
<Directory "C:/xampp/htdocs/quick_laravel/public">

php artisan make:controller HelloController


CREATE DATABASE quick_laravel CHARACTER SET utf8;
GRANT ALL PRIVILEGES ON quick_laravel.* TO quickusr@localhost IDENTIFIED BY 'quickpass';
USE quick_laravel;
source C:\xampp\htdocs\quick_laravel\quick.sql


php artisan make:model Book
php artisan make:controller ViewController
php artisan make:controller RouteController
php artisan make:controller Main\HogeController

php artisan make:controller ArticleController --resource --model=Article

php artisan make:controller CtrlController

php artisan make:middleware LogMiddleware

php artisan make:controller StateController

php artisan session:table
php artisan migrate

php artisan make:migration create_books_table

DROP TABLE books;
php artisan migrate
php artisan migrate:rollback

migrate:reset： すべて の マイグレーション を ロール バック
migrate:refresh： すべて の マイグレーション を ロール バック し た 上 で、 再度 マイグレーション を 実行
migrate:refresh --seed： すべて の マイグレーション を ロール バック し た 上で、 再度 マイグレーション を 実行（ シード を 投入）

php artisan make:seeder BooksTableSeeder
php artisan db:seed --class=BooksTableSeeder

php artisan make:controller RecordController


php artisan make:migration create_reviews_table
php artisan make:model Review

php artisan make:seeder ReviewsTableSeeder
php artisan db:seed --class=ReviewsTableSeeder

php artisan make:controller SaveController
<h1 align="center">API Aplikasi Android Restoran</h1>
<p align="center">Laravel API untuk aplikasi android restoran</p>

## Cara pakek
1. Clone repository, letakkan di htdocs
```
git clone https://github.com/jhonarendra/api-android-restoran.git
```
2. Pindah directory ke folder api, lalu install composer
```
composer install
```
3. Buat file .env
```
echo > .env
```
4. Buka file .env.example, copy semua isinya ke file .env
5. Bikin database baru
6. Isi konfigurasi database di file .env, contohnya
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_fifteen_resto
DB_USERNAME=root
DB_PASSWORD=
```
7. Bikin key
```
php artisan key:generate
```
8. Migrate database
```
php artisan migrate
```
9. Insert data dummy ke db
```
php artisan db:seed
```

## Jalankan API di Android
1. Buka aplikasi restoran di android
2. Jalankan server api
```
php artisan serve --host 0.0.0.0
```
3. Isikan URL api ke aplikasi android
4. Sambungkan hp dan laptop
5. Run aplikasi android studio

## Screenshot
![](https://raw.githubusercontent.com/jhonarendra/api-android-restoran/master/screenshot/img1.png)
![](https://raw.githubusercontent.com/jhonarendra/api-android-restoran/master/screenshot/img2.png)
![](https://raw.githubusercontent.com/jhonarendra/api-android-restoran/master/screenshot/img3.png)

## Progmob 15
|Nim	    |Nama				|
|-----------|-----------------------------------|
|1605551074 |OKA WISNU MAHAPUTRA		|
|1605551082 |NI PUTU VERANIA LOIS SINTIA	|
|1605551063 |MADE RIZKY KRISNA ADI		|
|1605551067 |I PUTU AGASTYA HARTA PRATAMA SR	|
|1605551016 |Gede Haris Premana Wibawa		|
|1605551100 |MARTIN WILLIAM BUTAR BUTAR		|
|1605551049 |Putu Jhonarendra			|

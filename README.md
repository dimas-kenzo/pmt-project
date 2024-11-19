
## Installasi Project

- Copy file `.env.example` ,ubah menjadi `.env`
- Jalankan command `composer install` di terminal
- Lakukan generate key dengan perintah `php artisan key:generate`
- Install node modules `npm install`
- Setup database di .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=build_of_materials
DB_USERNAME=root
DB_PASSWORD=
```

ubah sesuai database anda

- Jalankan aplikasi `php artisan serve`

  ```shellscript
  
  ```
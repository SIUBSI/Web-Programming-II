# Materi Pertemuan 3 pada matakuliah Web Programming II

## Berikut daftar perubahan dari **pertemuan 2** ke **pertemuan 3** :

- Menambahkan file controller `Web.php` pada `application/controllers`.

- Menambahkan 3 file view `v_header.php`, `v_index.php`, `v_footer.php` pada `application/views`.

- Menambahkan file css `stylebuku.css` dan simpan pada `pustaka-booking/assets/css`.

Akses file melalui url berikut [http://localhost/Webprog-II/P04/pustaka-booking/web](http://localhost/Webprog-II/P04/pustaka-booking/web)

- Menambahkan 1 file view `v_about.php` pada `application/views`.

Akses file melalui url berikut [http://localhost/Webprog-II/P04/pustaka-booking/web/about](http://localhost/Webprog-II/P04/pustaka-booking/web/about)


## Tahap Konfigurasi

- Menyeting base_url() melalui file `config.php` pada `application/config/` 

Ubah
```php
$config['base_url'] = '';
```

Menjadi
```php
$config['base_url'] = 'http://localhost/Webprog-II/P04/pustaka-booking/';

atau

$config['base_url'] = 'http://localhost/pustaka-booking/';
```

- Menyeting base_url() melalui autoload.php
Buka file `autoload.php` pada `application/config` kemudian cari kode 
```php
$autoload['helper'] = array();
```

Ubah menjadi
```php
$autoload['helper'] = array('url');
```
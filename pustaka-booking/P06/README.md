# Materi Pertemuan 6 pada matakuliah Web Programming II

## Berikut daftar perubahan dari **pertemuan 5** ke **pertemuan 6** :

- Memuat library :
Cari sintaks
```php
$autoload['libraries'] = array();
```
Ubah menjadi
```php
$autoload['libraries'] = array('form_validation', 'session', 'database');
```
- Merancang & Membuat database [Unduh file sql disini](https://github.com/SIUBSI/Web-Programming-II/blob/main/pustaka-booking/P06/pustaka.sql)
- Membuat koneksi database CI dengan MySQL
Kunjungi file `database.php` pada `application/config` dan cari sintaks berikut
```php
$active_group = 'default';
$query_builder = TRUE;
$db['default'] = array(
 'dsn' => '',
 'hostname' => 'localhost',
 'username' => '',
 'password' => '',
 'database' => '',
 'dbdriver' => 'mysqli',
 'dbprefix' => '',
 'pconnect' => FALSE,
 'db_debug' => (ENVIRONMENT !== 'production'),
 'cache_on' => FALSE,
 'cachedir' => '',
 'char_set' => 'utf8',
 'dbcollat' => 'utf8_general_ci',
 'swap_pre' => '',
 'encrypt' => FALSE,
 'compress' => FALSE,
 'stricton' => FALSE,
 'failover' => array(),
 'save_queries' => TRUE
);
```

Isi `username`, `password`, `database`, jika mysql nya tidak memiliki password, bisa di kosongkan saja.
Menjadi seperti ini
```php
'username' => 'root',
'password' => '',
'database' => 'pustaka',
```
- Membuat Model untuk CRUD, Buat file `ModelUser.php` dan `ModelBuku.php` pada `application/models`
- Mengatur autoload Model, buka file `autoload.php` pada `application/config` dan cari sintaks berikut
```php
$autoload['model'] = array();
```
Kemudian ubah mejadi
```php
$autoload['model'] = array('ModelUser', 'ModelBuku');
```
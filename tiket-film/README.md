# Tugas Pertemuan 5 Matakuliah Web Programming II

- [x] Mahasiswa membuat repository baru di Github dengan format nama WP2_Perpus_NamaMahasiswa. 

- [x] Mahasiswa mengerjakan materi yang ada di pertemuan 6 yaitu persiapan dalam membuat aplikasi pustaka booking yang berisi `setting base_url`, `membuat database`, `mengatur koneksi database`, `membuat model user dan model buku`.

[application/config/config.php](https://github.com/reighpuy/WP2_Perpus_MuhamadKhadaffy/blob/main/application/config/config.php)
```php
// application/config/config.php

// line 26
$config['base_url'] = 'http://localhost/pustaka-booking/';
```

[application/config/database.php](https://github.com/reighpuy/WP2_Perpus_MuhamadKhadaffy/blob/main/application/config/database.php)
```php
// application/config/database.php

// line 76
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'pustaka',
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

[application/models/ModelUser.php](https://github.com/reighpuy/WP2_Perpus_MuhamadKhadaffy/blob/main/application/models/ModelUser.php)
[application/models/ModelBuku.php](https://github.com/reighpuy/WP2_Perpus_MuhamadKhadaffy/blob/main/application/models/ModelBuku.php)
[database/pustaka.sql](https://github.com/reighpuy/WP2_Perpus_MuhamadKhadaffy/blob/main/database/pustaka.sql)



- [x] Upload (push) file-file project latihan anda ke repository Github.
# Materi Pertemuan 5 pada matakuliah Web Programming II

## Berikut daftar perubahan dari **pertemuan 4** ke **pertemuan 5** :

- Membuat Library `Form_validation`
Buka file `autoload.php` pada `application/config` lalu cari
```php
$autoload[‘libraries’] = array();
```

Kemudian ubah menjadi
```php
$autoload[‘libraries’] = array('form_validation');
```

- Mengubah isi file `Matakuliah.php` pada function **cetak** menjadi seperti dibawah
```php
public function cetak() {
 
   $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', ['required' => 'Kode Matakuliah Harus diisi','min_lenght' => 'Kode terlalu pendek']);
   $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', ['required' => 'Nama Matakuliah Harus diisi','min_lenght' => 'Nama terlalu pendek']);

   if ($this->form_validation->run() != true) {
      $this->load->view('view-form-matakuliah');
   } else {
      $data = [
      'kode' => $this->input->post('kode'),
      'nama' => $this->input->post('nama'),
      'sks' => $this->input->post('sks')
      ];
      $this->load->view('view-data-matakuliah', $data);
   }
 }
```
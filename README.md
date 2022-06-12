|   DEVI SILMA YUNIAR   | 312010458 |
|-----------------------|-----------|
|       PERTEMUAN 13    |PRAKTIMUM12|

## PRAKTIKUM 12 : FRAMEWORK LANJUTAN (CRUD)

## Intruksi praktikum
- Persiapkan text editor misalnya VSCode.
- Buka kembali folder dengan nama lab11_php_ci pada docroot webserver (htdocs)
- Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.

## LANGKAH-LANGKAH PRAKTIKUM

## 1. PERSIAPAN
 Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP. Membuat Database: Studi Kasus Data Artikel.

 ## 2. MEMBUAT DATABASE
 ![database](img/database.png)

 ## 3. MEMBUAT TABLE ARTIKEL
 ![table_artikel](img/table_artikel.png)

 ## 3. KONFIGURASI KONEKSI DATABASE
 Konfigurasi Koneksi Database, konfigurasi untuk menghubungkan dengan database, setver. Konfigurasi dapat dilakukan dengan dua cara yaitu :
1. App/config/database.php
![config](img/config.png)

2. Pada bagian  file.env
![file](img/database_env.png)

## 4.MEMBUAT MODEL

Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori app/Models dengan nama ArtikelModel.php
![artikelmodel](img/artikelmodel.png)

## 5. MEMBUAT CONTROLLER
Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.
![controller](img/controller.png)

## 6. MEMBUAT VIEW
Buat direktori baru dengan nama artikel.
![foldel](img/folder_artikel.png)

Pada direktori app/views, kemudian buat file baru dengan nama index.php
![index](img/index.php.png)

selanjutnya buka browsur, dengan mengakses URL http://localhost:8080/artikel
![brow](img/brow_artikel.png)

Belum ada data yang ditampilkan. maka tambahkan beberapa data beberapa data pada database agar bisa tampil.
![insert](img/insert.png)

Refresh kembali browser, sehingga akan tampilkan hasilnya.

![artikel](img/artikel.png)

## MEMBUAT TAMPILAN DETAIL ARTIKEL
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artikel dengan nama view().

![app_controller](img/App.controller.png)

## MEMBUAT ROUTING UNTUK ARTIKEL DETAIL
Buka kembali file app/config/routtes.php, kemudian tambahkan routing untuk artikel detail.
![routing](img/routing.png)

Refresh kembali browsser, lalu pilih satu artikel sehingga akan ditampilkan hasilnya.
![artikelpertama](img/atrikel.pertama.png)

## MEMBUAT MENU ADMIN
Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index().
![artikel](img/artikel.php.png)

Selanjunya pada bagian views artikel buat file dengan nama admin_index.php
![admin_index](img/admin.php.png)

Tambahkan routing untuk menu admin seperti berikut :
![routing](img/routers.png)

Akses menu admin dengan url http://localhost:8080/admin/artikel

![admin.artikel](img/admin.artikel.png)



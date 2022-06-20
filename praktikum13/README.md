# PRAKTIKUM 13 Framework lanjutan (Modul Login)

Nama : Devi Silma Yuniar

NIM  : 312010458

Kelas : TI.20.A2

## langkah-langkah praktikum

## persiapan
Untuk memulai membuat modul Login, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP.

![xampp](img/1.png)

## 1.) MEMBUAT TABLE USER
Masuk kedalam databse lab_ci4 dan buat table baru seperti dibawah ini :

![table](img/2.png)

## 2.) MEMBUAT MODEL USER
Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada direktori app/Models dengan nama UserModel.php

![model](img/3.png)

## 3.) MEMBUAT CONTROLLER USER
Buat Controller baru dengan nama User.php pada direktori app/Controllers. Kemudian tambahkan method index() untuk menampilkan daftar user, dan method login() untuk proses login.

![user](img/4.png)

![user2](img/5.png)

## 4.) MEMBUAT VIEW LOGIN
Buat direktori baru dengan nama user pada direktori app/views, kemudian buat file baru dengan nama login.php.

![login](img/6.png)

## 5.) MEMBUAT DATABASE SEEDER
Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:

![seeder](img/7.png)

Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori /app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:

![seder.php](img/8.png)

Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori /app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:

![cli](img/9.png)

## 6.) UJI COBA LOGIN
Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori /app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:

![login](img/10.png)

## 7.) MENAMBAHKAN AUTH FILTER
Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama Auth.php pada direktori app/Filters.

![11](img/11.png)

Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:

![12](img/12.png)

Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya.

![13](img/13.png)

## 8.) PERCOBAAN AKSES MENU ADMIN
Buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut diakses maka, akan dimuculkan halaman login.

## 9.) FUNGSI LOGOUT
Tambahkan method logout pada Controller User seperti berikut:

![14](img/14.png)

## PERTANYAAN DAN TUGAS
Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi.

## Membuat tombol home pada bagian login
pada bagian views\user\login.php tembahkan tombol untuk kembali ketampilan awal.

![15](img/15.png)

tampilan

![16](img/16.png)

## Membuat tombol logout
memberikan tombol logout pada bagian admin

![16](img/17.png)

tampilan

![trakhir](img/18.png)

--------------------------------------------------------------------------------------------------------------------
                                            SEKIAN DAN TERIMAKASIH

                                                @devisilma26                                               
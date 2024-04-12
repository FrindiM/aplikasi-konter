### Aplikasi Penjualan Handphone Berbasis Web

Aplikasi Penjualan Handphone Berbasis Web adalah sebuah sistem informasi yang dirancang dan dibangun untuk mempermudah dalam melakukan transaksi jual beli handphone, komputer atau laptop, dan peralatan elektronik lainnya. Karena aplikasi ini berbasis website, aplikasi ini dapat diakses dimanapun dan kapanpun menggunakan browser dan jaringan internet.

#### Fitur

- **Multi Role User**: Aplikasi ini menerapkan multi role user, setiap user memiliki rolenya masing-masing, seperti pembeli dan administrator. Tampilan dashboard akan berbeda sesuai dengan role yang dimiliki oleh user tersebut.
  
- **Panel Admin**: Panel admin digunakan untuk hal-hal penting seperti input data handphone, smartphone, sparepart, komentar, bukti transfer, dll. Panel ini diakses hanya oleh admin dan dilindungi dengan sistem login dan role permission.

##### Detail Kelola Admin

- Data Produk (Handphone / Smartphone, Audio, dan Komputer/Laptop)
- Data Sparepart Produk
- Data Komentar
- Data Transaksi
- Data Bukti Transfer
- Data Kategori

#### System Requirement

- PHP versi 5.5
- Database MYSQL

#### Panduan Instalasi

1. Download dan install aplikasi XAMPP versi 1.8.3, lalu jalankan server Apache dan MYSQL.
2. Download source code yang sudah disediakan dan extract.
3. Buka browser, pergi ke alamat `localhost/phpMyAdmin`.
4. Buatlah database baru dengan nama `db_sparepart`.
5. Import database aplikasi ke dalam database yang baru saja dibuat (`db_sparepart`).
6. Copy atau pindahkan folder aplikasi `penjual_konter` ke folder `htdocs` pada direktori XAMPP.
7. Untuk login sebagai admin, kunjungi `localhost/penjual_konter/function/index.php`.
8. Login sebagai administrator dengan username `admin` dan password `admin`.

---
Dalam penggunaan aplikasi ini, kami harapkan Anda menemukan kemudahan dan kenyamanan. Jika Anda menemui masalah atau memiliki saran untuk pengembangan lebih lanjut, jangan ragu untuk menghubungi kami. Terima kasih atas penggunaan aplikasi ini.
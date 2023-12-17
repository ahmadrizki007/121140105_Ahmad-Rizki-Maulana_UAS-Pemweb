Nama : Ahmad Rizki Maulana
NIM : 121140105
Kelas : Pemrograman Web RB

Bagian 1: Client-side Programming
![Screenshot 2023-12-18 004900](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/e39b898e-80ae-46fd-ab29-130f8322dc0a)
![Screenshot 2023-12-18 005024](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/737fc7ad-6385-4510-8d0f-4d284c821634)
1.1 Form Input dan Menampilkan Data
![Screenshot 2023-12-18 002448](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/32041028-f809-4320-b52e-30f12870a284)
Kode ini merupakan bagian dari server-side programming untuk Bagian 1.1: Form Input dan Menampilkan Data. Dalam konteks ini, formulir web mungkin memiliki elemen-elemen input seperti nama, email, umur, subscribe (checkbox), dan jenis kelamin (radio). Data yang dimasukkan melalui formulir ini akan ditangani oleh objek $classhandle untuk ditambahkan atau dihapus dari database. Informasi data dari database kemudian ditampilkan di halaman web.

1.2 Event Handling
a. Form Submission Handling:
![Screenshot 2023-12-18 003550](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/cad85766-af24-401a-806d-5894fa7514e1)
Ini adalah penanganan ketika formulir dengan tombol submit (dengan nama 'submit') ditekan. Pada event ini, metode addData dari objek $classhandle dipanggil untuk menambahkan data ke database.
b. Form Deletion Handling:
![Screenshot 2023-12-18 003805](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/3a39ff64-17b8-4518-8d21-d4931687150b)
Ini adalah penanganan ketika formulir dengan tombol submit (dengan nama 'hapus') ditekan. Pada event ini, metode removeData dari objek $classhandle dipanggil untuk menghapus data dari database.

Bagian 2: Server-side Programming 
2.1 Script PHP untuk Mengelola Dat
![Screenshot 2023-12-18 004105](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/093b5b6f-cc58-4cd4-b4b7-0df82c5f13b5)
Dalam bagian ini, terdapat pemrosesan data dari formulir pada sisi server menggunakan PHP. Ketika formulir disubmit, data dikirim ke server dan diolah menggunakan objek Classhandle. Metode addData dan removeData digunakan untuk menambah dan menghapus data dari database, dan hasilnya disimpan dalam variabel $info untuk ditampilkan di halaman web.

2.2 Objek PHP Berbasis OOP
![Screenshot 2023-12-18 004223](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/ea5c7426-e875-499b-843c-2ce6c8a7611b)
Dalam bagian ini, terdapat definisi kelas Classhandle yang mencakup metode addData dan removeData. Kedua metode ini digunakan untuk menambahkan data ke database dan menghapus data dari database, secara berurutan. Kode tersebut menggambarkan pendekatan berbasis objek dalam pemrosesan data pada sisi server menggunakan PHP.

Bagian 3: Database Management
3.1 Tabel pada Database MySQL
![Screenshot 2023-12-18 004357](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/7d9b7b40-963b-4d74-9861-bc550bf8725f)
![Screenshot 2023-12-18 005129](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/56f911ab-7a2a-4f73-b304-e288075ff879)
Tampilan Tabel DATABASE

3.3 Manipulasi Data pada Tabel Database
![Screenshot 2023-12-18 004506](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/c9b35970-4d5e-4009-8c40-a977ebbba6da)

Dalam metode getData(), terdapat penggunaan query SQL yang mengambil semua data dari tabel identitas pada database. Hasil query kemudian diambil dan disusun dalam bentuk array yang kemudian dikembalikan sebagai hasil dari metode. Kode ini merupakan bagian dari server-side programming yang berkaitan dengan Bagian 3: Database Management, khususnya Bagian 3.3 yang melibatkan pengambilan data dari tabel database.

4.1 State Management menggunakan Session
![Screenshot 2023-12-18 004631](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/2a17f002-2bb0-4ba2-b34b-0ba525a53baf)
Pada potongan kode tersebut, session_start() digunakan untuk memulai atau melanjutkan sesi. Ketika pengguna berhasil login ($classhandle->validateUser), informasi pengguna (dalam hal ini, nama pengguna) disimpan dalam $_SESSION['user']. Ketika pengguna logout (isset($_GET['logout'])), session diakhiri dengan session_destroy().

Bonus: Hosting Aplikasi Web
![Screenshot 2023-12-18 005900](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/04d0093d-36a6-4f60-8567-83ca6eec7cd9)
a. Langkah-langkah Meng-host Aplikasi Web dengan InfiniteFree:

Buat Akun InfiniteFree: • Kunjungi situs resmi InfiniteFree dan buat akun pengguna. • Pilih rencana hosting yang sesuai dengan kebutuhan aplikasi web Anda.
Persiapkan Aplikasi Web: Pastikan aplikasi web Anda sudah siap untuk di-hosting. Termasuk semua file, konfigurasi, dan struktur database jika diperlukan.
Upload File ke Server: • Gunakan fitur file manager dari InfiniteFree atau sFTP untuk meng-upload file aplikasi web ke server hosting Anda.
Konfigurasi Database: Jika aplikasi Anda menggunakan database, pastikan untuk mengonfigurasi database pada panel kontrol InfiniteFree dan sesuaikan konfigurasi koneksi di aplikasi web Anda.
Verifikasi Konfigurasi: Pastikan semua file dan konfigurasi telah diatur dengan benar. Uji aplikasi web Anda untuk memastikan tidak ada masalah setelah di-hosting.
b. Pemilihan Penyedia Hosting Web yang Cocok: Saya akan mempertimbangkan InfiniteFree sebagai penyedia hosting web untuk aplikasi web ini karena:

Gratis: InfiniteFree menawarkan rencana hosting gratis yang dapat mendukung aplikasi web sederhana.
Cukup untuk Proyek Kecil: Cocok untuk proyek kecil atau sebagai lingkungan pengembangan.
Mudah Digunakan: Panel kontrol yang sederhana memudahkan penggunaan, terutama untuk pemula.
c. Memastikan Keamanan Aplikasi Web:

Update Regular: Pastikan seluruh komponen (sistem operasi, web server, aplikasi) selalu diperbarui untuk mengatasi kerentanan keamanan yang telah diperbaiki.
Firewall Configuration: Terapkan konfigurasi firewall untuk membatasi akses yang tidak diinginkan ke server.
Enkripsi Koneksi: Pastikan koneksi antara pengguna dan server dienkripsi menggunakan protokol HTTPS.
Penanganan Input: Validasi dan bersihkan semua input pengguna untuk mencegah serangan injeksi.
d. Konfigurasi Server:

Web Server (e.g., Apache, Nginx): • Sesuaikan konfigurasi server web untuk mendukung aplikasi PHP. • Atur direktori root server untuk menunjuk ke folder aplikasi.
Database Server (e.g., MySQL): • Konfigurasikan server database sesuai dengan kebutuhan aplikasi. • Pastikan koneksi aman dan terbatas.
Backup Rutin: • Atur rutinitas backup untuk data penting dan konfigurasi aplikasi.
Monitoring: Terapkan sistem pemantauan untuk memantau kinerja server dan mendeteksi potensi masalah.

LINK WEBSITE : http://ahmad121140105.wuaze.com

TAMPILAN LOGIN
![Screenshot 2023-12-18 010037](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/a7c6012d-70ec-4e68-a140-5314790d0fa4)
TAMPILAN REGISTRASI
![Screenshot 2023-12-18 010113](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/9d93fc68-bb59-44fc-9c3d-6fee4ae9c6f4)
TAMPILAN HOME
![WhatsApp Image 2023-12-18 at 00 56 13_0db2eb5e](https://github.com/ahmadrizki007/121140105_Ahmad-Rizki-Maulana_UAS-Pemweb/assets/91040803/5548656e-ed4f-42b0-9db6-bd9f93817d6d)









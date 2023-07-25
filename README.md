# Test Skill Fullstack Developer - PT. Data Andalan Utama

Proyek test skill sebagai Full Stack Developer di PT. Data Andalan Utama. Proyek ini merupakan pembuatan sebuah web app yang terdiri dari backend menggunakan framework Laravel (versi terbaru), frontend menggunakan framework JavaScript (dengan preferensi Vue), dan database MySQL sebagai DBMS.

## Deskripsi

Proyek ini bertujuan untuk membuat sebuah web app sederhana yang memiliki beberapa fitur utama, seperti halaman login, halaman register, halaman produk, dan halaman transaksi. Web app ini memanfaatkan API untuk menambahkan data transaksi, dan juga dilengkapi dengan fungsi pagination dan search untuk mempermudah pengguna dalam mencari data produk dan transaksi.

## Fitur

1. Halaman Login:

    - Pengguna dapat masuk ke dalam sistem dengan menggunakan akun yang sudah terdaftar.
    - Jika pengguna belum memiliki akun, mereka dapat mengakses halaman register.

2. Halaman Register:

    - Pengguna dapat membuat akun baru dengan mengisi informasi yang diperlukan.

3. Halaman Produk:

    - Pengguna yang telah login dapat mengakses halaman ini.
    - Halaman ini menampilkan seluruh data produk yang ada dengan menggunakan fungsi pagination untuk membatasi jumlah tampilan per halaman.
    - Terdapat fitur pencarian untuk memudahkan pengguna dalam mencari produk berdasarkan nama atau deskripsi.
    - Pengguna dapat menambahkan produk baru dengan menggunakan fitur "create".
    - Pengguna juga dapat mengubah informasi produk yang sudah ada dengan fitur "update".
    - Terdapat fitur "delete" untuk menghapus produk dari database.

4. Halaman Transaksi:

    - Pengguna yang telah login dapat mengakses halaman ini.
    - Halaman ini menampilkan seluruh data transaksi yang ada dengan menggunakan fungsi pagination untuk membatasi jumlah tampilan per halaman.
    - Terdapat fitur pencarian untuk memudahkan pengguna dalam mencari transaksi berdasarkan reference number atau informasi lainnya.

5. API untuk Menambahkan Data Transaksi:
    - API ini dapat digunakan untuk menambahkan data transaksi baru dengan menyediakan parameter "quantity" dan "product_id".
    - Nilai "price" akan diambil dari database berdasarkan "product_id" yang diberikan.
    - Nilai "payment_amount" akan dihitung berdasarkan "quantity" dan "price".
    - Setelah data transaksi berhasil ditambahkan, API akan memberikan "reference_no" sebagai respons.

## Prerequisite

Sebelum menjalankan proyek ini, pastikan bahwa:

1. [PHP](https://www.php.net/) (Version 8.1 atau lebih baru).
2. [MySQL](https://www.mysql.com/) (Version 8.0 atau lebih baru).
3. [Composer](https://getcomposer.org/) (Version 2.5.8 atau lebih baru)
4. [Node.js](https://nodejs.org/) (Version 18.8.0 atau lebih baru)
5. [NPM](https://www.npmjs.com/) (Version 8.1.0 atau lebih baru)

## Instalasi

Berikut adalah langkah-langkah instalasi untuk menjalankan web app ini di lingkungan lokal Anda:

1. Clone repository ini ke dalam direktori proyek Anda:

```bash
git https://github.com/rizky98ibrahim/test-data-andalan-utama.git
```

2. Masuk ke direktori proyek:

```bash
cd test-data-andalan-utama
```

3. Instal dependency PHP menggunakan Composer:

```bash
composer install
```

4. Instal dependency frontend menggunakan Node.js:

```bash
npm install
```

5. Konfigurasi Database:

    - Buat database baru di MySQL sesuai dengan nama yang diinginkan.
    - Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database di dalamnya.

6. Jalankan migrasi dan seed untuk mengisi tabel dengan data awal:

```bash
php artisan migrate --seed
```

7. Jalankan server lokal:

```bash
php artisan serve
```

8. Akses web app di browser Anda melalui URL berikut:

```
http://localhost:8000
```

## TODO

Berikut adalah beberapa fitur yang di perlukan untuk menyelesaikan proyek ini:

-   [x] Buat migrasi untuk tabel Users, Transactions, dan Products.
-   [x] Buat model untuk masing-masing tabel.
-   [ ] Buat controller untuk mengatur logika aplikasi di backend.
-   [ ] Implementasikan fungsi-fungsi seperti login, register, CRUD untuk produk dan transaksi di controller.
-   [ ] Buat API endpoint untuk menambahkan data transaksi berdasarkan ketentuan yang diberikan.
-   [ ] Buat halaman login, register, produk, dan transaksi di frontend dengan Vue.js.
-   [ ] Hubungkan frontend dengan backend menggunakan Axios untuk berkomunikasi dengan API.
-   [ ] Lakukan validasi input di frontend dan backend.
-   [ ] Implementasikan mekanisme otentikasi untuk melindungi halaman produk dan transaksi.
-   [ ] Tambahkan fitur pagination dan search untuk halaman produk dan transaksi.
-   [ ] Buat halaman detail produk.
-   [ ] Tambahkan fitur upload gambar produk.
-   [ ] Tambahkan fitur notifikasi atau alert untuk memberi feedback kepada pengguna.
-   [ ] Lakukan pengujian dan testing untuk memastikan aplikasi berjalan dengan baik.

## Kontak

Jika Anda memiliki pertanyaan atau ingin berdiskusi lebih lanjut, silakan hubungi saya melalui kontak berikut:

[![WhatsApp](https://img.shields.io/badge/WhatsApp-25D366?style=for-the-badge&logo=whatsapp&logoColor=white)](https://wa.me/6287808740020)
[![Gmail](https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:rizky98ibrahim@gmail.com)
[![Twitter](https://img.shields.io/badge/Twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white)](https://twitter.com/rizky98ibrahim)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/rizky98ibrahim/)
[![Instagram](https://img.shields.io/badge/Instagram-E4405F?style=for-the-badge&logo=instagram&logoColor=white)](https://instagram.com/rizky98ibrahim)

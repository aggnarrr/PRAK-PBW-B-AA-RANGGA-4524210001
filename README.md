# Laporan Tugas Praktikum Pemrograman Berbasis Web

**Nama:** AA RANGGA  
**NPM:** 4524210001  
**Program Studi:** Teknik Informatika

## Tujuan Tugas

Laporan ini mendokumentasikan pengerjaan contoh pada Pertemuan 1 dan Pertemuan 2, modifikasi yang dibuat, bagian kode penting, bukti tampilan sebelum dan sesudah modifikasi, serta error yang pernah ditemukan dan cara memperbaikinya.

## Struktur Proyek

| Pertemuan | Contoh awal | Hasil modifikasi |
| --- | --- | --- |
| 1 | `p1/Latihan/biodata.php`, `p1/Latihan/kalkulator.php` | `p1/Tugas/biodata-modifikasi.php`, `p1/Tugas/kalkulator-modifikasi.php` |
| 2 | `p2/Latihan/identitas.php`, `p2/Latihan/hitung.php` | `p2/Tugas/identitas-modifikasi.php`, `p2/Tugas/hitung-modifikasi.php` |

## 1. Menjalankan Seluruh Contoh

Seluruh file PHP pada folder **Latihan** dan **Tugas** telah diperiksa sintaksnya menggunakan `php -l` dan tidak memiliki error sintaks. File dapat dijalankan melalui XAMPP dengan membuka alamat berikut pada browser.

| File | Alamat localhost |
| --- | --- |
| Biodata awal | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p1/Latihan/biodata.php` |
| Kalkulator awal | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p1/Latihan/kalkulator.php` |
| Biodata modifikasi | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p1/Tugas/biodata-modifikasi.php` |
| Kalkulator modifikasi | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p1/Tugas/kalkulator-modifikasi.php` |
| Identitas awal | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p2/Latihan/identitas.php` |
| Perhitungan awal | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p2/Latihan/hitung.php` |
| Identitas modifikasi | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p2/Tugas/identitas-modifikasi.php` |
| Perhitungan modifikasi | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p2/Tugas/hitung-modifikasi.php` |

## 2. Modifikasi Bermakna

### Pertemuan 1

1. **Biodata:** ditambahkan kondisi predikat **Dengan Pujian (Cum Laude)** untuk IPK minimal 3,75, data mahasiswa diperbarui, dan tampilan diubah menjadi kartu dengan CSS.
2. **Kalkulator:** ditambahkan operasi modulus (`%`) dan pangkat (`^`), validasi saat angka kosong atau pembagi bernilai nol, nilai input tetap tampil setelah form dikirim, serta styling kartu.

### Pertemuan 2

1. **Identitas mahasiswa:** ditambahkan class turunan `MahasiswaBeasiswa` untuk menerapkan inheritance. Class ini menambahkan data program studi dan status penerima beasiswa, disertai tampilan kartu.
2. **Perhitungan harga:** ditambahkan class `ProdukPajak` untuk menghitung harga akhir dengan pajak 11%. Tampilan keluaran diubah dari teks biasa menjadi tabel yang memuat harga awal, keterangan, dan harga akhir.

## 3. Lima Bagian Kode Penting

1. **Fungsi `statusKelulusan()` pada biodata** menentukan predikat mahasiswa berdasarkan nilai IPK menggunakan percabangan `if`. Fungsi ini memisahkan logika penentuan predikat dari tampilan HTML.
2. **Array `$mahasiswa` dan `foreach`** menyimpan data biodata dalam satu struktur, lalu menampilkan setiap data secara otomatis. `htmlspecialchars()` digunakan agar teks aman ditampilkan pada halaman.
3. **Percabangan `switch` pada kalkulator** memilih operasi aritmetika sesuai operator dari form. Validasi pembagian dan modulus dengan nol mencegah perhitungan yang tidak valid.
4. **Interface `Identitas` dan class `Mahasiswa`** menunjukkan konsep kontrak interface, encapsulation melalui properti `private` dan `protected`, serta validasi IPK pada method `setIpk()` agar nilainya hanya berada pada rentang 0 sampai 4.
5. **Polimorfisme pada `Produk`, `ProdukDiskon`, dan `ProdukPajak`** memungkinkan semua objek produk diproses dalam satu array. Masing-masing class dapat memiliki perhitungan `hargaAkhir()` sendiri: harga normal, harga diskon, atau harga dengan pajak.

## 4. Screenshot Sebelum dan Sesudah Modifikasi

Screenshot diambil setelah Apache XAMPP aktif dan halaman dibuka melalui alamat localhost pada bagian sebelumnya. Lampirkan bukti berikut pada pengumpulan tugas.

| Bagian | Sebelum modifikasi | Sesudah modifikasi |
| --- | --- | --- |
| Biodata | `p1/Latihan/biodata.php` | `p1/Tugas/biodata-modifikasi.php` |
| Kalkulator | `p1/Latihan/kalkulator.php` | `p1/Tugas/kalkulator-modifikasi.php` |
| Identitas | `p2/Latihan/identitas.php` | `p2/Tugas/identitas-modifikasi.php` |
| Perhitungan harga | `p2/Latihan/hitung.php` | `p2/Tugas/hitung-modifikasi.php` |

## 5. Error, Penyebab, dan Perbaikan

**Error:** hasil operasi penjumlahan pada kalkulator tidak tersimpan karena terjadi salah ketik nama variabel, yaitu `$hasmil`.

**Penyebab:** variabel yang digunakan tidak sama dengan variabel hasil yang ditampilkan, yaitu `$hasil`. PHP menganggap `$hasmil` sebagai variabel berbeda sehingga nilai hasil tidak tersedia pada saat halaman menampilkan output.

**Perbaikan:** nama variabel diperbaiki menjadi `$hasil` pada proses penjumlahan. Setelah itu, kalkulator diuji kembali untuk setiap operator. Tambahan validasi juga dibuat untuk input kosong serta pembagian atau modulus dengan nol.

## Kesimpulan

Seluruh contoh Pertemuan 1 dan Pertemuan 2 telah dijalankan tanpa error sintaks. Program kemudian dikembangkan dengan modifikasi pada logika, validasi, penerapan OOP, dan tampilan agar lebih fungsional serta mudah digunakan.

## Lampiran Dokumentasi Sebelumnya

Dokumentasi repository sebelumnya menyertakan contoh penggunaan array untuk menyimpan data identitas mahasiswa dalam struktur key-value. Struktur tersebut memudahkan pemanggilan data tertentu dan perulangan seluruh data.

<img width="419" height="128" alt="Contoh biodata sebelumnya" src="https://github.com/user-attachments/assets/a7f83ef6-7618-409d-9d50-cf7c1589c267" />

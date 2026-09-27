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

Sebelum Modifikasi
Pertemuan 1
kalkulator.php
<img width="880" height="810" alt="image" src="https://github.com/user-attachments/assets/8d4908d2-6788-4f39-a1ac-cd22e1a24b28" />
<img width="933" height="772" alt="image" src="https://github.com/user-attachments/assets/b70c2452-6b7e-495f-9022-e548a8fdfa30" />
Output
<img width="803" height="252" alt="image" src="https://github.com/user-attachments/assets/34a45914-92ce-4b26-b6f1-07a729280ea2" />
Biodata.php
<img width="842" height="780" alt="image" src="https://github.com/user-attachments/assets/c27d9469-76f3-4a17-bd7e-79223bfd6ec0" />
Output
<img width="476" height="228" alt="image" src="https://github.com/user-attachments/assets/62c52883-f303-4221-8a6c-33fcea0b67ca" />

Sesudah Modifikasi
<img width="949" height="873" alt="image" src="https://github.com/user-attachments/assets/b3b66633-8303-41ef-a69f-4afb4a3eddbc" />
<img width="977" height="1011" alt="image" src="https://github.com/user-attachments/assets/4d534dda-b8e0-4824-8df4-87e4ce7409bc" />
<img width="977" height="803" alt="image" src="https://github.com/user-attachments/assets/806deddc-f622-49e3-9f04-2d812cf4875e" />
Output
<img width="467" height="296" alt="image" src="https://github.com/user-attachments/assets/33535263-60ab-43ea-8247-5f540c6efa9b" />
<img width="467" height="307" alt="image" src="https://github.com/user-attachments/assets/24a2b5a8-e169-439f-9a51-6a273e681ef4" />

biodata.php
<img width="949" height="903" alt="image" src="https://github.com/user-attachments/assets/5054a51d-6882-47c0-b3e3-5e7e0383fd9b" />
<img width="977" height="393" alt="image" src="https://github.com/user-attachments/assets/b34195b6-155d-45b1-a047-744d2827ed6c" />
Output
<img width="795" height="527" alt="image" src="https://github.com/user-attachments/assets/1546d1f9-5adf-4d53-b88f-756f89cc1398" />

Pertemuan 2
Sebelum Modifikasi
identitas.php
<img width="901" height="806" alt="image" src="https://github.com/user-attachments/assets/53bc6836-2e5b-4479-82ea-ad4623b14ae9" />
<img width="904" height="78" alt="image" src="https://github.com/user-attachments/assets/65d123fe-870a-4d1c-9e73-8d7699800f23" />
Output
<img width="795" height="163" alt="image" src="https://github.com/user-attachments/assets/78e9f759-b35a-4034-b8d4-0baefa8f3c0f" />

hitung.php
<img width="793" height="750" alt="image" src="https://github.com/user-attachments/assets/43f5a2ef-cd42-4bcd-bf99-c1afe9179d01" />
<img width="778" height="168" alt="image" src="https://github.com/user-attachments/assets/0b71d021-8c65-4e4c-a93b-7c1ab0799aa0" />
Output
<img width="805" height="189" alt="image" src="https://github.com/user-attachments/assets/cb648a5b-befb-491f-8434-c496f85e44e6" />

Sesudah Modifikasi
identitas.php
<img width="867" height="883" alt="image" src="https://github.com/user-attachments/assets/4c51a9f6-4dc2-49d5-b3c5-68a3d0ea1d2b" />
<img width="865" height="769" alt="image" src="https://github.com/user-attachments/assets/f7fdd9d6-e71f-473a-a605-22fa21570ec8" />
<img width="861" height="356" alt="image" src="https://github.com/user-attachments/assets/d46c8ae0-b767-4d26-ae1c-594bcfb8261b" />
Output
<img width="868" height="409" alt="image" src="https://github.com/user-attachments/assets/2c5dc7aa-686d-47ed-9716-9f0516de1774" />

hitung.php
<img width="839" height="773" alt="image" src="https://github.com/user-attachments/assets/d86359c1-145a-4ebc-8c9d-39cb89942f5b" />
<img width="821" height="640" alt="image" src="https://github.com/user-attachments/assets/07872fb7-be3c-4ac3-b494-ca7395a77453" />
<img width="833" height="660" alt="image" src="https://github.com/user-attachments/assets/b9f2680b-d9b4-4f7b-bc60-1a3bf455cba9" />
<img width="844" height="179" alt="image" src="https://github.com/user-attachments/assets/a792651e-f739-425d-9f05-be64ac76d0b6" />
Output
<img width="860" height="457" alt="image" src="https://github.com/user-attachments/assets/1dc09e8f-0357-473f-8097-f180230e09f0" />


## 5. Error, Penyebab, dan Perbaikan

**Error:** hasil operasi penjumlahan pada kalkulator tidak tersimpan karena terjadi salah ketik nama variabel, yaitu `$hasmil`.

**Penyebab:** variabel yang digunakan tidak sama dengan variabel hasil yang ditampilkan, yaitu `$hasil`. PHP menganggap `$hasmil` sebagai variabel berbeda sehingga nilai hasil tidak tersedia pada saat halaman menampilkan output.

**Perbaikan:** nama variabel diperbaiki menjadi `$hasil` pada proses penjumlahan. Setelah itu, kalkulator diuji kembali untuk setiap operator. Tambahan validasi juga dibuat untuk input kosong serta pembagian atau modulus dengan nol.

## Kesimpulan

Seluruh contoh Pertemuan 1 dan Pertemuan 2 telah dijalankan tanpa error sintaks. Program kemudian dikembangkan dengan modifikasi pada logika, validasi, penerapan OOP, dan tampilan agar lebih fungsional serta mudah digunakan.

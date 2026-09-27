# 📑 Laporan Tugas Praktikum Pemrograman Berbasis Web

<div align="center">

**Nama:** AA RANGGA  
**NPM:** 4524210001  
**Program Studi:** Teknik Informatika  
**Mata Kuliah:** Pemrograman Berbasis Web - B  

---

</div>

## 📌 Tujuan Tugas

Laporan ini mendokumentasikan pengerjaan latihan pada **Pertemuan 1** dan **Pertemuan 2**, mencakup:
* Pengujian contoh kode awal.
* Rincian modifikasi logika dan antarmuka (UI).
* Penjelasan bagian kode penting (Konsep Dasar & OOP PHP).
* Bukti tangkapan layar (*screenshot*) sebelum dan sesudah modifikasi.
* Analisis *error*, penyebab, serta langkah penanganannya.

---

## 📁 Struktur Proyek

| Pertemuan | Kode Awal (Latihan) | Hasil Modifikasi (Tugas) |
| :---: | :--- | :--- |
| **Pertemuan 1** | `p1/Latihan/biodata.php`<br>`p1/Latihan/kalkulator.php` | `p1/Tugas/biodata-modifikasi.php`<br>`p1/Tugas/kalkulator-modifikasi.php` |
| **Pertemuan 2** | `p2/Latihan/identitas.php`<br>`p2/Latihan/hitung.php` | `p2/Tugas/identitas-modifikasi.php`<br>`p2/Tugas/hitung-modifikasi.php` |

---

## 🚀 1. Menjalankan Seluruh Contoh

Seluruh file PHP pada folder **Latihan** dan **Tugas** telah diperiksa validasi sintaksnya menggunakan perintah `php -l` dan dipastikan **bebas dari error sintaks**. Program dapat dijalankan melalui Apache (XAMPP / PHP Development Server) dengan mengakses alamat URL berikut:

| Berkas | Jenis | Alamat Localhost |
| :--- | :---: | :--- |
| `biodata.php` | Awal | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p1/Latihan/biodata.php` |
| `kalkulator.php` | Awal | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p1/Latihan/kalkulator.php` |
| `biodata-modifikasi.php` | Modifikasi | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p1/Tugas/biodata-modifikasi.php` |
| `kalkulator-modifikasi.php` | Modifikasi | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p1/Tugas/kalkulator-modifikasi.php` |
| `identitas.php` | Awal | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p2/Latihan/identitas.php` |
| `hitung.php` | Awal | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p2/Latihan/hitung.php` |
| `identitas-modifikasi.php` | Modifikasi | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p2/Tugas/identitas-modifikasi.php` |
| `hitung-modifikasi.php` | Modifikasi | `http://localhost/PRAK-PBW-B-PERT1-AA%20RANGGA-4524210001/p2/Tugas/hitung-modifikasi.php` |

---

## 🛠️ 2. Modifikasi Bermakna

### 🔹 Pertemuan 1
1. **Biodata (`biodata-modifikasi.php`):**
   * Menambahkan logika kondisi predikat **Dengan Pujian (Cum Laude)** untuk IPK $\ge$ 3,75.
   * Mengintegrasikan pembaruan data mahasiswa.
   * Merombak tampilan visual menggunakan *CSS Card Layout* agar lebih modern.
2. **Kalkulator (`kalkulator-modifikasi.php`):**
   * Menambahkan operasi aritmetika baru: Modulus (`%`) dan Pangkat (`^`).
   * Menambahkan validasi penanganan *error* saat input kosong atau pembagian/modulus dengan angka nol (`0`).
   * Menjaga nilai input tetap bertahan di dalam kolom (*state persistence*) setelah *form submission*.

### 🔹 Pertemuan 2
1. **Identitas Mahasiswa (`identitas-modifikasi.php`):**
   * Menerapkan konsep *Inheritance* dengan membuat class turunan `MahasiswaBeasiswa`.
   * Menambahkan atribut program studi dan status beasiswa.
   * Mengubah tampilan keluaran teks biasa menjadi komponen *User Interface* berupa Kartu Profil.
2. **Perhitungan Harga (`hitung-modifikasi.php`):**
   * Menambahkan class `ProdukPajak` untuk kalkulasi harga akhir yang mencakup Pajak Pertambahan Nilai (PPN) sebesar 11%.
   * Mengubah penyajian data keluaran menjadi struktur tabel rapi yang memuat harga awal, catatan, serta harga akhir.

---

## 💻 3. Lima Bagian Kode Penting

1. **Fungsi `statusKelulusan()` (Struktur Percabangan)**  
   Menentukan predikat kelulusan berdasarkan nilai IPK. Memisahkan logika bisnis dari lapisan tampilan (*presentation layer*).
2. **Array Associative & Perulangan `foreach`**  
   Menyimpan data biodata terstruktur lalu menampilkannya secara dinamis. Menggunakan `htmlspecialchars()` untuk mencegah celah *Cross-Site Scripting* (XSS).
3. **Kondisional `switch-case` pada Kalkulator**  
   Mengeksekusi kalkulasi berdasarkan operator terpilih serta melakukan *error guard* terhadap operasi matematika tak terdefinisi (seperti pembagian dengan nol).
4. **Contract Interface & Encapsulation**  
   Penerapan interface `Identitas` dan class `Mahasiswa` dengan visibilitas `private`/`protected` serta validasi *setter* `setIpk()` pada rentang `0.00` hingga `4.00`.
5. **Polimorfisme OOP (`Produk`, `ProdukDiskon`, `ProdukPajak`)**  
   Memungkinkan pengolahan berbagai variasi objek produk dalam satu perulangan tunggal, di mana tiap class anak mengeksekusi implementasi method `hargaAkhir()` secara independen.

---

## 🖼️ 4. Tangkapan Layar (Screenshot) Program

### 📍 Pertemuan 1

#### A. Sebelum Modifikasi
* **`kalkulator.php` (Kode & Output):**  
  <img src="https://github.com/user-attachments/assets/8d4908d2-6788-4f39-a1ac-cd22e1a24b28" width="450" />
  <img src="https://github.com/user-attachments/assets/b70c2452-6b7e-495f-9022-e548a8fdfa30" width="450" />  
  <img src="https://github.com/user-attachments/assets/34a45914-92ce-4b26-b6f1-07a729280ea2" width="600" />

* **`biodata.php` (Kode & Output):**  
  <img src="https://github.com/user-attachments/assets/c27d9469-76f3-4a17-bd7e-79223bfd6ec0" width="450" />  
  <img src="https://github.com/user-attachments/assets/62c52883-f303-4221-8a6c-33fcea0b67ca" width="400" />

---

#### B. Sesudah Modifikasi
* **`kalkulator-modifikasi.php` (Kode & Output):**  
  <img src="https://github.com/user-attachments/assets/b3b66633-8303-41ef-a69f-4afb4a3eddbc" width="300" />
  <img src="https://github.com/user-attachments/assets/4d534dda-b8e0-4824-8df4-87e4ce7409bc" width="300" />
  <img src="https://github.com/user-attachments/assets/806deddc-f622-49e3-9f04-2d812cf4875e" width="300" />  
  <br>
  <img src="https://github.com/user-attachments/assets/33535263-60ab-43ea-8247-5f540c6efa9b" width="400" />
  <img src="https://github.com/user-attachments/assets/24a2b5a8-e169-439f-9a51-6a273e681ef4" width="400" />

* **`biodata-modifikasi.php` (Kode & Output):**  
  <img src="https://github.com/user-attachments/assets/5054a51d-6882-47c0-b3e3-5e7e0383fd9b" width="450" />
  <img src="https://github.com/user-attachments/assets/b34195b6-155d-45b1-a047-744d2827ed6c" width="450" />  
  <br>
  <img src="https://github.com/user-attachments/assets/1546d1f9-5adf-4d53-b88f-756f89cc1398" width="500" />

---

### 📍 Pertemuan 2

#### A. Sebelum Modifikasi
* **`identitas.php` (Kode & Output):**  
  <img src="https://github.com/user-attachments/assets/53bc6836-2e5b-4479-82ea-ad4623b14ae9" width="450" />
  <img src="https://github.com/user-attachments/assets/65d123fe-870a-4d1c-9e73-8d7699800f23" width="450" />  
  <br>
  <img src="https://github.com/user-attachments/assets/78e9f759-b35a-4034-b8d4-0baefa8f3c0f" width="500" />

* **`hitung.php` (Kode & Output):**  
  <img src="https://github.com/user-attachments/assets/43f5a2ef-cd42-4bcd-bf99-c1afe9179d01" width="450" />
  <img src="https://github.com/user-attachments/assets/0b71d021-8c65-4e4c-a93b-7c1ab0799aa0" width="450" />  
  <br>
  <img src="https://github.com/user-attachments/assets/cb648a5b-befb-491f-8434-c496f85e44e6" width="500" />

---

#### B. Sesudah Modifikasi
* **`identitas-modifikasi.php` (Kode & Output):**  
  <img src="https://github.com/user-attachments/assets/4c51a9f6-4dc2-49d5-b3c5-68a3d0ea1d2b" width="300" />
  <img src="https://github.com/user-attachments/assets/f7fdd9d6-e71f-473a-a605-22fa21570ec8" width="300" />
  <img src="https://github.com/user-attachments/assets/d46c8ae0-b767-4d26-ae1c-594bcfb8261b" width="300" />  
  <br>
  <img src="https://github.com/user-attachments/assets/2c5dc7aa-686d-47ed-9716-9f0516de1774" width="500" />

* **`hitung-modifikasi.php` (Kode & Output):**  
  <img src="https://github.com/user-attachments/assets/d86359c1-145a-4ebc-8c9d-39cb89942f5b" width="220" />
  <img src="https://github.com/user-attachments/assets/07872fb7-be3c-4ac3-b494-ca7395a77453" width="220" />
  <img src="https://github.com/user-attachments/assets/b9f2680b-d9b4-4f7b-bc60-1a3bf455cba9" width="220" />
  <img src="https://github.com/user-attachments/assets/a792651e-f739-425d-9f05-be64ac76d0b6" width="220" />  
  <br>
  <img src="https://github.com/user-attachments/assets/1dc09e8f-0357-473f-8097-f180230e09f0" width="500" />

---

## ⚠️ 5. Error, Penyebab, dan Perbaikan

| Komponen | Detail |
| :--- | :--- |
| **Pesan Error** | Hasil operasi penjumlahan pada kalkulator tidak muncul atau bernilai kosong/`null`. |
| **Penyebab** | Terjadi *typo* penulisan nama variabel penampung logika kalkulasi, yaitu `$hasmil` alih-alih `$hasil`. Karena PHP memproses variabel tersebut secara terpisah, variabel `$hasil` yang dipanggil pada output HTML tidak berisi nilai apapun. |
| **Langkah Perbaikan** | Mengubah nama variabel dari `$hasmil` menjadi `$hasil` pada blok logika `switch-case`. Ditambahkan pula validasi pencegahan pembagian dan modulus dengan nilai nol (`0`) untuk menghindari *Warning/Notice* bawaan PHP. |

---

## 📝 Kesimpulan

Seluruh materi dasar pada **Pertemuan 1** dan **Pertemuan 2** telah dipraktikkan serta dijalankan dengan baik tanpa *runtime error*. Pengembangan kode melalui modifikasi struktur OOP (Interface, Enkapsulasi, Inheritance, dan Polimorfisme) serta perbaikan tampilan antarmuka (UI) berhasil meningkatkan fleksibilitas, keamanan, dan fungsionalitas aplikasi web secara menyeluruh.

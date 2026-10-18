# Laporan Tugas Praktikum Basis Data - Manipulasi Data (DML) & Modifikasi Status KRS

Proyek ini berisi implementasi eksekusi kueri DML (Data Manipulation Language) meliputi `INSERT`, `SELECT`, `UPDATE`, `DELETE`, `GROUP BY`, serta manipulasi relasi tabel pada database **`akademik_one`** menggunakan phpMyAdmin (MySQL/MariaDB).

---

## 1. Eksekusi Program Pertemuan 4

Proyek dijalankan pada database `akademik_one` yang mencakup pengelolaan 4 tabel utama: `mahasiswa`, `dosen`, `mata_kuliah`, dan `krs`. Semua kueri manipulasi data berhasil dieksekusi tanpa error kritis.

### Script SQL DML Utama
```sql
USE akademik_one;

-- 1. Modifikasi Skema Tambah Kolom Status Persetujuan
ALTER TABLE krs
ADD COLUMN status_persetujuan ENUM('Pending', 'Disetujui', 'Ditolak') DEFAULT 'Pending';

-- 2. INSERT Data Valid
INSERT INTO krs (nim, kode_mk, semester, tahun_ajaran, status_persetujuan) VALUES
('4524210001', 'IF201', 3, '2026/2027', 'Pending'),
('4524210001', 'IF202', 3, '2026/2027', 'Disetujui');

-- 3. SELECT JOIN Filter Status Pending
SELECT m.nim, m.nama, k.kode_mk, k.semester, k.status_persetujuan
FROM mahasiswa m
JOIN krs k ON m.nim = k.nim
WHERE k.status_persetujuan = 'Pending';

-- 4. UPDATE Status Persetujuan KRS
UPDATE krs
SET status_persetujuan = 'Disetujui'
WHERE nim = '4524210001' AND kode_mk = 'IF201';

-- 5. GROUP BY Rekap Matkul per Status
SELECT status_persetujuan, COUNT(*) AS total_matkul
FROM krs
GROUP BY status_persetujuan;

```

---

## 2. Modifikasi Program (Dua Modifikasi Bermakna)

### Modifikasi 1: Manajemen Status Persetujuan KRS Berbasis ENUM

Menggunakan kolom `status_persetujuan` dengan tipe `ENUM('Pending', 'Disetujui', 'Ditolak')` untuk memperbarui status pengajuan mata kuliah secara dinamis menggunakan kueri `UPDATE`.

### Modifikasi 2: Rekapitulasi Pengambilan KRS Menggunakan GROUP BY & AGGREGATE

Merekapitulasi total mata kuliah berdasarkan status persetujuan menggunakan fungsi agregat `COUNT(*)` untuk keperluan analisis beban mata kuliah mahasiswa.

---

## 3. Penjelasan 5 Bagian Kode

1. **`SELECT ... WHERE ... ORDER BY ... LIMIT`**
* **Potongan Kode:** `SELECT nim, nama, prodi, ipk FROM mahasiswa WHERE ipk >= 3.50 ORDER BY ipk DESC, nama ASC LIMIT 10`
* **Penjelasan:** Memfilter data mahasiswa ber-IPK di atas 3.50, mengurutkan dari IPK tertinggi, dan membatasi tampilan maksimal 10 baris.


2. **`UPDATE ... SET`**
* **Potongan Kode:** `UPDATE krs SET status_persetujuan = 'Disetujui' WHERE nim = '4524210001' AND kode_mk = 'IF201'`
* **Penjelasan:** Memperbarui nilai kolom `status_persetujuan` pada baris spesifik secara aman.


3. **`DELETE FROM ... WHERE`**
* **Potongan Kode:** `DELETE FROM mahasiswa WHERE nim = '2025003'`
* **Penjelasan:** Menghapus baris data mahasiswa tertentu secara permanen berdasarkan identitas unik NIM.


4. **`JOIN` & `WHERE` (Filtering)**
* **Potongan Kode:** `SELECT m.nim, m.nama FROM mahasiswa m JOIN krs k ON m.nim = k.nim WHERE k.status_persetujuan = 'Pending'`
* **Penjelasan:** Menggabungkan tabel `mahasiswa` dan `krs` berdasarkan kunci NIM untuk menyaring mahasiswa yang KRS-nya masih berstatus `Pending`.


5. **`GROUP BY` & `COUNT(*)**`
* **Potongan Kode:** `SELECT status_persetujuan, COUNT(*) AS total_matkul FROM krs GROUP BY status_persetujuan`
* **Penjelasan:** Mengelompokkan data KRS berdasarkan status persetujuan dan menghitung total jumlah mata kuliah pada kelompok tersebut.



---

## 4. Dokumen Screenshot Sebelum dan Sesudah Modifikasi

### A. Eksekusi Kueri DML Dasar (Select Filter, Update IPK, Group By Prodi, Delete)

![01 - Kueri Select Filter](./images/01_query_select_filter.png)
![02 - Hasil Select Filter](./images/02_output_select_filter_success.png)
![03 - Kueri Update IPK](./images/03_query_update_ipk.png)
![04 - Hasil Update IPK](./images/04_output_update_ipk_success.png)
![05 - Kueri Group By Prodi](./images/05_query_group_by_prodi.png)
![06 - Hasil Group By Prodi](./images/06_output_group_by_prodi_success.png)
![07 - Kueri Delete Mahasiswa](./images/07_query_delete_mahasiswa.png)
![08 - Konfirmasi Delete](./images/08_confirm_delete_popup.png)
![09 - Hasil Delete](./images/09_output_delete_success.png)

### B. Modifikasi Skema & Pengisian Data KRS Valid

![10 - Kueri Alter Table KRS](./images/10_query_alter_add_status_krs.png)
![11 - Kueri Alter Table KRS](./images/11_query_alter_add_status_krs.png)
![12 - Kueri Insert KRS Valid](./images/12_query_insert_krs_valid.png)
![13 - Hasil Insert KRS](./images/13_output_insert_krs_success.png)

### C. Pencarian Data (SELECT JOIN), Pembaruan Status (UPDATE), & Rekapitulasi

![14 - Kueri Select Join Pending](./images/14_query_select_join_pending.png)
![15 - Hasil Select Join Pending](./images/15_output_select_join_pending.png)
![16 - Kueri Update Status KRS](./images/16_query_update_status_krs.png)
![17 - Hasil Update Status KRS](./images/17_output_update_status_krs_success.png)
![18 - Kueri Group By Status](./images/18_query_group_by_status.png)
![19 - Hasil Group By Status](./images/19_output_group_by_status.png)

### D. Pengujian Kueri DML Tambahan

![20 - Kueri Pemeriksaan SKS](./images/20_query_error_check_sks.png)
![21 - Hasil Insert Mata Kuliah SKS 8](./images/21_output_insert_matkul_sks8.png)
![22 - Kueri Insert Email Tidak Valid](./images/22_query_insert_email_invalid.png)
![23 - Hasil Insert Email Tidak Valid](./images/23_output_insert_email_invalid.png)

---

## 5. Error, Penyebab, dan Langkah Perbaikannya

* **Pesan Error yang Muncul:**
`#1054 - Unknown column 'status_persetujuan' in 'field list'`
* **Penyebab:**
MySQL menolak kueri `INSERT` ke kolom `status_persetujuan` karena kolom tersebut belum ditambahkan pada struktur tabel `krs` di database awal.
* **Langkah Perbaikan:**
Jalankan perintah DDL `ALTER TABLE krs ADD COLUMN status_persetujuan ENUM('Pending', 'Disetujui', 'Ditolak') DEFAULT 'Pending';` terlebih dahulu sebelum mengesekusi kueri DML penginputan data.

---

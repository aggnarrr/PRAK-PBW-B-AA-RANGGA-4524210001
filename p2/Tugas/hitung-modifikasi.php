<?php
interface BisaDihitung
{
    public function hargaAkhir(): float;
}

class Produk implements BisaDihitung
{
    public function __construct(
        protected string $nama,
        protected float $harga
    ) {}

    public function hargaAkhir(): float
    {
        return $this->harga;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getHarga(): float
    {
        return $this->harga;
    }

    public function getKeterangan(): string
    {
        return 'Harga Normal';
    }
}

class ProdukDiskon extends Produk
{
    public function __construct(string $nama, float $harga, private float $diskon)
    {
        parent::__construct($nama, $harga);
    }

    public function hargaAkhir(): float
    {
        return $this->harga * (1 - $this->diskon / 100);
    }

    public function getKeterangan(): string
    {
        return 'Diskon ' . $this->diskon . '%';
    }
}

// Modifikasi 1: Class Baru untuk Perhitungan Pajak (ProdukPajak)
class ProdukPajak extends Produk
{
    public function __construct(string $nama, float $harga, private float $pajakPersen)
    {
        parent::__construct($nama, $harga);
    }

    public function hargaAkhir(): float
    {
        return $this->harga * (1 + $this->pajakPersen / 100);
    }

    public function getKeterangan(): string
    {
        return 'Pajak ' . $this->pajakPersen . '%';
    }
}

$daftar = [
    new Produk('Keyboard', 250000),
    new ProdukDiskon('Mouse', 150000, 10),
    new ProdukPajak('Monitor 24 Inch', 1500000, 11) // Item baru dengan Pajak PPN 11%
];
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Daftar Perhitungan Harga</title>
    <!-- Modifikasi 2: Styling Tabel Transaksi -->
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 30px; }
        table { width: 100%; max-width: 650px; border-collapse: collapse; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #007bff; color: white; }
        tr:hover { background: #f1f1f1; }
    </style>
</head>
<body>
    <h2>Rincian Perhitungan Harga Produk</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga Awal</th>
                <th>Keterangan</th>
                <th>Harga Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftar as $produk): ?>
                <tr>
                    <td><?= htmlspecialchars($produk->getNama()) ?></td>
                    <td>Rp <?= number_format($produk->getHarga(), 0, ',', '.') ?></td>
                    <td><?= htmlspecialchars($produk->getKeterangan()) ?></td>
                    <td><strong>Rp <?= number_format($produk->hargaAkhir(), 0, ',', '.') ?></strong></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
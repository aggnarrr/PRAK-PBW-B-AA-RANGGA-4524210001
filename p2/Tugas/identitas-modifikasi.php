<?php
interface Identitas
{
    public function ringkasan(): string;
}

class Mahasiswa implements Identitas
{
    private string $nim;
    private string $nama;
    protected float $ipk;

    public function __construct(string $nim, string $nama, float $ipk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->setIpk($ipk);
    }

    public function setIpk(float $ipk): void
    {
        if ($ipk < 0 || $ipk > 4) {
            throw new InvalidArgumentException('IPK harus 0 sampai 4.');
        }
        $this->ipk = $ipk;
    }

    public function getIpk(): float
    {
        return $this->ipk;
    }

    public function getNim(): string
    {
        return $this->nim;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function ringkasan(): string
    {
        return $this->nim . ' - ' . $this->nama . ' - IPK: ' . $this->ipk;
    }
}

// Modifikasi 1: Class Turunan Baru (Inheritance)
class MahasiswaBeasiswa extends Mahasiswa
{
    private string $prodi;

    public function __construct(string $nim, string $nama, float $ipk, string $prodi)
    {
        parent::__construct($nim, $nama, $ipk);
        $this->prodi = $prodi;
    }

    public function ringkasan(): string
    {
        return parent::ringkasan() . ' - Prodi: ' . $this->prodi . ' (Penerima Beasiswa)';
    }
}

// Modifikasi 2: Instansiasi dengan data NPM, Nama, & IPK kamu
$mhs = new MahasiswaBeasiswa('4524210001', 'AA RANGGA', 3.95, 'Teknik Informatika');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Identitas Mahasiswa</title>
    <!-- Modifikasi 3: Tampilan Card dengan Styling CSS -->
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f3; padding: 30px; }
        .card { background: #fff; padding: 20px; border-radius: 8px; max-width: 500px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-left: 5px solid #007bff; }
        h2 { margin-top: 0; color: #333; }
        p { font-size: 15px; color: #555; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Data Identitas Mahasiswa</h2>
        <p><?= htmlspecialchars($mhs->ringkasan()) ?></p>
    </div>
</body>
</html>
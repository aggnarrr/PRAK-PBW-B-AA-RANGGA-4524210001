<?php
// biodata.php
function statusKelulusan(float $ipk): string
{
    if ($ipk >= 3.75) return 'Dengan Pujian (Cum Laude)'; // Modifikasi: Kondisi baru
    if ($ipk >= 3.50) return 'Sangat Memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlu Peningkatan';
}

// Modifikasi: Update identitas & penambahan key 'nim' -> 'npm'
$mahasiswa = [
    'NPM' => '4524210001',
    'Nama' => 'AA RANGGA',
    'Prodi' => 'Teknik Informatika',
    'Semester' => 5,
    'IPK' => 3.95
];
?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Biodata Mahasiswa</title>
    <!-- Modifikasi: Styling Card -->
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 20px; }
        .card { background: #fff; padding: 20px; border-radius: 8px; max-width: 400px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h1 { font-size: 20px; color: #333; margin-top: 0; }
        ul { list-style: none; padding: 0; }
        li { padding: 6px 0; border-bottom: 1px solid #eee; }
        .badge { display: inline-block; padding: 6px 12px; background: #28a745; color: #fff; border-radius: 4px; font-weight: bold; margin-top: 10px; }
    </style>
</head>

<body>
    <div class="card">
        <h1>Biodata Mahasiswa</h1>
        <ul>
            <?php foreach ($mahasiswa as $kunci => $nilai): ?>
                <li><strong><?= htmlspecialchars($kunci) ?>:</strong> <?= htmlspecialchars((string)$nilai) ?></li>
            <?php endforeach; ?>
        </ul>

        <div class="badge">
            Predikat: <?= statusKelulusan($mahasiswa['IPK']) ?>
        </div>
    </div>
</body>

</html>
<?php
// kalkulator.php
$hasil = null;
$pesan = '';
$a = '';
$b = '';
$operator = '+';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'] ?? '';
    $b = $_POST['b'] ?? '';
    $operator = $_POST['operator'] ?? '+';

    if ($a === '' || $b === '') {
        $pesan = 'Harap isi kedua angka!';
    } else {
        $valA = (float) $a;
        $valB = (float) $b;

        switch ($operator) {
            case '+':
                $hasil = $valA + $valB; // Perbaikan typo dari $hasmil
                break;
            case '-':
                $hasil = $valA - $valB;
                break;
            case '*':
                $hasil = $valA * $valB;
                break;
            case '/':
                if ($valB == 0) {
                    $pesan = 'Pembagian dengan nol tidak diperbolehkan.';
                } else {
                    $hasil = $valA / $valB;
                }
                break;
            // Modifikasi: Operator Modulus & Pangkat
            case '%':
                if ($valB == 0) {
                    $pesan = 'Modulus dengan nol tidak diperbolehkan.';
                } else {
                    $hasil = fmod($valA, $valB);
                }
                break;
            case '^':
                $hasil = pow($valA, $valB);
                break;
            default:
                $pesan = 'Operator tidak valid.';
        }
    }
}
?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Kalkulator Sederhana</title>
    <!-- Modifikasi: Styling CSS -->
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 20px; }
        .card { background: #fff; padding: 20px; border-radius: 8px; max-width: 420px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        input, select, button { padding: 8px; margin: 4px 0; font-size: 14px; }
        button { background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .hasil { margin-top: 15px; font-weight: bold; color: #28a745; }
        .error { margin-top: 15px; font-weight: bold; color: #dc3545; }
    </style>
</head>

<body>
    <div class="card">
        <h1>Kalkulator Sederhana</h1>

        <form method="post">
            <!-- Modifikasi: Sticky Form (value tersimpan) -->
            <input type="number" step="any" name="a" value="<?= htmlspecialchars((string)$a) ?>" placeholder="Angka 1" required>

            <select name="operator">
                <option value="+" <?= $operator === '+' ? 'selected' : '' ?>>+</option>
                <option value="-" <?= $operator === '-' ? 'selected' : '' ?>>-</option>
                <option value="*" <?= $operator === '*' ? 'selected' : '' ?>>*</option>
                <option value="/" <?= $operator === '/' ? 'selected' : '' ?>>/</option>
                <option value="%" <?= $operator === '%' ? 'selected' : '' ?>>% (Modulus)</option>
                <option value="^" <?= $operator === '^' ? 'selected' : '' ?>>^ (Pangkat)</option>
            </select>

            <input type="number" step="any" name="b" value="<?= htmlspecialchars((string)$b) ?>" placeholder="Angka 2" required>

            <br>
            <button type="submit">Hitung</button>
        </form>

        <?php if ($pesan): ?>
            <p class="error"><?= htmlspecialchars($pesan) ?></p>
        <?php elseif ($hasil !== null): ?>
            <p class="hasil">Hasil: <?= htmlspecialchars((string)$hasil) ?></p>
        <?php endif; ?>
    </div>
</body>

</html>
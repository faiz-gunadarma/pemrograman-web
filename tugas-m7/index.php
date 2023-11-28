<?php
// BUAT KONEKSI
$koneksi = new mysqli("127.0.0.1", "root", "root", "db_pweb");

// CEK KONEKSI
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// AMBIL DATA
$result = $koneksi->query("SELECT mhs.*, jkel.jenis_kelamin FROM mhs JOIN jkel ON mhs.jkel = jkel.jkel");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas - Pemrograman Web</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <main class="container">

        <section class="text-center">
            <h1>Tugas Pemrograman Web</h1>
            <p>Menampilkan Kelompok dalam tabel menggubakan php dan mysql</p>
        </section>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NPM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $row["npm"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["jenis_kelamin"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>
</body>

</html>
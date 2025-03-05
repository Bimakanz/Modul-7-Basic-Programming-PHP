<?php

$nama = "";
$nilai_akhir = "";
$kategori = "";
$nilai_tugas = "";
$nilai_uts = "";
$nilai_uas = "";   

// Isset() memerika apakah variabel ada dan tidak bernilai null.
//         Mengembalikan true jika variabel ada dan tidak null

// !Isset() Memeriksa apakah variabel ada dan tidak bernilai nulll
//         Mengembalikan true jika variable ada dan tidak ada atau null.

// Session : digunakan untuk menyimpan data sementara yang dapat diakses
//  Oleh pengguna selama periode tertentu.

// Inisialisasi sesi untuk menyimpan data sementara.

session_start();
// Memeriksa apakah sesi siswa $_SESSION['siswa'] sudah ada atau belum
// Jika belum, maka inisialisasi $_SESSION ['siswa'] sebagai array kosong

if (isset($_SESSION['siswa'])){ // True
$_SESSION['siswa'] = []; // Jika kondisi true maka akan dibuatkan array kosong
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // cek apakah inputan form ada dan tidak ada.
    if(isset($_POST['nama']) && isset($_POST['nilai_tugas']) && isset($_POST['nilai_uts']) && isset($_POST['nilai_uas'])) {
   $nama = $_POST['nama'];
   $nilai_tugas = $_POST['nilai_tugas'];
   $nilai_uts = $_POST['nilai_uts'];
   $nilai_uts = $_POST['nilai_uas'];
      
    }
        // ambil inputan dari form
    
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cek apakah inputan form ada dan tidak kosong
    if (isset($_POST['nama']) && isset($_POST['nilai_tugas']) && isset($_POST['nilai_uts']) && isset($_POST['nilai_uas'])) {
        // Ambil input dari form
        $nama = $_POST['nama'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
       


        // Hitung nilai akhir
        $nilai_akhir = ($nilai_tugas * 0.3) + ($nilai_uts * 0.3) + ($nilai_uas * 0.4);


        // Tentukan kategori nilai
        if ($nilai_akhir >= 85) {
            $kategori = 'A';
        } elseif ($nilai_akhir >= 70) {
            $kategori = 'B';
        } elseif ($nilai_akhir >= 60) {
            $kategori = 'C';
        } elseif ($nilai_akhir >= 50) {
            $kategori = 'D';
        } else {
            $kategori = 'E';
        }

        $_SESSION['siswalist'][] = [
            'nama' => $nama,
            'nilai_akhir' => $nilai_akhir,
            'kategori' => $kategori,
        ];
    }
}



 if (isset($_POST['hapus_data'])){
    session_destroy();
    session_start();
    $_SESSION['siswalist'] = [];
 }
?>



<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penilaian siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>


<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow-lg p-4">
                            <h2 class="text-center mb-4">Form Input Nilai siswa</h2>
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Nama siswa</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai Tugas</label>
                                    <input type="number" name="nilai_tugas" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai UTS</label>
                                    <input type="number" name="nilai_uts" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai UAS</label>
                                    <input type="number" name="nilai_uas" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-warning w-100">Hitung Nilai</button>
                            </form>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="card shadow-lg p-4">
                            <h2 class="text-center mb-4">Hasil Penilaian</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover text-center">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Nilai Akhir</th>
                                            <th>Kategori</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td><?= $Nama ?></td>
                                            <td><?= $jabatan ?></td>
                                            <td><?= $jamkerja ?></td>
                                            <td><?= $gaji_bersih ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <!-- Tombol untuk menghapus data sesi -->
                        <form method="POST">
                            <button type="submit" name="hapus_data" class="btn btn-danger w-100 mt-3">Hapus Semua Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>

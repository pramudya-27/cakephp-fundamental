<?php $this->disableAutoLayout(); // Matikan layout default CakePHP agar CSS Bootstrap kita murni ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dashboard Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background-color: #2c3e50; color: white; }
        .sidebar a { color: rgba(255,255,255,0.8); text-decoration: none; padding: 10px 15px; display: block; border-radius: 5px; margin-bottom: 5px;}
        .sidebar a:hover, .sidebar a.active { background-color: #34495e; color: #fff; }
        .stat-card { border: none; border-radius: 10px; transition: 0.3s; }
        .stat-card:hover { transform: translateY(-5px); box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .bg-gradient-primary { background: linear-gradient(45deg, #4e73df, #224abe); color: white; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar p-3 d-none d-md-block">
            <h4 class="text-center mb-4 py-2 border-bottom">SIAKAD 3.0</h4>
            <nav>
                <a href="#" class="active"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
                <a href="#"><i class="bi bi-person me-2"></i> Profil</a>
                <a href="#"><i class="bi bi-journal-text me-2"></i> KRS</a>
                <a href="#"><i class="bi bi-file-earmark-text me-2"></i> Nilai</a>
            </nav>
            <div class="mt-5 pt-5 text-center">
                <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']) ?>" class="btn btn-danger w-100">
                    <i class="bi bi-box-arrow-left"></i> Logout
                </a>
            </div>
        </div>

        <div class="col-md-10 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4 bg-white p-3 rounded shadow-sm">
                <h4 class="m-0 text-primary">Dashboard</h4>
                <div class="d-flex align-items-center">
                    <span class="me-2 text-muted">Halo, <strong><?= h($userData['fullname']) ?></strong></span>
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                        <?= substr($userData['username'], 0, 1) ?>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card stat-card bg-gradient-primary p-3">
                        <h3>3.85</h3>
                        <small>Indeks Prestasi Kumulatif</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card stat-card bg-white p-3 shadow-sm border-start border-4 border-success">
                        <h3 class="text-success">21 SKS</h3>
                        <small class="text-muted">Diambil Semester Ini</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card stat-card bg-white p-3 shadow-sm border-start border-4 border-warning">
                        <h3 class="text-warning">Aktif</h3>
                        <small class="text-muted">Status Mahasiswa</small>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0">Informasi Teknis (Untuk Laporan)</h5>
                </div>
                <div class="card-body">
                    <p>Halaman ini dirender menggunakan <strong>CakePHP Framework</strong>.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Controller:</strong> UsersController.php</li>
                        <li class="list-group-item"><strong>View:</strong> templates/Users/dashboard.php</li>
                        <li class="list-group-item"><strong>Session ID:</strong> <?= session_id() ?> (Diregenerasi saat login)</li>
                        <li class="list-group-item"><strong>Waktu Login:</strong> <?= date('d M Y H:i') ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
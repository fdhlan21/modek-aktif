<!-- Begin Page Content -->
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('/Dashboard'); ?>" style="color: black;">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= base_url('/jumantik'); ?>" style="color: black;">Jumantik</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data - Jumantik</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('/jumantik'); ?>" class="btn bg-secondary">
                <i class="fas fa-fw fa-arrow-left" style="color: #ffffff;"></i>
                <span style="color: #ffffff; padding-left: 10px;">Kembali</span>
            </a>
        </div>

        <div class="card-body">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <div class="form-group">
                    <label for="nama_kader">Nama Kader</label>
                    <input type="text" class="form-control" id="nama_kader" name="nama_kader" required>
                </div>
                <div class="form-group">
                    <label for="rt">RT</label>
                    <input type="number" class="form-control" id="rt" name="rt" required>
                </div>
                <div class="form-group">
                    <label for="rw">RW</label>
                    <input type="number" class="form-control" id="rw" name="rw" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_rumah_ada">Jumlah Rumah yang Ada</label>
                    <input type="number" class="form-control" id="jumlah_rumah_ada" name="jumlah_rumah_ada" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_rumah_diperiksa">Jumlah Rumah yang Diperiksa</label>
                    <input type="number" class="form-control" id="jumlah_rumah_diperiksa" name="jumlah_rumah_diperiksa" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_kontainer_diperiksa">Jumlah Kontainer/Wadah yang Diperiksa</label>
                    <input type="number" class="form-control" id="jumlah_kontainer_diperiksa" name="jumlah_kontainer_diperiksa" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_rumah_positif">Jumlah Rumah yang Ditemukan Positif Jentik</label>
                    <input type="number" class="form-control" id="jumlah_rumah_positif" name="jumlah_rumah_positif" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_rumah_negatif">Jumlah Rumah yang Ditemukan Negatif Jentik</label>
                    <input type="number" class="form-control" id="jumlah_rumah_negatif" name="jumlah_rumah_negatif" required>
                </div>
                <div class="form-group">
                    <label for="kendala">Kendala yang Dihadapi</label>
                    <input type="text" class="form-control" id="kendala" name="kendala" required>
                </div>
                <div class="form-group">
                    <label for="usul_saran">Usul dan Saran</label>
                    <input type="text" class="form-control" id="usul_saran" name="usul_saran" required>
                </div>
                <div class="form-group">
                    <label for="abj">ABJ</label>
                    <input type="text" class="form-control" id="abj" name="abj" disabled placeholder="*menghitung otomatis">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

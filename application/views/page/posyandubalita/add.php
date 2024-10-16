<!-- Begin Page Content -->
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('/Dashboard'); ?>" style="color: black;">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= base_url('/PosyanduBalita'); ?>" style="color: black;">Posyandu Balita</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data - Posyandu Balita</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('/PosyanduBalita'); ?>" class="btn bg-secondary">
                <i class="fas fa-fw fa-arrow-left" style="color: #ffffff;"></i>
                <span style="color: #ffffff; padding-left: 10px;">Kembali</span>
            </a>
        </div>

        <div class="card-body">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nama_posyandu">Nama Posyandu</label>
                    <input type="text" class="form-control" id="nama_posyandu" name="nama_posyandu" required>
                </div>
                <div class="form-group">
                    <label for="alamat_posyandu">Alamat Posyandu</label>
                    <input type="text" class="form-control" id="alamat_posyandu" name="alamat_posyandu" required>
                </div>
                <div class="form-group">
                    <label for="bulan_penimbangan">Bulan Penimbangan</label>
                    <input type="date" class="form-control" id="bulan_penimbangan" name="bulan_penimbangan" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_balita_sasaran">Jumlah Balita Sasaran</label>
                    <input type="number" class="form-control" id="jumlah_balita_sasaran" name="jumlah_balita_sasaran" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_balita_datang">Jumlah Balita yang Datang Menimbang</label>
                    <input type="number" class="form-control" id="jumlah_balita_datang" name="jumlah_balita_datang" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_balita_naik_bb">Jumlah Balita yang Naik Berat Badannya</label>
                    <input type="number" class="form-control" id="jumlah_balita_naik_bb" name="jumlah_balita_naik_bb" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_balita_tidak_naik_bb">Jumlah Balita yang Tidak Naik BB nya</label>
                    <input type="number" class="form-control" id="jumlah_balita_tidak_naik_bb" name="jumlah_balita_tidak_naik_bb" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_balita_baru_menimbang">Jumlah Balita yang Baru Data Menimbang</label>
                    <input type="number" class="form-control" id="jumlah_balita_baru_menimbang" name="jumlah_balita_baru_menimbang" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_balita_tidak_datang_sebelumnya">Jumlah Balita yang Tidak Datang Menimbang di Bulan Sebelumnya</label>
                    <input type="number" class="form-control" id="jumlah_balita_tidak_datang_sebelumnya" name="jumlah_balita_tidak_datang_sebelumnya" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_bayi_asi">Jumlah Bayi 0-5 bulan 29 Hari yang Mendapat ASI</label>
                    <input type="number" class="form-control" id="jumlah_bayi_asi" name="jumlah_bayi_asi" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_bayi_non_asi">Jumlah Bayi 0-5 Bulan 29 Hari yang Sudah Diberikan Makanan/Minuman Selain ASI atau Tidak ASI</label>
                    <input type="number" class="form-control" id="jumlah_bayi_non_asi" name="jumlah_bayi_non_asi" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_bayi_tidak_terdata_asi">Jumlah Bayi 0-5 Bulan 29 Hari yang Tidak Terdata ASI</label>
                    <input type="number" class="form-control" id="jumlah_bayi_tidak_terdata_asi" name="jumlah_bayi_tidak_terdata_asi" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_anak_vit_a">Jumlah Anak yang Mendapat VIT.A (Khusus Bulan Februari dan Agustus)</label>
                    <input type="number" class="form-control" id="jumlah_anak_vit_a" name="jumlah_anak_vit_a" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_anak_obat_cacing">Jumlah Anak yang Mendapat Obat Cacing (Khusus Mei dan November/ Sesuai Jadwal Bulan Obat Cacing)</label>
                    <input type="number" class="form-control" id="jumlah_anak_obat_cacing" name="jumlah_anak_obat_cacing" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_balita_imunisasi_lengkap">Jumlah Balita yang Memiliki Imunisasi Dasar Lengkap</label>
                    <input type="number" class="form-control" id="jumlah_balita_imunisasi_lengkap" name="jumlah_balita_imunisasi_lengkap" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_balita_imunisasi_bulan_ini">Jumlah Balita Yang Imunisasi Bulan Ini</label>
                    <input type="number" class="form-control" id="jumlah_balita_imunisasi_bulan_ini" name="jumlah_balita_imunisasi_bulan_ini" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_balita_bgm">Jumlah Balita BGM</label>
                    <input type="number" class="form-control" id="jumlah_balita_bgm" name="jumlah_balita_bgm" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_balita_gizi_kurang">Jumlah Balita Gizi Kurang</label>
                    <input type="number" class="form-control" id="jumlah_balita_gizi_kurang" name="jumlah_balita_gizi_kurang" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_balita_gizi_buruk">Jumlah Balita Gizi Buruk</label>
                    <input type="number" class="form-control" id="jumlah_balita_gizi_buruk" name="jumlah_balita_gizi_buruk" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_balita_pendek">Jumlah Balita Yang Pendek</label>
                    <input type="number" class="form-control" id="jumlah_balita_pendek" name="jumlah_balita_pendek" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_balita_dirujuk">Jumlah Balita Yang Dirujuk ke Puskesmas Bulan Ini</label>
                    <input type="number" class="form-control" id="jumlah_balita_dirujuk" name="jumlah_balita_dirujuk" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_balita_gangguan_perkembangan">Jumlah Balita Yang Memiliki Masalah Gangguan Perkembangan</label>
                    <input type="number" class="form-control" id="jumlah_balita_gangguan_perkembangan" name="jumlah_balita_gangguan_perkembangan" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_ibu_hamil">Jumlah Ibu Hamil</label>
                    <input type="number" class="form-control" id="jumlah_ibu_hamil" name="jumlah_ibu_hamil" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_ibu_nifas">Jumlah Ibu Nifas</label>
                    <input type="number" class="form-control" id="jumlah_ibu_nifas" name="jumlah_ibu_nifas" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_kader_kelurahan">Jumlah Kader Se Kelurahan</label>
                    <input type="number" class="form-control" id="jumlah_kader_kelurahan" name="jumlah_kader_kelurahan" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_kader_aktif">Jumlah Kader Yang Aktif di Posyandu</label>
                    <input type="number" class="form-control" id="jumlah_kader_aktif" name="jumlah_kader_aktif" required>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('/Dashboard'); ?>" style="color: black;">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= base_url('/Dasawisma'); ?>" style="color: black;">Dasawisma</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data - Dasawisma</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('/Dasawisma'); ?>" class="btn bg-secondary">
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
                    <label for="no_id_kader">No ID Kader</label>
                    <input type="text" class="form-control" id="no_id_kader" name="no_id_kader" required>
                </div>
                <div class="form-group">
                    <label for="nama_kader">Nama Kader</label>
                    <input type="text" class="form-control" id="nama_kader" name="nama_kader" required>
                </div>
                <div class="form-group">
                    <label for="nomor_hp">Nomor Handphone</label>
                    <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" required>
                </div>
                <div class="form-group">
                    <label for="nik_kader">NIK Kader</label>
                    <input type="text" class="form-control" id="nik_kader" name="nik_kader" required>
                </div>
                <div class="form-group">
                    <label for="nama_kelompok_dasawisma">Nama Kelompok Dasawisma</label>
                    <input type="text" class="form-control" id="nama_kelompok_dasawisma" name="nama_kelompok_dasawisma" required>
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
                    <label for="kelurahan">Kelurahan</label>
                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_rumah_didata">Jumlah Rumah yang Didata</label>
                    <input type="number" class="form-control" id="jumlah_rumah_didata" name="jumlah_rumah_didata" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_warga_didata">Jumlah Warga yang Didata</label>
                    <input type="number" class="form-control" id="jumlah_warga_didata" name="jumlah_warga_didata" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_bayi_lahir">Jumlah Bayi yang Lahir</label>
                    <input type="number" class="form-control" id="jumlah_bayi_lahir" name="jumlah_bayi_lahir" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_warga_meninggal">Jumlah Warga Meninggal</label>
                    <input type="number" class="form-control" id="jumlah_warga_meninggal" name="jumlah_warga_meninggal" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_warga_pindah">Jumlah Warga Pindah</label>
                    <input type="number" class="form-control" id="jumlah_warga_pindah" name="jumlah_warga_pindah" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_warga_pendatang">Jumlah Warga Pendatang</label>
                    <input type="number" class="form-control" id="jumlah_warga_pendatang" name="jumlah_warga_pendatang" required>
                </div>

                <h5>Menggerakkan Partisipasi Warga dalam Pelaksanaan Kegiatan 10 Program Pokok PKK</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="kegiatan_penghayatan_pancasila" name="kegiatan_penghayatan_pancasila">
                    <label class="form-check-label" for="kegiatan_penghayatan_pancasila">Kegiatan Penghayatan dan Pengamalan Pancasila</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="kegiatan_gotong_royong" name="kegiatan_gotong_royong">
                    <label class="form-check-label" for="kegiatan_gotong_royong">Kegiatan Gotong Royong</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="kegiatan_pangan" name="kegiatan_pangan">
                    <label class="form-check-label" for="kegiatan_pangan">Kegiatan Pangan</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="kegiatan_sandang" name="kegiatan_sandang">
                    <label class="form-check-label" for="kegiatan_sandang">Kegiatan Sandang</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="kegiatan_perumahan" name="kegiatan_perumahan">
                    <label class="form-check-label" for="kegiatan_perumahan">Kegiatan Perumahan dan Tatalaksana Rumah Tangga</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="kegiatan_pendidikan" name="kegiatan_pendidikan">
                    <label class="form-check-label" for="kegiatan_pendidikan">Kegiatan Pendidikan dan Keterampilan</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="kegiatan_kesehatan" name="kegiatan_kesehatan">
                    <label class="form-check-label" for="kegiatan_kesehatan">Kegiatan Kesehatan</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="kegiatan_berkoperasi" name="kegiatan_berkoperasi">
                    <label class="form-check-label" for="kegiatan_berkoperasi">Kegiatan Pengembangan Kehidupan Berkoperasi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="kegiatan_kelestarian" name="kegiatan_kelestarian">
                    <label class="form-check-label" for="kegiatan_kelestarian">Kegiatan Kelestarian Lingkungan Hidup</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="kegiatan_perencanaan_sehat" name="kegiatan_perencanaan_sehat">
                    <label class="form-check-label" for="kegiatan_perencanaan_sehat">Kegiatan Perencanaan Sehat</label>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

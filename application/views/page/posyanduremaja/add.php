<!-- Begin Page Content -->
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('/Dashboard'); ?>" style="color: black;">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= base_url('/PosyanduRemaja'); ?>" style="color: black;">Posyandu Remaja</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data - Posyandu Remaja</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('/PosyanduRemaja'); ?>" class="btn bg-secondary">
                <i class="fas fa-fw fa-arrow-left" style="color: #ffffff;"></i>
                <span style="color: #ffffff; padding-left: 10px;">Kembali</span>
            </a>
        </div>

        <div class="card-body">
            <form method="POST" action="">
                <!-- Form input sesuai dengan gambar -->
                <div class="form-group">
                    <label for="waktu_ke_posyandu">Waktu ke Posyandu</label>
                    <input type="date" class="form-control" id="waktu_ke_posyandu" name="waktu_ke_posyandu" required>
                </div>

                <h5>Pemeriksaan</h5>

                <div class="form-group">
                    <label for="tekanan_darah">Tekanan Darah</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="sistole" name="sistole" placeholder="Sistole" required>
                        <input type="text" class="form-control" id="diastole" name="diastole" placeholder="Diastole" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="lingkar_perut">Lingkar Perut (cm)</label>
                    <input type="number" class="form-control" id="lingkar_perut" name="lingkar_perut" required>
                </div>

                <div class="form-group">
                    <label for="berat_badan">Berat Badan (kg)</label>
                    <input type="number" class="form-control" id="berat_badan" name="berat_badan" required>
                </div>

                <div class="form-group">
                    <label for="tinggi_badan">Tinggi Badan (cm)</label>
                    <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" required>
                </div>

                <div class="form-group">
                    <label for="imt">Indeks Masa Tubuh (IMT) (cm)</label>
                    <input type="number" class="form-control" id="imt" name="imt" required>
                </div>

                <h5>Status Gizi</h5>

                <div class="form-group">
                    <label for="status_gizi">Status Gizi</label>
                    <select class="form-control" id="status_gizi" name="status_gizi" required>
                        <option value="kurus">Kurus</option>
                        <option value="normal">Normal</option>
                        <option value="obesitas">Obesitas</option>
                    </select>
                </div>

                <h5>DM</h5>

                <div class="form-group">
                    <label for="gds_kurang_15">GDS (< 15 Thn) Obesitas dan HT</label>
                    <input type="number" class="form-control" id="gds_kurang_15" name="gds_kurang_15" required>
                </div>

                <div class="form-group">
                    <label for="gds_lebih_15">GDS (> 15 Thn)</label>
                    <input type="number" class="form-control" id="gds_lebih_15" name="gds_lebih_15" required>
                </div>

                <div class="form-group">
                    <label for="hasil_dm">Hasil</label>
                    <select class="form-control" id="hasil_dm" name="hasil_dm" required>
                        <option value="normal">N: Normal</option>
                        <option value="tinggi">T: Tinggi</option>
                    </select>
                </div>

                <h5>Anemia</h5>

                <div class="form-group">
                    <label>Gejala Anemia</label>
                    <div class="d-flex">
                        <div class="form-check mr-3">
                            <input class="form-check-input" type="radio" name="gejala_anemia" id="gejala_anemia_ya" value="Ya" required>
                            <label class="form-check-label" for="gejala_anemia_ya">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gejala_anemia" id="gejala_anemia_tidak" value="Tidak" required>
                            <label class="form-check-label" for="gejala_anemia_tidak">
                                Tidak
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="kadar_hb">Kadar HB (mg/dl)</label>
                    <input type="number" class="form-control" id="kadar_hb" name="kadar_hb" required>
                </div>

                <div class="form-group">
                    <label for="hasil_anemia">Hasil</label>
                    <input type="text" class="form-control" id="hasil_anemia" name="hasil_anemia" required>
                </div>

                <div class="form-group">
                    <label for="pemberian_tablet_tambah_darah">Pemberian Tablet Tambah Darah (Rematri)</label>
                    <input type="text" class="form-control" id="pemberian_tablet_tambah_darah" name="pemberian_tablet_tambah_darah" required>
                </div>

                <h5>Headsess</h5>

                <div class="form-group">
    <label for="home">Home</label>
    <div class="form-group">
        <label for="anak_ke_berapa">• Anak ke berapa dari berapa bersaudara?</label>
        <input type="text" class="form-control" id="anak_ke_berapa" name="anak_ke_berapa" required>
    </div>
    <div class="form-group">
        <label for="tinggal_dengan_siapa">• Tinggal dengan siapa?</label>
        <input type="text" class="form-control" id="tinggal_dengan_siapa" name="tinggal_dengan_siapa" required>
    </div>
</div>


<div class="form-group">
    <label for="education">Education / Employment</label>
    <div class="form-group">
        <label for="sekolah">• Sekolah</label>
        <input type="text" class="form-control" id="sekolah" name="sekolah" required>
    </div>
    <div class="form-group">
        <label for="kelas">• Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas" required>
    </div>
</div>

<div class="form-group">
    <label for="eating">Eating</label>
    <div class="form-group">
        <label for="jumlah_makan">• Jumlah makan dalam sehari</label>
        <input type="number" class="form-control" id="jumlah_makan" name="jumlah_makan" required>
    </div>
</div>

<div class="form-group">
    <label for="activity">Activity</label>
    <div class="form-group">
        <label>• Apakah ada kegiatan di luar sekolah?</label>
        <div class="d-flex">
            <div class="form-check mr-3">
                <input class="form-check-input" type="radio" name="kegiatan_luar_sekolah" id="kegiatan_luar_sekolah_ya" value="Ya" required>
                <label class="form-check-label" for="kegiatan_luar_sekolah_ya">
                    Ya
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="kegiatan_luar_sekolah" id="kegiatan_luar_sekolah_tidak" value="Tidak" required>
                <label class="form-check-label" for="kegiatan_luar_sekolah_tidak">
                    Tidak
                </label>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="drug">Drug</label>
    <div class="form-group">
        <label>• Apakah mengkonsumsi rokok/narkoba?</label>
        <div class="d-flex">
            <div class="form-check mr-3">
                <input class="form-check-input" type="radio" name="konsumsi_rokok_narkoba" id="konsumsi_rokok_narkoba_ya" value="Ya" required>
                <label class="form-check-label" for="konsumsi_rokok_narkoba_ya">
                    Ya
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="konsumsi_rokok_narkoba" id="konsumsi_rokok_narkoba_tidak" value="Tidak" required>
                <label class="form-check-label" for="konsumsi_rokok_narkoba_tidak">
                    Tidak
                </label>
            </div>
        </div>
    </div>
</div>


             
<div class="form-group">
    <label for="sexuality">Sexuality</label>
    <div class="form-group">
        <label>• Mengalami gangguan siklus haid?</label>
        <div class="d-flex">
            <div class="form-check mr-3">
                <input class="form-check-input" type="radio" name="gangguan_siklus_haid" id="gangguan_siklus_haid_ya" value="Ya" required>
                <label class="form-check-label" for="gangguan_siklus_haid_ya">
                    Ya
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gangguan_siklus_haid" id="gangguan_siklus_haid_tidak" value="Tidak" required>
                <label class="form-check-label" for="gangguan_siklus_haid_tidak">
                    Tidak
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>• Apakah tertarik dengan lawan jenis?</label>
        <div class="d-flex">
            <div class="form-check mr-3">
                <input class="form-check-input" type="radio" name="tertarik_lawan_jenis" id="tertarik_lawan_jenis_ya" value="Ya" required>
                <label class="form-check-label" for="tertarik_lawan_jenis_ya">
                    Ya
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tertarik_lawan_jenis" id="tertarik_lawan_jenis_tidak" value="Tidak" required>
                <label class="form-check-label" for="tertarik_lawan_jenis_tidak">
                    Tidak
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>• Apakah pernah tertarik melakukan hubungan seksual?</label>
        <div class="d-flex">
            <div class="form-check mr-3">
                <input class="form-check-input" type="radio" name="tertarik_hubungan_seksual" id="tertarik_hubungan_seksual_ya" value="Ya" required>
                <label class="form-check-label" for="tertarik_hubungan_seksual_ya">
                    Ya
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tertarik_hubungan_seksual" id="tertarik_hubungan_seksual_tidak" value="Tidak" required>
                <label class="form-check-label" for="tertarik_hubungan_seksual_tidak">
                    Tidak
                </label>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="safety">Safety</label>
    <div class="form-group">
        <label>• Apakah pernah ingin melukai diri/ bunuh diri?</label>
        <div class="d-flex">
            <div class="form-check mr-3">
                <input class="form-check-input" type="radio" name="ingin_melukai_diri" id="ingin_melukai_diri_ya" value="Ya" required>
                <label class="form-check-label" for="ingin_melukai_diri_ya">
                    Ya
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ingin_melukai_diri" id="ingin_melukai_diri_tidak" value="Tidak" required>
                <label class="form-check-label" for="ingin_melukai_diri_tidak">
                    Tidak
                </label>
            </div>
        </div>
    </div>
</div>

                <h5>SDQ</h5>

                <div class="form-group">
                    <label for="total_e_ch_p_p">Total E + C + H + P</label>
                    <input type="number" class="form-control" id="total_e_ch_p_p" name="total_e_ch_p_p" required>
                </div>

                <div class="form-group">
                    <label for="total_pr">Total PR</label>
                    <input type="number" class="form-control" id="total_pr" name="total_pr" required>
                </div>

                <h5>Konseling</h5>

                <div class="form-group">
                    <label for="konseling">Konseling</label>
                    <input type="text" class="form-control" id="konseling" name="konseling" required>
                </div>

                <h5>Rujuk</h5>

                <div class="form-group">
                    <label for="rujuk">Rujuk</label>
                    <input type="text" class="form-control" id="rujuk" name="rujuk" required>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

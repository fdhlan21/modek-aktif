<style>

.header-container {
    padding: 10px;
    background-color: #AD6163;
    width: 100%;
    position: fixed;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.content-header {
    padding: 10px;
    text-align: center;
    color: white;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
}

.content-header h3 {
font-size: 50px;
}

.content-header a, img {
    width: auto;
    height: 30px;
}

.main-container {
    padding: 10px;
    margin-top: 10%;
    width: 100%;
    height: 100%;
    font-family: 'Poppins', sans-serif;
    color: black;

}

.menu-checklist-container {
    padding: 50px;
    
}

.checklist-container {
   
    background-color: white;
    border: 1px solid #D49394 ;
    border-radius: 10px;
    margin-top: 10px;
}

.checklist-container p {
    padding: 10px;
    font-weight: 600;
    color: #6EB2B0;
    font-size: 20px;
   
}

.fase1-grop-cheklist label {
    text-align: justify;
    padding-left: 10px;

}

.radio-buttons {
    display: none;
    padding: 10px;
}

.radio-buttons label {
    display: block;
    font-weight: 500;
    color: #AD6163;
    padding-top: 5px;
    padding-left: 10px;
    font-size: 18px;
}

.strip {
    padding: 0.5px;
    background-color: #AD6163;
    border-radius: 50px;
}

.btn-container {
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.btn-simpan {
    background-color: #6EB2B0;
    border-radius: 10px;
    color: white;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    width: 500px;
    border: 0px;
    padding: 10px;

}

.btn-reset {
    background-color: #AD6163;
    border-radius: 10px;
    color: white;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    width: 500px;
    border: 0px;
    color: white;
    padding: 10px;
}



/* Media query untuk tampilan mobile dengan lebar maksimal 480px */
@media only screen and (max-width: 480px) {
    .content-header h3 {
        font-size: 24px; /* Ukuran header lebih kecil di mobile */
    }

    .main-container {
        margin-top: 20%; /* Margin lebih besar untuk menghindari header yang tetap */
        
    }

    
}
 </style>
<!-- header -->
 <div class="header-container">
    <div class="content-header">
       <a href="<?= base_url('dashboard') ?>"><img src="../assets/img/icon/lef.png" alt=""></a>
    </div>

    <div class="content-header">
        <h3>Fase Mobilisasi</h3>
    </div>

    <div class="content-header">
       <div style="padding:10px;"></div>
    </div>
 </div>

 <!-- main -->
  <div class="main-container">

  <div class="menu-checklist-container">
    <div class="checklist-container"  onclick="toggleRadioButtons('fase1', event)">
        <p>Fase Imobilisasi (Hari 0-1 Pasca Operasi)</p>
        <!-- muncul radio button -->
     
        <div id="fase1" class="radio-buttons">
        <div class="strip"></div>
        <br>
             <div class="fase1-grop-cheklist">
                <p>0-6 Jam Pasca Operasi</p>
                <label><input  class="checklist" type="checkbox" name="checklist" value="fase1_imobilisasi" > <strong>Imobilisasi</strong> : Pasien harus beristirahat total dan tidak melakukan pergerakan besar. Namun, pasien dapat melakukan gerakan sederhana seperti menggerakkan jari tangan dan kaki yang tidak terpengaruh oleh fraktur untuk menjaga sirkulasi darah.</label>
             </div>

             <div class="fase1-group-cheklist">
             <p>6-10 Jam Pasca Operasi</p>
                 <label><input  class="checklist" type="checkbox" name="checklist"  value="fase1_miring" > <strong>Miring Kanan dan Kiri</strong> : Keluarga dianjurkan untuk membantu pasien miring ke kanan dan ke kiri setiap 2 jam. Ini bertujuan untuk meningkatkan sirkulasi darah dan mencegah ketidaknyamanan di area insisi.</label>
                 <br>
                 <label><input  class="checklist" type="checkbox" name="checklist"  value="fase1_rom" > <strong>Latihan Rentang Gerak Pasif </strong>: Keluarga dapat membantu melakukan latihan ROM pasif untuk sendi-sendi yang tidak terpengaruh oleh fraktur. Latihan ini penting untuk menjaga kelenturan sendi dan mencegah kekakuan.</label>
             </div>
                
            </div>


    </div>

    <div class="checklist-container"  onclick="toggleRadioButtons('fase2', event)">
        <p>Fase Mobilisasi Dini (Hari 1-4 Pasca Operasi)</p>
        <!-- muncul radio button -->
    
        <div id="fase2" class="radio-buttons">

        <div class="strip"></div>
        <br>

        <div class="fase2-grop-cheklist">
                <p>Hari 1 (10-24 Jam Pasca Operasi)</p>
                <label><input  class="checklist" type="checkbox" name="checklist" value="fase2_miring_kanan_kiri" > <strong> Miring Kanan dan Kiri</strong> : Pasien terus melakukan gerakan miring dengan bantuan keluarga untuk meningkatkan sirkulasi darah</label>
                <br>
                <label><input  class="checklist" type="checkbox" name="checklist" value="fase2_duduk_di_tempat_tidur"  > <strong>Duduk di Tempat Tidur</strong> : Setelah 24 jam, keluarga dianjurkan untuk membantu pasien belajar duduk di tepi tempat tidur. Jika nyeri dapat ditoleransi, pasien dapat mencoba duduk tanpa bersandar.</label>
                <br>
                <label><input  class="checklist" type="checkbox" name="checklist" value="fase2_latihan_rentang_gerak_aktif"  > <strong>Latihan Rentang Gerak Aktif</strong> : Pasien dapat mulai melakukan gerakan aktif dengan kaki yang tidak terpengaruh oleh fraktur. Kaki yang dioperasi biasanya masih dalam proses penyembuhan dan harus dihindari dari latihan aktif pada tahap ini.</label>
             </div>

             <div class="fase2-group-cheklist">
             <p>Hari 2 (24-48 Jam Pasca Operasi)</p>
                 <label><input  class="checklist" type="checkbox" name="checklist" value="fase2_latihan_duduk_dan_berdiri"  >  <strong>Latihan Duduk dan Berdiri</strong>: Keluarga harus membantu pasien untuk duduk di tepi tempat tidur dan mulai belajar berdiri dengan dukungan mereka. Pada tahap ini, pasien mungkin perlu menggunakan alat bantu seperti kruk saat berdiri untuk mengurangi beban pada kaki yang dioperasi.</label>
             </div>


             <div class="fase2-group-cheklist">
             <p>Hari 3 (48-72 Jam Pasca Operasi)</p>
                 <label><input  class="checklist" type="checkbox" name="checklist" value="fase2_berdiri_dan_berjalan"  > <strong>Berdiri dan Berjalan</strong> : Keluarga diharapkan dapat membantu pasien berdiri dengan bantuan dan mulai berlatih berjalan di sekitar tempat tidur. Pada tahap ini, pasien sebaiknya menggunakan kruk untuk mendukung berat badan dan mengurangi tekanan pada kaki yang dioperasi.</label>
             </div>


             <div class="fase2-group-cheklist">
             <p>Hari 4 (73-96 Jam Pasca Operasi)</p>
                 <label><input  class="checklist" type="checkbox" name="checklist" value="fase2_berjalan_mandiri_tanpa_alat_bantu" > <strong>Berjalan Mandiri Tanpa Alat Bantu </strong>: Pada tahap ini, pasien diharapkan sudah dapat berjalan dengan bantuan minimal dari orang lain. Setelah merasa lebih kuat dan percaya diri, pasien dapat berlatih berjalan tanpa alat bantu. Penting untuk memastikan bahwa pasien merasa nyaman dan tidak mengalami nyeri saat melakukan gerakan ini.</label>
             </div>
            </div>
    </div>


    <div class="checklist-container"  onclick="toggleRadioButtons('fase3', event)">
        <p>Fase Pemulihan Lanjut (Setelah Hari ke-4)</p>
        <!-- muncul radio button -->
        <div id="fase3" class="radio-buttons">

        <div class="strip"></div>
        <br>
        <div class="fase1-grop-cheklist">
               
                <label><input  class="checklist" type="checkbox" name="checklist" value="fase3_latihan_rentang_gerak" > <strong>Latihan Rentang Gerak Aktif</strong>: Pasien dapat melakukan latihan rentang gerak aktif pada kaki yang dioperasi secara bertahap, sesuai dengan instruksi dokter. Latihan ini bertujuan untuk memperkuat otot dan meningkatkan jangkauan gerak sendi.</label>
             </div>

             <div class="fase1-group-cheklist">
            
                 <label><input  class="checklist" type="checkbox" name="checklist" value="fase3_aktivitas_fungsional" > <strong>Aktivitas Fungsional</strong>: Seiring dengan kemajuan pemulihan, pasien dapat mulai melakukan aktivitas fungsional seperti menaiki tangga, berjalan di luar ruangan, dan melakukan aktivitas sehari-hari lainnya. Keluarga dapat memberikan dukungan dan motivasi selama proses ini. </label>
                
             </div>
            </div>
    </div>

  </div>
  
  
  <div class="btn-container">
    <button class="btn-simpan" id="actionButton" onclick="handleAction()">Simpan</button>
  </div>
      

  </div>

  <script>
// Fungsi untuk menampilkan atau menyembunyikan radio button
function toggleRadioButtons(faseId, event) {
    // Cegah event bubbling jika elemen yang diklik adalah checkbox atau elemen dalam sub-menu
    if (event.target.tagName === 'INPUT' || event.target.closest('.radio-buttons')) return;

    var radios = document.getElementById(faseId);
    
    // Jika menu sudah terbuka, tutup; jika belum, buka
    if (radios.style.display === "block") {
        radios.style.display = "none";
    } else {
        radios.style.display = "block";
    }
}
// Fungsi untuk menghitung jumlah checkbox yang tercentang
function handleAction() {
    const checkboxes = document.querySelectorAll('.checklist');
    const checked = Array.from(checkboxes).filter(checkbox => checkbox.checked);
    
    if (checked.length === checkboxes.length) {
        resetChecklist();
    } else {
        alert("Data berhasil disimpan.");
    }
}

// Fungsi untuk reset semua checkbox
function resetChecklist() {
    const checkboxes = document.querySelectorAll('.checklist');
    checkboxes.forEach(checkbox => checkbox.checked = false);
    
    document.getElementById('actionButton').innerText = 'Simpan';
    document.getElementById('actionButton').classList.remove('btn-reset');
    document.getElementById('actionButton').classList.add('btn-simpan');
}

// Pantau perubahan checkbox untuk mengganti tombol simpan ke reset
document.querySelectorAll('.checklist').forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        const checkboxes = document.querySelectorAll('.checklist');
        const checked = Array.from(checkboxes).filter(checkbox => checkbox.checked);

        if (checked.length === checkboxes.length) {
            document.getElementById('actionButton').innerText = 'Reset Checklist';
            document.getElementById('actionButton').classList.remove('btn-simpan');
            document.getElementById('actionButton').classList.add('btn-reset');
        } else {
            document.getElementById('actionButton').innerText = 'Simpan';
            document.getElementById('actionButton').classList.remove('btn-reset');
            document.getElementById('actionButton').classList.add('btn-simpan');
        }
    });
});
</script>

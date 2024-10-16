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

.list-container {
    padding: 10px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    display: flex;
}

.list-img {
    width: 332px;
    height: 206px;
}

/* Media query untuk tampilan mobile dengan lebar maksimal 480px */
@media only screen and (max-width: 480px) {
    .content-header h3 {
        font-size: 24px; /* Ukuran header lebih kecil di mobile */
    }

    .main-container {
        margin-top: 20%; /* Tambahkan margin atas lebih besar untuk mobile */
    }

    .list-img {
        width: 100%; /* Sesuaikan gambar agar memenuhi lebar layar di mobile */
        height: auto; /* Sesuaikan tinggi gambar agar proporsional */
    }
}
</style>

<!-- header -->
<div class="header-container">
    <div class="content-header">
       <a href="<?= base_url('dashboard') ?>"><img src="../assets/img/icon/lef.png" alt=""></a>
    </div>

    <div class="content-header">
        <h3>Tahapan Mobilisasi</h3>
    </div>

    <div class="content-header">
       <div style="padding:10px;"></div>
    </div>
</div>

<!-- main -->
<div class="main-container">
    <div class="list-container">
        <div>
            <a href="<?= base_url('rencanapemulihan/tahapanmobilisasi_detail') ?>">
                <img class="list-img" src="../assets/img/icon/tahapanmobilitas1.png" alt="">
            </a>
        </div>
    </div>
</div>

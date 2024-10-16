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

.vid-container {
    padding: 10px;
}

.vid {
    display: flex;
    justify-content: center;
    align-items: center;
}

iframe {
    width: 560px;
    height: 315px;
    border-radius: 10px;
}

.deksripsi {
    padding: 30px;
}

.deksripsi p {
    text-align: justify;
    font-size: 20px;
    color: #AD6163;
}

.deksripsi h3 {
    color: #760507;
    font-weight: 600;
}

/* Media query untuk tampilan mobile dengan lebar maksimal 480px */
@media only screen and (max-width: 480px) {
    .content-header h3 {
        font-size: 24px; /* Ukuran header lebih kecil di mobile */
    }

    .main-container {
        margin-top: 25%; /* Margin lebih besar untuk menghindari header yang tetap */
    }

    .vid iframe {
        width: 350px; /* Sesuaikan lebar video agar memenuhi lebar layar */
        height: 206px; /* Sesuaikan tinggi video secara proporsional */
    }

    .deksripsi {
        padding: 20px; /* Padding lebih kecil di mobile */
    }

    .deksripsi p {
        font-size: 16px; /* Ukuran teks lebih kecil di mobile */
    }

    .deksripsi h3 {
        font-size: 26px;
    }
}
</style>

<!-- header -->
<div class="header-container">
    <div class="content-header">
       <a href="<?= base_url('rencanapemulihan/tahapanmobilisasi') ?>"><img src="../assets/img/icon/lef.png" alt=""></a>
    </div>

    <div class="content-header">
        <h3>Langkah-langkah Mobilisasi</h3>
    </div>

    <div class="content-header">
       <div style="padding:10px;"></div>
    </div>
</div>

<!-- main -->
<div class="main-container">
    <div class="vid-container">
        <div class="vid">
            <iframe src="https://www.youtube.com/embed/QMpc-UT0wrg" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>
        </div>

        <div class="deksripsi">
            <h3>Langkah-langkah Mobilisasi</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>

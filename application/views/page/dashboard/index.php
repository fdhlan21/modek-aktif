
    <style>
        @media (max-width: 480px) {
            .container {
                background-image: url('assets/img/icon/bghome.png');
                padding: 10px;
                background-size: 100% 100%;
                background-position: center;
                background-repeat: no-repeat;
                margin: 0;
                padding: 0;
                font-family: 'Poppins', sans-serif;
                min-height: 100vh;
        
                color: black;
            }

            .main-container {
                padding: 10px;
                margin: 10px;
            }

            .container-welcome {
                padding: 10px;
                margin-top: 20px;
            }

            .container-welcome h3 {
                color: black;
                font-family: 'Poppins', sans-serif;
                font-size: 15px;
            }

            .container-welcome h2 {
                color: black;
                font-family: 'Poppins', sans-serif;
                font-size: 28px;
            }

            .deksripsi-container {
                display: flex;
                gap: 10px;
                justify-content: center;
                align-items: center;
                margin-top: 50px;
                padding: 10px;
            }

            .icon-deks {
                align-items: center;
            }

            .icon-deks img {
                width: 73px;
                height: 129px;
            }

            .deks {
                align-items: center;
                margin-top: 20px;
            }

            .deks p {
                font-size: 15px;
                color: #B97374;
                font-weight: 500;
            }

            .menu-container {
                padding: 10px;
                display: flex;
                justify-content: space-between;
            }

            .menupertama-container,
            .menukedua-container {
                padding: 10px;
                border-radius: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 160px;
                height: 53px;
                gap: 10px;
                cursor: pointer;
                border: 2px solid transparent; /* Default border untuk menu aktif */
            }

            .menupertama-container.active {
                background-color: #AD6163; /* Warna background aktif */
                border-color: transparent; /* Tidak ada border untuk menu aktif */
            }

           
            .menukedua-container.active {
                background-color: #6EB2B0; /* Warna background aktif */
                border-color: transparent; /* Tidak ada border untuk menu aktif */
            }

            .menupertama-container:not(.active) {
                background-color: white; /* Background putih untuk menu non-aktif */
                border: 1px solid #AD6163; /* Border warna merah untuk menu non-aktif */
            }

            .menukedua-container:not(.active) {
                background-color: white; /* Background putih untuk menu non-aktif */
                border: 1px solid #6EB2B0; /* Border warna merah untuk menu non-aktif */
                color: #6EB2B0;
            }
            .menupertama-container img,
            .menukedua-container img {
                width: 36px;
                height: 36px;
                margin-right: 10px;
            }

            .menupertama-container p,
            .menukedua-container p {
                font-size: 15px;
                font-weight: bold;
                margin-right: 10px;
                width: 50%;
                margin-top: 15px;
            }

            .menupertama-container.active p,
            .menukedua-container.active p {
                color: white; /* Warna teks putih untuk menu aktif */
            }

            .menupertama-container:not(.active) p {
                color: #AD6163; /* Warna teks merah untuk menu non-aktif */
            }

          
            .menukedua-container:not(.active) p {
                color: #6EB2B0; /* Warna teks merah untuk menu non-aktif */
            }

            .menu-content {
                margin-top: 20px;
            }

            .menu-content a {
                display: block;
                margin: 10px 0;
                text-decoration: none;
                text-align: center;
                font-size: 15px;
                font-weight: 500;

        }

        #menu1-content a {
                color: #AD6163;
            }

        #menu2-content a {
            color: #6EB2B0;
        }

        .stripmenu1 {
            padding: 0.2px;
            background-color: #AD6163;
            border-radius: 50px;
        }

        .stripmenu2 {
            padding: 0.2px;
            background-color: #6EB2B0;
            border-radius: 50px;
        }

        #menu3-content {
            padding: 10px;
        }

        #menu3-content p {
            text-align: center;
            font-size: 18px;
            color: black;
            font-weight: 500;
        }

        .slider-container {
            display: flex;
            overflow-x: auto;
            gap: 10px;
            padding: 10px;
            scroll-behavior: smooth;
        }

        .slider-container img {
            min-width: 330px;
            height: 185px;
            flex-shrink: 0;
            cursor: pointer;
        }

        .slider-container::-webkit-scrollbar {
            height: 8px;
        }

        .slider-container::-webkit-scrollbar-thumb {
            background-color: #cccccc;
            border-radius: 10px;

        }
        .slider-container::-webkit-scrollbar-track {
            background-color: #f1f1f1;
        }

        .footer-dashboard {
            position: fixed;
    bottom: 0;
    max-width: 1205px;
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 10px;
    background-color: white;

    z-index: 1000;
    box-sizing: border-box; /* Menjaga padding dalam batasan lebar */
        }

        .icon-container {
            display: flex;
    justify-content: center;
    align-items: center;
    flex: 1; /* Agar setiap icon memiliki ukuran yang sama */
        }
        .icon {
            color: #7FB3B3;
    font-size: 30px; /* Sesuaikan ukuran icon */
    cursor: pointer;
        }


        }
     


        @media (min-width: 1025px) {
    .container {
        background-image: url('assets/img/icon/bghomedekstop.png');
        background-size: 100% auto; /* Ubah menjadi 100% untuk lebar, dan auto untuk mempertahankan proporsi */
        background-position: top center;
        background-repeat: no-repeat;
        padding: 0px 0px;
        font-family: 'Poppins', sans-serif;
        min-height: 100vh;
        max-width: 1200px;
        margin: 0 auto;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambahkan efek shadow */
        margin-top: 10px;
        border-radius: 10px;
    }

    .main-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .container-welcome {
        color: black;
        text-align: left;
        margin-bottom: 30px;
        padding-left: 10px; /* Agar lebih sejajar dengan background image */
    }

    .container-welcome h3 {
        font-size: 30px;
        font-weight: 500;
    }

    .container-welcome h2 {
        font-size: 40px;
        font-weight: 600;
        margin-top: 10px;
    }

    .deksripsi-container {
        display: flex;
        justify-content: flex-start; /* Agar gambar dan teks lebih dekat */
        align-items: center;
        gap: 15px; /* Merapatkan jarak antara gambar dan teks */
    }

    .icon-deks {
        max-width: 180px; /* Menambah ukuran gambar agar sedikit lebih besar */
    }

    .icon-deks img {
        width: 100%; 
        height: auto;
        object-fit: contain;
    }

    .deks {
        text-align: justify;
    }

    .deks p {
        font-size: 18px;
        color: #B97374;
        font-weight: 500;
        line-height: 1.6;
    }

    .menu-container {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-top: 20px;
    }

    .menupertama-container,
    .menukedua-container {
        padding: 20px;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 250px;
        height: 80px;
        gap: 15px;
        cursor: pointer;
        border: 2px solid transparent;
        font-size: 20px;
    }

    .menupertama-container.active {
        background-color: #AD6163;
    }

    .menukedua-container.active {
        background-color: #6EB2B0;
    }

    .menupertama-container:not(.active) {
        background-color: white;
        border: 2px solid #AD6163;
    }

    .menukedua-container:not(.active) {
        background-color: white;
        border: 2px solid #6EB2B0;
    }

    .menupertama-container img,
    .menukedua-container img {
        width: 40px;
        height: 40px;
    }

    .menupertama-container p,
    .menukedua-container p {
        font-size: 18px;
        font-weight: bold;
        margin: 0;
    }

    .menupertama-container.active p,
    .menukedua-container.active p {
        color: white;
    }

    .menupertama-container:not(.active) p {
        color: #AD6163;
    }

    .menukedua-container:not(.active) p {
        color: #6EB2B0;
    }

    .menu-content {
        margin-top: 20px;
        text-align: center;
    }

    .menu-content a {
        display: block;
        margin: 15px 0;
        text-decoration: none;
        font-size: 20px;
        font-weight: 500;
        color: black;
    }

    .stripmenu1,
    .stripmenu2 {
        padding: 2px;
        border-radius: 50px;
    }

    .stripmenu1 {
        background-color: #AD6163;
    }

    .stripmenu2 {
        background-color: #6EB2B0;
    }

    .slider-container {
        display: flex;
        overflow-x: auto;
        gap: 30px;
        padding: 30px;
        scroll-behavior: smooth;
    }

    .slider-container img {
        min-width: 400px;
        height: 250px;
        flex-shrink: 0;
        cursor: pointer;
    }

    .slider-container::-webkit-scrollbar {
        height: 12px;
    }

    .slider-container::-webkit-scrollbar-thumb {
        background-color: #cccccc;
        border-radius: 10px;
    }

    .slider-container::-webkit-scrollbar-track {
        background-color: #f1f1f1;
    }

    #menu1-content a {
                color: #AD6163;
            }

        #menu2-content a {
            color: #6EB2B0;
        }

        .footer-dashboard {
            position: fixed;
    bottom: 0;
    max-width: 1205px;
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 10px;
    background-color: white;

    z-index: 1000;
    box-sizing: border-box; /* Menjaga padding dalam batasan lebar */
        }

        .icon-container {
            display: flex;
    justify-content: center;
    align-items: center;
    flex: 1; /* Agar setiap icon memiliki ukuran yang sama */
        }
        .icon {
            color: #7FB3B3;
    font-size: 30px; /* Sesuaikan ukuran icon */
    cursor: pointer;
        }

     .scroll-to-top, .rounded {
        z-index: 1000;
     }
     .rounded {
        margin-right: 30px;

     }
}



    </style>


    <div class="container">
        <div class="main-container">
            <div class="container-welcome">
                <h3>Selamat Datang!</h3>
                <h2><?= $namalengkap ?></h2>
            </div>

            <div class="deksripsi-container">
                <div class="icon-deks">
                    <img src="assets/img/icon/icon_dokter.png" alt="">
                </div>

                <div class="deks">
                    <p>Informasi Kesehatan dan Rencana Pemulihan akan membantu Anda mempersiapkan dan mempercepat
                        pemulihan pasca operasi fraktur</p>
                </div>
            </div>

            <div class="menu-container">
                <div id="menu1" class="menupertama-container active" onclick="showMenu('menu1')">
                    <img src="assets/img/icon/icon_menupertama.png" alt="">
                    <p>Informasi Kesehatan</p>
                </div>

                <div id="menu2" class="menukedua-container" onclick="showMenu('menu2')">
                    <img src="assets/img/icon/icon_menukedua.png" alt="">
                    <p>Rencana Pemulihan</p>
                </div>
            </div>

            <div class="menu-content" id="menu1-content">
                <a href="<?= base_url('informasikesehatan/fraktur') ?>">Fraktur</a>
                <div class="stripmenu1"></div>
                <a href="<?= base_url('informasikesehatan/mobilisasi') ?>">Mobilisasi</a>
                <div class="stripmenu1"></div>
                <a href="<?= base_url('informasikesehatan/rentangerak') ?>">Rentang Gerak</a>
                <div class="stripmenu1"></div>
                <a href="<?= base_url('informasikesehatan/monitorbalutanluka') ?>">Monitor Balutan Luka Operasi</a>
                <div class="stripmenu1"></div>
            </div>

            <div class="menu-content" id="menu2-content" style="display: none;">
                <a href="<?= base_url('rencanapemulihan/fasemobilisasi') ?>">Fase Mobilisasi</a>
                <div class="stripmenu2"></div>
                <a href="<?= base_url('rencanapemulihan/tahapanmobilisasi')  ?>">Tahapan Mobilisasi</a>
                <div class="stripmenu2"></div>
                <a href="<?= base_url('rencanapemulihan/latihanrentangerak') ?>">Latihan Rentang Gerak</a>
                <div class="stripmenu2"></div>
            </div>


            <div class="menu-content" id="menu3-content">
                <p>Rekomendasi Olahraga dan Latihan Pasca Pemulihan Fraktur</p>

                <div class="slider-container">
                    <a href="<?= 'https://www.youtube.com/watch?v=_6hjIWhB8Yc'; ?>" ><img src="assets/img/slider/sayaslider1.png" alt="slider foto"></a>
                    <a href="<?= 'https://www.alodokter.com/komunitas/topic/saran-untuk-olahraga'; ?>"><img src="assets/img/slider/sayaslider2.png" alt="slider foto"></a>
                    <a href=""><img src="assets/img/slider/sayaslider3.png" alt="slider foto"></a>
                    <a href=""><img src="assets/img/slider/sayaslider4.png" alt="slider foto"></a>
                </div>

            </div>

        </div>

        <div class="footer-dashboard">
        <div class="icon-container">
        <i class="fas fa-home icon"></i>
    </div>
    <div class="icon-container">
       <a href="<?= base_url('profile'); ?>"> <i class="fas fa-user-circle icon"></i></a>
    </div>
        </div>

      
    </div>

    <script>
        function showMenu(menuId) {
            // Hapus kelas "active" dari kedua menu
            document.getElementById('menu1').classList.remove('active');
            document.getElementById('menu2').classList.remove('active');

            // Tambahkan kelas "active" ke menu yang dipilih
            document.getElementById(menuId).classList.add('active');

            // Sembunyikan semua konten menu
            document.getElementById('menu1-content').style.display = 'none';
            document.getElementById('menu2-content').style.display = 'none';

            // Tampilkan konten menu yang dipilih
            if (menuId === 'menu1') {
                document.getElementById('menu1-content').style.display = 'block';
            } else {
                document.getElementById('menu2-content').style.display = 'block';
            }
        }
    </script>

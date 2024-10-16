<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <!-- Tambahkan link ke CSS eksternal untuk gaya tambahan -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Gaya CSS tambahan */
        body {
            background-image: url('assets/img/icon/bgregister.png'); /* Ganti dengan path gambar Anda */
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh; /* Tambahkan ini agar background memenuhi tinggi layar */
            background-attachment: fixed; 
        }

        .login-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .login-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            width: 100%;
            width: 550px;
          
            margin-top: -20px;

        }

        .card-body {
            width: 550px;
          
        }

        .form-group {
            margin-bottom: 5px;
            padding: 10px;
            width: 500px;
         
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            height: 45px;
        }

        .btn-block {
            width: 100%;
            padding: 10px;
            background-color: #6EB2B0;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }

        .btn-block:hover {
            background-color: #2980b9;
        }

        .logo {
            padding: 10px;
            
            margin-top: 125vh;
        }

        .logo img {
            width: auto;
            height: 200px;
            margin-bottom: 20px;
        }

        .logoteks {
            padding: 10px;
            margin-top: 20px;
            
        }

        .logoteks img {
            width: auto;
            height: 50px;
        }

        a {
            text-decoration: none;
        }


        @media (max-width: 480px) {
            body {
                background-image: url('assets/img/icon/bgregister.png'); /* Ganti dengan path gambar mobile */
                background-size: 100% 100%; /* Pastikan background mobile juga memenuhi seluruh area */
                background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh; /* Tambahkan ini untuk tinggi layar */
           
              
            }

            .login-container {
                padding: 10px;
            }

            .login-card {
                padding: 20px;
                width: 90%;
            }

            .logo {
                margin-left: 15%;
              
                margin-top: 35vh;
            }

            .logo img {
                height: 129px;
                width: 129px;
                margin-bottom: 20px;
                align-items: center;
                align-self: center;
            }

            .logoteks {
                padding: 10px;
             
                width: 500px;
                display: flex;
                justify-content: center;
                align-items: center;
              

            }

            .logoteks-container {
                align-items: center;
              
                 padding: 10px;
                 margin-left: 30px;
                
            }

            .logoteks img {
                height: 50px;
                width: 350px;
                align-self: center;
            }

            .btn-register {
                font-size: 15px;
            }

            .card-body {
        
                align-items: center;
                width: 500px;
                display: flex;
                justify-content: center;
                margin-left: 30px;
            }

            .form-group {
            margin-bottom: 5px;
            padding: 10px;
            width: 100%;
            align-self: center;
            align-items: center;
            align-content: center;
        }

            .form-control {
                width: 100%;
            }
        }

       

        .btn-register {
            color: black;
            margin-top: 10px;
        }

        .btn-register strong {
            font-weight: bold;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <!-- DIV UNTUK LOGO -->
            <div class="logo">
                <img src="assets/img/icon/logo.png" alt="Logo">
            </div>
            <div class="logoteks">
                <div class="logoteks-container">
                    <img src="assets/img/icon/logoteks.png" alt="">
                </div>
            </div>
            <div class="login-card animate__animated animate__fadeInDown">
                <div class="card-body">
                    <form class="user" method="post" action="<?= base_url('register'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Nama Lengkap" required>
                            <small class="text-danger"><?= form_error('namalengkap'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir" required>
                            <small class="text-danger"><?= form_error('tempatlahir'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" placeholder="Tanggal Lahir" required>
                            <small class="text-danger"><?= form_error('tanggallahir'); ?></small>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="jeniskelamin" id="jeniskelamin" required>
                                <option value="">Jenis Kelamin</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <small class="text-danger"><?= form_error('jeniskelamin'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="operasi" name="operasi" placeholder="Operasi" required>
                            <small class="text-danger"><?= form_error('operasi'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="time" class="form-control" id="waktuoperasi" name="waktuoperasi" placeholder="Waktu Operasi" required>
                            <small class="text-danger"><?= form_error('waktuoperasi'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" id="nomortelepon" name="nomortelepon" placeholder="Nomor Telepon" required>
                            <small class="text-danger"><?= form_error('nomortelepon'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Buat Katasandi" required>
                            <small class="text-danger"><?= form_error('password'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Konfirmasi Kata Sandi" required>
                            <small class="text-danger"><?= form_error('repassword'); ?></small>
                        </div>



                        <div class="form-group">
                            <button class="btn btn-block" type="submit">Masuk</button>
                        </div>
                        <div class="form-group">
                            <p style="text-align: center; color: #aaa;"><a class="btn-register" href="<?php echo base_url('login') ?>">Sudah memiliki akun? Silakan<strong> masuk</strong></a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
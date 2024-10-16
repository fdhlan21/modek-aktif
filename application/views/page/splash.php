<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Splash</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body {
            background-color: #760507;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .splash-container {
            text-align: center;
            color: white;
        }

        .splash-logo {
            width: 240px;
            height: auto;
            margin-bottom: 20px;
        }

        .splash-title {
            font-size: 36px;
            font-weight: bold;
        }

        .splash-subtitle {
            font-size: 18px;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .splash-logo {
                width: 150px;
            }

            .splash-title {
                font-size: 28px;
            }

            .splash-subtitle {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .splash-logo {
                height: 240px;
                width: 240PX;
            }

            .splash-title {
                font-size: 40px;
            }

            .splash-subtitle {
                font-size: 17px;
                margin-top: -30px;
            }

            
        }
    </style>
</head>

<body>
    <div class="splash-container animate__animated animate__fadeIn">
        <img src="assets/img/icon/logo.png" alt="Logo" class="splash-logo">
        <p class="splash-title">MODEAKTIF</p>
        <p class="splash-subtitle">Mobilization Educational Application<br>For Post Operative Fracture Patients</p>
    </div>

    <script>
        setTimeout(function () {
            window.location.href = '<?= site_url("login") ?>';
        }, 3000); // Redirect setelah 3 detik
    </script>
</body>

</html>
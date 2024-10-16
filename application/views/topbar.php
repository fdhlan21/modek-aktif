<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white" style="border-bottom: 5px solid #4682A9;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" id="brandText">
                    <div>
                        <h1 class="m-0" style="font-family: 'Poppins', sans-serif; font-size: 24px; color: #4682A9;">SI LAPOR MPO ATIK</h1>
                        <p class="m-0" style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #4682A9;">Selamat Datang!</p>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary mx-2 <?= $this->uri->segment(1) == 'Dashboard' ? 'active' : '' ?>" href="<?= base_url('Dashboard'); ?>" style="font-family: 'Poppins', sans-serif;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary mx-2 <?= $this->uri->segment(1) == 'PosyanduBalita' ? 'active' : '' ?>" href="<?= base_url('PosyanduBalita'); ?>" style="font-family: 'Poppins', sans-serif;">Posyandu Balita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary mx-2 <?= $this->uri->segment(1) == 'PosyanduRemaja' ? 'active' : '' ?>" href="<?= base_url('PosyanduRemaja'); ?>" style="font-family: 'Poppins', sans-serif;">Posyandu Remaja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary mx-2 <?= $this->uri->segment(1) == 'Jumantik' ? 'active' : '' ?>" href="<?= base_url('Jumantik'); ?>" style="font-family: 'Poppins', sans-serif;">Jumantik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary mx-2 <?= $this->uri->segment(1) == 'Dasawisma' ? 'active' : '' ?>" href="<?= base_url('Dasawisma'); ?>" style="font-family: 'Poppins', sans-serif;">Dasawisma</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary mx-2 <?= $this->uri->segment(1) == 'Profile' ? 'active' : '' ?>" href="<?= base_url('Profile'); ?>" style="font-family: 'Poppins', sans-serif;">Profile</a>
                        </li>
                    </ul>
                </div>
                <div class="ml-auto" id="logoImage">
                    <img src="assets/img/icon/logo.png" height="55px" alt="Secondary Logo">
                </div>
            </div>
        </nav>
        <!-- End of Topbar -->

<script>
    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        const brandText = document.getElementById('brandText');
        const logoImage = document.getElementById('logoImage');
        if (brandText.style.display === 'none') {
            brandText.style.display = 'block';
            logoImage.style.display = 'block';
        } else {
            brandText.style.display = 'none';
            logoImage.style.display = 'none';
        }
    });

    document.addEventListener('click', function (event) {
        const isClickInside = document.querySelector('.navbar-toggler').contains(event.target);
        if (!isClickInside) {
            document.getElementById('brandText').style.display = 'block';
            document.getElementById('logoImage').style.display = 'block';
        }
    });
</script>

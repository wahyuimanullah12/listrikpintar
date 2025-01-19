<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background: linear-gradient(to right, #17677B 20%, #179AB2 100%);">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://via.placeholder.com/40" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                wahyu
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="#" role="button">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Manfaatkan Layanan Online Kami</h1>
                <hr style="border-top: 5px solid #DAA520; width: 40%; margin: auto;">
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col text-center">
                <div class="btn-group" style="width: 80%;">
                    <button type="button" class="btn btn-primary btn-lg active" style="background-color: #17677B; border-radius: 0; font-size: 0.8em;" onclick="changeButtonColor(this)">Pendaftaran Baru</button>
                    <button type="button" class="btn btn-primary btn-lg" style="background-color: #17677B; border-radius: 0; font-size: 0.8em;" onclick="changeButtonColor(this)">Pengubahan Daya</button>
                    <button type="button" class="btn btn-primary btn-lg" style="background-color: #17677B; border-radius: 0; font-size: 0.8em;" onclick="changeButtonColor(this)">Pembayaran Tagihan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col text-center">
                <div id="paymentForm" style="display: none;">
                    <p>Untuk bayar tagihan dan isi token, maka tekan tombol ini:</p>
                    <button type="button" class="btn btn-primary btn-lg" style="background-color: #17677B; border-radius: 0; font-size: 0.8em;" onclick="bayarTagihan()">Bayar Tagihan</button>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function changeButtonColor(element) {
            var buttons = document.querySelectorAll('.btn-group button');
            buttons.forEach(button => {
                if (button === element) {
                    button.style.backgroundColor = '#179AB2';
                } else {
                    button.style.backgroundColor = '#17677B';
                }
            });
            if (element.textContent === 'Pembayaran Tagihan') {
                document.getElementById('paymentForm').style.display = 'block';
            } else {
                document.getElementById('paymentForm').style.display = 'none';
            }
        }
        function bayarTagihan() {
            // Kode untuk mengarahkan ke halaman pembayaran
            window.location.href = '/pembayaran';
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran Listrik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>
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
<body style="font-family: Arial, sans-serif; margin: 20px;">
    <div class="form-container" style="max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        <h2>Form Pembayaran Listrik</h2>
        <form id="paymentForm">
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="paymentOption" style="display: block; margin-bottom: 5px; font-weight: bold;">Jenis Listrik:</label>
                <select id="paymentOption" name="paymentOption" required style="width: 100%; padding: 8px; box-sizing: border-box;" onchange="toggleForm(this.value)">
                    <option value="">Pilih Opsi Meteran</option>
                    <option value="tagihan">Tagihan Listrik</option>
                    <option value="pulsa">Pulsa Listrik</option>
                </select>
            </div>
            <div id="billAmountContainer" class="form-group" style="margin-bottom: 15px; display: none;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Tagihan Listrik:</label>
                <div id="billAmount" class="result" style="padding: 10px; background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 5px;">Rp 0</div>
            </div>
            <div id="pulseAmountContainer" class="form-group" style="margin-bottom: 15px; display: none;">
                <label for="pulseAmount" style="display: block; margin-bottom: 5px; font-weight: bold;">Isi Pulsa Listrik:</label>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" id="manualPulseAmount" name="manualPulseAmount" placeholder="Isi Saldo" required style="width: 100%; padding: 8px; box-sizing: border-box;" onkeyup="formatCurrency(this, 'Rp')" min="30000" pattern="[3-9]\d|\d{5,}" onchange="togglePaymentMethod('transfer')">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="text" id="pulseAmount1" name="pulseAmount1" value="Rp 30.000" required style="width: 100%; padding: 8px; box-sizing: border-box;" readonly onclick="autoFill(this.value)">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="text" id="pulseAmount2" name="pulseAmount2" value="Rp 40.000" required style="width: 100%; padding: 8px; box-sizing: border-box;" readonly onclick="autoFill(this.value)">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="text" id="pulseAmount3" name="pulseAmount3" value="Rp 50.000" required style="width: 100%; padding: 8px; box-sizing: border-box;" readonly onclick="autoFill(this.value)">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="text" id="pulseAmount4" name="pulseAmount4" value="Rp 60.000" required style="width: 100%; padding: 8px; box-sizing: border-box;" readonly onclick="autoFill(this.value)">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="text" id="pulseAmount5" name="pulseAmount5" value="Rp 70.000" required style="width: 100%; padding: 8px; box-sizing: border-box;" readonly onclick="autoFill(this.value)">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="text" id="pulseAmount6" name="pulseAmount6" value="Rp 80.000" required style="width: 100%; padding: 8px; box-sizing: border-box;" readonly onclick="autoFill(this.value)">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="text" id="pulseAmount7" name="pulseAmount7" value="Rp 90.000" required style="width: 100%; padding: 8px; box-sizing: border-box;" readonly onclick="autoFill(this.value)">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="text" id="pulseAmount8" name="pulseAmount8" value="Rp 100.000" required style="width: 100%; padding: 8px; box-sizing: border-box;" readonly onclick="autoFill(this.value)">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="text" id="pulseAmount9" name="pulseAmount9" value="Rp 110.000" required style="width: 100%; padding: 8px; box-sizing: border-box;" readonly onclick="autoFill(this.value)">
                        </div>
                    </div>
                </div>
            </div>
            <div id="paymentMethodContainer" class="form-group" style="margin-bottom: 15px; display: none;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Pilih Metode Pembayaran:</label>
                <button type="button" id="paymentMethod" name="paymentMethod" required style="width: 100%; padding: 8px; box-sizing: border-box;" onclick="showMeterForm()">Metode Pembayaran</button>
            </div>
        </form>
    </div>
    <div id="meterFormContainer" style="display: none; max-width: 900px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        <h2>Form No Meteran dan Foto QR Code</h2>
        <form id="meterForm">
            <div class="row">
                <div class="col-6">
                    <div class="form-group" style="margin-bottom: 15px;">
                        <label for="meterNumber" style="display: block; margin-bottom: 5px; font-weight: bold;">No Meteran:</label>
                        <input type="text" id="meterNumber" name="meterNumber" required style="width: 100%; padding: 8px; box-sizing: border-box;">
                    </div>
                </div>
                <div class="col-6">
    <div class="form-group" style="margin-bottom: 15px;">
        <label for="camera" style="display: block; margin-bottom: 5px; font-weight: bold;">Scan Barcode:</label>
        <button type="button" id="openCameraButton" style="width: 100%; padding: 8px; box-sizing: border-box; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-camera" style="margin-right: 8px;"></i> Buka Kamera
        </button>
        <video id="camera" style="display: none; width: 100%; border: 1px solid #ddd; margin-top: 15px;" autoplay playsinline></video>
    </div>
</div>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 8px; box-sizing: border-box;">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleForm(paymentOption) {
            if (paymentOption === 'tagihan') {
                document.getElementById('billAmountContainer').style.display = 'block';
                document.getElementById('pulseAmountContainer').style.display = 'none'; // Tidak menampilkan Isi Pulsa Listrik jika memilih Tagihan Listrik
                document.getElementById('paymentMethodContainer').style.display = 'block';
            } else if (paymentOption === 'pulsa') {
                document.getElementById('billAmountContainer').style.display = 'none';
                document.getElementById('pulseAmountContainer').style.display = 'block';
                document.getElementById('paymentMethodContainer').style.display = 'block';
            } else {
                document.getElementById('billAmountContainer').style.display = 'none';
                document.getElementById('pulseAmountContainer').style.display = 'none';
                document.getElementById('paymentMethodContainer').style.display = 'none';
            }
        }

        function formatCurrency(element, currency) {
            let value = element.value;
            if (value.includes(currency)) {
                value = value.replace(currency, '');
            }
            element.value = currency + value.toLocaleString('id-ID', {minimumFractionDigits: 0, maximumFractionDigits: 0});
        }

        function autoFill(value) {
            document.getElementById('manualPulseAmount').value = value;
        }

        function showMeterForm() {
            document.getElementById('meterFormContainer').style.display = 'block';
        }
    </script>
    <script>
    const openCameraButton = document.getElementById('openCameraButton');
    const camera = document.getElementById('camera');

    openCameraButton.addEventListener('click', async () => {
        try {
            const stream = await navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } });
            camera.srcObject = stream;
            camera.style.display = 'block';
        } catch (error) {
            alert('Kamera tidak dapat diakses. Pastikan browser memiliki izin.');
            console.error(error);
        }
    });
</script>
</body>
</html>

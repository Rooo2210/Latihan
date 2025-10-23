<?php if(session_status()!=PHP_SESSION_ACTIVE) session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Syariah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="LATWEBJS.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    .star-rating {
      display: flex;
      flex-direction: row-reverse;
      gap: 5px;
      font-size: 3rem;
      justify-content: center;
      margin: 20px 0;
    }
    .star-rating input {
      display: none;
    }
    .star-rating label {
      cursor: pointer;
      color: #ddd;
      transition: all 0.3s ease;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }
    .star-rating label:hover,
    .star-rating label:hover ~ label {
      color: #ffc107;
      transform: scale(1.1);
    }
    .star-rating input:checked ~ label {
      color: #ffc107;
    }
    .star-rating label:active {
      transform: scale(0.95);
    }
    
    .rating-labels {
      display: flex;
      justify-content: space-between;
      font-size: 0.85rem;
      color: #666;
      margin-top: 10px;
    }
  </style>
</head>
<body>

<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#home">Hotel Syariah</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav nav-menu">
        <button id="themeToggle" class="btn btn-outline-warning ms-3 btn-glow">ðŸŒ™ Mode Gelap</button>
        <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- ================= HOME ================= -->
<section id="home" class="parallax">
  <div class="content text-center text-white py-5">
    <h1>Selamat Datang di Hotel Syariah</h1>
    <p>Tempat nyaman dengan suasana yang nyaman</p>
    <a href="#preview" class="btn btn-outline-warning btn-lg mt-3">Pesan Sekarang</a>
  </div>
</section>

<!-- ================= SERVICES ================= -->
<section id="services" class="py-5 bg-secondary text-white text-center">
  <div class="container">
    <h2 class="fw-bold mb-4">Layanan Kami</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="p-4 border rounded bg-dark">
          <h4>Kamar Nyaman</h4>
          <p>Kamar bersih dan nyaman untuk istirahat terbaik Anda.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 border rounded bg-dark">
          <h4>Restoran Halal</h4>
          <p>Menyajikan hidangan lezat dan sesuai syariah.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 border rounded bg-dark">
          <h4>Pelayanan 24 Jam</h4>
          <p>Staf kami siap membantu Anda kapan saja.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= BOOKING ================= -->
<section id="booking" class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Pesan Kamar Sekarang</h2>
    <form id="bookingForm" class="mx-auto shadow p-4 rounded bg-white" style="max-width: 600px;" action="simpan.php" method="post">
      <div class="mb-3">
        <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama Anda" required>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="checkin" class="form-label fw-semibold">Check-in</label>
          <input type="date" class="form-control" name="checkin" id="checkin" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="checkout" class="form-label fw-semibold">Check-out</label>
          <input type="date" class="form-control" name="checkout" id="checkout" required>
        </div>
      </div>
      <div class="mb-3">
        <label for="kelas" class="form-label fw-semibold">Pilih Kelas Kamar</label>
        <select id="kelas" name="kelas" class="form-select" required>
          <option value="">-- Pilih Kelas --</option>
          <option value="Standard">Standard</option>
          <option value="Deluxe">Deluxe</option>
          <option value="Suite">Suite</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="tamu" class="form-label fw-semibold">Jumlah Tamu</label>
        <input type="number" id="tamu" name="tamu" class="form-control" min="1" max="10" value="1" required>
      </div>
      <button type="submit" class="btn btn-warning w-100 fw-bold">Pesan Sekarang</button>
    </form>
  </div>
</section>

<!-- ================= PREVIEW KAMAR ================= -->
<section id="preview" class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Preview Kamar</h2>
    <div class="row g-4">
      
      <!-- Kamar Standard -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card shadow-sm border-0 h-100">
          <img src="std.jpg" class="card-img-top" alt="Kamar Standard">
          <div class="card-body">
            <h5 class="card-title fw-bold">Kamar Standard</h5>
            <p class="card-text">Kamar nyaman dengan fasilitas dasar dan harga terjangkau.</p>
            <p class="text-warning fw-bold">Rp350.000 / malam</p>
            <button class="btn btn-outline-warning">Pilih Ini</button>
          </div>
        </div>
      </div>

      <!-- Kamar Deluxe -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card shadow-sm border-0 h-100">
          <img src="dlx.jpg" class="card-img-top" alt="Kamar Deluxe">
          <div class="card-body">
            <h5 class="card-title fw-bold">Kamar Deluxe</h5>
            <p class="card-text">Ruang lebih luas, TV LED, dan pemandangan taman yang menenangkan.</p>
            <p class="text-warning fw-bold">Rp600.000 / malam</p>
            <button class="btn btn-outline-warning">Pilih Ini</button>
          </div>
        </div>
      </div>

      <!-- Kamar Suite -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
        <div class="card shadow-sm border-0 h-100">
          <img src="suite.jpg" class="card-img-top" alt="Kamar Suite">
          <div class="card-body">
            <h5 class="card-title fw-bold">Kamar Suite</h5>
            <p class="card-text">Kamar mewah dengan ruang tamu pribadi dan fasilitas premium.</p>
            <p class="text-warning fw-bold">Rp1.000.000 / malam</p>
            <button class="btn btn-outline-warning">Pilih Ini</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= RATING SECTION ================= -->
<section id="rating" class="py-5 bg-white">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Beri Rating Hotel Kami</h2>
    <div class="mx-auto shadow p-4 rounded bg-light" style="max-width: 600px;">
      <form id="ratingForm">
        <div class="mb-3">
          <label for="nama_rating" class="form-label fw-semibold">Nama Anda</label>
          <input type="text" class="form-control" id="nama_rating" name="nama_rating" placeholder="Masukkan nama Anda" required>
        </div>
        
        <div class="mb-4 text-center">
          <label class="form-label fw-semibold d-block mb-3">Bagaimana pengalaman Anda?</label>
          <div class="star-rating" id="starRating">
            <input type="radio" name="rating" value="5" id="star5" required>
            <label for="star5" title="Sangat Baik">â­</label>
            <input type="radio" name="rating" value="4" id="star4">
            <label for="star4" title="Baik">â­</label>
            <input type="radio" name="rating" value="3" id="star3">
            <label for="star3" title="Cukup">â­</label>
            <input type="radio" name="rating" value="2" id="star2">
            <label for="star2" title="Buruk">â­</label>
            <input type="radio" name="rating" value="1" id="star1">
            <label for="star1" title="Sangat Buruk">â­</label>
          </div>
          <div class="rating-labels">
            <span>Sangat Buruk</span>
            <span id="selectedRatingText" class="fw-bold text-warning"></span>
            <span>Sangat Baik</span>
          </div>
        </div>

        <div class="mb-3">
          <label for="komentar" class="form-label fw-semibold">Komentar (Opsional)</label>
          <textarea class="form-control" id="komentar" name="komentar" rows="3" placeholder="Berikan komentar Anda..."></textarea>
        </div>

        <button type="submit" class="btn btn-warning w-100 fw-bold">Kirim Rating</button>
      </form>
      
      <div id="ratingMessage" class="alert mt-3 d-none"></div>
      
      <div class="text-center mt-4">
        <h5>Rating Rata-rata: <span id="avgRating" class="text-warning fw-bold">0.0</span> / 5.0</h5>
        <p class="text-muted">Dari <span id="totalRatings">0</span> ulasan</p>
      </div>
    </div>
  </div>
</section>

<!-- ================= ABOUT ================= -->
<section id="about" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Tentang Kami</h2>
    <p class="mb-5">Hotel Syariah berkomitmen memberikan pelayanan terbaik dengan nilai-nilai islami.</p>
    <div class="about-chart mx-auto" style="max-width:600px;">
      <h3>Data Pengunjung Hotel per Bulan</h3>
      <canvas id="visitorChart" width="400" height="200"></canvas>
      <h3 class="mt-5">Tingkat Kepuasan Pengunjung</h3>
      <canvas id="satisfactionChart" width="400" height="200"></canvas>
    </div>
  </div>
</section>

<!-- ================= CONTACT ================= -->
<section id="contact" class="py-5 text-center bg-dark text-white">
  <div class="container">
    <h2 class="fw-bold mb-4">Hubungi Kami</h2>
    <div class="row justify-content-center">
      <div class="col-md-6 mb-4">
        <p>Alamat: Jl. Jlopo No.10, Sukoharjo</p>
        <p>Email: NanangGentolet@hotelsyariah.id | Telp: (0274) 555123</p>
      </div>

      <div class="col-md-6">
        <form action="simpan.php" method="post" class="mx-auto" style="max-width:420px;">
          <div class="mb-3 text-start">
            <label for="username" class="form-label text-white fw-semibold">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
          </div>

          <div class="mb-3 text-start">
            <label for="email_contact" class="form-label text-white fw-semibold">Email</label>
            <input type="email" name="email" id="email_contact" class="form-control" placeholder="contoh@domain.com" required>
          </div>

          <div class="mb-3 text-start">
            <label for="pesan" class="form-label text-white fw-semibold">Pesan</label>
            <textarea name="pesan" id="pesan" class="form-control" placeholder="Tulis pesan Anda..." rows="4" required></textarea>
          </div>

          <button type="submit" class="btn btn-warning w-100 fw-bold">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ================= FOOTER ================= -->
<footer class="text-center py-3 bg-secondary text-white">
  <p class="mb-0">&copy; 2025 Hotel Syariah. All Rights Reserved.</p>
</footer>

<!-- ================= SCRIPT ================= -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>

<script>
// Chart instances
let visitorChart, satisfactionChart;

// Function to load chart data
async function loadChartData() {
  try {
    const response = await fetch('get_chart_data.php');
    const data = await response.json();
    
    // Update visitor chart
    if (visitorChart) {
      visitorChart.data.labels = data.visitor.labels;
      visitorChart.data.datasets[0].data = data.visitor.data;
      visitorChart.update();
    } else {
      const ctxVisitor = document.getElementById('visitorChart').getContext('2d');
      visitorChart = new Chart(ctxVisitor, {
        type: 'bar',
        data: {
          labels: data.visitor.labels,
          datasets: [{
            label: 'Jumlah Pengunjung',
            data: data.visitor.data,
            backgroundColor: 'rgba(255, 193, 7, 0.6)',
            borderColor: 'rgba(255, 193, 7, 1)',
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true,
              ticks: {
                stepSize: 1
              }
            }
          }
        }
      });
    }
    
    // Update satisfaction chart
    if (satisfactionChart) {
      satisfactionChart.data.labels = data.rating.labels;
      satisfactionChart.data.datasets[0].data = data.rating.data;
      satisfactionChart.update();
    } else {
      const ctxSatisfaction = document.getElementById('satisfactionChart').getContext('2d');
      satisfactionChart = new Chart(ctxSatisfaction, {
        type: 'pie',
        data: {
          labels: data.rating.labels,
          datasets: [{
            data: data.rating.data,
            backgroundColor: [
              'rgba(220, 53, 69, 0.8)',
              'rgba(255, 193, 7, 0.8)',
              'rgba(13, 110, 253, 0.8)',
              'rgba(25, 135, 84, 0.8)',
              'rgba(111, 66, 193, 0.8)'
            ]
          }]
        },
        options: {
          responsive: true
        }
      });
    }
    
    // Update average rating display
    document.getElementById('avgRating').textContent = data.average_rating;
    document.getElementById('totalRatings').textContent = data.total_ratings;
    
  } catch (error) {
    console.error('Error loading chart data:', error);
  }
}

// Load initial data
loadChartData();

// Refresh charts every 5 seconds
setInterval(loadChartData, 5000);

// Handle rating form submission
document.getElementById('ratingForm').addEventListener('submit', async function(e) {
  e.preventDefault();
  
  const formData = new FormData(this);
  const messageDiv = document.getElementById('ratingMessage');
  
  try {
    const response = await fetch('simpan.php', {
      method: 'POST',
      body: formData
    });
    
    const result = await response.json();
    
    if (result.success) {
      messageDiv.className = 'alert alert-success mt-3';
      messageDiv.textContent = 'âœ… ' + result.message;
      messageDiv.classList.remove('d-none');
      this.reset();
      
      // Reset rating display
      document.getElementById('selectedRatingText').textContent = '';
      
      // Reload chart data immediately
      loadChartData();
      
      // Hide message after 3 seconds
      setTimeout(() => {
        messageDiv.classList.add('d-none');
      }, 3000);
    } else {
      messageDiv.className = 'alert alert-danger mt-3';
      messageDiv.textContent = 'âŒ ' + result.message;
      messageDiv.classList.remove('d-none');
    }
  } catch (error) {
    messageDiv.className = 'alert alert-danger mt-3';
    messageDiv.textContent = 'âŒ Terjadi kesalahan saat mengirim rating';
    messageDiv.classList.remove('d-none');
  }
});

// Handle star rating display
const ratingInputs = document.querySelectorAll('input[name="rating"]');
const ratingText = document.getElementById('selectedRatingText');
const ratingLabels = {
  '1': 'Sangat Buruk',
  '2': 'Buruk',
  '3': 'Cukup',
  '4': 'Baik',
  '5': 'Sangat Baik'
};

ratingInputs.forEach(input => {
  input.addEventListener('change', function() {
    ratingText.textContent = ratingLabels[this.value];
  });
});
</script>

<script src="script.js"></script>
<button id="toTop" title="Kembali ke atas">â¬†</button>

</body>
</html>
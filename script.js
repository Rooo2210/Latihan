/* ==============================
   FITUR WEB-JS
============================== */

// 1️⃣ Aktifkan item menu saat diklik
const navLinks = document.querySelectorAll('.nav-menu a');
navLinks.forEach(link => {
  link.addEventListener('click', () => {
    navLinks.forEach(l => l.classList.remove('active'));
    link.classList.add('active');
  });
});

// 2️⃣ Scroll otomatis ke section (auto scroll smooth)
document.querySelectorAll('.nav-menu a').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      window.scrollTo({
        top: target.offsetTop - 70,
        behavior: 'smooth'
      });
    }
  });
});

// 3️⃣ ChartJS di About Section
const ctx = document.getElementById('visitorChart').getContext('2d');
const visitorChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
    datasets: [{
      label: 'Jumlah Pengunjung',
      data: [120, 180, 150, 200, 240, 190],
      backgroundColor: 'rgba(255, 193, 7, 0.7)', // warna kuning Bootstrap
      borderColor: '#ffc107',
      borderWidth: 1,
      borderRadius: 6
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { display: true, labels: { color: '#333' } },
      title: { display: true, text: 'Statistik Pengunjung Hotel 2025' }
    },
    scales: {
      y: { beginAtZero: true }
    }
  }
});
/* ==============================
   FITUR TAMBAHAN (Web-JS Upgrade)
============================== */

// 4️⃣ Grafik Pie Chart (Kepuasan)
const ctx2 = document.getElementById('satisfactionChart').getContext('2d');
const satisfactionChart = new Chart(ctx2, {
  type: 'pie',
  data: {
    labels: ['Sangat Puas', 'Puas', 'Cukup', 'Kurang'],
    datasets: [{
      label: 'Tingkat Kepuasan (%)',
      data: [55, 30, 10, 5],
      backgroundColor: [
        'rgba(255, 193, 7, 0.8)',   // kuning
        'rgba(40, 167, 69, 0.8)',   // hijau
        'rgba(23, 162, 184, 0.8)',  // biru
        'rgba(220, 53, 69, 0.8)'    // merah
      ],
      borderColor: '#fff',
      borderWidth: 2
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'bottom' },
      title: { display: true, text: 'Persentase Kepuasan Pengunjung' }
    }
  }
});


// 5️⃣ Dark/Light Mode Toggle
const toggleBtn = document.getElementById('themeToggle');
const body = document.body;

// cek localStorage biar mode-nya tersimpan
if (localStorage.getItem('theme') === 'dark') {
  body.classList.add('dark-mode');
  toggleBtn.textContent = '☀️ Mode Terang';
}

toggleBtn.addEventListener('click', () => {
  body.classList.toggle('dark-mode');

  if (body.classList.contains('dark-mode')) {
    toggleBtn.textContent = '☀️ Mode Terang';
    localStorage.setItem('theme', 'dark');
  } else {
    toggleBtn.textContent = '🌙 Mode Gelap';
    localStorage.setItem('theme', 'light');
  }
});
// === REVEAL ANIMATION ON SCROLL ===
window.addEventListener("scroll", () => {
  const reveals = document.querySelectorAll(".reveal");
  for (let r of reveals) {
    const windowHeight = window.innerHeight;
    const revealTop = r.getBoundingClientRect().top;
    if (revealTop < windowHeight - 100) {
      r.classList.add("active");
    }
  }
});

// === BACK TO TOP BUTTON ===
const toTop = document.getElementById("toTop");
window.onscroll = () => {
  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400)
    toTop.style.display = "block";
  else toTop.style.display = "none";
};

toTop.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// === SISTEM BOOKING ===
const form = document.getElementById("bookingForm");
const msg = document.getElementById("bookingMessage");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const nama = document.getElementById("nama").value;
  const checkin = document.getElementById("checkin").value;
  const checkout = document.getElementById("checkout").value;
  const kelas = document.getElementById("kelas").value;
  const tamu = document.getElementById("tamu").value;

  if (!nama || !checkin || !checkout || !kelas || !tamu) {
    alert("⚠️ Harap isi semua data dengan benar!");
    return;
  }

  // Simulasi penyimpanan booking
  msg.classList.remove("d-none");
  msg.textContent = `✅ Terima kasih ${nama}, pemesanan kamar ${kelas} untuk ${tamu} tamu dari ${checkin} hingga ${checkout} telah kami terima!`;

  // Reset form
  form.reset();

  // Sembunyikan pesan otomatis
  setTimeout(() => {
    msg.classList.add("d-none");
  }, 5000);
});

// === FITUR PILIH KAMAR ===
document.querySelectorAll(".pilihKamar").forEach(btn => {
  btn.addEventListener("click", () => {
    const kelas = btn.getAttribute("data-kelas");
    document.getElementById("kelas").value = kelas;

    // Scroll otomatis ke form booking
    document.getElementById("booking").scrollIntoView({ behavior: "smooth" });

    // Notifikasi kecil
    alert(`Kelas kamar "${kelas}" telah dipilih! Silakan lanjut isi tanggal dan data Anda.`);
  });
});


@extends('layouts.app')

@section('content')
<style>
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes gradientShift {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
}

.projects-wrapper {
    min-height: 100vh;
    background: linear-gradient(-45deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #4facfe 75%, #00f2fe 100%);
    background-size: 400% 400%;
    animation: gradientShift 15s ease infinite;
    padding: 80px 20px;
    position: relative;
    overflow: hidden;
}

.projects-wrapper::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 20% 30%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(255,255,255,0.1) 0%, transparent 50%);
    pointer-events: none;
}

.projects {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    position: relative;
    z-index: 1;
}

.projects-header {
    margin-bottom: 60px;
    animation: fadeInUp 0.8s ease;
}

.projects-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 25px;
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(10px);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    border: 2px solid rgba(255, 255, 255, 0.3);
    animation: float 3s ease-in-out infinite;
}

.projects-icon svg {
    width: 40px;
    height: 40px;
    fill: white;
}

.projects h2 {
    color: white;
    font-size: 42px;
    font-weight: 800;
    margin-bottom: 15px;
    text-shadow: 2px 2px 20px rgba(0,0,0,0.2);
}

.projects-subtitle {
    color: rgba(255, 255, 255, 0.9);
    font-size: 18px;
    max-width: 600px;
    margin: 0 auto;
    text-shadow: 1px 1px 10px rgba(0,0,0,0.1);
}

.project-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.project-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border-radius: 25px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    padding: 40px 30px;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
    cursor: pointer;
    border: 1px solid rgba(255, 255, 255, 0.3);
    animation: fadeInUp 0.8s ease;
}

.project-card:nth-child(1) { animation-delay: 0.1s; }
.project-card:nth-child(2) { animation-delay: 0.2s; }
.project-card:nth-child(3) { animation-delay: 0.3s; }
.project-card:nth-child(4) { animation-delay: 0.4s; }

.project-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 6px;
    background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
    transition: height 0.3s ease;
}

.project-card:hover::before {
    height: 100%;
    opacity: 0.1;
}

.project-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 20px 50px rgba(0,0,0,0.25);
}

.project-icon {
    width: 60px;
    height: 60px;
    margin: 0 auto 20px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
    transition: transform 0.3s ease;
}

.project-card:hover .project-icon {
    transform: scale(1.1) rotate(5deg);
}

.project-card h3 {
    color: #2d3748;
    font-size: 24px;
    margin-bottom: 15px;
    font-weight: 700;
}

.project-card p {
    color: #5f6b7a;
    font-size: 16px;
    line-height: 1.7;
    margin-bottom: 20px;
}

.project-tags {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
}

.tag {
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
    color: #667eea;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    border: 1px solid rgba(102, 126, 234, 0.2);
}

.project-card .year {
    display: inline-block;
    margin-top: 15px;
    font-size: 14px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 8px 18px;
    border-radius: 50px;
    font-weight: 600;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
}

/* ===== MODAL ===== */
.modal {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.7);
    backdrop-filter: blur(8px);
    justify-content: center;
    align-items: center;
    animation: fadeIn 0.3s ease;
    padding: 20px;
}

.modal-content {
    background: white;
    border-radius: 30px;
    padding: 50px 40px;
    max-width: 700px;
    width: 100%;
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    position: relative;
    animation: slideUp 0.4s ease;
    max-height: 90vh;
    overflow-y: auto;
}

.modal-content h3 {
    background: linear-gradient(135deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-size: 32px;
    font-weight: 800;
    margin-bottom: 20px;
}

.modal-content .meta {
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
    border-radius: 15px;
    padding: 15px 20px;
    font-size: 15px;
    color: #2d3748;
    margin-bottom: 25px;
    border-left: 4px solid #667eea;
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
}

.modal-content p {
    color: #4a5568;
    line-height: 2;
    font-size: 16px;
}

.close-btn {
    position: absolute;
    top: 20px;
    right: 25px;
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
}

.close-btn:hover {
    transform: rotate(90deg) scale(1.1);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
}

.modal-features {
    margin-top: 25px;
    padding: 20px;
    background: rgba(102, 126, 234, 0.05);
    border-radius: 15px;
}

.modal-features h4 {
    color: #667eea;
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 15px;
}

.modal-features ul {
    list-style: none;
    padding: 0;
}

.modal-features li {
    color: #4a5568;
    padding: 8px 0;
    padding-left: 25px;
    position: relative;
}

.modal-features li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #667eea;
    font-weight: bold;
}

/* ===== ANIMATIONS ===== */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from {
        transform: translateY(50px) scale(0.95);
        opacity: 0;
    }
    to {
        transform: translateY(0) scale(1);
        opacity: 1;
    }
}

/* Responsive */
@media (max-width: 768px) {
    .projects h2 {
        font-size: 32px;
    }
    
    .project-grid {
        grid-template-columns: 1fr;
    }
    
    .modal-content {
        padding: 35px 25px;
        border-radius: 20px;
    }
    
    .modal-content h3 {
        font-size: 26px;
    }
}
</style>

<div class="projects-wrapper">
    <div class="projects">
        <div class="projects-header">
            <div class="projects-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20 6h-4V4c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zM10 4h4v2h-4V4zm10 15H4V8h16v11z"/>
                    <path d="M9 13h6v2H9zm0 3h6v2H9z"/>
                </svg>
            </div>
            <h2>Proyek Saya</h2>
            <p class="projects-subtitle">Koleksi proyek yang telah saya kerjakan dengan dedikasi dan passion</p>
        </div>

        <div class="project-grid">
            <div class="project-card" onclick="openModal('modal1')">
                <div class="project-icon">🏦</div>
                <h3>Manajemen Koperasi Mahasiswa</h3>
                <p>Aplikasi pengelolaan koperasi mahasiswa berbasis C++ dengan sistem data anggota dan transaksi.</p>
                <div class="project-tags">
                    <span class="tag">C++</span>
                    <span class="tag">OOP</span>
                    <span class="tag">File Management</span>
                </div>
                <span class="year">2025</span>
            </div>

            <div class="project-card" onclick="openModal('modal2')">
                <div class="project-icon">🚀</div>
                <h3>Gerak Peluru OOP</h3>
                <p>Simulasi lintasan peluru berbasis OOP dengan perhitungan fisika yang akurat.</p>
                <div class="project-tags">
                    <span class="tag">C++</span>
                    <span class="tag">OOP</span>
                    <span class="tag">Physics</span>
                </div>
                <span class="year">2025</span>
            </div>

            <div class="project-card" onclick="openModal('modal3')">
                <div class="project-icon">⏰</div>
                <h3>Jam Plus Minus</h3>
                <p>Program operasi waktu berbasis OOP dengan fitur tambah/kurang presisi tinggi.</p>
                <div class="project-tags">
                    <span class="tag">C++</span>
                    <span class="tag">OOP</span>
                    <span class="tag">Operator Overload</span>
                </div>
                <span class="year">2025</span>
            </div>

            <div class="project-card" onclick="openModal('modal4')">
                <div class="project-icon">🏨</div>
                <h3>Website Hotel Syariah</h3>
                <p>Website reservasi kamar hotel modern berbasis Laravel dengan fitur lengkap.</p>
                <div class="project-tags">
                    <span class="tag">Laravel</span>
                    <span class="tag">MySQL</span>
                    <span class="tag">Bootstrap</span>
                </div>
                <span class="year">2025</span>
            </div>
        </div>
    </div>
</div>

<!-- ===== MODALS DETAIL ===== -->

<div class="modal" id="modal1">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal1')">&times;</span>
        <h3>Manajemen Koperasi Mahasiswa</h3>
        <div class="meta">
            <span class="meta-item">📅 Tahun: 2025</span>
            <span class="meta-item">💻 Bahasa: C++</span>
            <span class="meta-item">👥 Jenis: Individual</span>
        </div>
        <p>
            Aplikasi ini dibuat untuk membantu pengelolaan data anggota, simpanan, dan pinjaman dalam koperasi mahasiswa.
            Menggunakan konsep OOP (Object-Oriented Programming) serta file management untuk menyimpan transaksi secara otomatis.
            Proyek ini menekankan efisiensi data dan struktur kode yang modular.
        </p>
        <div class="modal-features">
            <h4>Fitur Utama:</h4>
            <ul>
                <li>Manajemen data anggota koperasi</li>
                <li>Sistem simpanan dan pinjaman</li>
                <li>File management untuk persistensi data</li>
                <li>Struktur kode modular dengan OOP</li>
            </ul>
        </div>
    </div>
</div>

<div class="modal" id="modal2">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal2')">&times;</span>
        <h3>Gerak Peluru OOP</h3>
        <div class="meta">
            <span class="meta-item">📅 Tahun: 2025</span>
            <span class="meta-item">💻 Bahasa: C++</span>
            <span class="meta-item">👥 Jenis: Individual</span>
        </div>
        <p>
            Proyek ini mensimulasikan gerak peluru berdasarkan hukum fisika.
            Program menggunakan class untuk perhitungan kecepatan, sudut, dan jarak maksimum, serta menampilkan lintasan peluru.
            Tujuan proyek ini adalah memahami penerapan konsep OOP dalam simulasi ilmiah.
        </p>
        <div class="modal-features">
            <h4>Fitur Utama:</h4>
            <ul>
                <li>Simulasi lintasan peluru berdasarkan fisika</li>
                <li>Perhitungan kecepatan dan sudut</li>
                <li>Visualisasi trajectory peluru</li>
                <li>Implementasi OOP untuk simulasi saintifik</li>
            </ul>
        </div>
    </div>
</div>

<div class="modal" id="modal3">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal3')">&times;</span>
        <h3>Jam Plus Minus</h3>
        <div class="meta">
            <span class="meta-item">📅 Tahun: 2025</span>
            <span class="meta-item">💻 Bahasa: C++</span>
            <span class="meta-item">👥 Jenis: Individual</span>
        </div>
        <p>
            Program ini mengelola data waktu dalam format jam, menit, dan detik dengan kemampuan melakukan operasi penambahan dan pengurangan.
            Dibangun menggunakan konsep class dan operator overloading untuk hasil presisi tinggi.
        </p>
        <div class="modal-features">
            <h4>Fitur Utama:</h4>
            <ul>
                <li>Operasi penambahan dan pengurangan waktu</li>
                <li>Format jam, menit, dan detik</li>
                <li>Operator overloading untuk operasi presisi</li>
                <li>Validasi input waktu otomatis</li>
            </ul>
        </div>
    </div>
</div>

<div class="modal" id="modal4">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal4')">&times;</span>
        <h3>Website Hotel Syariah</h3>
        <div class="meta">
            <span class="meta-item">📅 Tahun: 2025</span>
            <span class="meta-item">💻 Framework: Laravel</span>
            <span class="meta-item">👥 Jenis: Kelompok</span>
        </div>
        <p>
            Website reservasi hotel dengan tampilan modern, terdiri dari halaman rooms, booking, dan kontak.
            Menggunakan Laravel Blade, Bootstrap, dan database MySQL.
            Proyek ini menampilkan penerapan full-stack pengembangan web secara kolaboratif.
        </p>
        <div class="modal-features">
            <h4>Fitur Utama:</h4>
            <ul>
                <li>Sistem reservasi kamar online</li>
                <li>Manajemen data kamar dan booking</li>
                <li>Interface modern dan responsive</li>
                <li>Integrasi database MySQL</li>
                <li>Kolaborasi tim dalam pengembangan</li>
            </ul>
        </div>
    </div>
</div>

<script>
function openModal(id) {
    document.getElementById(id).style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeModal(id) {
    document.getElementById(id).style.display = 'none';
    document.body.style.overflow = 'auto';
}

window.onclick = function(event) {
    const modals = document.querySelectorAll('.modal');
    modals.forEach(modal => {
        if (event.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
}

// Close modal dengan ESC key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        const modals = document.querySelectorAll('.modal');
        modals.forEach(modal => {
            modal.style.display = 'none';
        });
        document.body.style.overflow = 'auto';
    }
});
</script>
@endsection